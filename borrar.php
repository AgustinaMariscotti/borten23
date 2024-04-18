<?php

$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "broten");

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
