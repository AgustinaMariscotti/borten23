<?php
 $conexion = mysqli_connect("sql111.byethost7.com", "b7_37427571","flackerhost","b7_37427571_broten");
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
mysqli_set_charset($conexion, "utf8mb4");
  $producto = $_POST ['producto'];
  $ingredientes = $_POST['ingredientes'];
  $contenido = $_POST['contenido'];
  $precio = $_POST['precio'];
  // Si se desea almacenar una imagen en la base de datos usar lo siguiente: addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
   $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$consulta = "INSERT INTO productos (id,producto,ingredientes,contenido,precio,imagen)
VALUES ('','$producto','$ingredientes','$contenido','$precio','$imagen')"; 
  mysqli_query($conexion,$consulta);
  header('location:listar.php');
?>

