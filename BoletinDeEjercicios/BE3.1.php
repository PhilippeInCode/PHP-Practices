<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad Formativa 3</title>
</head>
<body>
    <?php
    if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['dni']) && isset($_POST['domicilio']) && isset($_POST['edad'])) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $apellidos = htmlspecialchars($_POST['apellidos']);
        $dni = htmlspecialchars($_POST['dni']);
        $domicilio = htmlspecialchars($_POST['domicilio']);
        $edad = htmlspecialchars($_POST['edad']);

        echo "<h2>Datos Personales:</h2>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Apellidos:</strong> $apellidos</p>";
        echo "<p><strong>DNI:</strong> $dni</p>";
        echo "<p><strong>Domicilio:</strong> $domicilio</p>";
        echo "<p><strong>Edad:</strong> $edad años</p>";
    } else {
        echo "<h2>No se recibieron todos los datos.</h2>";
    }
    ?>
</body>
</html>
