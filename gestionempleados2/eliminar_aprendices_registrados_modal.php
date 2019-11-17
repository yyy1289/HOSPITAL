<?php
require_once "php/conexion.php";
if (isset($_GET['id'])){
	$id=$_GET['id'];
	$query="DELETE FROM aprendiz WHERE idapre='$id'";
	if ($mysqli->query($query)){
		print"<script>alert(\"Registro eliminado\");window.location='procesos/modal_seleccionar_aprendices_registrados.php';</script>";
	}else{
		echo "Error no se pudo eliminar el registro";
	}
}else{
	echo "Error no se pudo procesar la petición";
}
?>