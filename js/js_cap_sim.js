var capa_actual = '';
var lista_coberturas = [];
var listado_capas = [];
$(function () {
    $("#tab_nec_act").tabs();
    $('input.chk_precipitacion').click(precipitacion);
    //load_geojson();
});

function load_geojson() {
    //$("#chk_todos").prop("disabled", true);
    //centrar_mapa();
    $("#tab_nec_act").hide();
    get_coberturas_precipitacion();
    for (var i = 0; i < lista_coberturas.length; i++) {
        map.data.loadGeoJson(url_mapas + lista_coberturas[i].layer);
        console.log(lista_coberturas[i].layer);
    }
    google.maps.event.addListenerOnce(map.data, 'addfeature', function () {
        //google.maps.event.trigger(document.getElementById('chk_todos'),'click');
        console.log("espera");
        //$("#chk_todos").prop("disabled", false);
        $("#tab_nec_act").show();
    });
    map.data.setStyle(style_bf);
    map.data.addListener('mouseover', info_map);
    map.data.addListener('mouseout', hide_info);

}

//cargar las coberturas por json
function get_coberturas_precipitacion() {
    lista_coberturas = [];
    var demanda = $("#txt_demanda").val();
    var precipitacion = $("#txt_precipitacion").val();
    var capas = $.ajax({
        url: "/visor/CobVeg/get_coberturas_precipitacion/" + demanda + "/" + precipitacion,
        type: "GET",
        dataType: "json",
        async: false}).responseText;
    capas = JSON.parse(capas)
    for (var i = 0; i < capas.length - 2; i++) {
        var item = {id: i + 1, nombre: capas[i].cap_nombre, periodo: capas[i].cap_precipitacion, layer: capas[i].cap_layer, agregado: false}
        lista_coberturas.push(item);
    }
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
        fillOpacity: 1
    };

}
//acivar/desactivar las coberturas por el valor del check
function precipitacion() {
    if ($(this).is(":checked"))
    {
        if ($(this).val() !== 'todos') {
            capa_actual = $(this).val();
        }
        conmutar_cobertura($(this).val(), true);
    } else {
        capa_actual = '';
        conmutar_cobertura($(this).val(), false);
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