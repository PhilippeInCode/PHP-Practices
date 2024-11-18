<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegir Ciudad</title>
</head>
<body>
    <?php
    // Este if comprueba que se ha enviado el nombre, se ha validado, y el país del formulario anterior
    if (!isset($_POST['nombre']) || !isset($_POST['pais']) || !validarNombre($_POST['nombre'])) {
       // El siguiente método header redirigirá a la página anterior si el nombre es inválido o falta algún dato
        header("Location: AE1.php");
        exit();
    }

    $nombre = htmlspecialchars($_POST['nombre']); // Sanea el nombre para evitar inyección de código
    $paisSeleccionado = htmlspecialchars($_POST['pais']); // Sanea el país para evitar inyección de código

    // Array que contiene las ciudades de cada país
    $ciudades = array(
        "España" => array("Lugo", "Cádiz", "Almería", "Sevilla", "Alicante"),
        "Francia" => array("París", "Lyon", "Marsella", "Niza", "Burdeos"),
        "Italia" => array("Roma", "Venecia", "Milán", "Florencia", "Nápoles"),
        "Alemania" => array("Berlín", "Múnich", "Hamburgo", "Fráncfort", "Colonia"),
        "Portugal" => array("Lisboa", "Oporto", "Coímbra", "Faro", "Braga"),
        "Grecia" => array("Atenas", "Salónica", "Patras", "Heraclión", "Larisa"),
        "Reino Unido" => array("Londres", "Manchester", "Birmingham", "Glasgow", "Liverpool"),
        "Holanda" => array("Ámsterdam", "Rotterdam", "La Haya", "Utrecht", "Maastricht"),
        "Bélgica" => array("Bruselas", "Amberes", "Gante", "Brujas", "Lieja"),
        "Suiza" => array("Zúrich", "Ginebra", "Berna", "Lausana", "Lucerna"),
        "Suecia" => array("Estocolmo", "Gotemburgo", "Malmö", "Uppsala", "Västerås"),
        "Dinamarca" => array("Copenhague", "Aarhus", "Odense", "Aalborg", "Esbjerg"),
        "Noruega" => array("Oslo", "Bergen", "Trondheim", "Stavanger", "Drammen")
    );

    ?>

    <h2>Seleccione una ciudad de <?php echo $paisSeleccionado; ?></h2>

    <form action="AE3.php" method="POST">
        <!-- Campo oculto para pasar el nombre y el país seleccionados a la siguiente página -->
        <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
        <input type="hidden" name="pais" value="<?php echo $paisSeleccionado; ?>">

        <label for="ciudad">Ciudad:</label><br>
        <select id="ciudad" name="ciudad" required>
            <?php
            // Este foreach carga las ciudades del país seleccionado como opciones para el dropdown
            foreach ($ciudades[$paisSeleccionado] as $ciudad) {
                echo "<option value='$ciudad'>$ciudad</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    // El siguiente método valida el nombre introducido por el usuario
    function validarNombre($nombre) {
        // El método preg_match comprueba que el nombre no contiene números ni caracteres especiales y empieza por mayúscula
        return preg_match("/^[A-Z][a-zA-Z]*$/", $nombre);
    }
    ?>

</body>
</html>
