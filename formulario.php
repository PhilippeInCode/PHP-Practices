<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 01</title>
</head>
<body>
    <h1>Mi formulario</h1>
    <form action="ejemplo01.php" method="POST">
        Nombre: <input type="text" name="nombre"/><br/>
        Apellidos: <input type="text" name="apellidos"/><br/>
        <label>Deseo ser atendido/a en: </label>
        <input type="radio" name="idioma" value="es"/>Castellano
        <input type="radio" name="idioma" value="en"/>English<br/>
        <label>Mis intereses: </label><br/>
        <input type="checkbox" name="intereses[]" value="Deportes"/>Deportes<br/>
        <input type="checkbox" name="intereses[]" value="Música"/>Música<br/>
        <input type="checkbox" name="intereses[]" value="Libros"/>Libros<br/>
        <input type="checkbox" name="intereses[]" value="Cine"/>Cine<br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

