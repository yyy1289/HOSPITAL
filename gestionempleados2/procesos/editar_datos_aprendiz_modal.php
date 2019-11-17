<?php

require_once "../php/conexion.php";
if (isset($_POST['actualizar'])) 
{
	$id = $_GET['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$idprograma = $_POST['idprograma'];

	$query = "UPDATE aprendiz SET nombreapre='$nombre', apellidoapre='$apellido', emailapre='$email', idprograma='$idprograma' WHERE idapre='$id'";
	mysqli_query($mysqli, $query);

	header('Location: modal_seleccionar_aprendices_registrados.php');
}

?>