<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad formativa 4</title>
</head>
<body>
<?php

$array = array(1, 10, 5, 1, 5, 5, 8);

echo "<strong> Array original: </strong>";  
print_r($array);

$contador = array_count_values($array);

foreach ($contador as $valor => $conteo) {
    $texto = $conteo > 1 ? "veces" : "vez";
    echo "<p>El número $valor aparece $conteo $texto.<br/>";
}

?>
</body>
</html>
