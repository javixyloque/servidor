<?php
declare(strict_types=1);

    // HAY QUE SERIALIZAR EL OBJETO (a post no le gusta)
    class Producto {
        private string $nombre;
        private float $precio;

        public function __construct($nombre, $precio) {
            $this -> nombre = $nombre;
            $this -> precio = $precio;
        }







        // GETTERS Y SETTERS    
        public function getNombre(): string {
            return $this -> nombre;
        }

        public function setNombre($nom) {
            $this -> nombre = $nom;
        }

        public function getPrecio(): float {
            return $this -> precio;
        }
        public function setPrecio($prec) {
            $this -> precio = $prec;
        }


        public function __toString(): string {
            return $this -> nombre."<br>Precio: ".$this ->precio."&euro;";
        }
    }
