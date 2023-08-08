 <?php

    function Conexion(){
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
        return $conn;
    }
    
 ?>

