<?php
session_start(); 


if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = ""; 
}


if (isset($_POST['numero']) && count(explode(',', $_SESSION['numeros'])) < 9) {
    $numero = $_POST['numero'];

   
    if ($_SESSION['numeros'] !== "") {
        $_SESSION['numeros'] .= ","; 
    }
    $_SESSION['numeros'] .= $numero; 
}


$numerosIngresados = explode(',', $_SESSION['numeros']);
$cantidad = count($numerosIngresados);


$faltan = 9 - $cantidad;


if ($cantidad >= 9) {
    
    echo "<h2>Los números ingresados son:</h2>";
    echo "<p>" . $_SESSION['numeros'] . "</p>";

    
    $arrayNumeros = explode(',', $_SESSION['numeros']);
    echo "<h2>Array de números:</h2>";
    print_r($arrayNumeros); 

   
    session_destroy(); 
} else {
    echo "<h2>Faltan $faltan números por ingresar:</h2>";
    echo "<form action='BE5.1.php' method='post'>";
    echo "<label for='numero'>Número introducido:</label>";
    echo "<input type='number' name='numero' id='numero' required>";
    echo "<input type='hidden' name='numeros' value='" . $_SESSION['numeros'] . "'>";
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
}
?>
