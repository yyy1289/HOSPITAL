<?php
require_once "../php/conexion.php";
$email=$_POST['emails'];
$clave=md5($_POST['contrasenas']);
$query="SELECT * from empleados WHERE email='$email' AND Contraseña='$clave'";

$consulta2=$mysqli->query($query);
if($consulta2->num_rows>=1) {
	$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
	session_start();
	$_SESSION['user']=$fila['Nombre'];
	$_SESSION['verificar']=true;
	header("Location: ../procesos/seleccionar2.php");
}else{
	print "<script>alert(\"Datos incorrectos.\");
	window.location='../index.php';</script>'";
}
?>