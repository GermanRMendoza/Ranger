<?php  
include "encabezado.inc";
include 'conexion.php';


echo'<link href="css/bootstrap.min.css" rel="stylesheet">';
echo'<script type="text/javascript" src="js/bootstrap.min.js"></script>';

echo "
<div class='container' align='center'>
        <div class='row'>
            <div class='col-md-6'>
                <a href='CRUDprofesores.php' class='thumbnail' style='background-color: #50aaff; color: black;'>                    
                    <p><h3 style='color:white;'>Profesores</h3></p>
                </a>
            </div>   

            <div class='col-md-6'>
                <a href='CRUDalumnos.php' class='thumbnail' style='background-color: #50aaff; color: black;'>                    
                    <p><h3 style='color:white;'>Alumnos</h3></p>
                </a>
            </div>                        
        </div>
</div>

<div class='container' align='center'>
        <div class='row'>
            <div class='col-md-6'>
                <a href='CRUDmaterias.php' class='thumbnail' style='background-color: #50aaff; color: black;'>                    
                    <p><h3 style='color:white;'>Materias</h3></p>
                </a>
            </div>   

            <div class='col-md-6'>
                <a href='CRUDgrupos.php' class='thumbnail' style='background-color: #50aaff; color: black;'>                    
                    <p><h3 style='color:white;'>Grupos</h3></p>
                </a>
            </div>                        
        </div>
</div>

<div class='container' align='center'>
        <div class='row'>
            <div class='col-md-6'>
                <a href='CRUDadministradores.php' class='thumbnail' style='background-color: #50aaff; color: black;'>                    
                    <p><h3 style='color:white;'>Administradores</h3></p>
                </a>
            </div>                         
        </div>
</div>

";
?>