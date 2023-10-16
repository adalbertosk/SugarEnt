({

    extendsFrom: 'EnumField',
    initialize: function(opts){
        this._super('initialize',[opts]);
    },

_query: function (query) {
        var options = _.isString(this.items) ?  app.lang.getAppListStrings(this.items) : this.items;
        var data = {
            results: [],
            // Only show one "page" of results
            more: false
        };
        var self = this;
 
        if (_.isObject(options)) {
            _.each(options, function (element, index) {
                var text = "" + element;
                // Additionally filter results based on query term
                if (query.matcher(query.term, text)) {
                    // If dropdown name is "segmentation"
                    // use alternative method to set options
                    if (self.name == 'sales_stage') {
                        // Disabled attribute is main feature
                        // It is processed by custom method
                        data.results.push({id: index, 
                                 text: text, 
                                 disabled: self.setListItemActive(text)});
                    } else {
                        data.results.push({id: index, 
                                           text: text});
                    }
                }
            });
        } else {
            options = null;
        }
        query.callback(data);
    },

    setListItemActive: function(text) {
        // Don't block option by default
        var disabled = false;
 
        // Determine value relying on business rules
 if (this.model.get('approved_c') == false && text == 'Closed Won') 
                        {
     disabled = true;
 } else {
     disabled = false;
 }
 
        // Return bool value
        return disabled;
    }
})