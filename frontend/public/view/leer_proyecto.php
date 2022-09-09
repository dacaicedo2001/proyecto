<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/22cdbfb1be.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/leer_proyecto.css">
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
                titulo("proyectos");
            ?>
            <hr>
            <?php
                require_once("../../src/components/informacion_noticia.php");
                informacion([
                    'publicado: 03/05/2022' => 'fa-regular fa-calendar-days',
                    'hora: 5:35 PM' => 'fa-regular fa-clock',
                    'entidad: confenalco' => 'fa-solid fa-building',
                    'estado: activo' => 'fa-solid fa-ellipsis-vertical'
                ]);
            ?>
            <hr>
        </header>
        <main>
            <?php require_once("../../src/components/contenido.php"); ?>
            <div class="botones">
                <button>descargar documentación</button>
                <button>inscribirse al proyecto</button>
            </div>
            <hr>
            <?php require_once("../../src/components/editor.php"); ?>
            <?php require_once("../../src/components/comentario.php"); ?>
            <hr>
            <div>
                <h3 class="opiniones">opiniones</h3>
                <?php require("../../src/components/comentarista.php"); ?>
                <?php require("../../src/components/comentarista.php"); ?>
                <?php require("../../src/components/comentarista.php"); ?>
            </div>
        </main>
        <?php include_once("../../src/components/footer.php"); ?>
    </body>
</html>
