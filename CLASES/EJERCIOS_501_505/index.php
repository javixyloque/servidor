<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
    <?php
    require_once'./505EmpleadoSueldo.php';
    $juanjo =  new Empleado("Jose", null, 1501);
    $juanjo -> anadirTelefono(65747328);
    $juanjo -> anadirTelefono(98765432);
    
    
    $serializado = serialize($juanjo);
    echo "Serializado: $serializado<br><br>";
    echo  $juanjo -> getDatosCompleto();
    if  ($juanjo -> debePagarImpuestos()) {
        echo "<br>Debe pagar impuestos";
    } else {
        echo "<br>No debe pagar impuestos";
    }
    ?>
</body>
</html>