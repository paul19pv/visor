<script>
    $(function () {
        $(".unidades").click(function () {
            $("#tabs").tabs("option", "active", 2);
            var id = $(this).attr('id');
            sector(id);
            var latitud = $("#lat" + id).val(), longitud = $("#lon" + id).val();
            map.setCenter({lat: parseFloat(latitud), lng: parseFloat(longitud)});
            map.setZoom(11);
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
<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p>El módulo de Cobertura Vegetal se enfoca en sectores específicos de las Cuencas Hídricas Guayllabamba, Alto, Medio, San Pedro, Pita y Pisque, y Napo, Oyacachi, Chapli Grande, Papallacta y Antisana, que poseen ecosistemas de páramo y bosque altoandino que son importantes zonas de recarga hídrico. Estos sectores albergan una gran diversidad biológica, pero a su vez presentan una gran vulnerabilidad ante cualquier presión, ya sea debida a agentes naturales o a una inadecuada interacción del ser humano con el medio.</p>
</div>

<p class="w3-text-green w3-padding-8">
    <strong>A continuación para ver información disponible y resultados, por favor seleccione una unidad hídricas</strong>
</p>
<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p>La cuenca alta del Guayllabamba se localizada en el callejón interandino y forma parte de la provincia de Pichincha, correspondiente a cinco cantones: Quito, Mejía, Rumiñahui, Pedro Moncayo y Cayambe, aquí se encuentran las Reservas Ecológicas los Illinizas y Antisana, los Parques Nacionales Cotopaxi y Cayambe Coca, la Reserva Geo-Botánica Pululahua, el Bosque protector del Pasochoa y el Área Nacional de recreación el Boliche. La cota máxima de esta cuenca va desde los 5.893 msnm (volcán Cotopaxi) hasta los 1.000 msnm (cota de Cierre de la cuenca). Su población, entre urbana y rural es de aproximadamente 2.5 millones de habitantes.</p>
</div>

<div>
    <?php foreach ($unidades as $row): ?>
        <div id="<?php echo $row->uni_id ?>" class="unidades w3-panel w3-light-grey w3-round" style="cursor: pointer;" >
            <img src="<?php echo base_url() . "images/cobertura/unidades/" . $row->uni_imagen ?>" class="w3-left w3-margin-top w3-margin-bottom w3-margin-right" />
            <div class="w3-rest">
                <h4><?php echo $row->uni_nombre ?></h4>
                <p><?php echo $row->uni_texto ?></p>
                <input type="hidden" id="<?php echo "lat" . $row->uni_id ?>" value="<?php echo $row->uni_latitud ?>" />
                <input type="hidden" id="<?php echo "lon" . $row->uni_id ?>" value="<?php echo $row->uni_longitud ?>" />
            </div>
        </div>
    <?php endforeach; ?>
</div>
