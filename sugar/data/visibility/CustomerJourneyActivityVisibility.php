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
 * Class CustomerJourneyActivityVisibility
 *
 * Additional visibility check for Customer Journey activity modules.
 * i.e. Calls, Meetings and Tasks
 */
class CustomerJourneyActivityVisibility extends SugarVisibility
{
    /**
     * Records related to Customer Journey modules must be visible for
     * users having Automate license
     *
     * @inheritdoc
     */
    public function addVisibilityQuery(SugarQuery $query, $options = [])
    {
        if (!hasAutomateLicense()) {
            $alias = $this->getOption('table_alias');

            if (empty($alias)) {
                $alias = $this->bean->getTableName();
            }

            $where = "{$alias}.dri_workflow_id IS NULL AND {$alias}.dri_workflow_template_id IS NULL" .
                " AND {$alias}.dri_subworkflow_id IS NULL AND {$alias}.dri_subworkflow_template_id IS NULL" .
                " AND {$alias}.dri_workflow_task_template_id IS NULL";

            $query->where()->queryAnd()->addRaw($where);
        }

        return $query;
    }
}
