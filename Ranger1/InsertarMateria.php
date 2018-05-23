<?php
include "encabezado.inc";
include 'conexion.php';

$id= null;

$ingresar=mysqli_query($conexion,'insert into materias(id,nombre,clave,imagen) values("'.$id.'","'.$_POST['nombre'].'","'.$_POST['clave'].'","'.$_POST['imagen'].'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));

echo "<script>
    window.location = 'CRUDmaterias.php';
</script>";
?>
