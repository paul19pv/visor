<script>
    $(function () {
        $(".unidades.sectores").click(function () {
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
    <div class="encabezado">
        <img src="<?php echo base_url() . "images/cobertura/unidades/" . $encabezado['uni_imagen'] ?>" />
        <div>
            <h3><?php echo $encabezado['uni_nombre'] ?></h3>
            <p><?php echo $encabezado['uni_texto'] ?></p>
        </div>
    </div>
    <p class="indicador">Por favor seleccione el sector de estudio para acceder a la información disponible:</p>
    <div>
        <?php foreach ($sectores as $row): ?>
            <div id="<?php echo $row->sec_id?>" class="unidades sectores">
                <img src="<?php echo base_url()."images/cobertura/sectores/".$row->sec_imagen ?>" />
                <div>
                    <h4><?php echo $row->sec_nombre?></h4>
                    <p><?php echo $row->sec_texto ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
