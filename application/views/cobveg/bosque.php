<script>
    $(function () {
        $("#tab_fas_bos").tabs();
    });
</script>
<div id="paramo">
    <div class="w3-container w3-light-grey w3-round">
        <img src="<?php echo base_url() . "images/cobertura/sectores/" . $sector->sec_imagen ?>" class="w3-left w3-margin-top w3-margin-bottom w3-margin-right"/>
        <div class="w3-rest">
            <h3><?php echo $sector->sec_nombre ?></h3>
            <p><?php echo $sector->sec_texto ?></p>
        </div>
    </div>
    <p class="w3-text-green w3-padding-8"><strong>Por favor seleccione la fase de recuperación de interés para acceder a los resultados del sector:</strong></p>
    <div id="tab_fas_bos">
        <ul>
            <li><a href="#tab_fas_bos-1">Activa</a></li>
            <li><a href="#tab_fas_bos-2">Pasiva</a></li>
            <li><a href="#tab_fas_bos-3">Comunitaria</a></li>
        </ul>
        <!--Activa-->
        <div id="tab_fas_bos-1">
            <?php echo $activa;?>
        </div>
        <!--Pasiva-->
        <div id="tab_fas_bos-2">
            <?php echo $pasiva;?>
        </div>
        <!--Comunitaria-->
        <div id="tab_fas_bos-3">
            <?php echo $comunitaria;?>
        </div>
    </div>
</div>