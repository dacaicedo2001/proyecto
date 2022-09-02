<link rel="stylesheet" href=<?php echo ASIDE; ?>>
<aside id="aside">
    <i class="fa-solid fa-angle-left" id="despliegue"></i>
    <div class="contenedor-aside">
        <h3 class="titulo-aside">filtra tu busqueda</h3>
        <div class="filtro">
            <h3>buscar por fecha</h3>
            <input type="date" class="opcion">
            <button>buscar</button>
        </div>
        <hr>
        <div class="filtro">
            <h3>buscar por empresa</h3>
            <select class="opcion">
                <option value="seleccionar">seleccionar</option>
                <option value="confenalco">confenalco</option>
                <option value="camaraComercio">camara de comercio</option>
                <option value="univalle">Universidad del valle</option>
            </select>
            <button>buscar</button>
        </div>
    </div>
    <!-- <i class="fa-solid fa-angle-right"></i> -->
</aside>
<script src=<?php echo FILTRO; ?>></script>