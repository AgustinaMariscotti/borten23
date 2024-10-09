<!DOCTYPE html>
<html lang="en">

<head>  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Alimentos Vegetarianos, Veganos, Caseros y Congelados" />
  <meta name="keywords" content="congelados, veganos, vegetarianos, medallones, hamburguesas">
  <meta name="author" content="Broten Congelados" />
  <title>BROTEN CONGELADOS</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <link href="./misestilos/styles.css" rel="stylesheet" />

</head>

<body>


  <header>
    <div class="logo" id="inicio">
      <img src="./assets/img/logo.png" class="img-fluid" alt="logo">
    </div>
  </header>
  <br>
  <br>
  <br>

    <section>
      <div class="container">
        <div class="row">


          <?php
              $conexion = mysqli_connect("sql111.byethost7.com", "b7_37427571","flackerhost","b7_37427571_broten");
       
         if (!$conexion) {
          die("Conexión fallida: " . mysqli_connect_error());
         }
         mysqli_set_charset($conexion, "utf8mb4");

          $consulta="SELECT * FROM `productos` WHERE `producto`LIKE'embutidos%'";

          $datos= mysqli_query($conexion, $consulta);

          while ($reg = mysqli_fetch_array($datos)) {?>
            <div class="row justify-content-center">
          <div class="card-columns border border-white rounded col-sm-6 ">
              <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" >
              <div class=" card text-white bg-dark mb-3">
                <h1 class="card-header " style="width: 100%; font-size:25px;"><?php echo ucwords($reg['producto']) ?></h1>
                <h2 class="card-header " style="width: 100%; font-size:25px;"><?php echo ucwords($reg['ingredientes']) ?></h2>
                <h3 class="card-header " style="width: 100%; font-size:25px;"><?php echo ucwords($reg['contenido']) ?></h3>
                <h1 class="card-header  " style="width: 100%; font-size:25px;"><?php echo ucwords($reg['precio']) ?> $</h1>
            </div>
        </div>
          </div>
          <?php } ?>

      </div>
      </div>
    </section>


    <br>
        <br>
        <footer id="contactos" class="footer text-faded text-center py-5">
          <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
              <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">CONTACTOS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                  class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="https://www.facebook.com/profile.php?id=100086568677214&mibextid=ZbWKwL" target="_blank"> <img class="logos" src="./assets/img/face.png" alt="">FACEBOOK</a></li>
                  <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="https://instagram.com/broten.congelados?igshid=YmMyMTA2M2Y=" target="_blank"><img class="logos" src="./assets/img/insta.png" alt="">INSTAGRAM</a></li>
                  <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="https://wa.me/+543425474513" target="_blank"><img class="logos" src="./assets/img/whatsapp.png" alt="">WHATSAPP</a></li>
                </ul>
              </div>
            </div>
          </nav>
          <br>
          <div class="container">
            <p class="m-0 small">AGUSTINA MARISCOTTI </p>
            <p class="m-0 small">"BROTEN" Santa Fé 2022</p>
          </div>

        </footer>
        <a href="index.php#productos"> <img src="./assets/img/flecha.png" alt="inicio" class="flecha" style="transform:rotate(270deg);"></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
      </body>

            <br>
  </body>
