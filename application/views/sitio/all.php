<script>
    jQuery(function () {
        jQuery("#tabs").tabs();
        jQuery("#tab_fas_par").tabs();
        jQuery("#tab_fas_bos").tabs();
        jQuery("#tab_fas_rip").tabs();
        jQuery("#tab_act_par").tabs();
        jQuery("#tab_act_bos").tabs();
        jQuery("#tab_act_rip").tabs();
        jQuery("#tab_pas_par").tabs();
        jQuery("#tab_pas_bos").tabs();
        jQuery("#tab_pas_rip").tabs();
        jQuery("#info_activa").dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            },
            position: { my: "right-17% center-16", at: "right-17% center-16" }
        });
        jQuery("#ico_act_par").on("click", function () {
            jQuery("#info_activa").dialog("open");
        });
        jQuery("#ico_act_bos").on("click", function () {
            jQuery("#info_activa").dialog("open");
        });
        jQuery("#ico_act_rip").on("click", function () {
            jQuery("#info_activa").dialog("open");
        });
        jQuery("#info_pasiva").dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            },
            position: { my: "right-17% center-15", at: "right-17% center-15" }
        });
        jQuery("#ico_pas_par").on("click", function () {
            jQuery("#info_pasiva").dialog("open");
        });
        jQuery("#ico_pas_bos").on("click", function () {
            jQuery("#info_pasiva").dialog("open");
        });
        jQuery("#ico_pas_rip").on("click", function () {
            jQuery("#info_pasiva").dialog("open");
        });
        jQuery("#info_plantacion").dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            },
            position: { my: "right-17% center-15", at: "right-17% center-15" }
        });
        jQuery("#ico_plantacion_par").on("click", function () {
            jQuery("#info_plantacion").dialog("open");
        });
        jQuery("#ico_plantacion_bos").on("click", function () {
            jQuery("#info_plantacion").dialog("open");
        });
        jQuery("#ico_plantacion_rip").on("click", function () {
            jQuery("#info_plantacion").dialog("open");
        });
        jQuery("#info_pla_man").dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            },
            position: { my: "right-17% center-15", at: "right-17% center-15" }
        });
        jQuery("#ico_pla_man_par").on("click", function () {
            jQuery("#info_pla_man").dialog("open");
        });
        jQuery("#ico_pla_man_bos").on("click", function () {
            jQuery("#info_pla_man").dialog("open");
        });
        jQuery("#ico_pla_man_rip").on("click", function () {
            jQuery("#info_pla_man").dialog("open");
        });
        jQuery("#info_cercado").dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            },
            position: { my: "right-17% center-15", at: "right-17% center-15" }
        });
        jQuery("#ico_cercado_par").on("click", function () {
            jQuery("#info_cercado").dialog("open");
        });
        jQuery("#ico_cercado_bos").on("click", function () {
            jQuery("#info_cercado").dialog("open");
        });
        jQuery("#ico_cercado_rip").on("click", function () {
            jQuery("#info_cercado").dialog("open");
        });
        jQuery("#info_cer_man").dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            },
            position: { my: "right-17% center-15", at: "right-17% center-15" }
        });
        jQuery("#ico_cer_man_par").on("click", function () {
            jQuery("#info_cer_man").dialog("open");
        });
        jQuery("#ico_cer_man_bos").on("click", function () {
            jQuery("#info_cer_man").dialog("open");
        });
        jQuery("#ico_cer_man_rip").on("click", function () {
            jQuery("#info_cer_man").dialog("open");
        });
    });
