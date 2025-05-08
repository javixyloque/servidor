<?php

// Definición de la clase Movimiento (reemplaza esto con tu definición real)
class Movimiento {
    private $isNegativo;

    public function __construct($isNegativo) {
        $this->isNegativo = $isNegativo;
    }

  
    /**
     * Get the value of isNegativo
     */
    public function getIsNegativo()
    {
        return $this->isNegativo;
    }

    /**
     * Set the value of isNegativo
     */
    public function setIsNegativo($isNegativo): self
    {
        $this->isNegativo = $isNegativo;

        return $this;
    }
}


?>