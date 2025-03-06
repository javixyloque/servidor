<?php
// Escribe un programa que nos diga la comida que nos toca hoy . Llamará a una función que devuelve un plato de forma aleatoria.


$platos = [
    "Ensalada",
    "Pasta carbonara",
    "Lasagna",
    "Pizza",
    "Hamburguesa",
    "Tacos",
    "Arroz con leche",
    "Gazpacho",
    "Sushi",
    "Tortilla de patatas",

];
function platoAleatorio($platos) {
    return $platos[rand(0, count($platos)-1)];
}

echo "Hoy te toca comer: ". platoAleatorio($platos). ".";



?>