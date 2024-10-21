<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad Formativa 3</title>
</head>
<body>
    <h2>Introduce tus datos personales:</h2>
    <form action="BE3.1.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" required>
        <br><br>
        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" required>
        <br><br>
        <label for="domicilio">Domicilio:</label>
        <input type="text" name="domicilio" id="domicilio" required>
        <br><br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
