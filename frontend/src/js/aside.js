let flecha = document.getElementById('despliegue');
let aside = document.getElementById('aside');

flecha.addEventListener('click', function(){

    let clases = flecha.getAttribute("class");
    let contiene = clases == "fa-solid fa-angle-left" ? abrir() : cerrar();
    flecha.setAttribute("class", contiene);
});

function abrir() {
    aside.classList.add('open-aside');
    return "fa-solid fa-angle-right";
}

function cerrar() {
    aside.classList.remove('open-aside');
    return "fa-solid fa-angle-left";
}
