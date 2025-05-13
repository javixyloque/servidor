<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login/login.php");
    exit();
}

$titulo = "Modificar Obra";

// Incluimos el archivo donde se define la función de conexión
include "../../conexion/conexion.php";

// Funciones
function formatearNombre($nombre) {
    $nombre = trim($nombre); // Eliminar espacios en blanco al principio y al final
    $nombre = ucwords(strtolower($nombre)); // strtolower convierte la palabra a minúsculas y ucwords pone la primera letra de cada palabra en mayúsculas
    return $nombre;
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_obra'])) {
    $id_obra = filtrado($_GET['id_obra']);
    $conexion = conexion();

    if ($conexion) {
        try {
            // Obtener los datos de las obras
            $sql = "SELECT * FROM galeria_arte WHERE id_obra = :id_obra";
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> bindParam(':id_obra', $id_obra);
            $sentencia -> execute();
            $obra = $sentencia -> fetch(PDO::FETCH_ASSOC);

            if ($obra) {
                // Mostrar el formulario con los datos de la obra
                ?>
                <h2>Modificar Obra</h2>
                <?php
                if (isset($_SESSION['error'])) {
                    echo "<p class='error'>" . $_SESSION['error'] . "</p>";
                    unset($_SESSION['error']);
                }
                ?>
                <form action="modificar_obra.php" method="post" enctype="multipart/form-data" class="formulario">
                    <input type="hidden" name="id_obra" value="<?= htmlspecialchars($obra['id_obra']) ?>">
                    <label for="titulo">Título: </label>
                    <input type="text" name="titulo" id="titulo" class="input-text" value="<?= htmlspecialchars($obra['titulo']) ?>"><br>

                    <label for="precio">Precio: </label>
                    <input type="text" name="precio" id="precio" class="input-text" value="<?= htmlspecialchars($obra['precio']) ?>"><br>

                    <label for="fecha_creacion" class="form-label">Fecha Creación: </label>
                    <input type="date" class="form-control" name="fecha_creacion" id="fecha_creacion" value="<?= htmlspecialchars($obra['fecha_creacion']) ?>"><br>

                    <label for="imagen_actual" class="form-label">Imagen Actual: </label>
                    <?php
                    if (!empty($obra['imagen'])) {
                        $imagen_datos = base64_encode($obra['imagen']);
                        echo "<img src='data:image/jpeg;base64,$imagen_datos' alt='" . htmlspecialchars($obra['titulo']) . "' style='width:100px;height:auto;'><br>";
                    } else {
                        echo "Sin imagen<br>";
                    }
                    ?>
                    
                    <label for="imagen" class="form-label">Nueva Imagen (opcional): </label>
                    <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*"><br>

                    <label for="en_venta" class="form-label">En venta: </label>
                    <select name="en_venta" id="en_venta" class="form-select">
                        <option value="1" <?= $obra['en_venta'] ? 'selected' : '' ?>>Sí</option>
                        <option value="0" <?= !$obra['en_venta'] ? 'selected' : '' ?>>No</option>
                    </select><br>

                    <button type="submit" class="btn-submit">Modificar obra</button>
                </form>
                <?php
            } else {
                echo "Obra no encontrada.";
            }
        } catch (PDOException $e) {
            echo "Error al obtener los detalles de la obra: " . $e -> getMessage();
        }           
    } else {
        echo "Error en la conexión a la base de datos.";
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar el formulario de atualización
    $id_obra = filtrado($_POST['id_obra']);
    $titulo = formatearNombre(filtrado($_POST['titulo']));
    $precio = filtrado($_POST['precio']);
    $fecha_creacion = filtrado($_POST['fecha_creacion']);
    $en_venta = filtrado($_POST['en_venta']);

    $conexion = conexion();

    if ($conexion) {
        try {
            // Comprobar si se ha subido una nueva imagen
            if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
                $imagen = file_get_contents($_FILES['imagen']['tmp_name']);

                // Actualizar los datos con nueva imagen
                // Sentencia SQL para actualizar un registro
                $sql = "UPDATE galeria_arte SET titulo = ?, precio = ?, fecha_creacion = ?, imagen = ?, en_venta = ? WHERE id_obra = ?";

                // Preparamos la consulta 
                $sentencia = $conexion -> prepare($sql);

                // Vinculo los parámetros
                $sentencia -> bindParam(1, $titulo, PDO::PARAM_STR);
                $sentencia -> bindParam(2, $precio, PDO::PARAM_STR);
                $sentencia -> bindParam(3, $fecha_creacion, PDO::PARAM_STR);
                $sentencia -> bindParam(4, $imagen, PDO::PARAM_LOB);
                $sentencia -> bindParam(5, $en_venta, PDO::PARAM_BOOL);
                $sentencia -> bindParam(6, $id_obra, PDO::PARAM_INT);
            } else {
                // Actualizar los datos manteniendo la imagen antigua
                $sql = "UPDATE galeria_arte SET titulo = ?, precio = ?, fecha_creacion = ?, en_venta = ? WHERE id_obra = ?";

                // Preparamos la consulta 
                $sentencia = $conexion -> prepare($sql);

                // Vinculo los parámetros
                $sentencia -> bindParam(1, $titulo, PDO::PARAM_STR);
                $sentencia -> bindParam(2, $precio, PDO::PARAM_STR);
                $sentencia -> bindParam(3, $fecha_creacion, PDO::PARAM_STR);
                $sentencia -> bindParam(4, $en_venta, PDO::PARAM_BOOL);
                $sentencia -> bindParam(5, $id_obra, PDO::PARAM_INT);
            }
            

            // Ejecutamos la consulta
            $sentencia -> execute();

            // Redirigir a la lista de obras después de la actualización
            header("Location: ../read/listar_obra.php");
            exit();
        } catch (PDOException $e) {
            echo "Error al actualizar la obra: " . $e -> getMessage();
        }
    } else {
        echo "Error en la conexión a la base de datos.";
    }
} else {
    echo "ID de obra no proporcionado.";
}
?>