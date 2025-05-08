<?php
    declare(strict_types = 1);
    // class Producto {
    //     const IVA = 0.23;
    //     private static  $numProducto = 0;
    //     private  $codigo;

    //     public function __construct(string $cod) {
    //         self::$numProducto++;
    //         $this->codigo = $cod;
    //     }
    //     public function mostrarResumen(): string {
    //         return "El producto ".$this->codigo." es el numero ". self::$numProducto."<br>";
    //     }
    // }

    // $prod1 = new Producto("PS5");
    // echo $prod1->mostrarResumen();
    // $prod2 = new Producto("XBOX series X");
    // echo $prod2->mostrarResumen();
    // $prod3 = new Producto("Nintendo Switch");
    // echo $prod3->mostrarResumen();


    class Producto {
        // SIN NADA SON PROTEGIDAS Y SE PUEDE ACCEDER EN LAS HIJAS TAMBIEN
        public $codigo;
        public $nombre;
        public $nombreCorto;
        public $PVP;
    }
