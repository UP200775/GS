<?php 
            session_start();
   if (!empty($_SESSION['username1'])){
        //si inicio sesion aqui ponen su pagina web  eliminan la coneccion porq se encuetra arriba jajaja
        //pegan su pagina
        header("Location: ../Home/Home.php". $$_SESSION['token']);
    }else{
        //No se inicio sesion
        ?>

<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="../Css/formulario.css" th:href="@{/css/index.css}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>
    <script src="main.js"></script>
    <div class="modal-dialog text-center">
        
        <div class="col-sm-10 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="../Imagenes/logo.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" th:action="@{/login}" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Correo" name="email" required/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" required/>
                    </div>
                    <button  class="btn btn-primary" ><i class="fas fa-sign-in-alt" ></i>  Iniciar sesión </button>
                </form>
                <div class="col-12 forgot">
                    <a href="../Inicio y Registro de sesion/olvide.php">Olvide la contraseña</a>
                </div>
                <div class="col-12 forgot">
                    <a href="../Inicio y Registro de sesion/registro.php">Registrate</a>
                </div>
             
            </div>
        </div>
    </div>
</body>

</html>


<?php
include '../DB_conexion.php';
 $conn = Conexion();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $contra = $_POST["password"];   
       $query3 = "SELECT password,username FROM usuarios WHERE email = '$email'";
        $result3 = $conn->query($query3);
        if ($result3->num_rows > 0) {
      // Recorrer los resultados obtenidos
      while ($row3 = $result3->fetch_assoc() ) {
       $contra_correo = $row3['password'];
         }
         if (password_verify($contra, $contra_correo)) {
            // La contraseña es válida
            echo '<script>alert("Formulario enviado con éxito!");</script>';
            // Realiza el resto de las operaciones necesarias para iniciar sesión
            function generateToken($length = 32) {
                $randomBytes = random_bytes($length);
                $token = bin2hex($randomBytes);
                return $token;
            }
            $token = generateToken();
            $funcion="Inicio de sesion";
            $query1 = "INSERT INTO tokens (token,funcion,correo_electronico) VALUES ('$token','$funcion','$email')";
            $result = $conn->query($query1);
            $_SESSION['token1'] =$token;
            $query2 = "SELECT username FROM usuarios WHERE email = '$email'";
            $result = $conn->query($query2);
        while ($row = $result->fetch_assoc() ) {
            $username1 = $row['username'];
            $iduser = $row['ID_Usuario'];
          }
          $_SESSION['username1']=$username1;
            header("Location: ../Home/Home.php?token=".$_SESSION['username1']);
        }else {
            ?>
                
            <?php
            // La contraseña es incorrecta
            echo '<script>alert("Contraseña incorrecta");</script>';
        }


  }else{

    echo "No existe la cuenta";
 }
}
?>
        <?php
    }
?>

