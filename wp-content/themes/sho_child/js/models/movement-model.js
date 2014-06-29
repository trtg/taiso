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
    url: "/movements_json",
    //return movements in alphabetical order
    comparator: function(movement){
        return movement.get('name')
    },
    //overriding parse lets you debug the results 
    //of a fetch()
    //parse: function(arg){
    //    console.log(arg);
    //}

});
