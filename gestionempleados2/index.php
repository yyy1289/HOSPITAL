<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8"/>
</head>
<body>
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<h1>Gestion de usuarios</h1>
	<form role="form" name="" action="procesos/login.php" method="post">
		<div class="form-group">
			<input type="text" class="form-control" id="username" name="emails" placeholder="Nombre de usuario">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" id="password" name="contrasenas" placeholder="contraseña">
		</div>
		<a href="modal_guardar_apre_progra.php"><button type="submit" name="iniciar" class="btn btn-secondary">Acceder</button></a>
		<a href="guardar.php"><button class="btn btn-primary" type="button">Nuevo</button></a>
	</form>
	<?php
	if (isset($_POST['emails']) && isset($_POST¨['contrasenas'])) {
		require_once "../php/conexion.php";
		require_once "../procesos/login.php";
	}
	?>
</body>
</html>