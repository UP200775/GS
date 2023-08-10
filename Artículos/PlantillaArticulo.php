<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="PlantillaArticulo.css">
    <link rel="stylesheet" href="../Header/Header.css">
    <link rel="stylesheet" href="../Footer/estilos.css">
</head>
<style>

</style>
<header>
    <?php require_once '../Header/Header.php'; ?>
</header>

<body>
    <div class="container">
        <main>
            <article>
                <?php
                    include '../DB_conexion.php';
                    $conn = Conexion();                

                $articleID = $_GET['id'];

                $sql = "SELECT * FROM articulos WHERE ID_Articulo = $articleID";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $Nombre_Articulo = $row["Nombre_Articulo"];
                    $Autor = $row["Autor"];
                    $Fecha = $row["Fecha_Articulo"];
                    $Articulo = $row["Archivo_Articulo"];

                
                    echo '<title>' . $Nombre_Articulo . '</title>
                        <h2>' . $Nombre_Articulo . '</h2>
                        <br>
                        <div class="info-art">
                            <div class="info-text">
                                Artículo por <strong>' . $Autor . '</strong> <br>
                                Publicado el ' . $Fecha . '
                            </div>
                        </div>
                            <br>
                            <div class="article-content">' . nl2br($Articulo) . '</div>';
                        } else {
                            echo 'Artículo no encontrado.';
                        }
                    $conn->close();
                ?>

                <div class="comments-section">
                    <h3>Comentarios</h3>
                    <br>
                    <?php

                        $servername = "localhost:3306";
                        $username = "root";
                        $password = "";
                        $dbname = "gamespotlight";
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Verificar la conexión
                        if ($conn->connect_error) {
                            die("La conexión ha fallado: " . $conn->connect_error);
                        }

                        $artikcleID = $_GET['id'];
                        
                        // Verificar si se envió un comentario
                        if (!empty($_SESSION['username1']) && !empty($_POST['comentario'])) {
                            $UserName = $_SESSION['username1'];
                            $comentario = $_POST['comentario'];
                            $insertQuery = "INSERT INTO `comentarios` (`ID_Comentario`, `ID_Articulo`, `Username`,
                                            `Comentario`) VALUES (NULL, '$articleID', '$UserName', '$comentario')";
                            $result = $conn->query($insertQuery);
                        }

                        $sql = "SELECT c.comentario, c.Username, u.ID_Usuario FROM comentarios c
                                INNER JOIN usuarios u ON c.Username = u.username
                                INNER JOIN articulos a ON a.ID_Articulo = c.ID_Articulo
                                WHERE c.ID_Articulo = $artikcleID";

                        $result1 = $conn->query($sql);

                        if ($result1->num_rows > 0) {
                            while ($row = $result1->fetch_assoc()) {
                                echo '<div class="comment">';
                                echo '<h4>Usuario: ' . $row["Username"] . '</h4>'; // Mostrar el nombre de usuario
                                echo '<p>' . $row["comentario"] . '</p>';
                                echo '</div>';
                                echo '<br>';
                            }
                        } else {
                            echo "No hay comentarios.";
                        }

                        if (!empty($_SESSION['username1'])) {
                            echo '<div class="comment-form">';
                            echo '<h4>Dejanos un comentario</h4>';
                            echo '<form method="post">';
                            echo '<textarea name="comentario" placeholder="Comentario"></textarea>';
                            echo '<button type="submit">Enviar comentario</button>';
                            echo '</form>';
                            echo '</div>';
                        } else {
                            echo 'No puedes comentar.';
                        }

                        $conn->close();
                    ?>
                </div>
            </article>

            <aside>
                <h3>Artículos relacionados</h3>
                <br>
                <div class="related-articles">
                    <?php
                        $servername = "localhost:3306";
                        $username = "root";
                        $password = "";
                        $dbname = "gamespotlight";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        if ($conn->connect_error) {
                            die("La conexión ha fallado: " . $conn->connect_error);
                        }

                        
                        $sql = "SELECT ID_Articulo, Nombre_Articulo, Autor FROM vista_ultimos_3_articulos";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="card">';
                                echo '<h4>' . $row["Nombre_Articulo"] . '</h4>';
                                echo '<a href="PlantillaArticulo.php?id=' . $row["ID_Articulo"] . '">Leer más</a>';
                                echo '</div>';
                            }
                        } else {
                            echo "No se encontraron artículos.";
                        }

                        $conn->close();
                    ?>
                </div>
            </aside>
        </div>
</body>

<header>
    <?php require_once '../Footer/Footer.html'; ?>
</header>

</html>


