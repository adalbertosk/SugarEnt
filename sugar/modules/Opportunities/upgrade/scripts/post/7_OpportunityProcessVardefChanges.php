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

/**
 * Update Opportunity layouts and vardefs for fields that have been modified to be calculated.
 */
class SugarUpgradeOpportunityProcessVardefChanges extends UpgradeScript
{
    public $order = 7050;
    public $type = self::UPGRADE_CUSTOM;

    public function run()
    {
        if ($this->toFlavor('ent') &&
            version_compare($this->from_version, '12.1.0', '<')
        ) {
            $oppsConverter = Opportunity::usingRevenueLineItems() ?
                new OpportunityWithRevenueLineItem() :
                new OpportunityWithOutRevenueLineItem();

            // Update the field vardefs to account for updated formulas
            $oppsConverter->processFields();
        }
    }
}
