w.blog = {
    oConf: {},

    init: function () {
        w.asideBlog.init();
        this.autocomplete();
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
                source: "blog/search/autocomplete",
                minLength: 3,
                select: function (event, ui) {
                    $('#search-blog').val(ui.item.value);
                }
            });
        });
    }

}