</script>
<div id="tabs">
    <ul>
        <li><a href="#tabs-4">Páramo</a></li>
        <li><a href="#tabs-5">Bosque Andino</a></li>
        <li><a href="#tabs-6">Ripario</a></li>
    </ul>
    <div id="tabs-4"><!--paramo-->
        <p class="w3-text-green w3-margin-top"><strong>Por favor seleccione la estrategia de recuperación de interés para acceder a los resultados del sector:</strong></p>
        <div id="tab_fas_par">
            <ul>
                <li><a href="#tab_fas_par-1">Activa</a><img class="info" id="ico_act_par" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                <li><a href="#tab_fas_par-2">Pasiva</a><img class="info" id="ico_pas_par" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
            </ul>
            <div id="tab_fas_par-1"><!--Activa-->
                <p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
                <div id="tab_act_par">
                    <ul>
                        <li><a href="#tab_act_par-1">Plantación</a><img class="info" id="ico_plantacion_par" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                        <li><a href="#tab_act_par-2">Mantenimiento</a><img class="info" id="ico_pla_man_par" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                    </ul>
                    <div id="tab_act_par-1"><!--Plantación-->
                        <div class="w3-panel">
                            <div class="w3-display-container w3-col s4" style="height: 150px;">
                                <img class="w3-left w3-margin-right" src="/portalSIAF/wp-content/uploads/2017/08/activa.png" />
                            </div>
                            <div class="w3-display-container w3-col s4" style="height:150px;">
                                <div class="w3-display-topmiddle">
                                    <table class="w3-table-all w3-centered">
                                        <thead>
                                            <tr class="w3-green"><th colspan="2">Marcado</th><th>Hoyado</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Pendiente</td><td>Método</td><td>Dimensiones</td></tr> 
                                            <tr><td><15%</td><td>Marco Real</td><td rowspan="3">30x30x30</td></tr>
                                            <tr><td>>15%</td><td>Tres bolillo</td></tr>
                                            <tr><td>No aplica</td><td>Al azar</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="w3-display-container w3-col s4" style="height:150px;">
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
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Pendiente</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="> 15%, < 15%" ></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Num.Plantas</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="14000" /></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Dimensiones</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="30x30x30" /></div>
                                </div>
                                <div class="w3-row-padding w3-padding-8">
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Método</b></label></div>
                                    <div class="w3-col s4"><textarea class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" rows="2">3 Bolillo, Marco Real</textarea></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Especies</b></label></div>
                                    <div class="w3-col s4"><textarea class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" rows="2">Polylepis incana, Polylepis reticulata,Myricapubescens, Alnus nepalensis</textarea></div>
                                </div>
                                <div class="w3-row-padding w3-padding-8">
                                    <div class="w3-col s6">
                                        <div class="w3-display-container" style="height: 180px;">
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
                                                            <td>Potasio</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Boro</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nitrogeno</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fosforo</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Área plantada</b></label></div>
                                    <div class="w3-col s4">
                                        <div class="w3-row-padding">
                                            <div class="w3-col s6"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="14.00" /></div>
                                            <div class="w3-col s6"><label class="w3-label w3-text-black">Ha</label></div>
                                        </div>
                                        <div class="w3-row-padding">
                                            <div class="w3-col s6"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="0.14" /></div>
                                            <div class="w3-col s6"><label class="w3-label w3-text-black">Km<sup>2</sup></label></div>
                                        </div>
                                    </div>
                                </div>
                            </form></div>
                        <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
                        <div class="w3-container w3-light-grey w3-round w3-padding-4">
                            En la Unidad Hidrográfica San Pedro, sector El Chaupi el FONAG ha realizado plantaciones en 14 ha usando las metodologías  3 bolillo y marco real, con una densidad 1000 plantas/ha de dos especies de Polylepis. 
                        </div>
                    </div>
                    <div id="tab_act_par-2"><!--Mantenimiento-->
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
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Dimensiones</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="r 50cm" /></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Podas</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="No" /></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Raleos</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="No" /></div>
                                </div>
                                <div class="w3-row-padding w3-padding-8">
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Replante Especies</b></label></div>
                                    <div class="w3-col s6"><textarea class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" rows="2"></textarea></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Num. Plantas</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="algo" /></div>
                                </div>
                                <div class="w3-row-padding w3-padding-8">
                                    <div class="w3-col s6">
                                        <div class="w3-display-container" style="height: 180px;">
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
                                                            <td>Potasio</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Boro</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nitrogeno</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fosforo</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Área Plantada</b></label></div>
                                    <div class="w3-col s4">
                                        <div class="w3-row w3-padding-8">
                                            <div class="w3-col s4"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="44.00" /></div>
                                            <div class="w3-col s2"><label class="w3-label w3-text-black">Ha</label></div>
                                            <div class="w3-col s4"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="0.44" /></div>
                                            <div class="w3-col s2"><label class="w3-label w3-text-black">Km<sup>2</sup></label></div>
                                        </div>
                                    </div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Área Mantenida</b></label></div>
                                    <div class="w3-col s4">
                                        <div class="w3-row w3-padding-8">
                                            <div class="w3-col s4"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="44.00" /></div>
                                            <div class="w3-col s2"><label class="w3-label w3-text-black">Ha</label></div>
                                            <div class="w3-col s4"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="0.44" /></div>
                                            <div class="w3-col s2"><label class="w3-label w3-text-black">Km<sup>2</sup></label></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
                        <p class="w3-container w3-light-grey w3-round w3-padding-4">
                            En la Unidad Hidrográfica San Pedro, sector Estribaciones Pasochoa Oeste, el FONAG ha realizado el coronamiento con 50cm de radio, en 44 ha de plantación para propiciar su crecimiento y sobrevivencia.
                        </p>
                    </div>
                </div>
            </div><!--Activa-->
            <div id="tab_fas_par-2"><!--Pasiva-->
                <p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
                <div id="tab_pas_par">
                    <ul>
                        <li><a href="#tab_pas_par-1">Cercado</a><img class="info" id="ico_cercado_par" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                        <li><a href="#tab_pas_par-2">Mantenimiento</a><img class="info" id="ico_cer_man_par" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                    </ul>
                    <div id="tab_pas_par-1"><!--Cercado-->
                        <div class="w3-panel">
                            <div class="w3-display-container w3-col-s6">
                                <img class="w3-left w3-margin-right" src="/portalSIAF/wp-content/uploads/2017/08/pasiva.png" />
                            </div>
                            <div class="w3-display-container w3-col s6" style="height:155px;">
                                <div class="w3-display-topmiddle">
                                    <table class="w3-table-all w3-centered">
                                        <thead>
                                            <tr class="w3-green"><th colspan="2">Cerca</th><th>Marcado</th><th>Hoyado</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Tipo</td><td>Número de<br>Líneas</td><td>Distancia(m)</td><td>Dimensiones (cm)</td></tr>
                                            <tr><td>Eléctrica</td><td>2</td><td>25</td><td rowspan="2">30x30x50</td></tr>
                                            <tr><td>Alambre de<br>Púas</td><td>4</td><td>3</td></tr>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="7200" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">m</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="72" readonly="readonly"/>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="103" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Ha</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="1.03" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Km<sup>2</sup></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
                        <p class="w3-container w3-light-grey w3-round w3-padding-4">
                            
                        </p>
                    </div>
                    <div id="tab_pas_par-2"><!--Mantenimiento-->
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">m</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">m</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Ha</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Ha</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Km<sup>2</sup></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
                        <div class="w3-container w3-light-grey w3-round w3-padding-4">
                            <p></p>
                        </div>
                        <p class="w3-container w3-light-grey w3-round w3-padding-4"><strong>No existe información de mantenimiento de este sector</strong></p>
                    </div>
                </div>
            </div><!--Pasiva-->
        </div>
    </div><!--paramo--> 
    <div id="tabs-5"><!--bosque-->
        <p class="w3-text-green w3-margin-top"><strong>Por favor seleccione la estrategia de recuperación de interés para acceder a los resultados del sector:</strong></p>
        <div id="tab_fas_bos">
            <ul>
                <li><a href="#tab_fas_bos-1">Activa</a><img class="info" id="ico_act_bos" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                <li><a href="#tab_fas_bos-2">Pasiva</a><img class="info" id="ico_pas_bos" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
            </ul>
            <div id="tab_fas_bos-1"><!--Activa Bosque-->
                <p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
                <div id="tab_act_bos">
                    <ul>
                        <li><a href="#tab_act_bos-1">Plantación</a><img class="info" id="ico_plantacion_bos" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                        <li><a href="#tab_act_bos-2">Mantenimiento</a><img class="info" id="ico_pla_man_bos" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                    </ul>
                    <div id="tab_act_bos-1"><!--Plantación-->
                        <div class="w3-panel">
                            <div class="w3-display-container w3-col s4" style="height: 150px;">
                                <img class="w3-left w3-margin-right" src="/portalSIAF/wp-content/uploads/2017/08/activa.png" />
                            </div>
                            <div class="w3-display-container w3-col s4" style="height:150px;">
                                <div class="w3-display-topmiddle">
                                    <table class="w3-table-all w3-centered">
                                        <thead>
                                            <tr class="w3-green"><th colspan="2">Marcado</th><th>Hoyado</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Pendiente</td><td>Método</td><td>Dimensiones</td></tr> 
                                            <tr><td><15%</td><td>Marco Real</td><td rowspan="3">30x30x30</td></tr>
                                            <tr><td>>15%</td><td>Tres bolillo</td></tr>
                                            <tr><td>No aplica</td><td>Al azar</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="w3-display-container w3-col s4" style="height:150px;">
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
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Pendiente</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="15" ></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Num.Plantas</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="22000" /></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Dimensiones</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="30x30x30" /></div>
                                </div>
                                <div class="w3-row-padding w3-padding-8">
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Método</b></label></div>
                                    <div class="w3-col s4"><textarea class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" rows="2">3 Bolillo</textarea></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Especies</b></label></div>
                                    <div class="w3-col s4"><textarea class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" rows="2">Polylepis incana, Polylepis reticulata,Myricapubescens, Alnus nepalensis</textarea></div>
                                </div>
                                <div class="w3-row-padding w3-padding-8">
                                    <div class="w3-col s6">
                                        <div class="w3-display-container" style="height: 180px;">
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
                                                            <td>Potasio</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Boro</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nitrogeno</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fosforo</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Área plantada</b></label></div>
                                    <div class="w3-col s4">
                                        <div class="w3-row-padding">
                                            <div class="w3-col s6"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="22.00" /></div>
                                            <div class="w3-col s6"><label class="w3-label w3-text-black">Ha</label></div>
                                        </div>
                                        <div class="w3-row-padding">
                                            <div class="w3-col s6"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="0.22" /></div>
                                            <div class="w3-col s6"><label class="w3-label w3-text-black">Km<sup>2</sup></label></div>
                                        </div>
                                    </div>
                                </div>
                            </form></div>
                        <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
                        <div class="w3-container w3-light-grey w3-round w3-padding-4">
                            En la Unidad Hidrográfica San Pedro, sector El Chaupi el FONAG ha realizado plantaciones en 14 ha usando las metodologías  3 bolillo y marco real, con una densidad 1000 plantas/ha de dos especies de Polylepis. 
                        </div>
                    </div>
                    <div id="tab_act_bos-2"><!--Mantenimiento-->
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
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Dimensiones</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="r 50cm" /></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Podas</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="prueba" /></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Raleos</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="prueba" /></div>
                                </div>
                                <div class="w3-row-padding w3-padding-8">
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Replante Especies</b></label></div>
                                    <div class="w3-col s6"><textarea class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" rows="2">prueba</textarea></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Num. Plantas</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="algo" /></div>
                                </div>
                                <div class="w3-row-padding w3-padding-8">
                                    <div class="w3-col s6">
                                        <div class="w3-display-container" style="height: 180px;">
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
                                                            <td>Potasio</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Boro</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nitrogeno</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fosforo</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Área plantada</b></label></div>
                                    <div class="w3-col s4">
                                        <div class="w3-row w3-padding-8">
                                            <div class="w3-col s4"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="prueba" /></div>
                                            <div class="w3-col s2"><label class="w3-label w3-text-black">Ha</label></div>
                                            <div class="w3-col s4"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="prueba" /></div>
                                            <div class="w3-col s2"><label class="w3-label w3-text-black">Km<sup>2</sup></label></div>
                                        </div>
                                    </div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Área
                                                Mantenida</b></label></div>
                                    <div class="w3-col s4">
                                        <div class="w3-row w3-padding-8">
                                            <div class="w3-col s4"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="prueba" /></div>
                                            <div class="w3-col s2"><label class="w3-label w3-text-black">Ha</label></div>
                                            <div class="w3-col s4"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="prueba" /></div>
                                            <div class="w3-col s2"><label class="w3-label w3-text-black">Km<sup>2</sup></label></div>
                                        </div>
                                    </div>
                                </div>
                            </form></div>
                        <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
                        <div class="w3-container w3-light-grey w3-round w3-padding-4">
                        </div>
                    </div>
                </div>
            </div><!--Activa Bosques-->
            <div id="tab_fas_bos-2"><!--Pasiva Bosque-->
                <p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
                <div id="tab_pas_bos">
                    <ul>
                        <li><a href="#tab_pas_bos-1">Cercado</a><img class="info" id="ico_cercado_bos" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                        <li><a href="#tab_pas_bos-2">Mantenimiento</a><img class="info" id="ico_cer_man_bos" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                    </ul>
                    <div id="tab_pas_bos-1"><!--Cercado-->
                        <div class="w3-panel">
                            <div class="w3-display-container w3-col-s6">
                                <img class="w3-left w3-margin-right" src="/portalSIAF/wp-content/uploads/2017/08/pasiva.png" />
                            </div>
                            <div class="w3-display-container w3-col s6" style="height:155px;">
                                <div class="w3-display-topmiddle">
                                    <table class="w3-table-all w3-centered">
                                        <thead>
                                            <tr class="w3-green"><th colspan="2">Cerca</th><th>Marcado</th><th>Hoyado</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Tipo</td><td>Número de<br>Líneas</td><td>Distancia(m)</td><td>Dimensiones (cm)</td></tr>
                                            <tr><td>Eléctrica</td><td>2</td><td>25</td><td rowspan="2">30x30x50</td></tr>
                                            <tr><td>Alambre de<br>Púas</td><td>4</td><td>3</td></tr>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">m</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Ha</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Km<sup>2</sup></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
                        <div class="w3-container w3-light-grey w3-round w3-padding-4">
                            <p></p>
                        </div>
                    </div>
                    <div id="tab_pas_bos-2"><!--Mantenimiento-->
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">m</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">m</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Ha</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Ha</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Km<sup>2</sup></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
                        <div class="w3-container w3-light-grey w3-round w3-padding-4">
                            <p></p>
                        </div>
                        <p class="w3-container w3-light-grey w3-round w3-padding-4"><strong>No existe información de mantenimiento de este sector</strong></p>
                    </div>
                </div>
            </div><!--Pasiva Bosque-->
        </div>
    </div><!--bosque-->
    <div id="tabs-6"><!--ripario-->
        <p class="w3-text-green w3-margin-top"><strong>Por favor seleccione la estrategia de recuperación de interés para acceder a los resultados del sector:</strong></p>
        <div id="tab_fas_rip">
            <ul>
                <li><a href="#tab_fas_rip-1">Activa</a><img class="info" id="ico_act_rip" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                <li><a href="#tab_fas_rip-2">Pasiva</a><img class="info" id="ico_pas_rip" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
            </ul>
            <div id="tab_fas_rip-1"><!--Activa Ripario-->
                <p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
                <div id="tab_act_rip">
                    <ul>
                        <li><a href="#tab_act_rip-1">Plantación</a><img class="info" id="ico_plantacion_rip" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                        <li><a href="#tab_act_rip-2">Mantenimiento</a><img class="info" id="ico_pla_man_rip" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                    </ul>
                    <div id="tab_act_rip-1"><!--Plantación-->
                        <div class="w3-panel">
                            <div class="w3-display-container w3-col s4" style="height: 150px;">
                                <img class="w3-left w3-margin-right" src="/portalSIAF/wp-content/uploads/2017/08/activa.png" />
                            </div>
                            <div class="w3-display-container w3-col s4" style="height:150px;">
                                <div class="w3-display-topmiddle">
                                    <table class="w3-table-all w3-centered">
                                        <thead>
                                            <tr class="w3-green"><th colspan="2">Marcado</th><th>Hoyado</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Pendiente</td><td>Método</td><td>Dimensiones</td></tr> 
                                            <tr><td><15%</td><td>Marco Real</td><td rowspan="3">30x30x30</td></tr>
                                            <tr><td>>15%</td><td>Tres bolillo</td></tr>
                                            <tr><td>No aplica</td><td>Al azar</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="w3-display-container w3-col s4" style="height:150px;">
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
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Pendiente</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="15" ></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Num.Plantas</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="22000" /></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Dimensiones</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="30x30x30" /></div>
                                </div>
                                <div class="w3-row-padding w3-padding-8">
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Método</b></label></div>
                                    <div class="w3-col s4"><textarea class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" rows="2">3 Bolillo</textarea></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Especies</b></label></div>
                                    <div class="w3-col s4"><textarea class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" rows="2">Polylepis incana, Polylepis reticulata,Myricapubescens, Alnus nepalensis</textarea></div>
                                </div>
                                <div class="w3-row-padding w3-padding-8">
                                    <div class="w3-col s6">
                                        <div class="w3-display-container" style="height: 180px;">
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
                                                            <td>Potasio</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Boro</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nitrogeno</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fosforo</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Área plantada</b></label></div>
                                    <div class="w3-col s4">
                                        <div class="w3-row-padding">
                                            <div class="w3-col s6"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="22.00" /></div>
                                            <div class="w3-col s6"><label class="w3-label w3-text-black">Ha</label></div>
                                        </div>
                                        <div class="w3-row-padding">
                                            <div class="w3-col s6"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="0.22" /></div>
                                            <div class="w3-col s6"><label class="w3-label w3-text-black">Km<sup>2</sup></label></div>
                                        </div>
                                    </div>
                                </div>
                            </form></div>
                        <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
                        <div class="w3-container w3-light-grey w3-round w3-padding-4">
                            En la Unidad Hidrográfica San Pedro, sector El Chaupi el FONAG ha realizado plantaciones en 14 ha usando las metodologías  3 bolillo y marco real, con una densidad 1000 plantas/ha de dos especies de Polylepis. 
                        </div>
                    </div>
                    <div id="tab_act_rip-2"><!--Mantenimiento-->
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
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Dimensiones</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="r 50cm" /></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Podas</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="prueba" /></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Raleos</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="prueba" /></div>
                                </div>
                                <div class="w3-row-padding w3-padding-8">
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Replante Especies</b></label></div>
                                    <div class="w3-col s6"><textarea class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" rows="2">prueba</textarea></div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Num. Plantas</b></label></div>
                                    <div class="w3-col s2"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="algo" /></div>
                                </div>
                                <div class="w3-row-padding w3-padding-8">
                                    <div class="w3-col s6">
                                        <div class="w3-display-container" style="height: 180px;">
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
                                                            <td>Potasio</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Boro</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nitrogeno</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fosforo</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Área plantada</b></label></div>
                                    <div class="w3-col s4">
                                        <div class="w3-row w3-padding-8">
                                            <div class="w3-col s4"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="prueba" /></div>
                                            <div class="w3-col s2"><label class="w3-label w3-text-black">Ha</label></div>
                                            <div class="w3-col s4"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="prueba" /></div>
                                            <div class="w3-col s2"><label class="w3-label w3-text-black">Km<sup>2</sup></label></div>
                                        </div>
                                    </div>
                                    <div class="w3-col s2"><label class="w3-label w3-text-black"><b>Área
                                                Mantenida</b></label></div>
                                    <div class="w3-col s4">
                                        <div class="w3-row w3-padding-8">
                                            <div class="w3-col s4"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="prueba" /></div>
                                            <div class="w3-col s2"><label class="w3-label w3-text-black">Ha</label></div>
                                            <div class="w3-col s4"><input class="w3-input w3-border w3-round w3-padding-4" readonly="readonly" type="text" value="prueba" /></div>
                                            <div class="w3-col s2"><label class="w3-label w3-text-black">Km<sup>2</sup></label></div>
                                        </div>
                                    </div>
                                </div>
                            </form></div>
                        <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
                        <div class="w3-container w3-light-grey w3-round w3-padding-4">
                        </div>
                    </div>
                </div>
            </div><!--Activa-->
            <div id="tab_fas_rip-2"><!--Pasiva-->
                <p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividades y resultados por subactividad de la fase seleccionada:</strong></p>
                <div id="tab_pas_rip">
                    <ul>
                        <li><a href="#tab_pas_rip-1">Cercado</a><img class="info" id="ico_cercado_rip" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                        <li><a href="#tab_pas_rip-2">Mantenimiento</a><img class="info" id="ico_cer_man_rip" src="/portalSIAF/wp-content/uploads/2017/08/Get-Info-icon.png" ></li>
                    </ul>
                    <div id="tab_pas_rip-1"><!--Cercado-->
                        <div class="w3-panel">
                            <div class="w3-display-container w3-col-s6">
                                <img class="w3-left w3-margin-right" src="/portalSIAF/wp-content/uploads/2017/08/pasiva.png" />
                            </div>
                            <div class="w3-display-container w3-col s6" style="height:155px;">
                                <div class="w3-display-topmiddle">
                                    <table class="w3-table-all w3-centered">
                                        <thead>
                                            <tr class="w3-green"><th colspan="2">Cerca</th><th>Marcado</th><th>Hoyado</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Tipo</td><td>Número de<br>Líneas</td><td>Distancia(m)</td><td>Dimensiones (cm)</td></tr>
                                            <tr><td>Eléctrica</td><td>2</td><td>25</td><td rowspan="2">30x30x50</td></tr>
                                            <tr><td>Alambre de<br>Púas</td><td>4</td><td>3</td></tr>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">m</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Ha</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Km<sup>2</sup></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
                        <div class="w3-container w3-light-grey w3-round w3-padding-4">
                            <p></p>
                        </div>
                    </div>
                    <div id="tab_pas_rip-2"><!--Mantenimiento-->
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">m</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">m</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Ha</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
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
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Ha</label>
                                    </div>
                                    <div class="w3-col s2">
                                        <input class="w3-input w3-border w3-round w3-padding-4" value="" readonly="readonly"/>
                                    </div>
                                    <div class="w3-col s2">
                                        <label class="w3-label w3-text-black">Km<sup>2</sup></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="w3-text-green w3-padding-8"><strong>Interpretación del Estado del Sector</strong></p>
                        <div class="w3-container w3-light-grey w3-round w3-padding-4">
                            <p></p>
                        </div>
                        <p class="w3-container w3-light-grey w3-round w3-padding-4"><strong>No existe información de mantenimiento de este sector</strong></p>
                    </div>
                </div>
            </div><!--Pasiva-->
        </div>
    </div><!--ripario-->
