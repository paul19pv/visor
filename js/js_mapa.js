var map;
var uni_id;
var sec_id;
//var url_mapas = 'http://localhost:8070/visor/geojson/';
//var url_base = 'http://localhost:8070/visor/';
var url_mapas = 'http://infoagua-guayllabamba.ec/visor/geojson/';
var url_base = 'http://infoagua-guayllabamba.ec/visor/';
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -0.2, lng: -78.85},
        //center: {lat: -0.489453, lng: -78.371108},
        zoom: 11,
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
    /*map.data.loadGeoJson(url_mapas + 'paramo/8_act_pla_2012.json');
    map.data.loadGeoJson(url_mapas + 'paramo/8_act_pla_2013.json');
    map.data.loadGeoJson(url_mapas + 'paramo/8_act_pla_2014.json');
    map.data.loadGeoJson(url_mapas + 'paramo/8_act_pla_2015.json');
    map.data.loadGeoJson(url_mapas + 'bf/actual/02_bf_act.json');

    map.data.setStyle(estilo);
    //map.data.addListener('addfeature', info_ambito);
    map.data.addListener('mouseover', info_map);
    map.data.addListener('mouseout', hide_info);*/
    addLayer('fonag01:Ambito_FONAG');
}
function estilo(feature) {
    var categoria = feature.getProperty('PRIORIDAD');
    var color = "#006cac";
    if (categoria !== undefined) {
        switch (categoria) {
            case 'Muy baja':
                color = "#7cb4cf";
                break;
            case 'Baja':
                color = "#b5c4b1";
                break;
            case 'Moderada':
                color = "#fcfca2";
                break;
            case 'Alta':
                color = "#fcba86";
                break;
            case 'Muy alta':
                color = "#f27072";
                break;
        }
    } else {
        color = "#ff8c00";
    }
    return{
        fillColor: color,
        strokeWeight: 1,
        strokeColor: color,
        visible: true,
        fillOpacity: 0.5
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

function info_map(event) {
    $("#div_capa").show();
    $("#div_capa").html('');
    var capa = event.feature;
    var categoria = event.feature.getProperty('PRIORIDAD');
    if (categoria !== undefined) {
        $("#div_capa").append('<p><b>Prioridad: </b>' + capa.getProperty('PRIORIDAD') + '</p>');
        $("#div_capa").append('<p><b>Area: </b>' + capa.getProperty('Area_ha') + '</p>');
        $("#div_capa").append('<p><b>Vegetación: </b>' + capa.getProperty('CLASE') + '</p>');

    } else {
        $("#div_capa").append('<p><b>Área: </b>' + parseFloat(capa.getProperty('AREA_REG')).toFixed(2) + '</p>');
        $("#div_capa").append('<p><b>Popietario: </b>' + capa.getProperty('PROPIETARI') + '</p>');
        $("#div_capa").append('<p><b>Ecosistema: </b>' + capa.getProperty('ECOSISTEMA') + '</p>');
        $("#div_capa").append('<p><b>Tipo Recuperación: </b>' + capa.getProperty('T_RECUPERA') + '</p>');
        $("#div_capa").append('<p><b>Fase Recuperación: </b>' + capa.getProperty('FASE_RECUP') + '</p>');
        $("#div_capa").append('<p><b>Unidad Hídrica: </b>' + capa.getProperty('U_HIDRICA') + '</p>');
        $("#div_capa").append('<p><b>Sector: </b>' + capa.getProperty('SECTOR') + '</p>');
        $("#div_capa").append('<p><b>Año: </b>' + parseFloat(capa.getProperty('ANIO')).toFixed(0) + '</p>');
        $("#div_capa").append('<p><b>Especies: </b>' + capa.getProperty('ESPECIES') + '</p>');
        $("#div_capa").append('<div class="w3-container w3-padding-4"><img class="w3-border w3-padding" src="' + url_base + 'images/planta.JPG" width="100px"></div>');
    }


}
function hide_info(event) {
    $("#div_capa").hide();
    $("#div_capa").html('');
}



