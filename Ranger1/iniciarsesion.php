<?php
//se lee la cookie de sesion

session_start();
//se establece una conexión a la base de datos
include 'conexion.php';
//se validarán los campos si la sesion aún no está abierta
if (empty($_SESSION) and isset($_POST['datos_introducidos_usuario'])){
    //se escaparán caracteres peligrosos
    $nombre_de_usuario=mysqli_real_escape_string($conexion,$_POST['datos_introducidos_usuario']);
    $contraseña_introducida=$_POST['datos_introducidos_contraseña'];
    //se hará la consulta a la base de datos
    if ($_POST['tipo'] == "profesor") {
        $consulta='select * from profesores where correo="'.$nombre_de_usuario.'"';
    }
    elseif ($_POST['tipo'] == "admin") {
        $consulta='select * from admin where correo="'.$nombre_de_usuario.'"';
    }

    $_SESSION['tabla'] = $_POST['tipo'];

    //si hubo un resultado
    if ($ejecución_de_la_consulta=$conexion->query($consulta)){
        //se obtiene la contraseña registrada
        $contraseña_guardada=$ejecución_de_la_consulta->fetch_assoc();
        //se compara la contraseña
        $verificar_contraseña=password_verify($contraseña_introducida,$contraseña_guardada['contrasena']);
        //si el resultado de la comparación ha sido verdadero
        if ($verificar_contraseña){
            //se asigna la sesión y redirecciona
            $_SESSION['name']=$contraseña_guardada['id'];
            /*echo "<center>";
            echo "<h1>Bienvenido ".$contraseña_guardada['columna_usuario']."</h1>";
            echo "<img src='photo/".$contraseña_guardada['columna_foto']."' width=100px>";
            echo "<br><a href='cerrar_sesion.php'><button width=100px>Cerrar sesión</button></a>";
            echo "<br><a href='cambiar_foto.php'><button width=100px>Cambiar foto de perfil</button></a>";
            echo "<br><a href='eliminar_cuenta.php'><button width=100px>Eliminar cuenta</button></a>";
            echo "</center>";*/
            echo "<script>
    window.location = 'home.php';
</script>";
        }//si la contraseña es incorrecta
        else{
            echo "<h1>La contraseña es incorrecta</h1>";
        }
    }//si el usuario no está registrado
    else{
        echo "<h1>El usuario no ha sido registrado</h1>";
    }
}//si hay una sesion abierta o no se enviaron datos
else{
    echo "<h1>Hay una sesión abierta o no se han enviado los datos</h1>";
    echo "<a href='cerrar_sesion.php'><button>Cerrar sesión actual</button></a>";
}
?>