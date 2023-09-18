({
    extendsFrom: 'CreateView',

    initialize: function(options) {
        this._super('initialize', [options]);

        this.model.addValidationTask('check_new_code_c', _.bind(this._doValidateNewField, this));

    },

    _doValidateNewField: function(fields, errors, callback) {
        if (this.model.get('new_code_c') == 'TEST' && _.isEmpty(this.model.get('new_code2_c')))
        {
            errors['new_code2_c'] = errors['new_code2_c'] || {};
            errors['new_code2_c'].required = true;
        }
        callback(null, fields, errors);
    }
})