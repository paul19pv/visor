<script>
    $(function () {
        $("#tab_fas_rip").tabs();
    });
</script>
<div id="ripario">
    <h3 class="w3-margin-0">Sector: <?php echo $sector->sec_nombre ?></h3>
    <p class="w3-text-green w3-padding-8"><strong>Por favor seleccione la estrategia de recuperación de interés para acceder a los resultados del sector:</strong></p>
    <div id="tab_fas_rip">
        <ul>
            <!--Activa-->
            <li><a href="<?php echo base_url()."CobVeg/view_activa/ripario/".$sector->sec_id?>">Activa</a></li>
            <!--Pasiva-->
            <li><a href="<?php echo base_url()."CobVeg/view_pasiva/ripario/".$sector->sec_id?>">Pasiva</a></li>
        </ul>
    </div>
</div>

