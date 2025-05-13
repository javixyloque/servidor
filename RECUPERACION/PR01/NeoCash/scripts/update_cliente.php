<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once '../controlador/controlador.php';

if (!isset($_SESSION['user'])) {
    header('Location: ../vista');
    exit;
}

$id = filtrado($_POST['id']) ?? null;
$nombre = filtrado($_POST['nombre']) ?? null;
$email = filtrado($_POST['email']) ?? null;
$pw = filtrado($_POST['password']) ?? null;

// echo "<img src='data:image/jpeg;base64," . base64_encode($img_cliente) . "'>";
// exit;

$contenido_img_cliente = null;

if (isset($_FILES['img_nueva']) && $_FILES['img_nueva']['error'] == UPLOAD_ERR_OK) {
    $formatoLogo = strtolower(pathinfo($_FILES['img_nueva']['name'], PATHINFO_EXTENSION));
    $formatosPermitidos = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
    
    if (!in_array($formatoLogo, $formatosPermitidos)) {
        exit("El archivo no es una imagen válida. <a href='../vista/form_update_cliente.php?id=$id'>Volver</a>");
    }

    $contenido_img_cliente = file_get_contents($_FILES['img_nueva']['tmp_name']);
} else {
    // Si no se subió nueva imagen, mantener la antigua
    $contenido_img_cliente = base64_decode(filtrado($_POST['img_antigua']));
}




if ($pw) {
    if (!comprobarFormatoPW($pw)) {
        exit("Formato de contraseña no valido. <a href='../vista/form_update_cliente.php?id=$id'>Continuar editando</a>");
    }

    $nuevoCliente = [
        'nombre' => $nombre,
        'email' =>  $email,
        'img_cliente' => $contenido_img_cliente,
        'password' => password_hash($pw, PASSWORD_DEFAULT),

    ];
    updateCliente($nuevoCliente['nombre'], $nuevoCliente['email'], $nuevoCliente['img_cliente'], $nuevoCliente['password']);
} else {
    $nuevoCliente = [
        'nombre' => $nombre,
        'email' =>  $email,
        'img_cliente' => $contenido_img_cliente,
        'password' => null,
    ];
    updateCliente($nuevoCliente['nombre'], $nuevoCliente['email'], $nuevoCliente['img_cliente']);
}


echo "<script>
    alert('Datos actualizados correctamente'); 
    window.location.href = '../vista/transacciones.php';
</script>";


