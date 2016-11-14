<script>
    $(function () {
        $("#tab_rip_com").tabs();
        //tabs pestaña mantenimiento
        $("#tab_rip_man_com").tabs();
        //tabs pestaña simulacion
        $("#tab_rip_sim_com").tabs();

    });
</script>
<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p>Las actividades de la recuperación Pasiva consideradas son Agroforestería, Silvopastura y Mantenimiento </p>
</div>
<p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
<div id="tab_rip_com">
    <ul>
        <li><a href="#tab_rip_com-1">Síntesis</a></li>
        <li><a href="#tab_rip_com-2">Agroforestería</a></li>
        <li><a href="#tab_rip_com-3">Silvopastura</a></li>
        <li><a href="#tab_rip_com-4">Mantenimiento</a></li>
        <li><a href="#tab_rip_com-5">Simulación</a></li>
    </ul>
    <!--sintesis-->
    <div id="tab_rip_com-1">
        <img src="<?php echo base_url() ?>images/cobertura/activa.png" class="w3-left w3-margin-right" />
        <p class="w3-container">La recuperación tipo comunitaria busca disminuir la presión sobre el ecosistema ripario, con la participación activa de la comunidad y propietarios de tierras aledañas a estas zonas, a través del desarrollo de actividades como la Agroforestería y la Silvopastura.</p>
    </div>
    <!--agroforesteria-->
    <div id="tab_rip_com-2">
        <p class="w3-container w3-light-grey w3-round w3-padding-4">En zonas aledañas a ríos dedicadas a la agricultura, el FONAG busca detener la frontera agrícola a través del establecimiento de cortinas rompe vientos con la siembra de plántulas de especies nativas de dos filas mínimo, con una distancia de 3 metros entre sí alrededor de un terreno de esta manera y se mejora la productividad del terreno.</p>
        <div class="w3-panel">
            <div class="w3-display-container w3-col s12" style="height:155px;">
                <div class="w3-display-topmiddle">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th rowspan="2">Técnica</th>
                                <th>Marcado/Hoyado</th>
                                <th>Plantado</th>
                            </tr>
                            <tr>
                                <td>Distancia(m)</td>
                                <td>Plantas</td>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Árboles en Cultivos</td>
                                <td>10x10</td>
                                <td>100 x Ha</td>
                            </tr>
                            <tr>
                                <td>Cortinas<br>Rompevientos</td>
                                <td>2x2</td>
                                <td>500 x m</td>
                            </tr>
                            <tr>
                                <td>Cercas Vivas</td>
                                <td>4x4</td>
                                <td>200 x m</td>
                            </tr>
                            <tr>
                                <td>Árboles en Curvas<br>de Nivel</td>
                                <td>3x3</td>
                                <td>Varía</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <p class="w3-text-green w3-padding-8"><strong> El estado de recuperación del sector seleccionado es el siguiente:</strong></p>

        <div class="w3-container w3-light-grey w3-round w3-padding-8">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-green">
                        <th rowspan="2">Técnica</th>
                        <th>Distancia (m)</th>
                        <th>Especies</th>
                        <th>Plantas</th>
                        <th>&nbsp;</th>
                        <th>Área Recuperada</th>
                        <th>Long. Intervenida</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Árboles en Cultivos</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Cortinas<br>Rompevientos</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Cercas Vivas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Árboles en Curvas<br>de Nivel</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>


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
    <!--silvopastura-->
    <div id="tab_rip_com-3">
        <p class="w3-container w3-light-grey w3-round w3-padding-4">En tierras dedicadas a ganadería aledañas a zonas riparias, el FONAG propicia la disminución de ganado y el manejo adecuado de potreros, mediante el cercado de potreros y con la construcción de abrevaderos que eviten al ganado acercarse al río disminuyendo así su contaminación.</p>
        <div class="w3-panel">
            <div class="w3-display-container w3-col s12" style="height:140px;">
                <div class="w3-display-topmiddle">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th rowspan="2">Técnica</th>
                                <th>Marcado/Hoyado</th>
                                <th>Plantado</th>
                            </tr>
                            <tr>
                                <td>Distancia(m)</td>
                                <td>Plantas</td>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Árboles en Cultivos</td>
                                <td>10x10</td>
                                <td>100 x Ha</td>
                            </tr>
                            <tr>
                                <td>Cortinas<br>Rompevientos</td>
                                <td>2x2</td>
                                <td>500 x m</td>
                            </tr>
                            <tr>
                                <td>Cercas Vivas</td>
                                <td>4x4</td>
                                <td>200 x m</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <p class=" w3-text-green w3-padding-8"><strong> El estado de recuperación del sector seleccionado es el siguiente:</strong></p>

        <div class="w3-container w3-light-grey w3-round w3-padding-8">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-green">
                        <th rowspan="2">Técnica</th>
                        <th>Distancia (m)</th>
                        <th>Especies</th>
                        <th>Num. Plantas</th>
                        <th>&nbsp;</th>
                        <th>Área Recuperada</th>
                        <th>Long. Intervenida</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Árboles en Cultivos</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Cortinas<br>Rompevientos</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Cercas Vivas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>

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
    <!--mantenimiento-->
    <div id="tab_rip_com-4">
        <p class="w3-container w3-light-grey w3-round w3-padding-4 w3-margin-bottom">El mantenimiento de los sistemas agroforestales y silvopastoriles, mediante replante, podas, raleos y cosecha de productos forestales, es prioridad para mejorar la producción y disminuir la presión sobre el ecosistema.</p>
        <div id="tab_rip_man_com">
            <ul>
                <li><a href="#tab_rip_man_com-1">Agroforestería</a></li>
                <li><a href="#tab_rip_man_com-2">Silvopastura</a></li>
            </ul>
            <!--mantenimiento agroforesteria-->
            <div id="tab_rip_man_com-1">
                <p class="w3-text-green w3-margin-bottom"><strong> El estado de mantenimiento del sector seleccionado es el siguiente:</strong></p>
                <div class="w3-container w3-light-grey w3-round w3-padding-8">
                    <p><b>Técnica:</b></p>
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th rowspan="2">Años</th>
                                <th colspan="2">Enriquecimiento</th>
                                <th colspan="2">Podas</th>
                                <th colspan="2">Raleos</th>
                                <th colspan="2">Cosecha</th>
                                <th>Total</th>
                                <th>Mantenida</th>
                            </tr>
                            <tr>
                                <td>Ha</td>
                                <td>%</td>
                                <td>Ha</td>
                                <td>%</td>
                                <td>Ha</td>
                                <td>%</td>
                                <td>Ha</td>
                                <td>%</td>
                                <td>%</td>
                                <td>Ha</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1-5</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6-10</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>11-15</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>+15</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div id="tab_rip_man_com-2">
                <p class="w3-text-green w3-margin-bottom"><strong> El estado de mantenimiento del sector seleccionado es el siguiente:</strong></p>
                <div class="w3-container  w3-light-grey w3-round w3-padding-8">
                    <p><b>Técnica:</b></p>
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th rowspan="2">Años</th>
                                <th colspan="2">Enriquecimiento</th>
                                <th colspan="2">Podas</th>
                                <th colspan="2">Raleos</th>
                                <th colspan="2">Cosecha</th>
                                <th>Total</th>
                                <th>Mantenida</th>
                            </tr>
                            <tr>
                                <td>Ha</td>
                                <td>%</td>
                                <td>Ha</td>
                                <td>%</td>
                                <td>Ha</td>
                                <td>%</td>
                                <td>Ha</td>
                                <td>%</td>
                                <td>%</td>
                                <td>Ha</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1-5</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6-10</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>11-15</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>+15</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
    <!--simulacion-->
    <div id="tab_rip_com-5">
        <p class="w3-container w3-light-grey w3-round w3-padding-4">Esta sección permite visualizar cómo avanzan los procesos de restauración comunitaria en el ecosistema ripario a través de la actividad agroforestería, mediante coberturas precargadas de los años 2008-2011, 2012, 2013, 2014 y 2015.</p>
        <p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
        <div id="tab_rip_sim_com">
            <ul>
                <li><a href="#tab_rip_sim_com-1">Agroforestería</a></li>
                <li><a href="#tab_rip_sim_com-2">Silvopastura</a></li>

            </ul>
            <div id="tab_rip_sim_com-1">
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
            <div id="tab_rip_sim_com-2">
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