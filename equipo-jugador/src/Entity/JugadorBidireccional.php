<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * JugadorBidireccional
 *
 * @ORM\Table(name="jugador", indexes={@ORM\Index(name="equipo_fk", columns={"equipo"})})
 * @ORM\Entity
 */
class JugadorBidireccional
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
     * @var int
     *
     * @ORM\Column(name="nombre", type="text", nullable=false)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="apellidos", type="text", nullable=false)
     */
    private $apellidos;

    /**
     * @var int|null
     *
     * @ORM\Column(name="edad", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var \EquipoBidireccional
     *
     * @ORM\ManyToOne(targetEntity="EquipoBidireccional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipo", referencedColumnName="id_equipo")
     * })
     */
    private $equipo;



    /**
     * Get the value of idJugador
     *
     * @return  int
     */ 
    public function getIdJugador()
    {
        return $this->idJugador;
    }

    /**
     * Get the value of nombre
     *
     * @return  int
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param  int  $nombre
     *
     * @return  self
     */ 
    public function setNombre(int $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     *
     * @return  int
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @param  int  $apellidos
     *
     * @return  self
     */ 
    public function setApellidos(int $apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of edad
     *
     * @return  int|null
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @param  int|null  $edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of equipo
     *
     * @return  \EquipoBidireccional
     */ 
    public function getEquipo(): EquipoBidireccional
    {
        return $this->equipo;
    }

    

    /**
     * Set the value of equipo
     *
     * @param  \EquipoBidireccional  $equipo
     *
     * @return  self
     */ 
    public function setEquipo(\EquipoBidireccional $equipo)
    {
        $this->equipo = $equipo;

        return $this;
    }



}
