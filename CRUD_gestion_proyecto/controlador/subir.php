<?php
    require_once('../conexion/conexion.php');
    $conexion = conexion();
    $id = isset($_POST['id_proyecto'])? intval(filtrado($_POST['id_proyecto'])) : null;
    $titulo = isset($_POST['titulo'])? filtrado($_POST['titulo']): '';
    $descripcion = isset($_POST['descripcion'])? filtrado($_POST['descripcion']): '';
    $periodo = isset($_POST['periodo'])? filtrado($_POST['periodo']): '';
    $curso = isset($_POST['curso'])? filtrado($_POST['curso']): '';
    $fecha = isset($_POST['fecha'])? filtrado($_POST['fecha']): '';
    $nota = isset($_POST['nota'])? filtrado($_POST['nota']): '';
    $logotipo = isset($_FILES['logotipo']['name'])? $_FILES['logotipo']['name']: '';
    $pdf = isset($_FILES['pdf']['name'])? $_FILES['pdf']['name']: '';
    
    $mover = move_uploaded_file($_FILES["logotipo"]["tmp_name"],"subidos/" . $_FILES["fichero"]["name"]);
?>