<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la Suma</title>
</head>
<body>
    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        if (is_numeric($num1) && is_numeric($num2)) {
            $resultado = $num1 + $num2;
            echo "<h2>El resultado de sumar $num1 y $num2 es: $resultado</h2>";
        } else {
            echo "<h2>Por favor, introduce valores numéricos válidos.</h2>";
        }
    } else {
        echo "<h2>No se recibieron los números.</h2>";
    }
    ?>
</body>
</html>
