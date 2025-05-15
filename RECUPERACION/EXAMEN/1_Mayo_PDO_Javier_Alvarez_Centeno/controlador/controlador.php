<?php
// JAVIER ALVAREZ CENTENO
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function conexion () {
    $servidor = 'mysql:dbname=ofertrab_javiac;host=localhost;charset=utf8mb4';
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

function selectEmpresas() {
    try {
        $sql = "SELECT e.* FROM empresa e";
        $conexion = conexion();
        $select = $conexion->prepare($sql);
        $select -> execute();
        $empresas = $select -> fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $empresas;
    } catch (\Throwable $th) {
        $conexion = null;
    }
}
function insertEmpresa($empresa) {
    try {
        $conexion = conexion();
        $sql = "INSERT INTO empresa (nombre, responsable, email, password, imagen) VALUES (:nombre, :responsable, :email, :password, :imagen)";
        $insert = $conexion ->prepare($sql);
        $insert->bindParam(':nombre', $empresa['nombre'], PDO::PARAM_STR);
        $insert->bindParam(':responsable', $empresa['responsable'], PDO::PARAM_STR);
        $insert->bindParam(':email', $empresa['email'], PDO::PARAM_STR);
        $insert->bindParam(':password', $empresa['password'], PDO::PARAM_STR);
        $insert->bindParam(':imagen', $empresa['imagen'], PDO::PARAM_LOB);
        return $insert->execute();
        
    } catch (\PDOException $th) {
        $conexion = null;
        return false;
    }
}

function selectEmpresa($email) {
    try {
        $sql = "SELECT e.* FROM empresa WHERE email = :email";
        $conexion = conexion();
        $select = $conexion->prepare($sql);
        $select->bindParam(':email', $email, PDO::PARAM_STR);
        $select -> execute();
        $empresa = $select -> fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $empresa;
    } catch (\PDOException $th) {
        $conexion = null;
        return false;
    }
}





function filtrado ($data) {
    $data = trim($data);
    // $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}





function comprobarLogin ($email, $pw) {
    try {
        $conexion = conexion();
        $consulta = $conexion -> prepare("SELECT * FROM empresa where email = :email");
        $consulta -> bindParam(':email', filtrado($email));
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


function selectOfertas() {
    try {
        $conexion = conexion();
        $sql = "SELECT o.*, e.nombre FROM oferta o JOIN empresa e ON e.id = o.empresa";
        $select = $conexion->prepare($sql);
        $select -> execute();
        $ofertas = $select -> fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $ofertas;
    } catch (PDOException $th) {
        $conexion = null;
        return false;
    }
}


function selectOfertasEmpresa($id) {
    try {
        $conexion = conexion();
        $sql = "SELECT o.* FROM oferta o WHERE o.empresa = :id";
        $select  = $conexion->prepare($sql);
        $select ->bindParam(':id', $id, PDO::PARAM_INT);
        $select ->execute();
        $ofertas = $select->fetchAll(PDO::FETCH_ASSOC);
        $conexion=null;
        return $ofertas;
        //code...
    } catch (PDOException $e) {
        //throw $th;
        $conexion =null;
        return false;
    }
}



















?>