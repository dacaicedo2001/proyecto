<link rel="stylesheet" href=<?php echo POPUP; ?>>
<div class="popup" id="popup_ingreso">
    <i class="fa-solid fa-xmark menu menu-abierto cerrar" id="cerrar"></i>
    <h2>inicio de sesión</h2>
    <form>
        <div class="campo">
            <label for="usuarioIngreso">correo:</label>
            <input type="email" id="usuarioIngreso" placeholder="Ingrese su correo" required>
        </div>
        <div class="campo">
            <label for="claveIngreso">contraseña:</label>
            <input type="password" id="claveIngreso" placeholder="Ingrese su contraseña" required>
        </div>
        <a href="#">¿olvidó su contraseña?</a>
        <input type="submit" value="iniciar sesión">
    </form>
</div>