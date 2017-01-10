function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        //center: {lat: 41.876, lng: -87.624}
        center: {lat: -0.2, lng: -78.85},
    });

    /*var ctaLayer = new google.maps.KmlLayer({
     url: 'http://localhost:8070/visor/kml/cta.kml',
     //url: 'http://googlemaps.github.io/js-v2-samples/ggeoxml/cta.kml',
     map: map
     });
     */
    /*geoXml = new geoXML3.parser({
        map: map
    });
    //geoXml.parse('<?php echo site_url("kml/cta.kml"); ?>');
    geoXml.parse('http://localhost:8070/visor/kml/ambito_2016_01.kml');
    */
}