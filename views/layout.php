<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="build/css/app.css">
    <title>NombrePagina</title>
</head>
<body>
    <header id="inicio">
        <div class="contenedor_navegacion lado" id="navegacion">
            <div class="texto_navegacion">
                <a href="/contacto">Contact me</a>
            </div>

            <div class="barras-nav" id="barras">
                <img src="build/img/icono-hamburguesa.svg" alt="Abrir Menu" class="hamburguesa">
            </div>

            <div class="navegacion">
                <?php if($inicio): ?>
                    <a href="/">Main</a>
                <?php endif; ?>
                <a href="/#acercaDeMi">About me</a>
                <a href="https://github.com/AlejandroEs04">GitHub</a>
                <a href="/portafolio">Portfolio</a>
            </div>
        </div>
    </header>

    <div class="contenedor-navegacion-completa">
        <div class="navegacion-completa" id="navegacion-contenedor">
            <h3>Menu</h3>
            <p id="hide">Cerrar</p>
            <?php if($inicio): ?>
                <a href="/">Main</a>
            <?php endif; ?>
            <a href="/#acercaDeMi">About me</a>
            <a href="https://github.com/AlejandroEs04">GitHub</a>
            <a href="/portafolio">Portfolio</a>

            <div class="texto_navegacion nav-com-btn">
                <a href="/contacto">Contact me</a>
            </div>

            <p class="parrafo">Tambien puedes descargar mi Curriculum Vitae</p>
        </div>
    </div>

    <main>
        <?php echo $contenido; ?>
    </main>

    <footer>

    </footer>

    <script src="build/js/app.js"></script>
</body>
</html>