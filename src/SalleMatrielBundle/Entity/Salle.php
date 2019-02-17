<?php

namespace SalleMatrielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity(repositoryClass="SalleMatrielBundle\Repository\SalleRepository")
 */
class Salle
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
     * @var string
     *
     * @ORM\Column(name="nomSalle", type="string", length=255)
     */
    private $nomSalle;

    /**
     * @var string
     *
     * @ORM\Column(name="Etage", type="string", length=255)
     */
    private $etage;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=255)
     */
    private $prix ;

    /**
     * @var TypeSalle
     * @ORM\ManyToOne(targetEntity="TypeSalle")
     * @ORM\JoinColumn(name="typeSalle", referencedColumnName="id")
     */

    private $typeSalle ;

    /**
     * @return typeSalle
     */
    public function getTypeSalle()
    {
        return $this->typeSalle;
    }

    /**
     * @param typeSalle $typeSalle
     */
    public function setTypeSalle($typeSalle)
    {
        $this->typeSalle = $typeSalle;
    }

    /**
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param string $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

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
     * Set nomSalle
     *
     * @param string $nomSalle
     *
     * @return Salle
     */
    public function setNomSalle($nomSalle)
    {
        $this->nomSalle = $nomSalle;

        return $this;
    }

    /**
     * Get nomSalle
     *
     * @return string
     */
    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    /**
     * Set etage
     *
     * @param string $etage
     *
     * @return Salle
     */
    public function setEtage($etage)
    {
        $this->etage = $etage;

        return $this;
    }

    /**
     * Get etage
     *
     * @return string
     */
    public function getEtage()
    {
        return $this->etage;
    }
    public function __toString()
    {
        return(string)$this->getTypeSalle();
    }
}

