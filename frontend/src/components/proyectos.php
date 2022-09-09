<link rel="stylesheet" href=<?php echo PROYECTOS; ?>>
<section class="proyectos" id="proyectos">
    <?php
        require_once("../src/components/titulo.php");
        titulo("proyectos");
    ?>
    <div class="contenedor-proyectos">
        <aside class="lista-proyectos">
            <?php require_once("../src/components/buscador.php"); ?>
            <ul>
                <?php
                    $pagina = LEER_PROYECTO;
                    for($i = 1; $i <= 10; $i++) echo "<li><a href=$pagina>proyecto $i</a></li>";
                ?>
            </ul>
            <a href=<?php echo PAGINA_PROYECTOS; ?>>ver todos los proyectos</a>
        </aside>
        <hr>
        <div class="vista">
            <h2>previsualización</h2>
            <p>Puede seleccionar un proyecto y mirar los aspectos mas importantes en este apartado.</p>
        </div>
    </div>
</section>