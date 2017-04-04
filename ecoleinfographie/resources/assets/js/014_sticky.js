$(function() {
    if ($('#sticky-sidebar').length) {
        var el = $('#sticky-sidebar');
        var stickyTop = $('#sticky-sidebar').offset().top; // Calculer à quelle hauteur est le aside
        var stickyHeight = $('#sticky-sidebar').outerHeight(); // Calculer la hauteur de la boite
        var lastElement = $('.former-interview__question').last().outerHeight();
        $(window).scroll(function() {
            var limit = $('.former-interview__question').last().offset().top + lastElement - stickyHeight - 20 ;
            var windowTop = $(window).scrollTop(); // scrollTop = valeur du scroll en hauteur (ex: je suis à 400px de scroll)
            if (stickyTop - 20 < windowTop) {
                el.css({
                    position: 'fixed',
                    top: 20
                });
            } else {
                el.css('position', 'static');
            }
            if (limit < windowTop) {
                var diff = limit - windowTop;
                el.css({
                    top: diff + 20
                });
            }
        });
    }
});
