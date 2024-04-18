<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("127.0.0.1","root","");
 mysqli_select_db($conexion,"broten");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET["id"];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM productos WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$repuesta=mysqli_query ($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PRODUCTOS</title>
    </head>
    <body>
        <?php
        // 6) asignamos a diferentes variables los respectivos valores del array $datos.
        $producto=$datos["producto"];
        $ingredientes=$datos["ingredientes"];
        $contenido=$datos["contenido"];
        $precio=$datos["precio"];
        ?>
        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos.</p>
        <form action="" method="post" enctype="multipart/form-data">
            <label>PRODUCTO</label>
            <input type="text" name="producto" placeholder="Producto" value="<?php echo "$producto"; ?>">

<br><br>
            <label>CONTENIDO</label>
            <input type="text" name="contenido" placeholder="Contenido" value="<?php echo "$contenido"; ?>">
<br><br>
            <label>PRECIO</label>
            <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">

<br><br>
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
            <button type="submit" name="Cancelar" formaction="listar.php">Cancelar</button>
        </form>
        <?php
        // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
        if(array_key_exists("guardar_cambios",$_POST)){
            // 2') Almacenamos los datos actualizados del envío POST
            // a) generar variables para cada dato a almacenar en la bbdd
            // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
            // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
            $producto=$_POST["producto"];
            $contenido=$_POST["contenido"];
            $precio=$_POST["precio"];
            // 3') Preparar la orden SQL
            // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
            // a) generar la consulta a realizar
             $consulta = "UPDATE productos SET producto='$producto', contenido='$contenido', precio='$precio' WHERE id=$id";
            // 4') Ejecutar la orden y actualizamos los datos
            // a) ejecutar la consulta
            mysqli_query($conexion, $consulta);
            // a) rederigir a index
            header("location: listar.php");
          } ?>

    </body>
</html>
