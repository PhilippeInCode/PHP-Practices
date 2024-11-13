<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Diccionario</title>
</head>
<body>
    <h2>Diccionario Inglés-Español</h2>
    <form method="post">
        <label for="palabra">Introduzca la traducción en español de la siguiente palabra en inglés, (palabra) :</label>
        <p>
        <input type="text" name="palabra" id="palabra" required>
        <input type="submit" value="Traducir">
    </form>
    <?php
    $diccionario = array(
        "hello" => "hola",
        "goodbye" => "adiós",
        "please" => "por favor",
        "thank you" => "gracias",
        "sorry" => "perdón"
    );
    ?>
</body>
</html>