<?php  
include "encabezado.inc";
include 'conexion.php';


echo'<link href="css/bootstrap.min.css" rel="stylesheet">';
echo'<script type="text/javascript" src="js/bootstrap.min.js"></script>';

mysqli_set_charset($conexion, "utf8");
$peticion_mat = "SELECT * FROM relacion_grupos WHERE id_materia = '".$_GET['id']."'";
$resultado = mysqli_query($conexion, $peticion_mat);

while($fila = mysqli_fetch_array($resultado)) {

	$peticion_sem = "SELECT * FROM semestre WHERE id = '".$fila['id_semestre']."'";
	$resultado_sem = mysqli_query($conexion, $peticion_sem);
	$fila_sem = mysqli_fetch_array($resultado_sem);

	$peticion_grup = "SELECT * FROM grupo WHERE id = '".$fila['id_grupo']."'";
	$resultado_grup = mysqli_query($conexion, $peticion_grup);
	$fila_grup = mysqli_fetch_array($resultado_grup);

echo "
<div class='container' align='center'>

        <div class='row'>
            <div class='col-md-12'>
                <a href='opciones.php?id=".$fila['id']."&materia=".$_GET['materia']."&grado=".$_GET['grado']."&grupo=".$_GET['grupo']."' class='thumbnail' style='background-color: #50aaff; color: black; width: 55%'>                    
                    <p><h3 style='color:white;'>".$fila_sem['numero'].$fila_grup['letra']."</h3></p>
                </a>
            </div>                          
            </div>
            </div>";

}
?>
</div>