<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad formativa 8</title>
</head>
<body>
    <?php
    function sacarElCuadrado($n) {
        return $n * $n;
    }

    function sacarElCubo($n) {
        return $n * $n * $n;
    }

    $dato = array_map(function() { return rand(0, 100); }, range(1, 12));

    $cuadrado = array_map("sacarElCuadrado", $dato);
    $cubo = array_map("sacarElCubo", $dato);
    ?>

    <h2>Tabla con números, con sus cuadrados, y con sus cubos</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Números</th>
                <th>Cuadrados</th>
                <th>Cubos</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dato as $index => $value) {
                echo "<tr>";
                echo "<td>$value</td>";
                echo "<td>$cuadrado[$index]</td>";
                echo "<td>$cubo[$index]</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>