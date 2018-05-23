<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['titulo']) and isset($_POST['nombre']) and isset($_POST['correo']) and isset($_POST['contrasena']))
{
    $titulo=mysqli_real_escape_string($conexion,$_POST['titulo']);
	$nombre=mysqli_real_escape_string($conexion,$_POST['nombre']);
	$correo=mysqli_real_escape_string($conexion,$_POST['correo']);
    $contrasena=password_hash($_POST['contrasena'],PASSWORD_DEFAULT);

    $ingresar=mysqli_query($conexion,'insert into profesores(titulo,nombre,correo,contrasena) values("'.$titulo.'","'.$nombre.'","'.$correo.'","'.$contrasena.'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
    //redirección
    header ('location: ./');
}//si no se enviaron datos
else{
    header ('location: ./');
}
?>