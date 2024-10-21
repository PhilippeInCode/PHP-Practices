<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Global</title>
</head>
<body>
    <?php
    function concatena3 ($cad2) {
        global $cadena1;
        $cadena1 = $cadena1.$cad2;
    }
    $cadena1 = "Hola";
    $cadena2 = ", mundo";
    concatena3($cadena2);
    echo "<strong>Redefiniendo cadena1 como global: </strong> ";
    echo $cadena1. "<br/>";
    ?>
</body>
</html>