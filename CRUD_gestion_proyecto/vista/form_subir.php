<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Subir proyecto</title>
</head>
<body>
    <form action="../controlador/subir.php">
        <section>
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo"><br>
        </section>
        <section>
            <label for="descripcion">Descripción: </label>
            <input type="text" name="descripcion"><br>
        </section>
        <section>
            <label for="periodo">Periodo: </label>
            <input type="text" name="periodo">
        </section>
        <section>
            <label for="curso">Curso: </label>
            <input type="number">
        </section>
        <section>
            <label for="fecha">Fecha: </label>
            <input type="text" name="fecha">
        </section>
        <section>
            <label for="nota">Nota: </label>
            <input type="text" name="nota">
        </section>

       <button type="submit">Agregar trabajo</button>
    </form>
</body>
</html>