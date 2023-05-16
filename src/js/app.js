const contenedor = document.getElementById('contenedor');
const navegacion = document.getElementById('navegacion');
const contenedorNav = document.getElementById('navegacion-contenedor');
const barras = document.getElementById('barras');
const barrasHide = document.getElementById('hide');
const main = document.querySelector('main');
const header = document.querySelector('header');

var navHeight = navegacion.clientHeight;
var windowHeight = window.innerHeight;

var height = windowHeight - navHeight;

barras.addEventListener('click', mostrarNav);
barrasHide.addEventListener('click', eliminarNav);

contenedorSize();

navegacionConteneroSize();

function contenedorSize() {
    contenedor.style.height = height + 'px';
}

function navegacionConteneroSize() {
    contenedorNav.style.height = windowHeight + 'px';
    contenedorNav.style.marginTop = "-" + navHeight + 'px';
}

function mostrarNav() {
    contenedorNav.classList.add('mostrar');

    main.addEventListener('click', eliminarNav);
}

function eliminarNav() {
    contenedorNav.classList.remove('mostrar');
}




