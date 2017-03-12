(function($) {

    var pos = 0;

    // Function for increment pos and reset
    function slideRight() {
        pos++
        if ( pos == 3 ){ pos = 0 }
    }
    // Function for increment negative pos and reset
    function slideLeft() {
        pos--
        if ( pos == -1 ){ pos = 2 }
    }

    // Create function for slide move on click button prev and next
    function positionRight() {
        $('.slider-pros__article')
            .addClass('slider-pros__article--hidden')
            .removeClass('slider-pros__article--active slider-pros__article--right slider-pros__article--left')

        if( pos == 0 ){
            $('#slider-pros__article03').addClass('slider-pros__article--right')
            $('#slider-pros__article01')
                .removeClass('slider-pros__article--hidden')
                .addClass('slider-pros__article--active')
        } else if( pos == 1 ){
            $('#slider-pros__article01').addClass('slider-pros__article--right')
            $('#slider-pros__article02')
                .removeClass('slider-pros__article--hidden')
                .addClass('slider-pros__article--active')
        } else if ( pos == 2 ){
            $('#slider-pros__article02').addClass('slider-pros__article--right')
            $('#slider-pros__article03')
                .removeClass('slider-pros__article--hidden')
                .addClass('slider-pros__article--active')
        }
    }
    function positionLeft() {
        $('.slider-pros__article')
            .addClass('slider-pros__article--hidden')
            .removeClass('slider-pros__article--active slider-pros__article--right slider-pros__article--left')
        if( pos == 0 ){
            $('#slider-pros__article03').addClass('slider-pros__article--left')
            $('#slider-pros__article01')
                .removeClass('slider-pros__article--hidden')
                .addClass('slider-pros__article--active')
        } else if( pos == 1 ){
            $('#slider-pros__article01').addClass('slider-pros__article--left')
            $('#slider-pros__article02')
                .removeClass('slider-pros__article--hidden')
                .addClass('slider-pros__article--active')
        } else if ( pos == 2 ){
            $('#slider-pros__article02').addClass('slider-pros__article--left')
            $('#slider-pros__article03')
                .removeClass('slider-pros__article--hidden')
                .addClass('slider-pros__article--active')
        }
    }


    function dotNav() {
        $('.dots__li').removeClass('current');
        $( '.dots__li:eq('+pos+')' ).addClass( 'current' );
    }

    positionRight()

    // On click on button right
    $( '.slideButtons__next' ).click( function () {
        slideRight()
        positionRight()
        dotNav()
    } )

    // On click on button left
    $( '.slideButtons__prev' ).click( function () {
        slideLeft()
        positionLeft()
        dotNav()
    } )
})(jQuery);
