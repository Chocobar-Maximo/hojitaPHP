<?php 
  $titulo_pagina = "Trabaja con Nosotros - Enviar CV"; 
  require_once 'includes/header.php'; 
?>
    <main class="contenedor-cv">
        <h2 class="titulo-unetenos">Únetenos</h2>

        <form action="CV.html" method="POST" class="formulario-cv-grid" novalidate>
            
            <!-- COLUMNA IZQUIERDA (Contacto y Habilidades) -->
            <div class="columna-izquierda">
                <div class="avatar-cv">
                    <img src="img/usuario.png" alt="Avatar de candidato">
                </div>

                <div class="grupo-campo">
                    <input type="email" id="correo" name="correo" placeholder="Correo Electrónico..." required>
                </div>

                <div class="grupo-campo">
                    <input type="tel" id="tel" name="telefono" placeholder="Número de teléfono..." required>
                </div>

                <div class="grupo-campo">
                    <input type="text" id="dir" name="direccion" placeholder="Dirección">
                </div>

                <hr class="divisor-cv">

                <div class="grupo-campo">
                    <label for="aptitudes">Aptitudes...</label>
                    <textarea id="aptitudes" name="apt" rows="4"></textarea>
                </div>

                <hr class="divisor-cv">

                <div class="grupo-campo">
                    <label for="idiomas">Idiomas...</label>
                    <textarea id="idiomas" name="idioma" rows="3"></textarea>
                </div>

                <hr class="divisor-cv">

                <div class="grupo-campo">
                    <label for="afil">Afiliaciones...</label>
                    <textarea id="afil" name="afiliaciones" rows="3"></textarea>
                </div>
            </div>

            <!-- COLUMNA DERECHA (Información Principal) -->
            <div class="columna-derecha">
                
                <div class="grupo-campo">
                    <label for="name" class="label-nombre">Nombre y Apellido</label>
                    <input type="text" id="name" name="name" placeholder="Tu nombre completo..." required class="input-nombre">
                </div>

                <div class="grupo-campo">
                    <label for="perfil">Perfil</label>
                    <textarea id="perfil" name="perfil" rows="4"></textarea>
                </div>

                <div class="grupo-campo">
                    <label for="exp">Experiencia Laboral</label>
                    <textarea id="exp" name="exp" rows="5"></textarea>
                </div>

                <div class="grupo-campo">
                    <label for="form">Formación Académica</label>
                    <textarea id="form" name="form_academica" rows="4"></textarea>
                </div>

                <div class="grupo-campo">
                    <label for="expectativas">Expectativas</label>
                    <textarea id="expectativas" name="expectativas" rows="4"></textarea>
                </div>

                <button type="submit" class="btn-enviar-cv">Enviar Postulación</button>
            </div>

        </form>

        <!-- Información sobre el proceso de selección -->
        <div class="Proceso-pautas">
            <h3>Proceso de selección y pautas comunitarias</h3>
            <p>
                Una vez que envíes tu currículum a través de este canal digital corporativo, nuestro departamento de recursos humanos revisará detalladamente tus antecedentes académicos, tus habilidades en edición o producción de audio digital y tu experiencia previa en proyectos relacionados con la industria del streaming multimedia.
            </p>
            <p>
                El proceso de evaluación consta de tres etapas consecutivas: la revisión inicial del perfil cargado en este panel, una entrevista técnica virtual y una instancia práctica de simulación de tareas.
            </p>
        </div>
    </main>

    <hr>
    
    <?php include 'includes/footer.php'; ?>

</body>
</html>