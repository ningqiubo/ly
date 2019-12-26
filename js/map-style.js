var marker;
var image = 'images/map-marker.png';
function initMap() {
var myLatLng = {lat: 39.79, lng: -86.14};

// Specify features and elements to define styles.
var styleArray = [
    {
        "featureType": "all",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-31"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#91713d"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 30
            },
            {
                "saturation": 30
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": "0"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#9a5c08"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "weight": "0.01"
            },
            {
                "lightness": "0"
            },
            {
                "gamma": "0.00"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "weight": "0.01"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "weight": "0.01"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "lightness": -20
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#00cbff"
            },
            {
                "saturation": "-65"
            },
            {
                "lightness": "-16"
            },
            {
                "gamma": "1.36"
            }
        ]
    }
];

var map = new google.maps.Map(document.getElementById('map'), {
  center: myLatLng,
  scrollwheel: false,
   // Apply the map style array to the map.
  styles: styleArray,
  zoom: 7
});

var directionsDisplay = new google.maps.DirectionsRenderer({
  map: map
});

// Create a marker and set its position.
marker = new google.maps.Marker({
  map: map,
  icon: image,
  draggable: true,
  animation: google.maps.Animation.DROP,
  position: myLatLng
});
marker.addListener('click', toggleBounce);
}

function toggleBounce() {
if (marker.getAnimation() !== null) {
  marker.setAnimation(null);
} else {
  marker.setAnimation(google.maps.Animation.BOUNCE);
}
}