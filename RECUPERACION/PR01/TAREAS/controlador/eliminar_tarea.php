<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../vista/index.php');
    
}
require_once'./controlador.php';
$id = filtrado($_GET['id']) ?? '';

try {
    eliminarTarea($id);
    echo "<alert>La tarea ha sido eliminada exitosamente</alert>";
    sleep (4);
    header('Location: ../vista/tareas.php');
    exit();
} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();
} 


?>