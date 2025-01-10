<?php
    require_once'./User.php';
    $user = new User();
    $serializado = serialize($user);

    echo $serializado;

    $usuario = unserialize($serializado);
    echo $usuario;