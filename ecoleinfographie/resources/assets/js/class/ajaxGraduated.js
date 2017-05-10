w.ajaxGraduated = {

    init: function () {
        this.initAjax();
        this.initGrid();
    },

    initAjax: function () {
        $(document).ready(function() {
            $('#load-more').on('click', function(e){
                e.preventDefault();
                var page = $(this).attr('href');
                if (page !== null){
                    $.ajax({
                        url: page,
                        beforeSend: function () {
                            $('#load-more').addClass('loading');
                        },
                        success: function (data) {
                            $('.former-students__list').append(data.students);
                            $('#load-more').attr('href', data.next_page);
                            $('#load-more').removeClass('loading');
                            w.ajaxGraduated.initGrid();
                        },
                    })
                }
            })
        })
    },

    initGrid: function () {
        var grid = document.querySelector('.former-students__list');
        waterfall(grid);
    }




}
