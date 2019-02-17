<?php

namespace SalleMatrielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeSalle
 *
 * @ORM\Table(name="type_salle")
 * @ORM\Entity(repositoryClass="SalleMatrielBundle\Repository\TypeSalleRepository")
 */
class TypeSalle
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return TypeSalle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    public function __toString()
    {
        return(string)$this->getLibelle();
    }
}

