var show_layer = false;
$(function () {
    $("#tab_par_act").tabs({
        beforeLoad: function (event, ui) {
            ui.jqXHR.fail(function () {
                ui.panel.html(
                        "Couldn't load this tab. We'll try to fix this as soon as possible. " +
                        "If this wouldn't be a demo.");
            });
        }
    });
    load_geojson();

    //habilitar/deshabilitar checks precipitacion
    $('#chk_activa').click(precipitacion);
});
function load_geojson() {
    map.data.loadGeoJson(url_mapas + 'paramo/8_act_pla.json');
    map.data.setStyle(style_bf);
    map.data.addListener('mouseover', info_map);
    map.data.addListener('mouseout', hide_info);
    //console.log(google.maps.Data.Feature.getProperty('CODIGO'));
}

//cargar las coberturas de la base de datos y asignar a la variable lista_coberturas
function get_coberturas_sector() {
    //alert("algo");
    lista_coberturas = [];
    var sector = '8';
    var fase = 'activa';
    //console.log(sector, fase);
    var capas = $.ajax({
        url: "/visor/CobVeg/get_coberturas_sector/" + sector + "/" + fase,
        type: "GET",
        dataType: "json",
        async: false}).responseText;
    capas = JSON.parse(capas)
    for (var i = 0; i < capas.length; i++) {
        var item = {id: i + 1, nombre: capas[i].seg_nombre, periodo: capas[i].seg_periodo, layer: capas[i].seg_archivo, agregado: false}
        lista_coberturas.push(item);
    }
}
function style_bf(feature) {
    var color = "#FF8C00";
    return{
        fillColor: color,
        strokeWeight: 1,
        strokeColor: color,
        visible: show_layer,
        fillOpacity: 0.5
    };

}
function precipitacion() {
    console.log("llego")
    if ($(this).is(":checked"))
    {
        show_layer = true;
    } else {
        show_layer = false;
    }
    map.data.setStyle(style_bf);
}

function info_map(event) {
    var capa = event.feature;
    $("#div_capa").show();
    $("#div_capa").html('');
    $("#div_capa").append('<p><b>Área: </b>' + parseFloat(capa.getProperty('AREA_REG')).toFixed(2) + '</p>');
    $("#div_capa").append('<p><b>Popietario: </b>' + capa.getProperty('PROPIETARI') + '</p>');
    $("#div_capa").append('<p><b>Ecosistema: </b>' + capa.getProperty('ECOSISTEMA') + '</p>');
    $("#div_capa").append('<p><b>Tipo Recuperación: </b>' + capa.getProperty('T_RECUPERA') + '</p>');
    $("#div_capa").append('<p><b>Fase Recuperación: </b>' + capa.getProperty('FASE_RECUP') + '</p>');
    $("#div_capa").append('<p><b>Unidad Hídrica: </b>' + capa.getProperty('U_HIDRICA') + '</p>');
    $("#div_capa").append('<p><b>Sector: </b>' + capa.getProperty('SECTOR') + '</p>');
    $("#div_capa").append('<p><b>Año: </b>' + parseFloat(capa.getProperty('ANIO')).toFixed(0) + '</p>');
    $("#div_info").append('<div class="w3-container w3-padding-4"><img class="w3-border w3-padding" src="' + url_base + 'images/planta.JPG" width="100px"></div>');
}
function hide_info(event) {
    $("#div_capa").hide();
    $("#div_capa").html('');
}
function info_cobertura(capa) {
    //$("#div_info").html("<p>" + "<b>Periodo: </b>" + capa.periodo + "</p>");
    //$("#div_info").show();
    $("#div_info").html('');
    $("#div_info").append('<p><b>Área: </b>' + parseFloat(capa.getProperty('AREA_REG')).toFixed(2) + '</p>');
    $("#div_info").append('<p><b>Popietario: </b>' + capa.getProperty('PROPIETARI') + '</p>');
    $("#div_info").append('<p><b>Ecosistema: </b>' + capa.getProperty('ECOSISTEMA') + '</p>');
    $("#div_info").append('<p><b>Tipo Recuperación: </b>' + capa.getProperty('T_RECUPERA') + '</p>');
    $("#div_info").append('<p><b>Fase Recuperación: </b>' + capa.getProperty('FASE_RECUP') + '</p>');
    $("#div_info").append('<p><b>Unidad Hídrica: </b>' + capa.getProperty('U_HIDRICA') + '</p>');
    $("#div_info").append('<p><b>Sector: </b>' + capa.getProperty('SECTOR') + '</p>');
    $("#div_info").append('<p><b>Año: </b>' + parseFloat(capa.getProperty('ANIO')).toFixed(0) + '</p>');
    $("#div_info").append('<div class="w3-container w3-padding-4"><img class="w3-border w3-padding" src="' + url_base + 'images/planta.JPG" width="100px"></div>');
}