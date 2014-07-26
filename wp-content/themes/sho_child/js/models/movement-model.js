app = app || {};

app.models.Movement = Backbone.Model.extend({
    defaults: {
        "ID": "",
    "thumbnail_url": "",
    "title": "",
    "name": "",
    "permalink": "",
    "apparatus": "",
    "movement_function": "",
    "level": ""
    },

    initialize: function(){
        var self = this;
        //if(this.get('parent') !== ''){
        //    self.set('type','student');
        //}else{
        //    self.set('type','parent');
        //}
    }

});

app.collections.Movements = Backbone.Collection.extend({
    model: app.models.Movement,
    url: "/movements_json/",
    //return movements in alphabetical order
    comparator: function(movement){
        return movement.get('name')
    },
    //override fetch to trigger a fetch event
    //when fetching starts- this is then used
    //to know when to load a progress spinner
    fetch: function(options) {
        this.trigger('fetch', this, options);
        return Backbone.Collection.prototype.fetch.call(this, options);
    }
    //overriding parse lets you debug the results 
    //of a fetch()
    //parse: function(arg){
    //    console.log(arg);
    //}

});
