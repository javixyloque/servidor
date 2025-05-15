<?php

// JAVIER ALVAREZ CENTENO
session_start();
if (!isset($_SESSION['empresa'])) {
    header('Location: ../vista');
    exit;
} else {
    unset($_SESSION['empresa']);
    session_destroy();
    header('Location: ../vista');
}





?>