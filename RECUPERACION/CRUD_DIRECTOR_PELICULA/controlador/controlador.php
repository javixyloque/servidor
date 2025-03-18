<?php



/**
 * @abstract Función que conecta a la base de datos director_pelicula y devuelve la conexion.
 * @return PDOStatement
 * 
 */
function conectar () {
    $servidor = 'mysql:dbname=director_pelicula;host=localhost';
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

function filtrado ($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}



// CRUD DIRECTOR
// CREATE
function crearDirector($dni, $nombre, $apellido, $fecha_nac, $foto, $activo) {
    $conexion = conectar();
    
    $sql = "INSERT INTO director (dni, nombre, apellido, fecha_nac, foto, activo) 
    VALUES (:dni, :nombre, :apellido, :fecha_nac, :foto, 1)";
    try {
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':dni', intval($dni), PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $stmt->bindParam(':fecha_nac', $fecha_nac, PDO::PARAM_STR);
        $stmt->bindParam(':foto', $foto, PDO::PARAM_LOB);
        $stmt->execute();
        $conexion = null;
        return;
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    }

}

// READ
function leerDirectores () {
    $conexion = conectar();

    $sql = "SELECT d.* FROM director d WHERE d.activo = 1";
    try {
        $consulta = $conexion->prepare($sql);
        $select = $consulta->execute();
        $directores = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $directores;

    } catch (PDOException $ex) {
        echo "Error: ". $ex->getMessage();
    }
    $consulta = $conexion->prepare($sql);
    $select = $consulta->execute();
    $directores = $consulta->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($directores)) {
        return $directores;
        
    } else {
        return false;
    }

}

// UPDATE
function actualizarDirector($id, $dni, $nombre, $apellido, $fecha_nac, $foto, $activo) {

    $conexion = conectar();
    $sql = "UPDATE director 
    SET nombre = :nombre,dni = :dni apellido = :apellido, fecha_nac = :fecha_nac, foto = :foto 
    WHERE id_director = :id";
    try {
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':id', intval($id), PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':fecha_nac', $fecha_nac);
        $stmt->bindParam(':foto', $foto, PDO::PARAM_LOB);
        $stmt->execute();
        $conexion = null;
        return true;
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
        return false;
    }
}

// DELETE

function eliminarDirector($id) {
    $conexion = conectar();
    $sql = "UPDATE director SET activo = 0 WHERE id_director = :id";
    try {
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':id', intval($id), PDO::PARAM_INT);
        $stmt->execute();
        $conexion = null;
        return;
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    }
}

// CRUD PELICULA

// CREATE
function crearPelicula($titulo, $anio, $cartelera, $director) {
    $conexion = conectar();

    $sql = "INSERT INTO pelicula (titulo, anio,	cartelera, director) 
    VALUES (:titulo, :anio, :cartelera, :director)";
    try {
        
        $consulta = $conexion -> prepare($sql);
        $consulta ->bindParam(':titulo', $titulo);
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    }
}
    
// READ
function leerPeliculas() {  
    $conexion = conectar();
    $sql = "SELECT p.*, d.nombre, d.apellido 
    FROM pelicula p JOIN director d 
    ON d.id_director = p.director";
    
    try {
        $consulta = $conexion->prepare($sql);
        $select = $consulta->query();
        $filas = $consulta->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($filas)) {
            return $filas;

        } else {
            return false;
        }

    } catch (PDOException $e) {
        echo "ERROR: ".$e->getMessage();
    }

}

// UPDATE
function actualizarPelicula($id) {
    $conexion = conectar();
    $sql = "UPDATE pelicula SET titulo = :titulo, anio = :anio, cartelera = :cartelera, director = :director WHERE id_pelicula = :id";
    try {
        $actualizar = $conexion->prepare($sql);
        $actualizar->bindParam(':id', intval($id), PDO::PARAM_INT);
        $actualizar->bindParam(':titulo', $titulo);
        $actualizar->bindParam(':anio', $anio);
        $actualizar->bindParam(':cartelera', $cartelera);
        $actualizar->bindParam(':director', $director, PDO::PARAM_INT);
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    }

}
