w.realisations = {
    oConf: {},

    init: function () {
        this.initAjax();
        this.initGrids();
    },

    // getElements: function () {

    // },
    // setEvents: function () {

    // },

    // EVENTS

    // FUNCTIONS
    initGrids: function () {
        var globalResizeTimer = null;
        var grid = document.querySelector('.reas');

        $(window).resize(function() {
            if(globalResizeTimer != null) window.clearTimeout(globalResizeTimer);
            globalResizeTimer = window.setTimeout(function() {
                waterfall(grid);
            }, 200);
        });
        waterfall(grid);
    },


    initAjax: function () {

        var button = $('#load-more');

        $(document).ready(function() {
            button.on('click', function(e){
                e.preventDefault();
                var page = $(this).attr('href');
                if (typeof page !== 'undefined' && page.search('page=') !== -1 ){
                    $.ajax({
                        url: page,
                        beforeSend: function () {
                            button.addClass('loading');
                        },
                        success: function (data) {
                            $('.reas').append(data.works);
                            button.attr('href', data.next_page);
                            button.removeClass('loading');
                            w.realisations.initGrids();
                        }
                    })
                } else {
                    button.addClass('finish');
                    button.replaceWith($('<span class="load-more finish">' + this.innerHTML + '</span>'));
                    $('.load-more__label-text').text('Vous avez tout vu !');
                }
            })
        })
    },
}
