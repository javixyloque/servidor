<?php
session_start();


function obtenerCarrito(){
    return var_dump($_SESSION['carrito']);
}






?>