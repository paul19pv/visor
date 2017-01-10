<script>
    $(function () {
        $("#tab_fas_par").tabs();
    });
</script>
<div id="paramo">
    <h3 class="w3-margin-0">Sector: <?php echo $sector->sec_nombre ?></h3>
    <p class="w3-text-green w3-margin-top"><strong>Por favor seleccione la fase de recuperación de interés para acceder a los resultados del sector:</strong></p>
    <div id="tab_fas_par">
        <ul>
            <li><a href="#tab_fas_par-1">Activa</a></li>
            <li><a href="#tab_fas_par-2">Pasiva</a></li>
        </ul>
        <!--Activa-->
        <div id="tab_fas_par-1">
            <?php echo $activa;?>
        </div>
        <!--Pasiva-->
        <div id="tab_fas_par-2">
            <?php echo $pasiva;?>
        </div>
        
    </div>
</div>