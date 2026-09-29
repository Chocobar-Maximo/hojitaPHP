<?php 
  $titulo_pagina = "Novedades y Artículos Musicales - Blog Hojita"; 
  require_once 'includes/header.php'; 
?>
    <main>
    <h2>Blog :D</h2>
    
    <div class="titulo-blog">
        <h3>El Ritmo del Aprendizaje: ¿Por qué estudiar ahora se siente como darle al "Play"?</h3>
    </div>

    <!-- Envolvemos la imagen y el texto en un contenedor flex -->
    <div class="articulo-contenedor">
        <div class="img-blog">
            <img src="img/p-blog.png" alt="Persona utilizando una tablet para navegar por la web">
        </div>
        <div class="contenido-blog">
            <p>
                Hubo un tiempo en que aprender algo nuevo se sentía como una tarea pesada: libros interminables, 
                aulas cerradas y horarios rígidos. Pero las reglas han cambiado de forma drástica en los últimos años. En un mundo que se mueve constantemente al ritmo de los algoritmos de recomendación y las plataformas de streaming en vivo, la educación tradicional ha dejado de ser un examen estructurado para convertirse gradualmente en una playlist personalizada que armamos a nuestra medida.
            </p>
            <p>
                ¿Te has fijado en cómo una buena canción seleccionada en el momento justo puede cambiarte el humor por completo en cuestión de segundos? El aprendizaje moderno persigue exactamente el mismo objetivo: busca un impacto inmediato, una conexión emocional genuina con el contenido y, sobre todo, la libertad absoluta de llevar ese conocimiento contigo a cualquier parte en tu dispositivo móvil. Ya no estamos atados a un espacio físico para adquirir habilidades valiosas.
            </p>
            <p>
                Hoy en día, las aplicaciones de audio digital y las herramientas interactivas demuestran que el consumo de contenido educativo puede ser tan adictivo y fluido como descubrir un nuevo álbum musical los viernes de lanzamientos. Los podcasts, los videotutoriales dinámicos y los cursos interactivos en línea siguen la misma lógica de distribución que tus pistas de audio favoritas en mp3. La clave del éxito radica en la fragmentación de la información en bloques pequeños y digeribles, permitiendo que cada estudiante avance de forma autónoma.
            </p>
            <p>
                En conclusión, la tecnología digital no solo ha transformado la industria del entretenimiento y las plataformas de streaming, sino que también ha rediseñado por completo las metodologías de estudio globales. Al igual que cuando seleccionamos minuciosamente qué géneros musicales van a acompañar nuestra jornada laboral, ahora tenemos el poder de curar nuestra propia formación profesional con un solo clic.
            </p>
        </div>
    </div>

    <!-- Caja de comentario estilo cápsula con validación (Consigna 2) -->
    <div class="seccion-comentarios">
        <form id="form-comentario" action="blog.html" method="POST" onsubmit="validarComentario(event)">
            <label for="comentario">Comentar...</label>
            <textarea id="comentario" name="comment" rows="1" placeholder="Comentar..."></textarea>
            <span id="error-comentario" style="color: #ff6b6b; font-family: 'Jersey 10', sans-serif; display: block; margin-top: 5px;"></span>
        </form>
    </div>

    <!-- Comentario destacado -->
    <div class="comentario-popular">
        <h4>Comentario más popular:</h4>
        <div class="usuario-info">
            <img src="img/juan.png" alt="foto de perfil de Juan Carlos">
            <span class="nombre-usuario">Juan Carlos</span>
        </div>
        <p class="texto-comentario">
            "¡Totalmente de acuerdo! La educación ha pasado de ser un monólogo a ser una experiencia bajo demanda. 
            Me encanta la idea de ver el conocimiento como una playlist donde nosotros somos los curadores de nuestro 
            propio crecimiento. ¿Crees que esta libertad nos hace más curiosos o simplemente más selectivos?"
        </p>
    </div>
</main>
    <hr>
    <?php include 'includes/footer.php'; ?>

    <script>
        function validarComentario(e) {
            const input = document.getElementById('comentario');
            const error = document.getElementById('error-comentario');
            if (input.value.trim() === '') {
                e.preventDefault();
                error.textContent = '⚠️ El comentario no puede estar vacío.';
            } else {
                error.textContent = '';
            }
        }
    </script>
    </body>
</html>