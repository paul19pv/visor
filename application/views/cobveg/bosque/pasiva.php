<script>
    $(function () {
        $("#tab_bos_pas").tabs();
        $("#tab_bos_sim_pas").tabs();
    });
</script>
<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p>Las actividades de la recuperación Pasiva consideradas son el Cercado y el Mantenimiento </p>
</div>
<p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
<div id="tab_bos_pas">
    <ul>
        <li><a href="#tab_bos_pas-1">Síntesis</a></li>
        <li><a href="#tab_bos_pas-2">Cercado</a></li>
        <li><a href="#tab_bos_pas-3">Mantenimiento</a></li>
        <li><a href="#tab_bos_pas-4">Simulación</a></li>
    </ul>
    <!--Sintesis-->
    <div id="tab_bos_pas-1">
        <img src="<?php echo base_url() ?>images/cobertura/pasiva.png" class="w3-left w3-margin-right" />
        <p class="w3-container">Debido a que existen Bosques Andinos que se encuentran en proceso de degradación acelerado, por actividades antropogénicas como la ganadería, el FONAG busca propiciar la restauración pasiva del ecosistema a través de la regeneración natural, reducción de perturbaciones y la reducción de competencia con la implementación de cercados que limitan el ingreso principalmente de ganado.</p>
    </div>
    <!--Cercado-->
    <div id="tab_bos_pas-2">
        <p class="w3-container w3-light-grey w3-round w3-padding-4">Se utilizan dos tipos de cercado, el primero un cercado eléctrico en el que se utilizan paneles solares, dos líneas alambre de acero y postes de plástico reciclado cada 30 m o menos, dependiendo de la topología del sitio, y el cercado tradicional con 6 líneas de alambre de púas y postes de pambil.</p>
        <div class="w3-panel">
            <div class="w3-display-container w3-col s12" style="height:155px;">
                <div class="w3-display-topmiddle">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th colspan="2">Cerca</th>
                                <th>Marcado</th>
                                <th>Hoyado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tipo</td>
                                <td>Número de<br>Líneas</td>
                                <td>Distancia(m)</td>
                                <td>Dimensiones (cm)</td>
                            </tr>
                            <tr>
                                <td>Eléctrica</td>
                                <td>2</td>
                                <td>25</td>
                                <td rowspan="2">30x30x50</td>
                            </tr>
                            <tr>
                                <td>Alambre de<br>Púas</td>
                                <td>4</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <p class="w3-text-green w3-padding-8"><strong> El estado de recuperación del sector seleccionado es el siguiente:</strong></p>

        <div class="w3-light-grey w3-round w3-padding-8">
            <form>
                <div class="w3-row-padding w3-padding-8">
                    <div class="w3-col s4">
                        <label class="w3-label w3-text-black"><b>Longitud de Cerca</b></label>
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
    <!--Mantenimiento-->
    <div id="tab_bos_pas-3">

        <p class="w3-container w3-light-grey w3-round w3-padding-4">Debido a la constante presión del ganado en las cercas tradicionales es necesario realizar un mantenimiento anual de cercas, para el caso de cercas eléctricas se realiza un cambio de batería en el panel y recolocación de postes de ser necesario, para el caso es común que se rompan las líneas de alambre por lo que se hace un cambio de las mismas en los sectores afectados.</p>
        <div class="w3-panel">
            <div class="w3-display-container w3-col s12" style="height:110px;">
                <div class="w3-display-topmiddle">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th>Cerca</th>
                                <th>Reposición de Postes</th>
                                <th>Tendido de Cable</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tipo</td>
                                <td>Periodo (años)</td>
                                <td>Periodo (años)</td>
                            </tr>
                            <tr>
                                <td>Eléctrica</td>
                                <td>40</td>
                                <td>No aplica</td>
                            </tr>
                            <tr>
                                <td>Alambre de<br>Púas</td>
                                <td>6</td>
                                <td>6</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <p class="w3-text-green w3-padding-8"><strong> El estado de mantenimiento del sector seleccionado es el siguiente:</strong></p>

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
    <div id="tab_bos_pas-4">
        <p class="w3-container w3-light-grey w3-round w3-padding-4">Esta sección nos permite visualizar cómo ha ido avanzando los procesos de restauración pasiva en el ecosistema bosque andino a través de la actividad cercado, mediante coberturas precargadas de los años 2008-2011, 2012, 2013, 2014 y 2015.</p>
        <p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividadesy resultados por subactividad de la fase seleccionada:</strong></p>
        <div id="tab_bos_sim_pas">
            <ul>
                <li><a href="#tab_bos_sim_pas-1">Cercado</a></li>
            </ul>
            <div id="tab_bos_sim_pas-1">
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