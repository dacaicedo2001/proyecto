<link rel="stylesheet" href=<?php echo NAVEGACION; ?>>
<nav>
    <!-- Iconos -->
    <div class="contenedor-iconos">
        <div class="iconos">
            <img class="logo" src=<?php echo LOGO; ?> alt="icono">
            <i id="menu" class="fa-solid fa-bars menu menu-cerrado"></i>
        </div>
    </div>
    <!-- Lista de itenes -->
    <ul id="lista-items" class="lista-items-cerrada">
        <li><a href=<?php echo PAGINA_PRINCIPAL; ?> class="item-menu">inicio</a></li>
        <li>
            <a>publicaciones <i class="fa-solid fa-angle-down"></i></a>
            <ul class="sub-menu">
                <li><a href=<?php echo PAGINA_PRINCIPAL."#noticias"; ?> class="item-menu">noticias</a></li>
                <li><a href=<?php echo PAGINA_PRINCIPAL."#proyectos"; ?> class="item-menu">proyectos</a></li>
                <li><a href=<?php echo PAGINA_PRINCIPAL."#empleabilidad"; ?> class="item-menu">empleabilidad</a></li>
                <li><a href="#" class="item-menu">expoferias y eventos</a></li>
            </ul>
        </li>
        <li>
            <a>programas <i class="fa-solid fa-angle-down"></i></a>
            <ul class="sub-menu">
                <li><a href="#" class="item-menu">programas para emprendedores</a></li>
                <li><a href="#" class="item-menu">programas de fortalecimiento empresarial</a></li>
                <li><a href="#" class="item-menu">programas de emprendimientos pro</a></li>
                <li><a href="#" class="item-menu">programas de gerencia</a></li>
            </ul>
        </li>
        <li>
            <a>capacitaciones <i class="fa-solid fa-angle-down"></i></a>
            <ul class="sub-menu">
                <li><a href="#" class="item-menu">cursos</a></li>
                <li><a href="#" class="item-menu">entrenamientos</a></li>
                <li><a href="#" class="item-menu">seminarios</a></li>
                <li><a href="#" class="item-menu">diplomados</a></li>
            </ul>
        </li>
        <li>
            <a>nosotros<i class="fa-solid fa-angle-down"></i></a>
            <ul class="sub-menu">
                <li><a href=<?php echo PAGINA_PRINCIPAL."#quienes-somos"; ?> class="item-menu">¿quienes somos?</a></li>
                <li><a href=<?php echo PAGINA_PRINCIPAL."#nuestros-integrantes"; ?> class="item-menu">nuestros integrantes</a></li>
                <li><a href="#" class="item-menu">lineas de credito</a></li>
                <li><a href="#" class="item-menu">informacion estadistica</a></li>
                <li><a href="#" class="item-menu">convenios</a></li>
            </ul>
        </li>
        <li><a href=<?php echo CONTACTO; ?> class="item-menu">contacto</a></li>
    </ul>
    <!-- Botones de sesion -->
    <ul class="inicio">
        <li><a href="#" id="boton-ingresar">ingresar</a></li>
        <li><a href="#" id="boton-registro">registro</a></li>
    </ul>
</nav>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/proyecto/frontend/src/templates/popup_ingreso.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/proyecto/frontend/src/templates/popup_registro.php"); ?>
<script src=<?php echo MENU; ?>></script>
<script src=<?php echo MENUBAR; ?>></script>
<script src=<?php echo ABRIR_POPUP; ?>></script>