
let items = document.querySelectorAll('.item-menu');
let menubar = document.getElementById("menu");
let listaDesplegable = document.getElementById('lista-items');

for (const enlace of items) {
    enlace.addEventListener('click', function(){
        listaDesplegable.setAttribute("class", "lista-items-cerrada");
        menubar.setAttribute("class", "fa-solid fa-bars menu menu-cerrado");
    });
}
