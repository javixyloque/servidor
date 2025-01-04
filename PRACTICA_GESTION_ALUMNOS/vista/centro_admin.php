<?php
    require_once '../biblioteca/biblioteca.php';
    session_start(); 
    $conexion = conexion();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>ADMINISTRACIÓN</title>
</head>
<body>

    <!-- TABLAS DE DATOS Y CRUD -->
    <div id="tablas">
        <table id="tutor" data-status="activo"></table>
        <table id="alumnos" data-status="inactivo"></table>
        <table id="proyecto" data-status="inactivo"></table>
    </div>


    <!-- MENU DE TRIGGERS PARA CADA UNA DE LAS TABLAS -->
    <div id="menu_trigger">
        <button class="trigger" id="boton_tutor">TUTORES</button>
        <button class="trigger" id="boton_alumnos">ALUMNOS</button>
        <button class="trigger" id="boton_proyecto">PROYECTOS</button>
    </div>


    <script src="../controlador/centro_admin.js"></script>
</body>
</html>