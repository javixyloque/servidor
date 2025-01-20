<?php
    require_once'../modelo/Producto.php';
    $productos = [
        new Producto("Pan de molde", 1.29),
        new Producto("Leche entera 1L", 0.99),
        new Producto("Huevos 12 unidades", 2.39),
        new Producto("Manzanas 1kg", 1.75),
        new Producto("Pasta espaguetis 500g", 0.95),
        new Producto("Tomate frito 400g", 1.45),
        new Producto("Aceite de oliva 1L", 499),
        new Producto("Café molido 250g", 3.49),
        new Producto("Cereal de desayuno 500g", 2.99),
        new Producto("Detergente para ropa 3L", 7.50)
    ];

    // CREAR VARIABLE DE SESIÓN PARA EL CARRITO SI NO EXISTE
    // if (!isset($_COOKIE['carrito'])) {
    //     setcookie("carrito", json_encode([]), time() + (2 * 24 *3600));
    // } else if (!isset($_COOKIE['acumulado'])) {
    //     setcookie("acumulado", 0, time() + (2 * 24 *3600));
    // }



    function filtrado ($data) {
        $data = trim($data);
        $data = strip_tags($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function pintarCarrito($carrito, $acumulado) {
        echo "<h1>Carrito de compras</h1>";
        echo "<table>";
        echo "<tr><th>Producto</th><th>Precio</th><th>ELIMINAR</th>";

        foreach ($carrito as $indice => $producto) {
            echo "<tr><th>".$producto->getNombre()."</th><th>".$producto->getPrecio()."</th><th><button action='./eliminar.php?nombreProd=".$producto->getNombre()."' style='cursor: pointer'>Eliminar</button></th></tr>";

            
        }
        echo "<h4>Total a pagar ┌( ͝° ͜ʖ͡°)=ε/̵͇̿̿/’̿’̿ ̿   :</h4>"."<h5>".$acumulado."</h5>";
    }

?>