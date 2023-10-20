({
/*    className: 'reject_popup'
     cubeOptions: {
        spin: false
    },
    events: {
        'click .sugar-cube': 'spinCube'
    },
    spinCube: function() {
        this.cubeOptions.spin = !this.cubeOptions.spin;
        this.render();
    }
 */
    events: {
        'click [name=cancel_button]': 'closeDrawer',
        'click [name=confirm_button]': 'confirmDrawer',
    },

    initialize: function(view) {
        this._super('initialize', arguments);
        var ctx = this.context;
        this.title = ctx.get('title');
    },

    confirmDrawer: function() {
        this.model.set('reject_reason_c', reject_reason.value);
        app.drawer.close();
    },
    closeDrawer: function(){
        app.drawer.close();
    }
})