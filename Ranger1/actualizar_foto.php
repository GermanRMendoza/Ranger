<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
    //se muestra el contenido de la página web
?>
<?php
 include 'conexion.php';
$consulta='select * from nombre_tabla where id="'.$_SESSION['name'].'"';

if ($ejecución_de_la_consulta=$conexion->query($consulta))
{
        $fila=$ejecución_de_la_consulta->fetch_assoc();

$peticion = "UPDATE nombre_tabla SET columna_foto='".$_POST['datos_registrar_foto']."' WHERE id = '".$fila['id']."'";
$resultado = mysqli_query($conexion, $peticion);

	header ('location: home.php');
}

mysqli_close($conexion);
?>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./');
}
?>

