<?php
session_start(); // Iniciar la sesión para almacenar datos entre peticiones

// Verificar si ya existe una cadena de números en la sesión
if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = ""; // Inicializar la cadena si no existe
}

// Obtener el número ingresado del formulario
if (isset($_POST['numero']) && count(explode(',', $_SESSION['numeros'])) < 9) {
    $numero = $_POST['numero'];

    // Añadir el número a la cadena, separándolo por comas
    if ($_SESSION['numeros'] !== "") {
        $_SESSION['numeros'] .= ","; // Añadir una coma solo si ya hay números
    }
    $_SESSION['numeros'] .= $numero; // Concatenar el nuevo número
}

// Contar cuántos números se han ingresado
$numerosIngresados = explode(',', $_SESSION['numeros']);
$cantidad = count($numerosIngresados);

// Calcular cuántos números faltan por ingresar
$faltan = 9 - $cantidad;

// Comprobar si ya se han ingresado 9 números
if ($cantidad >= 9) {
    // Si ya hay 9 números, procesar y mostrar el resultado
    echo "<h2>Los números ingresados son:</h2>";
    echo "<p>" . $_SESSION['numeros'] . "</p>";

    // Convertir la cadena en un array
    $arrayNumeros = explode(',', $_SESSION['numeros']);
    echo "<h2>Array de números:</h2>";
    print_r($arrayNumeros); // Mostrar el array

    // Reiniciar la sesión o redirigir a una nueva página si es necesario
    session_destroy(); // Eliminar los datos de la sesión
} else {
    // Si no se han ingresado 9 números, mostrar el formulario de nuevo
    echo "<h2>Faltan $faltan números por ingresar:</h2>";
    echo "<form action='BE5.1.php' method='post'>";
    echo "<label for='numero'>Número introducido:</label>";
    echo "<input type='number' name='numero' id='numero' required>";
    echo "<input type='hidden' name='numeros' value='" . $_SESSION['numeros'] . "'>";
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
}
?>
