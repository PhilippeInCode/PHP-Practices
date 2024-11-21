<?php
// Destruir la sesión
session_start();
session_unset();
session_destroy();

// Eliminar las cookies
setcookie("username", "", time() - 3600, "/");
setcookie("role", "", time() - 3600, "/");
setcookie("permissions", "", time() - 3600, "/");

// Redirigir al formulario de inicio de sesión
header("Location: index.php");
exit();
?>
