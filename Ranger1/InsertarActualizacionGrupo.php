<?php  
include "encabezado.inc";
include 'conexion.php';

$peticionActM = "UPDATE grupo SET id_carrera='".$_POST['carrera']."' WHERE id = '".$_GET['id']."'";
$resultadoActM = mysqli_query($conexion, $peticionActM);

$peticionActN = "UPDATE grupo SET id_semestre='".$_POST['semestre']."' WHERE id = '".$_GET['id']."'";
$resultadoActN = mysqli_query($conexion, $peticionActN);

$peticionActT = "UPDATE grupo SET id_grupo='".$_POST['grupo']."' WHERE id = '".$_GET['id']."'";
$resultadoActT = mysqli_query($conexion, $peticionActT);

$peticionActT = "UPDATE grupo SET id_materia='".$_POST['materia']."' WHERE id = '".$_GET['id']."'";
$resultadoActT = mysqli_query($conexion, $peticionActT);

$peticionActT = "UPDATE grupo SET id_profesor='".$_POST['profesor']."' WHERE id = '".$_GET['id']."'";
$resultadoActT = mysqli_query($conexion, $peticionActT);


?>