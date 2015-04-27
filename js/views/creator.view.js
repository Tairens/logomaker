(function() {
  "use strict";
  APP.Views.CreatorView = Backbone.View.extend({
    el: $('.myContainer'),
    events: {
      "click #addText": "addText",
      "click #addImage": "addImage",
      "click .bg" : "setBackground"      
    },
    initialize: function() {
      this.$('.draggable').draggable();
      this.creatorContainer = this.$('#logoCreator');
      this.addElement = '';
    },
    addImage: function() {
      var size = parseInt($("#textSizeValue").html());
      var rotate = parseInt($("#rotationValue").html());
      this.addElement = '<p class="draggable" style="transform:rotate(' + rotate + 'deg);' +
                        'font-size: ' + size + 'px;' + '">' + text + '</p>';
      this.render();
    },
    addText: function() {
      var text = $('#textToAdd').val();
      if (text !== "") {
        var color = $('#colorType').val();
        var font = $('#fontType').val();
        var style = $('#fontStyle').val();
        var size = parseInt($("#textSizeValue").html());
        var rotate = parseInt($("#rotationValue").html());
        this.addElement = '<p class="draggable" style="font-family: ' + font + ',' + style + ';' +
                'color: ' + color + ';' +
                'transform:rotate(' + rotate + 'deg);' +
                'font-size: ' + size + 'px;' + '">' + text + '</p>';
        this.render();
      }
      else {
        alert('Wypełnij pole tekstu.');
      }
    },
    setBackground: function(e){
      this.creatorContainer.css('background-color', $(e.currentTarget).attr('data-background'));
    },
    render: function() {
      var html = this.creatorContainer.html() + this.addElement;
      this.creatorContainer.html(html);
      this.$('.draggable').draggable();
      return this;
    }
  });
}());