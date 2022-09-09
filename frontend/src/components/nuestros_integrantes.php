<link rel="stylesheet" href=<?php echo NUESTROS_INTEGRANTES; ?>>
<section class="nuestros-integrantes" id="nuestros-integrantes">
    <?php
        require_once("../src/components/titulo.php");
        require_once("../src/components/empresa.php");
        titulo("nuestros integrantes");
    ?>
    <div class="contenedor">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, consectetur ad aspernatur illo magni earum amet, autem temporibus porro sint vero magnam quis illum tempore. Debitis nulla minus harum reprehenderit?</p>
        <ul class="lista-entidades">
            <?php empresa("#", "acdivoca", ENTIDAD2); ?>
            <?php empresa("#", "secretaria de las mujeres", ENTIDAD2); ?>
            <?php empresa("#", "secretaria de desarrollo económico", ENTIDAD2); ?>
            <?php empresa("#", "alianza por la solidaridad", ENTIDAD2); ?>
            <?php empresa("#", "banco agrario", ENTIDAD2); ?>
            <?php empresa("#", "cámara de comercio de buenaventura", ENTIDAD2); ?>
            <?php empresa("#", "centro cultural banco de la república", ENTIDAD2); ?>
            <?php empresa("#", "confandi", ENTIDAD2); ?>
            <?php empresa("#", "confenalco", ENTIDAD2); ?>
            <?php empresa("#", "mesa de productividad y empleo", ENTIDAD2); ?>
            <?php empresa("#", "comite intergremial e interempresarial de buenaventura", ENTIDAD2); ?>
            <?php empresa("#", "cruz roja internacional", ENTIDAD2); ?>
            <?php empresa("#", "diocesis de buenaventura", ENTIDAD2); ?>
            <?php empresa("#", "fundación carvajal", ENTIDAD2); ?>
            <?php empresa("#", "fundación escuela taller de buenaventura", ENTIDAD2); ?>
            <?php empresa("#", "fundación etika verde", ENTIDAD2); ?>
            <?php empresa("#", "fundación sociedad portuaria aguadulce", ENTIDAD2); ?>
            <?php empresa("#", "fundación WWB", ENTIDAD2); ?>
            <?php empresa("#", "valleINN", ENTIDAD2); ?>
            <?php empresa("#", "ministerio de comercio, industria y turismo", ENTIDAD2); ?>
            <?php empresa("#", "SENA", ENTIDAD2); ?>
            <?php empresa("#", "servicio jesuita a refugiados", ENTIDAD2); ?>
            <?php empresa("#", "universidad antonio nariño", ENTIDAD2); ?>
            <?php empresa("#", "universidad del pacífico", ENTIDAD2); ?>
            <?php empresa("#", "universidad del valle", ENTIDAD2); ?>
            <?php empresa("#", "universidad minuto de dios", ENTIDAD2); ?>
        </ul>
    </div>
</section>