<?php
require_once 'db_config.php';

function get_user_permissions($role_id) {
    global $bbdd;  

    // Consulta SQL para obtener los permisos del rol
    $query = "SELECT p.permission_name 
              FROM role_permissions rp 
              INNER JOIN permissions p ON rp.permission_id = p.permission_id 
              WHERE rp.role_id = ?";

    // Preparamos y ejecutamos la consulta
    if ($stmt = $bbdd->prepare($query)) {
        $stmt->bind_param("i", $role_id);  
        $stmt->execute();

        // Obtener los resultados
        $result = $stmt->get_result();
        $permissions = array();

        // Almacenamos los resultados en un array
        while ($row = $result->fetch_assoc()) {
            $permissions[] = $row['permission_name'];
        }

        // Cerramos la declaración
        $stmt->close();

        return $permissions;  
    } else {
        // En caso de error
        echo "Error al consultar los permisos: " . $bbdd->error;
        return array();  // Devolvemos un array vacío si ocurre un error
    }
}
