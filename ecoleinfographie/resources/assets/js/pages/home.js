w.home = {
      oConf: {},

      init: function () {
        w.sliderProsHome.init();
        this.randomizeBlog();
        w.scroll.init();

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
