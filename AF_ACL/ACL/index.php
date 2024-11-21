<?php
session_start();

// Si ya está logueado, redirigir a la página protegida
if (isset($_SESSION["role_id"])) {
    header("Location: protected.php");
    exit;
}
?>

<!-- Aquí va el HTML del formulario de login -->
<form action="login.php" method="post">
    <div>
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username">
    </div>
    <div>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
    </div>
    <input type="submit" value="Iniciar sesión">
</form>

<?php if (isset($permissions) && in_array("edit_profile", $permissions)): ?>
    <!-- Mostramos el botón de edición del perfil -->
    <button>Editar perfil</button>
<?php endif; ?>
