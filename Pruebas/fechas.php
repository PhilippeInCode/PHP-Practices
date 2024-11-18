<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Actual date: ";
    echo date("d-m-Y")."<br/>";
    echo "Date and actual hour: ";
    echo date ("d-m-Y\th:i:s")."<br/>";
    echo "Today is ";
    echo date("l").", ".date("d")." of ".date("F")." of ".date("Y")."<br/>";
    ?>
</body>
</html>