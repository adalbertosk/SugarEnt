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
 * @class View.Views.Base.Meetings.ActivityCardHeaderView
 * @alias SUGAR.App.view.views.BaseMeetingsActivityCardHeaderView
 * @extends View.Views.Base.ActivityCardHeaderView
 */
({
    extendsFrom: 'ActivityCardHeaderView',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        this.setUsersFields();
    },

    /**
     * @inheritdoc
     *
     * Do not set user fields as that will be set after activity fetch
     */
    setUsersPanel: function() {
        this.setUsersTemplate();
    },

    /**
     * @inheritdoc
     */
    setUsersFields: function() {
        this.setInvitees();
    }
})
