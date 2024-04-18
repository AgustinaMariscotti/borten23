<?php
$conexion = mysqli_connect("127.0.0.1","root","");

  $producto = $_POST ['producto'];
  $ingredientes = $_POST['ingredientes'];
  $contenido = $_POST['contenido'];
  $precio = $_POST['precio'];
  // Si se desea almacenar una imagen en la base de datos usar lo siguiente: addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
   $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$consulta = "INSERT INTO productos (id,producto,ingredientes,contenido,precio,imagen)
VALUES ('','$producto','$ingredientes','$contenido','$precio','$imagen')";
  mysqli_select_db($conexion,"broten");
  mysqli_query($conexion,$consulta);
  header('location:listar.php');
?>
