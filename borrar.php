<?php
    $conexion = mysqli_connect("sql111.byethost7.com", "b7_37427571","flackerhost","b7_37427571_broten");
       
         if (!$conexion) {
          die("Conexión fallida: " . mysqli_connect_error());
         }
         mysqli_set_charset($conexion, "utf8mb4");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET["id"];

// 3) Preparar la orden SQL
// DELETE FROM nombre_tabla WHERE campo_tabla=dato
// => Elimina de la siguiente tabla el registro donde este campo sea igual a este dato
// a) generar la consulta a realizar
$consulta = "DELETE FROM productos WHERE id=$id";

// 4) Ejecutar la orden y eliminamos el regitro seleccionado
// a) ejecutar la consulta
// a) rederigir a index
mysqli_query($conexion, $consulta);

header("location:listar.php");



 ?>
