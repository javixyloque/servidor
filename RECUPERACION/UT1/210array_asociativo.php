<?php

// Crear un array asociativo, donde guardes de 5 directores de cine y su película estrella. Recorre el array mostrando por cada director toda la información. 

$arrayCine = [
    "Quentin Tarantino" => "Pulp Fiction",
    "Alfred Hitchcock" => "Psicosis",
    "Christopher Nolan" => "Inception",
    "Francis Ford Coppola" => "The Godfather",
    "Clint Eastwood" => "Casablanca"
];

// BUCLE => IMPRIMIR
foreach($arrayCine as $director => $pelicula) {
    echo "Director: $director <br> Pelicula estrella: $pelicula <br><br>"; 
};


// En ese mismo recorrido crea dos arrays simples, uno que contenga las capitales y otro los países. Recórrelos, en este caso con un for.

// ARRAY_KEYS ARRAY_VALUES => CREAR ARRAYS SIMPLES
$directores = array_keys($arrayCine);
$peliculas = array_values($arrayCine);

// BUCLE => IMPRIMIR
for($i = 0; $i < count($directores); $i++) {
    echo "Director: $directores[$i] <br> Pelicula estrella: $peliculas[$i] <br><br>";
};

?>