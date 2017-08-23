<script src="<?php echo base_url() ?>js/js_seguimiento.js"></script>

<?php if (count($datos) > 0) {
    ?>
    <form class="w3-light-grey w3-round">
        <input type="hidden" id="txt_sector" value="<?php echo $sector; ?>">
        <input type="hidden" id="txt_fase" value="<?php echo $fase; ?>">
        <input type="hidden" id="txt_ecosistema" value="<?php echo $ecosistema; ?>">
        <div class="w3-container">
            <p class="w3-padding-8"><strong>Seleccione las coberturas a presentar</strong></p>
            <div id="div_periodos" class="w3-row w3-padding-8">
                <?php if (count($datos) > 1) {
                    ?>
                    <div class="w3-col s2">
                        <input id="chk_periodos" class="w3-check" type="checkbox" value="todos">
                        <label class="w3-validate">Todos los años</label>
                    </div>
                <?php }
                ?>

                <?php foreach ($datos as $value) {
                    ?>
                    <div class="w3-col s2">
                        <input class="w3-check chk_periodos" type="checkbox" value="<?php echo $value['seg_nombre'] ?>" >
                        <label class="w3-validate"><?php echo $value['seg_periodo'] ?></label>
                    </div>
                <?php }
                ?>
            </div>
            <?php if (count($datos) > 1) {
                ?>
                <p class="w3-padding-8"><strong>Escoja la velocidad de visualización</strong></p>
                <div class="w3-row w3-padding-8 w3-margin-bottom">
                    <div class="w3-col s6">
                        <div class="w3-row">
                            <div class="w3-col s4">
                                <input class="w3-radio" type="radio" name="velocidad" value="2000">
                                <label class="w3-validate">Rápido</label>
                            </div>
                            <div class="w3-col s4">
                                <input class="w3-radio" type="radio" name="velocidad" value="4000">
                                <label class="w3-validate">Medio</label>
                            </div>
                            <div class="w3-col s4">
                                <input class="w3-radio" type="radio" name="velocidad" value="6000">
                                <label class="w3-validate">Lento</label>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col s4">
                        <button id="btn_animacion" type="button" class="w3-btn w3-round w3-border w3-white w3-padding-4">Iniciar</button>
                    </div>
                </div>
            <?php }
            ?>

        </div>
    </form>

    <?php
} else {
    ?>
    <p class="w3-container w3-light-grey w3-round w3-padding-4"><strong>No existe información cartográfica para este sector</strong></p>
    <?php
}
?>