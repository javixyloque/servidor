<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Equipo
 *
 * @ORM\Table(name="equipo")
 * @ORM\Entity
 */
class Equipo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_equipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="Partido", mappedBy="local")
     */
    private $partidosLocal;

    /**
     * @ORM\OneToMany(targetEntity="Partido", mappedBy="visitante")
     */
    private $partidosVisitante;

    public function __construct()
    {
        $this->partidosLocal = new ArrayCollection();
        $this->partidosVisitante = new ArrayCollection();
    }

    public function getIdEquipo(): ?int
    {
        return $this->idEquipo;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getPartidosLocal(): Collection
    {
        return $this->partidosLocal;
    }

    public function getPartidosVisitante(): Collection
    {
        return $this->partidosVisitante;
    }
}