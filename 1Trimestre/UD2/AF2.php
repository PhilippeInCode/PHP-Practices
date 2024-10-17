<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Formativa 2</title>
</head>
<body>
    <?php
    $cadena = "Bienvenido a mi página web.";

    $primeraLetra = $cadena[0];

    $ultimaLetra = $cadena[strlen($cadena) - 2];
    
    echo "<strong>La primera letra es: $primeraLetra y la última letra es: $ultimaLetra</strong>";
    ?>
</body>
</html>
