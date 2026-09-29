<?php 
  $titulo_pagina = "Crear Cuenta - Registro de Usuario"; 
  require_once 'includes/header.php'; 
?>
<main class="contenedor-registro">
        <div class="tarjeta-registro">
            <h2>Registrarse en la plataforma</h2>
            
            <form id="form-registro" action="crear-cuenta" method="POST" class="formulario-registro" novalidate>
                <div class="grupo-campo">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com"/>
                    <span id="error-correo" class="mensaje-error"></span>
                </div>
                
                <div class="grupo-campo">
                    <label for="pass">Contraseña</label>
                    <input type="password" id="pass" name="pass" placeholder="contraseña"/>
                    <span id="error-pass" class="mensaje-error"></span>
                </div>
                
                <div class="grupo-campo">
                    <label for="pass-rep">Repite la Contraseña</label>
                    <input type="password" id="pass-rep" name="pass_repeat" placeholder="repetir contraseña"/>
                    <span id="error-pass-rep" class="mensaje-error"></span>
                </div>
            
                <div class="grupo-campo">
                    <label for="name">¿Cómo te llamarás en el sitio?</label>
                    <input type="text" id="name" name="username" placeholder="Nombre de Usuario"/>
                    <span id="error-name" class="mensaje-error"></span>
                </div>
                
                <div class="grupo-campo">
                    <label for="fecha">Fecha de nacimiento</label>
                    <input type="date" id="fecha" name="cumpleaños" min="1920-01-01" max="2020-01-01"/>
                    <span id="error-fecha" class="mensaje-error"></span>
                </div>

                <div class="grupo-genero">
                    <p>Por favor, selecciona tu género:</p>
                    <div class="opciones-genero">
                        <label><input type="radio" id="genero-m" name="genero" value="masculino"> Masculino</label>
                        <label><input type="radio" id="genero-f" name="genero" value="femenino"> Femenino</label>
                        <label><input type="radio" id="genero-o" name="genero" value="otro"> Otro</label>
                    </div>
                    <span id="error-genero" class="mensaje-error"></span>
                </div>
                
                <div class="acciones-formulario">
                    <button type="reset" class="btn-reset">Resetear</button>
                    <button type="submit" class="btn-submit">Continuar</button>
                </div>
            </form>

            <div id="resumen-registro" class="caja-resumen" style="display:none;"></div>
        </div>

        <div class="beneficios-registro">
            <h3>Beneficios exclusivos de tu cuenta de música digital</h3>
            <p>
                Al completar tu registro en nuestro sitio web, accedes de forma inmediata a un ecosistema diseñado exclusivamente para los apasionados del sonido y las tendencias musicales actuales.
            </p>
            <p>
                Una de las ventajas principales de formar parte de nuestra comunidad activa es la sincronización inmediata de tus datos de navegación entre dispositivos.
            </p>
        </div>
    </main>

    <hr>
    <?php include 'includes/footer.php'; ?>
</body>
</html>