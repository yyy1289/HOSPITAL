<?php
require_once "php/conexion.php";
$email=$_POST['email'];
$clave=$_POST['clave'];
$query="SELECT * FROM usuario WHERE correo='$email' and clave='$clave'";

$consulta2=$mysqli->query($query);
if($consulta2->num_rows>=1) {
	$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
	session_start();
	$_SESSION['user']=$fila['nombre'];
	$_SESSION['verificar']=true;

	header("Location: usuario.php");
}else{
	print "<script>alert(\"Datos incorrectos.\");
	window.location='index.php';</script>'";
}
?>