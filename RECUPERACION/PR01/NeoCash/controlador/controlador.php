<?php
function conexion () {
    $servidor = 'mysql:dbname=neobanco_javier;host=localhost;charset=utf8mb4';
    $usuario ='root';
    $pw = '';


    try {
        $conexion = new PDO($servidor, $usuario, $pw);
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


function comprobarLogin ($usuario, $pw) {
    try {
        $conexion = conexion();
        $consulta = $conexion -> prepare("SELECT * FROM cliente where usuario = :usuario");
        $consulta -> bindParam(':usuario', filtrado($usuario));
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
    if (preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*\+).{8,20}$/', $pw)) {
        echo "La contraseña es válida.";
    } else {
        echo "La contraseña no es válida.";
    }
}

function insertCliente ($usuario, $email, $pw, $img_cliente) {
    $conexion = conexion();
    $consulta = $conexion -> prepare("INSERT INTO cliente (usuario, email, password, img_cliente) VALUES (:usuario, :email, :password, :img_cliente)");
    $consulta ->bindParam(':usuario', $usuario, PDO::PARAM_STR);
    $consulta ->bindParam(':email', $email, PDO::PARAM_STR);
    $consulta ->bindParam(':password', password_hash($pw, PASSWORD_DEFAULT), PDO::PARAM_STR);
    $consulta ->bindParam(':img_cliente', $img_cliente, PDO::PARAM_LOB);
    return $consulta->execute();
}

function transaccionesCliente($usuario) {
    $sql = "SELECT t.*, c.id as id_cliente  FROM transaccion t JOIN CLIENTE c ON t.cliente = c.id where c.nombre = :nombre";
    
    $conexion = conexion();
    $select = $conexion->prepare($sql);
    $select ->bindParam(':nombre', $usuario, PDO::PARAM_STR);
    $select ->execute();
    $transacciones = $select->fetchAll(PDO::FETCH_ASSOC);
    $conexion = null;
    return $transacciones;

}


?>