<?php
session_start();

if (!isset($_SESSION['numbers'])) {
    $_SESSION['numbers'] = [];
}

if (isset($_POST['number'])) {
    $number = floatval($_POST['number']);
    
    if ($number >= 0) {
        $_SESSION['numbers'][] = $number;
    } else {
        $count = count($_SESSION['numbers']);
        $sum = array_sum($_SESSION['numbers']);
        $average = $count > 0 ? $sum / $count : 0;

        setcookie('average', $average, time() + (86400 * 30)); // 30 días

        $_SESSION['numbers'] = [];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <form method="post">
        <label>Introduce un número positivo (o un negativo para finalizar):</label><br>
        <input type="number" name="number" step="any" required>
        <button type="submit">Enviar</button>
    </form>

    <?php if (isset($average)): ?>
        <p>La media de los números introducidos es: <strong><?php echo $average; ?></strong></p>
    <?php endif; ?>
</body>
</html>
