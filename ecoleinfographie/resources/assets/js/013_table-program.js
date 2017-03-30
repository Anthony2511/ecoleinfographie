// Stupid jQuery table plugin.

(function($) {
    $.fn.stupidtable = function(sortFns) {
        return this.each(function() {
            var $table = $(this);
            sortFns = sortFns || {};
            sortFns = $.extend({}, $.fn.stupidtable.default_sort_fns, sortFns);
            $table.data('sortFns', sortFns);

            $table.on("click.stupidtable", "thead th", function() {
                $(this).stupidsort();
            });
        });
    };


    // Expects $("#mytable").stupidtable() to have already been called.
    // Call on a table header.
    $.fn.stupidsort = function(force_direction){
        var $this_th = $(this);
        var th_index = 0; // we'll increment this soon
        var dir = $.fn.stupidtable.dir;
        var $table = $this_th.closest("table");
        var datatype = $this_th.data("sort") || null;

        // No datatype? Nothing to do.
        if (datatype === null) {
            return;
        }

        // Account for colspans
        $this_th.parents("tr").find("th").slice(0, $(this).index()).each(function() {
            var cols = $(this).attr("colspan") || 1;
            th_index += parseInt(cols,10);
        });

        var sort_dir;
        if(arguments.length == 1){
            sort_dir = force_direction;
        }
        else{
            sort_dir = force_direction || $this_th.data("sort-default") || dir.ASC;
            if ($this_th.data("sort-dir"))
                sort_dir = $this_th.data("sort-dir") === dir.ASC ? dir.DESC : dir.ASC;
        }

        // Bail if already sorted in this direction
        if ($this_th.data("sort-dir") === sort_dir) {
            return;
        }
        // Go ahead and set sort-dir.  If immediately subsequent calls have same sort-dir they will bail
        $this_th.data("sort-dir", sort_dir);

        $table.trigger("beforetablesort", {column: th_index, direction: sort_dir});

        // More reliable method of forcing a redraw
        $table.css("display");

        // Run sorting asynchronously on a timout to force browser redraw after
        // `beforetablesort` callback. Also avoids locking up the browser too much.
        setTimeout(function() {
            // Gather the elements for this column
            var column = [];
            var sortFns = $table.data('sortFns');
            var sortMethod = sortFns[datatype];
            var trs = $table.children("tbody").children("tr");

            // Extract the data for the column that needs to be sorted and pair it up
            // with the TR itself into a tuple. This way sorting the values will
            // incidentally sort the trs.
            trs.each(function(index,tr) {
                var $e = $(tr).children().eq(th_index);
                var sort_val = $e.data("sort-value");

                // Store and read from the .data cache for display text only sorts
                // instead of looking through the DOM every time
                if(typeof(sort_val) === "undefined"){
                    var txt = $e.text();
                    $e.data('sort-value', txt);
                    sort_val = txt;
                }
                column.push([sort_val, tr]);
            });

            // Sort by the data-order-by value
            column.sort(function(a, b) { return sortMethod(a[0], b[0]); });
            if (sort_dir != dir.ASC)
                column.reverse();

            // Replace the content of tbody with the sorted rows. Strangely
            // enough, .append accomplishes this for us.
            trs = $.map(column, function(kv) { return kv[1]; });
            $table.children("tbody").append(trs);

            // iet siblings
            $table.find("th").data("sort-dir", null).removeClass("sorting-desc sorting-asc");
            $this_th.data("sort-dir", sort_dir).addClass("sorting-"+sort_dir);

            $table.trigger("aftertablesort", {column: th_index, direction: sort_dir});
            $table.css("display");
        }, 10);

        return $this_th;
    };

    // Call on a sortable td to update its value in the sort. This should be the
    // only mechanism used to update a cell's sort value. If your display value is
    // different from your sort value, use jQuery's .text() or .html() to update
    // the td contents, Assumes stupidtable has already been called for the table.
    $.fn.updateSortVal = function(new_sort_val){
        var $this_td = $(this);
        if($this_td.is('[data-sort-value]')){
            // For visual consistency with the .data cache
            $this_td.attr('data-sort-value', new_sort_val);
        }
        $this_td.data("sort-value", new_sort_val);
        return $this_td;
    };

    // ------------------------------------------------------------------
    // Default settings
    // ------------------------------------------------------------------
    $.fn.stupidtable.dir = {ASC: "asc", DESC: "desc"};
    $.fn.stupidtable.default_sort_fns = {
        "int": function(a, b) {
            return parseInt(a, 10) - parseInt(b, 10);
        },
        "float": function(a, b) {
            return parseFloat(a) - parseFloat(b);
        },
        "string": function(a, b) {
            return a.toString().localeCompare(b.toString());
        },
        "string-ins": function(a, b) {
            a = a.toString().toLocaleLowerCase();
            b = b.toString().toLocaleLowerCase();
            return a.localeCompare(b);
        }
    };

    $("table").stupidtable();
})(jQuery);

