<?php
session_start();
require_once'../controlador/controlador.php';

if (!isset($_SESSION['user'])) {
header('Location:../vista');
}

$gastos = listadoIngresosFecha($_SESSION['user']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GASTOS</title>
</head>
<body>
    <h1>Gastos de <em><?= $_SESSION['user'] ?></em></h1>
    <table>
        <thead>
            <tr>
                <th>CONCEPTO</th>
                <th>CANTIDAD</th>
                <th>TIPO</th>
                <th>FECHA</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gastos as $gasto) {
                echo "<tr>";
                echo "<td>". $gasto['concepto']. "</td>";
                echo "<td>". $gasto['cantidad']. "</td>";
                echo "<td>". $gasto['tipo']. "</td>";
                echo "<td>". formatearFecha($gasto['fecha']). "</td>";
                
            }?>
        </tbody>

    
    </table>

    <h2>TOTAL INGRESADO: <em><?= totalIngresado($_SESSION['user']) ?></em></h2>

</body>
</html>

