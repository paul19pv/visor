<script>
    $(function () {
        $("#tab_nec_esc").tabs();
        $("#tab_nec_act").tabs();
        $("#tab_nec_mas").tabs();
        $("#tab_nec_men").tabs();
        $("#tab_nec_sim").tabs();
    });
</script>
<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p>El escenario de Necesidad de Conservación está orientado a la implementación de medidas de recuperación de la cobertura vegetal que son acogidas por la comunidad y respetan los umbrales establecidos para que la frontera agrícola no se expanda sobre la cobertura vegetal natural. Este escenario considera 3 resultados: i) para el período actual donde el estrés hídrico resulta del de precipitación y demanda sin incrementos (P0D0); ii) proyección incrementada donde el estrés hídrico resulta del incremento de 10% en precipitación y una mayor demanda (P+10D+); y iii) proyección decrementada donde el estrés hídrico resulta del decremento de 10% en precipitación y mayor demanda (P-10D+).</p>
</div>
<p class="w3-text-green w3-padding-8"><strong>A continuación los escenarios disponibles para la selección realizada:</strong></p>
<div id="tab_nec_esc">
    <ul>
        <li><a href="#tab_nec_esc-1">Actual</a></li>
        <li><a href="#tab_nec_esc-2">+10% Precipitación + Demanda</a></li>
        <li><a href="#tab_nec_esc-3">-10% Precipitación + Demanda</a></li>
        <li><a href="#tab_nec_esc-4">Simulación</a></li>
    </ul>
    <!--Actual-->
    <div id="tab_nec_esc-1">
        <div class="w3-container w3-light-grey w3-round w3-padding-4">
            <p>Los resultados de la salida de información para este escenario están dados por la variable de estrés hídrico, considerando así que, para el escenario actual el estrés hídrico no tiene incremento de precipitación ni de demanda (P0D0).</p>
        </div>
        <br>
        <div id="tab_nec_act">
            <ul>
                <li><a href="#tab_nec_act-1">Guayllabamba</a></li>
                <li><a href="#tab_nec_act-2">Napo</a></li>
            </ul>
            <!--Guayllabamba-->
            <div id="tab_nec_act-1">
                <div class="w3-container w3-light-grey w3-round w3-padding-4">
                    <p>La cuenca del río Guayllabamba comprende un área total de 4711 km2 y está conformada por las unidades hídricas San Pedro, Pita, Guayllabamba Alto, Pisque y Guayllabamba Medio.</p>
                </div>
                <form class="w3-section">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th rowspan="2">Unidad Hídrica</th>
                                <th colspan="2">Muy baja</th>
                                <th colspan="2">Baja</th>
                                <th colspan="2">Moderada</th>
                                <th colspan="2">Alta</th>
                                <th colspan="2">Muy Alta</th>
                                <th rowspan="2">Ver Mapa</th>
                                <th rowspan="2">Ver Imagen</th>
                            </tr>
                            <tr>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>San Pedro</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Pita</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Guayllabamba Alto</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Pisque</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Guayllabamba Medio</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td><b>Área Total</b></td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <p class="w3-text-green w3-padding-8"><strong>Interpretación</strong></p>
                <div class="w3-container w3-light-grey w3-round w3-padding-4">
                    <p><?php echo ''; ?><br></p>
                </div>
            </div>
            <!-- Napo-->
            <div id="tab_nec_act-2">    
                <div class="w3-container w3-light-grey w3-round w3-padding-4">
                    <p>La cuenca del río Napo comprende un área total de 814 km2 y está conformada por las unidades hídricas Oyacachi, Chalpi Grande, Papallacta y Antisana.</p>
                </div>
                <form class="w3-section">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th rowspan="2">Unidad Hídrica</th>
                                <th colspan="2">Muy baja</th>
                                <th colspan="2">Baja</th>
                                <th colspan="2">Moderada</th>
                                <th colspan="2">Alta</th>
                                <th colspan="2">Muy Alta</th>
                                <th rowspan="2">Ver Mapa</th>
                                <th rowspan="2">Ver Imagen</th>
                            </tr>
                            <tr>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Oyacachi</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Chalpi Grande</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Papallacta</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Antisana</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>

                            <tr>
                                <td><b>Área Total</b></td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <p class="w3-text-green w3-padding-8"><strong>Interpretación</strong></p>
                <div class="w3-container w3-light-grey w3-round w3-padding-4">
                    <p><?php echo ''; ?><br></p>
                </div>
            </div>
        </div>
    </div>
    <!-- +10% Precipitación + Demanda-->
    <div id="tab_nec_esc-2">
        <div class="w3-container w3-light-grey w3-round w3-padding-4">
            <p>Los resultados de la salida de información para una proyección donde el estrés hídrico resulta del incremento del 10% en precipitación y una mayor demanda (P+10D+).</p>
        </div>
        <br>
        <div id="tab_nec_mas">
            <ul>
                <li><a href="#tab_nec_mas-1">Guayllabamba</a></li>
                <li><a href="#tab_nec_mas-2">Napo</a></li>
            </ul>
            <!--Guayllabamba-->
            <div id="tab_nec_mas-1">
                <div class="w3-container w3-light-grey w3-round w3-padding-4">
                    <p>La cuenca del río Guayllabamba comprende un área total de 4711 km2 y está conformada por las unidades hídricas San Pedro, Pita, Guayllabamba Alto, Pisque y Guayllabamba Medio.</p>
                </div>
                <form class="w3-section">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th rowspan="2">Unidad Hídrica</th>
                                <th colspan="2">Muy baja</th>
                                <th colspan="2">Baja</th>
                                <th colspan="2">Moderada</th>
                                <th colspan="2">Alta</th>
                                <th colspan="2">Muy Alta</th>
                                <th rowspan="2">Ver Mapa</th>
                                <th rowspan="2">Ver Imagen</th>
                            </tr>
                            <tr>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>San Pedro</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Pita</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Guayllabamba Alto</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Pisque</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Guayllabamba Medio</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td><b>Área Total</b></td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <p class="w3-text-green w3-padding-8"><strong>Interpretación</strong></p>
                <div class="w3-container w3-light-grey w3-round w3-padding-4">
                    <p><?php echo ''; ?><br></p>
                </div>
            </div>
            <!-- Napo-->
            <div id="tab_nec_mas-2">    
                <div class="w3-container w3-light-grey w3-round w3-padding-4">
                    <p>La cuenca del río Napo comprende un área total de 814 km2 y está conformada por las unidades hídricas Oyacachi, Chalpi Grande, Papallacta y Antisana.</p>
                </div>
                <form class="w3-section">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th rowspan="2">Unidad Hídrica</th>
                                <th colspan="2">Muy baja</th>
                                <th colspan="2">Baja</th>
                                <th colspan="2">Moderada</th>
                                <th colspan="2">Alta</th>
                                <th colspan="2">Muy Alta</th>
                                <th rowspan="2">Ver Mapa</th>
                                <th rowspan="2">Ver Imagen</th>
                            </tr>
                            <tr>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Oyacachi</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Chalpi Grande</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Papallacta</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Antisana</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>

                            <tr>
                                <td><b>Área Total</b></td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <p class="w3-text-green w3-padding-8"><strong>Interpretación</strong></p>
                <div class="w3-container w3-light-grey w3-round w3-padding-4">
                    <p><?php echo ''; ?><br></p>
                </div>
            </div>
        </div>


    </div>
    <!-- -10% Precipitación + Demanda-->
    <div id="tab_nec_esc-3">
        <div class="w3-container w3-light-grey w3-round w3-padding-4">
            <p>Los resultados de la salida de información para una proyección donde el estrés hídrico resulta del decremento del 10% en precipitación y mayor demanda (P-10D+).</p>
        </div>
        <br>
        <div id="tab_nec_men">
            <ul>
                <li><a href="#tab_nec_men-1">Guayllabamba</a></li>
                <li><a href="#tab_nec_men-2">Napo</a></li>
            </ul>
            <!--Guayllabamba-->
            <div id="tab_nec_men-1">
                <div class="w3-container w3-light-grey w3-round w3-padding-4">
                    <p>La cuenca del río Guayllabamba comprende un área total de 4711 km2 y está conformada por las unidades hídricas San Pedro, Pita, Guayllabamba Alto, Pisque y Guayllabamba Medio.</p>
                </div>
                <form class="w3-section">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th rowspan="2">Unidad Hídrica</th>
                                <th colspan="2">Muy baja</th>
                                <th colspan="2">Baja</th>
                                <th colspan="2">Moderada</th>
                                <th colspan="2">Alta</th>
                                <th colspan="2">Muy Alta</th>
                                <th rowspan="2">Ver Mapa</th>
                                <th rowspan="2">Ver Imagen</th>
                            </tr>
                            <tr>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>San Pedro</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Pita</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Guayllabamba Alto</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Pisque</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Guayllabamba Medio</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td><b>Área Total</b></td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <p class="w3-text-green w3-padding-8"><strong>Interpretación</strong></p>
                <div class="w3-container w3-light-grey w3-round w3-padding-4">
                    <p><?php echo ''; ?><br></p>
                </div>
            </div>
            <!-- Napo-->
            <div id="tab_nec_men-2">    
                <div class="w3-container w3-light-grey w3-round w3-padding-4">
                    <p>La cuenca del río Napo comprende un área total de 814 km2 y está conformada por las unidades hídricas Oyacachi, Chalpi Grande, Papallacta y Antisana.</p>
                </div>
                <form class="w3-section">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th rowspan="2">Unidad Hídrica</th>
                                <th colspan="2">Muy baja</th>
                                <th colspan="2">Baja</th>
                                <th colspan="2">Moderada</th>
                                <th colspan="2">Alta</th>
                                <th colspan="2">Muy Alta</th>
                                <th rowspan="2">Ver Mapa</th>
                                <th rowspan="2">Ver Imagen</th>
                            </tr>
                            <tr>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                                <th>Area (Ha)</th>
                                <th>%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Oyacachi</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Chalpi Grande</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Papallacta</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>
                            <tr>
                                <td>Antisana</td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>

                            <tr>
                                <td><b>Área Total</b></td>
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
                                <td><input class="w3-check" type="checkbox"></td>
                                <td>Click</td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <p class="w3-text-green w3-padding-8"><strong>Interpretación</strong></p>
                <div class="w3-container w3-light-grey w3-round w3-padding-4">
                    <p><?php echo ''; ?><br></p>
                </div>
            </div>
        </div>

    </div>
    <!--Simulacion-->
    <div id="tab_nec_esc-4">
        <div class="w3-container w3-light-grey w3-round w3-padding-4">
            <p>Esta sección permite visualizar, para Guayllabamba y Napo, el escenario Necesidad de Conservación, los resultados del período actual y las proyecciones de incremento y decremento de 10% de precipitación y demanda, mediante coberturas precargadas.</p>
        </div>
        <br>
        <div id="tab_nec_sim">
            <ul>
                <li><a href="#tab_nec_sim-1">Guayllabamba</a></li>
                <li><a href="#tab_nec_sim-2">Napo</a></li>
            </ul>
            <div id="tab_nec_sim-1">
                <form class="w3-light-grey w3-round">
                    <div class="w3-container">
                        <p class="w3-padding-8"><strong>Seleccione a continuación las coberturas a presentar</strong></p>
                        <div class="w3-row w3-padding-8">
                            <div class="w3-col s3">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">Todos las opciones</label>
                            </div>
                            <div class="w3-col s3">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">Actual</label>
                            </div>
                            <div class="w3-col s3">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">+10% Precipitación +Demanda</label>
                            </div>
                            <div class="w3-col s3">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">-10% Precipitación -Demanda</label>
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
            <div id="tab_nec_sim-2">
                <form class="w3-light-grey w3-round">
                    <div class="w3-container">
                        <p class="w3-padding-8"><strong>Seleccione a continuación las coberturas a presentar</strong></p>
                        <div class="w3-row w3-padding-8">
                            <div class="w3-col s3">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">Todos las opciones</label>
                            </div>
                            <div class="w3-col s3">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">Actual</label>
                            </div>
                            <div class="w3-col s3">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">+10% Precipitación +Demanda</label>
                            </div>
                            <div class="w3-col s3">
                                <input class="w3-check" type="checkbox">
                                <label class="w3-validate">-10% Precipitación -Demanda</label>
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