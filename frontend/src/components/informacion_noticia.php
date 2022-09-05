<link rel="stylesheet" href=<?php echo INFORMACION_NOTICIA; ?>>
<?php
    function informacion(array $arreglo) {
        $lista = "<ul class='contenedor-informacion'>";
        
        foreach($arreglo as $clave => $valor) {
            $lista .= "
                <li>
                    <i class='$valor'></i>
                    <span>$clave</span>
                </li>
            ";
        }

        $lista .= "</ul>";
        echo($lista);
    }
?>
