<?php

use phpDocumentor\Reflection\Types\Null_;

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

function formatearFecha ($fecha) {
    $fechaFormat = substr($fecha,8,2) ." / ". substr($fecha,5,2)." / ".   substr($fecha , 0,4);
    return $fechaFormat;
}
function comprobarRepetidoCuenta($numero) {
    $sql = 'SELECT COUNT(*) FROM cliente WHERE numero_cuenta = :numero';
    $conexion = conexion();
    $consulta = $conexion -> prepare($sql);
    $consulta -> bindParam(':numero', $numero, PDO::PARAM_STR);
    $consulta -> execute();
    $contador = $consulta -> fetchColumn();
    $conexion = null;
    return $contador > 0;
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
    $consulta -> bindParam(':numero_cuenta' , $cliente['numero_cuenta'], PDO::PARAM_STR);
    return $consulta -> execute();
}

function selectCliente ($nombre) {
    try {
        $sql = "SELECT c.* FROM cliente c WHERE c.nombre = :nombre";
        $conexion = conexion();
        $select = $conexion -> prepare($sql);
        $select -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $select -> execute();
        $cliente = $select -> fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $cliente;
    } catch (PDOException) {
        $conexion = null;
        return false;
    }
}

function selectClientePorId($id) {
    
    try{
        $sql = "SELECT c.* FROM cliente c WHERE c.id = :id";
        $conexion = conexion();
        $select = $conexion ->prepare($sql);
        $select->bindParam(':id', $id, PDO::PARAM_INT);
        $select -> execute();
        $cliente = $select -> fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $cliente;
    }catch(PDOException){
        $conexion = null;
        return false;
    }
}

function selectIdCliente($nombre) {
    try {
        $sql = "SELECT c.id FROM cliente c WHERE c.nombre = :nombre";
        $conexion = conexion();
        $select = $conexion -> prepare($sql);
        $select -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $select -> execute();
        $id = $select -> fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $id['id'];
    } catch (PDOException) {
        $conexion = null;
        return false;
    }
}

function updateCliente($nombre, $email, $img_cliente, $pw = null) {
    try {
        $sql = "UPDATE cliente SET email = :email, img_cliente = :img_cliente";
        if ($pw) {
            $sql .= ", password = :password";
        }
        $sql .= " WHERE nombre = :nombre";
        $conexion = conexion();
        $update = $conexion -> prepare($sql);
        $update -> bindParam(':email', $email, PDO::PARAM_STR);
        $update -> bindParam(':img_cliente', $img_cliente, PDO::PARAM_LOB);
        if ($pw) {
            $update -> bindParam(':password', $pw, PDO::PARAM_STR);
        }
        $update -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $update -> execute();
        $conexion = null;
        return true;
    } catch (PDOException ) {
        $conexion = null;
        return false;
    }
}

function transaccionesCliente($nombre) {
    try {
        
        $sql = "SELECT t.*, c.nombre as nombre_cliente  FROM transaccion t JOIN cliente c ON t.cliente = c.id where c.nombre = :nombre";
        
        $conexion = conexion();
        $select = $conexion -> prepare($sql);
        $select -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $select -> execute();
        $transacciones = $select->fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $transacciones;
    } catch (PDOException) {
        $conexion = null;
        return false;
    }

}




function insertarTransaccion($concepto, $cantidad, $tipo, $fecha, $cliente) {
    
    $sql = "INSERT INTO transaccion (concepto, cantidad, tipo, fecha, cliente) VALUES (:concepto, :cantidad, :tipo, :fecha, :cliente)";
    $conexion = conexion();
    $insert = $conexion->prepare($sql);
    $insert->bindParam(':concepto', $concepto, PDO::PARAM_STR);
    $insert->bindParam(':cantidad', $cantidad, PDO::PARAM_STR);
    $insert->bindParam(':tipo', $tipo, PDO::PARAM_STR);
    $insert->bindParam(':fecha', $fecha, PDO::PARAM_STR);
    $insert->bindParam(':cliente', $cliente, PDO::PARAM_INT);
    return $insert->execute();
    $conexion = null;
}

function eliminarTransaccion($id) {
    $sql = "DELETE FROM transaccion WHERE id = :id";

    $conexion = conexion();
    $delete = $conexion->prepare($sql);
    $delete->bindParam(':id', $id, PDO::PARAM_INT);
    $conexion = null;
    return $delete->execute();

    
}
function updateConcepto($id, $concepto) {
    $sql = "UPDATE transaccion SET concepto = :concepto WHERE id = :id";
    $conexion = conexion();
    $update = $conexion->prepare($sql);
    $update->bindParam(':concepto', $concepto, PDO::PARAM_STR);
    $update->bindParam(':id', $id, PDO::PARAM_INT);
    return $update->execute();
    $conexion = null;
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
            $saldo+=floatval($movimiento['cantidad'])*1.05;
        } elseif ($movimiento['tipo'] == 'retirada') {
            $saldo -= (floatval($movimiento['cantidad'])+1);
        }
    }
    return number_format($saldo, 2, ',', '.');
}

function listadoGastosFecha($nombre) {
    $sql = "SELECT t.*, c.nombre FROM transaccion t JOIN cliente c ON c.id = t.cliente WHERE t.tipo = 'retirada' AND c.nombre = :nombre ORDER BY t.fecha ASC";
    $conexion = conexion();
    $select = $conexion -> prepare($sql);
    $select -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $select -> execute();
    $gastos = $select->fetchAll(PDO::FETCH_ASSOC);
    $conexion = null;
    return $gastos;
}

function listadoIngresosFecha($nombre) {

    $sql = "SELECT t.*, c.nombre FROM transaccion t JOIN cliente c ON c.id = t.cliente WHERE t.tipo = 'ingreso' ORDER BY t.fecha ASC";
    $conexion = conexion();
    $select = $conexion -> prepare($sql);
    $select -> execute();
    $ingresos = $select->fetchAll(PDO::FETCH_ASSOC);
    $conexion = null;
    return $ingresos;
}

function totalGastado($nombre) {

    $sql = "SELECT SUM(t.cantidad) as total FROM transaccion t JOIN cliente c ON c.id = t.cliente WHERE t.tipo = 'retirada'";
    $conexion = conexion();
    $select = $conexion -> prepare($sql);
    $select -> execute();
    $resultado = $select->fetch(PDO::FETCH_ASSOC);
    $conexion = null;
    return $resultado['total'];

}

function totalIngresado($nombre) {
    $sql = "SELECT SUM(t.cantidad) as total FROM transaccion t JOIN cliente c ON c.id = t.cliente WHERE t.tipo = 'ingreso'";
    $conexion = conexion();
    $select = $conexion -> prepare($sql);
    $select -> execute();
    $resultado = $select->fetch(PDO::FETCH_ASSOC);
    $conexion = null;
    return $resultado['total'];
}




?>