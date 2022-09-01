
/* Funcion encargada de abrir el menu y cambiar el estado de la barra e iconos */

let menu = document.getElementById("menu");
let lista = document.getElementById("lista-items");

menu.addEventListener("click", function(){

    let clase_lista = lista.getAttribute("class");
    let clase_menu = menu.getAttribute("class");
    let estado_lista = clase_lista === "lista-items-cerrada" ? "lista-items-abierta" : "lista-items-cerrada";
    let estado_menu = clase_menu === "fa-solid fa-bars menu menu-cerrado" ? "fa-solid fa-xmark menu menu-abierto" : "fa-solid fa-bars menu menu-cerrado";
    lista.setAttribute("class", estado_lista);
    menu.setAttribute("class", estado_menu);
});

