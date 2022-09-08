<link rel="stylesheet" href=<?php echo CATEGORIA; ?>>
<div class="contenedor-categoria">
    <div class="titulo-categoria">
        <h3>deportes</h3>
    </div>
    <div class="articulos">
        <?php
            require("../../src/components/articulo.php");
            for($i = 0; $i < 10; $i++) { ruta(LEER_NOTICIA); }
        ?>
    </div>
    <?php require("../../src/components/paginacion.php"); ?>
</div>