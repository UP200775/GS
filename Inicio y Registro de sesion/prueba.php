<?php
$mensaje= "Token invalido";
include '../DB_conexion.php';
 $conn = Conexion();
if (isset($_GET["token"])) {
    $token = $_GET["token"];
    $query3 = "SELECT correo_electronico FROM tokens WHERE token = '$token'";
        $result3 = $conn->query($query3);
        //se obtiene el correo del token
        if ($result3->num_rows > 0) {
             // Recorrer los resultados obtenidos
              while ($row3 = $result3->fetch_assoc() ) {
                 $correo = $row3['correo_electronico'];
                }
                  $query1 = "SELECT username FROM usuarios WHERE email = '$correo'";
                  $result = $conn->query($query1);
              while ($row = $result->fetch_assoc() ) {
                  $username1 = $row['username'];
                }

        }
}else{
    echo "<script type='text/javascript'>alert('no tiene token');</script>";
}
?>


<?php
session_start();
   if (!empty($_SESSION['username1'])){
        //si inicio sesion aqui ponen su pagina web  eliminan la coneccion porq se encuetra arriba jajaja
        //pegan su pagina
        ?>
        
        Hola : <?php echo $username1 ?>
        <?php

    }else{
        //No se inicio sesion
        ?>
        Sesion no iniciada
        <?php
        header("Location: formulario.php");

    }
?>