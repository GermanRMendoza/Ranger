<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
    //se muestra el contenido de la página web
?>

        <form action='actualizar_foto.php' method='post' enctype='application/x-www-form-urlencoded'>
        <div class='form-group'>
              <label for='control2_contraseña'>Foto de perfil</label>
              <input type='file' name='datos_registrar_foto' class='form-control' id='control2_foto' required>
            </div>
            <button type='submit' class='btn btn-success btn-block'>Guardar</button>
          </form>";
}

?>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./');
}
?>