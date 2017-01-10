<script>
    $(function () {
        $("#tabs").tabs();
        $("#tabs").tabs("option", "disabled", [3, 4, 5]);
        $("#tabs").draggable();
        $("#tabs").resizable({
            resize: function (event, ui) {
                ui.size.height = Math.round(ui.size.height / 30) * 30;
                var h = ui.size.height;
                //$("#tabs-2").html(h);
                if (h >= 480) {
                    $("#tabs-2").css("height", h - 120);
                    $("#tabs-3").css("height", h - 120);
                    $("#tabs-4").css("height", h - 120);
                    $("#tabs-5").css("height", h - 120);
                    $("#tabs-6").css("height", h - 120);
                    $("#tabs-7").css("height", h - 120);
                }
            }
        });
        $("#ui-id-2").click(function () {
            //unidad();
            //$("#tabs").tabs("option", "disabled", [3,4,5]);
            var disabled = $("#tabs").tabs("option", "disabled");
            if (disabled !== true) {
                $("#tabs").tabs("option", "disabled", [3, 4, 5]);
            }
            var options = {
                center: {lat: -0.2, lng: -78.85},
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            };
            map.setOptions(options);

        });
        $("#ui-id-3").click(function () {
            var disabled = $("#tabs").tabs("option", "disabled");
            if (disabled !== true) {
                $("#tabs").tabs("option", "disabled", [3, 4, 5]);
            }
        });
        $("#btn_min").click(function () {
            var options = {};
            $("#div_content").hide('fade', options, 1000, callnav);
        });
        $("#btn_clo").click(function () {
            var options = {};
            $("#div_content").hide('fade', options, 1000, callback);
        });

        function callback() {
            $("#div_menu").show('fade', '', 1000, '');
        }
        function callnav() {
            $("#div_nav").show('fade', '', 1000, '');
        }
        
    });
    function unidad() {
        $.ajax({
            url: "/visor/CobVeg/view_unidades",
            type: "POST",
            async: false,
            success: function (datos) {
                $("#tabs-2").html(datos);
            }
        });
        return false;
    }
</script>
<div id="tabs" style="min-width:  800px;min-height: 480px;">
    <div class="w3-display-container w3-blue" style="height:50px;">
        <img class="w3-padding w3-left" src="<?php echo base_url() ?>images/cobertura/icono.png"  />
        <h4 class="w3-left">Cobertura Vegetal</h4>
        <span id="btn_clo" class="w3-closebtn w3-margin-right">&times;</span>
        <span id="btn_min" class="w3-closebtn w3-margin-right">&ndash;</span>
    </div>
    <ul>
        <li><a href="#tabs-1">Síntesis</a></li>
        <li><a href="#tabs-2">Unidad Hídrica</a></li>
        <li><a href="#tabs-3">Sectores</a></li>
        <li><a href="#tabs-4">Páramo</a></li>
        <li><a href="#tabs-5">Bosque Andino</a></li>
        <li><a href="#tabs-6">Ripario</a></li>
        <li><a href="#tabs-7">Simulación</a></li>
    </ul>
    <!--sintesis-->
    <div id="tabs-1" style="height: 380px;overflow-y: scroll;overflow-x: hidden;">
        <img src="<?php echo base_url() ?>images/cobertura/sintesis.png" class="w3-left w3-margin-right" />
        <div class="w3-container">
            <p>La cobertura vegetal se encuentra estrechamente ligada al ciclo hidrológico; interviene en la evapotranspiración, retiene en su follaje neblina, evita la erosión y la evaporación directa del agua en el suelo, aporta materia orgánica y mejora las propiedades físicas del suelo, contribuyendo a la regulación y el rendimiento hídrico de una cuenca.</p>
            <p>Desde el 2005 el FONAG, consiente de la importancia de estos ecosistemas y su fragilidad realiza esfuerzos para establecer modelos de restauración de áreas afectadas o en proceso de degradación natural, a través de técnicas acordes con las condiciones ecológicas del medio.</p>
            <p>De esta forma, como estrategia de intervención se cuenta con tres líneas de acción para lograr la restauración ecológica y la regeneración del medio natural: Páramo, Bosque Andino y Vegetación Riparia, ecosistemas ligados a la regulación y provisión de agua, necesaria para el desarrollo sostenible de las comunidades asentadas en la cuenca alta del río Guayllabamba y unidades hídricas orientales de Oyacachi, Chalpi Grande, Papallacta y Antisana.</p>
            <p>Para la implementación de las acciones de restauración y regeneración natural, en sí, requiere además de un impulso compartido inicial de actores claves del Gobierno Nacional, Provincial y Local, la participación activa y constante de los beneficiarios locales de comunidades, juntas parroquiales y privados que aseguren el éxito y permanencia a largo plazo.</p>
        </div>


    </div>
    <!--unidad hidrica-->
    <div id="tabs-2" style="height: 380px;overflow-y: scroll;overflow-x: hidden;">
        <?php echo $unidad; ?>
    </div>
    <!--sectores-->
    <div id="tabs-3" style="height: 400px;overflow-y: scroll;overflow-x: hidden;">
        <div class="w3-panel w3-orange">
            <h3>Aviso</h3>
            <p>Primero seleccione una unidad hídrica en la pestaña anterior</p>
        </div>
    </div>
    <!--paramo-->
    <div id="tabs-4" style="height: 400px;overflow-y: scroll;overflow-x: hidden;">

    </div>
    <!--bosque-->
    <div id="tabs-5" style="height: 400px;overflow-y: scroll;overflow-x: hidden;">

    </div>
    <!--ripario-->
    <div id="tabs-6" style="height: 400px;overflow-y: scroll;overflow-x: hidden;">

    </div>
    <!--simulacion-->
    <div id="tabs-7" style="height: 400px;overflow-y: scroll;overflow-x: hidden;">
        <?php echo $simulacion ?>
    </div>
</div>