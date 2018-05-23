<?php  
include "encabezado.inc";
include 'conexion.php';

$peticion_g = "SELECT * FROM registro_grupo WHERE id_relacion_grupos = '".$_GET['Grupo']."'";
$resultado_g = mysqli_query($conexion, $peticion_g);
$fila_g = mysqli_fetch_array($resultado_g);

echo $fila_g['id'];

for ($i=1; $i <= $_GET['Rows']; $i++) { 

	$id= null;

	$ingresar=mysqli_query($conexion,'insert into registro_asistencia(id,id_alumno_grupo,id_estado,fecha) values("'.$id.'","'.$_SESSION['id_alumno_grupo'.$i.''].'","'.$_POST['alumno'.$i.''].'","'.date("U").'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
}

$Registros = $fila_g['total_registros']+1;

$peticionAct = "UPDATE registro_grupo SET total_registros='".$Registros."' WHERE id = '".$_GET['Grupo']."'";
$resultadoAct = mysqli_query($conexion, $peticionAct);
echo "<script>
    window.location = 'estadisticas.php?id=".$_GET['id']."&materia=".$_GET['materia']."&grado=".$_GET['grado']."&grupo=".$_GET['Ggrupo']."';
</script>";
?>