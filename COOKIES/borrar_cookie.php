<?php
    $nombre = isset($_POST['nombre']) ? $_POST['nombre']: '';
    function borrar($nombre) {
        setcookie($nombre, '',time() - 3600);

    }
    // borrar($nombre);
    // header('Location: ./403cookieFondo.php');
    
?>