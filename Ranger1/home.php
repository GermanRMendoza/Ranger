<?php 
include "encabezado.inc";
 ?>
      
<article style="text-align: center;">
    <h1>¡Bienvenido <?php print $fila['titulo'].' '.$fila['nombre'];?>!</h1>
</article>

<div class='container' align='center'>
   <div class='row'>
      <div class='col-md-12'>
        <div class="alert alert-info" style="width: 60%">
                <strong>
                    ¡Bienvenido!
                </strong><br>
                Ha entrado al sitio para regristro de asistencia de alumnos del CETAC No. 02. <br>
        </div>
          <img src="img/cet.png" width="60%"></center>
     </div>            
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>