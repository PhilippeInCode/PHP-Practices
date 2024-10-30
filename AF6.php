<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Formativa 6</title>
</head>
<body>
    <?php
    if (isset($_GET['mensaje'])) {
        $mensaje = strip_tags($_GET['mensaje']);
        echo "<h4>$mensaje</h4>";
    }
    ?>

    <form action="AF6.1.php" method="POST">
        <label for="user">User: </label>
        <input type="text" name="user" id="user" /><br/>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" /><br/>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST['user']) || !isset($_POST['password'])) {
            $mensaje = "Debes rellenar el formulario";
            header("location:AF6.php?mensaje=$mensaje");
            exit();
        }

        if (empty($_POST['user']) && empty($_POST['password'])) {
            $mensaje = "Debes rellenar un usuario y una contraseña";
            header("location:AF6.php?mensaje=$mensaje");
            exit();
        } elseif (empty($_POST['user'])) {
            $mensaje = "Debes introducir un usuario";
            header("location:AF6.php?mensaje=$mensaje");
            exit();
        } elseif (empty($_POST['password'])) {
            $mensaje = "Debes introducir una contraseña";
            header("location:AF6.php?mensaje=$mensaje");
            exit();
        }

        $users = [
            ["login" => "manuel", "password" => "1234"],
            ["login" => "miguel", "password" => "12345"],
            ["login" => "fernando", "password" => "12378"]
        ];

        $user = strip_tags($_POST['user']);
        $password = strip_tags($_POST['password']);

        function validarCr($user, $password, $users) {
            foreach ($users as $usuario) {
                if ($usuario["login"] === $user) {
                    if ($usuario["password"] === $password) {
                        echo "¡Bienvenido/a $user!";
                        return;
                    } else {
                        $mensaje = "La contraseña no es correcta";
                        header("location:AF6.php?mensaje=$mensaje");
                        exit();
                    }
                }
            }
            $mensaje = "La cuenta de usuario no existe";
            header("location:AF6.php?mensaje=$mensaje");
            exit();
        }

        validarCr($user, $password, $users);
    }
    ?>
</body>
</html>
