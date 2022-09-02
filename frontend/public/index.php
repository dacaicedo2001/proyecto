<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./css/index.css">
        <script src="https://kit.fontawesome.com/22cdbfb1be.js" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    <body>
        <!-- Rutas -->
        <?php require_once("../src/routes/style.php"); ?>
        <?php require_once("../src/routes/images.php"); ?>
        <?php require_once("../src/routes/script.php"); ?>
        <?php require_once("../src/routes/pages.php"); ?>
        <header>
            <?php require_once("../src/components/navegacion.php"); ?>
            <?php require_once("../src/components/banner.php"); ?>
            <h1>red local de emprendimientoo</h1>
        </header>
        <main>
            <?php require_once("../src/components/quienes_somos.php"); ?>
            <?php require_once("../src/components/nuestros_integrantes.php"); ?>
            <?php require_once("../src/components/noticias.php"); ?>
            <?php require_once("../src/components/proyectos.php"); ?>
            <?php require_once("../src/components/empleabilidad.php"); ?>
        </main>
        <?php require_once("../src/components/footer.php"); ?>
    </body>
</html>