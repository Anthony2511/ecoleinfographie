jQuery(document).ready(function(){
    console.log('Script charged');
    $('sliderBlog__dots-item__dot').click(function () {
        $('sliderBlog__dots-item').addClass('current')
    })
});
