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
              /*if ($(window).width() >= 1080) {*/
                  w.accessibleMenuConfig.init(); // Charge config Accessible Menu
              /*}*/
            w.menuRes();
            w.loadPage();
            w.isLoaded = true;
      },
      loadPage: function () {
            if (w.sCurrent) w[w.sCurrent].init();
      },

      // functions
      getElements: function () {
            w.$body = $('body');
      },

      menuRes: function () {
          $(document).ready(function(){
              $('.hamburger').click(function(){
                  $(this).toggleClass('open');
                  $('body').toggleClass('menu-responsive')
              });
          });
      },

      getCurrentPage: function () {
            if (w.$body.hasClass('home')) return 'home';
            if (w.$body.hasClass('les-metiers-du-web')) return 'metiersDuWeb';
            if (w.$body.hasClass('programme-des-cours')) return 'programCourses';
            if (w.$body.hasClass('student-post')) return 'oneFormerStudent';
            if (w.$body.hasClass('work')) return 'oneRea';
            if (w.$body.hasClass('blog')) return 'blog';
            if (w.$body.hasClass('postBlog')) return 'postBlog';
            if (w.$body.hasClass('graduate')) return 'graduated';
            if (w.$body.hasClass('realisations')) return 'realisations';
            if (w.$body.hasClass('internship')) return 'internship';
            if (w.$body.hasClass('registration')) return 'registration';
            if (w.$body.hasClass('contact-us')) return 'contact';
            if (w.$body.hasClass('postNews')) return 'postNews';

            return false;
      }
};

$(window).on('load', w.init);
