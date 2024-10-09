<?php
require '228biblioteca.php';
$funciones = ["sumar", "restar", "multiplicar", "dividir"];
$num = $_GET['num'];
$oper = $_GET['oper'];

foreach ($funciones as $func) {
    echo $func." = ".$func($num, $oper)."<br>";
}
