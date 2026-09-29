<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Título dinámico para cumplir con la parte C de la consigna -->
    <title><?php echo isset($titulo_pagina) ? $titulo_pagina : "Hojita - Música Gratis"; ?></title>
    <meta name="description" content="Plataforma de música online">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/script.js" defer></script>
</head>
<body>

<header class="header-fijo">
    <div class="barra-superior">
        <div class="logo-contenedor">
            <a href="index.php">
                <h1>Hojita <img src="img/hoja 1.svg" alt="Logo de la Hojita" width="45" height="45"></h1>
            </a>
        </div>
        <div class="herramientas-header">
            <div class="caja-reloj">
                ⏰ <span id="reloj-tiempo-real">00:00:00</span>
            </div>
            <button id="btn-modo-oscuro" type="button" class="btn-tema">Modo Claro ☀️</button>
        </div>
    </div>

    <!-- Fila inferior con el Nav integrado -->
    <div class="barra-inferior">
        <?php include 'nav.php'; ?>

        <div class="buscar-cancion">
            <form action="index.php" method="GET">
                <label for="buscar">Buscar</label>
                <input type="text" id="buscar" name="buscar" placeholder="Buscar canción...">
                <button type="submit" aria-label="buscar"><img src="img/lupa.png" alt="buscar" height="15" width="15"></button> 
            </form>
        </div>
    </div>
</header>