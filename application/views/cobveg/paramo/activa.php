<script>
    $(function () {
        $("#tab_par_act").tabs({
            beforeLoad: function (event, ui) {
                ui.jqXHR.fail(function () {
                    ui.panel.html(
                            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
                            "If this wouldn't be a demo.");
                });
            }
        });

        var customParams = [
            "FORMAT=image/png8",
            "LAYERS=cc:mov_fis_san"
        ];
        var jsonData = $.ajax({
            url: "/visor/cobveg/view_informacion",
            type: "POST",
            //data: $("#insertForm").serialize() + "&variable=" + variable,
            dataType: "json",
            async: false}).responseText;
        var cord_punto = {lat: -0.48, lng: -78.54};
        var contentString = '<div id="content">' +
                '<p>Hola Mundo</p>' +
                jsonData +
                '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: jsonData
        });



        $("#btn_activa").click(function () {
            if ($("#btn_activa").is(':checked')) {
                loadWMS(map, "http://infoagua-guayllabamba.ec:8080/geoserver/wms?", customParams);
                var marker = new google.maps.Marker({
                    position: cord_punto,
                    map: map,
                    title: 'Información'
                });
                marker.addListener('click', function () {
                    infowindow.open(map, marker);

                });

            } else {
                removeOverlay(map);
            }

        });




    });
</script>

<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p>Las actividades de la recuperación Activa consideradas son Plantación y Mantenimiento </p>
</div>
<p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
<div id="tab_par_act">
    <ul>
        <li><a href="#tab_par_act-1">Síntesis</a></li>
        <li><a href="#tab_par_act-2">Plantación</a></li>
        <li><a href="#tab_par_act-3">Mantenimiento</a></li>
        <li><a href="<?php echo base_url()."CobVeg/view_seguimiento/activa/plantacion/".$sec_id?>">Seguimiento</a></li>
        <li><a href="#tab_par_act-5">Beneficio Hidrologico</a></li>
    </ul>
    <!--Síntesis-->
    <div id="tab_par_act-1">
        <img src="<?php echo base_url() ?>images/cobertura/activa.png" class="w3-left w3-margin-right" />
        <p class="w3-container">Debido a que el incremento de las actividades humanas productivas en los Páramos está alternado significativamente su funcionalidad natural especialmente la hidrológica, el FONAG implementa actividades como la introducción de plántulas de especies forestales, arbustivas y herbáceas nativas alto andinas adaptadas al medio que aceleren la recuperación del ecosistema páramo, cuando la restauración pasiva no funciona o es demasiado lenta.</p>
    </div>
    <!--Plantación-->
    <div id="tab_par_act-2">
        <p class="w3-container w3-light-grey w3-round w3-padding-4">Este tipo de recuperación se ejecuta cuando el ecosistema páramo es fuertemente degradado, se lo realiza con la utilización de especies nativas principalmente Polylepis sp. (Yagual) Chuquiragua sp. Gynoxys sp (Piquil), Loricaria thuyoides (Jata), Hypericum sp (Romerillo de páramo) entre otras, aplicando metodologías como tres bolillo, tipo célula y en marco real, que dependen del grado de degradación, pendiente, viento y tipo de suelo del sector.</p>
        <div class="w3-panel">
            <div class="w3-display-container w3-col s6" style="height:150px;">
                <div class="w3-display-topmiddle">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-green">
                                <th colspan="2">Marcado</th>
                                <th>Hoyado</th>
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
                        <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_pendiente; ?>" />
                    </div>
                    <div class="w3-col s2">
                        <label class="w3-label w3-text-black"><b>Método</b></label>
                    </div>
                    <div class="w3-col s2">
                        <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_metodo; ?>" />
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
                        <label class="w3-label w3-text-black"><b>Especies</b></label>
                    </div>
                    <div class="w3-col s6">
                        <textarea rows="2" class="w3-input w3-border w3-round w3-padding-4"><?php echo $plantacion->pla_especies; ?></textarea>
                    </div>
                    <div class="w3-col s2">
                        <label class="w3-label w3-text-black"><b>Num.<br>Plantas</b></label>
                    </div>
                    <div class="w3-col s2">
                        <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_numero; ?>" />
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
        <div class="w3-display-container" style="height:40px;">
            <div class="w3-padding w3-display-topmiddle">
                <form>
                    <div class="w3-row">
                        <input id="btn_activa" class="w3-check" type="checkbox">
                        <label class="w3-validate">Ver mapa</label>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--Mantenimiento-->
    <div id="tab_par_act-3">
        <p class="w3-container w3-light-grey w3-round w3-padding-4">Una vez realizada la restauración activa se espera un período de al menos dos años de adaptación de las plántulas a las condiciones climáticas y de tipo de suelo, para realizar una limpieza o un coronamiento en un radio de 50cm alrededor de las plantas, reducir la competencia y fomentar su crecimiento. Durante el transcurso del tiempo, dependiendo del sitio y estado de la plantación se programa podas y raleos para disminuir la densidad de los árboles y propiciar el ingreso natural de nuevas especies.</p>
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
    <!--Beneficio Hidrologico-->
    <div id="tab_par_act-5">

    </div>
    <!--<div class="tab_par_act-5"></div>-->
</div>