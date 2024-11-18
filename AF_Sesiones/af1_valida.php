<?php
// iniciamos sesión
session_start();
if(!isset($_POST['nombre'])) {
    // comprueba que se han mandado datos
    $_SESSION["mensaje"]="Debes rellenar el formulario";
    header("location:af11.php");
}
elseif(empty($_POST['nombre']) ||
   empty($_POST['apellidos']) || 
   empty($_POST['direccion']) ||
   empty($_POST['poblacion']) ||
   empty($_POST['genero']) ||
   is_null($_POST['genero'])) {
    // comprueba que se han rellenado los inputs
    $_SESSION["mensaje"]="Debes rellenar todos los campos del formulario";
    header("location:af11.php");
}
elseif(empty($_POST['acepto'])) {
    // comprueba que se han aceptado las condiciones
    $_SESSION["mensaje"]="Debes aceptar las condiciones de acceso";
    header("location:af11.php");
}
elseif(!preg_match('/^[0-9]{5}-[A-Za-z]+$/',$_POST['poblacion'])) {
    // comprueba que la población sigue el patrón
    $_SESSION["mensaje"]="La población no sigue el formato establecido";
    header("location:af11.php");
}
else {
    // todo correcto, se sanean los datos, se guardan
    // en variables de sesión, y saltamos a la página final
    $nombre=strip_tags($_POST['nombre']);
    $apellidos=strip_tags($_POST['apellidos']);
    $genero=strip_tags($_POST['genero']);
    $_SESSION["nombre"]=$nombre;
    $_SESSION["apellidos"]=$apellidos;
    $_SESSION["genero"]=$genero;
    header("location:af11_destino.php");
}
?>