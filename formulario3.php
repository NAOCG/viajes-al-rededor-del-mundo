<!DOCTYPE html>
<html>
  <head> <title> Registro</title>
  </head>
  <body>
  <?php
  //conectar a la bd
  $anfitrion = 'localhost';
  $usuario = 'root';
  $contraseña = 'root';
  $database = 'viajes';
  $puerto ='3306';
  $conexion=mysqli_connect($anfitrion, $usuario, $contraseña, $database, $puerto);
  //if(!$conexion){
  //die("error al conectar con la base de datos");
  //}
  //else{
  // echo "conectado a la base de datos";
  //}
  ?>
</body>
</html>
