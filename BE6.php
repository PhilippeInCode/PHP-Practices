<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad formativa 6</title>
</head>
<body>
    <h2>Diccionario Inglés-Español de Felipe</h2>
    <form method="post">
        <label for="palabra">Introduce una palabra en inglés de las disponibles abajo:</label>
        <input type="text" name="palabra" id="palabra" required>
        <input type="submit" value="Traducir">
    </form>

    <?php

    $diccionario = array(
        "hello" => "hola",
        "goodbye" => "adiós",
        "please" => "por favor",
        "thank you" => "gracias",
        "sorry" => "lo siento",
        "yes" => "sí",
        "no" => "no",
        "man" => "hombre",
        "woman" => "mujer",
        "child" => "niño",
        "dog" => "perro",
        "cat" => "gato",
        "house" => "casa",
        "car" => "coche",
        "book" => "libro",
        "water" => "agua",
        "food" => "comida",
        "school" => "escuela",
        "teacher" => "profesor",
        "student" => "estudiante",
        "city" => "ciudad",
        "country" => "país",
        "day" => "día",
        "night" => "noche",
        "love" => "amor",
        "friend" => "amigo",
        "work" => "trabajo",
        "money" => "dinero",
        "family" => "familia",
        "happiness" => "felicidad"
    );

    // Mostrar las palabras disponibles en el diccionario
      echo "<h3>Palabras disponibles en el diccionario:</h3>";
      echo "<ul>"; 
      foreach (array_keys($diccionario) as $palabra) {
          echo "<li>$palabra</li>"; 
      }
      echo "</ul>"; // Fin de la lista

    // Comprobar si se ha enviado una solicitud POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la palabra introducida por el usuario
        $palabra = strtolower(trim($_POST["palabra"]));

        // Comprobar si la palabra existe en el diccionario
        if (array_key_exists($palabra, $diccionario)) {
            // Mostrar la traducción
            echo "<p>La traducción en español de <strong>'$palabra'</strong> es: <strong>" . $diccionario[$palabra] . "</strong></p>";
        } else {
            // Mensaje si la palabra no está en el diccionario
            echo "<p>La palabra <strong>'$palabra'</strong> no se encuentra en el diccionario.</p>";
        }
    }
    ?>
</body>
</html>
