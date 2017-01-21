var est01=false, est02=false, est03=false;
var lista_coberturas = [
    {id: "1", nombre: "o0d0_01_14", periodo: "Actual", layer: "act_bf_act.json", agregado: false},
    {id: "2", nombre: "o0d0_02_14", periodo: "Incremento", layer: "ant_bf_inc.json", agregado: false},
    {id: "3", nombre: "o0d0_03_14", periodo: "Decremento", layer: "ant_bf_dec.json", agregado: false}
];
function load_geojson() {
    //map.data.loadGeoJson('http://localhost:8070/visor/kml/8_act_pla.json');
    map.data.loadGeoJson('http://localhost:8070/visor/kml/ant_bf_act.json');
    map.data.loadGeoJson('http://localhost:8070/visor/kml/ant_bf_dec.json');
    map.data.loadGeoJson('http://localhost:8070/visor/kml/ant_bf_inc.json');
    map.data.setStyle(style_bf);
    /*map.data.addListener('mouseover', function (event) {
     console.log(event.feature.getGeometry());
     });*/
    map.data.addListener('mouseover', info_map);
    map.data.addListener('mouseout', hide_info);

}

function styleFeature(feature) {
    var id = feature.getProperty('ID');
    var color = "#ff8c00";
    var show_layer = true;
    switch (id) {
        case 1:
            color = "#ff8c00";
            break;
        case 2:
            color = "#00ff00";
            break;
        case 3:
            color = "#0066ff";
            break;
        case 4:
            color = "#ff0000";
            break;
    }

    return{
        fillColor: color,
        strokeWeight: 0.5,
        strokeColor: '#fff',
        visible: show_layer
    };
}
function style_bf(feature) {
    var categoria = feature.getProperty('PRIORIDAD');
    var color = "#ff8c00";
    var show_layer = false;
    var capa = feature.getProperty('CAPA')
    switch (categoria) {
        case 'Muy Baja':
            color = "#7cb4cf";
            show_layer = true;
            break;
        case 'Baja':
            color = "#b5c4b1";
            show_layer = true;
            break;
        case 'Moderada':
            color = "#fcfca2";
            show_layer = true;
            break;
        case 'Alta':
            color = "#fcba86";
            show_layer = true;
            break;
        case 'Muy Alta':
            color = "#f27072";
            show_layer = true;
            break;
    }
    switch (capa) {
        case 'ANT_BF_ACT':
            show_layer = est01;
            break;
        case 'ANT_BF_INC':
            show_layer = est02;
            break;
        case 'ANT_BF_DEC':
            show_layer = est03;
            break;
    }
    return{
        fillColor: color,
        strokeWeight: 1,
        strokeColor: color,
        visible: show_layer,
        fillOpacity: 1
    };

}
function info_map(event) {
    var capa = event.feature;
    $("#div_info").show();
    $("#div_info").html('');
    //$("#div_info").append('<p><b>: </b>'+capa.getProperty('')+'</p>');
    /*$("#div_info").append('<p><b>ECOSISTEMA: </b>' + capa.getProperty('ECOSISTEMA') + '</p>');
     $("#div_info").append('<p><b>TENECIA: </b>' + capa.getProperty('TENENCIA') + '</p>');
     $("#div_info").append('<p><b>TIPO: </b>' + capa.getProperty('T_RECUPERA') + '</p>');
     $("#div_info").append('<p><b>FASE: </b>' + capa.getProperty('FASE_RECUP') + '</p>');
     $("#div_info").append('<p><b>SECTOR: </b>' + capa.getProperty('SECTOR') + '</p>');
     $("#div_info").append('<p><b>ESPECIES: </b>' + capa.getProperty('ESPECIES') + '</p>');
     $("#div_info").append('<p><b>AÑO: </b>' + capa.getProperty('ANIO') + '</p>');
     */
    $("#div_info").append('<p><b>PRIORIDAD: </b>' + capa.getProperty('PRIORIDAD') + '</p>');
}
function hide_info(event) {
    $("#div_info").hide();
    $("#div_info").html('');
}
function conmutar_capa(capa){
    switch (capa) {
        case 'ANT_BF_ACT':
            est01=true;
            est02=false;
            est03=false;
            break;
        case 'ANT_BF_INC':
            est01=false;
            est02=true;
            est03=false;
            break;
        case 'ANT_BF_DEC':
            est01=false;
            est02=false;
            est03=true;
            break;
    }
    map.data.setStyle(style_bf);
}