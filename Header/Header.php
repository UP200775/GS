<header>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="Header.css">
  <div class="header-logo">
    <a href="../Home/Home.php"><img src="../Imagenes/logo.png" alt="Logo de la empresa"></a>

  </div>
  <nav>
    <ul class="header-menu">
      <li><a href="../Artículos/HomeArticulo.php">Artículos</a></li>
      <li><a href="../Videojuegos/videojuegos.php">Videojuegos</a></li>
      <li><a href="../Staff/Staff.php">Staff</a></li>
      <li><a href="../Comunicate/Comunicate.php">Comunícate</a></li>
    </ul>
  </nav>
  <div class="header-mobile-menu">
    <div class="header-menu-toggle">
      <input type="checkbox">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul class="header-menu">
      <li><a href="../Artículos/HomeArticulo.php">Artículos</a></li>
      <li><a href="../Videojuegos/videojuegos.php">Videojuegos</a></li>
      <li><a href="../Staff/Staff.php">Staff</a></li>
      <li><a href="../Comunicate/Comunicate.php">Comunícate</a></li>
    </ul>
  </div>
  <div class="header-cta-buttons">
    <?php
session_start();
   if (!empty($_SESSION['username1'])){
        //si inicio sesion aqui ponen su pagina web  eliminan la coneccion porq se encuetra arriba jajaja
        //pegan su pagina
        ?>
            <a >Username:<?php echo $_SESSION['username1']  ?></a>
    <a href="../Inicio y Registro de sesion/funciones/cerrar.php" >Cerrar Sesión</a>
        <?php

    }else{
        //No se inicio sesion
        ?>
  <a href="../Inicio y Registro de sesion/formulario.php" >Inicia Sesión</a>
<a href="../Inicio y Registro de sesion/registro.php" >Registrate</a>
        <?php


    }
?>
  </div>
</header>


