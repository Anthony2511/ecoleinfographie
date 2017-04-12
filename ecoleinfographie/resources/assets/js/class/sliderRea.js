w.sliderRea = {

    // Require vendor/lightSlider

    init: function () {
        this.config();
        this.runIframe();
    },

    config: function () {
        console.log('sliderRea charged');
        $('.rSlider').lightSlider({
            gallery: true,
            item: 1,
            slideMargin: 0,
            onAfterSlide: function () {
                $('.rSlider iframe').remove();
                $('.rSlider li').removeClass('hasIframe');
            }
        });
    },

    runIframe: function () {
        $('.rSlider__item--withIframe').on('click', function () {
                $(this).addClass('hasIframe').append('<iframe width="945" height="531" src="' + $(this).attr('data-iframe') + '" frameborder="0" allowfullscreen></iframe>')
        });
    }
}
