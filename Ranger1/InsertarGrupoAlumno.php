<?php
include "conexion.php";
include "encabezado.inc";

$id= null;

$ingresar=mysqli_query($conexion,'insert into alumno_grupo(id,id_relacion_grupo,id_alumno,notas) values("'.$id.'","'.$_GET['idGrupo'].'","'.$_GET['idAlumno'].'","No hay notas para el alumno")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));

echo "<script>
    window.location = 'AgregarAlGrupo.php?id=".$_GET['idGrupo']."';
</script>";

?>