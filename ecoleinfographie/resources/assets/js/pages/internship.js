w.internship = {
    oConf: {},

    init: function () {
        w.floatLabel.init();
        this.tabs();
        this.inputFile();
    },

    // getElements: function () {

    // },
    // setEvents: function () {

    // },


    // EVENTS

    // FUNCTIONS
    tabs: function () {
        var btnPdf = $('.form__button--pdf');
        var btnDetail = $('.form__button--detail');
        var classBtn = 'form__button--active';
        btnDetail.click(function () {
            $('.tab--2').removeClass('active');
            $('.tab--1').addClass('active');
            $(this).addClass(classBtn);
            btnPdf.removeClass(classBtn)
        });
        btnPdf.click(function () {
            $('.tab--1').removeClass('active');
            $('.tab--2').addClass('active');
            $(this).addClass(classBtn);
            btnDetail.removeClass(classBtn)
        })
    },

    inputFile: function () {
        $( '#file-pdf' ).each( function()
        {
            var $input	 = $( this ),
                $label	 = $input.next( 'label' ),
                labelVal = $label.html();

            $input.on( 'change', function( e )
            {
                var fileName = '';

                if( this.files && this.files.length > 1 )
                    fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
                else if( e.target.value )
                    fileName = e.target.value.split( '\\' ).pop();

                if( fileName )
                    $label.find( 'span' ).html( fileName );
                else
                    $label.html( labelVal );
            });

            // Firefox bug fix
            $input
                .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
                .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
        });
    }




}
