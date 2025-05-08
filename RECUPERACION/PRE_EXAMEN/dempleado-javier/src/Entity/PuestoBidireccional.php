<?php

use Doctrine\Common\Collections\ArrayCollection;


use Doctrine\ORM\Mapping as ORM;

/**
 * PuestoBidireccional
 *
 * @ORM\Table(name="puesto")
 * @ORM\Entity
 */
class PuestoBidireccional
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="sueldo", type="integer", nullable=false)
     */
    private $sueldo;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=200, nullable=false)
     */
    private $observaciones;
    
    /**
     *  Un puesto tiene muchos empleados
     * @ORM\OneToMany(targetEntity="EmpleadoBidireccional", mappedBy="puesto")
     */
    private ArrayCollection $empleados;

    public function __construct (){
        $this->empleados = new ArrayCollection();
    }



    

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
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
     * Get the value of sueldo
     */
    public function getSueldo(): int
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     */
    public function setSueldo(int $sueldo): self
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    /**
     * Get the value of observaciones
     */
    public function getObservaciones(): string
    {
        return $this->observaciones;
    }

    /**
     * Set the value of observaciones
     */
    public function setObservaciones(string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get the value of empleados
     */
    public function getEmpleados(): ArrayCollection
    {
        return $this->empleados;
    }

    /**
     * Set the value of empleados
     */
    public function setEmpleados(ArrayCollection $empleados): self
    {
        $this->empleados = $empleados;

        return $this;
    }
}
