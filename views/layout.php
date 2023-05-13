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
        <div class="contenedor_navegacion" id="navegacion">
            <div class="texto_navegacion">
                <a href="/contacto">Contact me</a>
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

    <main>
        <?php echo $contenido; ?>
    </main>

    <footer>

    </footer>

    <script src="build/js/app.js"></script>
</body>
</html>