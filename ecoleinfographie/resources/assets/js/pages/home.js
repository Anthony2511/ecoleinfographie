w.home = {
      oConf: {},

      init: function () {
        console.log('home charged');
        w.sliderProsHome.init();
        this.randomizeBlog();

      },

      // getElements: function () {

      // },
      // setEvents: function () {

      // },

      // EVENTS

      // FUNCTIONS

    randomizeBlog: function () {
        $("#blog-home").randomize("article.blog-card");
    }
}
