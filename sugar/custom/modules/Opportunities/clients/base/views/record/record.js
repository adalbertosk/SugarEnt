({
    extendsFrom: 'OpportunitiesRecordView',

    initialize: function(options) {
        this._super('initialize', [options]);

        this.context.on('button:approval_button:click', this.approval, this);
        this.context.on('button:approve_button:click', this.approve, this);
        this.context.on('button:reject_button:click', this.reject, this);
    },

    approval: function() {

    },

    approve: function() {

    },

    reject: function() {

    }
})