<?php
session_start();
require_once'./Libro.php';
$librosComprar  = [
    new Libro('Tu nombre', 20.14, 1),
    new Libro('Harry Potter', 14.99, 1),
    new Libro('Lo imposible', 50.14, 1),
    new Libro('Los Williams', 40.14, 1),
    
];



$libros = json_decode($_SESSION['libros']) ?? [];

//Genera una Lista de libros (simulando una base de datos)
//Contiene la lógiga de negocio del manejo del carrito


function anadirLibro ($libro) {
    if ($libro) {
        array_push($libros, $libro);
        $_SESSION['libros'] = $libros;
        
    } else {
    }
}

function filtrado ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
