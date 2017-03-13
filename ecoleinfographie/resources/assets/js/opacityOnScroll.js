(function ($) {
    "use strict";

    var target = $('.background-opacity'),
        targetHeight = target.outerHeight() + 150,
        isOpacity = $('.background-opacity');

    if (isOpacity.length > 0){
        $(document).scroll(function(e){
            var scrollPercent = ((targetHeight + window.scrollY)) / targetHeight - 1;
            if(scrollPercent >= 0){
                target.css({'background-color': 'rgba(0,0,0,' + scrollPercent + ')'});
            }
        });
    }

})(jQuery);
