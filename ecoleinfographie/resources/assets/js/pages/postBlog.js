w.postBlog = {
    oConf: {},

    init: function () {
        w.asideBlog.init();
        w.articleBlog.init();
        this.autocomplete();
        this.disableWrappingImgCkeditor();

    },

    // getElements: function () {

    // },
    // setEvents: function () {

    // },

    // EVENTS

    // FUNCTIONS
    autocomplete: function () {
        console.log('jqueryUiAutomplete Charged');
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
