<?php
require_once "../php/conexion.php";
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$clave=md5($_POST['password']);
//validar correo si existe en la base de datos

$sql1="SELECT * from empleados WHERE email=\"$_POST[email]\"";
$querys = $mysqli->query($sql1);
while ($r=$querys->fetch_array())

{
$found=true;
if ($found) 
{
print"<script>alert(\"Nombre de usuario o email ya estan regsitrados.\");window.location='../procesos/seleccionar.php';</script>";
}
}
//en caso de que no existe permite crear el usuario
$query="INSERT INTO empleados(nombre,apellido,email,contraseña) VALUES('$nombre','$apellido','$email','$clave')";
if ($mysqli->query($query)) {
	print"<script>alert(\"Registro exitoso.\");window.location='seleccionar.php';</script>";
}else{
	echo "Ocurrio un error";
}
?>