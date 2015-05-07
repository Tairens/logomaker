(function() {
  "use strict";
  APP.Views.CreatorView = Backbone.View.extend({
    el: $('.myContainer'),
    events: {
      "click .draggable": "setSelectedItem",
      "click #addText": "addText",
      "click #addImage": "addImage",
      "click .bg": "setBackground",
      //"keypress": "keyAction",
      "change :file": "imgUpload",
      "click #saveOption": "saveScreen"
    },
    loadText: function(e){
      
    },
    loadImage: function(e){
      
    },
    loadSelected: function(e){
      var object = $(e.currentTarget);
      var attr = object.attr('data-element-type');
      if(attr !== undefined){
        if(attr === "image"){
          this.loadImage(object);
        }
        else if(attr === "text"){
          this.loadText(object);
        }
      }
    },
    saveScreen: function() {
      var handle = $('#logoCreator');
      var style = handle.attr('style') + 'height=' + handle.height() + ';width=' + handle.width() + ';';
      var html = '<div style="' + style + '">' + handle.html() + '</div>';
      $.ajax({
       url: "/ajax/convertHTMLToImage.php?html=" + html + "&format=jpg&height=450&width=350"
       })
       .done(function(data) {
       alert('done');
       });
    },
    setSelectedItem: function(e) {
      this.selectedItem = $(e.currentTarget);
      if (this.selectedItem.length > 0) {
        $('.draggable').removeClass('selected');
        this.selectedItem.addClass('selected');
      }
    },
    keyAction: function(e) {
      var code = e.keyCode || e.which;
      e.preventDefault();
      if (code === 8 || code === 46) {
        if (this.selectedItem !== false) {
          this.selectedItem.remove();
        }
      }
      else {

      }
    },
    initialize: function() {
      this.$('.draggable').draggable();
      this.creatorContainer = this.$('#logoCreator');
      this.addElement = '';
      this.selectedItem = false;
      this.imgSrc = false;
    },
    imgUpload: function(e) {
      if (e.target.files && e.target.files[0]) {
        var reader = new FileReader();
        var self = this;
        reader.onload = (function(f) {
          return function(e) {
            self.imgSrc = e.target.result;
          };
        })(e);
        reader.readAsDataURL(e.target.files[0]);
      }
    },
    addImage: function() {
      if (this.imgSrc !== false) {
        //var size = parseInt($("#textSizeValue").html());
        var rotate = parseInt($("#rotationValue").html());
        this.addElement = '<img data-element-type="image" src="' + this.imgSrc + '" class="draggable" style="transform:rotate(' + rotate + 'deg);)">';
        this.render();
      }
      else {
        alert('Najpierw wybierz obrazek');
      }
    },
    addText: function() {
      var text = $('#textToAdd').val();
      if (text !== "") {
        var color = $('#colorType').val();
        var font = $('#fontType').val();
        var style = $('#fontStyle').val();
        var size = parseInt($("#textSizeValue").html());
        var rotate = parseInt($("#rotationValue").html());
        this.addElement = '<div data-element-type="text" class="draggable" style="font-family: ' + font + ',' + style + ';' +
                'color: ' + color + ';' +
                'display:inline-block;z-index:2;' +
                'transform:rotate(' + rotate + 'deg);' +
                'font-size: ' + size + 'px;' + '">' + text + '</div>';
        this.render();
      }
      else {
        alert('Wypełnij pole tekstu.');
      }
    },
    setBackground: function(e) {
      var attr = $(e.currentTarget).attr('data-type');
      var background =  $(e.currentTarget).attr('data-background');
      if(attr !== undefined && background !== undefined){
        if(attr === "bgcolor"){
          this.creatorContainer.css('background-color', background);
        }
        else if(attr === "bgimage"){
          this.creatorContainer.css('background', 'url(' + background + ')');
        }
      }
    },
    render: function() {
      var html = this.creatorContainer.html() + this.addElement;
      this.creatorContainer.html(html);
      this.$('.draggable').draggable({containment: "#logoCreator", scroll: false});
      return this;
    }
  });
}());