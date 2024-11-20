<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Subir proyecto</title>
</head>
<body>
    <form action="../controlador/subir.php" method="post">
        
            <label for="titulo">Titulo:
                <input type="text" name="titulo">
            </label>
            <br>
        
        
            <label for="descripcion">Descripción: 
                <input type="text" name="descripcion">
            </label>
            <br>
        
        
            <label for="periodo">Periodo: 
                <input type="text" name="periodo">
            </label>
            
        
        
            <label for="curso">Curso: 
                <input type="number">
            </label>
            
        
        
            <label for="fecha">Fecha: 
                <input type="text" name="fecha">
            </label>
            
        
        
            <label for="nota">Nota: 
                <input type="text" name="nota">
            </label>
            
            <label for="logotipo">Logo: 
                <input type="file" name="logotipo" enctype="multipart/form-data">
            </label>

        <button type="submit">Agregar trabajo</button>
    </form>
</body>
</html>