<?php

class Cuenta {
    private string $nombre;
    private int $saldo;
    private bool $negativo;
    private array $movimientos;

    public function __construct(string $nombre, bool $negativo) {
        $this->nombre = $nombre;
        $this->negativo = $negativo;
        $this->movimientos = [];
        $this->saldo = 0;
    }


    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of saldo
     */
    public function getSaldo(): int
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     */
    public function setSaldo(int $saldo): self
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get the value of negativo
     */
    public function getNegativo(): bool
    {
        return $this->negativo;
    }

    /**
     * Set the value of negativo
     */
    public function setNegativo(bool $negativo): self
    {
        $this->negativo = $negativo;

        return $this;
    }

    /**
     * Get the value of movimientos
     */
    public function getMovimientos(): array
    {
        return $this->movimientos;
    }

    /**
     * Set the value of movimientos
     */
    public function setMovimientos(array $movimientos): self
    {
        $this->movimientos = $movimientos;

        return $this;
    }
}


?>