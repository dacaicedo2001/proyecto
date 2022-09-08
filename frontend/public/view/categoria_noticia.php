<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/22cdbfb1be.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/categoria_noticia.css">
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
            <?php require_once("../../src/components/categoria.php"); ?>
            <?php require_once("../../src/components/aside.php"); ?>
        </main>
        <?php include_once("../../src/components/footer.php"); ?>
    </body>
</html>