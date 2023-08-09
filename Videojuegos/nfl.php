
        
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF=-8">
  <META name="viewport" content="width=device-width, initial-scale = 1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Madden NFL 2004</title>
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link href="../Css/juego.css" rel="stylesheet" />
  <link href="../Header/Header.css" rel="stylesheet" />
  <link href="../Footer/estilos.css" rel="stylesheet" />
  
  <link href="button.css" rel="stylesheet" />
</head>

<header>
  <?php require_once '../Header/Header.php'; ?>
</header>

<body>

  <!-- Page Content-->
  <div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
      <div class="col-lg-7"><iframe width="700" height="400" src="https://www.youtube.com/embed/dZiqxn2RB9U"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe></div>
      <div class="col-lg-5">
        <h1 class="text-white">Madden NFL 2004</h1>
        <p class="text-white">Madden NFL 2004 es la 15ª entrega de la serie de videojuegos de fútbol americano Madden
          NFL. El ex mariscal de campo de los Atlanta Falcons, Michael Vick, está en la portada.</p>
        <p class="text-white">Las nuevas características de Madden 2004 incluyen una nueva opción de modo propietario
          que permite al jugador controlar una franquicia. En este modo, el jugador asume todas las responsabilidades
          relacionadas con la propiedad de un equipo de fútbol profesional, desde la regulación de los precios de los
          hot dogs hasta la reubicación del equipo, la contratación y el despido del personal técnico. Otra
          característica nueva es la posibilidad de editar un equipo histórico. Además, un nuevo modo de campo de
          entrenamiento, que ocurre antes de la pretemporada, puede ayudar al jugador a progresar más rápido al
          someterlo a ejercicios de mini-campo.</p>

      </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-dark my-5 py-4">
      <div class="card-body">
        <p class="text-white m-0 text-justify">Este juego de Madden es mejor conocido por su versión del entonces
          mariscal de campo de los Falcons, Michael Vick, un personaje posiblemente dominado y aclamado como el mejor
          jugador de Madden de todos los tiempos debido a su índice de velocidad de 95. En 2016, el desarrollador Clint
          Oldenburg le dijo a Gameradar que durante los próximos años se agregaron funciones al juego específicamente
          para detener a Vick. La versión 04 de Vick se ha utilizado en Madden NFL 25 y Madden NFL 15 en el modo
          Ultimate Team como 99 en general con 99 o 100 de velocidad.</p>
      </div>
    </div>
    <!-- Content Row-->
    <div class="row m-6">
            <div class="col-lg-4 mb-3">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage1">
                    <img class="w-100 mb-3 rounded" src="../Imagenes/Games/nfl1.jpeg" style="height: 400px;">
                </a>
            </div>
            <div class="col-lg-4 mb-3">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage2">
                    <img class="w-100 mb-3 rounded" src="../Imagenes/Games/nfl2.jpeg" style="height: 400px;">
                </a>
            </div>
            <div class="col-lg-4 mb-3">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage3">
                    <img class="w-100 mb-3 rounded" src="../Imagenes/Games/nfl3.jpg" style="height: 400px;">
                </a>
            </div>
        </div>

        <!-- Modal 1 -->
        <div tabindex="-1" aria-labelledby="modalImage1" aria-hidden="true" class="modal fade" id="modalImage1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="../Imagenes/Games/nfl1.jpeg">
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div tabindex="-1" aria-labelledby="modalImage2" aria-hidden="true" class="modal fade" id="modalImage2">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="../Imagenes/Games/nfl2.jpeg">
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div tabindex="-1" aria-labelledby="modalImage3" aria-hidden="true" class="modal fade" id="modalImage3">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="../Imagenes/Games/nfl3.jpg">
                </div>
            </div>
        </div>

    <div>
      <a href="../Videojuegos/videojuegos.php" type="button" class="btn">Volver</a>
    </div>
  </div>


  <!-- Footer-->
  <footer>
    <?php require_once '../Footer/footer.html'; ?>
  </footer>
</body>

</html>








