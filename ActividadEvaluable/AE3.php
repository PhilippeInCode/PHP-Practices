<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de bienvenida</title>
</head>
<body>
    <?php
    // Este if comprueba que se ha enviado el nombre, el país y la ciudad del formulario anterior
    if (!isset($_POST['nombre']) || !isset($_POST['pais']) || !isset($_POST['ciudad'])) {
        // El siguiente método header redirigirá a la página anterior si falta algún dato
        header("Location: AE1.php");
        exit();
    }

    $nombre = htmlspecialchars($_POST['nombre']); // Sanea el nombre para evitar inyección de código
    $pais = htmlspecialchars($_POST['pais']); // Sanea el país para evitar inyección de código
    $ciudad = htmlspecialchars($_POST['ciudad']); // Sanea la ciudad para evitar inyección de código

    echo "<h1>Bienvenidx, $nombre</h1>";
    echo "<p>Has seleccionado la ciudad de $ciudad en el país $pais.</p>";

    // Generar el enlace a la página de Wikipedia de la ciudad
    $urlWikipedia = "https://es.wikipedia.org/wiki/" . urlencode($ciudad);
    echo "<p><a href='$urlWikipedia' target='_blank'>Ver más sobre $ciudad en Wikipedia</a></p>";
    ?>

</body>
</html>
