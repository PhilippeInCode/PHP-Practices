<?php
session_start();

// Manejo del contador de visitas
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0; // Inicializar el contador si no existe
}
$_SESSION['contador']++; // Incrementar el contador de visitas

// Función para destruir la sesión
function destruirSesion() {
    session_unset(); // Limpiar variables de la sesión
    session_destroy(); // Destruir la sesión
    echo "<br>La sesión ha sido destruida correctamente.";
}

// Variables para controlar los mensajes
$mensajeSaludo = "";
$mensajeDatos = "";
$mensajeVisitas = "<br>Has visitado esta página " . $_SESSION['contador'] . " veces.<br>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir y sanitizar datos
    $nombre = htmlspecialchars($_POST['nombre']); // Sanitizar nombre para evitar XSS
    $edad = intval($_POST['edad']); // Convertir edad a entero
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitizar email
    $telefono = $_POST['telefono'];

    // Validar email
    $emailValido = filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;

    // Validar teléfono
    $telefonoValido = (strlen($telefono) === 9 && ctype_digit($telefono)) ? true : false;

    $_SESSION['nombre'] = $nombre;
    $_SESSION['edad'] = $edad;
    $_SESSION['email'] = $email;
    $_SESSION['telefono'] = $telefono;

    $mensajeSaludo = "¡Hola, $nombre!<br>";
    $mensajeDatos = "Tienes $edad años, y tu edad es un número " . ($edad % 2 == 0 ? "par" : "impar") . ".<br>";

    $mensajeDatos .= $emailValido 
        ? "El email $email es válido.<br>"
        : "El email ingresado no es válido. Inténtalo de nuevo.<br>";

    $mensajeDatos .= $telefonoValido 
        ? "Se ha validado el teléfono: $telefono<br>"
        : "No se ha podido validar el teléfono. Introduzca un número de teléfono de 9 dígitos de longitud.<br>";
} elseif (isset($_SESSION['nombre'], $_SESSION['edad'], $_SESSION['email'], $_SESSION['telefono'])) {
    $mensajeSaludo = "¡Hola de nuevo, " . htmlspecialchars($_SESSION['nombre']) . "!<br>";
    $mensajeDatos = "Tus datos actuales son:<br>";
    $mensajeDatos .= "Edad: " . intval($_SESSION['edad']) . " años<br>";
    $mensajeDatos .= "Email: " . htmlspecialchars($_SESSION['email']) . "<br>";
    $mensajeDatos .= "Teléfono: " . htmlspecialchars($_SESSION['telefono']) . "<br>";
} else {
    $mensajeSaludo = "No hay datos almacenados. Llena el formulario para guardar tu información.<br>";
}

// Mostrar mensajes
echo $mensajeSaludo;
echo $mensajeDatos;
echo $mensajeVisitas;

// Botón para destruir la sesión
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    destruirSesion();
}
?>

<!-- Formulario -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Sesiones</title>
</head>
<body>
    <h1>Formulario de datos</h1>
    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="?action=logout">Cerrar Sesión</a>
</body>
</html>
