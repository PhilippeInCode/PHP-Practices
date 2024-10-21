<!-- BE4.1.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad Formativa 4</title>
</head>
<body>
    <?php
    // Incluir el archivo BE1.php que contiene la función sumar
    include 'sumar.php';

    // Verificar que se han recibido los datos del formulario
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Verificar que los datos sean numéricos
        if (is_numeric($num1) && is_numeric($num2)) {
            // Convertir los valores a números flotantes
            $num1 = (float)$num1;
            $num2 = (float)$num2;

            // Llamar a la función sumar del archivo BE1.php
            $suma = sumar($num1, $num2);
            echo "<h2>Resultado:</h2>";
            echo "<p>La suma de $num1 y $num2 es: $suma</p>";

            // Verificar si la suma es par o impar
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
