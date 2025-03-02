<?php
// Conexión a la base de datos
$conexion = mysqli_connect("sql111.byethost7.com", "b7_37427571", "flackerhost", "b7_37427571_broten");

// Verificar si la conexión falló
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, "utf8mb4");

// Obtener el valor de 'id' de la URL
$id = $_GET['id'];

// Consulta SQL para obtener el producto
$consulta = "SELECT * FROM productos WHERE id=$id";

// Ejecutar la consulta
$respuesta = mysqli_query($conexion, $consulta);

// Verificar si la consulta tuvo éxito
if ($respuesta) {
    // Transformar el registro en un array
    $datos = mysqli_fetch_array($respuesta);
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Alimentos Vegetarianos, Veganos, Caseros y Congelados" />
    <meta name="keywords" content="congelados, veganos, vegetarianos, medallones, hamburguesas" />
    <meta name="author" content="Broten Congelados" />
    <title>BROTEN CONGELADOS</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="./misestilos/styles.css" rel="stylesheet" />
</head>
<body>
<header>
    <div class="logo" id="inicio">
        <img src="./assets/img/logo.png" class="img-fluid" alt="logo">
    </div>
</header>

<br><br><br>

<?php
// Asignar los datos obtenidos de la consulta a variables
$producto = $datos["producto"];
$ingredientes = $datos["ingredientes"];
$contenido = $datos["contenido"];
$precio = $datos["precio"];
$imagen = $datos['imagen'];
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="card-columns border border-white rounded col-sm-6">
            <img class="card-img-top" src="data:image/jpg;base64,<?php echo base64_encode($imagen) ?>" alt="..." />
            <div class="card text-white bg-dark mb-3">
                <h1 class="card-header"><?php echo $producto; ?></h1>
                <p class="card-header">Ingredientes: <?php echo $ingredientes; ?></p>
                <p class="card-header">Contiene: <?php echo $contenido; ?></p>
                <p class="card-header">$<?php echo $precio; ?></p>
            </div>
        </div>
    </div>
</div>

<br>

<!-- Footer -->
<footer id="contactos" class="footer text-faded text-center py-5">
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">CONTACTOS</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase" href="https://www.facebook.com/profile.php?id=100086568677214&mibextid=ZbWKwL" target="_blank">
                            <img class="logos" src="./assets/img/face.png" alt=""> FACEBOOK
                        </a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase" href="https://instagram.com/broten.congelados?igshid=YmMyMTA2M2Y=" target="_blank">
                            <img class="logos" src="./assets/img/insta.png" alt=""> INSTAGRAM
                        </a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase" href="https://wa.me/+543425474513" target="_blank">
                            <img class="logos" src="./assets/img/whatsapp.png" alt=""> WHATSAPP
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>

    <div class="container">
        <p class="m-0 small">AGUSTINA MARISCOTTI</p>
        <p class="m-0 small">"BROTEN" Santa Fé 2022</p>
    </div>
</footer>

<a href="index.php#productos">
    <img src="./assets/img/flecha.png" alt="inicio" class="flecha" style="transform:rotate(270deg);">
</a>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="js/scripts.js"></script>
</body>
</html>
