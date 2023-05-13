const contenedor = document.getElementById('contenedor');
const navegacion = document.getElementById('navegacion');

var navHeight = navegacion.clientHeight;
var windowHeight = window.innerHeight;

var height = windowHeight - navHeight;

contenedor.style.height = height + 'px';
