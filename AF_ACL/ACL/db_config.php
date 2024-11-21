<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'felipe_bbdd';

//Conexión con la BBDD
$bbdd = new mysqli($db_host, $db_user, $db_pass, $db_name);

//Verificar la conexión
if ($bbdd->connect_error){
    die('Error de conexión a la base de datos: ' . $bbdd->connect_error);
}
?>