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
        
            <label for="prenda">Prenda: </label>
                <input type="prenda" name="prenda">

                <label for="foto">Foto: </label>
                <input type="file" name="foto" enctype="multipart/form-data">
        
        
            <label for="precio">Precio: </label>
                <input type="number" name="precio">
            
            
        
        
            <label for="rebajada">Rebajada: 
                
            </label>
            <select name="rebajada" id="rebajada">
                <option value="true">SÍ</option>
                <option value="false">NO</option>
            </select>
                
            
            
        
        
            <label for="rebaja">Rebaja: </label>
                <input type="number">
            

            
            

        <button type="submit">Agregar producto</button>
    </form>
</body>
</html>