<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once'./502EmpleadoTelefonos.php';
    $juanjo =  new Empleado();
    $juanjo -> setNombre("José");
    $juanjo -> setSalario(1660.6);
    $juanjo -> anadirTelefono(65747328);
    
    $serializado = serialize($juanjo);
    echo "Serializado: $serializado<br>";
    echo $juanjo -> getDatosCompleto();
    ?>
</body>
</html>