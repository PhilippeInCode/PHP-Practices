<?php
if($_SERVER['REQUEST_METHOD'] === 'GET'){ // Esta comprobación se asegura que se accede con GET
    $nombre = htmlspecialchars($_GET['nombre']); // Sanitizar el nombre para evitar ataques de XSS
    $edad = intval($_GET['edad']); // Convierte la edad a un número entero

    if($edad % 2 == 0){
        echo "¡Hola, $nombre! Tu edad ($edad) es par";
    } else {
        echo "¡Hola, $nombre! Tu edad ($edad) es impar";
    }
}else {
    echo "No se han enviado datos.";
}
