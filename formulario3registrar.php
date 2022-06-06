<?php
include "formulario3.php";
//recivir los datos y alamacenar en variables
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$paquete = $_POST['paquete'];
$destino = $_POST['destino'];
$genero = $_POST['genero'];
$preferencias = $_POST['preferencias'];
$password = $_POST['password'];
//consulta para insertar
$insertar = "INSERT INTO viajes(nombre,correo,telefono,destino,paquete,genero,preferencias,password)
VALUES('$nombre','$correo','$telefono','$destino','$paquete','$genero','$preferencias','$password')";
//ejecutar consulta
$resultado=mysqli_query($conexion, $insertar);
if(!$resultado){
 die(mysqli_error($conexion) ); //muestra el ultimo erro
} else {
echo "Usuario registrado en un momento nos pondremos en contacto con usted";
}
//cerrar conexion
mysqli_close($conexion);
 ?>
 <link rel='stylesheet' href='color.css'>
 <br>
 <form action="index.html">
     <button>Inicio</button>
 </form>
