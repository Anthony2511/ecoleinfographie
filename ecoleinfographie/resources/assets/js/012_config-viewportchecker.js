(function () {
    "use strict";

    // If page web-home
    if (document.getElementsByClassName('header-webhome').length > 0 ){
        $('.webdesigner').viewportChecker({
            classToAdd: 'anim-webdesigner',
            offset: 350
        });
        $('.webintegrator').viewportChecker({
            classToAdd: 'anim-webintegrator-screen',
            offset: 200
        });
        $('.webintegrator__wrapper').viewportChecker({
            classToAdd: 'anim-webintegrator-ipads',
            offset: 400
        });
        $('.devbackend__img').viewportChecker({
            classToAdd: 'anim-devbackend-imac',
            offset: 400
        });
        $('.devbackend__img--2').viewportChecker({
            classToAdd: 'anim-devbackend-code',
            offset: 300
        });
        $('.webmobile__img--1').viewportChecker({
            classToAdd: 'anim-webmobile-img-1',
            offset: 400
        });
        $('.webmobile__img--2').viewportChecker({
            classToAdd: 'anim-webmobile-img-2',
            offset: 400
        });
        $('.webmobile__img--3').viewportChecker({
            classToAdd: 'anim-webmobile-img-3',
            offset: 100
        });
        $('.webmobile__img--4').viewportChecker({
            classToAdd: 'anim-webmobile-img-4',
            offset: 350
        });
    }

})();
