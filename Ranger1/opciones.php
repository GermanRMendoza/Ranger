<?php  
include "encabezado.inc";
include 'conexion.php';


echo'<link href="css/bootstrap.min.css" rel="stylesheet">';
echo'<script type="text/javascript" src="js/bootstrap.min.js"></script>';

echo "
<div class='container' align='center'>

        <div class='row'>
            <div class='col-md-6'>
                <a href='RegistroAsistencia.php?id=".$_GET['id']."&materia=".$_GET['materia']."&grado=".$_GET['grado']."&grupo=".$_GET['grupo']."' class='thumbnail' style='background-color: #50aaff; color: black;'>                    
                    <p><h3 style='color:white;'>Registro de Asistencia</h3></p>
                </a>
            </div>   

            <div class='col-md-6'>
                <a href='estadisticas.php?id=".$_GET['id']."&materia=".$_GET['materia']."&grado=".$_GET['grado']."&grupo=".$_GET['grupo']."' class='thumbnail' style='background-color: #50aaff; color: black;'>                    
                    <p><h3 style='color:white;'>Estadísticas del grupo</h3></p>
                </a>
            </div>                        
            </div>
            </div>";
?>