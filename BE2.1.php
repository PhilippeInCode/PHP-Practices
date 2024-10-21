<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de las Operaciones</title>
</head>
<body>
    <?php
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $num4 = $_POST['num4'];

        if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3) && is_numeric($num4)) {
            $num1 = (float)$num1;
            $num2 = (float)$num2;
            $num3 = (float)$num3;
            $num4 = (float)$num4;

            $suma = $num1 + $num3;
            $resta = $num2 - $num4;

            $numerosInvertidos = array($num4, $num3, $num2, $num1);

            echo "<h2>Resultados:</h2>";
            echo "<p>Suma del primero y el tercero: $suma</p>";
            echo "<p>Resta del segundo y el cuarto: $resta</p>";
            echo "<p>Números en orden inverso: " . implode(", ", $numerosInvertidos) . "</p>";
        } else {
            echo "<h2>Por favor, introduce valores numéricos válidos.</h2>";
        }
    } else {
        echo "<h2>No se recibieron los números.</h2>";
    }
    ?>
</body>
</html>
