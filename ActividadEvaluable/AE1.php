<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía Turística</title>
</head>
<body>
    <?php
    echo "<h1>Guía turística</h1>";
    echo "<h3>Rellene los siguientes datos:</h3>";

    // Esto es un array de países para seleccionar en el formulario
    $paises = array("España", "Francia", "Italia", "Alemania", "Portugal", "Grecia", "Reino Unido", "Holanda", "Bélgica", "Suiza", "Suecia", "Dinamarca", "Noruega");

    ?>

    <form action="AE2.php" method="POST">
        <!-- Input para el nombre del usuario -->
        <label for="nombre">Nombre (Debe empezar por mayúscula y sin números o caracteres especiales):</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <!-- Dropdown para seleccionar el país -->
        <label for="pais">Seleccione el país:</label><br>
        <select id="pais" name="pais" required>
            <?php
            // Este foreach carga cada país como una opción en el dropdown
            foreach ($paises as $pais) {
                echo "<option value='$pais'>$pais</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    // El siguiente método valida el nombre introducido por el usuario
    function validarNombre($nombre) {
        // El método preg_match comprueba que el nombre no contiene números ni caracteres especiales y empieza por mayúscula
        return preg_match("/^[A-Z][a-zA-Z]*$/", $nombre);
    }
    ?>

</body>
</html>
