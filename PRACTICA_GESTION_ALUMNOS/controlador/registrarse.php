<?php
    require_once'../biblioteca/biblioteca.php';
    $conexion = conexion();
    $sql = "INSERT INTO tutor (login, password, correo, nomTutor, apellidos, tipo_usu, baja, activar) VALUES (:login, :password, :correo, :nomTutor, :apellidos, :tipo_usu, :baja, :activar)";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = filtrado($_POST['user'])?? '';
        $password = filtrado($_POST['passwordReg'])?? '';
        $correo = filtrado($_POST['correo'])?? '';
        $nomTutor = filtrado($_POST['nombre'])?? '';
        $apellidos = filtrado($_POST['apellidos'])?? '';
        $tipo_usu = 2;
        $baja = 0;
        $activar = 'inactivo';
    }

    try {
        $insert = $conexion ->prepare($sql);
        $insert -> bindParam(':login', $login);
        // $insert -> bindParam(':password', password_hash($password, PASSWORD_DEFAULT));
        $insert -> bindParam(':password', $password);
        $insert -> bindParam(':correo', $correo);
        $insert -> bindParam(':nomTutor', $nomTutor);
        $insert -> bindParam(':apellidos', $apellidos);
        $insert -> bindParam(':tipo_usu', $tipo_usu);
        $insert -> bindParam(':baja', $baja);
        $insert -> bindParam(':activar', $activar);
        $insert -> execute();

        echo "<script>alert('Te has registrado como tutor correctamente, ahora solo te queda esperar a que el administrador active tu cuenta')</script>";
        header('Location: ../vista/login.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    
?>