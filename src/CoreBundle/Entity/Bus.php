<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bus
 *
 * @ORM\Table(name="bus")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\BusRepository")
 */
class Bus
{
    const CAMPUS_PARIS = User::CAMPUS_PARIS;
    const CAMPUS_LAVAL = User::CAMPUS_LAVAL;

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
     * @ORM\Column(name="campus", type="string")
     */
    private $campus;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer")
     */
    private $capacite;

    /**
     * @var int
     */
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
     * @return Bus
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get campus
     *
     * @return string
     */
    public function getCampus()
    {
        return $this->campus;
    }

    /**
     * Set campus
     *
     * @param string $campus
     *
     * @return Bus
     */
    public function setCampus($campus)
    {
        $this->campus = $campus;

        return $this;
    }

    /**
     * @return int
     */
    public function getPlacesOccupees()
    {
        return $this->placesOccupees;
    }

    /**
     * @param int $placesOccupees
     */
    public function setPlacesOccupees($placesOccupees)
    {
        $this->placesOccupees = $placesOccupees;
    }


}
