/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var tiempo_lento = 2000;
var tiempo_medio = 1000;
var tiempo_rapido = 500;
var velocidad;
var animacion;
var indicecapa = 0;
var listado_capas = [
    {id: "1", nombre: "o0d0_01_14", mes: "Enero", layer: "8_act_pla_2012.kml"},
    {id: "2", nombre: "o0d0_02_14", mes: "Febrero", layer: "8_act_pla_2013.kml"},
    {id: "3", nombre: "o0d0_03_14", mes: "Marzo", layer: "8_act_pla_2014.kml"},
    {id: "4", nombre: "o0d0_04_14", mes: "Abril", layer: "8_act_pla_2015.kml"}
    /*{id: "6", nombre: "o0d0_06_14", mes: "Junio", layer: "fonag:ro_men10_06_14"},
     {id: "7", nombre: "o0d0_07_14", mes: "Julio", layer: "fonag:ro_men10_07_14"},
     {id: "8", nombre: "o0d0_08_14", mes: "Agosto", layer: "fonag:ro_men10_08_14"},
     {id: "9", nombre: "o0d0_09_14", mes: "Spetiembre", layer: "fonag:ro_men10_09_14"},
     {id: "10", nombre: "o0d0_10_14", mes: "Octubre", layer: "fonag:ro_men10_10_14"},
     {id: "11", nombre: "o0d0_11_14", mes: "Noviembre", layer: "fonag:ro_men10_11_14"},
     {id: "12", nombre: "o0d0_12_14", mes: "Diciembre", layer: "fonag:ro_men10_12_14"}*/

];
var url_mapas = 'http://localhost:8070/visor/kml/';
var myVar;
var ctaLayer = new google.maps.KmlLayer();
var kml_layer=null;
$(function () {
    $("#tab_par_sim_act").tabs();
    $("input[name=velocidad]").click(function () {
        velocidad = $(this).val();
        console.log(velocidad);
    });
    $("#btn_animacion").click(function () {
        //add_kml('ambito_2016.kml');
        /*var mivarJS =<?php echo $lista ?>;
         data = JSON.stringify(mivarJS);
         console.log(mivarJS);*/
        
        var ctaLayer = new google.maps.KmlLayer();
        if ($(this).html() === "Iniciar") {
            //iniciarAnimacion();
            //var nombre = 'ambito_2016.kml';
            //add_kml('8_act_pla_2012.kml');
            //capa_actual();
            load_kml();
            
            //console.log(kml_layer.docs[4]);
            //hide_kml();
            $(this).html("Detener");
        } else {
            //kml_layer.hideDocument();
            hide_kml();
            //detenerAnimacion();
            //ctaLayer.setMap(null);
            $(this).html("Iniciar");
        }

    });

});

function iniciarAnimacion() {
    indicecapa = 1;
    kml_layer.showDocument(kml_layer.docs[indice_actual()]);
    myVar = setInterval(activar_cobertura, 3000);
}
function detenerAnimacion() {
    indicecapa = 0;
    clearInterval(myVar);
    console.log("numero de capas", map.overlayMapTypes.getLength());
    //removeLayer(map);
    kml_layer.hideDocument(kml_layer.docs[indice_actual()]);
}
function activar_cobertura() {
    var verCobertura = false;
    var numero_capas = listado_capas.length;
    while (!verCobertura) {
        console.log("while", listado_capas.length);
        if (numero_capas > 0) {
            if (indicecapa > 0 && indicecapa < numero_capas) {
                if (capa_actual() === url_mapas + listado_capas[indicecapa - 1].layer) {
                    console.log("capa eliminada", capa_actual());
                    kml_layer.hideDocument(kml_layer.docs[indice_actual()]);
                }
                if (capa_actual() !== listado_capas[indicecapa - 1].layer) {
                    kml_layer.showDocument(kml_layer.docs[indice_actual()]);
                    console.log("capa agregada", capa_actual());
                    verCobertura = true;
                }
            } else {
                kml_layer.showDocument(kml_layer.docs[indice_actual()]);
                console.log("capa agregada", capa_actual());
                verCobertura = true;
            }
        }
        indicecapa++;
        if (indicecapa >= numero_capas) {
            indicecapa = 0;
            kml_layer.hideDocument(kml_layer.docs[indice_actual()]);
            console.log("indice", indicecapa)
        }
        /*
         if(numero_capas>0){
         add_kml(listado_capas[indicecapa].layer);
         verCobertura=true;
         }*/
    }
}
function activar_kml() {
    var verCobertura = false;
    var numero_capas = listado_capas.length;
    while (!verCobertura) {
        console.log("while", listado_capas.length);
        if (numero_capas > 0) {
            if (indicecapa > 0 && indicecapa < numero_capas) {
                //setTimeout(delete_kml(listado_capas[indicecapa].layer), 2000);
                delete_kml();
                setTimeout(add_kml(listado_capas[indicecapa].layer), 2000);
                console.log("capa agregada");
                verCobertura = true;
            } else {
                //add_kml(listado_capas[indicecapa].layer);
                delete_kml();
                setTimeout(add_kml(listado_capas[indicecapa].layer), 2000);
                console.log("capa agregada");
                verCobertura = true;
            }
        }
        indicecapa++;
        if (indicecapa >= numero_capas) {
            indicecapa = 0;
            console.log("indice", indicecapa);
        }
        /*
         if(numero_capas>0){
         add_kml(listado_capas[indicecapa].layer);
         verCobertura=true;
         }*/
    }
}
function add_kml(nombre) {
    //var capa = getLayer(nombre);
    //map.overlayMapTypes.insertAt(0, capa);

    ctaLayer.setOptions({
        url: 'https://sites.google.com/a/fonag.org.ec/kml_files/paramo/' + nombre,
        preserveViewport: true,
        map: map

    });
}
function delete_kml() {
    ctaLayer.setMap(null);
}
function exist_kml(capa) {
    var estado=true;
    for (var i=0;i<kml_layer.docs.length;i++) {
       console.log(kml_layer.docs[i].url,capa);
       if(kml_layer.docs[i].url===capa){
           
            estado=false;
            break;
        }
    }
    console.log(estado,kml_layer.docs.length);
    return estado;
}
function indice_actual(capa) {
    var indice=null;
    for(var i in kml_layer.docs){ 
        if(kml_layer.docs[i].url===capa){
            indice=i;
            break;
        }
    }
    console.log(indice,kml_layer.docs.length);
    return indice;
}
function load_kml() {
    kml_layer = new geoXML3.parser({
        map: map,
        zoom: false
    });
    for (var i=0;i<listado_capas.length;i++) {
        if(exist_kml(url_mapas+listado_capas[i].layer)===true){
            if(i===0){
                kml_layer.parse(url_mapas+listado_capas[i].layer);
            }else{
                kml_layer.parse(url_mapas+listado_capas[i].layer,kml_layer.docs);
            }
            
            console.log(listado_capas[i].layer);
        }
        
        //kml_layer.hideDocument(kml_layer.docs[indice_actual()]);
        //indice_actual(url_mapas+listado_capas[i].layer)
        //var indice=indice_actual(url_mapas+listado_capas[i].layer);
        //kml_layer.hideDocument(kml_layer.docs[indice]);
    }
    console.log(kml_layer.docs.length);
}
function hide_kml(){
    for (var i=0;i<listado_capas.length;i++) {
        var indice=indice_actual(url_mapas+listado_capas[i].layer);
        //indice=parseInt(indice);
        kml_layer.hideDocument(kml_layer.docs[parseInt(indice)]);
    }
}



