<?php  
include "encabezado.inc";
include 'conexion.php';
mysqli_set_charset($conexion, "utf8");
$counter = 1;
$Asistencias = 0;
$Retardos = 0;
$Faltas = 0;
$Justificados = 0;
$id_relacion_grupo;

$PeticionGrupo5 = "SELECT * FROM relacion_grupos WHERE id_materia = ".$_GET['materia']. " AND id_semestre = ".$_GET['grado']." AND id_grupo = ".$_GET['grupo'];
$ResultadoGrupo5 = mysqli_query($conexion, $PeticionGrupo5);
$Grupo5 = mysqli_fetch_array($ResultadoGrupo5);

$id_relacion_grupo = $Grupo5['id'];

$PeticionGrupo = "SELECT * FROM alumno_grupo WHERE id_alumno = ".$_GET['idAlumno']." AND id_relacion_grupo = ".$id_relacion_grupo ;
$ResultadoGrupo = mysqli_query($conexion, $PeticionGrupo);
$Grupo = mysqli_fetch_array($ResultadoGrupo);

$id_relacion_grupo = $Grupo['id'];

$PeticionRegistro = "SELECT * FROM registro_asistencia WHERE id_alumno_grupo = ".$Grupo['id']."";
$ResultadoRegistro = mysqli_query($conexion, $PeticionRegistro);

$PeticionRegistroA = "SELECT * FROM registro_asistencia WHERE id_estado = '1'"." AND id_alumno_grupo = ".$id_relacion_grupo."";
$ResultadoRegistroA = mysqli_query($conexion, $PeticionRegistroA);
while ( $filaA = mysqli_fetch_array($ResultadoRegistroA)) {
    $Asistencias = $Asistencias + 1;
}



$PeticionRegistroF = "SELECT * FROM registro_asistencia WHERE id_estado = '2' AND id_alumno_grupo = ".$id_relacion_grupo."";
$ResultadoRegistroF = mysqli_query($conexion, $PeticionRegistroF);
while ( $filaF = mysqli_fetch_array($ResultadoRegistroF)) {
    $Faltas = $Faltas + 1;
}

$PeticionRegistroR = "SELECT * FROM registro_asistencia WHERE id_estado = '3' AND id_alumno_grupo = ".$id_relacion_grupo."";
$ResultadoRegistroR = mysqli_query($conexion, $PeticionRegistroR);
while ( $filaR = mysqli_fetch_array($ResultadoRegistroR)) {
    $Retardos = $Retardos + 1;
}

$PeticionRegistroJ = "SELECT * FROM registro_asistencia WHERE id_estado = '4' AND id_alumno_grupo = ".$id_relacion_grupo."";
$ResultadoRegistroJ = mysqli_query($conexion, $PeticionRegistroJ);
while ( $filaJ = mysqli_fetch_array($ResultadoRegistroJ)) {
    $Justificados = $Justificados + 1;
}

$peticion_alum = "SELECT * FROM alumno WHERE id = '".$_GET['idAlumno']."'";
$resultado_alum = mysqli_query($conexion, $peticion_alum);
$fila_alum = mysqli_fetch_array($resultado_alum);

$peticion_mat = "SELECT * FROM materias WHERE id = '".$_GET['materia']."'";
$resultado_mat = mysqli_query($conexion, $peticion_mat);
$fila_mat = mysqli_fetch_array($resultado_mat);

echo "<center><h2>Historial de asistencia de ".$fila_alum['nombre']." para la materia de ".$fila_mat['nombre']."</h2></center>";

echo "<br><div class='container' align='center'>";
echo "<table class='table' border=1>";

echo "<thead>";
echo "<tr>";
echo'<th><h3><b><p align='.'center'.'>'.'Día'.'</b></p></h3></h3></th>';
echo'<th><h3><b><p align='.'center'.'>'.'Fecha'.'</b></p></h3></th>';
echo'<th><h3><b><p align='.'center'.'>'.'Hora'.'</b></p></h3></th>';
echo'<th><h3><b><p align='.'center'.'>'.'Se marcó'.'</b></p></h3></th>';
echo "</tr>";
echo "</thead>";

while($Registro = mysqli_fetch_array($ResultadoRegistro)) {

$peticion_Nota = "SELECT * FROM estado WHERE id = '".$Registro['id_estado']."'";
$resultado_Nota = mysqli_query($conexion, $peticion_Nota);
$fila_Nota = mysqli_fetch_array($resultado_Nota);

$modulo = $counter%2;
    
    echo '<center><tr '; 

    if($modulo == 1) {
    	
    	echo "class='info'";

	}

     if($modulo == 0) {
    	
    } 
    
    echo'>';

    $Fecha = date("d/m/Y", $Registro['fecha']);
    $Hora = date("H:i:s", $Registro['fecha']);
    $Dia = date("D", $Registro['fecha']);

    echo '<td>';
    if ($Dia == "Mon") {
    	echo " <p align='center'> Lunes </p></td>";
    }
    if ($Dia == "Tue") {
    	echo " <p align='center'> Martes </p></td>";
    }
    if ($Dia == "Wed") {
    	echo " <p align='center'> Miércoles </p></td>";
    }
    if ($Dia == "Thu") {
    	echo " <p align='center'> Jueves </p></td>";
    }
    if ($Dia == "Fri") {
    	echo " <p align='center'> Viernes </p></td>";
    }
    if ($Dia == "Sat") {
    	echo " <p align='center'> Sábado </p></td>";
    }
    if ($Dia == "Sun") {
    	echo " <p align='center'> Domingo </p></td>";
    }
    echo "<td><p align='center'>".$Fecha.'</p></td>';
    echo "<td><p align='center'>".$Hora.'</p></td>';
    echo '<td><p align='.'center'.'>'.$fila_Nota['nombre'].'</p></td></tr>';
    $counter = $counter + 1;
}
?>


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <style type="text/css">

#container {
    height: 450px; 
    min-width: 310px; 
    max-width: 800px;
    margin: 0 auto;
}
        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Registros de Asistencia'
        },
        subtitle: {
            text: ''
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: ['Asistencias', 'Retardos', 'Faltas', 'Faltas justificadas']
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'Cantidad de registros',
            data: [<?php echo $Asistencias;?>, <?php echo $Retardos;?>, <?php echo $Faltas;?>, <?php echo $Justificados;?>]
        }]
    });
});
        </script>
        </div>
    
    <body>

<script src="js/highcharts.js"></script>
<script src="js/highcharts-3d.js"></script>
<script src="js/modules/exporting.js"></script>

<div class='container' align='center'>

        <div class='row'>
            <div id="container" class='col-md-6'>
            </div>
            <div class='col-md-6'>
            <h3><center>Notas del alumno:</center></h3>
            <br><br>
            <?php echo $Grupo['notas']?>
            <br><br><br><br>
            <?php echo "
            <a href='InsertarNota.php?id=".$Grupo['id']."'><input type='submit' class='btn btn-primary btn-block' value='Agregar nota'></a>";
            ?>
            </div>
        </div>
            <br>

    </body>
</html>