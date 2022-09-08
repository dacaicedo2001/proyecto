<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/pagina_proyectos.css">
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
                titulo("proyectos");
            ?>
            <hr>
        </header>
        <main>
            <?php require("../../src/components/buscador.php"); ?>
            <section>
                <div class="contenedor-articulos">
                    <?php
                        require("../../src/components/articulo.php");
                        for($i = 0; $i < 10; $i++) { ruta(LEER_PROYECTO); }
                    ?>
                </div>
            </section>
            <?php require_once("../../src/components/aside.php"); ?>
            <?php include_once("../../src/components/paginacion.php"); ?>
        </main>
        <?php include_once("../../src/components/footer.php"); ?>
    </body>
</html>