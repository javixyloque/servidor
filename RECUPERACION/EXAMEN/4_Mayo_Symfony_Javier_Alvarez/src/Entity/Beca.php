<?php

namespace App\Entity;

use App\Repository\BecaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BecaRepository::class)]
class Beca
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion = null;

    #[ORM\Column]
    private ?int $cantidad = null;

    /**
     * @var Collection<int, Solicitante>
     */
    #[ORM\OneToMany(targetEntity: Solicitante::class, mappedBy: 'beca')]
    private Collection $solicitantes;

    public function __construct()
    {
        $this->solicitantes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): static
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * @return Collection<int, Solicitante>
     */
    public function getSolicitantes(): Collection
    {
        return $this->solicitantes;
    }

    public function addSolicitante(Solicitante $solicitante): static
    {
        if (!$this->solicitantes->contains($solicitante)) {
            $this->solicitantes->add($solicitante);
            $solicitante->setBeca($this);
        }

        return $this;
    }

    public function removeSolicitante(Solicitante $solicitante): static
    {
        if ($this->solicitantes->removeElement($solicitante)) {
            // set the owning side to null (unless already changed)
            if ($solicitante->getBeca() === $this) {
                $solicitante->setBeca(null);
            }
        }

        return $this;
    }
}
