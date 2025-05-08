<?php
    require_once ('./Producto.php');

    $p = new Producto("PS5");
    if ($p instanceof Producto) {
        echo "Es un producto";
        echo "La clase es ". get_class($p);

        class_alias("Producto", "Articulo");
        class_alias("Producto", "Articulo");
        // INTELEPHENSE DA ERROR
        $c = new Articulo("Nintendo Switch");

        echo "Un articulo es un ".get_class($c);

        print_r(get_class_methods("Producto"));
        print_r(get_class_vars("Producto"));
        print_r(get_object_vars($p));

        if (method_exists($p, "mostrarResumen")) {
            $p -> mostrarResumen();
        }
    }   