<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GameSpotLight</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../Header/Header.css">
    <link rel="stylesheet" href="../Footer/estilos.css">
</head>
</html>
<header>
        <?php require_once'../Header/Header.php'; ?>
</header>
<body style="background-color: #333;">


    <div id="main">
        <div class="container">
            <div class="row mar-top-80">
                <div class="col-md-6">
                    <h3>Nuestra Pagina <strong>GameSpotLight</strong> <i class="fa fa-rocket pull-right hidden-xs-down" aria-hidden="true"></i></h3>
                    <p style="text-align: justify;">Es una plataforma de comunicación especializada en videojuegos, hardware y eventos. Generamos nuestro propio contenido audiovisual gracias a un amplio canal de comunicación digital. Contamos con una gran experiencia en la producción y organización de eventos y ofrecemos servicios a diferentes marcas del sector.</p>
                    <p style="text-align: justify;">Si quieres conocer más información sobre nosotros, trabajar con nosotros o colaborar, no dudes en ponerte en contacto con nosotros.
                        ¡Estaremos encantados de atenderte!</p>
                </div>
                <br>
            </div>
            <button id="mostrarBtn">Mostrar Juego</button>
            <br>
            <div id="textoMostrado" style="display: none;" style="border: 1px solid #ccc;">
                 <iframe src="../juego/juego.html" width="100%" height="900px"></iframe>
            </div>
        </div>
    </div>
    <script>
// Archivo "ruta_del_archivo.js"

// Obtener el botón y el párrafo de texto
var btnMostrar = document.getElementById('mostrarBtn');
var textoMostrado = document.getElementById('textoMostrado');

// Agregar un evento clic al botón
btnMostrar.addEventListener('click', function() {
    // Verificar el estado actual del párrafo de texto
    if (textoMostrado.style.display === 'none') {
        // Si está oculto, mostrarlo
        textoMostrado.style.display = 'block';
    } else {
        // Si está visible, ocultarlo
        textoMostrado.style.display = 'none';
    }
});

    </script>
    <style>
/* Archivo "ruta_del_archivo.css" */

/* Estilo para el botón */
#mostrarBtn {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

/* Estilo al pasar el cursor sobre el botón */
#mostrarBtn:hover {
    background-color: #45a049;
}



    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/general.js" type="text/javascript"></script>
</body>

<footer>
  <?php require_once'../Footer/footer.html'; ?>
</footer>
        