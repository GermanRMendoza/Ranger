<?php
	include "conexion.php";
    $counter = 1;
    echo'<link href="css/bootstrap.min.css" rel="stylesheet">';
    echo'<script type="text/javascript" src="js/bootstrap.min.js"></script>';
    $salida = "";

    $query = "SELECT * FROM alumno";

    if (isset($_POST['consulta'])) {
    	$q = $conexion->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM alumno WHERE matricula LIKE '%$q%' OR nombre LIKE '%$q%' OR telefono_contacto LIKE '%$q%'";
    }

    $resultado = $conexion->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='table'>
    			<thead>
    				<tr>
    	<th><h5><b><p align='center'>Matrícula</b></p></h3></h5></th>
        <th><h5><b><p align='center'>Nombre</b></p></h5></th>
        <th><h5><b><p align='center'>Teléfono de contacto</b></p></h5></th>
        <th><h5><b><p align='center'>Opciones</b></p></h5></h5></th>
    				</tr>

    			</thead>
    			

    	";

    	while ($fila = $resultado->fetch_assoc()) {
        $modulo = $counter%2;

    		$salida.="<tr ";

            if($modulo == 1) {
        
        $salida.="class='info'";

    }

     if($modulo == 0) {
        
    } 
    $salida.="'>
    			<td>".$fila['matricula']."</td>
    			<td>".$fila['nombre']."</td>
    			<td>".$fila['telefono_contacto']."</td>
                <td><a href='actualizarAlumno.php?id=".$fila['id']."'>Actualizar-<img src='img/actualizar.jpg' width='10%'></a>   <a href='eliminarAlumno.php?id=".$fila['id']."'>Eliminar-<img src='img/eliminar.jpg' width='10%'></a></td>
    				</tr>";
        $counter = $counter + 1;
    	}
    	$salida.="</table>";
    }else{
    	$salida.="El alumno no ha sido registrado";
    }


    echo $salida;

    $conexion->close();



?>