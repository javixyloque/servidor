<?php
    
    class User {
        private string $nombre;
        private string $email;
        private int $edad;

        public function __construct() {
            $this -> nombre = "Javier";
            $this -> email = "javier@gmail.com";
            $this -> edad = 25;
        }

        public function __toString(): string {
            return "Nombre: ". $this -> nombre. "<br>"."Email: ". $this -> email. "<br>"."Edad: ". $this -> edad. "<br>";
        }

    }


?>