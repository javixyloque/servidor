<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * EquipoBidireccional
 *
 * @ORM\Table(name="equipo")
 * @ORM\Entity
 */
class EquipoBidireccional
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
     * @var int|null
     *
     * @ORM\Column(name="socios", type="integer", nullable=true)
     */
    private $socios;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fundacion", type="integer", nullable=true)
     */
    private $fundacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ciudad", type="string", length=100, nullable=true)
     */
    private $ciudad;

    /**
     *  Un equipo tiene muchos jugadores
     * @ORM\OneToMany(targetEntity="JugadorBidireccional", mappedBy="equipo")
     */
    private ArrayCollection $jugadores;



    public function __construct() {
        $this->jugadores = new ArrayCollection();
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
     * Get the value of socios
     */
    public function getSocios(): ?int
    {
        return $this->socios;
    }

    /**
     * Set the value of socios
     */
    public function setSocios(?int $socios): self
    {
        $this->socios = $socios;

        return $this;
    }

    /**
     * Get the value of fundacion
     */
    public function getFundacion(): ?int
    {
        return $this->fundacion;
    }

    /**
     * Set the value of fundacion
     */
    public function setFundacion(?int $fundacion): self
    {
        $this->fundacion = $fundacion;

        return $this;
    }

    /**
     * Get the value of ciudad
     */
    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     */
    public function setCiudad(?string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of jugadores
     */
    public function getJugadores(): ArrayCollection
    {
        return $this->jugadores;
    }

    /**
     * Set the value of jugadores
     */
    public function setJugadores(ArrayCollection $jugadores): self
    {
        $this->jugadores = $jugadores;

        return $this;
    }
}




?>