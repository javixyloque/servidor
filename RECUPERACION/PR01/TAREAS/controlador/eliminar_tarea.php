<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../vista/index.php');
    
}
require_once'./controlador.php';
$id = filtrado($_GET['id']) ?? '';

try {
    eliminarTarea($id);
    
} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();
} finally {
    header('Location: ../vista/tareas.php');
}



?>