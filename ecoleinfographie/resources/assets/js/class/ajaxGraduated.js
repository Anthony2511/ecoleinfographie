w.ajaxGraduated = {

    init: function () {
        this.initGrids();
        this.initAjax();
    },

    initGrids: function () {
        var globalResizeTimer = null;
        var grid = document.querySelector('.former-students__list');

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
                            $('.former-students__list').append(data.students);
                            button.attr('href', data.next_page);
                            button.removeClass('loading');
                            $(this).delay(200).queue(function() {

                                waterfall('.former-students__list')

                                $(this).dequeue();

                            });


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
