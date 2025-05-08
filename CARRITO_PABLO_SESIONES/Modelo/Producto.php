<?php
class Producto{
    private $nombre;
    private $precio;

    public function __construct($nombre, $precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    //Getters y setters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function setPrecio(float $precio): void {
        $this->precio = $precio;
    }
}