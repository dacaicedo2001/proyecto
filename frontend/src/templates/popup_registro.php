<link rel="stylesheet" href=<?php echo POPUP; ?>>
<div class="popup largo" id="popup_registro">
    <i class="fa-solid fa-xmark menu menu-abierto cerrar" id="cerrar2"></i>
    <h2>registro de usuario</h2>
    <form>
        <div class="campo">
            <label for="nombre">nombres:</label>
            <input type="text" id="nombre" placeholder="Ingrese sus nombres" required>
        </div>
        <div class="campo">
            <label for="apellido">apellidos:</label>
            <input type="text" id="apellido" placeholder="Ingrese sus apellidos" required>
        </div>
        <div class="campo">
            <label for="telefono">teléfono:</label>
            <input type="number" id="telefono" placeholder="Ingrese su telefono" required>
        </div>
        <div class="campo">
            <label for="usuarioRegistro">correo:</label>
            <input type="email" id="usuarioRegistro" placeholder="Ingrese su correo" required>
        </div>
        <div class="campo">
            <label for="clave">contraseña:</label>
            <input type="password" id="claveRegistro" placeholder="Crea una contraseña" required>
        </div>
        <input type="submit" value="registrarse">
    </form>
</div>