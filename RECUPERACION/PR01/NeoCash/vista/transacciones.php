<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once '../controlador/controlador.php';
//  CHECK   =>  INICIO SESIÓN
if (!isset($_SESSION['user'])) {
    header('Location: ../vista');
} 

$cliente = selectCliente($_SESSION['user']);
// var_dump($cliente);

// SELECT c.*, t.* FROM cliente c JOIN transaccion t ON t.cliente = c.id;
$transacciones = transaccionesCliente($_SESSION['user']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transacciones de <?= $_SESSION['user'] ?></title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            margin: auto;
        }
        input[type="text"] {
            min-width: 20vw;
        }

    </style>

</head>
<body>
    <h1>Transacciones de <?= $_SESSION['user'] ?></h1>
    <!-- MOSTRAR IMAGEN CLIENTE -->
     <img  height="100" width="100" src="data:image/jpeg;base64,<?= base64_encode($cliente[0]['img_cliente']) ?>" />
        <form action="./cerrar_sesion.php" method="get">
            <button type="submit">Cerrar Sesión</button>
        </form>
    <a href="./form_update_cliente.php?id=<?=$cliente[0]['id']?>">Acutalizar datos del cliente</a>
    <table>
        <thead>
            <th>Concepto</th>
            <th>Cantidad</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?php
            foreach ($transacciones as $transaccion) {
                    if ($transaccion['tipo'] == 'ingreso') {
                        echo "<tr style='background-color: lightgreen; color: black'>";
                    } else {
                        echo "<tr style='background-color: red; color: white'>";
                    }
                    echo '<td><form action="../scripts/update_concepto.php" method="post">
                        <input type="hidden" name="id" value='.$transaccion['id'].'>
                                <input type="text" name="concepto" value="'.$transaccion['concepto'].'">
                                <input type="submit" value="Actualizar">
                            </form></td>';
                    echo "<td>". $transaccion['cantidad']. "</td>";
                    echo "<td>". ucwords($transaccion['tipo']). "</td>";
                    echo "<td>". formatearFecha($transaccion['fecha']). "</td>";
                    echo "<td><a href='../scripts/eliminar_transaccion.php?id=". $transaccion['id']. "'>Eliminar</a></td>";
                    echo "</tr>";
                    

                }
            
            ?>
        </tbody>
    </table>
 
    <h2>Saldo restante en la cuenta: <em><?= saldoEnCuenta(filtrado($_SESSION['user']));?> €</em></h2>
    <a href="./form_transaccion.php">AÑADIR MOVIMIENTO</a>
    <a href="./listado_gastos_fecha.php">VER LISTADO GASTOS ORDENADOS POR FECHA</a>
    <a href="./listado_ingresos_fecha.php">VER LISTADO DE INGRESOS ORDENADOS POR FECHA</a>

</body>
</html>