<link rel="stylesheet" href=<?php echo NOTICIAS; ?>>
<section class="noticias" id="noticias">
    <div class="contenedor-noticias">
        <?php
            require_once("../src/components/titulo.php");
            titulo("noticias");
        ?>
        <div class="destacadas">
            <?php
                require("../src/components/articulo.php");
                for($i = 0; $i < 10; $i++) ruta(LEER_NOTICIA);
            ?>
        </div>
        <a class="titulo" href=<?php echo PAGINA_NOTICIAS; ?>>ver todas las noticias</a>
    </div>
</section>
