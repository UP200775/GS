<?php
// agregar_comentario.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentario = $_POST["comentario"];
    $usuarioID = session_start(); // Obtén el ID del usuario con sesión iniciada (puedes usar tu propio método de obtención)

    // Conexión a la base de datos
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "gamespotlight";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión ha fallado: " . $conn->connect_error);
    }

    // Insertar el comentario en la base de datos
    $articleID = $_GET['id']; // Asegúrate de que este valor sea válido y no esté comprometido para evitar SQL injection
    $sql = "INSERT INTO comentarios (ID_Articulo, ID_Usuario, comentario) VALUES ('$articleID', '$usuarioID', '$comentario')";

    if ($conn->query($sql) === true) {
        echo "Comentario agregado correctamente.";
    } else {
        echo "Error al agregar el comentario: " . $conn->error;
    }

    $conn->close();
}
?>
