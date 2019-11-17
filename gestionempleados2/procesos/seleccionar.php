<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Mostrar</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<br/>
	<div class="col-md-8">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Acciones</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			require_once "../php/conexion.php";
			$query = "SELECT * FROM empleados";
			$result_tasks = mysqli_query($mysqli, $query);
			while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['Nombre'];?></td>
				<td><?php echo $row['Apellido'];?></td>
				<td><?php echo $row['email'];?></td>
				<td>
					<a href="../eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a>
					<a href="../actualizar.php?id=<?php echo $row['id']?>" class="btn btn-success">Actualizar</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<a href="../procesos/logout.php" class="btn btn-primary">Cerrar sesion</a>
	</div>
</body>
</html>