</div>
<div id="info_activa" title="Activa">
    <div class="w3-container">
        <p>Debido a que el incremento de las actividades humanas productivas en los Páramos está alternado significativamente su funcionalidad natural especialmente la hidrológica, el FONAG implementa actividades como la introducción de plántulas de especies forestales, arbustivas y herbáceas nativas alto andinas adaptadas al medio que aceleren la recuperación del ecosistema páramo, cuando la restauración pasiva no funciona o es demasiado lenta.</p>
    </div>
</div>
<div id="info_pasiva" title="Pasiva">
    <div class="w3-container">
        <p>Debido a que existen páramos que se encuentran en proceso de degradación, por actividades antropogénicas como la ganadería, el FONAG busca propiciar la restauración pasiva del ecosistema páramo a través de la regeneración natural, reducción de perturbaciones y la reducción de competencia con la implementación de cercados que limitan el ingreso de ganado.</p>
    </div>
</div>
<div id="info_plantacion" title="Plantacion">
    <div class="w3-container">
        <p>Este tipo de recuperación se ejecuta cuando el ecosistema páramo es fuertemente degradado, se lo realiza con la utilización de especies nativas principalmente Polylepis sp. (Yagual) Chuquiragua sp. Gynoxys sp (Piquil), Loricaria thuyoides (Jata), Hypericum sp (Romerillo de páramo) entre otras, aplicando metodologías como tres bolillo, tipo célula y en marco real, que dependen del grado de degradación, pendiente, viento y tipo de suelo del sector.</p>
    </div>
