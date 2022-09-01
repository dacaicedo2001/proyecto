<link rel="stylesheet" href=<?php echo NOTICIAS; ?>>
<section class="noticias">
    <div class="contenedor-noticias">
        <?php
            require_once("../src/components/titulo.php");
            titulo("noticias");
        ?>
        <?php require_once("../src/components/noticias_destacadas.php"); ?>
        <a class="titulo bold" href=<?php echo PAGINA_NOTICIAS; ?>>ver todas las noticias</a>
    </div>
</section>
