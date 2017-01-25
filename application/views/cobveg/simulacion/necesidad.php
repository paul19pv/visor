<script>
    $(function () {
        $("#tab_nec_esc").tabs({
            beforeLoad: function (event, ui) {
                //ui.panel.html('activa');
                //ui.tab.html('activa')
                ui.jqXHR.fail(function () {
                    ui.panel.html(
                            "Hubo un problema al cargar al contenido" +
                            "Lo resolveremos lo más pronto posible.");
                });
            },
            beforeActivate: function( event, ui ) {
                //vaciar el panel antes de cargar el componente escenario
                ui.oldPanel.html('');
            }
        });
        
    });
</script>
<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p>El escenario de Necesidad de Conservación está orientado a la implementación de medidas de recuperación de la cobertura vegetal que son acogidas por la comunidad y respetan los umbrales establecidos para que la frontera agrícola no se expanda sobre la cobertura vegetal natural. Este escenario considera 3 resultados: i) para el período actual donde el estrés hídrico resulta del de precipitación y demanda sin incrementos (P0D0); ii) proyección incrementada donde el estrés hídrico resulta del incremento de 10% en precipitación y una mayor demanda (P+10D+); y iii) proyección decrementada donde el estrés hídrico resulta del decremento de 10% en precipitación y mayor demanda (P-10D+).</p>
</div>
<p class="w3-text-green w3-padding-8"><strong>A continuación los escenarios disponibles para la selección realizada:</strong></p>
<div id="tab_nec_esc">
    <ul>
        <!--Actual-->
        <li><a href="<?php echo base_url()."CobVeg/view_escenario/necesidad/actual"?>">Actual</a></li>
        <!-- +10% Precipitación + Demanda-->
        <li><a href="<?php echo base_url()."CobVeg/view_escenario/necesidad/incremento"?>">+10% Precipitación + Demanda</a></li>
        <!-- -10% Precipitación + Demanda-->
        <li><a href="<?php echo base_url()."CobVeg/view_escenario/necesidad/decremento"?>">-10% Precipitación + Demanda</a></li>
        <!--Simulacion-->
        <li><a href="<?php echo base_url()."CobVeg/view_coberturas_unidad/".$unidad ."/necesidad"?>">Simulación</a></li>
    </ul>

    
   
    
    
    
    
    
    

</div>