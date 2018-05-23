<?php 
$newID = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo "<form action=actualizar.php?id=".$newID." method='post'>
	<input type='text' name='user' placeholder='Nuevo nombre de usuario' required=''>
	<input type='password' name='pass' placeholder='Nueva contraseña' required=''>
	<input type='file' name='foto'>Selecciona una foto
	<input type='submit' name='btnNew' value='Guardar'>";
	?>
</form>
</body>
</html>