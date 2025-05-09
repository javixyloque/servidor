<?php

namespace App\Entity;

use App\Repository\PuestoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PuestoRepository::class)]
class Puesto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?int $sueldo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $observaciones = null;

    /**
     * @var Collection<int, Empleado>
     */
    #[ORM\OneToMany(targetEntity: Empleado::class, mappedBy: 'puesto')]
    private Collection $empleados;

    public function __construct()
    {
        $this->empleados = new ArrayCollection();
    }

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

    public function getSueldo(): ?int
    {
        return $this->sueldo;
    }

    public function setSueldo(int $sueldo): static
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): static
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * @return Collection<int, Empleado>
     */
    public function getEmpleados(): Collection
    {
        return $this->empleados;
    }

    public function addEmpleado(Empleado $empleado): static
    {
        if (!$this->empleados->contains($empleado)) {
            $this->empleados->add($empleado);
            $empleado->setPuesto($this);
        }

        return $this;
    }

    public function removeEmpleado(Empleado $empleado): static
    {
        if ($this->empleados->removeElement($empleado)) {
            // set the owning side to null (unless already changed)
            if ($empleado->getPuesto() === $this) {
                $empleado->setPuesto(null);
            }
        }

        return $this;
    }
}
