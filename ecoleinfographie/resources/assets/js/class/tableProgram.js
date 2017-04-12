w.tableProgram = {

    init: function () {
        this.tableLink();
        this.tableTabs();
    },
    
    tableLink: function () {
        "use strict";
        jQuery(document).ready(function($) {
            $(".link-row").click(function() {
                window.location = $(this).data("href");
            });
        });
    },
    
    tableTabs: function () {
        var button = $('.program-bloc__button');

        button.click(function () {
            $(this).closest('.program-bloc__filter').find('.program-bloc__button').removeClass('program-bloc__button--active');
            $(this).addClass('program-bloc__button--active');
            if ($(this).hasClass('program-bloc__button--option')){
                $(this).closest('.program-bloc').removeClass('all-visible').addClass('option-visible');
            } else {
                $(this).closest('.program-bloc').removeClass('option-visible').addClass('all-visible');
            }
        });
    }
}
