var map;
var uni_id;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -0.2, lng: -78.85},
        //center: {lat: -0.489453, lng: -78.371108},
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.TERRAIN
    });

    /*
     //geoXml.parse('<?php echo site_url("kml/cta.kml"); ?>');
     geoXml = new geoXML3.parser({
     map: map,
     zoom: false
     });
     geoXml.parse("http://localhost:8070/visor/kml/ambito_2016_06.kml");
     */
    addLayer('fonag01:Ambito_FONAG');
    //console.log(map.overlayMapTypes.getAt(0).name);
    //load_geojson();

}




