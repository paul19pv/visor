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
        <?php echo $mapa; ?>
        <div id="div_content" class="w3-col s5 w3-display-topleft w3-margin w3-padding-32" style="display: none">
            <?php echo $content ?>
        </div>
        <div id="div_menu" class="w3-card-4 w3-col s5 w3-display-middle w3-blue w3-round-large" >
            <header class="w3-container w3-center">
                <h1>Sistema de Información y Monitoreo</h1>
            </header>
            <div class="w3-container">
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

            <footer class="w3-container">
                <p id="txt_ini"></p>
            </footer>
        </div>
        <div id="div_nav" class="w3-container w3-display-topmiddle w3-margin w3-blue" style="display: none">
            <div class="w3-row">
                <div class="w3-col s1">
                    <img id="img_content" style="cursor:pointer" src="<?php echo base_url() ?>images/iconos/monitoreo.png">
                </div>
            </div>
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
                    $("#div_menu").hide('fade', '', 1000, call_cobveg);
                });
                function call_cobveg() {
                    $("#div_content").show('fade','',1000,'');
                }
                $("#img_content").click(function () {
                    $("#div_nav").hide('fade', '', 1000, call_content);
                });
                function call_content() {
                    $("#div_content").show('fade','',1000,'');
                }

            })
        </script>

    </body>
</html>