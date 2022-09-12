<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/contacto.css">
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
            <p class="introduccion">Puede contactarse con nosotros para más información, preguntar y asesorarce sobre algún tema de su interés o despejar la inquietud que necesite.</p>
            <div class="datos">
                <p>horarios de atención: 9:00 am - 6:00 pm</p>
                <p>días: de lunes a viernes</p>
                <p>dirección: cra 1 calle 1</p>
                <p>correo: ejemplo@ejemplo.com</p>
                <p>telefono: 123</p>
                <p>ciudad: buenaventura</p>
            </div>
            <form class="formulario">
                <h3>déjanos saber quién eres</h3>
                <div class="campo-dato">
                    <label for="nombre">nombres:</label>
                    <input type="text" id="nombre" placeholder="Ingrese sus nombres" required>
                </div>
                <div class="campo-dato">
                    <label for="correo">correo:</label>
                    <input type="email" id="correo" placeholder="Ingrese su correo" required>
                </div>
                <div class="campo-dato">
                    <label for="comentario">dejanos tu comentario:</label>
                    <textarea id="comentario" rows="10" placeholder="¿En qué podemos ayudarte?"></textarea>
                </div>
                <input class="boton" type="submit" value="enviar">
            </form>
            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.629793148545!2d-77.08431738550028!3d3.889263841541728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3723f52bf45201%3A0x302a7d4451d44164!2sCamara%20de%20Comercio%20de%20Buenaventura!5e0!3m2!1ses!2sco!4v1662997942738!5m2!1ses!2sco" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </main>
        <?php include_once("../../src/components/footer.php"); ?>
    </body>
</html>