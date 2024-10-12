<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>225 - Array Multidimensional Asociativo</title>
</head>
<body>
<?php 
    session_start();
    $nombre = isset($_POST['nombre']) ? $_POST['nombre']: '';
    $sueldo = isset($_POST['sueldo']) ? $_POST['sueldo'] : '';
    $empleado = array($nombre => $sueldo);

    if (!isset($_SESSION['empresa'])) {
        $_SESSION['empresa'] = array($empleado);
    } else {
        array_push($_SESSION['empresa'], $empleado);
    }
    
    
    echo '<form action="225.php" method="post">
        <legend>Introduccion de nuevos trabajadores</legend>
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre"/><br><br>
        <label for="sueldo">Sueldo</label><br>
        <input type="text" name="sueldo">
        <input type="submit" value="Insertar">
    </form>';
    if (!empty($_SESSION['empresa'])) {
        foreach ($_SESSION['empresa'] as $trabaj) {
            foreach ($trabaj as $nombre => $sueldo) {
                echo "Nombre: $nombre<br>Sueldo: $sueldo<br><br>";
            }
        }
    }
    ?>
</body>
</html>

    

