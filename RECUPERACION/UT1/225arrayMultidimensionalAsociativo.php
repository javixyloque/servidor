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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>225 - Formulario</title>
</head>
<body>
    <form action='<?=$_SERVER["PHP_SELF"] ?>' method="post">
        <label for=""></label>
        <input type="text">
        <label for=""></label>
        <input type="text">
        <input type="submit" value="">
    </form>
</body>
</html>