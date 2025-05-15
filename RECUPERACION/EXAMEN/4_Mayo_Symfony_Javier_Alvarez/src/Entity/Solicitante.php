<?php

namespace App\Entity;

use App\Repository\SolicitanteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SolicitanteRepository::class)]
class Solicitante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 9)]
    private ?string $dni = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $fecha_nac = null;

    #[ORM\Column]
    private ?int $nomina = null;

    #[ORM\Column]
    private ?bool $concedida = null;

    #[ORM\ManyToOne(inversedBy: 'solicitantes')]
    private ?Beca $beca = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(string $dni): static
    {
        $this->dni = $dni;

        return $this;
    }

    public function getFechaNac(): ?\DateTime
    {
        return $this->fecha_nac;
    }

    public function setFechaNac(\DateTime $fecha_nac): static
    {
        $this->fecha_nac = $fecha_nac;

        return $this;
    }

    public function getNomina(): ?int
    {
        return $this->nomina;
    }

    public function setNomina(int $nomina): static
    {
        $this->nomina = $nomina;

        return $this;
    }

    public function isConcedida(): ?bool
    {
        return $this->concedida;
    }

    public function setConcedida(bool $concedida): static
    {
        $this->concedida = $concedida;

        return $this;
    }

    public function getBeca(): ?Beca
    {
        return $this->beca;
    }

    public function setBeca(?Beca $beca): static
    {
        $this->beca = $beca;

        return $this;
    }
}
