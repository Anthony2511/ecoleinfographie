w.sliderRea = {

    // Require vendor/lightSlider

    init: function () {
        this.config();
        this.runIframe();
        this.addWrapper();
    },

    config: function () {
        console.log('sliderRea charged');
        $('.rSlider').lightSlider({
            gallery: true,
            item: 1,
            slideMargin: 0,
            keypress: true,
            thumbItem:5,
            galleryMargin: 0,
            thumbMargin: 15,
            useCSS: true,
            cssEasing: 'ease',
            speed: '400',

            onAfterSlide: function () {
                $('.rSlider iframe').remove();
                $('.rSlider__item--withIframe').removeClass('hasIframe');
            }
        });
    },

    runIframe: function () {
        $('.rSlider__item--withIframe').on('click', function () {


            if($(this).hasClass('hasIframe')){
                // nothing
            } else {
                $(this).addClass('hasIframe').append('<iframe width="945" height="531" src="' + $(this).attr('data-iframe') + '" frameborder="0" allowfullscreen></iframe>');
            }
        });
    },

    addWrapper: function () {
        $('.rSlider__container .lSGallery').wrap("<div class='lSGallery__container'></div>");
    }
}
