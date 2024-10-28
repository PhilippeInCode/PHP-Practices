<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad formativa 7 - Traducción</title>
</head>
<body>
    <h2>Traducción de palabras al español</h2>

    <?php
    session_start(); 

    include 'diccionario.php';

    function letrasAcento($text){
        $text = mb_strtolower($text, 'UTF-8');
        $text = str_replace(
            ['á', 'é', 'í', 'ó', 'ú', 'ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ'],
            ['a', 'e', 'i', 'o', 'u', 'n', 'a', 'e', 'i', 'o', 'u', 'n'],
            $text
        );
        return $text;
    }

    if (!isset($diccionario) || !is_array($diccionario)) {
        echo "<p>Error: No se pudo cargar el diccionario.</p>";
        exit();
    }

    if (!isset($_SESSION["palabras"])) {
        $palabrasAleatorias = array_rand($diccionario, 10); 
        $_SESSION["palabras"] = $palabrasAleatorias; 
    } else {
        $palabrasAleatorias = $_SESSION["palabras"]; 
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $respuestasUsuario = $_POST["traducciones"];
        $correctas = 0;
        $incorrectas = 0;

        foreach ($palabrasAleatorias as $index => $palabraIngles) {
            $traduccionCorrecta = letrasAcento(trim($diccionario[$palabraIngles])); 
            $traduccionUsuario = letrasAcento(trim($respuestasUsuario[$index])); 

            if ($traduccionUsuario == $traduccionCorrecta) {
                $correctas++;
            } else {
                $incorrectas++;
            }
        }

        echo "<h3>Resultados:</h3>";
        echo "<p>Respuestas correctas: $correctas</p>";
        echo "<p>Respuestas incorrectas: $incorrectas</p>";

        unset($_SESSION["palabras"]);
        echo "<a href=''>Jugar de nuevo</a>";
        exit();
    }
    ?>

    <form method="post">
        <h3>Traduce las siguientes palabras al español:</h3>
        <?php
        foreach ($palabrasAleatorias as $index => $palabraIngles) {
            echo "<label for='traduccion_$index'>$palabraIngles:</label>";
            echo "<input type='text' name='traducciones[$index]' id='traduccion_$index' required><br><br>";
        }
        ?>
        <input type="submit" value="Comprobar traducciones">
    </form>

</body>
</html>