(function () {
    "use strict";

    var logoTimeline = anime.timeline(),
        isGoodPage = document.getElementsByClassName('les-metiers-du-web');

    if (isGoodPage.length > 0){

    logoTimeline
        .add({
            targets: ".line-code path",
            stroke: {
                value: 'none'
            }
        })
        .add({
            targets: '#logojs ellipse',
            scale: 1,
            duration: 300,
            delay: 1000,
            easing: 'easeOutBack',
        })
        .add({
            targets: '#logojs path',
            strokeDashoffset: [anime.setDashoffset, 0],
            duration: 700,
            delay: 0,
            easing: 'easeInSine',
            direction: 'alternate'
        })
        .add({
            targets: "#logojs ellipse",
            translateY: 250,
            scale: [1, 0],
            opacity: [1, 0],
            delay: 50,
            duration: 500,
            easing: 'easeInQuart'
        })
        .add({
            targets: "#logojs path",
            translateY: 250,
            scale: [1, 0],
            opacity: [1, 0],
            duration: 500,
            offset: '-=500',
            easing: 'easeInQuart'
        })
        .add({
            targets: ".line-code path",
            strokeDashoffset: function (el) {
                var pathLength = el.getTotalLength();
                el.setAttribute('stroke-dasharray', pathLength);
                return [pathLength, 0]
            },
            offset: '-=300',
            stroke: {
                value: function(el, i) {
                    return 'rgb(200,'+ i * 8 +',150)';
                },
                easing: 'easeInOutBack',
                duration: 2000,

            },
            delay: function(el, i) {
                return i * 60;
            },
        })
    }
})();

