var capa_actual = '';
var lista_coberturas = [];
var listado_capas = [];
$(function () {
    $("#tab_nec_act").tabs({
        collapsible: true,
        active: false
    });
    $('input.chk_unidades').click(precipitacion);
    //load_geojson();
    $("#div_leyenda").hide();
    $("#tab_nec_act").on("tabsactivate", function (event, ui) {
        var active = $("#tab_nec_act").tabs("option", "active");
        active = parseFloat(active);
        if (active === 0) {
            //console.log("0")
            initMap();
            map.data.addListener('mouseover', info_map);
            map.data.addListener('mouseout', hide_info);
            leyenda();
            get_coberturas_precipitacion("Guayllabamba");
            //load_geojson();
        } else if (active === 1) {
            initMap();
            map.data.addListener('mouseover', info_map);
            map.data.addListener('mouseout', hide_info);
            leyenda();
            get_coberturas_precipitacion('Napo');
            //load_geojson();
        }
    });
});

function load_geojson(capa) {

    //centrar_mapa();

    for (var i = 0; i < lista_coberturas.length; i++) {
        if (capa === lista_coberturas[i].nombre && lista_coberturas[i].cargado === false) {
            map.data.loadGeoJson(url_mapas + lista_coberturas[i].layer);
            lista_coberturas[i].cargado = true;
            console.log(lista_coberturas[i].layer);
            break;
        }
    }
    map.data.setStyle(style_init);

}
//centrar el mapa de acuerdo a la unidad hídrica seleccionada
function centrar_mapa() {
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
    map.data.loadGeoJson(url_mapas + 'ambito_2016.json');

}

//cargar las coberturas por json
function get_coberturas_precipitacion(cuenca) {
    lista_coberturas = [];
    var demanda = $("#txt_demanda").val();
    var precipitacion = $("#txt_precipitacion").val();
    var capas = $.ajax({
        url: "/visor/CobVeg/get_coberturas_precipitacion/" + demanda + "/" + precipitacion + "/" + cuenca,
        type: "GET",
        dataType: "json",
        async: false}).responseText;
    capas = JSON.parse(capas)
    for (var i = 0; i < capas.length; i++) {
        var item = {id: i + 1, nombre: capas[i].cap_nombre, periodo: capas[i].cap_precipitacion, layer: capas[i].cap_layer, agregado: false, cargado: false}
        lista_coberturas.push(item);
    }
}
function style_init(feature) {
    return{
        visible: false
    };

}
function style_bf(feature) {
    var categoria = feature.getProperty('PRIORIDAD');
    var capa = feature.getProperty('CAPA');
    var color = "#ffffff";
    var show_layer = false;
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
    var limite = listado_capas.length;
    for (var i = 0; i < limite; i++) {
        if (capa === listado_capas[i].nombre) {
            show_layer = true;
        }
    }
    return{
        fillColor: color,
        strokeWeight: 1,
        strokeColor: color,
        visible: show_layer,
        fillOpacity: 0.5
    };

}
//acivar/desactivar las coberturas por el valor del check
function precipitacion() {
    if ($(this).is(":checked"))
    {
        if ($(this).val() !== 'todos') {
            capa_actual = $(this).val();
            load_geojson(capa_actual);
        }
        conmutar_cobertura($(this).val(), true);
        $("#div_leyenda").show();
    } else {
        console.log(listado_capas.length);
        capa_actual = '';
        conmutar_cobertura($(this).val(), false);
        if (listado_capas.length <= 1) {
            $("#div_leyenda").hide();
        }
    }
    actualizar_coberturas();
    map.data.setStyle(style_bf);

}
//lenar listado_capas en base a los check marados
function actualizar_coberturas() {
    listado_capas = [];
    var limite = lista_coberturas.length;
    for (var i = 0; i < limite; i++) {
        if (lista_coberturas[i].agregado) {
            listado_capas.push(lista_coberturas[i]);
        } else {
            listado_capas.slice(i, 1);
        }
    }
}
//cambiar columna agregado en base al valor del check
function conmutar_cobertura(capa, agregado) {
    var num_coberturas = lista_coberturas.length;
    if (capa !== 'todos') {
        for (var i = 0; i < num_coberturas; i++) {
            if (lista_coberturas[i].nombre === capa) {
                if (agregado) {
                    lista_coberturas[i].agregado = true;
                } else {
                    lista_coberturas[i].agregado = false;
                }

            }
        }
    } else {
        for (var i = 0; i < num_coberturas; i++) {
            if (agregado) {
                lista_coberturas[i].agregado = true;
            } else {
                lista_coberturas[i].agregado = false;
            }
        }
    }
}
function info_map(event) {
    var capa = event.feature;
    $("#div_capa").show();
    $("#div_capa").html('');
    $("#div_capa").append('<p><b>Prioridad: </b>' + capa.getProperty('PRIORIDAD') + '</p>');
    $("#div_capa").append('<p><b>Area: </b>' + capa.getProperty('Area_ha') + '</p>');
    $("#div_capa").append('<p><b>Vegetación: </b>' + capa.getProperty('CLASE') + '</p>');
}
function hide_info(event) {
    $("#div_capa").hide();
    $("#div_capa").html('');
}

function leyenda() {
    //console.log("leyenda");
    //var legend = document.createElement('div');
    var legend = document.getElementById('div_leyenda');
    //legend.id = 'legend';
    var content = [];
    content.push('<h6>Prioridades</h6>');
    content.push('<div class="w3-container w3-padding-0"><div class="indicador muybaja"></div><div class="w3-left">Muy Baja</div></div>');
    content.push('<div class="w3-container w3-padding-0"><div class="indicador baja"></div><div class="w3-left">Baja</div></div>');
    content.push('<div class="w3-container w3-padding-0"><div class="indicador moderada"></div><div class="w3-left">Moderada</div></div>');
    content.push('<div class="w3-container w3-padding-0"><div class="indicador alta"></div><div class="w3-left">Alta</div></div>');
    content.push('<div class="w3-container w3-padding-0"><div class="indicador muyalta"></div><div class="w3-left">Muy Alta</div></div>');
    legend.innerHTML = content.join('');
    legend.index = 1;
    //map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
}