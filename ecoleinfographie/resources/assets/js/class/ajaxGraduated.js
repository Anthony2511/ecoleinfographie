w.ajaxGraduated = {

    init: function () {
        this.initAjax();
        this.initGrid();
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
                            w.ajaxGraduated.initGrid();
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



    initGrid: function () {
        var grid = document.querySelector('.former-students__list');
        waterfall(grid);
    }




}
