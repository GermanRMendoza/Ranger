<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
    //se muestra el contenido de la página web
?>
<table border=1>
<?php
include 'conexion.php';
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT * FROM nombre_tabla";
$resultado = mysqli_query($conexion, $peticion);

while($fila = mysqli_fetch_array($resultado)) {
	
    echo "<tr>";
	echo'<td>'.$fila['columna_usuario'].'</td>';
	echo'<td><img src=photo/'.$fila['columna_foto'].' width=50></td>';
	echo'<td><a href=FormAct.php?id='.$fila['id'].'><button>Modificar</button></td>';
	echo'<td><a href=eliminar_cuenta.php?id='.$fila['id'].'><button>Eliminar</button></td>';
	echo "</tr>";
	}

}
mysqli_close($conexion);
?>
</table>
