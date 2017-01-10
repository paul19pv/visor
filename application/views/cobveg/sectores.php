<script>
    $(function () {
        $(".sectores").click(function () {
            $("#tabs").tabs("option", "disabled", []);
            $("#tabs").tabs("option", "active", 3);
            var id = $(this).attr('id');
            paramo(id);
            bosque(id);
            ripario(id);
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
    function bosque(sec_id) {
        $.ajax({
            url: "/visor/CobVeg/view_bosque",
            type: "POST",
            data: "sec_id=" + sec_id,
            async: false,
            success: function (datos) {
                $("#tabs-5").html(datos);
            }
        });
        return false;
    }
    function ripario(sec_id) {
        $.ajax({
            url: "/visor/CobVeg/view_ripario",
            type: "POST",
            data: "sec_id=" + sec_id,
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
    <p class="w3-text-green w3-margin-top">
        <strong>Por favor seleccione el sector de estudio para acceder a la información disponible:</strong>
    </p>
    <div>
        <?php foreach ($sectores as $row): ?>
            <div id="<?php echo $row->sec_id ?>" class="sectores w3-panel w3-light-grey w3-round" style="cursor: pointer;">
                <img src="<?php echo base_url() . "images/cobertura/sectores/" . $row->sec_imagen ?>" class="w3-left w3-margin-top w3-margin-bottom w3-margin-right" />
                <div class="w3-rest">
                    <h5><?php echo $row->sec_nombre ?></h5>
                    <p><?php echo $row->sec_texto ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
