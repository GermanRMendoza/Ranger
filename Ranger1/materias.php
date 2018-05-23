<?php  
include "encabezado.inc";
include 'conexion.php';


echo'<link href="css/bootstrap.min.css" rel="stylesheet">';
 echo'<script type="text/javascript" src="js/bootstrap.min.js"></script>
      <meta charset="utf-8">';

mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT * FROM relacion_grupos WHERE id_profesor = '".$_SESSION['name']."'";
$resultado = mysqli_query($conexion, $peticion);

echo "<table border=5 class='table'>";

while($fila = mysqli_fetch_array($resultado)) {

$peticion_mat = "SELECT * FROM materias WHERE id = '".$fila['id_materia']."'";
$resultado_mat = mysqli_query($conexion, $peticion_mat);
$fila_mat = mysqli_fetch_array($resultado_mat);
echo "
<div class='container' align='center'>
        
            <div style='width:55%'>
               
                <a href='grupos.php?id=".$fila_mat['id']."&materia=".$fila['id_materia']."&grado=".$fila['id_semestre']."&grupo=".$fila['id_grupo']."' class='thumbnail' style='background-color: #50aaff; color: black;'>
                    
                    <img src='img/materias/".$fila_mat['imagen']."' class='img-thumbnail' align='center' style='width:50%'>
                    
                    <p><h3 style='color:white;'>".$fila_mat['nombre']."</h3></p>                   
                </a>
                      
            </div>
            </div>";

}
echo "</table>";
?>
</div>