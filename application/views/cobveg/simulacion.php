<script>
    $(function () {
        $("#tab_sim_esc").tabs();
    });
</script>
<div class="w3-container w3-light-grey w3-round w3-padding-4">
    <p>La aplicación del modelo cartográfico identifica las áreas potenciales para la recuperación de cobertura vegetal natural, convirtiéndose en una herramienta fundamental para procesos de planificación principalmente para el Programa de Recuperación de la Cobertura Vegetal, permitiendo a futuro lograr objetivos significativos en la recuperación del recurso agua dentro del ámbito del FONAG. Se consideran dos posibles escenarios: Necesidad de Conservación y Viabilidad de Recuperación.</p>
</div>
<p class="w3-text-green w3-padding-8"><strong>Por favor seleccione a continuación la sección de interés:</strong></p>
<div id="tab_sim_esc">
    <ul>
        <li><a href="#tab_sim_esc-1">Necesidad de Conservación</a></li>
        <li><a href="#tab_sim_esc-2">Viabilidad de Recuperación</a></li>

    </ul>
    <div id="tab_sim_esc-1">
        <?php echo $necesidad; ?>
    </div>
    <div id="tab_sim_esc-2">    
    </div>
    
</div>