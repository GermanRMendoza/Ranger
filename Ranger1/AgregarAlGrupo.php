<?php 
include "conexion.php";
include "encabezado.inc";
$counter = 1;

$peticionT = "SELECT * FROM alumno";
$resultadoT = mysqli_query($conexion, $peticionT);

echo "<div class='container' align='center'>";
		echo "<br><br><br><table class='table' border=1>";
		echo'<th><h4><b><p align='.'center'.'>'.'Matrícula'.'</b></p></h4></th>';
		echo'<th><h4><b><p align='.'center'.'>'.'Nombre'.'</b></p></h4></th>';
		echo'<th><h4><b><p align='.'center'.'>'.'Opciones'.'</b></p></h4></th>';
while ($filaT = mysqli_fetch_array($resultadoT)) {
				 
				 $modulo = $counter%2;
    
				    echo '<center><tr '; 

				    if($modulo == 1) {
				    	
				    	echo "class='info'";

					}

				     if($modulo == 0) {
				    	
				    } 
				    
				    echo'>';

				echo "<td><p align='center'>".$filaT['matricula'].'</p></td>';
			    echo "<td><p align='center'>".$filaT['nombre'].'</p></td>';
			    echo "<td><a href='InsertarGrupoAlumno.php?idAlumno=".$filaT['id']."&idGrupo=".$_GET['id']."'>Agregar</a></td>
    				</tr>";

			    $counter = $counter + 1;

				}echo "</table>";
?>