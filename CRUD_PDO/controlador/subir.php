<?php
    require_once '../conexion/conexion.php';
    $conexion = conexion();
    //SUBIR EL TAMAÑO MAXIMO PERMITIDO (200 MB)
    $conexion ->exec("SET GLOBAL max_allowed_packet = 200 * 1024 * 1024;"); // 200 MB
    
    $prenda = isset($_POST['prenda'])? filtrado($_POST['prenda']): '';
    $foto = isset($_FILES['foto'])? $_FILES['foto']: '';
    $precio = isset($_POST['precio'])? filtrado($_POST['precio']): '';
    $rebajada = $_POST['rebajada'] == 'true' ? TRUE : FALSE;
    $rebaja = isset($_POST['rebaja'])? filtrado($_POST['rebaja']): '';
   
    if ($_POST['precio'] <0 || $_POST['rebaja'] < 0) {
        echo "<script>alert('No puedes escribir numeros negativos como precio')</script>";
    }   header('Location: ../vista/form_subir.php');
    // CHEQUEAR QUE SE SUBIÓ BIEN LA FOTO Y EL FORMATO
    if ($foto && $foto['error'] == 0) {
        $formatoLogo = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
        $formato = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
        if (!in_array($formatoLogo, $formato)) {
            die("Tipo de archivo no permitido.");
        }
        // Obtener el contenido del archivo foto
        $contenido_foto = file_get_contents($foto["tmp_name"]);
    } else {
        $contenido_foto = NULL;
    }

    try {
        $insert = $conexion->prepare("INSERT INTO rebajas_javier (prenda, foto, precio, rebajada, rebaja) VALUES (:prenda, :foto, :precio, :rebajada, :rebaja)");

        $insert->bindParam(':prenda', $prenda, PDO::PARAM_STR);
        $insert->bindParam(':foto', $foto, PDO::PARAM_LOB);
        $insert->bindParam(':precio', $precio, PDO::PARAM_INT);
        $insert->bindParam(':rebajada', $rebajada, PDO::PARAM_BOOL);
        $insert->bindParam(':rebaja', $rebaja, PDO::PARAM_INT);
        
        $resultado = $insert->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $conexion = null;
        header("Location:../vista/index.php");
    }
?>
