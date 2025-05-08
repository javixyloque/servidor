<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Puesto
 *
 * @ORM\Table(name="puesto")
 * @ORM\Entity
 */
class Puesto
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
     * @var int
     *
     * @ORM\Column(name="sueldo", type="integer", nullable=false)
     */
    private $sueldo;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=200, nullable=false)
     */
    private $observaciones;


}
