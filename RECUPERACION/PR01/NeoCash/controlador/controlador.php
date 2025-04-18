<?php
session_start();
function conexion () {
    $servidor = 'mysql:dbname=neobanco_javier;host=localhost;charset=utf8mb4';
    $nombre ='root';
    $pw = '';


    try {
        $conexion = new PDO($servidor, $nombre, $pw);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    } catch (PDOException $e) {
        echo 'Falló la conexión: '. $e->getMessage();
    }
}

function filtrado ($data) {
    $data = trim($data);
    // $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function comprobarLogin ($nombre, $pw) {
    try {
        $conexion = conexion();
        $consulta = $conexion -> prepare("SELECT * FROM cliente where nombre = :nombre");
        $consulta -> bindParam(':nombre', filtrado($nombre));
        $consulta -> execute();
        $resultado = $consulta -> fetch(PDO::FETCH_ASSOC);
        if ($resultado !== false && password_verify($pw, $resultado['password'])) {
            $conexion = null;
            return true;
        } else {
            $conexion = null;
            return false;
        }
    } catch (PDOException $e) {
        echo 'Falló la conexión: '. $e->getMessage();
        return false;
    }
}

function comprobarFormatoPW ($pw) {

    // EXPRESIÓN REGULAR => UNA MAYUSCULA, UNA MINUSCULA, UN NUMERO Y UN CARACTER ESPECIAL
    // ^ => COMIENZA CON
    // (?=.*[A-Z]) => UNA MAYUSCULA
    // (?=.*[a-z]) => UNA MINUSCULA
    // (?=.*\d) => UN NUMERO
    // ((?=.*[^a-zA-Z\d]) => UN CARACTER ESPECIAL
    // .{8,20} => 8 A 20 CARACTERES

    if (preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^a-zA-Z\d]).{8,20}$/', $pw)) {
        return true;
    } else {
        return false;
    }
}

function insertCliente ($cliente) {
    $conexion = conexion();
    $consulta = $conexion -> prepare("INSERT INTO cliente (nombre, email, password, img_cliente, numero_cuenta) VALUES (:nombre, :email, :password, :img_cliente, :numero_cuenta)");
    $consulta -> bindParam(':nombre', $cliente['nombre'], PDO::PARAM_STR);
    $consulta -> bindParam(':email', $cliente['email'], PDO::PARAM_STR);
    $consulta -> bindParam(':password', $cliente['password'], PDO::PARAM_STR);
    $consulta -> bindParam(':img_cliente', $cliente['img_cliente'], PDO::PARAM_LOB);
    $consulta -> bindParam(':numero_cuenta' , $cliente['numero_cuenta']);
    return $consulta -> execute();
}

function transaccionesCliente($nombre) {
    $sql = "SELECT t.*, c.nombre as nombre_cliente  FROM transaccion t JOIN cliente c ON t.cliente = c.id where c.nombre = :nombre";
    
    $conexion = conexion();
    $select = $conexion -> prepare($sql);
    $select -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $select -> execute();
    $transacciones = $select->fetchAll(PDO::FETCH_ASSOC);
    $conexion = null;
    return $transacciones;

}

function confirmarContrasena($pw, $confirmar_password) {
    if ($pw === $confirmar_password) {
        return true;
    } else {
        return false;
    }
}


function generarNumeroCuenta () {
    $str = "ES";
    for ($i = 0; $i < 22; $i++) {
        // CONCATENA UN DIGITO ALEATORIO
        $str .= random_int(0, 9);
    }
    return $str;
}

function saldoEnCuenta($nombre) {
    $saldo = 0.0;
    $sql = "SELECT t.*, c.nombre as nombre_cliente  FROM transaccion t JOIN cliente c ON t.cliente = c.id where c.nombre = :nombre";
    
    $conexion = conexion();
    $select = $conexion -> prepare($sql);
    $select -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $select -> execute();
    $transacciones = $select->fetchAll(PDO::FETCH_ASSOC);

    // BUCLE => SUMAR SALDO
    foreach($transacciones as $movimiento) {
        // CONDICIONALES => CERTIFICAR NATURALEZA MOVIMIENTO
        if ($movimiento['tipo'] == 'ingreso') {
            $saldo+=floatval($movimiento['cantidad']);
        } elseif ($movimiento['tipo'] == 'retirada') {
            $saldo -= floatval($movimiento['cantidad']);
        }
    }
    return $saldo;
}



?>