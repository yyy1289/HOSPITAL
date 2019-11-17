<?php
require_once "php/conexion.php";
if (isset($_GET['id'])){
	$id=$_GET['id'];
	$query="DELETE FROM empleados WHERE id='$id'";
	if ($mysqli->query($query)){
		print"<script>alert(\"Registro eliminado\");window.location='procesos/seleccionar.php';</script>";
	}else{
		echo "Error no se pudo eliminar el registro";
	}
}else{
	echo "Error no se pudo procesar la petición";
}
?>