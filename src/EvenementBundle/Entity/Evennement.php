<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evennement
 *
 * @ORM\Table(name="evennement")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\EvennementRepository")
 */
class Evennement
{
    /**
     * @ORM\ManyToOne(targetEntity="SalleMatrielBundle\Entity\Salle")
     * @ORM\JoinColumn(name="id_salle" , referencedColumnName="id" ,onDelete="CASCADE")
     */
    private $salle;

    /**
     * @return mixed
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * @param mixed $salle
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }


    /**
     * @ORM\ManyToOne(targetEntity="TypeEvennement")
     * @ORM\JoinColumn(name="id_type" , referencedColumnName="id" ,onDelete="CASCADE")
     */
    private $type;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtDebut", type="date")
     */
    private $dtDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtFin", type="date")
     */
    private $dtFin;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPlace", type="integer")
     */
    private $nbPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="entree", type="string", length=255)
     */
    private $entree;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @param \DateTime $dtDebut
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Evennement
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dtDebut
     *
     * @param \DateTime $dtDebut
     *
     * @return Evennement
     */
    public function setDtDebut($dtDebut)
    {
        $this->dtDebut = $dtDebut;

        return $this;
    }

    /**
     * Get dtDebut
     *
     * @return \DateTime
     */
    public function getDtDebut()
    {
        return $this->dtDebut;
    }

    /**
     * Set dtFin
     *
     * @param \DateTime $dtFin
     *
     * @return Evennement
     */
    public function setDtFin($dtFin)
    {
        $this->dtFin = $dtFin;

        return $this;
    }

    /**
     * Get dtFin
     *
     * @return \DateTime
     */
    public function getDtFin()
    {
        return $this->dtFin;
    }

    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     *
     * @return Evennement
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    /**
     * Get nbPlace
     *
     * @return int
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * Set entree
     *
     * @param string $entree
     *
     * @return Evennement
     */
    public function setEntree($entree)
    {
        $this->entree = $entree;

        return $this;
    }

    /**
     * Get entree
     *
     * @return string
     */
    public function getEntree()
    {
        return $this->entree;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Evennement
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     *
     * @return Evennement
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}

