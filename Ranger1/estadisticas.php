<?php  
include "encabezado.inc";
include 'conexion.php';

echo'<link href="css/bootstrap.min.css" rel="stylesheet">';
echo'<script type="text/javascript" src="js/bootstrap.min.js"></script>';
echo'<script type="text/javascript" src="js/jquery.min.js"></script>';

mysqli_set_charset($conexion, "utf8");

$counter = 1;
$counterReg = 0;
$PorcentajeTotal = 0;
$PorcentajeGrupo = 0;

$PeticionMateria = "SELECT * FROM materias WHERE id = ".$_GET['materia']."";
$ResultadoMateria = mysqli_query($conexion, $PeticionMateria);
$Materia = mysqli_fetch_array($ResultadoMateria);

$PeticionGrado = "SELECT * FROM semestre WHERE id = ".$_GET['grado']."";
$ResultadoGrado = mysqli_query($conexion, $PeticionGrado);
$Grado = mysqli_fetch_array($ResultadoGrado);

$PeticionGrupo = "SELECT * FROM grupo WHERE id = ".$_GET['grupo']."";
$ResultadoGrupo = mysqli_query($conexion, $PeticionGrupo);
$Grupo = mysqli_fetch_array($ResultadoGrupo);

echo "<center><h2>".$Materia['nombre']." ".$Grado['numero'].$Grupo['letra']."</h2></center>";

$peticion = "SELECT * FROM alumno_grupo WHERE id_relacion_grupo = '".$_GET['id']."'";
$resultado = mysqli_query($conexion, $peticion);

$peticionEs = "SELECT * FROM alumno_grupo WHERE id_relacion_grupo = '".$_GET['id']."'";
$resultadoEs = mysqli_query($conexion, $peticionEs);
$filaEs = mysqli_fetch_array($resultadoEs);

$counterAlum = $filaEs['id'];

$peticionReg = "SELECT * FROM registro_asistencia WHERE id_alumno_grupo = '".$counterAlum."'";
$resultadoReg = mysqli_query($conexion, $peticionReg);

while($filaReg = mysqli_fetch_array($resultadoReg)) {
$counterReg++;
}

echo "<div class='container' align='center'>
 <div class='row'>
            <div class='col-md-6'>";

echo "<table class='table' border=1>";

echo "<thead>";
echo "<tr>";
echo'<th><h4><p align='.'center'.'>'.'Matricula'.'</p></h4></th>';
echo'<th><h4><p align='.'center'.'>'.'Nombre'.'</p></h4></th>';
echo'<th><h4><p align='.'center'.'>'.'Porcentaje de asistencia'.'</p></h4></th>';
echo'<th><h4><p align='.'center'.'>'.'Opciones'.'</p></h4></th>';
echo "</tr>";
echo "</thead>";

while($fila = mysqli_fetch_array($resultado)) {

$counterUnit = 0;

$peticion_alum = "SELECT * FROM alumno WHERE id = '".$fila['id_alumno']."'";
$resultado_alum = mysqli_query($conexion, $peticion_alum);
$fila_alum = mysqli_fetch_array($resultado_alum);

    $peticionUnit = "SELECT * FROM registro_asistencia WHERE id_alumno_grupo = '".$counterAlum."'";
    $resultadoUnit = mysqli_query($conexion, $peticionUnit);

    while($filaUnit = mysqli_fetch_array($resultadoUnit)) {
        if ($filaUnit['id_estado'] == 1) {
            $counterUnit = $counterUnit + 1;
        }
        if ($filaUnit['id_estado'] == 2) {
            $counterUnit = $counterUnit + 0.33;
        }
    }

$porcentajeAsistencia = ($counterUnit / $counterReg)*100;

$PorcentajeTotal = $PorcentajeTotal + $porcentajeAsistencia;

$modulo = $counter%2;
    
    echo '<tr '; 

    if($modulo == 1) {
        if ($porcentajeAsistencia<80) {
            echo "class='danger'";
        }
        else{
        echo "class='info'";
        }

    }

     if($modulo == 0) {
        if ($porcentajeAsistencia<80) {
            echo "class='danger'";
        }
        else{
        }
    } 

    echo'>';

    echo'<td>'.$fila_alum['matricula'].'</td>';
    echo'<td>'.$fila_alum['nombre'].'</td>';
    echo"<td>
            ".$porcentajeAsistencia."%
            </td>"; 
    echo'<td><a href="HistorialAlumno.php?idAlumno='.$fila_alum['id'].'&materia='.$_GET['materia'].'&grado='.$_GET['grado'].'&grupo='.$_GET['grupo'].'"<button>Historial</button></td>';

    echo "</tr>";
    
    $counter = $counter + 1;
    $counterAlum = $counterAlum + 1;
}
echo "</table></div>";
$PorcentajeGrupo = $PorcentajeTotal/($counter-1);

echo "<div id='container' class='col-md-6'>";

?>

<!DOCTYPE HTML>
<html>
    
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <style type="text/css">

        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Porcentaje de Asistencia del Grupo'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Porcentaje',
            data: [
                
                ['Asistencia', <?php echo $PorcentajeGrupo; ?>],
                {
                    name: 'Faltas',
                    y: <?php echo 100-$PorcentajeGrupo; ?>,
                    sliced: true,
                    selected: true
                }
            ]
        }]
    });
});


        </script>
    </head>
    <body>
<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>

    </body>
</html>
