<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Actividad Formativa 1</title>
</head>
<body>
<h3>Validación de datos usuario</h1>
<body>
<?php
session_start();
if(isset($_SESSION['mensaje'])) {
    $mensaje=strip_tags($_SESSION['mensaje']);
    echo "<h4>$mensaje</h4>";
}
?>
<form action="af1_valida.php" method="POST">
Nombre: <input type="text" name="nombre"/><br />
Apellidos: <input type="text" name="apellidos"/><br />
Dirección: <input type="text" name="direccion"/><br />
Población: <input type="text" name="poblacion"/><br />
Género: Masculino <input type="radio" name="genero" value="masculino"/>
Femenino <input type="radio" name="genero" value="femenino"/><br/>
He leído y acepto las condiciones de la página web
<input type="checkbox" name="acepto"/><br/>
<input type="submit" value="Enviar">
</form>
</body>
</html>