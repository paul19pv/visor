<script src="<?php echo base_url() ?>js/js_simulacion.js"></script>
<p class="w3-container w3-light-grey w3-round w3-padding-4">Esta sección nos permite visualizar cómo avanzan los procesos de restauración activa en el ecosistema páramo a través de la actividad plantación, mediante coberturas precargadas de los años 2008-2011, 2012, 2013, 2014 y 2015</p>
<p class="w3-text-green w3-padding-8"><strong>A continuación puede encontrar las actividadesy resultados por subactividad de la fase seleccionada:</strong></p>
<div id="tab_par_sim_act">
    <ul>
        <li><a href="#tab_par_sim_act-1">Plantación</a></li>
    </ul>
    <div id="tab_par_sim_act-1">

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
                                <input class="w3-radio" type="radio" name="velocidad" value="500">
                                <label class="w3-validate">Rápido</label>
                            </div>
                            <div class="w3-col s4">
                                <input class="w3-radio" type="radio" name="velocidad" value="1000">
                                <label class="w3-validate">Medio</label>
                            </div>
                            <div class="w3-col s4">
                                <input class="w3-radio" type="radio" name="velocidad" value="2000">
                                <label class="w3-validate">Lento</label>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col s4">
                        <button id="btn_animacion" type="button" class="w3-btn w3-round w3-border w3-white w3-padding-4">Iniciar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

