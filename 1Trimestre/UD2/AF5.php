<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Formativa 5</title>
</head>
<body>



    <h1>Conversor de Unidades de Medida</h1>
    <form action="" method="POST">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required><br/>

        <label for="unidad_original">Unidad Original:</label>
        <select name="unidad_original" id="unidad_original" required>
            <option value="pulgadas">Pulgadas</option>
            <option value="pies">Pies</option>
            <option value="yardas">Yardas</option>
            <option value="millas">Millas</option>
        </select><br/>

        <label for="unidad_destino">Unidad a Convertir:</label>
        <select name="unidad_destino" id="unidad_destino" required>
            <option value="centimetros">Centímetros</option>
            <option value="metros">Metros</option>
            <option value="kilometros">Kilómetros</option>
        </select><br/>

        <input type="submit" value="Convertir">
    </form>



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST['cantidad'];
        $unidad_original = $_POST['unidad_original'];
        $unidad_destino = $_POST['unidad_destino'];
        $conversion_a_metros = 0;

        switch ($unidad_original) {
            case "pulgadas":
                $conversion_a_metros = $cantidad * 0.0254; 
                break;
            case "pies":
                $conversion_a_metros = $cantidad * 0.3048; 
                break;
            case "yardas":
                $conversion_a_metros = $cantidad * 0.9144; 
                break;
            case "millas":
                $conversion_a_metros = $cantidad * 1609.34; 
                break;
        }

        $resultado = 0;

        switch ($unidad_destino) {
            case "centimetros":
                $resultado = $conversion_a_metros * 100; 
                break;
            case "metros":
                $resultado = $conversion_a_metros; 
                break;
            case "kilometros":
                $resultado = $conversion_a_metros / 1000; 
                break;
        }

        echo "<h2>Resultado:</h2>";
        echo "<p>$cantidad $unidad_original son $resultado $unidad_destino.</p>";
    }
    ?>



</body>
</html>
