<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF=-8">
    <META name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Red Dead Redemption</title>
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
            <div class="col-lg-7"><iframe width="700" height="400" src="https://www.youtube.com/embed/-8MN89fIaJ8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div class="col-lg-5">
                <h1 class="text-white">Red Dead Redemption </h1>
                <h3 class="text-white">Descripcion</h3>
                <p class="text-white">Red Dead Redemption es un videojuego no lineal de acción-aventura wéstern
                    desarrollado por Rockstar San Diego. El videojuego fue anunciado oficialmente el 4 de febrero de
                    2009, y se lanzó el 18 de mayo de 2010 en Norteamérica y el 21 de mayo en Europa y Australia para
                    Xbox 360 y PlayStation 3. Es considerado el sucesor espiritual de Red Dead Revolver, lanzado en
                    2004.</p>
            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-dark my-5 py-4">
            <div class="card-body ">
                <p class="text-white m-0 text-justify">
                <h3>Sinposis</h3>
                <p class="text-white">Cuando agentes federales amenazan a su familia, el exforajido John Marston se ve
                    obligado a ir tras la banda de criminales que en su día llamó amigos. Vive los acontecimientos que
                    prosiguen al exitoso juego de 2018, Red Dead Redemption 2, en la aclamada historia de Marston, una
                    lucha por enterrar su sangriento pasado víctima a víctima.
                </p>
            </div>
            <div class="card-body">
                <p class="text-white m-0 text-justify">
                <h3>Jugabilidad</h3>
                <p class="text-white">Red Dead Redemption ofrece al jugador un amplio entorno de mundo abierto que el
                    jugador puede explorar. El jugador controla a John Marston, que puede interactuar con todo el
                    entorno, desde hablar con la población hasta cazar y huir de los animales salvajes. La principal
                    forma de desplazarse por el amplio mapa del videojuego es mediante diversas razas de caballos que
                    están a disposición del jugador. Sin embargo, nadar no es posible en la historia, ya que Marston no
                    está dotado de esta capacidad, y si se adentra muy lejos en ríos o lagos, morirá ahogado.
                </p>
                <p class="text-white">Como parte de la historia, el jugador puede tomar partido de situaciones
                    aleatorias con las que se encuentra a medida que explora el territorio. Este tipo de encuentros
                    incluyen ahorcamientos públicos, emboscadas, peticiones de ayuda, encuentros con extraños, duelos y
                    ataques de peligrosos animales. También, el jugador puede presenciar la entrada de forajidos en una
                    población disparando y asustando a los lugareños, por lo que el jugador tiene la opción de
                    eliminarlos, con su consiguiente aumento de fama y honor entre los locales. Además es posible
                    participar en actividades paralelas a las misiones como juegos de azar; entre los que se incluyen
                    partidas de póquer, de dados o de lanzamiento de herradura; entrar en salas de cine para ver
                    películas mudas, separar individuos en peleas, realizar misiones de cazarrecompensas o buscar
                    tesoros.
                </p>
                <p class="text-white">Las escenas de combate y lucha son partes principales del juego. Los tiroteos en
                    Red Dead Redemption emplean un sistema de tercera persona. El jugador se puede cubrir, apuntar a una
                    persona en concreto y apuntar libremente. El personaje también puede apuntar otro tipo de objetivos
                    sin necesidad de eliminarlos, ya que Marston puede capturar ejemplares vivos mediante el uso de un
                    lazo. Cuando el jugador dispara a un enemigo el motor del juego recrea la IA de las reacciones y
                    movimientos de la víctima. John Marston tiene a su disposición un arsenal armamentístico que incluye
                    revólveres, pistolas, escopetas, fusiles, carabinas, cuchillos, explosivos, lazos, ametralladora
                    Gatling y cañones.</p>
            </div>
        </div>
        <!-- Content Row-->

        <div class="row m-6">
            <div class="col-lg-4 mb-3">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage1">
                    <img class="w-100 mb-3 rounded" src="../Imagenes/Games/rdr1.jpg" style="height: 400px;">
                </a>
            </div>
            <div class="col-lg-4 mb-3">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage2">
                    <img class="w-100 mb-3 rounded" src="../Imagenes/Games/rdr2.jpeg" style="height: 400px;">
                </a>
            </div>
            <div class="col-lg-4 mb-3">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage3">
                    <img class="w-100 mb-3 rounded" src="../Imagenes/Games/rdr3.jpeg" style="height: 400px;">
                </a>
            </div>
        </div>

        <!-- Modal 1 -->
        <div tabindex="-1" aria-labelledby="modalImage1" aria-hidden="true" class="modal fade" id="modalImage1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="../Imagenes/Games/rdr1.jpg">
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div tabindex="-1" aria-labelledby="modalImage2" aria-hidden="true" class="modal fade" id="modalImage2">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="../Imagenes/Games/rdr2.jpeg">
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div tabindex="-1" aria-labelledby="modalImage3" aria-hidden="true" class="modal fade" id="modalImage3">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="../Imagenes/Games/rdr3.jpeg">
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