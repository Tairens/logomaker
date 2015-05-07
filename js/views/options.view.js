(function() {
  "use strict";
  APP.Views.OptionsView = Backbone.View.extend({
    el: $('.optionsMenu'),
    initializeBackgrounds: function(){
      $('.bg').each(function(number, item){
        item = $(item);
        var type = item.attr('data-type');
        var background = item.attr('data-background');
        if(type !== undefined && background !== undefined){
          if(type === "bgcolor"){
            item.css('background-color', background);
          }
          else if(type === "bgimage"){
            item.css('background', 'url(' + background + ')');
          }
        }
      });
    },
    initElements: function(){
      var buttons = this.$('.buttons a');
      buttons.tooltip();
      buttons.attr('data-placement', 'auto');
      
      $( ".mySlider" ).each(function(){
        var max = $(this).attr('data-max');
        if(max === undefined){
          max = 10;
        }
        max = parseInt(max);
        var slideValue = $(this).attr('data-slide');
        if(slideValue === undefined){
          slideValue = "";
        }
        $(this).slider({
          value: 0,
          min: 0,
          max: max,
          orientation: "horizontal",
          range: "min",
          animate: true,
          slide: function(event, ui) {
            $( "#" + slideValue ).html(ui.value);
          }
        });
      });
    },
    events: {
      "click .buttons > .changeScreen": "changeScreen",
    },
    initialize: function() {
      this.actuallScreen = 'backgroundOption';
    }, 
    changeScreen: function(e) {
      var screen = $(e.currentTarget).attr('data-toPosition');
      if (screen !== undefined) {
        this.actuallScreen = screen;
        this.render();
      }
    },
    render: function() {
      var templateName = '#' + this.actuallScreen;
      var template = _.template($(templateName).html());
      this.$('#optionsScreen').html(template);
      this.initializeBackgrounds();
      this.initElements();
      return this;
    }
  });
}());