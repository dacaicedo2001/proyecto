let popupIngreso = document.getElementById('popup_ingreso');
let popupRegistro = document.getElementById('popup_registro');

document.getElementById('boton-ingresar').addEventListener('click', function(){
    mostrar(popupIngreso, popupRegistro);
});

document.getElementById('boton-registro').addEventListener('click', function(){
    mostrar(popupRegistro, popupIngreso);
});

document.getElementById('cerrar').addEventListener('click', function(){
    popupIngreso.classList.remove('visible');
});

document.getElementById('cerrar2').addEventListener('click', function(){
    popupRegistro.classList.remove('visible');
});

function mostrar(popupActual, popupEscondido) {
    if(!popupActual.classList.contains('visible') && !popupEscondido.classList.contains('visible')){
        popupActual.classList.add('visible');
    }
}
