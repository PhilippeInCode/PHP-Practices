<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>

    <?php

$servername = "localhost"; 
$username = "root";        
$password = "";            
$database = "agenda";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$conn->set_charset("utf8");

$nombre = ""; 
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['nombre']);

    $sql = "SELECT nombreContacto, apellidosContacto, tfnoContacto FROM agenda WHERE nombreContacto = '$nombre'";
    $query_result = $conn->query($sql);

    if ($query_result->num_rows > 0) {
        $contacto = $query_result->fetch_assoc();
        $resultado = "Nombre: " . $contacto['nombreContacto'] . " " . $contacto['apellidosContacto'] . "<br>Teléfono: " . $contacto['tfnoContacto'];
    } else {
        $resultado = "Contacto no encontrado";
    }
}

$conn->close();
    ?>
    <form method="post" action="">
        <label for="nombre">Nombre del contacto:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required>
        <button type="submit">Buscar</button>
    </form>
    <div>
        <strong>Resultado:</strong>
        <?php echo $resultado; ?>
    </div>
</body>
</html>