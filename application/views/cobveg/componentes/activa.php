<script>
    $(function () {
        $("#tab_activa").tabs();
    });
</script>
<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p>Las actividades de la recuperación Activa consideradas son Plantación y Mantenimiento </p>
</div>
<p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
<div id="tab_activa">
    <ul>
        <li><a href="#tab_activa-1">Síntesis</a></li>
        <li><a href="#tab_activa-2">Plantación</a></li>
        <li><a href="#tab_activa-3">Mantenimiento</a></li>
    </ul>
    <!--Síntesis-->
    <div id="tab_activa-1">
        <div class="w3-container">
            <img src="<?php echo base_url() ?>images/cobertura/activa.png" class="w3-left w3-margin-right" />
            <p>
                <?php echo $txt_sin ?>
            </p>
        </div>
    </div>
    <!--Plantación-->
    <div id="tab_activa-2">
        <p class="w3-container w3-light-grey w3-round w3-padding-4">
            <?php echo $txt_pla ?>
        </p>
        <?php echo $tbl_plantacion; ?>
        <p class="w3-text-green w3-padding-8"><strong>El estado de recuperación del sector seleccionado es el siguiente</strong></p>
        <?php if (count($plantacion) > 0) {
            ?>

            <div class="w3-light-grey w3-round w3-padding-8">
                <form>
                    <div class="w3-row-padding w3-padding-8">
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Pendiente</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_pendiente; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Num.<br>Plantas</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_numero; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Dimensiones</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_hoyado; ?>" />
                        </div>
                    </div>
                    <div class="w3-row-padding w3-padding-8">
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Método</b></label>
                        </div>
                        <div class="w3-col s4">
                            <textarea rows="2" class="w3-input w3-border w3-round w3-padding-4"><?php echo $plantacion->pla_metodo; ?></textarea>
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Especies</b></label>
                        </div>
                        <div class="w3-col s4">
                            <textarea rows="2" class="w3-input w3-border w3-round w3-padding-4"><?php echo $plantacion->pla_especies; ?></textarea>
                        </div>
                    </div>
                    <div class="w3-row-padding w3-padding-8">
                        <div class="w3-col s6">
                            <div class="w3-display-container" style="height:180px;">
                                <div class="w3-padding w3-display-topmiddle">
                                    <table class="w3-table-all w3-centered">
                                        <thead>
                                            <tr><th class="w3-green" colspan="2">Fertilización</th></tr>
                                            <tr><td>Producto</td><td>Peso(gr/planta)</td></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Área<br>plantada</b></label>
                        </div>
                        <div class="w3-col s4">
                            <div class="w3-row-padding">
                                <div class="w3-col s6">
                                    <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_area; ?>" />
                                </div>
                                <div class="w3-col s6">
                                    <label class="w3-label w3-text-black">Ha</label>
                                </div>
                            </div>
                            <div class="w3-row-padding">
                                <div class="w3-col s6">
                                    <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo round($plantacion->pla_area / 100, 2); ?>" />
                                </div>
                                <div class="w3-col s6">
                                    <label class="w3-label w3-text-black">Km<sup>2</sup></label>
                                </div>
                            </div>


                        </div>

                    </div>
                </form>
            </div>
            <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
            <div class="w3-container w3-light-grey w3-round w3-padding-4">
                <p><?php echo $plantacion->pla_texto; ?></p>
            </div>

            <?php
            echo $seguimiento;
        } else {
            ?>
            <p class="w3-container w3-light-grey w3-round w3-padding-4"><strong>No existe información de plantacion de este sector</strong></p>
            <?php
        }
        ?>


    </div>
    <!--Mantenimiento-->
    <div id="tab_activa-3">

        <p class="w3-container w3-light-grey w3-round w3-padding-4">
            <?php echo $txt_man; ?>
        </p>
        <?php echo $tbl_pla_man; ?>
        <p class="w3-text-green w3-padding-8"><strong> El estado de mantenimiento del sector seleccionado es el siguiente</strong></p>
        <?php if (count($pla_man) > 0) {
            ?>
            <div class="w3-light-grey w3-round w3-padding-8">
                <form>
                    <div class="w3-row-padding w3-padding-8">
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Dimensiones</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="r 50cm" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Podas</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $pla_man->pla_podas == 'f' ? 'NO' : 'SI'; ?>" />
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Raleos</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $pla_man->pla_raleos == 'f' ? 'NO' : 'SI'; ?>" />
                        </div>
                    </div>
                    <div class="w3-row-padding w3-padding-8">
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Replante<br>Especies</b></label>
                        </div>
                        <div class="w3-col s6">
                            <textarea rows="2" class="w3-input w3-border w3-round w3-padding-4"><?php echo $pla_man->pla_especies; ?></textarea>
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Num.<br>Plantas</b></label>
                        </div>
                        <div class="w3-col s2">
                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $pla_man->pla_numero; ?>" />
                        </div>
                    </div>
                    <div class="w3-row-padding w3-padding-8">
                        <div class="w3-col s6">
                            <div class="w3-display-container" style="height:180px;">
                                <div class="w3-padding w3-display-topmiddle">
                                    <table class="w3-table-all w3-centered">
                                        <thead>
                                            <tr>
                                                <th class="w3-green" colspan="2">Fertilización</th>
                                            </tr>
                                            <tr>
                                                <td>Producto</td>
                                                <td>Peso(gr/planta)</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Área<br>plantada</b></label>
                        </div>

                        <div class="w3-col s4">
                            <div class="w3-row w3-padding-8">
                                <div class="w3-col s4">
                                    <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_area; ?>" />
                                </div>
                                <div class="w3-col s2">
                                    <label class="w3-label w3-text-black">Ha</label>
                                </div>
                                <div class="w3-col s4">
                                    <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo round($plantacion->pla_area / 100, 2); ?>" />
                                </div>
                                <div class="w3-col s2">
                                    <label class="w3-label w3-text-black">Km<sup>2</sup></label>
                                </div>
                            </div>


                        </div>

                        <div class="w3-col s2">
                            <label class="w3-label w3-text-black"><b>Área<br>Mantenida</b></label>
                        </div>

                        <div class="w3-col s4">
                            <div class="w3-row w3-padding-8">
                                <div class="w3-col s4">
                                    <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $pla_man->pla_area; ?>" />
                                </div>
                                <div class="w3-col s2">
                                    <label class="w3-label w3-text-black">Ha</label>
                                </div>
                                <div class="w3-col s4">
                                    <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo round($pla_man->pla_area / 100, 2); ?>" />
                                </div>
                                <div class="w3-col s2">
                                    <label class="w3-label w3-text-black">Km<sup>2</sup></label>
                                </div>
                            </div>


                        </div>

                    </div>
                </form>
            </div>

            <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
            <div class="w3-container w3-light-grey w3-round w3-padding-4">
                <p><?php echo $pla_man->pla_texto; ?><br></p>
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