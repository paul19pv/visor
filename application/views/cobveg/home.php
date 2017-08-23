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
        <script src="<?php echo base_url() ?>js/js_seguimiento.js"></script>
        <script src="<?php echo base_url() ?>js/js_wms.js"></script>
        <script src="<?php echo base_url() ?>js/jquery.elevatezoom.js"></script>
        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyB5dESKyIaf42zTejjg4ClShw9rXq-_trM'></script>

    </head>
    <body>
        <!--Mapa Base-->

        <!-- Contenido Principal-->
        <div>
            <div class="w3-row">

            </div>
            <div class="w3-row">
                <div class="w3-col l2 s4 ">
                    <?php echo $seguimiento ?>
                    <!--informacion-->
                    <div id="div_info" class="w3-container w3-white w3-round" style="display: none">
                        
                    </div>
                    <div id="div_capa" class="w3-container w3-white w3-round" style="display: none;">
                        <div class="w3-row">
                            <div class="w3-col l4"><p class="w3-margin-0"><strong>Área:</strong></p></div>
                            <div class="w3-col l8" id="area"></div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l4"><p class="w3-margin-0"><strong>Propietario:</strong></p></div>
                            <div class="w3-col l8" id="propietario"></div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l4"><p class="w3-margin-0"><strong>Ecosistema:</strong></p></div>
                            <div class="w3-col l8" id="ecosistema"></div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l8"><p class="w3-margin-0"><strong>Estrategía de Recuperación:</strong></p></div>
                            <div class="w3-col l4" id="estrategia"></div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l8"><p class="w3-margin-0"><strong>Actividad de Recuperación: </strong></p></div>
                            <div class="w3-col l4" id="actividad"></div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l8"><p class="w3-margin-0"><strong>Unidad Hídrica: </strong></p></div>
                            <div class="w3-col l4" id="unidad"></div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l4"><p class="w3-margin-0"><strong>Sector: </strong></p></div>
                            <div class="w3-col l8" id="sector"></div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l4"><p class="w3-margin-0"><strong>Año: </strong></p></div>
                            <div class="w3-col l8" id="anio"></div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l4"><p class="w3-margin-0"><strong>Especies: </strong></p></div>
                            <div class="w3-col l8" id="especies"></div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l4"><p class="w3-margin-0"><strong>Imagen: </strong></p></div>
                            <div class="w3-col l8" id="imagen">
                                <a id="btn_imagen" href="#">
                                    <img src="<?= base_url()?>images/planta.JPG" height="100px"  />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="div_leyenda" class="w3-container w3-white w3-round" style="display: none" >
                    </div>
                    
                </div>
                <div class="w3-col l10 s8">
                    <?php echo $mapa; ?>
                </div>



            </div>
        </div>
        <div id="img_zoom" title="Imagen">
            <img src="<?= base_url()?>images/planta_large.JPG" height="300px"  width="400px"  />
        </div>


    </body>
</html>