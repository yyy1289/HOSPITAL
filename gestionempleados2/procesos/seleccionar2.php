<Doctype html>
<html>
<head>
<title>Formulario de Registro</title>
<meta charset="UTF-8"/>

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
<!-- Boton de apertura del modal -->
<br><br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalguardaraprendiz">
  Guardar aprendiz
</button>

<!-- Definicion del modal -->
<div class="modal" id="modalguardaraprendiz">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Cabecera del modal -->
      <form action="..\procesos\guardar_datos_apremdiz_modal.php" method="post">
      <div class="modal-header">
        <h4 class="modal-title">Guardar aprendiz</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Cuerpo del modal -->
      <div class="modal-body">
           <div class="form-group">
           <input type="text" class="form-control" name="id" placeholder="Digite el id">
          </div>
           <div class="form-group">
           <input type="text" class="form-control" name="nombre" placeholder="Digite el nombre">
          </div>
           <div class="form-group">
           <input type="text" class="form-control" name="apellido" placeholder="Digite el apellido">
          </div>
           <div class="form-group">
           <input type="text" class="form-control" name="email" placeholder="Digite el email">
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
          <button type="submit" name="registrar" class="btn btn-dark">Registrar</button>
      </div>

      <!-- cierre del modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
</form>
    </div>
  </div>
</div>
<br>
<br>

 <!-- Cabecera del modal de ingresar programa -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalguardarprograma">
  Guardar programa
</button>

<!-- Definicion del modal -->
<div class="modal" id="modalguardarprograma">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Cabecera del modal -->
      <form action="..\procesos\guardar_datos_programa_modal.php" method="post">
      <div class="modal-header">
        <h4 class="modal-title">Guardar programa</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Cuerpo del modal -->
      <div class="modal-body">
           <div class="form-group">
           <input type="text" class="form-control" name="id" placeholder="Digite el id del programa">
          </div>
           <div class="form-group">
           <input type="text" class="form-control" name="nombre" placeholder="Digite el nombre">
          </div>
           <div class="form-group">
           <input type="text" class="form-control" name="duracion" placeholder="Digite la duración">
          </div>
          
          <button type="submit" name="registrar" class="btn btn-dark">Registrar</button>
      </div>
  </form>
</div>
</div>
</div>


     <!-- Fin de modal para guardar programa -->

<br>
<br>
<a href="../procesos/logout.php" class="btn btn-primary" style="float: right;">Cerrar sesion</a>
</body>
</html>
<body></body>
