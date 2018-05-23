<?php
include "encabezado.inc";

?>
<div class='container' align='center'>
<form action="iniciarsesion.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control1_nombre">Tipo de usuario</label><br>
              <input type="radio" name="tipo" value="admin" checked="" /><label>Administrador</label><br>
              <input type="radio" name="tipo" value="profesor"/><label>Profesor</label>
            </div>
            <div class="form-group">
              <label for="control1_nombre">Usuario</label>
              <input type="text" name="datos_introducidos_usuario" class="form-control" id="control1_nombre" placeholder="Usuario" required>
            </div>
            <div class="form-group">
              <label for="control1_contraseña">Contraseña</label>
              <input type="password" name="datos_introducidos_contraseña" class="form-control" id="control1_contraseña" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
          </form>
