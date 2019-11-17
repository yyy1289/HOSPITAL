<?php
require_once "../php/conexion.php";
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$duracion=$_POST['duracion'];


//validar correo si existe en la base de datos

$sql1="SELECT * from programa WHERE idprograma=\"$_POST[id]\"";
$querys = $mysqli->query($sql1);
while ($r=$querys->fetch_array())

{
$found=true;
if ($found) 
{
print"<script>alert(\"ID de programa ya esta registrado.\");window.location='../procesos/modal_seleccionar_aprendices_registrados.php';</script>";
}
}
//en caso de que no existe permite crear el usuario
$query="INSERT INTO programa VALUES('$id','$nombre','$duracion')";
if ($mysqli->query($query)) {
	print"<script>alert(\"Registro exitoso.\");window.location='seleccionar2.php';</script>";
}else{
	echo "Ocurrio un error";
}
?>