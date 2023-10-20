({
    extendsFrom: 'OpportunitiesRecordView',

    initialize: function(options) {
        this._super('initialize', [options]);
        this.context.on('button:edit_button:click', this._toggleApprovalButton, this);
        this.context.on('button:approval_button:click', this.approval, this);
        this.context.on('button:approve_button:click', this.approve, this);
        this.context.on('button:reject_button:click', this.reject, this);
    },

    _toggleApprovalButton: function() {
        var approvalButton = this.getField('approval_button');
        if(approvalButton !== undefined){
            if(this.model.get('sales_stage') === 'Qualification' && 
            this.model.get('approval_status_c') !== 'A'){
                approvalButton.show();
            } else {
                approvalButton.hide();
            }
        }
        var userId = SUGAR.App.user.get('id');
        var approveButton = this.getField('approve_button');
        if(approveButton !== undefined){
            if(this.model.get('approver_c') === app.user.attributes.user_name && 
            this.model.get('approval_status_c') !== 'A'){
                approveButton.show();
            } else {
                approveButton.hide();
            }
        }
/*         var rejectButton = this.getField('reject_button');
        if(rejectButton !== undefined){
            if(this.model.get('approver_c') === app.user.attributes.user_name && 
            this.model.get('approval_status_c') !== 'A'){
                rejectButton.show();
            } else {
                rejectButton.hide();
            }
        } */
    },

    approval: function() {
        this.model.set('approval_status_c', 'W');
    },

    approve: function() {
        this.model.set('approval_status_c', 'A');
        this.model.set('approved_c', true);
    },

    reject: function() {
        var self = this;
        app.drawer.open({
            layout: 'reject_popup',
            context: {
                model: this.model,
                title: 'IFrame Drawer'
            },
        },
        function() {
            console.log(self.model);
            alert ('Drawer closed');
        });
//        this.model.set('approval_status_c', 'R');
    }
})