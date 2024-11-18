<?php
session_start();
if(!isset($_SESSION['nombre'])) {
    // comprobamos que se han validado los datos
    // y se han guardado en las variables de sesión
    $_SESSION["mensaje"]="Debes rellenar el formulario";
    header("location:af11.php");
}
else {
    // se supone que todo ha ido correcto si llegamos aquí
    $nombre=strip_tags($_SESSION['nombre']);
    $apellidos=strip_tags($_SESSION['apellidos']);
    $genero=strip_tags($_SESSION['genero']);
    $bienvenida=($genero=="masculino"?"Bienvenido, ":"Bienvenida, ");
    echo $bienvenida.$nombre." ".$apellidos;
}
?>