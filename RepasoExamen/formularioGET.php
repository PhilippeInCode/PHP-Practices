<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de datos</h1>
    <form action="procesarDatosGET.php" method="GET">
        <label for = "nombre">Nombre:</label>
        <input type = "text" id = "nombre" name = "nombre" required>
        <br>
        <label for = "edad">Edad:</label>
        <input type = "number" id = "edad" name = "edad" required>
        <br>
        <button type = "submit">Enviar</button>
    </form>
</body>
</html>