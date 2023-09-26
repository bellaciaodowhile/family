<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Música en Familia | En Memoria de Mi</title>
    <link rel="shortcut icon" href="<?php echo BASE_URL;?>Assets/img/log.png" type="image/png" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>Assets/css/home.css">
    <meta name="description" content="Si eres adorador y adventista del séptimo, cantas o ejecutas algún instrumento musical entonces regístrate en el evento más sonado del año, ¡Música en familia!"/>
    <meta name="keywords" content="adventista, musica, musica en familia, familia, adorador, adventista del septimo día, septimo dia, musicos en ciudad bolivar, bolivar, ciudad bolivar, musica en familia ciudad bolivar, musica en familia"/>
    <meta name="author" content="Música en Familia | En memoria de mi" />
    <meta name="robots" content="index"/>
    <meta name="robots" content="follow"/>
    <meta property="og:title" content="En Memoria De Mi" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://musicaenfamilia2023.com/registro" />
    <meta property="og:image" content="https://musicaenfamilia2023.com/Assets/img/log.png" />
    <meta property="og:description" content="Si eres adorador y adventista del séptimo, cantas o ejecutas algún instrumento musical entonces regístrate en el evento más sonado del año, ¡Música en familia!" />
    <link rel="shortcut icon" href="https://musicaenfamilia2023.com/Assets/img/log.png" type="image/png" />
</head>

<body>
    <div class="container">
         <div class="split left">
            <h1>Música en Familia</h1>
            <a href="#" onclick="alert('Pronto estará disponible.')" class="button">¿Qué es?</a>
        </div>
        <div class="split right">
            <h1>En Memoria de Mi</h1>
            <a href="<?php echo BASE_URL;?>registro/" class="button">¡Regístrate!</a>
        </div>
    </div>
    <script>
        const left = document.querySelector(".left");
        const right = document.querySelector(".right");
        const container = document.querySelector(".container");

        left.addEventListener("mouseenter", () => {
            container.classList.add("hover-left");
        });

        left.addEventListener("mouseleave", () => {
            container.classList.remove("hover-left");
        });

        right.addEventListener("mouseenter", () => {
            container.classList.add("hover-right");
        });

        right.addEventListener("mouseleave", () => {
            container.classList.remove("hover-right");
        });
    </script>
</body>

</html>