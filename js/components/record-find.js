AFRAME.registerComponent('record-find',
{   
    schema: {
        on: {type: 'string'},
        logo: {type: 'string'}
    },
    init: function(){
        console.log("initialising record-find component");
        var data = this.data;
        var el = this.el;
        el.addEventListener(data.on, function(){recordFind(data.logo)});   
    }
})