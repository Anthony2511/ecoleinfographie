w.graduated = {
    oConf: {},

    init: function () {
        w.ajaxGraduated.init();
        this.select();


    },

    // getElements: function () {

    // },
    // setEvents: function () {

    // },


    // EVENTS

    // FUNCTIONS

    select: function () {
        $('.select-year').chosen(
            {
                width: "140px",
                disable_search_threshold: 80
            }
            );
    }



}
