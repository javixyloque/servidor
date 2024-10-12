<?php 

    $nombre= isset($_GET['nombre']) ? $_GET['nombre']: '';
    $sueldo = isset($_GET['sueldo']) ? $_GET['sueldo'] : '';
    $empleado = array($nombre => $sueldo);
    $empresa = array();
    array_push($empleados);
    session_start();
    $_SESSION['empresa'] = $empresa;
    if (!empty($empresa)) {
        foreach ($empresa as $trabaj) {
            foreach ($trabaj as $nombre => $sueldo) {
                echo "Nombre: $nombre<br>Sueldo: $sueldo<br><br>";
            }
        }
    }
    

