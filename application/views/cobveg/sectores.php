<script>
    $(function () {
        $(".sectores").click(function () {
            $("#tabs").tabs("option", "active", 3);
            var id = $(this).attr('id');
            paramo(id);
        });
    });

    function paramo(sec_id) {
        $.ajax({
            url: "/visor/CobVeg/view_paramo",
            type: "POST",
            data: "sec_id=" + sec_id,
            async: false,
            success: function (datos) {
                $("#tabs-4").html(datos);
            }
        });
        return false;
    }
</script>

<div id="sectores">
    <div class="w3-container w3-light-grey w3-round">
        <img src="<?php echo base_url() . "images/cobertura/unidades/" . $encabezado['uni_imagen'] ?>" class="w3-left w3-margin-top w3-margin-bottom w3-margin-right"/>
        <div class="w3-rest">
            <h4><?php echo $encabezado['uni_nombre'] ?></h4>
            <p><?php echo $encabezado['uni_texto'] ?></p>
        </div>
    </div>
    <p class="w3-text-green w3-padding-8">
        <strong>Por favor seleccione el sector de estudio para acceder a la información disponible:</strong>
    </p>
    <div>
        <?php foreach ($sectores as $row): ?>
            <div id="<?php echo $row->sec_id ?>" class="sectores w3-panel w3-light-grey w3-round">
                <img src="<?php echo base_url() . "images/cobertura/sectores/" . $row->sec_imagen ?>" class="w3-left w3-margin-top w3-margin-bottom w3-margin-right" />
                <div class="w3-rest">
                    <h5><?php echo $row->sec_nombre ?></h5>
                    <p><?php echo $row->sec_texto ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
