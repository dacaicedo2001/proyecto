<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/22cdbfb1be.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/leer_noticia.css">
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
            <?php
                require_once("../../src/components/informacion_noticia.php");
                informacion([
                    'publicado: 03/05/2022' => 'fa-regular fa-calendar-days',
                    'hora: 5:35 PM' => 'fa-regular fa-clock',
                    'entidad: Confenalco' => 'fa-solid fa-building'
                ]);
            ?>
            <hr>
        </header>
        <main>
            <h2 class="titulo-noticia">titulo</h2>
            <div class="contenedor-imagen">
                <img src=<?php echo FONDO; ?> alt="imagen">
            </div>
            <p class="parrafo">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad architecto modi inventore est voluptates, doloribus officia ipsum minima adipisci quaerat quasi deleniti dolores et atque, obcaecati exercitationem sapiente vitae veniam? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa temporibus saepe modi nam. Doloribus temporibus iusto quasi doloremque tenetur nam quas, possimus quaerat libero perferendis nisi ducimus eaque soluta voluptates.</p>
            <hr>
            <div class="contenedor-editor">
                <div>
                    <img class="editor" src=<?php echo PERFIL; ?> alt="usuario">
                </div>
                <div>
                    <h4>pepito perez</h4>
                    <p>redactor</p>
                </div>
            </div>
            <div>
                <p>dejanos conocer tu opinion.</p>
                <textarea name="" id="" cols="30" rows="10" placeholder="Escribe tu comentario..."></textarea>
                <input type="button" value="comentar">
            </div>
            <hr>
            <div>
                <h3>opiniones</h3>
                <?php require("../../src/components/comentarista.php"); ?>
                <?php require("../../src/components/comentarista.php"); ?>
            </div>
        </main>
        <?php include_once("../../src/components/footer.php"); ?>
    </body>
</html>