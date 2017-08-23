<html>
    <head>
<<<<<<< HEAD
        <?php header("Access-Control-Allow-Origin: *"); ?>
        <meta http-equiv = "content-type" content = "text/html; charset=utf-8" />

        <link href = "<?php echo base_url() ?>css/jquery-ui.css" rel = "stylesheet" />

        <link rel = "stylesheet" href = "http://www.w3schools.com/lib/w3.css">
        <link href = "<?php echo base_url() ?>css/style.css" rel = "stylesheet" />


        <script src = "<?php echo base_url() ?>js/jquery.js"></script>
=======
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
        <link href="<?php echo base_url() ?>css/jquery-ui.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet" />
        
        <script src="<?php echo base_url() ?>js/jquery.js"></script>
>>>>>>> d0a6859f1ef8b7109fa3ed399f31b760f3406e20
        <script src="<?php echo base_url() ?>js/jquery-ui.js"></script>
        <script src="<?php echo base_url() ?>js/js_mapa.js"></script>
        <script src="<?php echo base_url() ?>js/js_wms.js"></script>
        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyB5dESKyIaf42zTejjg4ClShw9rXq-_trM'></script>
    </head>
    <body>
<<<<<<< HEAD
        <!--Mapa Base-->
        <?php echo $mapa; ?>
        <!-- Contenido Dinamico-->
        <div id="div_content" class="w3-col s5 w3-display-topleft w3-margin w3-padding-32" style="display: none">    
        </div>
        <!-- Menu Principal-->
        <div id="div_menu" class="w3-card-4 w3-col s5 w3-display-middle w3-blue w3-round-large">
            <header class="w3-container w3-center">
                <h1>SIAF</h1><h3>Sistema de Información de las Actividades del FONAG</h3>
                <br>
            </header>
            <div class="w3-container" >
                <div class="w3-row">
                    <div class="w3-col s4 w3-center">
                        <img id="img_cobveg" class="w3-circle" style="cursor:pointer" src="<?php echo base_url() ?>images/iconos/cobveg.png">
                        <h5>Cobertura Vegetal</h5>
                    </div>
                    <div class="w3-col s4 w3-center">
                        <img id="img_eduamb" class="w3-circle" style="cursor:pointer" src="<?php echo base_url() ?>images/iconos/cobveg.png">
                        <h5>Educación Ambiental</h5>
                    </div>
                    <div class="w3-col s4 w3-center">
                        <img id="img_conhid" class="w3-circle" style="cursor:pointer" src="<?php echo base_url() ?>images/iconos/cobveg.png">
                        <h5>Áreas de Conservación</h5>
                    </div>
                </div>

            </div>
            <footer class="w3-container" style="height: 60px;">
                <p id="txt_ini"></p>
            </footer>
        </div>
        <!--Navegacion-->
        <div id="div_nav" class="w3-container w3-display-topmiddle w3-margin w3-blue w3-round" style="display: none">
            <div class="w3-row">
                <div class="w3-col s1">
                    <img id="img_content" style="cursor:pointer;margin-bottom: 0px;" src="<?php echo base_url() ?>images/iconos/monitoreo.png">
                </div>
            </div>
        </div>

        <!--informacion-->
        <div id="div_info" class="w3-container w3-display-right w3-margin w3-white w3-round" style="display: none">
        </div>
        <div id="div_capa" class="w3-container w3-display-right w3-margin w3-white w3-round" style="display: none; width: 200px;">
        </div>
        <div id="div_leyenda" class="w3-container w3-display-topright w3-margin w3-white w3-round" style="display: none" >
        </div>
        <script>
            $(function () {
                $("#img_cobveg").hover(function () {
                    $("#txt_ini").html("El objetivo que persigue el módulo de cobertura vegetal es recuperar los ecosistemas que han sufrido algún proceso de degradación mejorando su calidad ambiental, restableciendo su funcionalidad, favoreciendo su evolución dinámica hacia etapas más estables y desarrolladas ecológicamente.");
                }, function () {
                    $("#txt_ini").html("");
                });
                $("#img_eduamb").hover(function () {
                    $("#txt_ini").html("Texto de Prueba");
                }, function () {
                    $("#txt_ini").html("");
                });
                $("#img_conhid").hover(function () {
                    $("#txt_ini").html("Texto de Prueba");
                }, function () {
                    $("#txt_ini").html("");
                });

                $("#img_cobveg").click(function () {
                    cobveg();
                    $("#div_menu").hide('fade', '', 1000, call_cobveg);

                });

                function call_cobveg() {
                    $("#div_content").show('fade', '', 1000, '');
                }
                $("#img_content").click(function () {
                    $("#div_nav").hide('fade', '', 1000, call_content);
                });
                function call_content() {
                    $("#div_content").show('fade', '', 1000, '');
                }

                function cobveg() {
                    $.ajax({
                        url: "/visor/CobVeg/index",
                        type: "POST",
                        async: false,
                        success: function (datos) {
                            $("#div_content").html(datos);
                        }
                    });

                    //geoXml.hideDocument(geoXml.docs[0]);

                    return false;
                }

            });
        </script>

=======
        <?php echo $mapa;?>
        <div id="div_content">
            <?php echo $content?>
        </div>
        
>>>>>>> d0a6859f1ef8b7109fa3ed399f31b760f3406e20
    </body>
</html>