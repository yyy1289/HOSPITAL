<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
	<title>Formularrio de Registro</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<h2>Registro de usuarios</h2>
		<form action="procesos/guardarDatos.php" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="nombre" placeholder="Nombre del usuario">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="apellido" placeholder="Apellido del usuario">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Email del usuario">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Contraseña">
			</div>
				<button type="submit" name="registrar" class="btn btn-warning">Registrar</button>
			</form>
	</div>
	</div>
	</div>
</body>
</html>