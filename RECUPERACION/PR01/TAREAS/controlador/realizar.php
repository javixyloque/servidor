<?php
require_once'./controlador.php';

$id = filtrado($_GET['id'])?? '';

try {
    realizarTarea($id);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>