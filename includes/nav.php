<?php $pagina_actual = basename($_SERVER['PHP_SELF']); ?>

<nav class="navegacion" id="menu-navegacion">
    <a href="menu.php" class="<?php echo ($pagina_actual == 'menu.php') ? 'active' : ''; ?>"><h2>Menú</h2></a>
    <a href="cuentas.php" class="<?php echo ($pagina_actual == 'cuentas.php') ? 'active' : ''; ?>">Cuenta <img src="img/usuario.png" alt="" height="25" width="25"></a>
    <a href="detector.php" class="<?php echo ($pagina_actual == 'detector.php') ? 'active' : ''; ?>">Detector <img src="img/detector.png" alt="" height="25" width="25"></a>
    <a href="descargar_musica.php" class="<?php echo ($pagina_actual == 'descargar_musica.php') ? 'active' : ''; ?>">Descargar <img src="img/descargar.png" alt="" height="25" width="25"></a>
    <a href="noticias.php" class="<?php echo ($pagina_actual == 'noticias.php') ? 'active' : ''; ?>">Noticias <img src="img/noticias.png" alt="" height="25" width="25"></a>
    <a href="reproductor.php" class="<?php echo ($pagina_actual == 'reproductor.php') ? 'active' : ''; ?>">Reproductor <img src="img/repro.png" alt="" height="25" width="25"></a>
    <a href="blog.php" class="<?php echo ($pagina_actual == 'blog.php') ? 'active' : ''; ?>">Blog <img src="img/blog.png" alt="" height="25" width="25"></a>
    <a href="curso.php" class="<?php echo ($pagina_actual == 'curso.php') ? 'active' : ''; ?>">Cursos <img src="img/curso.png" alt="" height="25" width="25"></a>
    <a href="CV.php" class="<?php echo ($pagina_actual == 'CV.php') ? 'active' : ''; ?>">CV <img src="img/CV.png" alt="" height="25" width="25"></a>
    <a href="sobre_nosotros.php" class="<?php echo ($pagina_actual == 'sobre_nosotros.php') ? 'active' : ''; ?>">Sobre Nosotros <img src="img/nosotros.png" alt="" height="25" width="25"></a>
    <a href="ayuda.php" class="<?php echo ($pagina_actual == 'ayuda.php') ? 'active' : ''; ?>">Ayuda <img src="img/ayuda.png" alt="" height="25" width="25"></a>
</nav>