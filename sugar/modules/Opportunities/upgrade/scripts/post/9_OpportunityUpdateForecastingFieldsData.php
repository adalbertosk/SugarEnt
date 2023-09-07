<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

use Doctrine\DBAL\Connection;

/**
 * Update fields that have been modified to be calculated.
 */
class SugarUpgradeOpportunityUpdateForecastingFieldsData extends UpgradeScript
{
    public $order = 9000;
    public $type = self::UPGRADE_DB;

    /**
     * @inheritdoc
     */
    public function run()
    {
        if (version_compare($this->from_version, '12.1.0', '<')) {
            if (Opportunity::usingRevenueLineItems()) {
                $this->updateRevenueLineItems();
                $this->updateOpportunitiesWithRlis();
            } else {
                $this->updateOpportunitiesWithoutRlis();
            }
        }
    }

    /**
     * Updates the forecasted_likely field on all RevenueLineItems records
     *
     * @throws \Doctrine\DBAL\Exception
     */
    protected function updateRevenueLineItems()
    {
        $includedCommitStages = Forecast::getSettings()['commit_stages_included'] ?? ['include'];

        $query = $this->db->getConnection()->createQueryBuilder();
        $commitStages = $query->createPositionalParameter($includedCommitStages, Connection::PARAM_STR_ARRAY);

        $query->update('revenue_line_items')
            ->set('forecasted_likely', "(CASE WHEN commit_stage IN ($commitStages)  THEN likely_case ELSE 0 END)")
            ->execute();
    }

    /**
     * Updates the lost and forecasted_likely fields on all Opportunities records based on their related
     * Revenue Line Items
     *
     * @throws \Doctrine\DBAL\Exception
     */
    protected function updateOpportunitiesWithRlis()
    {
        $query = $this->db->getConnection()->createQueryBuilder();

        // Build the subquery to get the Lost value for the Opportunity
        $closedLostSalesStages = Forecast::getSettings()['sales_stage_lost'] ?? [Opportunity::STAGE_CLOSED_LOST];
        $lostSubquery = $this->db->getConnection()->createQueryBuilder();
        $lostSubquery->select([
            'COALESCE(SUM(likely_case / revenue_line_items.base_rate), 0) * opportunities.base_rate',
        ])
            ->from('revenue_line_items')
            ->where($lostSubquery->expr()->eq('opportunity_id', 'opportunities.id'))
            ->andWhere($lostSubquery->expr()->in(
                'sales_stage',
                $query->createPositionalParameter($closedLostSalesStages, Connection::PARAM_STR_ARRAY)
            ));

        // Build the subquery to get the Forecasted Likely value for the Opportunity
        $forecastedLikelySubquery = $this->db->getConnection()->createQueryBuilder();
        $forecastedLikelySubquery->select([
            'COALESCE(SUM(forecasted_likely / revenue_line_items.base_rate), 0) * opportunities.base_rate',
        ])
            ->from('revenue_line_items')
            ->where($forecastedLikelySubquery->expr()->eq('opportunity_id', 'opportunities.id'));

        $query->update('opportunities')
            ->set('lost', '(' . $lostSubquery->getSQL() . ')')
            ->set('forecasted_likely', '(' . $forecastedLikelySubquery->getSQL() . ')')
            ->execute();
    }

    /**
     * Updates the lost and forecasted_likely fields on all Opportunities records
     *
     * @throws \Doctrine\DBAL\Exception
     */
    protected function updateOpportunitiesWithoutRlis()
    {
        $closedLostSalesStages = Forecast::getSettings()['sales_stage_lost'] ?? [Opportunity::STAGE_CLOSED_LOST];
        $includedCommitStages = Forecast::getSettings()['commit_stages_included'] ?? ['include'];

        $query = $this->db->getConnection()->createQueryBuilder();
        $salesStagesSQL = $query->createPositionalParameter($closedLostSalesStages, Connection::PARAM_STR_ARRAY);
        $commitStagesSQL = $query->createPositionalParameter($includedCommitStages, Connection::PARAM_STR_ARRAY);

        $query->update('opportunities')
            ->set('lost', "(CASE WHEN sales_stage IN ($salesStagesSQL)  THEN amount ELSE 0 END)")
            ->set('forecasted_likely', "(CASE WHEN commit_stage IN ($commitStagesSQL)  THEN amount ELSE 0 END)");
        $query->execute();
    }
}
