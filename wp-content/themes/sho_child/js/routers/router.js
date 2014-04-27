app = {
    models: {},
    views: {},
    collections: {},
    routers: {},
    init: function() {
        //directory = new app.views.Movements(directoryData);
        directory = new app.views.Movements();
        //FIXME: how do you pull the data in?

        //handle url routing for filters
        //perhaps remove if multiple simultaneous filters are allowed
        //or search works in conjunction with filter
        //appRouter = new app.routers.Router();
        Backbone.history.start();
    }
}

//app.routers.Router = Backbone.Router.extend({
//
//    routes: {
//        'filter/:type':'urlFilter'
//    },
//
//urlFilter: function(type){
//    directory.filterType = type;
//    directory.trigger('change:filterType');
//}
//
//});
