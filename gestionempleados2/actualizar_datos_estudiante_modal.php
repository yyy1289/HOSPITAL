<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar datos</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>


	<?php require_once "php/conexion.php";
    session_start();
			echo "Bienvenido Sr/a: ";
			echo $_SESSION['user'];

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "select * from aprendiz where idapre=$id";
		$result = mysqli_query($mysqli, $query);
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_array($result);
			$id = $row['idapre'];
			$nombre = $row['nombreapre'];
			$apellido = $row['apellidoapre'];
			$email = $row['emailapre'];
			$idprograma = $row['idprograma'];

		}
	}
	?>
	<br>
	<br>
	<div class="container p-4">
		<div class="row">
			<div class="col-md-4 mx-auto">
				<div class="card card-body">
					<p>Actualizar Datos</p>
					<form action="procesos/editar_datos_aprendiz_modal.php?id=<?php echo $_GET['id'];?>" method="POST">
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
					            Programa: 
					           <select name="idprograma">
					           <option value="0">Seleccionar</option>  
					           <?php
					           $query=$mysqli->query("select * from programa");
					           while ($valores=mysqli_fetch_array($query)){
					            echo '<option value="'.$valores['idprograma'].'">'.$valores['nomprograma'].'</option>';
					           }
					           ?>
					           </select>
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