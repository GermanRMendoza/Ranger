<?php
include "encabezado.inc";
include 'conexion.php';
mysqli_set_charset($conexion, "utf8");
$counter = 1;

$peticionT = "SELECT * FROM relacion_grupos";
$resultadoT = mysqli_query($conexion, $peticionT);

echo "<div class='container' align='center'>";
		echo "<br><br><br><table class='table' border=1>";
		echo'<th><h4><b><p align='.'center'.'>'.'Carrera'.'</b></p></h4></th>';
		echo'<th><h4><b><p align='.'center'.'>'.'Semestre'.'</b></p></h4></th>';
		echo'<th><h4><b><p align='.'center'.'>'.'Grupo'.'</b></p></h4></th>';
		echo'<th><h4><b><p align='.'center'.'>'.'Materia'.'</b></p></h4></th>';
		echo'<th><h4><b><p align='.'center'.'>'.'Profesor asignado'.'</b></p></h4></th>';
		echo'<th><h4><b><p align='.'center'.'>'.'Opciones'.'</b></p></h4></th>';

while ($filaT = mysqli_fetch_array($resultadoT)) {

	$peticionC = "SELECT * FROM carreras WHERE id = ".$filaT['id_carrera']."";
	$resultadoC = mysqli_query($conexion, $peticionC);
	$filaC = mysqli_fetch_array($resultadoC);

	$peticionS = "SELECT * FROM semestre WHERE id = ".$filaT['id_semestre']."";
	$resultadoS = mysqli_query($conexion, $peticionS);
	$filaS = mysqli_fetch_array($resultadoS);

	$peticionG = "SELECT * FROM grupo WHERE id = ".$filaT['id_grupo']."";
	$resultadoG = mysqli_query($conexion, $peticionG);
	$filaG = mysqli_fetch_array($resultadoG);

	$peticionM = "SELECT * FROM materias WHERE id = ".$filaT['id_materia']."";
	$resultadoM = mysqli_query($conexion, $peticionM);
	$filaM = mysqli_fetch_array($resultadoM);

	$peticionP = "SELECT * FROM profesores WHERE id = ".$filaT['id_profesor']."";
	$resultadoP = mysqli_query($conexion, $peticionP);
	$filaP = mysqli_fetch_array($resultadoP);

	$modulo = $counter%2;
    
				    echo '<center><tr '; 

				    if($modulo == 1) {
				    	
				    	echo "class='info'";

					}

				     if($modulo == 0) {
				    	
				    } 
				    
				    echo'>';

				echo "<td><p align='center'>".$filaC['nombre'].'</p></td>';
			    echo "<td><p align='center'>".$filaS['numero'].'</p></td>';
			    echo '<td><p align='.'center'.'>'.$filaG['letra'].'</p></td>';
			    echo '<td><p align='.'center'.'>'.$filaM['nombre'].'</p></td>';
			    echo '<td><p align='.'center'.'>'.$filaP['nombre'].'</p></td>';
			    echo "<td><a href='ActualizarGrupo.php?id=".$filaT['id']."'>Actualizar-<img src='img/actualizar.jpg' width='10%'></a>   <a href='eliminarGrupo.php?id=".$filaT['id']."'>Eliminar-<img src='img/eliminar.jpg' width='10%'></a><a href='AgregarAlGrupo.php?id=".$filaT['id']."'>Agregar alumnos</a></td>
    				</tr>";

			    $counter = $counter + 1;

				}echo "</table>";

				echo "<a href='crearGrupo.php' class='thumbnail' style='background-color: #50aaff; color: black;'>                    
                    <p><h3 style='color:white;'>Crear nuevo grupo</h3></p>
                </a>";



?>