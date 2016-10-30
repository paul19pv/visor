<script>
    $(function () {
        $("#tab_fase").tabs();
        $("#tab_actividad").tabs();
    });
</script>


<div id="paramo">
    <div class="w3-container w3-light-grey w3-round">
        <img src="<?php echo base_url() . "images/cobertura/sectores/" . $sector->sec_imagen ?>" class="w3-left w3-margin-top w3-margin-bottom w3-margin-right"/>
        <div class="w3-rest">
            <h3><?php echo $sector->sec_nombre ?></h3>
            <p><?php echo $sector->sec_texto ?></p>
        </div>
    </div>
    <p class="w3-panel w3-text-green"><strong>Por favor seleccione la fase de recuperación de interés para acceder a los resultados del sector:</strong></p>
    <div id="tab_fase">
        <ul>
            <li><a href="#tab_fase-1">Activa</a></li>
            <li><a href="#tab_fase-2">Pasiva</a></li>
            <li><a href="#tab_fase-3">Comunitaria</a></li>
        </ul>
        <div id="tab_fase-1" style="padding: 10px 0px;">
            <div class="w3-container w3-light-grey w3-round">
                <p>Las actividades de la Recuperación Activa consideradas son Plantación y Mantenimiento </p>
            </div>
            <div id="tab_actividad">
                <ul>
                    <li><a href="#tab_actividad-1">Síntesis</a></li>
                    <li><a href="#tab_actividad-2">Plantación</a></li>
                    <li><a href="#tab_actividad-3">Mantenimiento</a></li>
                    <li><a href="#tab_actividad-4">Simulación</a></li>
                </ul>
                <div id="tab_actividad-1">
                    <img src="<?php echo base_url() ?>images/cobertura/activa.png" class="w3-left w3-margin-right" />
                    <p class="w3-container">Debido a que el incremento de las actividades humanas productivas en los Páramos está alternado significativamente su funcionalidad natural especialmente la hidrológica, el FONAG implementa actividades como la introducción de plántulas de especies forestales, arbustivas y herbáceas nativas alto andinas adaptadas al medio que aceleren la recuperación del ecosistema páramo, cuando la restauración pasiva no funciona o es demasiado lenta.</p>
                </div>
                <div id="tab_actividad-2">
                    <p class="w3-container w3-light-grey w3-round">Este tipo de recuperación se ejecuta cuando el ecosistema páramo es fuertemente degradado, se lo realiza con la utilización de especies nativas principalmente Polylepis sp. (Yagual) Chuquiragua sp. Gynoxys sp (Piquil), Loricaria thuyoides (Jata), Hypericum sp (Romerillo de páramo) entre otras, aplicando metodologías como tres bolillo, tipo célula y en marco real, que dependen del grado de degradación, pendiente, viento y tipo de suelo del sector.</p>
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
                    <p class="w3-panel w3-text-green">El estado de recuperación del sector seleccionado es el siguiente</p>
                    <div class="w3-panel w3-light-grey w3-round">
                        <form>
                            <div class="w3-row w3-padding-4">
                                <div class="w3-col s2">
                                    <label class="w3-label w3-text-black">Pendiente</label>
                                </div>
                                <div class="w3-col s2">
                                    <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_pendiente; ?>" />
                                </div>
                                <div class="w3-col s2">
                                    <label class="w3-label w3-text-black">Método</label>
                                </div>
                                <div class="w3-col s2">
                                    <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_metodo; ?>" />
                                </div>
                                <div class="w3-col s2">
                                    <label class="w3-label w3-text-black">Dimensiones</label>
                                </div>
                                <div class="w3-col s2">
                                    <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_hoyado; ?>" />
                                </div>
                            </div>
                            <div class="w3-row w3-padding-4">
                                <div class="w3-col s2">
                                    <label class="w3-label w3-text-black">Especies</label>
                                </div>
                                <div class="w3-col s6">
                                    <textarea rows="1" class="w3-input w3-border w3-round w3-padding-4"><?php echo $plantacion->pla_especies; ?></textarea>
                                </div>
                                <div class="w3-col s2">
                                    <label class="w3-label w3-text-black">Num. Plantas</label>
                                </div>
                                <div class="w3-col s2">
                                    <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_numero; ?>" />
                                </div>
                            </div>
                            <div class="w3-row w3-padding-4">
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
                                    <label class="w3-label w3-text-black">Área plantada</label>
                                </div>

                                <div class="w3-col s4">
                                    <div class="w3-row">
                                        <div class="w3-col s6">
                                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_hectareas; ?>" />
                                        </div>
                                        <div class="w3-col s6">
                                            <label class="w3-label w3-text-black">Ha</label>
                                        </div>
                                    </div>
                                    <div class="w3-row">
                                        <div class="w3-col s6">
                                            <input class="w3-input w3-border w3-round w3-padding-4" value="<?php echo $plantacion->pla_kilometros; ?>" />
                                        </div>
                                        <div class="w3-col s6">
                                            <label class="w3-label w3-text-black">Km</label>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </form>
                    </div>
                    <p class="w3-panel w3-text-green">Interpretación del Estado del Sector</p>
                    <div class="w3-container w3-light-grey w3-round">
                        <p><?php echo $plantacion->pla_texto; ?></p>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-2" style="margin: auto; float: none;">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Ver Mapa
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="tab_actividad-3">
                    <p class="parrafo">Una vez realizada la restauración activa se espera un período de al menos dos años de adaptación de las plántulas a las condiciones climáticas y de tipo de suelo, para realizar una limpieza o un coronamiento en un radio de 50cm alrededor de las plantas, reducir la competencia y fomentar su crecimiento. Durante el transcurso del tiempo, dependiendo del sitio y estado de la plantación se programa podas y raleos para disminuir la densidad de los árboles y propiciar el ingreso natural de nuevas especies.</p>
                    <div class="div_tabla" style="width:80px; ">
                        <div style="float: left;">
                            <table>
                                <thead>
                                    <tr><th>Coronamiento</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td>Limpieza<br>Dimensiones (cm)</td></tr>
                                    <tr><td>r 50cm</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p class="indicador">El estado de mantenimiento del sector seleccionado es el siguiente</p>
                    <div style="overflow: hidden" class="parrafo">
                        <form>
                            <div class="form-group">
                                <label>Dimensiones</label>
                                <div class="col-lg-2">
                                    <input class="form-control" value="<?php echo ''; ?>" />
                                </div>
                                <label>Podas</label>
                                <div class="col-lg-3">
                                    <input class="form-control" value="<?php echo ''; ?>" />
                                </div>
                                <label>Raleos</label>
                                <div class="col-lg-2">
                                    <input class="form-control" value="<?php echo ''; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Replante Especies</label>
                                <div class="col-lg-5">

                                    <textarea rows="1" class="form-control"><?php ''; ?></textarea>
                                </div>
                                <label>Num. Plantas</label>
                                <div class="col-lg-3">
                                    <input class="form-control" value="<?php ''; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th colspan="2">Fertilización</th>
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
                                        </tbody>
                                    </table>

                                </div>
                                <div class="form-group">
                                    <label>Área plantada</label>
                                    <div class="col-lg-2">
                                        <input class="form-control" value="<?php echo ''; ?>" />
                                    </div>
                                    <label>Ha</label>
                                    <div class="col-lg-2">
                                        <input class="form-control" value="<?php echo ''; ?>" />
                                    </div>
                                    <label>Km</label>

                                </div>

                                <div class="form-group">
                                    <label>Área Mantenida</label>
                                    <div class="col-lg-2">
                                        <input class="form-control" value="<?php echo ''; ?>" />
                                    </div>
                                    <label>Ha</label>
                                    <div class="col-lg-2">
                                        <input class="form-control" value="<?php echo ''; ?>" />
                                    </div>
                                    <label>Km</label>

                                </div>


                            </div>
                        </form>
                    </div>
                    <p class="indicador">Interpretación del Estado del Sector</p>
                    <div class="parrafo">
                        <p><?php echo ''; ?></p>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-2" style="margin: auto; float: none;">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Ver Mapa
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab_actividad-4">
                    <p class="parrafo">Esta sección nos permite visualizar cómo avanzan los procesos de restauración activa en el ecosistema páramo a través de la actividad plantación, mediante coberturas precargadas de los años 2008-2011, 2012, 2103, 2014 y 2015</p>
                    <p class="indicador">A continuación puede encontrar las actividadesy resultados por subactividad de la fase seleccionada:</p>
                    <h2>Plantación</h2>
                    <div class="parrafo padding-10">
                        <p class="indicador">Seleccione las coberturas a presentar</p>

                        <div class="form-group">
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Todos los años
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 2005-2011
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 2012
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 2013
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 2014
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 2015
                                    </label>
                                </div>
                            </div>
                        </div>
                        <p class="indicador">Escoja la velocidad de visualización</p>
                        <div class="form-group">
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio"> Rápido
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio"> Medio
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio"> Lento
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <div id="tab_fase-2">
            <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
        </div>
        <div id="tab_fase-3">
            <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
        </div>
    </div>

</div>