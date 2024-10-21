<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la Suma</title>
</head>
<body>
    <?php
    include 'suma.php'; 

    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if (is_numeric($num1) && is_numeric($num2)) {
            $num1 = (float)$num1;
            $num2 = (float)$num2;

            $suma = sumar($num1, $num2);
            echo "<h2>Resultado:</h2>";
            echo "<p>La suma de $num1 y $num2 es: $suma</p>";

            if ($suma % 2 == 0) {
                echo "<p>La suma es un número <strong>par</strong>.</p>";
            } else {
                echo "<p>La suma es un número <strong>impar</strong>.</p>";
            }
        } else {
            echo "<h2>Por favor, introduce valores numéricos válidos.</h2>";
        }
    } else {
        echo "<h2>No se recibieron los números.</h2>";
    }
    ?>
</body>
</html>
