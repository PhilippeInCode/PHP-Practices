<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Formativa 1</title>
</head>
<body>
    <?php
    $pi = M_PI;
    $radio = 5;
    $superficie = $pi * ($radio**2);
    $longitud = 2 * $pi * $radio;
    $volumen = 4/3 * $pi * ($radio**3);
    
    echo "<h1>La superficie es: $superficie</h1>
    <h2>La longitud es: $longitud</h2>
    <h3>El volumen: $volumen</h3>"

    ?>  
</body>
</html>