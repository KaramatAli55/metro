({
    className: 'my-view tcenter',

    reportdata:[],
   
    initialize: function (options) {
         self = this;
        this._super("initialize", [options]);
        var url = app.api.buildURL('getcustomreportdata');
        app.api.call('read', url, null,  {
            success: function (data) {
                self.reportdata = JSON.parse(data);
                 self.render();
            },
            error: function (e) {
                throw e;
            }
        });

    },
})