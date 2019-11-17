<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
	<script language="JavaScript">
	function preguntaregistro(){
    if (confirm('Revisa que tus datos sean correctos, en caso contrario oprime cancelar para modificar...')){
       document.modalregist.submit()
    }
	}
	</script>
</head>
<body>
<div class="container">
	<BR>
	<h1>Bienvenidos</h1>
	<BR>

   <!-- MENU NAVBAR-->
    <div class="row, lg-12">
        <div class="cli-lg-12">
                   <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="index.php"><img src="img/icon.jpg"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                       <!-- modal inicio de sesion -->     

                    <a class="nav-link" href="#" style="white-space: pre;" data-toggle="modal" data-target="#modallogin">Iniciar sesión</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="white-space: pre;" data-toggle="modal" data-target="#modalregistro">Registrarse</a>

                  </li>
                <li>
                <div style="width: 300px;"> 
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form></div>
              </li>
            </ul>
              </div>
            </nav>
      </div>
    </div>
 

   <!-- FIN DE NAVBAR -->
   <br><br>

   <!-- carrusel -->

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/sin.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div> 
    </div>




<!-- DEFINICION DEL MODAL PARA REGISTRO EN PAGINA -->
<div class="modal" id="modalregistro">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Cabecera del modal -->
      <form action="registrar.php" method="POST" id="modalregist">
      <div class="modal-header">
        <h4 class="modal-title">Registrate...</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Cuerpo del modal -->
      <div class="modal-body">

        <div class="form-group">
           <input type="text" class="form-control" name="cedula" placeholder="Cedula..." required="">
          </div>
           
            <div class="form-group">
           <input type="text" class="form-control" name="nombre" placeholder="Nombre..." required="">
          </div>
        
           <div class="form-group">
           <input type="text" class="form-control" name="apellido" placeholder="apellido..." required="">
          </div>

          <div class="form-group">
           <input type="text" class="form-control" name="direccion" placeholder="Dirección..." required="">
          </div>

          <div class="form-group">
           <input type="text" class="form-control" name="telefono" placeholder="Teléfono..." required="">
          </div>

           <div class="form-group">
           <input type="email" class="form-control" name="correo" placeholder="Email..." required="">
          </div>

           <div class="form-group">
           <input type="text" class="form-control" name="clave" placeholder="Clave..." required="">
          </div>
          

          
          <button type="submit" name="guardar" class="btn btn-dark" onclick="preguntaregistro()">Enviar...</button>
      </div>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
  </form>
</div>
</div>
</div>


     <!-- FIN MODAL PARA LOGIN-->

     <!-- DEFINICION DEL MODAL LOGIN -->
<div class="modal" id="modallogin">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Cabecera del modal -->
      <form action="login.php" method="POST">
      <div class="modal-header">
        <h4 class="modal-title">Iniciar sesión...</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Cuerpo del modal -->
      <div class="modal-body">
           
           <div class="form-group">
           <input type="Email" class="form-control" name="email" placeholder="Email..." required="">
          </div>
          
           <div class="form-group">
           <input type="password" class="form-control" name="clave" placeholder="Clave..." required="">
          </div>


          
          <button type="submit" name="guardar" class="btn btn-dark">Enviar...</button>
      </div>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
  </form>
  <?php
      if (isset($_POST['email']) && isset($_POST['clave'])) {
        require_once "php/conexion.php";
        require_once "login.php";
      }
      ?>
</div>
</div>
</div>


     <!-- FIN MODAL PARA REGISTRO EN PAGINA-->
</div>
</body>
</html>