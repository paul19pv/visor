<script>
    $(function () {
        $(".sectores").click(function () {
            sec_id = $(this).attr('id');
            $("#tabs").tabs("option", "disabled", []);
            $("#tabs").tabs("option", "active", 3);
            var latitud = $("#sec_lat" + sec_id).val(), longitud = $("#sec_lon" + sec_id).val();
            map.setCenter({lat: parseFloat(latitud), lng: parseFloat(longitud)});
            map.setZoom(13);
        });
    });

    function paramo(sec_id) {
        $.ajax({
            url: "/visor/CobVeg/view_paramo/" + sec_id,
            type: "GET",
            //data: "sec_id=" + sec_id,
            async: false,
            success: function (datos) {
                $("#tabs-4").html(datos);
            }
        });
        return false;
    }
    function bosque(sec_id) {
        $.ajax({
            url: "/visor/CobVeg/view_bosque/" + sec_id,
            type: "GET",
            //data: "sec_id=" + sec_id,
            async: false,
            success: function (datos) {
                $("#tabs-5").html(datos);
            }
        });
        return false;
    }
    function ripario(sec_id) {
        $.ajax({
            url: "/visor/CobVeg/view_ripario/" + sec_id,
            type: "GET",
            //data: "sec_id=" + sec_id,
            async: false,
            success: function (datos) {
                $("#tabs-6").html(datos);
            }
        });
        return false;
    }
</script>

<div id="sectores">
    <h4 class="w3-margin-0">Unidad Hídrica: <?php echo $encabezado['uni_nombre'] ?></h4>
    <?php if (count($sectores) > 0) {
        ?>
        <p class="w3-text-green w3-margin-top">
            <b>Por favor seleccione el sector de estudio para acceder a la información disponible:</b>
        </p>
        <div>
            <?php foreach ($sectores as $row): ?>
                <div id="<?php echo $row->sec_id ?>" class="sectores w3-panel w3-light-grey w3-round" style="cursor: pointer;">
                    <img src="<?php echo base_url() . "images/cobertura/sectores/" . $row->sec_imagen ?>" class="w3-left w3-margin-top w3-margin-bottom w3-margin-right" />
                    <div class="w3-rest">
                        <h5><?php echo $row->sec_nombre ?></h5>
                        <p><?php echo $row->sec_texto ?></p>
                        <input type="hidden" id="<?php echo "sec_lat" . $row->sec_id ?>" value="<?php echo $row->sec_latitud ?>" />
                        <input type="hidden" id="<?php echo "sec_lon" . $row->sec_id ?>" value="<?php echo $row->sec_longitud ?>" />
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <?php
    }
    else {
        ?>
        <p class="w3-text-green w3-margin-top">
            <b>En la unidad hídrica no se han hecho interveciones por parte del FONAG</b>
        </p>
        <?php
    }
    ?>

</div>
