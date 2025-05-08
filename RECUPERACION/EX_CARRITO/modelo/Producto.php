<?php

class Producto {
    private String $nombre;
    private float $precio;
    private int $cantidad;


    
    public function __construct($nom, $prec, $cant = 1) {
        $this->nombre = $nom;
        $this->precio = $prec;
        $this->cantidad = $cant;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre(): String
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre(String $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio(): float
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of cantidad
     */
    public function getCantidad(): int
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     */
    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }
}


?>