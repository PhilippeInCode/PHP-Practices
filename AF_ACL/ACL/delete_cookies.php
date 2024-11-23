<?php
// Eliminar las cookies
setcookie("username", "", time() - 3600, "/");
setcookie("role", "", time() - 3600, "/");
setcookie("permissions", "", time() - 3600, "/");

// Redirigir a la página de respuesta
header("Location: response.php");
exit();
?>

