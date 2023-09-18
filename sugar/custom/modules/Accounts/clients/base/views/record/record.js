({
    extendsFrom: 'AccountsRecordView',

    initialize: function(options) {
        this._super('initialize', [options]);
        this.model.addValidationTask('check_new_code_c', _.bind(this._doValidateNewField, this));

//        this.events['change [name=name]'] = 'addCharToWebsite';
        this.model.on('change:name', this._addCharToWebsite, this);
        this.model.on('change:custom_status', this._setCompleted, this);
    },

    _doValidateNewField: function(fields, errors, callback) {
        if (this.model.get('new_code_c') == 'TEST' && _.isEmpty(this.model.get('new_code2_c')))
        {
            errors['new_code2_c'] = errors['new_code2_c'] || {};
            errors['new_code2_c'].required = true;
        }
        callback(null, fields, errors);
    },

    _addCharToWebsite: function () {
        var websiteValue = this.model.get('website');
        const result = Math.random().toString(36).substring(2,3);
        websiteValue += result;
        this.model.set('website', websiteValue);
    },

    _setCompleted: function () {
        post_data = {'id': 'da751ef4-562e-11ee-82a5-0800279be312'};

        var url = app.api.buildURL("Completed/Value", null, post_data, {
      //  "da751ef4-562e-11ee-82a5-0800279be312", {
            //user this part if you need to define filters
            // "filter": [{
            //     "psc": "3"
            // }]
        });
        console.log(url);        
        app.api.call('read', url, null, {
            success: _.bind(function(response) {
                // here is your success code
                console.log("Response", response)
            }, this),
            error: _.bind(function(error) {
                // here is your error code
                console.log("Error", error)
            }, this),
        });
    }
})