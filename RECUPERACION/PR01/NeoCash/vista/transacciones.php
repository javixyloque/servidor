<?php
session_start();
require_once '../controlador/controlador.php';
if (!isset($_SESSION['user'])) {
    header('Location: ../index.php');
} 



// SELECT c.*, t.* FROM cliente c JOIN transaccion t ON t.cliente = c.id;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transacciones de <?= $_SESSION['user'] ?></title>
</head>
<body>
    <h1>Transacciones de <?= $_SESSION['user'] ?></h1>

    <table>
        <thead>
            <th>Concepto</th>
            <th>Cantidad</th>
            <th>Tipo</th>
            <th>Fecha</th>
        </thead>
        <tbody>
            <?php
            $transacciones = transaccionesCliente($_SESSION['user']);
                foreach ($transacciones as $transaccion) {
                    echo "<tr>";
                    echo "<td>" . $transaccion['concepto'] . "</td>";
                    echo "<td>". $transaccion['cantidad']. "</td>";
                    echo "<td>". ucwords($transaccion['tipo']). "</td>";
                    echo "<td>". $transaccion['fecha']. "</td>";
                    echo "</tr>";
                    

                }
            
            ?>
        </tbody>
    </table>

    <h2>Saldo restante en la cuenta: <em><?= saldoEnCuenta(filtrado($_SESSION['user']));?></em></h2>
</body>
</html>