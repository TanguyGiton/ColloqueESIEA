var map;

function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 45.951527, lng: 6.731143},
        zoom: 15
    });

    var infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);

    service.getDetails({
        placeId: 'ChIJWUShAz9UiUcRv8wXpuM3xM8'
    }, function (place, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location
            });
            infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                place.formatted_address + '</div>');
            infowindow.setPosition(place.geometry.location);
            infowindow.open(map);
        }
    });
}

(function ($) {
    $(function () {

        $('#menuToggle, .menu-close').on('click', function () {
            $('#menuToggle').toggleClass('active');
            $('body').toggleClass('body-push-toleft');
            $('#theMenu').toggleClass('menu-open');
        });

        $.stellar({
            horizontalScrolling: false,
            verticalOffset: 300
        });
    });
})(jQuery);