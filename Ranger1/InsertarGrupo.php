<?php
include "encabezado.inc";
include 'conexion.php';

$id= null;

$ingresar=mysqli_query($conexion,'insert into relacion_grupos(id,id_carrera,id_semestre,id_grupo,id_materia,id_profesor) values("'.$id.'","'.$_POST['carrera'].'","'.$_POST['semestre'].'","'.$_POST['grupo'].'","'.$_POST['materia'].'","'.$_POST['profesor'].'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));

echo "<script>
    window.location = 'CRUDgrupos.php';
</script>";
?>
