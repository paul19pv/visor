

<input type="hidden" id="sec_latitud" value="<?= $sector->sec_latitud; ?>">
<input type="hidden" id="sec_longitud" value="<?= $sector->sec_longitud; ?>">

<div class="contenedor-arbol">
    <ul>
        <li class="first"><?= $unidad->uni_nombre ?>
            <ul>
                <li><?= $sector->sec_nombre ?>
                    <ul>
                        <li><?= $ecosistema ?>
                            <ul>
                                <li><?= $fase ?></li>
                            </ul>
                        </li>

                    </ul>
                </li>

            </ul>
        </li>

    </ul>
</div>

<div class="w3-container">
    <?php if (count($datos) > 0) {
        ?>
        <form class="w3-light-grey w3-round">
            <input type="hidden" id="txt_sector" value="<?php echo $sec_id; ?>">
            <input type="hidden" id="txt_fase" value="<?php echo $fase; ?>">
            <input type="hidden" id="txt_ecosistema" value="<?php echo $ecosistema; ?>">
            <div class="w3-container">
                <p><strong>Seleccione</strong></p>
                <div id="div_periodos">
                    <?php if (count($datos) > 1) {
                        ?>
                        <div class="w3-row">
                            <input id="chk_periodos" class="w3-check" type="checkbox" value="todos">
                            <label class="w3-validate">Todos los años</label>
                        </div>
                    <?php }
                    ?>

                    <?php foreach ($datos as $value) {
                        ?>
                        <div class="w3-row">
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
                        <input type="range" id="velocidad">
                    </div>
                    <div class="w3-row w3-padding-8 w3-margin-bottom">
                        <button id="btn_animacion" type="button" class="w3-btn w3-round w3-border w3-white w3-padding-4">Iniciar</button>
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
</div>
