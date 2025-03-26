<?php
session_start();
require_once'../controlador/controlador.php';

if (!$_SESSION['user']) {
    header('Location: ./index.php');
    exit();
}
$id = filtrado($_GET['id']) ?? '';

$tarea = selectTareaId($id);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MODIFICAR TAREA</h1>
    <form action="../controlador/modificarTarea.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $tarea['id']?>">
        
        <label for="titulo"></label><br>
        <input type="text" name="titulo" value="<?= $tarea['titulo'] ?>"><br><br>
        
        <label for="descripcion"></label><br>
        <input type="text" id="descripcion" name="descripcion" value="<?= $tarea['descripcion']?>"><br><br>

        <label for="fecha"></label>
        <input type="date" name="fecha" value="<?= $tarea['fecha']?>">

        <label for="prioridad"></label><br>
        <select name="prioridad" id="prioridad" value="<?= $tarea['prioridad']?>"><br><br>
        <input type="submit" value="Modificar">
    </form>

</body>
</html>