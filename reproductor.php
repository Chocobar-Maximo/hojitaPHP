<?php 
  $titulo_pagina = "Reproductor Web de Audio Online - Hojita"; 
  require_once 'includes/header.php'; 
?>
    <main class="contenedor-vista-reproductor">
        <h2>Reproductor</h2>

        <div class="buscador-seccion">
            <form action="reproductor.html" method="GET">
                <input type="text" name="buscar" placeholder="Buscar canción...">
                <button type="submit" aria-label="buscar"><img src="img/lupa.png" alt="buscar" width="12" height="12"></button> 
            </form>
        </div>

        <div class="card-reproductor-interactivo">
            <div class="reproductor-cuerpo">
                <div class="columna-info-cancion">
                    <div class="portada-cancion">
                        <img src="https://i.ytimg.com/vi/vDKvr_tjjLc/maxresdefault.jpg" alt="Portada de la canción Miles de Mother Mother">
                    </div>

                    <div class="meta-cancion">
                        <p><strong>Canción:</strong> Miles</p>
                        <p><strong>Álbum:</strong> O My Heart</p>
                        <p><strong>Artista/Banda:</strong> Mother Mother</p>
                    </div>
                </div>

                <div class="columna-letra-cancion">
                    <h3>Letra</h3>
                    <div class="caja-scroll-letra">
                        <p>Miles, and miles, and miles.<br>
                        Before we reach the sand.<br>
                        Cacti and cacti for miles...<br>
                        miles of dry land, dry land.</p>

                        <p>We gonna make it, ohh we gonna make it.<br>
                        We gonna take it, ohh we gonna take it easy.<br>
                        Once we feel the sea breeze.</p>

                        <p>My-my-my-my-my lover, my maker, my breaker.<br>
                        Take me by the hand.<br>
                        We could go walking for miles...<br>
                        once we reach the sand, the sand.</p>

                        <p>We gonna make it, ohh we gonna make it.<br>
                        We gonna take it, ohh we gonna take it easy.<br>
                        Once we leave the city.</p>

                        <p>We gonna make it, ohh we gonna make it.<br>
                        We gonna take it, ohh we gonna take it.<br>
                        We gonna make it, yeah we gonna make it easy... easy...</p>
                    </div>
                </div>
            </div>

            <div class="reproductor-barra-inferior">
                <div class="pista-actual">
                    <img src="https://i.ytimg.com/vi/vDKvr_tjjLc/maxresdefault.jpg" alt="Miniatura de la portada">
                    <span>Miles - Mother Mother</span>
                </div>

                <div class="controles-audio">
                    <button type="button" class="btn-control" aria-label="Anterior">⏮</button>
                    <button type="button" class="btn-control btn-play" aria-label="Reproducir / Pausar">▶</button>
                    <button type="button" class="btn-control" aria-label="Siguiente">⏭</button>
                </div>
            </div>
        </div>

        <div class="bloque-analisis-reproductor">
            <h3>Análisis de la obra y funciones del reproductor digital</h3>
            <p>
                El tema musical seleccionado forma parte de uno de los trabajos discográficos independientes más aclamados por la crítica especializada del rock alternativo internacional. Con una base instrumental rítmica bien definida y arreglos de voces corales complejos, la composición logra sumergir al oyente en un viaje sonoro único a través de paisajes áridos imaginarios.
            </p>
            <p>
                Nuestra plataforma de software te permite interactuar con la pista de audio de manera integral. Utilizando la barra de herramientas inferior, podés ecualizar las frecuencias graves para adaptarlas a tus auriculares o activar la reproducción en bucle continuo.
            </p>
        </div>
    </main>

    <hr>

    <?php include 'includes/footer.php'; ?>
</body>
</html>