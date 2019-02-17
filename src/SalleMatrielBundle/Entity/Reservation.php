<?php

namespace SalleMatrielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="SalleMatrielBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="pausecafe", type="string", length=255)
     */
    private $pausecafe;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_personne", type="string", length=255)
     */
    private $nombrePersonne;

    /**
     * @return Salle
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * @param Salle $salle
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }

    /**
     * @var Salle
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumn(name="Salle", referencedColumnName="id")
     */

    private $salle ;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Reservation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Reservation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set pausecafe
     *
     * @param string $pausecafe
     *
     * @return Reservation
     */
    public function setPausecafe($pausecafe)
    {
        $this->pausecafe = $pausecafe;
    
        return $this;
    }

    /**
     * Get pausecafe
     *
     * @return string
     */
    public function getPausecafe()
    {
        return $this->pausecafe;
    }

    /**
     * Set nombrePersonne
     *
     * @param string $nombrePersonne
     *
     * @return Reservation
     */
    public function setNombrePersonne($nombrePersonne)
    {
        $this->nombrePersonne = $nombrePersonne;
    
        return $this;
    }

    /**
     * Get nombrePersonne
     *
     * @return string
     */
    public function getNombrePersonne()
    {
        return $this->nombrePersonne;
    }
}

