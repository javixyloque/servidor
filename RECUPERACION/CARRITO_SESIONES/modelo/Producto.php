<?php

// EL CONSTRUCTOR
class Producto {
    private String $nombre;
    private float $precio;
    private int $cantidad;

    // CONSTRUCTOR => CUANDO ES LLAMADO LA CANTIDAD SE FIJA A 1
    public function __construct ($nom, $pre) {
        $this->nombre = $nom;
        $this->precio = $pre;
        $this->cantidad = 1;
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

    public function sumarProducto(): self {
        $this->cantidad++;
        return $this;
    }
}