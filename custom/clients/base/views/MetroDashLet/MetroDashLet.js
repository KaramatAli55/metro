
({
    plugins: ['Dashlet'],
    baseUrl:null,
    initialize: function (options) {
         this.baseUrl=app.config.siteUrl || (window.location.origin || ieOrigin) + window.location.pathname;
        this._super("initialize", [options]);
    },
})
