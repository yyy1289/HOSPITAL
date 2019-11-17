<?php
require_once "../php/conexion.php";
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$idprograma=$_POST['idprograma'];

//validar correo si existe en la base de datos

$sql1="SELECT * from aprendiz WHERE idapre=\"$_POST[id]\"";
$querys = $mysqli->query($sql1);
while ($r=$querys->fetch_array())

{
$found=true;
if ($found) 
{
print"<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../procesos/modal_seleccionar_aprendices_registrados.php';</script>";
}
}
//en caso de que no existe permite crear el usuario
$query="INSERT INTO aprendiz VALUES('$id','$nombre','$apellido','$email','$idprograma')";
if ($mysqli->query($query)) {
	print"<script>alert(\"Registro exitoso.\");window.location='modal_seleccionar_aprendices_registrados.php';</script>";
}else{
	echo "Ocurrio un error";
}
?>