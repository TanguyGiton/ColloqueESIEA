<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PackActivites
 *
 * @ORM\Table(name="pack_activites")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\PackActivitesRepository")
 */
class PackActivites
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
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_places", type="integer")
     */
    private $nbPlaces;

    /**
     * @ORM\ManyToMany(targetEntity="CoreBundle\Entity\Activite", cascade={"persist"})
     */
    private $activites;

    /**
     * @var int
     */
    private $occupation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activites = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get nbPlaces
     *
     * @return integer
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * Set nbPlaces
     *
     * @param integer $nbPlaces
     *
     * @return PackActivites
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    /**
     * Add activite
     *
     * @param \CoreBundle\Entity\Activite $activite
     *
     * @return PackActivites
     */
    public function addActivite(\CoreBundle\Entity\Activite $activite)
    {
        if (count($this->activites) < 2) {
            $this->activites[] = $activite;
        }

        return $this;
    }

    /**
     * Remove activite
     *
     * @param \CoreBundle\Entity\Activite $activite
     */
    public function removeActivite(\CoreBundle\Entity\Activite $activite)
    {
        $this->activites->removeElement($activite);
    }

    /**
     * @return int
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * @param int $occupation
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $string = $this->getDate()->format('d/m/Y') . ' - ';

        foreach ($this->getActivites() as $activite) {
            $string .= $activite->getNom() . ', ';
        }

        return $string;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return PackActivites
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get activites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivites()
    {
        return $this->activites;
    }
}
