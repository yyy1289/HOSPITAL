<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Mostrar</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
			require_once "../php/conexion.php";
			session_start();
			echo "Bienvenido Sr/a: ";
			echo $_SESSION['user'];
		?>
	<br>
	<br/>
    
    <br>
	<br>
	<div class="col-md-8">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Id_programa</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			require_once "../php/conexion.php";
			$query = "SELECT * FROM aprendiz";
			$query2 = "SELECT * FROM programa";

			$result_tasks = mysqli_query($mysqli, $query);
			$result_tasks2 = mysqli_query($mysqli, $query2);
			while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
			<tr>
				<td><?php echo $row['idapre'];?></td>
				<td><?php echo $row['nombreapre'];?></td>
				<td><?php echo $row['apellidoapre'];?></td>
				<td><?php echo $row['emailapre'];?></td>
				<td><?php echo $row['idprograma'];?></td>
				<td>
					<a href="../eliminar_aprendices_registrados_modal.php?id=<?php echo $row['idapre']?>" class="btn btn-danger">Eliminar</a>
					<a href="../actualizar_datos_estudiante_modal.php?id=<?php echo $row['idapre']?>" class="btn btn-success">Actualizar</a>
				</td>
			</tr>
			<?php } ?> 
		</tbody>
	</table>
	<a href="../procesos/logout.php" class="btn btn-primary">Cerrar sesion</a>
	</div>
</body>
</html>