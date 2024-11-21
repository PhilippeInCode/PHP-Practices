<?php
session_start();
require_once "functions.php";

// Comprobamos si el usuario ha iniciado sesión
if (!isset($_SESSION["username"])) {
    // Si no está logueado, lo redirigimos a index.php
    header("Location: index.php");
    exit;
}

// Obtenemos los permisos del usuario
$permissions = get_user_permissions($_SESSION["role_id"]);

// Verificamos si el usuario tiene el permiso necesario para ver el perfil
if (in_array("view_profile", $permissions)) {
    // Mostrar el contenido del perfil
    echo "<h1>Bienvenido a tu perfil, " . $_SESSION["username"] . "!</h1>";
    echo "<p>Tienes los permisos necesarios para ver esta página.</p>";
} else {
    // Si no tiene el permiso, mostramos un mensaje de error
    echo "<h1>No tienes permisos suficientes para ver este perfil.</h1>";
}
?>

