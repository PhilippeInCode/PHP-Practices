<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $idioma = $_POST['idioma'];
    if ($idioma == "es") {
        $bienvenida = "Tu nombre completo es";
    } elseif ($idioma == "en") {
        $bienvenida = "Your full name is";
    }
    echo $bienvenida . " " . $_POST['nombre'] . " " . $_POST["apellidos"] . "<br/>";

    echo "Hola, " . $_POST['nombre'] . " " . $_POST["apellidos"] . "<br/>";
    echo "Tus intereses son: <br/>";
    if (isset($_POST['intereses']) && is_array($_POST['intereses'])) {
        foreach ($_POST['intereses'] as $valor) {
            echo "- " . $valor . "<br/>";
        }
    } else {
        echo "No se han seleccionado intereses.";
    }
    ?>
</body>
</html>
