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

        /*$("#san_pedro").click(function () {
         $( "#tabs" ).tabs( "option", "active", 2 );
         });*/

        $(".unidades").click(function () {
            $("#tabs").tabs("option", "active", 2);
            var id = $(this).attr('id');
            sector(id);
        });



    });

    function sector(unidad) {
        $.ajax({
            url: "/visor/CobVeg/view_sectores",
            type: "POST",
            data: "id=" + unidad,
            async: false,
            success: function (datos) {
                $("#tabs-3").html(datos);
            }
        });
        return false;
    }
</script>
<div id="tabs">
    <div id="title">
        <img src="<?php echo base_url() ?>images/cobertura/icono.png" />
        <p>Cobertura Vegetal</p>
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
    <div id="tabs-1">
        <img src="<?php echo base_url() ?>images/cobertura/sintesis.png" />
        <p>La cobertura vegetal se encuentra estrechamente ligada al ciclo hidrológico; interviene en la evapotranspiración, retiene en su follaje neblina, evita la erosión y la evaporación directa del agua en el suelo, aporta materia orgánica y mejora las propiedades físicas del suelo, contribuyendo a la regulación y el rendimiento hídrico de una cuenca.</p>
        <p>Desde el 2005 el FONAG, consiente de la importancia de estos ecosistemas y su fragilidad realiza esfuerzos para establecer modelos de restauración de áreas afectadas o en proceso de degradación natural, a través de técnicas acordes con las condiciones ecológicas del medio.</p>
        <p>De esta forma, como estrategia de intervención se cuenta con tres líneas de acción para lograr la restauración ecológica y la regeneración del medio natural: Páramo, Bosque Andino y Vegetación Riparia, ecosistemas ligados a la regulación y provisión de agua, necesaria para el desarrollo sostenible de las comunidades asentadas en la cuenca alta del río Guayllabamba y unidades hídricas orientales de Oyacachi, Chalpi Grande, Papallacta y Antisana.</p>
        <p>Para la implementación de las acciones de restauración y regeneración natural, en sí, requiere además de un impulso compartido inicial de actores claves del Gobierno Nacional, Provincial y Local, la participación activa y constante de los beneficiarios locales de comunidades, juntas parroquiales y privados que aseguren el éxito y permanencia a largo plazo.</p>

    </div>
    <div id="tabs-2" style="height: 360px;overflow-y: scroll;overflow-x: hidden;">
        <div class="parrafo">
            <p>El módulo de Cobertura Vegetal se enfoca en sectores específicos de las Cuencas Hídricas Guayllabamba, Alto, Medio, San Pedro, Pita y Pisque, y Napo, Oyacachi, Chapli Grande, Papallacta y Antisana, que poseen ecosistemas de páramo y bosque altoandino que son importantes zonas de recarga hídrico. Estos sectores albergan una gran diversidad biológica, pero a su vez presentan una gran vulnerabilidad ante cualquier presión, ya sea debida a agentes naturales o a una inadecuada interacción del ser humano con el medio.</p>
        </div>

        <p class="indicador">A continuación para ver información disponible y resultados, por favor seleccione una unidad hídricas</p>
        <div class="parrafo">
            <p>La cuenca alta del Guayllabamba se localizada en el callejón interandino y forma parte de la provincia de Pichincha, correspondiente a cinco cantones: Quito, Mejía, Rumiñahui, Pedro Moncayo y Cayambe, aquí se encuentran las Reservas Ecológicas los Illinizas y Antisana, los Parques Nacionales Cotopaxi y Cayambe Coca, la Reserva Geo-Botánica Pululahua, el Bosque protector del Pasochoa y el Área Nacional de recreación el Boliche. La cota máxima de esta cuenca va desde los 5.893 msnm (volcán Cotopaxi) hasta los 1.000 msnm (cota de Cierre de la cuenca). Su población, entre urbana y rural es de aproximadamente 2.5 millones de habitantes.</p>
        </div>
        <br />

        <div id="1" class="unidades">
            <img src="<?php echo base_url() ?>images/cobertura/unidades/01san_pedro.jpg" />
            <div>
                <h3>San Pedro</h3>
                <p>Se encuentra en la cuenca alta del río Guayllabamba con un área aproximada de 753 Km². Las principales actividades productivas son la agricultura y la ganadería, existe una fuerte minifundización en la zona alta de la unidad hídrica. La cobertura vegetal natural alcanza el 45% del total de la Unidad Hídrica y la conforman páramos, bosque natural y matorral.</p>
            </div>
        </div>
        <div id="2" class="unidades">
            <img src="<?php echo base_url() ?>images/cobertura/unidades/02pita.jpg" />
            <div>
                <h3>Pita</h3>
                <p>Se encuentra en la cuenca alta del río Guayllabamba con una superficie de 586,0 Km². La principal actividad económica en la es la ganadería, seguida de la agricultura. En la unidad hídrica del río Pita, el mayor porcentaje de cobertura vegetal se mantiene en estado natural con un 34,6%.</p>
            </div>
        </div>

        <div id="3" class="unidades">
            <img src="<?php echo base_url() ?>images/cobertura/unidades/03guay_alto.jpg" />
            <div>
                <h3>Guayllabamba Alto</h3>
                <p>Se encuentra en la cuenca alta del río Guayllabamba con una superficie de 1.317 km². El 40% de la superficie de la unidad hídrica corresponde a zonas pobladas y cultivos, un 15 % pertenece a páramos. Además, existen industrias de diferente índole, hidroeléctricas y áreas protegidas.</p>
            </div>
        </div>
        <div id="4" class="unidades">
            <img src="<?php echo base_url() ?>images/cobertura/unidades/04pisque.png" />
            <div>
                <h3>Pisque</h3>
                <p>Se encuentra en la cuenca alta del río Guayllabamba con una superficie de 2.497 km². En las zonas más altas, los páramos, las comunidades se dedican normalmente al pastoreo y a la agricultura. Un 30 % de la cobertura vegetal natural de la unidad hídrica corresponde a páramos, pastos naturales y bosques.</p>
            </div>
        </div>

        <div id="5" class="unidades">
            <img src="<?php echo base_url() ?>images/cobertura/unidades/05guay_medio.jpg" />
            <div>
                <h3>Guayllbamba Medio</h3>
                <p>Se encuentra en la cuenca alta del río Guayllabamba con una superficie de 888 Km². En esta unidad hídrica las actividades agrícolas son las practicadas ocupando para ello el 40% de su área total. La cobertura vegetal la conforman bosques Altimontanos y arbustiva en su parte alta.</p>
            </div>
        </div>
        
        <div class="parrafo">
            <p>Las unidades hídricas Oyacachi, Chalpi Grande, Papallacta y Antisana están conformadas por la cordillera oriental y forman parte de la provincia de Napo, correspondiente a los cantones de El Chaco, Quijos, y Archidona, aquí se encuentran la Reserva Ecológica Antisana, los Parques Nacionales Cayambe – Coca, Llanganates y Sumaco- Napo- Galeras y la Reserva Biológica Colonso Chalupas, importantes zonas de flora y fauna silvestre. Sus cotas de cierre son a los 3.600 msnm. Y su población, principalmente rural, se estima en 12 mil habitantes.</p>
        </div>
        <br />
        
        <div id="6" class="unidades">
            <img src="<?php echo base_url() ?>images/cobertura/unidades/06oyacachi.jpg" />
            <div>
                <h3>Oyacachi</h3>
                <p>Se encuentra en la cuenca alta del río Napo con una superficie de 502,24 Km². Existen pocos asentamientos humanos por ser parte de la Reserva Cayambe Coca y se dedican a actividades ganaderas y turísticas. La cobertura vegetal natural presenta seis formaciones: bosque siempre verde montano alto, bosque de neblina montano, bosque de páramo mixto, páramo herbáceo, páramo anegado y bosque de alisos.</p>
            </div>
        </div>

        <div id="7" class="unidades">
            <img src="<?php echo base_url() ?>images/cobertura/unidades/06oyacachi.jpg" />
            <div>
                <h3>Cahlpi Grande</h3>
                <p>Se encuentra ubicada en la cuenca del río Napo con una superficie de 15.20 Km². La población se dedica a la agricultura y crianza de ganado vacuno. El área presenta un 84% de áreas naturales y un 15% de áreas intervenidas.</p>
            </div>
        </div>
        <div id="8" class="unidades">
            <img src="<?php echo base_url() ?>images/cobertura/unidades/06oyacachi.jpg" />
            <div>
                <h3>Papallacta</h3>
                <p>Se encuentra en la cuenca del río Napo con una superficie de 545 Km². La principal actividad económica es la ganadería, y el turismo. Gran parte del uso de suelo todavía se mantiene en estado natural, su cobertura vegetal alcanza el 80% del total de la unidad hídrica y es conforma por páramo, bosque natural y matorral.</p>
            </div>
        </div>
        <div id="9" class="unidades">
            <img src="<?php echo base_url() ?>images/cobertura/unidades/06oyacachi.jpg" />
            <div>
                <h3>Antisana</h3>
                <p>Se encuentra en la cuenca del río Napo con una superficie de 328,3 Km².No existen asentamientos humanos consolidados pero si varias haciendas privadas que practican la ganadería extensiva. La cobertura vegetal predominante son los páramos de distinto tipo, pajonal, herbáceo de almohadillas-bosques bajos y arbustales altos, cubriendo un área aproximada de 69%.</p>
            </div>
        </div>
    </div>
    <div id="tabs-3" style="height: 360px;overflow-y: scroll;overflow-x: hidden;">
        
    </div>
    <div id="tabs-4">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
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