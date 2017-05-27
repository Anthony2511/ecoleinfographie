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

        var resizeTimer;
        var rmvEl = $('.rSlider__item--hidden');

        $(window).on('resize', function (e) {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function () {
                if ($(window).width() <= 1024) {
                    rmvEl.detach();
                } else {
                    rmvEl.append();
                }
            }, 250);
        });

        if($(window).width() <= 1024){
            $('.rSlider__item--hidden').detach();
        };


    }
}
