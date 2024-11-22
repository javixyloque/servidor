<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Subir proyecto</title>
</head>
<body>
    <form action="../controlador/subir.php" method="post" enctype="multipart/form-data">
        
            <label for="titulo">Titulo: </label>
                <input type="text" name="titulo">
            
        
        
            <label for="descripcion">Descripción: </label>
                <input type="text" name="descripcion">
            
            
        
        
            <label for="periodo">Periodo: </label>
                <input type="text" name="periodo">
            
            
        
        
            <label for="curso">Curso: </label>
                <input type="number">
            
            
        
        
            <label for="fecha">Fecha: </label>
                <input type="text" name="fecha">
            
            
        
        
            <label for="nota">Nota: </label>
                <input type="text" name="nota">
            
            
            <label for="logotipo">Logo: </label>
                <input type="file" name="logotipo" enctype="multipart/form-data">
            

        <button type="submit">Agregar trabajo</button>
    </form>
</body>
</html>