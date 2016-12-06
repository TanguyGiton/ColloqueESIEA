<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theme
 *
 * @ORM\Table(name="theme")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ThemeRepository")
 */
class Theme
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="nbGroupes", type="integer")
     */
    private $nbGroupes;

    private $placesOccupees;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get nbGroupes
     *
     * @return int
     */
    public function getNbGroupes()
    {
        return $this->nbGroupes;
    }

    /**
     * Set nbGroupes
     *
     * @param integer $nbGroupes
     *
     * @return Theme
     */
    public function setNbGroupes($nbGroupes)
    {
        $this->nbGroupes = $nbGroupes;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getTitle();
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Theme
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}

