<script src="<?php echo base_url() ?>js/js_cap_sim.js"></script>
<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p><?php echo $introduccion; ?></p>
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
            <input type="hidden" id="txt_demanda" value="<?php echo $demanda ?>" >
            <input type="hidden" id="txt_precipitacion" value="<?php echo $precipitacion ?>" >
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
                    <?php foreach ($guayllabamba as $item): ?>
                        <tr>
                            <td><?php echo $item['uni_nombre'] ?></td>
                            <td><?php echo $item['mod_area_mb'] ?></td>
                            <td><?php echo $item['mod_por_mb'] ?></td>
                            <td><?php echo $item['mod_area_b'] ?></td>
                            <td><?php echo $item['mod_por_b'] ?></td>
                            <td><?php echo $item['mod_area_m'] ?></td>
                            <td><?php echo $item['mod_por_m'] ?></td>
                            <td><?php echo $item['mod_area_a'] ?></td>
                            <td><?php echo $item['mod_por_a'] ?></td>
                            <td><?php echo $item['mod_area_ma'] ?></td>
                            <td><?php echo $item['mod_por_ma'] ?></td>
                            <td><input class="w3-check chk_unidades" type="checkbox" value="<?php echo $item['cap_nombre'] ?>"></td>
                            <td><a href="<?php echo base_url() . "CobVeg/view_info_esc/" . $item['uni_id'] . "/" . $demanda . "/" . $precipitacion ?>">Click</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>

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
                    <?php foreach ($napo as $item): ?>
                        <tr>
                            <td><?php echo $item['uni_nombre'] ?></td>
                            <td><?php echo $item['mod_area_mb'] ?></td>
                            <td><?php echo $item['mod_por_mb'] ?></td>
                            <td><?php echo $item['mod_area_b'] ?></td>
                            <td><?php echo $item['mod_por_b'] ?></td>
                            <td><?php echo $item['mod_area_m'] ?></td>
                            <td><?php echo $item['mod_por_m'] ?></td>
                            <td><?php echo $item['mod_area_a'] ?></td>
                            <td><?php echo $item['mod_por_a'] ?></td>
                            <td><?php echo $item['mod_area_ma'] ?></td>
                            <td><?php echo $item['mod_por_ma'] ?></td>
                            <td><input class="w3-check chk_unidades" type="checkbox" value="<?php echo $item['cap_nombre'] ?>"></td>
                            <td><a href="<?php echo base_url() . "CobVeg/view_info_esc/" . $item['uni_id'] . "/" . $demanda . "/" . $precipitacion ?>">Click</a></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </form>

    </div>
</div>