</div>
<div id="info_pla_man" title="Plantación Mantenimiento">
    <div class="w3-container">
        <p>Una vez realizada la restauración activa se espera un período de al menos dos años de adaptación de las plántulas a las condiciones climáticas y de tipo de suelo, para realizar una limpieza o un coronamiento en un radio de 50cm alrededor de las plantas, reducir la competencia y fomentar su crecimiento. Durante el transcurso del tiempo, dependiendo del sitio y estado de la plantación se programa podas y raleos para disminuir la densidad de los árboles y propiciar el ingreso natural de nuevas especies.</p>
    </div>
</div>

<div id="info_cercado" title="Cercado">
    <div class="w3-container">
        <p>Actualmente el FONAG utiliza dos tipos de cercado; el primero un cercado eléctrico, que utiliza paneles solares, dos líneas alambre de acero y postes de plástico reciclado cada 30 m o menos dependiendo de la topología del sitio; y, el cercado tradicional con 4 líneas de alambre de púas y postes de pambil.</p>
    </div>
</div>
<div id="info_cer_man" title="Cercado Mantenimiento">
    <div class="w3-container">
        <p>Debido a la constante presión del ganado en las cercas tradicional es necesario realizar un mantenimiento anual pues es común que se rompan las líneas de alambre por lo que se cambian los sectores afectados; para cercas eléctricas se realiza un cambio de batería en el panel y recolocación de postes de ser necesario.</p>
    </div>
</div>

