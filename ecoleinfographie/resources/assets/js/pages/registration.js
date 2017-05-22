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
            styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]

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




