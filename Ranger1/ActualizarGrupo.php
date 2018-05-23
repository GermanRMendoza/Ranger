<?php
include "encabezado.inc";
include 'conexion.php';
mysqli_set_charset($conexion, "utf8");
$counter = 1;

$peticionT = "SELECT * FROM relacion_grupos";
$resultadoT = mysqli_query($conexion, $peticionT);


echo "<form action='InsertarActualizacionGrupo.php?id='".$_GET['id']." method='post' enctype='application/x-www-form-urlencoded' width='80%'>
<div class='container' align='center'>
        <div class='row'>
            <div class='col-md-12'>";

    $peticionC = "SELECT * FROM carreras";
	$resultadoC = mysqli_query($conexion, $peticionC);
	echo "<p><label>Carrera:</label>
			<select id='cmbCarrera' name='carrera'>";
	 while ($filaC = mysqli_fetch_array($resultadoC)) {
	 	echo "<option value=".$filaC['id'].">".$filaC['nombre']."</option>";
	 }echo "</select>";


	 $peticionS = "SELECT * FROM semestre";
	$resultadoS = mysqli_query($conexion, $peticionS);	
	echo "<p><label>Semestre:</label>
			<select id='cmbSemestre' name='semestre'>";
	 while ($filaS = mysqli_fetch_array($resultadoS)) {
	 	echo "<option value=".$filaS['id'].">".$filaS['numero']."</option>";
	 }echo "</select>";

	 $peticionG = "SELECT * FROM grupo";
	$resultadoG = mysqli_query($conexion, $peticionG);	
	echo "<p><label>Grupo:</label>
			<select id='cmbGrupo' name='grupo'>";
	 while ($filaG = mysqli_fetch_array($resultadoG)) {
	 	echo "<option value=".$filaG['id'].">".$filaG['letra']."</option>";
	 }echo "</select>";

	 $peticionM = "SELECT * FROM materias";
	$resultadoM = mysqli_query($conexion, $peticionM);	
	echo "<p><label>Materia:</label>
			<select id='cmbMateria' name='materia'>";
	 while ($filaM = mysqli_fetch_array($resultadoM)) {
	 	echo "<option value=".$filaM['id'].">".$filaM['nombre']."</option>";
	 }echo "</select>";

	 $peticionP = "SELECT * FROM profesores";
	$resultadoP = mysqli_query($conexion, $peticionP);	
	echo "<p><label>Profesor:</label>
			<select id='cmbProfesor' name='profesor'>";
	 while ($filaP = mysqli_fetch_array($resultadoP)) {
	 	echo "<option value=".$filaP['id'].">".$filaP['nombre']."</option>";
	 }echo "</select>";
                
            echo "</div>
            ";

            echo "<input type='submit' class='btn btn-primary btn-block' value='Guardar cambios'>
          </form>";