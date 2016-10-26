var map;

var customParams = [
    "FORMAT=image/png8",
    "LAYERS=fonag01:Ambito_FONAG"
];
//Add query string params to custom params
var pairs = location.search.substring(1).split('&');
for (var i = 0; i < pairs.length; i++) {
    customParams.push(pairs[i]);
}

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -0.2, lng: -78.85},
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.TERRAIN
    });
    loadWMS(map, "http://infoagua-guayllabamba.ec:8080/geoserver/wms?", customParams);
   
}

