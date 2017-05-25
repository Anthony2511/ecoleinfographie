w.sliderBlogHome = {

    init: function () {
        this.equalize();
        this.appBlog;
    },

equalize : equalize = function(selector){
    var maxHeight = 0;
    $(selector).each(function(idx,el){
        $(el).height("auto"); // resetting height
        var h = $(el).height();
        if (h > maxHeight) { maxHeight = h; }
    });

    $(selector).each(function(idx,el){
        $(el).height(maxHeight);
        $('.sliderBlog-wrapper').height(maxHeight + 2);
    });
},

appBlog : $(document).ready(function(){
    equalize(".sliderBlog"); // resize when dom ready

    // register the resize event listener with debounce
    $(window).on("resize", function() {
        setTimeout(function(){
            equalize(".sliderBlog");
        }, 100); // 100ms debounce before calling the function
    });

// Define variables
    var pos = 0;

    // Défine slide translation
    function slide1(){
        $( '.sliderBlog-item--1' ).css( 'transform', 'translateX(0)') ;
        $( '.sliderBlog-item--2' ).css( 'transform', 'translateX(100%)') ;
        $( '.sliderBlog-item--3' ).css( 'transform', 'translateX(200%)') ;
    }

    function slide2() {
        $( '.sliderBlog-item--1' ).css( 'transform', 'translateX(-100%)' );
        $( '.sliderBlog-item--2' ).css( 'transform', 'translateX(0%)' );
        $( '.sliderBlog-item--3' ).css( 'transform', 'translateX(100%)' );
    }

    function slide3() {
        $( '.sliderBlog-item--1' ).css( 'transform', 'translateX(-200%)' );
        $( '.sliderBlog-item--2' ).css( 'transform', 'translateX(-100%)' );
        $( '.sliderBlog-item--3' ).css( 'transform', 'translateX(0%)' );
    }

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
    function position() {
        if( pos == 0 ){
            slide1()
        } else if( pos == 1 ){
            slide2()
        } else if ( pos == 2 ){
            slide3()
        }
    }

    // Function for add/remove class on click on dots
    $(".sliderBlog__dots-item").click( function() {
        $( ".sliderBlog__dots-item" ).removeClass( "current" );
        $( this ).addClass( "current" );
    } );

    // Function for add and remove class current according to var pos
    function dotNav() {
        $('.sliderBlog__dots-item').removeClass('current');
        $( '.sliderBlog__dots-item:eq('+pos+')' ).addClass( 'current' );
    }

    // Slide translation on click on dots
    $( ".sliderBlog__dots-item--1" ).click( function() {
        pos == 0;
        slide1();
    } )

    $( ".sliderBlog__dots-item--2" ).click( function() {
        slide2()
    } )

    $( ".sliderBlog__dots-item--3" ).click( function() {
        slide3()
    } )

    // On click on button right
    $( '.sliderBlog__right' ).click( function () {
        slideRight()
        position()
        dotNav()
    } )

    // On click on button left
    $( '.sliderBlog__left' ).click( function () {
        slideLeft()
        position()
        dotNav()
    } )
}),


}
