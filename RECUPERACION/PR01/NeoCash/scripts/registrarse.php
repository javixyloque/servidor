<?php
require_once'../controlador/controlador.php';

$conexion = conexion();
//SUBIR EL TAMAÑO MAXIMO PERMITIDO (200 MB)
$conexion -> exec("SET GLOBAL max_allowed_packet = 200 * 1024 * 1024;"); // 200 MB

$nombre =  filtrado($_POST['nombre']) ?? '';
$pw = filtrado($_POST['password']) ?? '';
$email = date($_POST['email']) ?? '';
$img_cliente = $_FILES['img_cliente'] ??  '';
$confirmar_password = $_POST['confirmar_password'] ?? '';

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
comprobarFormatoPW($pw) && confirmarContrasena($pw,$confirmar_password) ? insertCliente($usuario, $email, $pw, $contenido_img_cliente) : exit("Formato de contraseña no válido, o no has escrito la misma contraseña en los dos campos.<a href='../vista/index.php'>Volver</a>");


echo "<script>
    alert('Usuario registrado correctamente'); 
    window.location.href = '../vista/index.php';
</script>";



?>









