<?php

require_once "../php/conexion.php";
if (isset($_POST['actualizar'])) 
{
	$id = $_GET['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];

	$query = "UPDATE empleados SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id='$id'";
	mysqli_query($mysqli, $query);

	header('Location: seleccionar.php');
}
?>