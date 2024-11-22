<?php
    require_once '../conexion/conexion.php';
    $conexion = conexion();
    //SUBIR EL TAMAÑO MAXIMO PERMITIDO (200 MB)
    $conexion ->exec("SET GLOBAL max_allowed_packet = 200 * 1024 * 1024;"); // 200 MB
    $titulo = isset($_POST['titulo'])? filtrado($_POST['titulo']): '';
    $descripcion = isset($_POST['descripcion'])? filtrado($_POST['descripcion']): '';
    $periodo = isset($_POST['periodo'])? filtrado($_POST['periodo']): '';
    $curso = isset($_POST['curso'])? filtrado($_POST['curso']): '';
    $fecha = isset($_POST['fecha'])? filtrado($_POST['fecha']): '';
    $nota = isset($_POST['nota'])? filtrado($_POST['nota']): '';
    $logotipo = isset($_FILES['logotipo']) ? $_FILES['logotipo'] : '';
    $pdf = isset($_FILES['pdf_proyecto']['name'])? $_FILES['pdf_proyecto']['name']: '';


    // CHEQUEAR QUE SE SUBIÓ BIEN EL LOGOTIPO
    if ($logotipo && $logotipo['error'] == 0) {
        $formatoLogo = strtolower(pathinfo($logotipo['name'], PATHINFO_EXTENSION));
        $formato = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
        if (!in_array($formatoLogo, $formato)) {
            die("Tipo de archivo no permitido.");
        }
        // Obtener el contenido del archivo logotipo
        $contenido_logotipo = file_get_contents($logotipo["tmp_name"]);
    } else {
        $contenido_logotipo = NULL;
    }

    try {
        $insert = $conexion->prepare("INSERT INTO proyecto (titulo, descripcion, periodo, curso, fecha_presentacion, nota, logotipo) VALUES (:titulo, :descripcion, :periodo, :curso, :fecha, :nota, :logotipo)");

        $insert->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $insert->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $insert->bindParam(':periodo', $periodo, PDO::PARAM_STR);
        $insert->bindParam(':curso', $curso, PDO::PARAM_INT);
        $insert->bindParam(':fecha', $fecha, PDO::PARAM_STR);
        $insert->bindParam(':nota', $nota, PDO::PARAM_STR);
        $insert->bindParam(':logotipo', $contenido_logotipo, PDO::PARAM_LOB);
        
        $resultado = $insert->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $conexion = null;
        header("Location:../vista/index.php");
    }
?>
