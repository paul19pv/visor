<script>
    $(function () {
        $("#tab_pasiva").tabs();
    });
</script>
<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p>Las actividades de la recuperación Pasiva consideradas son el Cercado y el Mantenimiento </p>
</div>
<p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
<div id="tab_pasiva">
    <ul>
        <li><a href="#tab_pasiva-1">Síntesis</a></li>
        <li><a href="#tab_pasiva-2">Cercado</a></li>
        <li><a href="#tab_pasiva-3">Mantenimiento</a></li>
    </ul>
    <!--Sintesis-->
    <div id="tab_pasiva-1">
        <div class="w3-container">
            <img src="<?php echo base_url() ?>images/cobertura/pasiva.png" class="w3-left w3-margin-right" />
            <p class="w3-container"><?php echo $txt_sin ?></p>
        </div>
    </div>
    <!--Cercado-->
    <div id="tab_pasiva-2">

        <p class="w3-container w3-light-grey w3-round w3-padding-4">
            <?php $txt_cer; ?>
        </p>
        <?php echo $tbl_cercado ?>
        <p class="w3-text-green w3-padding-8"><strong> El estado de recuperación del sector seleccionado es el siguiente:</strong></p>
        <?php if (count($cercado) > 0) {
            ?>
            <div class="w3-light-grey w3-round w3-padding-8">
                <form>
                    <div class="w3-row-padding w3-padding-8">
                        <div class="w3-col s4">
                            <label class="w3-label w3-text-black"><b>Longitud de Cerca</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $cercado->cer_longitud; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black">m</label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo round($cercado->cer_longitud / 100, 2); ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black">Km</label>
                        </div>
                    </div>
                    <div class="w3-row-padding w3-padding-8">
                        <div class="w3-col s4">
                            <label class="w3-label w3-text-black"><b>Área Cercada</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $cercado->cer_area; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black">Ha</label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo round($cercado->cer_area / 100, 2); ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black">Km<sup>2</sup></label>
                        </div>
                    </div>


                </form>
            </div>

            <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
            <div class="w3-container w3-light-grey w3-round w3-padding-4">
                <p><?php echo $cercado->cer_texto; ?><br></p>
            </div>

            <?php
        } else {
            ?>
            <p class="w3-container w3-light-grey w3-round w3-padding-4"><strong>No existe información de cercado de este sector</strong></p>
            <?php
        }
        ?>


    </div>
    <!--Mantenimiento-->
    <div id="tab_pasiva-3">

        <p class="w3-container w3-light-grey w3-round w3-padding-4">
            <?php echo $txt_man; ?>
        </p>
        <?php echo $tbl_cer_man ?>

        <p class="w3-text-green w3-padding-8"><strong> El estado de mantenimiento del sector seleccionado es el siguiente:</strong></p>
        <?php if (count($cer_man) > 0) {
            ?>
            <div class="w3-light-grey w3-round w3-padding-8">
                <form>
                    <div class="w3-row-padding w3-padding-8">
                        <div class="w3-col s4">
                            <label class="w3-label w3-text-black"><b>Longitud Cercada</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black">m</label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black">Km</label>
                        </div>
                    </div>
                    <div class="w3-row-padding w3-padding-8">
                        <div class="w3-col s4">
                            <label class="w3-label w3-text-black"><b>Longitud Mantenida</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black">m</label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black">Km</label>
                        </div>
                    </div>
                    <div class="w3-row-padding w3-padding-8">
                        <div class="w3-col s4">
                            <label class="w3-label w3-text-black"><b>Área Cercada</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black">Ha</label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black">Km<sup>2</sup></label>
                        </div>
                    </div>
                    <div class="w3-row-padding w3-padding-8">
                        <div class="w3-col s4">
                            <label class="w3-label w3-text-black"><b>Área Mantenida</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black">Ha</label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black">Km<sup>2</sup></label>
                        </div>
                    </div>


                </form>
            </div>

            <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
            <div class="w3-container w3-light-grey w3-round w3-padding-4">
                <p><?php echo ''; ?><br></p>
            </div>
            <?php
        } else {
            ?>
            <p class="w3-container w3-light-grey w3-round w3-padding-4"><strong>No existe información de mantenimiento de este sector</strong></p>
            <?php
        }
        ?>
    </div>




</div>

