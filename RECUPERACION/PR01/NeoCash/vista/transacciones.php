<?php
session_start();
require_once '../controlador/controlador.php';
if (!isset($_SESSION['login'])) {
    header('Location: ../index.php');
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transacciones de <?= $_SESSION['login'] ?></title>
</head>
<body>
    <h1>Transacciones de <?= $_SESSION['login'] ?></h1>

    <table>
        <thead>
            <th>Concepto</th>
            <th>Cantidad</th>
            <th>Tipo</th>
            <th>Fecha</th>
        </thead>
        <tbody>
            <?php
            $transacciones = transaccionesCliente($_SESSION['login']);

            
            ?>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tbody>
    </table>
</body>
</html>