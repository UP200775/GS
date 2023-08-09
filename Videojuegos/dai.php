<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF=-8">
    <META name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Dragon Age: Inquisition </title>
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
            <div class="col-lg-7"><iframe width="700" height="400" src="https://www.youtube.com/embed/jJqxfkgSUog"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div class="col-lg-5">
                <h1 class="text-white">Dragon Age: Inquisition</h1>
                <h3 class="text-white">Descripcion</h3>
                <p class="text-white">Dragon Age: Inquisition (lit. Era del Dragón: Inquisición) es un videojuego de rol
                    y acción que ha sido desarrollado por BioWare y ha sido publicado por Electronic Arts. Es la
                    secuela directa de Dragon Age: Origins y Dragon Age II, lo que hace de este título el tercer juego
                    de la franquicia Dragon Age.</p>
            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-dark my-5 py-4">
            <div class="card-body">
                <p class="text-white m-0 text-justify">
                <h3>Sinopsis</h3>
                <p class="text-white">Un cataclismo ha sumido las tierras de Thedas en el caos. Los dragones cubren el
                    cielo y proyectan una sombra sobre las tierras que están al borde del caos. Los magos declaran la
                    guerra total contra los templarios. Las naciones se alzan unas contra otras. Como líder de la
                    Inquisición, de ti depende restablecer el orden y acabar con los agentes de la entropía.

                    Explora, lidera y combate: unas decisiones complicadas definirán tu aventura, pues una única
                    elección podría cambiar el rumbo de lo que está por suceder.</p>
            </div>
            <div class="card-body">
                <p class="text-white m-0 text-justify">
                <h3>Jugabilidad</h3>
                <p class="text-white">Dragon Age: Inquisition es un juego de rol donde te adentrarás en un mundo de
                    fantasía. Puedes personalizar a tu personaje eligiendo su aspecto y habilidades. Explorarás un mundo
                    amplio y diverso, desde montañas hasta bosques. Reunirás a un grupo de personajes con diferentes
                    habilidades y personalidades, y podrás establecer relaciones con ellos.
                </p>

                <p class="text-white">En las batallas, podrás detener el juego para tomar decisiones estratégicas o
                    jugar en tiempo real. Utilizarás habilidades especiales y tácticas para vencer a enemigos como
                    monstruos y soldados. Tendrás la oportunidad de tomar decisiones importantes en la historia, lo que
                    influirá en cómo se desarrolla y en las relaciones con los personajes.

                    A medida que avances, podrás mejorar tus armas y armaduras, así como aprender nuevas habilidades.
                    También liderarás a tu grupo en misiones para ganar recursos y ventaja sobre los enemigos. En
                    resumen, Dragon Age: Inquisition te ofrece una experiencia de juego donde la exploración, la lucha
                    táctica y las decisiones morales son clave para vivir una emocionante aventura de rol en un mundo de
                    fantasía.
                </p>
            </div>
        </div>
        <!-- Content Row-->
        <div class="row m-6">
            <div class="col-lg-4 mb-3">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage1">
                    <img class="w-100 mb-3 rounded" src="../Imagenes/Games/dai1.jpeg" style="height: 400px;">
                </a>
            </div>
            <div class="col-lg-4 mb-3">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage2">
                    <img class="w-100 mb-3 rounded" src="../Imagenes/Games/dai2.jpeg" style="height: 400px;">
                </a>
            </div>
            <div class="col-lg-4 mb-3">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage3">
                    <img class="w-100 mb-3 rounded" src="../Imagenes/Games/dai3.jpg" style="height: 400px;">
                </a>
            </div>
        </div>

        <!-- Modal 1 -->
        <div tabindex="-1" aria-labelledby="modalImage1" aria-hidden="true" class="modal fade" id="modalImage1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="../Imagenes/Games/dai1.jpeg">
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div tabindex="-1" aria-labelledby="modalImage2" aria-hidden="true" class="modal fade" id="modalImage2">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="../Imagenes/Games/dai2.jpeg">
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div tabindex="-1" aria-labelledby="modalImage3" aria-hidden="true" class="modal fade" id="modalImage3">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <img src="../Imagenes/Games/dai3.jpg">
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