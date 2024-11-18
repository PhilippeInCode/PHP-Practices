<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
  <?php

if(isset($_GET['mensaje'])) {
    $mensaje=strip_tags($_GET['mensaje']);
    echo "<h4>$mensaje</h4>";
}
if (isset($_POST["borraCookies"])) {
  setcookie("escritora", NULL, -1);
  setcookie("escritor", NULL, -1);
  //unset($critora);
  //unset($escritor);
}
?>
    <form action="escritor_escritora_resp.php" method="post">
      Escritora: <input type="text" name ="escritora"><br>
      Escritor: <input type="text" name ="escritor"><br>
      <input type="submit" value="Aceptar">
    </form>
    <hr>

    <form action="#" method="post">
      <input type="hidden" name="borraCookies" value="si">
      <input type="submit" value="Borrar cookies">
    </form>
  </body>
</html>