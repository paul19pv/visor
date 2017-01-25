var velocidad = 0;
var indicecapa = 0;
var var_timer;
var capa_actual = '';
//var url_mapas = 'http://localhost:8070/visor/geojson/';
var lista_coberturas = [];
var listado_capas = [];

$(function () {
    load_geojson();

    $("input[name=velocidad]").click(function () {
        velocidad = $(this).val();
    });
    $("#btn_simulacion").click(function () {
        console.log("entro");
        if (listado_capas.length > 1 && velocidad > 0) {
            if ($(this).html() === "Iniciar") {
                iniciarAnimacion();
                $(this).html("Detener");
            } else {
                detenerAnimacion();
                $(this).html("Iniciar");
            }
        }
    });
    //habilitar/deshabilitar checks precipitacion
    $("#chk_todos").click(conmutar_periodos);
    
    $('#div_precipitacion input').click(precipitacion);
});
function load_geojson() {
    $("#chk_todos").prop("disabled", true);
    centrar_mapa();
    get_coberturas_unidad();
    for (var i = 0; i < lista_coberturas.length; i++) {
        map.data.loadGeoJson(url_mapas + lista_coberturas[i].layer);
        console.log(lista_coberturas[i].layer);
    }
    google.maps.event.addListenerOnce(map.data, 'addfeature', function () {
        //google.maps.event.trigger(document.getElementById('chk_todos'),'click');
        console.log("espera");
        $("#chk_todos").prop("disabled", false);
    });
    map.data.setStyle(style_bf);
    map.data.addListener('mouseover', info_map);
    map.data.addListener('mouseout', hide_info);

}
//centrar el mapa de acuerdo a la unidad hídrica seleccionada
function centrar_mapa() {
    var unidad = $("#txt_unidad").val();
    var latitud = parseFloat($("#lat" + unidad).val()), longitud = parseFloat($("#lon" + unidad).val());
    console.log(unidad);

    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: latitud, lng: longitud},
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.TERRAIN
    });
    addLayer('fonag01:Ambito_FONAG');
}
//cargar las coberturas de la base de datos y asignar a la variable lista_coberturas
function get_coberturas_unidad() {
    lista_coberturas = [];
    var unidad = $("#txt_unidad").val();
    var demanda = $("#txt_demanda").val();
    var capas = $.ajax({
        url: "/visor/CobVeg/get_coberturas_unidad/" + unidad + "/" + demanda,
        type: "GET",
        dataType: "json",
        async: false}).responseText;
    capas = JSON.parse(capas)
    for (var i = 0; i < capas.length; i++) {
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
function animacion(feature) {
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
    if (capa === capa_actual) {
        show_layer = true;
        //info_cobertura(feature)
    }
    return{
        fillColor: color,
        strokeWeight: 1,
        strokeColor: color,
        visible: show_layer,
        fillOpacity: 1
    };

}
function iniciarAnimacion() {
    $("input.w3-check").prop("disabled", true);
    $("input.w3-radio").prop("disabled", true);
    //$("#div_info").show();
    capa_actual = listado_capas[0].nombre;
    map.data.setStyle(animacion);
    console.log("capa agregada ini", capa_actual);
    indicecapa = 1;
    //info_cobertura(listado_capas[0]);

    var_timer = setInterval(activar_cobertura, velocidad);

}
function detenerAnimacion() {
    $("input.w3-check").prop("disabled", false);
    $("input.w3-radio").prop("disabled", false);
    //$("#div_info").hide();
    indicecapa = 0;
    clearInterval(var_timer);
    console.log("numero de capas", map.overlayMapTypes.getLength());
    capa_actual = '';
    map.data.setStyle(animacion);
    //kml_layer.hideDocument(kml_layer.docs[indice_actual()]);
}
//activar/desactivar capas por el valor del check
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

function activar_cobertura() {
    var verCobertura = false;
    var numero_capas = listado_capas.length;
    while (!verCobertura) {
        console.log("while", listado_capas.length);
        if (indicecapa >= numero_capas) {
            indicecapa = 0;
            capa_actual = '';
            map.data.setStyle(animacion);
            console.log("capa eliminada", capa_actual);
        }
        if (numero_capas > 1) {
            if (indicecapa > 0 && indicecapa < numero_capas) {
                if (capa_actual === listado_capas[indicecapa - 1].nombre) {
                    console.log("capa eliminada", capa_actual);
                    capa_actual = '';
                    map.data.setStyle(animacion);
                }
                if (capa_actual !== listado_capas[indicecapa - 1].nombre) {
                    capa_actual = listado_capas[indicecapa].nombre;
                    //map.data.setStyle(animacion);
                    setTimeout(agregar_capa, 1000);
                    //info_cobertura(listado_capas[indicecapa]);
                    map.data.setStyle(animacion);
                    console.log("capa agregada0", capa_actual);
                    verCobertura = true;
                }
            } else {
                capa_actual = listado_capas[indicecapa].nombre;
                //map.data.setStyle(style_bf);
                setTimeout(agregar_capa, 1000);
                //info_cobertura(listado_capas[indicecapa]);
                console.log("capa agregada1", capa_actual);
                verCobertura = true;
            }
        }
        indicecapa++;
    }
}
function agregar_capa() {
    map.data.setStyle(animacion);
}
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
function conmutar_periodos() {
    $("input.chk_precipitacion").prop("disabled", this.checked);
    $("input.chk_precipitacion").prop("checked", this.checked);
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
function info_cobertura(capa) {
    $("#div_info").append('<p><b>Prioridad: </b>' + capa.getProperty('PRIORIDAD') + '</p>');
    $("#div_info").append('<p><b>Area: </b>' + capa.getProperty('Area_ha') + '</p>');
    $("#div_info").append('<p><b>Vegetación: </b>' + capa.getProperty('CLASE') + '</p>');
}