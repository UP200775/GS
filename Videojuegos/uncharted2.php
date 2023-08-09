
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF=-8">
    <META name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Uncharted 2</title>
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
            <div class="col-lg-7"><iframe width="700" height="400" src="https://www.youtube.com/embed/tlkkceDkT88"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div class="col-lg-5">
                <h1 class="text-white">UNCHARTED 2: El reino de los ladrones </h1>
                <h3 class="text-white">Sinopsis</h3>
                <p class="text-white">Nathan Drake está dentro de un tren destrozado, a punto de caer por un acantilado,
                    en China. ¿Cómo ha llegado hasta allí? Cinco meses antes, junto a Harry Flynn y Chloe Frazer, planeó
                    el robo de una lámpara en un museo de Estambul. Allí, escondido, estaba un mapa realizado por Marco
                    Polo que señalaba la ruta hacia la mítica ciudad de Shambala. Tras ser traicionado por uno de ellos,
                    Nathan se embarca en una aventura para encontrar la ciudad antes que sus enemigos.</p>
                <p class="text-white"></p>
            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-dark my-5 py-4">
            <div class="card-body">
                <p class="text-white m-0 text-justify">
                <h3>Jugabilidad</h3>
                <p class="text-white">Paralelamente a las cinemáticas hay otros elementos que nos meterán de cabeza en
                    la historia. Y es que Uncharted 2 no sólo recuerda a los clásicos del cine; también es un videojuego
                    de concepción muy clásica pero que, a su vez, va un poco más allá con algunas de las reglas básicas
                    del género y lo lleva a otro nivel. Efectivamente toda la historia está muy scriptada, muy “guiada”.
                    Es decir, no es un mundo abierto y siempre tienes que acabar yendo por el mismo camino y hacer las
                    mismas acciones para seguir avanzando, pero eso permite a Naughty Dog dotar de un ritmo y unos
                    crescendos jugables impecables.
                </p>
                <p class="text-white">En todo caso sí que existe cierta flexibilidad en cómo te tomas esos objetivos que
                    hay que cumplir. Al contrario que en el primer Uncharted aquí hay muchas partes de sigilo. O, mejor
                    dicho, partes en las que puedes decidir optar por el sigilo. Depende un poco de tu humor, realmente,
                    porque la única recompensa que obtienes si vas a lo silencioso son algunos ítems extra como granadas
                    o pistolas un poco más potentes. En todo caso es un sigilo muy bien montado e intuitivo y que se
                    aplica con las mismas mecánicas que utilizamos durante el juego. También está perfectamente
                    integrado con el motor del juego. Si estamos escondidos en una esquina y cogemos a un tipo
                    despistado lo arrastraremos hacia donde estemos y lo noquearemos ahí, o si colgamos de un saliente y
                    alguien pasa por encima le tiraremos del pie y lo despeñaremos.
                </p>
                <p class="text-white">La integración con el escenario, por tanto, es absoluta, y eso ayuda a que Nathan
                    haga exactamente lo que nosotros queremos que haga, lo que imaginamos que tendría que hacer. Sucede
                    igual con los combates cuerpo a cuerpo, que son muy dinámicos, aunque es uno de los pocos puntos del
                    juego que quizás requería de un poco más de variedad.</p>
            </div>
        </div>
        <!-- Content Row-->
        <div class="row m-6">
            <div class="col-lg-4 mb-3">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage1">
                    <img class="w-100 mb-3 rounded" src="../Imagenes/Games/uncharted21.jpg" style="height: 400px;">
                </a>
            </div>
            <div class="col-lg-4 mb-3">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage2">
                    <img class="w-100 mb-3 rounded" src="../Imagenes/Games/uncharted22.jpeg" style="height: 400px;">
                </a>
            </div>
            <div class="col-lg-4 mb-3">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage3">
                    <img class="w-100 mb-3 rounded" src="../Imagenes/Games/uncharted23.jpeg" style="height: 400px;">
                </a>
            </div>
        </div>

        <!-- Modal 1 -->
        <div tabindex="-1" aria-labelledby="modalImage1" aria-hidden="true" class="modal fade" id="modalImage1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="../Imagenes/Games/uncharted21.jpg">
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div tabindex="-1" aria-labelledby="modalImage2" aria-hidden="true" class="modal fade" id="modalImage2">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="../Imagenes/Games/uncharted22.jpeg">
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div tabindex="-1" aria-labelledby="modalImage3" aria-hidden="true" class="modal fade" id="modalImage3">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="../Imagenes/Games/uncharted23.jpeg">
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
 








