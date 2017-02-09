<script>
    $(function () {
        $("#tab_fas_bos").tabs({
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
<div id="bosque">
    <h3 class="w3-margin-0">Sector: <?php echo $sector->sec_nombre ?></h3>
    <p class="w3-text-green w3-padding-8"><strong>Por favor seleccione la estrategia de recuperación de interés para acceder a los resultados del sector:</strong></p>
    <div id="tab_fas_bos">
        <ul>
            <!--Activa-->
            <li><a href="<?php echo base_url()."CobVeg/view_activa/bosque/".$sector->sec_id?>">Activa</a></li>
            <!--Pasiva-->
            <li><a href="<?php echo base_url()."CobVeg/view_pasiva/bosque/".$sector->sec_id?>">Pasiva</a></li>
        </ul>
    </div>
</div>