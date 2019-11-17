<?php
require_once "php/conexion.php";
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];

//validar correo si existe en la base de datos

$sql1="SELECT * from usuario WHERE cedula=\"$_POST[cedula]\"";
$querys = $mysqli->query($sql1);
while ($r=$querys->fetch_array())

{
$found=true;
if ($found) 
{
print"<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='index.php';</script>";
}
}
//en caso de que no existe permite crear el usuario
$query="INSERT INTO usuario VALUES('$cedula','$nombre','$apellido','$direccion','$telefono','$correo','$clave')";
if ($mysqli->query($query)) {
	print"<script>alert(\"Registro exitoso.\");window.location='index.php';</script>";
}else{
	echo "Ocurrio un error";
}
?>