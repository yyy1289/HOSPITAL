<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido...</title>
		<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<br>
	<?php require_once "php/conexion.php";
    session_start();
      echo "Bienvenido Sr/a: ";
      echo $_SESSION['user'];
      ?>

	<br>

     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agendarcita">
        Agendar cita...   
         </button>
   
   <br><br>

   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#agendarcitaurgen" ><a title="Las citas de urgencias no tienen valor">
        Cita de urgencias...  </a> 
         </button>



<a href="logout.php" class="btn btn-primary" style="float: right;">Cerrar sesion</a>


         <!-- DEFINICION DEL MODAL PARA PEDIR CITA -->
<div class="modal" id="agendarcita">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Cabecera del modal -->
      <form action="" method="post" id="modalregist">
      <div class="modal-header">
        <h4 class="modal-title">Solicita tu cita...</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Cuerpo del modal -->
      <div class="modal-body">
              
          <div class="form-group">
            Seleccione su tipo de cita...
           <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="modo">
              <option selected>Seleccionar</option>
              <option value="1">Cita medica con valor $ 3.000 </option>
              <option value="2">Cita odontológica con valor $ 5.000 </option>
              <option value="3">Cita prioritaria con valor $ 15.000 </option>

          </select>
          </div>

          
          <button type="submit" name="guardar" class="btn btn-dark" onclick="">Enviar...</button>
      </div>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
  </form>
</div>
</div>
</div>


     <!-- FIN MODAL PARA PEDIR CITA-->

           <!-- DEFINICION DEL MODAL PARA PEDIR CITA -->
<div class="modal" id="agendarcitaurgen">
  <div class="modal-dialog">
    <div class="modal-content">

 <!-- Cabecera del modal -->
      <form action="" method="post" id="modalregist">
      <div class="modal-header">
        <h4 class="modal-title">Solicita tu cita...</h4><br>
        Las citas de urgencias no generan costo...
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Cuerpo del modal -->
      <div class="modal-body">
              
              <img src="img/citas.png">
              <br>
          <div class="form-group">
            Seleccione su tipo de cita...
           <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="modo" required="">
              <option selected>Seleccionar</option>
              <option value="1">Triage 1 </option>
              <option value="2">Triage 2</option>
              <option value="3">Triage 3 </option>
              <option value="4">Triage 3 B </option>
              <option value="5">Triage 4 </option>

          </select>
          </div>
              
          <div class="form-group">
					            Seleccione su doctor...
					           <select>
					           <option value="0">Si su cita es TRIAGE 4 no debe escoger doctor...</option>  
					           <?php
					           $query=$mysqli->query("select * from medico");
					           while ($valores=mysqli_fetch_array($query)){
					            echo '<option value="'.$valores['cedulaMedico'].'">'.'CC '.$valores['cedulaMedico'].' '.$valores['nombre'].'</option>';
					           }
					           ?>
					           </select>
					          </div>
					          

          
          <button type="submit" name="guardar" class="btn btn-dark" onclick="">Enviar...</button>
      </div>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
  </form>
</div>
</div>
</div>


     <!-- FIN MODAL PARA PEDIR CITA-->


</div>
</body>
</html>