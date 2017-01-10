var map;
var geoXml;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -0.2, lng: -78.85},
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.TERRAIN
    });
    //map.setTilt(0);
    //loadWMS(map, "http://infoagua-guayllabamba.ec:8080/geoserver/wms?", customParams,nombre);
    //map.setZoom(11);


    //geoXml.parse('<?php echo site_url("kml/cta.kml"); ?>');
    /*geoXml = new geoXML3.parser({
     map: map,
     zoom: false
     });
     geoXml.parse("http://localhost:8070/visor/kml/ambito_2016_06.kml");
     */
    //console.log(geoXml.docs);
    //console.log(geoXml.docs.base);

    //geoXml.hideDocument(geoXml.docs[1]);
    //geoXml.docs[0].gpolygons[0].setMap(null)



    /*var ambito = new google.maps.KmlLayer({
     url: 'https://sites.google.com/a/fonag.org.ec/kml_files/capas/ambito_2016_06.kml',
     preserveViewport: true,
     map: map
     });*/
    map.data.loadGeoJson('http://localhost:8070/visor/kml/ambito.json', {idPropertyName: "Id"});
    /*var promise = $.getJSON("http://localhost:8070/visor/kml/ambito.json"); //same as map.data.loadGeoJson();
     promise.then(function (data) {
     cachedGeoJson = data; //save the geojson in case we want to update its values
     var dataFeature = map.data.addGeoJson(cachedGeoJson, {idPropertyName: "NAM"});
     //console.log(dataFeature);
     });*/
    map.data.loadGeoJson('http://localhost:8070/visor/kml/8_act_pla_2012.json', {idPropertyName: "Id"});
    map.data.loadGeoJson('http://localhost:8070/visor/kml/8_act_pla_2013.json');

    map.data.setStyle({visible: false});

    /*map.data.forEach(logArrayElements);
     function logArrayElements() {
     console.log("capa");
     }*/

    $(function () {
        map.data.addListener('click', function (event) {
            //show an infowindow on click   
            console.log(event.feature.getId(), event.feature.getProperty("NAM"));
        });

        map.data.toGeoJson(function (object) {
            console.log("asd", object);
        });
        map.data.forEach(function (feature) {
            console.log("foreach", feature.getGeometry());
        });
    });

}




