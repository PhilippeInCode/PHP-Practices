<?php
session_start();

if (!isset($_SESSION['odd_numbers'])) {
    $_SESSION['odd_numbers'] = [];
}
if (!isset($_SESSION['max_even'])) {
    $_SESSION['max_even'] = PHP_INT_MIN; 
}

$odd_average = null; 
$max_even = null;

if (isset($_POST['number'])) {
    $number = intval($_POST['number']);

    if ($number >= 0) {
        if ($number % 2 == 0) {
            $_SESSION['max_even'] = max($_SESSION['max_even'], $number);
        } else {
            $_SESSION['odd_numbers'][] = $number;
        }
    } else {
        $odd_count = count($_SESSION['odd_numbers']);
        $odd_sum = array_sum($_SESSION['odd_numbers']);
        $odd_average = $odd_count > 0 ? $odd_sum / $odd_count : 0;

        setcookie('odd_average', $odd_average, time() + (86400 * 30)); 
        setcookie('max_even', $_SESSION['max_even'], time() + (86400 * 30)); 

        $max_even = $_SESSION['max_even'];

        $_SESSION['odd_numbers'] = [];
        $_SESSION['max_even'] = PHP_INT_MIN;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <form method="post">
        <label>Introduce un número (o un negativo para finalizar):</label><br>
        <input type="number" name="number" required>
        <button type="submit">Enviar</button>
    </form>

    <?php if ($odd_average !== null && $max_even !== null): ?>
        <p>Media de los números impares: <strong><?php echo $odd_average; ?></strong></p>
        <p>Mayor de los números pares: <strong><?php echo $max_even; ?></strong></p>
    <?php elseif (isset($_COOKIE['odd_average']) && isset($_COOKIE['max_even'])): ?>
        <p>Última media de impares: <strong><?php echo $_COOKIE['odd_average']; ?></strong></p>
        <p>Último mayor de pares: <strong><?php echo $_COOKIE['max_even']; ?></strong></p>
    <?php endif; ?>
</body>
</html>
