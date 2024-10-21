<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Formativa de Maduración 2</title>
</head>
<body>
    <?php
    $fecha = "10 de marzo de 2022";
    $posDe1=strpos($fecha, "de"); 
    $posDe2=strrpos($fecha, "de"); 
    $dia1=substr($fecha, 0, $posDel-1); 
    $mes1=substr($fecha, $posDe1+3, $posDe2-$posDe1-3); 
    $anyo=substr($fecha, $posDe2+3); 

    $fecha2 = "5 de noviembre de 2021";
    $posDe1=strpos($fecha2, "de"); 
    $posDe2=strrpos($fecha2, "de"); 
    $dia2=substr($fecha2, 0, $posDel-1); 
    $mes2=substr($fecha2, $posDe1+3, $posDe2-$posDe1-3); 
    $anyo2=substr($fecha2, $posDe2+3);

    echo "<h3>Primera fecha: $fecha1 </h3>";
    echo "<strong>Día: </strong> $fecha1 </br>";


    ?>
</body>
</html>