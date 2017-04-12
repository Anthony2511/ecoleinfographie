var w = {
      // global vars
      sCurrent: null,
      isLoaded: false,

      // global elements
      $body: null,

      // pages
      home: {},

      // setup
      init: function () {
            w.getElements();
            w.sCurrent = w.getCurrentPage();
            //w.mobileMenu.init();
            w.loadPage();
            w.isLoaded = true;
            console.log('front.js charged');
      },
      loadPage: function () {
            if (w.sCurrent) w[w.sCurrent].init();
      },

      // functions
      getElements: function () {
            w.$body = $('body');
      },

      getCurrentPage: function () {
            if (w.$body.hasClass('home')) return 'home';

            return false;
      }
};

$(window).on('load', w.init);