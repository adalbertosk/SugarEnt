({
    events: {
        'click [name=cancel_button]': 'closeDrawer',
        'click [name=save_button]': 'confirmDrawer',
    },

    initialize: function (view) {
        this._super('initialize', arguments);
        var ctx = this.context;
        this.title = ctx.get('title');
    },

    confirmDrawer: function () {
        //        this.model.set('reject_reason_c', rejected_reason.value);

        post_data = { 'id': this.model.get('id') };
        reject_data = { 'reason': rejected_reason.value };

        var url = app.api.buildURL("Reject/Post", null , post_data, {});
        app.api.call('update', url, reject_data, {
            success: _.bind(function (response) {
                app.router.refresh();
            }, this),
            error: _.bind(function (error) {
                console.log("Error", error)
            }, this),
        });

        app.drawer.close();
    },
    closeDrawer: function () {
        app.drawer.close();
    }
})