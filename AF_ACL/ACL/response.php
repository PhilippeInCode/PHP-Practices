<?php
// response.php

// Iniciar sesión
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['username'])) {
    echo "No has iniciado sesión.";
    exit();
}

// Mostrar los datos del usuario
echo "<h1>Bienvenido, " . $_SESSION['username'] . "!</h1>";
echo "<p>Rol: " . $_SESSION['role_name'] . "</p>";

// Mostrar los permisos almacenados en las cookies
$permissions = json_decode($_COOKIE['permissions'], true);
echo "<h2>Permisos:</h2>";
echo "<ul>";
foreach ($permissions as $permission) {
    echo "<li>" . $permission . "</li>";
}
echo "</ul>";

// Botones para borrar cookies y cerrar sesión
echo '<form action="logout.php" method="post">
        <input type="submit" name="logout" value="Cerrar sesión">
      </form>';
echo '<form action="delete_cookies.php" method="post">
        <input type="submit" name="delete_cookies" value="Eliminar cookies">
      </form>';
?>
