<?php

use Doctrine\Common\Collectiones\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * EmpleadoBidireccional
 *
 * @ORM\Table(name="empleado", indexes={@ORM\Index(name="puesto_fk", columns={"puesto"})})
 * @ORM\Entity
 */
class EmpleadoBidireccional
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
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=9, nullable=false)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var \Puesto
     *
     * @ORM\ManyToOne(targetEntity="Puesto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="puesto", referencedColumnName="id")
     * })
     */
    private $puesto;


}
