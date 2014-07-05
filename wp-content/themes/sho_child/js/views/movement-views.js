app = app || {};

app.views.Movement = Backbone.View.extend({
    tagName: 'li',
    attributes: function() {
        return {
            class: 'movement ' + this.model.get('level')
        };
    },

    events: {
        'click .list-header': 'showDetails'
    },

    template: _.template($('#movement-template').html()),
    render: function(){
        this.$el.html(this.template(this.model.toJSON()));
        return this;
    },

    showDetails: function(e){
        $(e.target).toggleClass('active');
        $(e.target).siblings('.details').slideToggle('fast');
    }
    

});

app.views.Movements = Backbone.View.extend({
    el: '#wrapper',
    initialize: function(){
        this.collection = new app.collections.Movements();
        //this.collection.fetch({success:function(){console.log("fetched stuff"); }}).always(function(){console.log("called always");});

        //store a reference to the collection to be used
        //in the success callback
        var self = this;
        this.collection.fetch({
            error:function(models,xhr,options){
                console.log("error during fetch"); 
            },
            success:function(models,xhr,options){

                //cache to avoid AJAX requests on every keystroke
                self.collection.defaultModels = self.collection.models;

                self.render();
                self.$el.find('#filters').append(self.createFilters());
                console.log("fetch succeeded"); 
            }
        }
        ).always(function(){console.log("called always");});
        //this.render();
        //this.$el.find('#filters').append(this.createFilters());

        this.on('change:searchFilter',this.filterBySearch,this);
        this.on('change:filterType',this.filterByType,this);
        //when the collection gets filtered by typing something in searchbox
        //then rerender the collection view
        this.collection.on('reset',this.render,this);
    },

    events:{
        'keyup #searchBox': 'searchFilter',
        'click a.filter': 'setFilter'
    },
    render: function(){
        var self = this;
        $('#listing').empty();
        _.each(this.collection.models,function(movement){
            self.renderMovement(movement);
        },this);
    },
    renderMovement: function(movement){
        var newMovement = new app.views.Movement({
            model: movement
        });
        $('#listing').append(newMovement.render().el);
    },

    //dynamically determine the types available
    getTypes: function() {
        console.log(this.collection.pluck('type'));
        appar = _.uniq([].concat.apply([],this.collection.pluck('apparatus')));
        console.log(appar);
        return _.uniq(this.collection.pluck('level').concat(appar));
    },

    setListLength:function(l){
        $('#count').html(l);
    },

    createFilters: function(){
        var filters = '<a class="filter" href="#all">all</a>';
        _.each(this.getTypes(), function(item){
            filters += '<a class="filter" href="#' + item +'"><img src="/wp-content/images/'+item.toLowerCase()+'_30x30.png">' + item+ '</a>';
        });
        return filters;
    },

    searchFilter: function(e){
        this.searchFilter = e.target.value;
        this.trigger('change:searchFilter');
    },

    setFilter: function(e){
        e.preventDefault();
        this.filterType = e.currentTarget.innerText;
        //only allow one filter to be active at a time
        //$('.activeFilter').toggleClass('activeFilter');
        $(e.currentTarget).toggleClass('activeFilter');
        console.log(e.currentTarget)
        this.trigger('change:filterType');
    },

    filterBySearch: function(){
        //clear all currently applied filters, if any
        console.log("filterBySearch");
        //this.collection.reset(this.collection.models,{silent: true});
        this.collection.reset(this.collection.defaultModels,{silent: true});
        var filterString = this.searchFilter,
            filtered = _.filter(this.collection.models,function(item){
                return item.get('name').toLowerCase().indexOf(filterString.toLowerCase()) !== -1;
            });
        this.setListLength(filtered.length);
        this.collection.reset(filtered);
    },

    filterByType: function(){
        if(this.filterType === 'all'){
            console.log("filter was all");
            console.log(this.collection.models);

            //use collection that was cached on first load
            this.collection.reset(this.collection.defaultModels);
            this.setListLength(this.collection.length);
            //var self = this;
            //this.collection.fetch({
            //    error:function(models,xhr,options){
            //        console.log("error during fetch"); 
            //    },
            //    success:function(models,xhr,options){
            //        self.render();
            //        console.log("fetch succeeded"); 
            //        self.collection.reset(self.collection.models);
            //        self.setListLength(self.collection.length);
            //    }
            //});

            //appRouter.navigate('filter/all');
        }else{
            //allow multiple simultaneous filters
            //this.collection.reset(directoryData,{silent:true});
            var filterType = this.filterType,
                filtered = _.filter(this.collection.models, function(item){
                    //console.log(item.get('level')=== filterType);
                    console.log(filterType);
                    //console.log(item.get('apparatus'));
                    return (item.get('level') === filterType) || (_.contains(item.get('apparatus'),filterType));
                });
            this.setListLength(filtered.length);
            this.collection.reset(filtered);
            //appRouter.navigate('filter/'+filterType);
        }
    }

});
