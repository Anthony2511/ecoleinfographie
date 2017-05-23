w.registration = {
    oConf: {},

    init: function () {
            this.initMap();
    },

    // getElements: function () {

    // },
    // setEvents: function () {

    // },


    // EVENTS

    // FUNCTIONS

    initMap: function initMap() {
        var uluru = {lat: 50.6206482, lng: 5.581290299999978};

        var map = new google.maps.Map(document.getElementById('map__canvas'), {
            zoom: 16,
            center: uluru,
            scrollwheel: false,
            styles: [{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#747474"},{"lightness":"23"}]},{"featureType":"poi.attraction","elementType":"geometry.fill","stylers":[{"color":"#f38eb0"}]},{"featureType":"poi.government","elementType":"geometry.fill","stylers":[{"color":"#ced7db"}]},{"featureType":"poi.medical","elementType":"geometry.fill","stylers":[{"color":"#ffa5a8"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#c7e5c8"}]},{"featureType":"poi.place_of_worship","elementType":"geometry.fill","stylers":[{"color":"#d6cbc7"}]},{"featureType":"poi.school","elementType":"geometry.fill","stylers":[{"color":"#c4c9e8"}]},{"featureType":"poi.sports_complex","elementType":"geometry.fill","stylers":[{"color":"#b1eaf1"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":"100"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":"100"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffd4a5"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffe9d2"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"weight":"3.00"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"weight":"0.30"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#747474"},{"lightness":"36"}]},{"featureType":"road.local","elementType":"labels.text.stroke","stylers":[{"color":"#e9e5dc"},{"lightness":"30"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":"100"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#d2e7f7"}]}]
        });

        var icon = {
            url: "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMiIgaGVpZ2h0PSIzNSIgdmlld0JveD0iMCAwIDIyIDM1Ij4gIDxwYXRoIGZpbGw9IiM0OTkwRTIiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTExIC4wMkM0LjkyNC4wMiAwIDQuODk2IDAgMTAuOTM1YzAgMTAuNDQzIDExIDI0LjA2MyAxMSAyNC4wNjNzMTEtMTMuNjIyIDExLTI0LjA2M0MyMiA0Ljg5OCAxNy4wNzYuMDIgMTEgLjAyem0wIDE2Ljk1NWMtMy4yODIgMC01Ljk0LTIuNjQ1LTUuOTQtNS45MDYgMC0zLjI2MiAyLjY1OC01LjkwNyA1Ljk0LTUuOTA3IDMuMjc4IDAgNS45MzggMi42NDUgNS45MzggNS45MDcgMCAzLjI2MS0yLjY2IDUuOTA2LTUuOTM4IDUuOTA2eiIvPjwvc3ZnPg=="
        }

        var marker = new google.maps.Marker({
            position: uluru,
            icon: icon,
            map: map,
            url: "https://goo.gl/maps/F6DqSzVe3HC2"
        });

        google.maps.event.addListener(marker, 'click', function() {
            window.open(this.url, '_blank');
        });
    }





}




