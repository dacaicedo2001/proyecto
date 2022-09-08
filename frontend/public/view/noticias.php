<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/pagina_noticias.css">
        <script src="https://kit.fontawesome.com/22cdbfb1be.js" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    <body>
        <!-- Rutas -->
        <?php require_once("../../src/routes/style.php"); ?>
        <?php require_once("../../src/routes/images.php"); ?>
        <?php require_once("../../src/routes/pages.php"); ?>
        <?php require_once("../../src/routes/script.php"); ?>
        <header>
            <?php require_once("../../src/components/navegacion.php"); ?>
            <?php
                require_once("../../src/components/titulo.php");
                titulo("noticias");
            ?>
            <hr>
        </header>
        <main>
            <?php require_once("../../src/components/buscador.php"); ?>
            <?php require_once("../../src/components/articulo.php"); ?>
            <section class="sesion-noticia">
                <div class="categoria-noticia">
                    <h3>deportes</h3>
                    <a href=<?php echo CATEGORIA_NOTICIA; ?>>ver todo sobre deportes</a>
                </div>
                <div class="destacadas">
                    <?php for($i = 0; $i < 10; $i++) { ruta(LEER_NOTICIA); } ?>
                </div>
                <!-- <i id="anterior" class="fa-solid fa-angles-left flecha izq"></i> -->
                <!-- <i id="siguiente" class="fa-solid fa-angles-right flecha der"></i> -->
            </section>
            <section class="sesion-noticia">
                <div class="categoria-noticia">
                    <h3>cultura</h3>
                    <a href=<?php echo CATEGORIA_NOTICIA; ?>>ver todo sobre cultura</a>
                </div>
                <div class="destacadas">
                    <?php for($i = 0; $i < 10; $i++) { ruta(LEER_NOTICIA); } ?>
                </div>
            </section>
            <section class="sesion-noticia">
                <div class="categoria-noticia">
                    <h3>educación</h3>
                    <a href=<?php echo CATEGORIA_NOTICIA; ?>>ver todo sobre educación</a>
                </div>
                <div class="destacadas">
                    <?php for($i = 0; $i < 10; $i++) { ruta(LEER_NOTICIA); } ?>
                </div>
            </section>
            <section class="sesion-noticia">
                <div class="categoria-noticia">
                    <h3>economía</h3>
                    <a href=<?php echo CATEGORIA_NOTICIA; ?>>ver todo sobre deportes</a>
                </div>
                <div class="destacadas">
                    <?php for($i = 0; $i < 10; $i++) { ruta(LEER_NOTICIA); } ?>
                </div>
            </section>
            <?php include_once("../../src//components/aside.php"); ?>
        </main>
        <?php include_once("../../src/components/footer.php"); ?>
    </body>
</html>