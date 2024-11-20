<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de datos</h1>
    <form action="procesarDatosPOST.php" method="POST">
        <label for = "nombre">Nombre:</label>
        <input type = "text" id = "nombre" name = "nombre" required>
        <br>
        <label for = "edad">Edad:</label>
        <input type = "number" id = "edad" name = "edad" required>
        <br>
        <label for = "email">Email:</label>
        <input type = "text" id = "email" name = "email" required>
        <br>
        <label for = "telefono">Teléfono:</label>
        <input type = "number" id = "telefono" name = "telefono" required>
        <br>
        <button type = "submit">Enviar</button>
    </form>
</body>
</html>