<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>
  <body style="background-color: #f0f0f0;">
  <style type="text/css">
    li:hover{
    background-color: #0099cc;
  }

  </style>
<nav class="navbar navbar-default" style="background-color: #00a8f3; color:white;">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="color:white;">CETAC 02</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="hola.php" data-toggle="modal" data-target=".bs-example-modal-sm" style="color:white;">Iniciar sesión</a></li>
      </ul>
    </div>
  </div>
</nav>
      <!--modal para iniciar sesión-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Iniciar sesión</h2>
        </div>
        <div class="modal-body">
          <form action="iniciarsesion.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control1_nombre">Tipo de usuario</label><br>
              <input type="radio" name="tipo" value="admin" checked="" /><label>Administrador</label><br>
              <input type="radio" name="tipo" value="profesor"/><label>Profesor</label>
            </div>
            <div class="form-group">
              <label for="control1_nombre">Usuario</label>
              <input type="text" name="datos_introducidos_usuario" class="form-control" id="control1_nombre" placeholder="Usuario" required>
            </div>
            <div class="form-group">
              <label for="control1_contraseña">Contraseña</label>
              <input type="password" name="datos_introducidos_contraseña" class="form-control" id="control1_contraseña" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
          </form>
        </div>
    </div>
  </div>
</div>
<center>
<div class='container' align='center'>
   <div class='row'>
      <div class='col-md-12'>
        <div class="alert alert-info" style="width: 60%">
                <strong>
                    ¡Bienvenido!
                </strong><br>
                Ha entrado al sitio para regristro de asistencia de alumnos del CETAC No. 02. <br> Inicie sesión para ver su información
        </div>
          <img src="img/cet.png" width="60%"></center>
     </div>            
    </div>
  </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>