<?php

// JAVIER ALVAREZ CENTENO
require_once'../controlador/controlador.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conexion = conexion();
//SUBIR EL TAMAÑO MAXIMO PERMITIDO (200 MB)
$conexion -> exec("SET GLOBAL max_allowed_packet = 200 * 1024 * 1024;"); // 200 MB

$nombre =  filtrado($_POST['nombre']) ?? '';
$pw = filtrado($_POST['password']) ?? '';
$email = strtolower(filtrado($_POST['email'])) ?? '';
$responsable = filtrado($_POST['responsable']);
$img_cliente = $_FILES['imagen'] ??  '';

// CHEQUEAR QUE SE SUBIÓ BIEN EL img_cliente Y EL FORMATO
if ($img_cliente && $img_cliente['error'] == 0) {
    $formatoLogo = strtolower(pathinfo($img_cliente['name'], PATHINFO_EXTENSION));
    $formato = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
    in_array($formatoLogo, $formato) or exit("El archivo no es una imagen válida. <a href='../vista/index.php'>Volver</a>");

    // GUARDAR LA IMAGEN DEL ARCHIVO
    $contenido_img_cliente = file_get_contents($img_cliente["tmp_name"]);
} else {
    $contenido_img_cliente = NULL;
}

// TERNARIO => FORMATO CONTRASEÑA Y QUE SEAN IGUALES => INSERTAR USUARIO


$nuevaEmpresa = [
    'nombre' => $nombre,
    'email' =>  $email,
    'responsable' => $responsable,
    'password' => password_hash($pw, PASSWORD_DEFAULT),
    'imagen' => $contenido_img_cliente,
];


try {
    if (insertEmpresa($nuevaEmpresa)) {

        echo "<script>
            alert('Usuario registrado correctamente'); 
            window.location.href = '../vista/index.php';
        </script>";
        exit;
    } else {
        echo"Algo sigue saliendo mal";
        exit;
    }
    insertEmpresa($nuevaEmpresa);
} catch (PDOException $ex) {
    echo "Error". $ex->getMessage();
}





?>









