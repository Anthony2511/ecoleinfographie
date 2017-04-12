w.opacityOnScrollMDW = {

    init: function(){

        this.opacityOnScrollMDW();

    },

    opacityOnScrollMDW: function () {
        
    "use strict";

    var targetBg = $('.background-opacity'),
        targetContent = $('.isOpacity'),
        targetHeight = targetBg.outerHeight() + 150,
        isOpacity = $('.background-opacity');

    if (isOpacity.length > 0){
        $(document).scroll(function(e){
            var scrollPercent = ((targetHeight + window.scrollY)) / targetHeight - 1,
                scrollOpacity = ((targetHeight - window.scrollY)) / targetHeight;
            if(scrollPercent >= 0){
                targetBg.css({'background-color': 'rgba(0,0,0,' + scrollPercent + ')'});
                targetContent.css({'opacity': scrollOpacity});
                }
            });
        }
    }
}


