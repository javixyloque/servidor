<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * BecaBidireccional
 *
 * @ORM\Table(name="beca")
 * @ORM\Entity
 */
class BecaBidireccional
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
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;
    /**
     *  Una equipo tiene muchos jugadores
     * @ORM\OneToMany(targetEntity="SolicitanteBidireccional", mappedBy="beca")
     */
    private ArrayCollection $solicitantes;


    public function __construct()
    {
        $this->solicitantes = new ArrayCollection();
    }

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

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

    /**
     * Get the value of solicitantes
     */
    public function getSolicitantes(): ArrayCollection
    {
        return $this->solicitantes;
    }

    /**
     * Set the value of solicitantes
     */
    public function setSolicitantes(ArrayCollection $solicitantes): self
    {
        $this->solicitantes = $solicitantes;

        return $this;
    }
}
