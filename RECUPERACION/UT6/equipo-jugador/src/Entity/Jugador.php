<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Jugador
 *
 * @ORM\Table(name="jugador", indexes={@ORM\Index(name="equipo_fk", columns={"equipo"})})
 * @ORM\Entity
 */
class Jugador
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_jugador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJugador;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=50, nullable=false)
     */
    private $apellidos;

    /**
     * @var int|null
     *
     * @ORM\Column(name="edad", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var \Equipo
     *
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipo", referencedColumnName="id")
     * })
     */
    private $equipo;



    /**
     * Get the value of idJugador
     */
    public function getIdJugador(): int
    {
        return $this->idJugador;
    }

    /**
     * Set the value of idJugador
     */
    public function setIdJugador(int $idJugador): self
    {
        $this->idJugador = $idJugador;

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
     * Get the value of apellidos
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad(): ?int
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     */
    public function setEdad(?int $edad): self
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of equipo
     */
    public function getEquipo(): \Equipo
    {
        return $this->equipo;
    }

    /**
     * Set the value of equipo
     */
    public function setEquipo(\Equipo $equipo): self
    {
        $this->equipo = $equipo;

        return $this;
    }
}
