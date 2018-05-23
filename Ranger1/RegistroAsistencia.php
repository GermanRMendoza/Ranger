<?php  
include "encabezado.inc";
include 'conexion.php';

echo'<link href="css/bootstrap.min.css" rel="stylesheet">';
echo'<script type="text/javascript" src="js/bootstrap.min.js"></script>';
$counterR = 0;
$counter = 1;


mysqli_set_charset($conexion, "utf8");

$PeticionMateria = "SELECT * FROM materias WHERE id = ".$_GET['materia']."";
$ResultadoMateria = mysqli_query($conexion, $PeticionMateria);
$Materia = mysqli_fetch_array($ResultadoMateria);

$PeticionGrado = "SELECT * FROM semestre WHERE id = ".$_GET['grado']."";
$ResultadoGrado = mysqli_query($conexion, $PeticionGrado);
$Grado = mysqli_fetch_array($ResultadoGrado);

$PeticionGrupo = "SELECT * FROM grupo WHERE id = ".$_GET['grupo']."";
$ResultadoGrupo = mysqli_query($conexion, $PeticionGrupo);
$Grupo = mysqli_fetch_array($ResultadoGrupo);

echo "<center><h2>".$Materia['nombre']." ".$Grado['numero'].$Grupo['letra']."</h2></center>";

$peticionR = "SELECT * FROM alumno_grupo WHERE id_relacion_grupo = '".$_GET['id']."'";
$resultadoR = mysqli_query($conexion, $peticionR);

$peticion = "SELECT * FROM alumno_grupo WHERE id_relacion_grupo = '".$_GET['id']."'";
$resultado = mysqli_query($conexion, $peticion);

while($filaR = mysqli_fetch_array($resultadoR)) {
	$counterR++;
}

echo "<div class='container' align='center'>

 <form action='InsertarRegistroAsistencia.php?Rows=".$counterR."&Grupo=".$_GET['id']."&id=".$_GET['id']."&materia=".$_GET['materia']."&grado=".$_GET['grado']."&Ggrupo=".$_GET['grupo']."' method='post' enctype='application/x-www-form-urlencoded' width='80%'>";

echo "<table class='table' border=1>";

echo "<thead>";
echo "<tr>";
echo'<th><h4><p align='.'center'.'>'.'Matricula'.'</p></h4></th>';
echo'<th><h4><p align='.'center'.'>'.'Nombre'.'</p></h4></th>';
echo'<th><h4><p align='.'center'.'>'.'Registro'.'</p></h4></th>';
echo "</tr>";
echo "</thead>";

while($fila = mysqli_fetch_array($resultado)) {

$_SESSION['id_alumno_grupo'.$counter.''] = $fila['id'];

$peticion_alum = "SELECT * FROM alumno WHERE id = '".$fila['id_alumno']."'";
$resultado_alum = mysqli_query($conexion, $peticion_alum);
$fila_alum = mysqli_fetch_array($resultado_alum);


$modulo = $counter%2;
    
    echo '<tr '; 

    if($modulo == 1) {
    	
    	echo "class='info'";

	}

     if($modulo == 0) {
    	
    } 
    
    echo'>';
	echo'<td>'.$fila_alum['matricula'].'</td>';
	echo'<td>'.$fila_alum['nombre'].'</td>';
	echo"<td>
			<input type='radio' name='alumno".$counter."' value='1'> Asistencia
			<input type='radio' name='alumno".$counter."' value='3'> Retardo
			<input type='radio' name='alumno".$counter."' value='2'> Falta
			<input type='radio' name='alumno".$counter."' value='4'> Justificado
			</td>"; 

	echo "</tr>";
    
    $counter = $counter + 1;
}
echo "</table>";
echo "<input type='submit' class='btn btn-primary btn-block' value='Guardar registro'>
          </form></div>";
?>
</div>