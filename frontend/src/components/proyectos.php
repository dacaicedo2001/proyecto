<link rel="stylesheet" href=<?php echo PROYECTOS; ?>>
<section class="proyectos">
    <?php
        require_once("../src/components/titulo.php");
        titulo("proyectos");
    ?>
    <div class="contenedor-proyectos">
        <aside class="lista-proyectos">
            <input class="buscador" type="search" name="busqueda" id="busqueda" placeholder="Buscar">
            <ul>
                <li><a href="#">proyecto 1</a></li>
                <li><a href="#">proyecto 2</a></li>
                <li><a href="#">proyecto 3</a></li>
                <li><a href="#">proyecto 4</a></li>
                <li><a href="#">proyecto 5</a></li>
                <li><a href="#">proyecto 6</a></li>
                <li><a href="#">proyecto 7</a></li>
                <li><a href="#">proyecto 8</a></li>
                <li><a href="#">proyecto 9</a></li>
                <li><a href="#">proyecto 10</a></li>
            </ul>
            <a href="#">ver todos los proyectos</a>
        </aside>
        <hr>
        <div class="vista">
            <h2>previsualización</h2>
            <p>Puede seleccionar un proyecto y mirar los aspectos mas importantes en este apartado.</p>
        </div>
    </div>
</section>