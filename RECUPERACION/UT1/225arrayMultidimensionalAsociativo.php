<?php

// Inventa un array multidimensional de tipo asociativo. Añade datos y léelo. Realiza un cambio (por ejemplo aumentar la nómina) Crea arrays unidimensionales donde guardes los datos en ese recorrido. Muestra posteriormente los datos de esos creados. (NOTA: Puedes usar formulario para introducir datos).

$productos = [
    [
        "Producto" => "Champú",
        "Precio" => 15.99
    ],
    [
        "Producto" => 15,
        "Precio" => 25.99
    ],
    [
        "Producto" => 20,
        "Precio" => 35.99
    ],
    [
        "Producto" => 25,
        "Precio" => 45.99
    ]
];

$arrayNombres = [];
$arrayPrecios = [];


foreach ($productos as $producto) {
        echo "Producto: ". $producto["Producto"]. "<br>";
        echo "Precio: ". $producto["Precio"]. "<br><br>";

        
    if ($producto["Producto"] == "Champú" ) {
        $producto["Precio"] = 3.99;
    }

    array_push($arrayNombres, $producto["Producto"]);
    array_push($arrayPrecios, $producto["Precio"]);
}

for ($i = 0; $i <= $arrayNombres; $i++) {
    echo "Producto: ". $arrayNombres[$i]. "<br>";
    echo "Precio: ". $arrayPrecios[$i]. "<br><br>";
}




?>