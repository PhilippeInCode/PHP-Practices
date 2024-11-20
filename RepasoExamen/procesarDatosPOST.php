<?php
if (isset($_COOKIE['nombre'], $_COOKIE['edad'], $_COOKIE['email'], $_COOKIE['telefono'])) {
    // Las cookies existen: saludamos al usuario y mostramos sus datos almacenados
    echo "¡Hola de nuevo, " . htmlspecialchars($_COOKIE['nombre']) . "!<br>";
    echo "Tus datos actuales son:<br>";
    echo "Edad: " . intval($_COOKIE['edad']) . " años<br>";
    echo "Email: " . htmlspecialchars($_COOKIE['email']) . "<br>";
    echo "Teléfono: " . htmlspecialchars($_COOKIE['telefono']) . "<br>";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recibir y sanitizar datos
    $nombre = htmlspecialchars($_POST['nombre']); // Sanitizar nombre para evitar XSS
    $edad = intval($_POST['edad']); // Convertir edad a entero
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitizar email
    $telefono = $_POST['telefono'];

    // Validar email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailValido = true;
    } else {
        $emailValido = false;
    }

    // Validar teléfono
    if (strlen($telefono) === 9 && ctype_digit($telefono)) {
        $telefonoValido = true;
    } else {
        $telefonoValido = false;
    }

    // Guardar los datos en cookies (válidas por una hora)
    setcookie("nombre", $nombre, time() + 3600, "/");
    setcookie("edad", $edad, time() + 3600, "/");
    setcookie("email", $email, time() + 3600, "/");
    setcookie("telefono", $telefono, time() + 3600, "/");

    // Mostrar resultados del formulario
    echo "¡Hola, $nombre!<br>";

    // Generar mensaje basado en la edad
    if ($edad % 2 == 0) {
        echo "Tienes $edad años, y tu edad es un número par.<br>";
    } else {
        echo "Tienes $edad años, y tu edad es un número impar.<br>";
    }

    // Mostrar validación del email
    if ($emailValido) {
        echo "El email $email es válido.<br>";
    } else {
        echo "El email ingresado no es válido. Inténtalo de nuevo.<br>";
    }

    // Mostrar validación del teléfono
    if ($telefonoValido) {
        echo "Se ha validado el teléfono: $telefono<br>";
    } else {
        echo "No se ha podido validar el teléfono. Introduzca un número de teléfono de 9 dígitos de longitud.<br>";
    }

    echo "<br>Los datos se han guardado en cookies.";
} else {
    // No se han enviado datos y no hay cookies
    echo "No hay datos almacenados en las cookies. Llena el formulario para guardar tu información.";
}
?>
