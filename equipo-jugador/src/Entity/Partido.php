<?php



use Doctrine\ORM\Mapping as ORM;
use App\Repository\PartidoRepository;

/**
 * Partido
 *
 * @ORM\Table(name="partido", indexes={@ORM\Index(name="visitante", columns={"visitante"}), @ORM\Index(name="local", columns={"local"})})
 * @ORM\Entity(repositoryClass=PartidoRepository::class)
 */
class Partido
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_partido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPartido;

    /**
     * @var int
     *
     * @ORM\Column(name="goles_local", type="integer", nullable=false)
     */
    private $golesLocal;

    /**
     * @var int
     *
     * @ORM\Column(name="goles_visitante", type="integer", nullable=false)
     */
    private $golesVisitante;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var \Equipo
     *
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="local", referencedColumnName="id_equipo")
     * })
     */
    private $local;

    /**
     * @var \Equipo
     *
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visitante", referencedColumnName="id_equipo")
     * })
     */
    private $visitante;



    /**
     * Get the value of idPartido
     *
     * @return  int
     */ 
    public function getIdPartido()
    {
        return $this->idPartido;
    }

    

    

    /**
     * Get the value of golesLocal
     *
     * @return  int
     */ 
    public function getGolesLocal()
    {
        return $this->golesLocal;
    }

    /**
     * Set the value of golesLocal
     *
     * @param  int  $golesLocal
     *
     * @return  self
     */ 
    public function setGolesLocal(int $golesLocal)
    {
        $this->golesLocal = $golesLocal;

        return $this;
    }

    /**
     * Get the value of golesVisitante
     *
     * @return  int
     */ 
    public function getGolesVisitante()
    {
        return $this->golesVisitante;
    }

    /**
     * Set the value of golesVisitante
     *
     * @param  int  $golesVisitante
     *
     * @return  self
     */ 
    public function setGolesVisitante(int $golesVisitante)
    {
        $this->golesVisitante = $golesVisitante;

        return $this;
    }

    /**
     * Get the value of fecha
     *
     * @return  \DateTime
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @param  \DateTime  $fecha
     *
     * @return  self
     */ 
    public function setFecha(\DateTime $fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of local
     *
     * @return  \Equipo
     */ 
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set the value of local
     *
     * @param  \Equipo  $local
     *
     * @return  self
     */ 
    public function setLocal(\Equipo $local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get the value of visitante
     *
     * @return  \Equipo
     */ 
    public function getVisitante()
    {
        return $this->visitante;
    }

    /**
     * Set the value of visitante
     *
     * @param  \Equipo  $visitante
     *
     * @return  self
     */ 
    public function setVisitante(\Equipo $visitante)
    {
        $this->visitante = $visitante;

        return $this;
    }

    public function __toString()
    {
        return $this->getLocal()->getNombre()." ".$this->getGolesLocal(). " - ". $this->getGolesVisitante()." ".$this->getVisitante()->getNombre();

    }
}
