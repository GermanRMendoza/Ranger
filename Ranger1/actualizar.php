<?php
 include 'conexion.php';
$consulta='select * from nombre_tabla where id="'.$_GET['id'].'"';

if ($ejecución_de_la_consulta=$conexion->query($consulta))
{
        $fila=$ejecución_de_la_consulta->fetch_assoc();

 $contraseña=password_hash($_POST['pass'],PASSWORD_DEFAULT);

$peticion = "UPDATE nombre_tabla SET columna_usuario='".$_POST['user']."' WHERE id = '".$fila['id']."'";
$resultado = mysqli_query($conexion, $peticion);

$peticion = "UPDATE nombre_tabla SET columna_password='".$_POST['pass']."' WHERE id = '".$fila['id']."'";
$resultado = mysqli_query($conexion, $peticion);

$peticion = "UPDATE nombre_tabla SET columna_foto='".$_POST['foto']."' WHERE id = '".$fila['id']."'";
$resultado = mysqli_query($conexion, $peticion);
}
	header ('gestionar_usuarios.php');
mysqli_close($conexion);
?>