<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ChambreRepository")
 */
class Chambre
{

    const TYPE_ADMIN = 'admin';
    const TYPE_ETUDIANT = 'etudiant';
    const TYPE_STAFF = 'staff';
    const TYPE_ALUMNI = 'alumni';

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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255, unique=true)
     */
    private $numero;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer")
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="festive", type="boolean")
     */
    private $festive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="balcon", type="boolean")
     */
    private $balcon;


    private $placesOccupees;

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
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Chambre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Chambre
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return int
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     *
     * @return Chambre
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Chambre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlacesOccupees()
    {
        return $this->placesOccupees;
    }

    /**
     * @param mixed $placesOccupees
     */
    public function setPlacesOccupees($placesOccupees)
    {
        $this->placesOccupees = $placesOccupees;
    }

    /**
     * Get festive
     *
     * @return boolean
     */
    public function getFestive()
    {
        return $this->festive;
    }

    /**
     * Set festive
     *
     * @param boolean $festive
     *
     * @return Chambre
     */
    public function setFestive($festive)
    {
        $this->festive = $festive;

        return $this;
    }

    /**
     * Get balcon
     *
     * @return boolean
     */
    public function getBalcon()
    {
        return $this->balcon;
    }

    /**
     * Set balcon
     *
     * @param boolean $balcon
     *
     * @return Chambre
     */
    public function setBalcon($balcon)
    {
        $this->balcon = $balcon;

        return $this;
    }
}
