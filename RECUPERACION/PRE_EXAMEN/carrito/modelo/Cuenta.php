<?php


class Cuenta {
    private String $titular;
    private  float $saldo;
    private bool $negativo;

    public function __construct($tit, $sal=0, $neg=false) {
        $this->titular = $tit;
        $this->saldo = $sal;
        $this->negativo = $neg;
    }
    

    /**
     * Get the value of titular
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set the value of titular
     */
    public function setTitular($titular): self
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get the value of saldo
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     */
    public function setSaldo($saldo): self
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get the value of negativo
     */
    public function getNegativo()
    {
        return $this->negativo;
    }

    /**
     * Set the value of negativo
     */
    public function setNegativo($negativo): self
    {
        $this->negativo = $negativo;

        return $this;
    }
}


?>