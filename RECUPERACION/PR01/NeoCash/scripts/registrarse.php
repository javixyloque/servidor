<?php
require_once'../controlador/controlador.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conexion = conexion();
//SUBIR EL TAMAÑO MAXIMO PERMITIDO (200 MB)
$conexion -> exec("SET GLOBAL max_allowed_packet = 200 * 1024 * 1024;"); // 200 MB

$nombre =  filtrado($_POST['nombre']) ?? '';
$pw = filtrado($_POST['password']) ?? '';
$email = filtrado($_POST['email']) ?? '';
$img_cliente = $_FILES['img_cliente'] ??  '';
$confirmar_password = filtrado($_POST['confirmar_password']) ?? '';

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
if (!comprobarFormatoPW($pw)) {
    exit("Formato de contraseña no valido. <a href='../vista/index.php'>Volver</a>");
} elseif (!confirmarContrasena($pw, $confirmar_password)) {
    exit("Escribe la misma contraseña en los dos campos, por favor. <a href='../vista/index.php'>Volver</a>");
}

$nuevoCliente = [
    'nombre' => $nombre,
    'email' =>  $email,
    'password' => password_hash($pw, PASSWORD_DEFAULT),
    'img_cliente' => $contenido_img_cliente,
    'numero_cuenta' => generarNumeroCuenta(),
];

// GENERAR NUMERO DE CUENTA SI ESTA REPETIDO
while (comprobarRepetidoCuenta($nuevoCliente['numero_cuenta'])) {
    $nuevoCliente['numero_cuenta'] = generarNumeroCuenta();
}

try {
    insertCliente($nuevoCliente);
    echo "<script>
        alert('Usuario registrado correctamente'); 
        window.location.href = '../vista/index.php';
    </script>";
} catch (PDOException $ex) {
    echo "Error". $ex->getMessage();
}





?>









