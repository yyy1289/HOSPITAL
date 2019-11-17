<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar datos</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php require_once "php/conexion.php";
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "select * from empleados where id=$id";
		$result = mysqli_query($mysqli, $query);
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_array($result);
			$nombre = $row['Nombre'];
			$apellido = $row['Apellido'];
			$email = $row['email'];
			$clave = $row['Contraseña'];
		}
	}
	?>
	<div class="container p-4">
		<div class="row">
			<div class="col-md-4 mx-auto">
				<div class="card card-body">
					<p>Actualizar Datos</p>
					<form action="procesos/editarDatos.php?id=<?php echo $_GET['id'];?>" method="POST">
						<div class="form-group">
							<div class="form-group">
								<input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>">
							</div>
							<div class="form-group">
								<input name="apellido" type="text" class="form-control" value="<?php echo $apellido; ?>">
							</div>
							<div class="form-group">
								<input name="email" type="email" class="form-control" value="<?php echo $email; ?>">
							</div>
							<div class="form-group">
								<input name="contraseña" type="password" class="form-control" value="<?php echo $clave; ?>">
							</div>
							<button class="btn btn-danger" name="actualizar">Actualizar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>