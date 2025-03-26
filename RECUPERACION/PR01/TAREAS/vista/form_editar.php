<?php
session_start();
require_once'../controlador/controlador.php';

if (!$_SESSION['user']) {
    header('Location: ./index.php');
    exit();
}
$id = filtrado($_GET['id']) ?? '';

$tarea = selectTareaId(intval($id));




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
    <form action="../controlador/modificar_tarea.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $tarea['id']?>">
        
        <label for="titulo">Titulo</label><br>
        <input type="text" name="titulo" value="<?= $tarea['titulo'] ?>"><br><br>
        
        <label for="descripcion">Descripción</label><br>
        <input type="text" id="descripcion" name="descripcion" value="<?= $tarea['descripcion']?>"><br><br>

        <label for="fecha">Fecha</label><br>
        <input type="date" name="fecha" value="<?= $tarea['fecha']?>"><br><br>

        <label for="prioridad">Prioridad</label><br>
        <input tpye="number" max="3" min="1" name="prioridad" id="prioridad" value="<?= $tarea['prioridad']?>"><br><br>

        <label for="img">Tipo de tarea: </label>
        <img src="data:image/png;base64,<?= base64_encode($tarea['img_tarea']) ?>" alt="Logotipo actual" style="max-width: 150px; max-height: 150px;"></img><br><br>
    
        <label for="img_tarea">Nuevo tipo: </label>
        <input type="file" name="img_tarea" enctype="multipart/form-data" value="data:image/png;base64,<?= base64_encode($tarea['img_tarea']) ?>"><br><br>



        <input type="submit" value="Modificar">
    </form>

</body>
</html>