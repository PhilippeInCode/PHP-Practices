<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Formativa de Maduración 2</title>
</head>
<body>
    <?php
    $usuarios = [
        "usuario1" => "contraseña1",
        "usuario2" => "contraseña2",
        "usuario3" => "contraseña3"
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario = trim($_POST['usuario']);
        $contrasena = trim($_POST['contrasena']);

        if (array_key_exists($usuario, $usuarios)) {
            if ($usuarios[$usuario] === $contrasena) {
                echo "<div class='mensaje bienvenida'>¡Bienvenido, $usuario!</div>";
            } else {
                echo "<div class='mensaje error'>La contraseña no es correcta.</div>";
            }
        } else {
            echo "<div class='mensaje error'>La cuenta de usuario no existe.</div>";
        }
    } else {
        echo "<div class='mensaje error'>Por favor, completa el formulario.</div>";
    }
    ?>
</body>
</html>
