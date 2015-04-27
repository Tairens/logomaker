window.APP = window.APP || {
  Router: {},
  Views: {},
  Models: {},
  Collections: {}
};
(function() {
  "use strict";
  window.onerror = function(error, url, line) {
    if (DEBUG) {
      console.error("--------------------------");
      console.error('Error name: ' + error + ' in file: ' + url + ' line: ' + line);
      console.error("--------------------------");
    }
    return true;
  };
  APP.Router = Backbone.Router.extend({
    routes: {
      '': 'index'
    },
    initialize: function() {
    },
    index: function() {
      new APP.Views.OptionsView().render();
      new APP.Views.CreatorView().render();
    }
  });

}());