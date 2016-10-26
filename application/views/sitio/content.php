<script>
    $(function () {
        $("#tabs").tabs();
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
                }
            }
        });      
        
        $("#ui-id-2").click(function(){
           unidad();
        });

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
    <div class="w3-container w3-blue">
        <img src="<?php echo base_url() ?>images/cobertura/icono.png" class="w3-left w3-margin-top" />
        <h4 class="w3-left">Cobertura Vegetal</h4>
    </div>
    <ul>
        <li><a href="#tabs-1">Síntesis</a></li>
        <li><a href="#tabs-2">Unidad Hídrica</a></li>
        <li><a href="#tabs-3">Sectores</a></li>
        <li><a href="#tabs-4">Páramo</a></li>
        <li><a href="#tabs-5">Bosque Andino</a></li>
        <li><a href="#tabs-7">Ripario</a></li>
        <li><a href="#tabs-8">Simulación</a></li>
    </ul>
    <div id="tabs-1" style="height: 380px;overflow-y: scroll;overflow-x: hidden;">
        <img src="<?php echo base_url() ?>images/cobertura/sintesis.png" class="w3-left w3-margin-right" />
        <div class="w3-container">
            <p>La cobertura vegetal se encuentra estrechamente ligada al ciclo hidrológico; interviene en la evapotranspiración, retiene en su follaje neblina, evita la erosión y la evaporación directa del agua en el suelo, aporta materia orgánica y mejora las propiedades físicas del suelo, contribuyendo a la regulación y el rendimiento hídrico de una cuenca.</p>
            <p>Desde el 2005 el FONAG, consiente de la importancia de estos ecosistemas y su fragilidad realiza esfuerzos para establecer modelos de restauración de áreas afectadas o en proceso de degradación natural, a través de técnicas acordes con las condiciones ecológicas del medio.</p>
            <p>De esta forma, como estrategia de intervención se cuenta con tres líneas de acción para lograr la restauración ecológica y la regeneración del medio natural: Páramo, Bosque Andino y Vegetación Riparia, ecosistemas ligados a la regulación y provisión de agua, necesaria para el desarrollo sostenible de las comunidades asentadas en la cuenca alta del río Guayllabamba y unidades hídricas orientales de Oyacachi, Chalpi Grande, Papallacta y Antisana.</p>
            <p>Para la implementación de las acciones de restauración y regeneración natural, en sí, requiere además de un impulso compartido inicial de actores claves del Gobierno Nacional, Provincial y Local, la participación activa y constante de los beneficiarios locales de comunidades, juntas parroquiales y privados que aseguren el éxito y permanencia a largo plazo.</p>
        </div>


    </div>
    <div id="tabs-2" style="height: 380px;overflow-y: scroll;overflow-x: hidden;">
        
    </div>
    <div id="tabs-3" style="height: 360px;overflow-y: scroll;overflow-x: hidden;">

    </div>
    <div id="tabs-4" style="height: 360px;overflow-y: scroll;overflow-x: hidden;">

    </div>
    <div id="tabs-5">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
    </div>
    <div id="tabs-7">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
    </div>
    <div id="tabs-8">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
    </div>
</div>