<script src="<?php echo base_url() ?>js/js_json.js"></script>
<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p>Esta sección permite visualizar, para Guayllabamba y Napo, el escenario Necesidad de Conservación, los resultados del período actual y las proyecciones de incremento y decremento de 10% de precipitación y demanda, mediante coberturas precargadas.</p>
</div>
<br>
<div id="tab_nec_sim">
    <form class="w3-light-grey w3-round">
        <input type="hidden" id="txt_unidad" value="<?php echo $unidad?>" >
        <input type="hidden" id="txt_demanda" value="<?php echo $demanda?>" >
        <div class="w3-container">
            <p class="w3-padding-8"><strong>Seleccione a continuación las coberturas a presentar</strong></p>
            <div id="div_precipitacion" class="w3-row w3-padding-8">
                <div class="w3-col s3">
                    <input id="chk_precipitacion" class="w3-check" type="checkbox" value="todos">
                    <label class="w3-validate">Todos las opciones</label>
                </div>
                <?php foreach ($datos as $value) {
                        ?>
                        <div class="w3-col s2">
                            <input class="w3-check chk_periodos" type="checkbox" value="<?php echo $value['cap_nombre']?>" >
                            <label class="w3-validate"><?php echo $value['cap_precipitacion']?></label>
                        </div>
                        <?php }
                    ?>

            </div>
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
                    <button type="button" id="btn_animacion" class="w3-btn w3-round w3-border w3-white w3-padding-4">Iniciar</button>
                </div>
            </div>

        </div>

    </form>
</div>



