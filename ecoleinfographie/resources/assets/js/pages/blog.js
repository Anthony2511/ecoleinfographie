w.blog = {
    oConf: {},

    init: function () {
        w.asideBlog.init();
        this.autocomplete();
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
                source: "blog/search/autocomplete",
                minLength: 3,
                select: function (event, ui) {
                    $('#search-blog').val(ui.item.value);
                }
            });
        });
    }

    /*autocomplete: function () {
     console.log('autocomplete charged');
     var options = {
     url: 'search/autocomplete',
     getValue: 'title',
     list: {
     match: {
     enabled: true
     }
     },

     }

     $( "#q" ).easyAutocomplete(options);
     }*/

}
