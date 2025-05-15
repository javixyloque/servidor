<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitante
 *
 * @ORM\Table(name="solicitante", indexes={@ORM\Index(name="beca_fk", columns={"beca"})})
 * @ORM\Entity
 */
class Solicitante
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
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=10, nullable=false)
     */
    private $dni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nac", type="date", nullable=false)
     */
    private $fechaNac;

    /**
     * @var int
     *
     * @ORM\Column(name="nomina", type="integer", nullable=false)
     */
    private $nomina;

    /**
     * @var bool
     *
     * @ORM\Column(name="concedida", type="boolean", nullable=false)
     */
    private $concedida;

    /**
     * @var \Beca
     *
     * @ORM\ManyToOne(targetEntity="Beca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="beca", referencedColumnName="id")
     * })
     */
    private $beca;



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
     * Get the value of dni
     */
    public function getDni(): string
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     */
    public function setDni(string $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get the value of fechaNac
     */
    public function getFechaNac(): \DateTime
    {
        return $this->fechaNac;
    }

    /**
     * Set the value of fechaNac
     */
    public function setFechaNac(\DateTime $fechaNac): self
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }

    /**
     * Get the value of nomina
     */
    public function getNomina(): int
    {
        return $this->nomina;
    }

    /**
     * Set the value of nomina
     */
    public function setNomina(int $nomina): self
    {
        $this->nomina = $nomina;

        return $this;
    }

    /**
     * Get the value of concedida
     */
    public function isConcedida(): bool
    {
        return $this->concedida;
    }

    /**
     * Set the value of concedida
     */
    public function setConcedida(bool $concedida): self
    {
        $this->concedida = $concedida;

        return $this;
    }

    /**
     * Get the value of beca
     */
    public function getBeca(): \Beca
    {
        return $this->beca;
    }

    /**
     * Set the value of beca
     */
    public function setBeca(\Beca $beca): self
    {
        $this->beca = $beca;

        return $this;
    }
}