// Apply link all row
(function ($) {
    "use strict";
    jQuery(document).ready(function($) {
        $(".link-row").click(function() {
            window.location = $(this).data("href");
        });
    });
})(jQuery);

/*(function ($) {
    "use strict";

    var tableFilter = {
        oConf: {
            container: 'program-bloc .probram-bloc__container',
            item: 'program-bloc .program-table'
        },

        $container: null,
        $items: null,
        aItems: [],

        init: function () {
            this.getElements();
            this.getItems();
            this.setEvents();
            this.$container.addClass(tableFilter.oConf.container + '--active');
            this.setActive(0);
        },

        getElements: function () {
            this.$items = $('.' + tableFilter.oConf.item);
            this.$container = $('.' + tableFilter.oConf.container);
        },

        setEvents: function () {
            for (var i = 0; i < tableFilter.aItems.length; i++) {
                tableFilter.aItems[i].$link.on('click', tableFilter.e_clickLink );
            }
        },

        // EVENTS
        e_clickLink: function(e) {
            e.preventDefault();
            var id = parseInt( $(e.target).closest('.program-bloc__button').attr('data-id') );
            $('.program-bloc__button').blur();

            tableFilter.setActive( id );
        },

        // Functions
        getItems : function () {
            tableFilter.$items.each(function( index ) {
                var o = {};
                o.$el = $(this);
                o.id = o.$el.attr("id");
                o.$link = $('a[href="#' + o.id + '"]');
                o.$link.attr('data-id', index );
                o.isActive= false;

                tableFilter.aItems.push(o);
            });
        },

        setActive: function ( id ) {

            tableFilter.removeActive();

            if (!tableFilter.aItems[id].isActive) {
                tableFilter.aItems[id].$el.addClass('program-table--active');
                tableFilter.aItems[id].$link.addClass('program-bloc__button--active');
                tableFilter.aItems[id].isActive = true;

                // Resize on load
                var heightElement = tableFilter.aItems[id].$el.height();
                $('.program-table__container').css('height', heightElement);

                // Resize on resize window and click
                $(window).on("resize click", function () {
                    setTimeout(function () {
                        var heightElement = tableFilter.aItems[id].$el.height();
                        $('.program-table__container').css('height', heightElement);
                    }, 100);
                });

            };
        },

        removeActive: function () {
            for (var i = 0; i < tableFilter.aItems.length; i++) {
                if (tableFilter.aItems[i].isActive) {
                    tableFilter.aItems[i].$el.removeClass('program-table--active');
                    tableFilter.aItems[i].$link.removeClass('program-bloc__button--active');
                    tableFilter.aItems[i].isActive = false;
                }
            }
        },
    };

    tableFilter.init();


})(jQuery);*/

(function ($) {
    "use strict";

    var button = $('.program-bloc__button');


    button.click(function () {
        $(this).closest('.program-bloc__filter').find('.program-bloc__button').removeClass('program-bloc__button--active');
        $(this).addClass('program-bloc__button--active');
        if ($(this).hasClass('program-bloc__button--option')){
            $(this).closest('.program-bloc').removeClass('all-visible').addClass('option-visible');
            var heightElement = $('.program-table--option').height();
            $(this).closest('.program-bloc').find('.program-table__container').css('height', heightElement);
        } else {
            $(this).closest('.program-bloc').removeClass('option-visible').addClass('all-visible');
            var heightElement = $('.program-table--all').height();
            $(this).closest('.program-bloc').find('.program-table__container').css('height', heightElement);
        }
    });

        // Resize on load
        var heightElement = $('.program-table--option').height();
        $('.program-table__container').css('height', heightElement);

        // Resize on resize window and click
        $(window).on("resize", function () {
            setTimeout(function () {


                var heightElement = $('.program-table--option').height();

                $('.program-table__container').css('height', heightElement);
            }, 100);
        });


})(jQuery);

