<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad formativa de maduración 1</title>
</head>
<body>
    <?php
    $num = 5.18756;
    $truncado = bcdiv($num, 1, 3);
    
    echo "<h2>" . "El valor de " . $num . " truncando es: " . $truncado . "</h2>"
    ?>
</body>
</html>