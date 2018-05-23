<?php
include "encabezado.inc";
include 'conexion.php';

mysqli_set_charset($conexion, "utf8");

$counter = 1;

$peticion = "SELECT * FROM materias";
$resultado = mysqli_query($conexion, $peticion);

echo "<center><h2>Materias</h2></center>";

echo "
<div class='container' align='center'>
        <div class='row'>
            <div class='col-md-6'>";
                
                echo "<br><br><br><table class='table' border=1>";
		echo'<th><h4><b><p align='.'center'.'>'.'Clave'.'</b></p></h4></th>';
		echo'<th><h4><b><p align='.'center'.'>'.'Nombre'.'</b></p></h4></th>';
		echo'<th><h4><b><p align='.'center'.'>'.'Imagen'.'</b></p></h4></th>';
		echo'<th><h4><b><p align='.'center'.'>'.'Opciones'.'</b></p></h4></th>';

	while ($fila = mysqli_fetch_array($resultado)) {
					$modulo = $counter%2;
    
				    echo '<center><tr '; 

				    if($modulo == 1) {
				    	
				    	echo "class='info'";

					}

				     if($modulo == 0) {
				    	
				    } 
				    
				    echo'>';

				echo "<td><p align='center'>".$fila['clave'].'</p></td>';
			    echo "<td><p align='center'>".$fila['nombre'].'</p></td>';
			    echo '<td><p align='.'center'.'><img src="img/materias/'.$fila['imagen'].'" width= "25%"></p></td>';

			    echo "<td><a href='actualizarMateria.php?id=".$fila['id']."'>Actualizar-<img src='img/actualizar.jpg' width='10%'></a>   <a href='eliminarMateria.php?id=".$fila['id']."'>Eliminar-<img src='img/eliminar.jpg' width='10%'></a></td>
    				</tr>";
			    $counter = $counter + 1;

				}echo "</table>";


          echo "</div>";   

            echo "<div class='col-md-6'>
            <br><br><br><br>
                <a href='AgregarMateria.php' class='thumbnail' style='background-color: #50aaff; color: black;'>                    
                    <p><h3 style='color:white;'>Agregar materia</h3></p>
                </a>
            </div>  ";

        echo "</div>
</div>";
?>