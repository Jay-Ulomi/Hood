<!DOCTYPE html>
<html lang="en">
<base href="/public">
@include('Css')

<body>
@include( 'Header' )

@include( 'nav' );

@include('NearMe.Near-Me-component')

@include('Script')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANX_uHB0oprasgt2mltqujOFWdNt5748c&callback=initMap" async defer></script>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10
        });

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                var marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                    title: 'My Location',
                    icon: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                });

                map.setCenter(pos);
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            handleLocationError(false, infoWindow, map.getCenter());
        }

        @foreach($NearMe as $location)
            var marker = new google.maps.Marker({
                position: {lat: {{ $location['latitude'] }}, lng: {{ $location['longitude'] }}},
                map: map,
                title: '{{ $location['gname'] }}',
                icon: 'http://maps.gstatic.com/mapfiles/ms2/micons/cabs.png'
            });

            var contentString = '<div id="content">' +
                '<h6 id="firstHeading" class="firstHeading">{{ $location['gname'] }}</h6>' +
                '<div id="bodyContent">' +
                '<p><b>Phone Number:</b> {{ $location['phone'] }}</p>' +
                '</div>' +
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
                window.location.href = '{{ route('location', ['id' => $location['id']]) }}';
            });
        @endforeach
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        // Display an error message if geolocation fails
        // You can customize this error message as needed
        var errorMsg = browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.';
        alert(errorMsg);
    }
</script>

@include( 'Footer' )

</body>
</html>
