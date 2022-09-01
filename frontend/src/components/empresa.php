<?php
    function empresa($url, $nombre, $imagen) {
        echo(
            "<li>
                <a href=$url>
                    <img src=$imagen alt='entidad'>
                    $nombre
                </a>
            </li>"
        );
    }
?>