<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad formativa 5</title>
</head>
<body>
    <h2>Introduzca 9 números uno a uno:</h2>
    <form action="BE5.1.php" method="post">
        <label for="numero">Número introducido:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="hidden" name="numeros" value="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>