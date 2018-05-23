<?php
include "encabezado.inc";
include 'conexion.php';

$id= null;

$ingresar=mysqli_query($conexion,'insert into alumno(id,matricula,nombre,telefono_contacto) values("'.$id.'","'.$_POST['matricula'].'","'.$_POST['nombre'].'","'.$_POST['telefono'].'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));

echo "<script>
    window.location = 'CRUDalumnos.php';
</script>";
?>
