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
            w.accessibleMenuConfig.init(); // Charge config Accessible Menu
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
            if (w.$body.hasClass('les-metiers-du-web')) return 'metiersDuWeb';
            if (w.$body.hasClass('les-metiers-du-web-programme-des-cours')) return 'programCourses';
            if (w.$body.hasClass('former-students-interview')) return 'oneFormerStudent';
            if (w.$body.hasClass('oneRea')) return 'oneRea';

            return false;
      }
};

$(window).on('load', w.init);
