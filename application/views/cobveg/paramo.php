<script>
    $(function () {
<<<<<<< HEAD
        $("#tab_fas_par").tabs({
            beforeLoad: function (event, ui) {
                ui.jqXHR.fail(function () {
                    ui.panel.html(
                            "Hubo un problema al cargar al contenido" +
                            "Lo resolveremos lo más pronto posible.");
                });
            },
            beforeActivate: function( event, ui ) {
                //vaciar el panel antes de cargar el componente escenario
                ui.oldPanel.html('vacio');
            }
        });
    });
</script>
<div id="paramo">
    <h3 class="w3-margin-0">Sector: <?php echo $sector->sec_nombre ?></h3>
    <p class="w3-text-green w3-margin-top"><strong>Por favor seleccione la estrategia de recuperación de interés para acceder a los resultados del sector:</strong></p>
    <div id="tab_fas_par">
        <ul>
            <!--Activa-->
            <li><a href="<?php echo base_url()."CobVeg/view_activa/paramo/".$sector->sec_id?>">Activa</a></li>
            <!--Pasiva-->
            <li><a href="<?php echo base_url()."CobVeg/view_pasiva/paramo/".$sector->sec_id?>">Pasiva</a></li>
        </ul>
    </div>
=======
        $("#tab_fase").tabs();
        $("#tab_actividad").tabs();
    });
</script>


<div id="paramo">
    <div class="encabezado">
        <img src="<?php echo base_url() . "images/cobertura/sectores/" . $sector->sec_imagen ?>" />
        <div>
            <h3><?php echo $sector->sec_nombre ?></h3>
            <p><?php echo $sector->sec_texto ?></p>
        </div>
    </div>
    <p class="indicador">Por favor seleccione la fase de recuperación de interés para acceder a los resultados del sector:</p>
    <div id="tab_fase">
        <ul>
            <li><a href="#tab_fase-1">Activa</a></li>
            <li><a href="#tab_fase-2">Pasiva</a></li>
            <li><a href="#tab_fase-3">Comunitaria</a></li>
        </ul>
        <div id="tab_fase-1" style="padding: 10px 0px;">
            <div class="parrafo">
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
                    <img src="<?php echo base_url() ?>images/cobertura/activa.png" />
                    <p>Debido a que el incremento de las actividades humanas productivas en los Páramos está alternado significativamente su funcionalidad natural especialmente la hidrológica, el FONAG implementa actividades como la introducción de plántulas de especies forestales, arbustivas y herbáceas nativas alto andinas adaptadas al medio que aceleren la recuperación del ecosistema páramo, cuando la restauración pasiva no funciona o es demasiado lenta.</p>
                </div>
                <div id="tab_actividad-2">
                    <p class="parrafo">Este tipo de recuperación se ejecuta cuando el ecosistema páramo es fuertemente degradado, se lo realiza con la utilización de especies nativas principalmente Polylepis sp. (Yagual) Chuquiragua sp. Gynoxys sp (Piquil), Loricaria thuyoides (Jata), Hypericum sp (Romerillo de páramo) entre otras, aplicando metodologías como tres bolillo, tipo célula y en marco real, que dependen del grado de degradación, pendiente, viento y tipo de suelo del sector.</p>
                    <div class="div_tabla" style="width:360px; ">
                        <div style="float: left;">
                            <table>
                                <thead>
                                    <tr>
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
                        <div style="float: left;margin-left: 20px;">
                            <table>
                                <thead>
                                    <tr><th>Fertilización</th></tr>
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
                    <p class="indicador">El estado de recuperación del sector seleccionado es el siguiente</p>
                    <div style="overflow: hidden" class="parrafo">
                        <form>
                            <div class="form-group">
                                <label>Pendiente</label>
                                <div class="col-lg-2">
                                    <input class="form-control" value="<?php echo $plantacion->pla_pendiente; ?>" />
                                </div>
                                <label>Método</label>
                                <div class="col-lg-3">
                                    <input class="form-control" value="<?php echo $plantacion->pla_metodo; ?>" />
                                </div>
                                <label>Dimensiones</label>
                                <div class="col-lg-2">
                                    <input class="form-control" value="<?php echo $plantacion->pla_hoyado; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Especies</label>
                                <div class="col-lg-5">
                                    
                                    <textarea rows="1" class="form-control"><?php echo $plantacion->pla_especies; ?></textarea>
                                </div>
                                <label>Num. Plantas</label>
                                <div class="col-lg-3">
                                    <input class="form-control" value="<?php echo $plantacion->pla_numero; ?>" />
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
                                <label>Área plantada</label>
                                <div class="col-lg-2">
                                    <input class="form-control" value="<?php echo $plantacion->pla_hectareas; ?>" />
                                </div>
                                <label>Ha</label>
                                <div class="col-lg-2">
                                    <input class="form-control" value="<?php echo $plantacion->pla_kilometros; ?>" />
                                </div>
                                <label>Km</label>
                                
                            </div>
                        </form>
                    </div>
                    <p class="indicador">Interpretación del Estado del Sector</p>
                    <div class="parrafo">
                        <p><?php echo $plantacion->pla_texto;?></p>
                    </div>

                </div>
                <div id="tab_actividad-3">
                    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                </div>
                <div id="tab_actividad-4">
                    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
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

>>>>>>> d0a6859f1ef8b7109fa3ed399f31b760f3406e20
</div>