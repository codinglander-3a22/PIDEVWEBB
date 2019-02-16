<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEvennement
 *
 * @ORM\Table(name="type_evennement")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\TypeEvennementRepository")
 */
class TypeEvennement
{
    /**
      * @ORM\OneToMany(targetEntity="Evennement", mappedBy="type")
     */
    private $evennements;

    /**
     * @return mixed
     */
    public function getEvennements()
    {
        return $this->evennements;
    }

    /**
     * @param mixed $evennements
     */
    public function setEvennements($evennements)
    {
        $this->evennements = $evennements;
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return TypeEvennement
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TypeEvennement
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
}

