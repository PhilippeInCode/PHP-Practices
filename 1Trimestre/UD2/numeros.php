<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
</head>
<body>
<?php

$numeros = [1, 10, 5, 1, 5, 5, 8];

$frecuencia = array_count_values($numeros);

foreach ($frecuencia as $numero => $conteo) {
    $texto = $conteo > 1 ? "veces" : "vez";
    echo "El número $numero aparece $conteo $texto.<br/>";
}

?>
</body>
</html>