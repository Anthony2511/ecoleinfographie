w.oneRea = {
      oConf: {},

      init: function () {
        this.removeHidden();
        w.sliderRea.init();
      },

      // getElements: function () {

      // },

      // setEvents: function () {

      // },

      // EVENTS

      // FUNCTIONS

        removeHidden: function () {
            if($(window).width() <= 1024) {
                $('.rSlider__item--hidden').remove();
            }
        }
}
