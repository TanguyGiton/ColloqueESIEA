<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\UserRepository")
 */
class User implements UserInterface
{

    const CAMPUS_PARIS = 'Paris';
    const CAMPUS_LAVAL = 'Laval';
    const CAMPUS_UFA = 'UFA';
    //const CAMPUS_INTER = 'INTER';

    const NOCTURNE_SKI = 'ski';
    const NOCTURNE_RAQUETTE = 'raquette';
    const NOCTURNE_NB_SKI = 110;
    const NOCTURNE_NB_RAQUETTE = 94;

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
     * @ORM\Column(name="email", type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=true)
     */
    private $password;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="campus", type="string", length=10, nullable=true)
     */
    private $campus;

    /**
     * @var string
     *
     * @ORM\Column(name="portable", type="string", length=20, nullable=true)
     */
    private $portable;

    /**
     * @var string
     *
     * @ORM\Column(name="medical", type="text", nullable=true)
     */
    private $medical;

    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="array", nullable=true)
     */
    private $roles;

    /**
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\Groupe", cascade={"persist"})
     */
    private $groupe;

    /**
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\Chambre", cascade={"persist"})
     */
    private $chambre;

    /**
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\PackActivites", cascade={"persist"})
     */
    private $packActivites;

    /**
     * @var string
     *
     * @ORM\Column(name="nocturne", type="string", nullable=true, length=255)
     */
    private $nocturne;

    /**
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\Bus", cascade={"persist"})
     */
    private $bus;


    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->setIsActive(false);
        $this->setRoles(['ROLE_USER']);
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
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
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
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get portable
     *
     * @return string
     */
    public function getPortable()
    {
        return $this->portable;
    }

    /**
     * Set portable
     *
     * @param string $portable
     *
     * @return User
     */
    public function setPortable($portable)
    {
        $this->portable = $portable;

        return $this;
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return Role[] The user roles
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return NULL;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->getEmail();
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        return NULL;
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
     * @return User
     */
    public function setCampus($campus)
    {
        $this->campus = $campus;

        return $this;
    }

    /**
     * Get medical
     *
     * @return string
     */
    public function getMedical()
    {
        return $this->medical;
    }

    /**
     * Set medical
     *
     * @param string $medical
     *
     * @return User
     */
    public function setMedical($medical)
    {
        $this->medical = $medical;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \CoreBundle\Entity\Groupe
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set groupe
     *
     * @param \CoreBundle\Entity\Groupe $groupe
     *
     * @return User
     */
    public function setGroupe(\CoreBundle\Entity\Groupe $groupe = null)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get chambre
     *
     * @return \CoreBundle\Entity\Chambre
     */
    public function getChambre()
    {
        return $this->chambre;
    }

    /**
     * Set chambre
     *
     * @param \CoreBundle\Entity\Chambre $chambre
     *
     * @return User
     */
    public function setChambre(\CoreBundle\Entity\Chambre $chambre = null)
    {
        $this->chambre = $chambre;

        return $this;
    }

    /**
     * Get packActivites
     *
     * @return \CoreBundle\Entity\PackActivites
     */
    public function getPackActivites()
    {
        return $this->packActivites;
    }

    /**
     * Set packActivites
     *
     * @param \CoreBundle\Entity\PackActivites $packActivites
     *
     * @return User
     */
    public function setPackActivites(\CoreBundle\Entity\PackActivites $packActivites = null)
    {
        $this->packActivites = $packActivites;

        return $this;
    }

    /**
     * Get nocturne
     *
     * @return array
     */
    public function getNocturne()
    {
        return $this->nocturne;
    }

    /**
     * Set nocturne
     *
     * @param array $nocturne
     *
     * @return User
     */
    public function setNocturne($nocturne)
    {
        $this->nocturne = $nocturne;

        return $this;
    }

    /**
     * Get bus
     *
     * @return \CoreBundle\Entity\Bus
     */
    public function getBus()
    {
        return $this->bus;
    }

    /**
     * Set bus
     *
     * @param \CoreBundle\Entity\Bus $bus
     *
     * @return User
     */
    public function setBus(\CoreBundle\Entity\Bus $bus = null)
    {
        $this->bus = $bus;

        return $this;
    }
}
