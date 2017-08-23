<html>
    <head>
        <?php header("Access-Control-Allow-Origin: *"); ?>
        <meta http-equiv = "content-type" content = "text/html; charset=utf-8" />

        <link href = "<?php echo base_url() ?>css/jquery-ui.css" rel = "stylesheet" />

        <link rel = "stylesheet" href = "http://www.w3schools.com/lib/w3.css">
        <link href = "<?php echo base_url() ?>css/style.css" rel = "stylesheet" />


        <script src = "<?php echo base_url() ?>js/jquery.js"></script>
        <script src="<?php echo base_url() ?>js/jquery-ui.js"></script>
        <script src="<?php echo base_url() ?>js/js_mapa.js"></script>
        <script src="<?php echo base_url() ?>js/js_wms.js"></script>
        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyB5dESKyIaf42zTejjg4ClShw9rXq-_trM'></script>

    </head>
    <body>
        <!--Mapa Base-->
        <?php echo $mapa; ?>
        <!-- Contenido Dinamico-->
        <div id="div_content" class="w3-col s2 w3-display-topleft w3-margin w3-padding-32">
            <div class="w3-display-container w3-white">
                <div class="contenedor-arbol">
                    <ul>
                        <li class="first"><?= $unidad->uni_nombre?>
                            <ul>
                                <li><?= $sector->sec_nombre ?>
                                    <ul>
                                        <li><?= $ecosistema ?>
                                            <ul>
                                                <li><?= $fase ?></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </div>
                

                <?php echo $seguimiento ?>
            </div>

        </div>


    </body>
</html>