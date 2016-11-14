<script>
    $(function () {
        $("#tab_rip_act").tabs();
        $("#tab_rip_sim_act").tabs();
    });
</script>
<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p>Las actividades de la recuperación Activa consideradas son Plantación y Mantenimiento </p>
</div>
<p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
<div id="tab_rip_act">
    <ul>
        <li><a href="#tab_rip_act-1">Síntesis</a></li>
        <li><a href="#tab_rip_act-2">Plantación</a></li>
        <li><a href="#tab_rip_act-3">Mantenimiento</a></li>
        <li><a href="#tab_rip_act-4">Simulación</a></li>
    </ul>
    <!--Síntesis-->
    <div id="tab_rip_act-1">
        <img src="<?php echo base_url() ?>images/cobertura/activa.png" class="w3-left w3-margin-right" />
        <p class="w3-container">Los hábitats vegetales de los márgenes y orillas de un río son de vital importancia debido al rol que desempeñan estabilizando y rehabilitando el suelo, motivo por el cual el FONAG busca su recuperación a través de la introducción de plántulas de especies forestales nativas al medio que aceleren la regeneración del ecosistema</p>
    </div>
    <!--Plantación-->
    <div id="tab_rip_act-2">
        <p class="w3-container w3-light-grey w3-round w3-padding-4">Este tipo de recuperación se ejecuta cuando el ecosistema ha sido fuertemente degradado y una regeneración natural ya no es posible, y se lo realiza con la utilización de especies hidrofílicas que dependerán del tipo de suelo, la topología y caudal del río, aplicando metodologías como: En parches entre 20 y 25 individuos que vayan de acuerdo a las necesidades del terreno, y la Marco real que se utiliza en caso no exista ningún tipo de vegetación y de esta manera evitar la sedimentación excesiva.</p>
        <div class="w3-panel">
            <div class="w3-display-container w3-col s6" style="height:150px;">
                <div class="w3-display-topmiddle">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th colspan="2">Marcado</th>
                                <th>Oyado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pendiente</td>
                                <td>Método</td>
                                <td>Dimensiones</td>
                            </tr> 
                            <tr>
                                <td><15%</td>
                                <td>Marco Real</td>
                                <td rowspan="3">30x30x30</td>
                            </tr>
                            <tr>
                                <td>>15%</td>
                                <td>Tres bolillo</td>
                            </tr>
                            <tr>
                                <td>No aplica</td>
                                <td>Al azar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w3-display-container w3-col s6" style="height:150px;">
                <div class="w3-display-topmiddle">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green"><th>Fertilización</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Potasio</td></tr>
                            <tr><td>Boro</td></tr>
                            <tr><td>Nitrógeno</td></tr>
                            <tr><td>Fósforo</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <p class="w3-text-green w3-padding-8"><strong>El estado de recuperación del sector seleccionado es el siguiente</strong></p>
        <div class="w3-light-grey w3-round w3-padding-8">
            <form>
                <div class="w3-row-padding w3-padding-8">
                    <div class="w3-col s2">
                        <label class="w3-label w3-text-black"><b>Pendiente</b></label>
                    </div>
                    <div class="w3-col s2">
                        <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                    </div>
                    <div class="w3-col s2">
                        <label class="w3-label w3-text-black"><b>Método</b></label>
                    </div>
                    <div class="w3-col s2">
                        <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                    </div>
                    <div class="w3-col s2">
                        <label class="w3-label w3-text-black"><b>Dimensiones</b></label>
                    </div>
                    <div class="w3-col s2">
                        <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                    </div>
                </div>
                <div class="w3-row-padding w3-padding-8">
                    <div class="w3-col s2">
                        <label class="w3-label w3-text-black"><b>Especies</b></label>
                    </div>
                    <div class="w3-col s6">
                        <textarea rows="2" class="w3-input w3-border w3-round w3-padding-4"><?php echo ''; ?></textarea>
                    </div>
                    <div class="w3-col s2">
                        <label class="w3-label w3-text-black"><b>Num.<br>Plantas</b></label>
                    </div>
                    <div class="w3-col s2">
                        <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
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
                        <div class="w3-row-padding">
                            <div class="w3-col s6">
                                <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                            </div>
                            <div class="w3-col s6">
                                <label class="w3-label w3-text-black">Ha</label>
                            </div>
                        </div>
                        <div class="w3-row-padding">
                            <div class="w3-col s6">
                                <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
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
            <p><?php echo ''; ?></p>
        </div>
        <div class="w3-display-container" style="height:40px;">
            <div class="w3-padding w3-display-topmiddle">
                <form>
                    <div class="w3-row">
                        <input class="w3-check" type="checkbox">
                        <label class="w3-validate">Ver mapa</label>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--Mantenimiento-->
    <div id="tab_rip_act-3">
        <p class="w3-container w3-light-grey w3-round w3-padding-4">Una vez realizada la restauración activa se espera un periodo de al menos un año de adaptación de las plántulas a las condiciones climáticas y de tipo de suelo, para realizar una limpieza o un coronamiento en un radio de 50cm alrededor de las plantas, para reducir la competencia y fomentar su crecimiento. Durante el transcurso del tiempo, dependiendo del sitio y estado de la plantación se pueden programar podas y raleos para disminuir la densidad de los árboles y propiciar el ingreso natural de nuevas especies.</p>
        <div class="w3-panel">
            <div class="w3-display-container w3-col s12" style="height:90px;">
                <div class="w3-display-topmiddle">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th>Coronamiento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Limpieza<br>Dimensiones (cm)</td></tr>
                            <tr><td>r 50cm</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <p class="w3-text-green w3-padding-8"><strong> El estado de mantenimiento del sector seleccionado es el siguiente</strong></p>

        <div class="w3-light-grey w3-round w3-padding-8">
            <form>
                <div class="w3-row-padding w3-padding-8">
                    <div class="w3-col s2">
                        <label class="w3-label w3-text-black"><b>Dimensiones</b></label>
                    </div>
                    <div class="w3-col s2">
                        <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                    </div>
                    <div class="w3-col s2">
                        <label class="w3-label w3-text-black"><b>Podas</b></label>
                    </div>
                    <div class="w3-col s2">
                        <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                    </div>
                    <div class="w3-col s2">
                        <label class="w3-label w3-text-black"><b>Raleos</b></label>
                    </div>
                    <div class="w3-col s2">
                        <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                    </div>
                </div>
                <div class="w3-row-padding w3-padding-8">
                    <div class="w3-col s2">
                        <label class="w3-label w3-text-black"><b>Replante<br>Especies</b></label>
                    </div>
                    <div class="w3-col s6">
                        <textarea rows="2" class="w3-input w3-border w3-round w3-padding-4"><?php echo ''; ?></textarea>
                    </div>
                    <div class="w3-col s2">
                        <label class="w3-label w3-text-black"><b>Num.<br>Plantas</b></label>
                    </div>
                    <div class="w3-col s2">
                        <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
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
                                <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                            </div>
                            <div class="w3-col s2">
                                <label class="w3-label w3-text-black">Ha</label>
                            </div>
                            <div class="w3-col s4">
                                <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
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
                                <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
                            </div>
                            <div class="w3-col s2">
                                <label class="w3-label w3-text-black">Ha</label>
                            </div>
                            <div class="w3-col s4">
                                <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo ''; ?>" />
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
            <p><?php echo ''; ?><br></p>
        </div>
        <div class="w3-display-container" style="height:40px;">
            <div class="w3-padding w3-display-topmiddle">
                <form>
                    <div class="w3-row">
                        <input class="w3-check" type="checkbox">
                        <label class="w3-validate">Ver mapa</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Simulación-->
    <div id="tab_rip_act-4">
        <p class="w3-container w3-light-grey w3-round w3-padding-4">Esta sección permite visualizar cómo ha ido avanzando los procesos de restauración activa en el ecosistema ripario a través de la actividad plantación, mediante coberturas precargadas de los años 2008-2011, 2012, 2013, 2014 y 2015.</p>
        <p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividadesy resultados por subactividad de la fase seleccionada:</strong></p>
        <div id="tab_rip_sim_act">
            <ul>
                <li><a href="#tab_rip_sim_act-1">Plantación</a></li>
            </ul>
            <div id="tab_rip_sim_act-1">
                <form class="w3-light-grey w3-round">
                    <div class="w3-container">
                        <p class="w3-padding-8"><strong>Seleccione las coberturas a presentar</strong></p>
                        <div class="w3-row w3-padding-8">
                            <div class="w3-col s2">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">Todos los años</label>
                            </div>
                            <div class="w3-col s2">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">2005-2011</label>
                            </div>
                            <div class="w3-col s2">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">2012</label>
                            </div>
                            <div class="w3-col s2">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">2013</label>
                            </div>
                            <div class="w3-col s2">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">2014</label>
                            </div>
                            <div class="w3-col s2">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">2015</label>
                            </div>
                        </div>
                        <p class="w3-padding-8"><strong>Escoja la velocidad de visualización</strong></p>
                        <div class="w3-row w3-padding-8 w3-margin-bottom">
                            <div class="w3-col s6">
                                <div class="w3-row">
                                    <div class="w3-col s4">
                                        <input class="w3-radio" type="radio" name="gender" value="female">
                                        <label class="w3-validate">Rápido</label>
                                    </div>
                                    <div class="w3-col s4">
                                        <input class="w3-radio" type="radio" name="gender" value="female">
                                        <label class="w3-validate">Medio</label>
                                    </div>
                                    <div class="w3-col s4">
                                        <input class="w3-radio" type="radio" name="gender" value="female">
                                        <label class="w3-validate">Lento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="w3-col s4">
                                <button class="w3-btn w3-round w3-border w3-white w3-padding-4">Iniciar</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>