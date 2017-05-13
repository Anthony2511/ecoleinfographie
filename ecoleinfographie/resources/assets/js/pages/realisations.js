w.realisations = {
    oConf: {},

    init: function () {
        this.initGrids();
    },

    // getElements: function () {

    // },
    // setEvents: function () {

    // },

    // EVENTS

    // FUNCTIONS
    initGrids: function () {
        var grid = document.querySelector('.reas');
        waterfall(grid);
    }
}
