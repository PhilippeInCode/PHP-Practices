<?php
  // Si se envían datos desde el formulario de escritores,
  // se actualizan las cookies
  
  if (!empty($_POST["escritor"] && !empty($_POST["escritora"]))) {
    $escritor=$_POST["escritor"];
    $escritora=$_POST["escritora"];
    setcookie("escritora", $escritora, time() + 3*24*3600);
    setcookie("escritor", $escritor, time() + 3*24*3600);
    //echo "<h2>Escritora favorita: ".$escritora."</h2>";
    //echo "<h2>Escritor favorito: ".$escritor."</h2>";
    //$mensaje="Introduce nuevos nombres si quieres cambiar tus preferencias.<br>";
    //header("location:escritor_escritora.php?mensaje=$mensaje");
      
  //} else if (isset($_COOKIE["escritora"])) {
   // $escritora = $_COOKIE["escritora"];
   // $escritor = $_COOKIE["escritor"];
  }else{
    $mensaje="Debes rellenar todos los campos del formulario";
    header("location:escritor_escritora.php?mensaje=$mensaje");
  }

  // Borrado de cookies y variables

  if (isset($_POST["borraCookies"])) {
    setcookie("escritora", NULL, -1);
    setcookie("escritor", NULL, -1);
    unset($escritora);
    unset($escritor);
  }
?>