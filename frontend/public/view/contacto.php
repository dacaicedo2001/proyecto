<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/global.css">
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
                titulo("contacto");
            ?>
            <hr>
        </header>
        <main>
            <p>Puede contactarse con nosotros para más información, preguntar y asesorarce sobre algún tema de su interés o despejar la inquietud que necesite.</p>
            <div class="datos">
                <p>horarios de atención: 9:00 am a 6:00 pm</p>
                <p>días: de lunes a viernes</p>
                <p>dirección: cra 1 calle 1</p>
                <p>correo: ejemplo@ejemplo.com</p>
                <p>telefono: 123</p>
                <p>ciudad: buenaventura</p>
            </div>
            <form>
                <h3>déjanos saber quién eres</h3>
                <div>
                    <label for="nombre">nombres:</label>
                    <input type="text" id="nombre" placeholder="Ingrese sus nombres" required>
                </div>
                <div>
                    <label for="correo">correo:</label>
                    <input type="email" id="correo" placeholder="Ingrese su correo" required>
                </div>
                <div>
                    <label for="comentario">dejanos tu comentario:</label>
                    <textarea id="comentario" rows="10" placeholder="¿En qué podemos ayudarte?"></textarea>
                </div>
                <input type="submit" value="enviar">
            </form>
        </main>
        <?php include_once("../../src/components/footer.php"); ?>
    </body>
</html>