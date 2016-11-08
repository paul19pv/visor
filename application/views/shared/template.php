<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
        <link href="<?php echo base_url() ?>css/jquery-ui.css" rel="stylesheet" />
        
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet" />
        
        <script src="<?php echo base_url() ?>js/jquery.js"></script>
        <script src="<?php echo base_url() ?>js/jquery-ui.js"></script>
        <script src="<?php echo base_url() ?>js/js_mapa.js"></script>
        <script src="<?php echo base_url() ?>js/js_wms.js"></script>
        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyB5dESKyIaf42zTejjg4ClShw9rXq-_trM'></script>
    </head>
    <body>
        <?php echo $mapa;?>
        <div id="div_content" class="w3-col s5 w3-display-topleft w3-margin w3-padding-32">
            <?php echo $content?>
        </div>
        
    </body>
</html>