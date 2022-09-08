<link rel="stylesheet" href=<?php echo ARTICULO; ?>>
<?php
    function ruta($url){
        $imagen = FONDO;
        echo(
            "<article class='articulo'>
                <div>
                    <img src=$imagen alt='noticias'>
                </div>
                <h3>titulo</h3>
                <hr>
                <p>17 de junio de 2022</p>
                <a href=$url>leer mas</a>
            </article>"
        );
    }
?>
