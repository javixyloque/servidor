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
            
            
            

        
            
            
            
        
        
            <label for="fecha">Fecha: </label>
                <input type="text" name="fecha">
            
            
        
        
            <label for="nota">Prioridad: </label>
                <input type="number" name="prioridad">
            
            
            <label for="imagen">Imagen tipo: </label>
                <input type="file" name="imagen" enctype="multipart/form-data">

            <label for="realizada">Realizada: </label>
            <select name="realizada" id="realizada">
                <option value="true">Si</option>
                <option value="false">No</option>
            </select>
            
            
            
        <button type="submit">Agregar tarea</button>
    </form>
</body>
</html>