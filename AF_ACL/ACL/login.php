<?php
// login.php

// Conectar a la base de datos
require_once 'db_config.php';

// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consultar la base de datos para obtener el usuario
$query = "SELECT u.user_name, u.password, u.role_id, r.role_name 
          FROM users u 
          INNER JOIN roles r ON u.role_id = r.role_id 
          WHERE u.user_name = ?";

if ($stmt = $bbdd->prepare($query)) {
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Verificar si el usuario existe
    if ($row = $result->fetch_assoc()) {
        // Comparar la contraseña con el hash SHA-256 en la base de datos
        if (hash("sha256", $password) == $row['password']) {
            // Iniciar sesión
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['role_id'] = $row['role_id'];
            $_SESSION['role_name'] = $row['role_name'];

            // Guardar los datos en cookies
            setcookie("username", $username, time() + (86400 * 30), "/"); // 30 días
            setcookie("role", $row['role_name'], time() + (86400 * 30), "/");

            // Obtener permisos del rol
            $permissions_query = "SELECT p.permission_name 
                                   FROM role_permissions rp 
                                   INNER JOIN permissions p ON rp.permission_id = p.permission_id 
                                   WHERE rp.role_id = ?";
            if ($permissions_stmt = $bbdd->prepare($permissions_query)) {
                $permissions_stmt->bind_param("i", $row['role_id']);
                $permissions_stmt->execute();
                $permissions_result = $permissions_stmt->get_result();
                $permissions = [];
                while ($permission_row = $permissions_result->fetch_assoc()) {
                    $permissions[] = $permission_row['permission_name'];
                }
                
                // Guardar los permisos en cookies
                setcookie("permissions", json_encode($permissions), time() + (86400 * 30), "/");
            }

            // Redirigir a la página de respuesta
            header("Location: response.php");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
} else {
    echo "Error al consultar la base de datos.";
}
?>
