<!DOCTYPE html>
<HTML lang="en">

<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Videojuegos</title>


  <link rel="stylesheet" href="../Header/Header.css">
  <link rel="stylesheet" href="../Footer/estilos.css">
  <link rel="stylesheet" href="games.css">
</head>

<header>
  <?php require_once '../Header/Header.php'; ?>
</header>


<body>
  <div class="card-container">
    <?php
    include '../DB_conexion.php';
    $conn = Conexion();

    $sql = "SELECT * FROM videojuegos";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
      $Id_Juego = $row['Id_Juego'];
      $Imagen_Juego = base64_encode($row['Imagen_Juego']);
      $Nombre_Juego = $row["Nombre_Juego"];
      $Fecha_Lanzamiento = $row["Fecha_Lanzamiento"];
      $Anio_Ganador = $row["Anio_Ganador"];
      $Cal_Ign = $row["Cal_Ign"];
      $Cal_Metacritic = $row["Cal_Metacritic"];


      echo '<div class="card">';
      echo '<div class="face front">';
      echo '<img src="data:image/jpeg;base64,' . $Imagen_Juego . ' ">';
      echo '<h3>' . $Nombre_Juego . '</h3>';
      echo '</div>';
      echo '<div class="face back">';
      echo '<h3>' . $Nombre_Juego . '</h3>';
      echo '<a>Fecha de lanzamiento: ' . $Fecha_Lanzamiento . '</a>';
      echo '<a> Año Ganador: ' . $Anio_Ganador . '</a>';
      echo '<a><img src="../Imagenes/Games/ign.png" width="20px" height="20px">  IGN: ' . $Cal_Ign . '/10</a>';
      echo '<a><img src="../Imagenes/Games/metacritic.png" width="20px" height="20px">  Metacritic: ' . $Cal_Metacritic . '/100</a>';
      echo '<div class="link">';
      echo '<a href="javascript:void(0);" class="btn btn1" onclick="verMas(' . $Id_Juego . ')">Ver mas</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
    $conn->close();
    ?>
  </div>
</body>


<footer>
  <?php require_once '../Footer/footer.html'; ?>
</footer>

<script>
  function verMas(Id_Juego) {
    switch (Id_Juego) {
      case 1:
        window.location.href = "nfl.php";
        break;
      case 2:
        window.location.href = "gta_sa.php";
        break;
      case 3:
        window.location.href = "re4.php";
        break;
      case 4:
        window.location.href = "oblivion.php";
        break;
      case 5:
        window.location.href = "bioshock.php";
        break;
      case 6:
        window.location.href = "gta4.php";
        break;
      case 7:
        window.location.href = "uncharted2.php"
        break;
      case 8:
        window.location.href = "rdr.php"
        break;
      case 9:
        window.location.href = "skyrim.php"
        break;
      case 10:
        window.location.href = "twd.php"
        break;
      case 11:
        window.location.href = "gta5.php"
        break;
      case 12:
        window.location.href = "dai.php"
        break;
      case 13:
        window.location.href = "witcher3.php"
        break;
      case 14:
        window.location.href = "overwatch.php"
        break;
      case 15:
        window.location.href = "botw.php"
        break;
      case 16:
        window.location.href = "gow.php"
        break;
      case 17:
        window.location.href = "sekiro.php"
        break;
      case 18:
        window.location.href = "tlou2.php"
        break;
      case 19:
        window.location.href = "itt.php"
        break;
      case 20:
        window.location.href = "elden.php"
        break;
    }
  }
</script>

</HTML>