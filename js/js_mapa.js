var map;
var uni_id;
var sec_id;
var url_mapas = 'http://localhost:8070/visor/geojson/';
var url_base = 'http://localhost:8070/visor/';
//var url_mapas = 'http://infoagua-guayllabamba.ec/visor/geojson/';
//var url_base = 'http://infoagua-guayllabamba.ec/visor/';
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -0.2, lng: -78.85},
        //center: {lat: -0.489453, lng: -78.371108},
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.HYBRID,
        mapTypeControlOptions: {
            mapTypeIds: [
                google.maps.MapTypeId.ROADMAP,
                google.maps.MapTypeId.TERRAIN,
                google.maps.MapTypeId.SATELLITE,
                google.maps.MapTypeId.HYBRID
            ],
            //style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
            position: google.maps.ControlPosition.LEFT_BOTTOM
        }
    });
    map.data.loadGeoJson(url_mapas + '17_act_man_2013.json');
    //map.data.setStyle(estilo);
    //map.data.addListener('addfeature', info_ambito);
    addLayer('fonag01:Ambito_FONAG');
}
function estilo(feature) {
    var categoria = feature.getProperty('PRIORIDAD');
    var color = "#006cac";
    if (categoria === undefined) {
        console.log('ok')
    } else {
        console.log('no')
    }
    return{
        fillColor: color,
        strokeWeight: 2,
        strokeColor: color,
        fillOpacity: 0
    };


}
function info_ambito(event) {
    var unidad = event.feature.getProperty('NAM');
    var latitud = parseFloat(event.feature.getProperty('LATITUD'));
    var longitud = parseFloat(event.feature.getProperty('LONGITUD'));

    var posicion = map.getBounds().getCenter();
    var infowindow = new google.maps.InfoWindow({
        content: unidad,
        position: {lat: latitud, lng: longitud}
    });
    infowindow.open(map);
    console.log(unidad, posicion);
}



