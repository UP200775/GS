
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Artículos</title>
  <link rel="stylesheet" href="HomeArticulo.css">
  <link rel="stylesheet" href="../Header/Header.css">
  <link rel="stylesheet" href="../Footer/estilos.css">
</head>

<header>
  <?php require_once'../Header/Header.php'; ?>
</header>

<body>

  <div class="container">

    <?php
     include '../DB_conexion.php';
     $conn = Conexion(); 
      $sql = "SELECT * FROM articulos";
      $result = $conn->query($sql);

      while ($row = $result->fetch_assoc()) {
          $ID_Articulo = $row['ID_Articulo'];
          $Nombre_Articulo = $row["Nombre_Articulo"];
          $Autor = $row["Autor"];
          $Imagen_Articulo = base64_encode($row['Imagen_Articulo']);
          $Fecha = $row["Fecha_Articulo"];

          echo '
            <div class="blog-card" style="background-image: url(data:image/jpeg;base64,' . $Imagen_Articulo . '); background-position: center center;background-size: cover;">
              <div class="title-content">
              <h3>' . $Nombre_Articulo . '</h3>
              <hr />
                <div class="intro"><strong>Autor: </strong>' . $Autor.' </div>        
              </div>
              <div class="card-info">
              <button class="boton-mas" name="button" onclick="viewArticle(' . $ID_Articulo . ')">Leer más</button>
              </div>
              <div class="utility-info">
                <ul class="utility-list">         
                  <li class="date">' . $Fecha . '</li>          
                </ul>
              </div>
              <div class="gradient-overlay"></div>
              <div class="color-overlay"></div>
            </div>';
      }

      $conn->close();
      ?>
  </div>

  <script>
      function viewArticle(articleID) {
        window.location.href = 'PlantillaArticulo.php?id=' + articleID;
      }
    </script>
</body>

<footer>
  <?php require_once'../Footer/Footer.html'; ?>
</footer>
</html>

   
   