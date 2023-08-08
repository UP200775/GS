<?php
session_start();
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "gamespotlight";


// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}

$token_a_eliminar = $_SESSION['token1'];

$query3 = "DELETE FROM tokens WHERE token = '$token_a_eliminar'";
$result3 = $conn->query($query3);
// Destruir todas las variables de sesión
session_destroy();
$conn->close();
// Redireccionar a la página de inicio o a donde se desee después del cierre de sesión
header("Location: ../../Home/Home.php");
exit();
?>