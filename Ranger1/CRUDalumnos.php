<?php
include "encabezado.inc";
include 'conexion.php';
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT * FROM alumno";
$resultado = mysqli_query($conexion, $peticion);

echo "<center><h2>Alumnos</h2></center>";

echo "
<br><br>
<div class='container' align='center'>
        <div class='row'>
            <div class='col-md-6'>
                
		<div class='formulario'>
		<label for='caja_busqueda'>Buscar</label>
		<input type='text' name='caja_busqueda' id='caja_busqueda'></input>
		<br><br>
		
	</div>

	<div id='datos'></div>

				"; 
				
					echo "

            </div>   

            <div class='col-md-6'>
            <br><br><br><br>
                <a href='AgregarAlumno.php' class='thumbnail' style='background-color: #50aaff; color: black;'>                    
                    <p><h3 style='color:white;'>Agregar alumno</h3></p>
                </a>
            </div>                        
        </div>
</div>
<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/main.js'></script>


";
?>