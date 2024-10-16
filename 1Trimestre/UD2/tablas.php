<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Números</title>



    <style>
        /* Estilo tabla */
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 130px auto;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }
        /* Estilo encabezado */
        th {
            font-weight: bold;
        }
        /* Estilo primera columna */
        td:first-child {
            background-color: #d9ead3;
            font-weight: bold;
        }
        /* Estilo primera fila */
        tr:first-child {
            background-color: #ffe599;
        }
    </style>



</head>
<body>



    <table>
        <tr>
            <th>Número</th>
            <th>Doble</th>
            <th>Cuadrado</th>
            <th>Raíz Cuadrada</th>
        </tr>


        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>" . ($i * 2) . "</td>";
            echo "<td>" . ($i * $i) . "</td>";
            echo "<td>" . round(sqrt($i), 2) . "</td>"; 
            echo "</tr>";
        }
        ?>



    </table>
</body>
</html>
