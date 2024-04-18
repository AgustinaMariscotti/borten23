<?php
session_start();
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
}
else {
  header ("location:login.html" );
}

 ?>
 <html lang="en">

 <head>
   <meta charset="utf-8" />
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
<div class="text-center" >
  <a href="agregar.html"class="btn btn-lg btn-primary btn-lg btn-block"> AGREGAR PRODUCTOS</a>
  <a href="cerrarsesion.php"class="btn btn-lg btn-secondary btn-block"> CERRAR SESION</a>
</div>
<section>


<table class="page-section cta col-xl-9 col-sm-12 mx-auto table-responsive">
<tr >
    <th>ID</th>
    <th>PRODUCTO</th>
    <th>CONTENIDO</th>
    <th>PRECIO</th>
    <th>IMAGEN</th>
    <th>EDITAR</th>
    <th>BORRAR</th>
</tr>
<?php
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "broten");

$consulta='SELECT * FROM productos';

$datos= mysqli_query($conexion, $consulta);


 while ($reg=mysqli_fetch_array($datos)) { ?>
    <tr >
    <td ><?php echo $reg['id']; ?></td>
    <td><?php echo $reg['producto']; ?></td>
    <td><?php echo $reg['contenido']; ?></td>
    <td><?php echo $reg['precio']; ?></td>
    <td><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="100px"></td>
    <td><a href="modificar.php?id=<?php echo $reg['id'];?>">EDITAR</a></td>
    <td><a href="borrar.php?id=<?php echo $reg['id'];?>">BORRAR</a></td>
    </tr>
<?php } ?>
</table>

</section>
  <br>
  <br>
  <footer id="contactos" class="footer text-faded text-center py-5">

    <br>
    <div class="container">
      <p class="m-0 small">AGUSTINA MARISCOTTI </p>
      <p class="m-0 small">"BROTEN" Santa Fé 2022</p>
    </div>

  </footer>

   </body>
 </html>
