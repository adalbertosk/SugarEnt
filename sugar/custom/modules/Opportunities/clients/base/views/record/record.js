({
    extendsFrom: 'OpportunitiesRecordView',

    initialize: function(options) {
        this._super('initialize', [options]);
        this.model.on('change:sales_stage', this._toggleApprovalButton, this);
/*         if(this.model.get('sales_stage') === 'Qualification' &&
           this.model.get('approval_status_c') !== 'A'){
            this.$('div[data-name=approval_button]').show();
        } else {
            this.$('div[data-name=approval_button]').hide();
        }
 */
        this.context.on('button:approval_button:click', this.approval, this);
        this.context.on('button:approve_button:click', this.approve, this);
        this.context.on('button:reject_button:click', this.reject, this);
    },

    _toggleApprovalButton: function() {
        var button = this.getField('approval_button');

        if(this.model.get('sales_stage') === 'Qualification' && 
            this.model.get('approval_status_c') !== 'A'){
//                this.$('div[data-name=approval_button]').show();
//            button.setDisabled(false);
            } else {
//                this.$('div[data-name=approval_button]').hide();
//            button.setDisabled(true);
            }
    },

    approval: function() {
        this.model.set('approval_status_c', 'W');
    },

    approve: function() {
        this.model.set('approval_status_c', 'A');
        this.model.set('approved_c', true);
    },

    reject: function() {
        this.model.set('approval_status_c', 'R');
    }
})