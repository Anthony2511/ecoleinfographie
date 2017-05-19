w.postBlog = {
    oConf: {},

    init: function () {
        w.asideBlog.init();
        w.articleBlog.init();
        this.autocomplete();
        this.disableWrappingImgCkeditor();
        w.floatLabel.init();
    },

    // getElements: function () {

    // },
    // setEvents: function () {

    // },

    // EVENTS

    // FUNCTIONS
    autocomplete: function () {
        $(function () {
            $("#search-blog").autocomplete({
                source: "search/autocomplete",
                minLength: 3,
                select: function (event, ui) {
                    $('#search-blog').val(ui.item.value);
                }
            });
        });
    },

    disableWrappingImgCkeditor: function () {
        $('.blogArticle__body p > img').unwrap();
    },


}
