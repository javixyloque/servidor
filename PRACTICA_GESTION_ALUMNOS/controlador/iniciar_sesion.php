<?php
    require_once'../biblioteca/biblioteca.php';
    
    session_start();
    $conexion = conexion();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = filtrado($_POST['user'])?? '';
        $password = filtrado($_POST['pass'])?? '';
    }
    

    // NO HAY HASH PORQUE INTRODUJE LOS DATOS ANTES DE CAER EN ELLO
    $sql = "SELECT * FROM `tutor` WHERE login = :login  AND password = :password;";
    try {
        
        $select = $conexion->prepare($sql);
        $select->bindParam(':login', $usuario, PDO::PARAM_STR);
        $select->bindParam(':password', $password, PDO::PARAM_STR);
        if ($select->execute()) {
            $filas = $select->rowCount();
            $resultado = $select->fetch(PDO::FETCH_ASSOC);
                if ($filas<1 || $resultado['activar'] =='inactivo' || $resultado['baja'] == 1) {
                    
                    echo "<script>alert('Usuario o contraseña incorrectos');
                    location.href = '../vista/login.php';
                    </script>";
                    exit();
                } else {
                    $_SESSION['login'] = $usuario;
                    $_SESSION['tipo_usu'] = $resultado['tipo_usu'];
                    header('Location:../vista/index.php');
                    $conexion = null;
                }
            
        }
    } catch (PDOException $e) {
        echo "<script>alert('O el usuario que buscabas no estaba, o algo estás haciendo mal, prueba de nuevo');
        location.reload();
        </script>";
    }
?>