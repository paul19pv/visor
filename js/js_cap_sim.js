var capa_actual = '';
var unidad_actual = '';
var lista_coberturas = [];
var listado_capas = [];
var lista_recuperacion = [];
var listado_recuperacion = [];
var lista_unidades = [];
var contador = 0;
$(function () {
    $("#tab_nec_act").tabs({
        collapsible: true,
        active: false
    });
    $('input.chk_unidades').click(precipitacion);
    $('input.chk_recuperacion').click(recuperacion);
    //load_geojson();
    $("#div_leyenda").hide();
    $("#tab_nec_act").on("tabsactivate", function (event, ui) {
        var active = $("#tab_nec_act").tabs("option", "active");
        active = parseFloat(active);
        if (active === 0) {
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
        get_recuperacion_unidad();
    });
});
//cargar las capas del modelo
function load_geojson(capa) {

    //centrar_mapa();
    for (var i = 0; i < lista_coberturas.length; i++) {
        if (capa === lista_coberturas[i].nombre && lista_coberturas[i].cargado === false) {
            map.data.loadGeoJson(url_mapas + lista_coberturas[i].layer);
            lista_coberturas[i].cargado = true;
            break;
        }
    }

}
//cargar las capas de recuperacion
function load_recuperacion(unidad) {
    for (var i = 0; i < lista_recuperacion.length; i++) {
        if (unidad === lista_recuperacion[i].unidad && lista_recuperacion[i].cargado === false) {
            map.data.loadGeoJson(url_mapas + lista_recuperacion[i].layer);
            lista_recuperacion[i].cargado = true;
        }
    }
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
    capas = JSON.parse(capas);
    for (var i = 0; i < capas.length; i++) {
        var item = {id: i + 1, nombre: capas[i].cap_nombre, periodo: capas[i].cap_precipitacion, layer: capas[i].cap_layer, agregado: false, cargado: false};
        lista_coberturas.push(item);
    }
}
//cargar las capas de recuperacion por unidad
function get_recuperacion_unidad() {
    lista_recuperacion = [];
    //var unidad = $("#txt_unidad").val();
    var capas = $.ajax({
        url: "/visor/CobVeg/get_recuperacion_unidad",
        type: "GET",
        dataType: "json",
        async: false}).responseText;
    capas = JSON.parse(capas);
    for (var i = 0; i < capas.length; i++) {
        var item = {id: i + 1, nombre: capas[i].seg_nombre, periodo: capas[i].seg_periodo, layer: capas[i].seg_archivo, ecosistema: capas[i].seg_ecosistema, unidad: capas[i].sec_unidad, agregado: false, cargado: false};
        lista_recuperacion.push(item);
    }
}
function style_init(feature) {
    return{
        visible: false
    };

}
function style_capas(feature) {
    var categoria = feature.getProperty('PRIORIDAD');
    var capa = feature.getProperty('CAPA');
    var color = "#ffffff";
    var show_layer = false;
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
    var limite = listado_capas.length;
    for (var i = 0; i < limite; i++) {
        if (capa === listado_capas[i].nombre && categoria !== undefined) {
            show_layer = true;
        }
    }
    var index = listado_recuperacion.length;
    for (var j = 0; j < index; j++) {
        if (capa === listado_recuperacion[j].nombre) {
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
        //console.log(listado_capas.length);
        capa_actual = '';
        conmutar_cobertura($(this).val(), false);
        if (listado_capas.length <= 1) {
            $("#div_leyenda").hide();
        }
    }
    actualizar_coberturas();

    map.data.setStyle(style_capas);
}
function recuperacion() {
    if ($(this).is(":checked"))
    {
        unidad_actual = $(this).val();
        load_recuperacion(unidad_actual);
        conmutar_recuperacion($(this).val(), true);
        //$("#div_leyenda").show();
    } else {
        unidad_actual = '';
        conmutar_recuperacion($(this).val(), false);

    }
    actualizar_recuperacion();
    actualizar_unidades();
    contador = 0;
    map.data.setStyle(style_capas);
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
//llenar el listado_recuperacion en base a la unidad seleccionada
function actualizar_recuperacion() {
    listado_recuperacion = [];
    var limite = lista_recuperacion.length;
    for (var i = 0; i < limite; i++) {
        if (lista_recuperacion[i].agregado) {
            listado_recuperacion.push(lista_recuperacion[i]);
        } else {
            listado_recuperacion.slice(i, 1);
        }
    }
    console.log(listado_recuperacion.length);
}
function actualizar_unidades() {
    lista_unidades = [];
    $('input.chk_recuperacion:checked').each(
            function () {
                lista_unidades.push({unidad: $(this).val()});
            }
    );
    console.log(lista_unidades);
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
function conmutar_recuperacion(unidad, agregado) {
    var num_coberturas = lista_recuperacion.length;
    for (var i = 0; i < num_coberturas; i++) {
        if (lista_recuperacion[i].unidad === unidad) {
            if (agregado) {
                lista_recuperacion[i].agregado = true;
            } else {
                lista_recuperacion[i].agregado = false;

            }

        }
    }

}
function info_map(event) {
    $("#div_capa").show();
    $("#div_capa").html('');
    var capa = event.feature;
    var categoria = event.feature.getProperty('PRIORIDAD');
    if (categoria !== undefined) {
        $("#div_capa").append('<p><b>Prioridad: </b>' + capa.getProperty('PRIORIDAD') + '</p>');
        $("#div_capa").append('<p><b>Area: </b>' + parseFloat(capa.getProperty('Area_ha')).toFixed(2) + ' ha</p>');
        $("#div_capa").append('<p><b>Vegetación: </b>' + capa.getProperty('CLASE') + '</p>');

    } else {
        $("#div_capa").append('<p><b>Área: </b>' + parseFloat(capa.getProperty('AREA_REG')).toFixed(2) + ' ha</p>');
        $("#div_capa").append('<p><b>Popietario: </b>' + capa.getProperty('PROPIETARI') + '</p>');
        $("#div_capa").append('<p><b>Ecosistema: </b>' + capa.getProperty('ECOSISTEMA') + '</p>');
        $("#div_capa").append('<p><b>Tipo Recuperación: </b>' + capa.getProperty('T_RECUPERA') + '</p>');
        $("#div_capa").append('<p><b>Fase Recuperación: </b>' + capa.getProperty('FASE_RECUP') + '</p>');
        $("#div_capa").append('<p><b>Unidad Hídrica: </b>' + capa.getProperty('U_HIDRICA') + '</p>');
        $("#div_capa").append('<p><b>Sector: </b>' + capa.getProperty('SECTOR') + '</p>');
        $("#div_capa").append('<p><b>Año: </b>' + parseFloat(capa.getProperty('ANIO')).toFixed(0) + '</p>');
        if(capa.getProperty('ESPECIES')!==undefined){
            $("#div_capa").append('<p><b>Especies: </b>' + capa.getProperty('ESPECIES') + '</p>');
        }
        $("#div_capa").append('<div class="w3-container w3-padding-4"><img class="w3-border w3-padding" src="' + url_base + 'images/planta.JPG" width="150px"></div>');
    }
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