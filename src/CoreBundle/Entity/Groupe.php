<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\GroupeRepository")
 */
class Groupe
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
     * @var int
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\Theme", cascade={"persist"})
     */
    private $theme;

    /**
     * @ORM\OneToOne(targetEntity="CoreBundle\Entity\User", cascade={"persist"})
     */
    private $leader;

    /**
     * Groupe constructor.
     * @param int $numero
     */
    public function __construct($numero)
    {
        $this->numero = $numero;
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
     * Get theme
     *
     * @return \CoreBundle\Entity\Theme
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set theme
     *
     * @param \CoreBundle\Entity\Theme $theme
     *
     * @return Groupe
     */
    public function setTheme(\CoreBundle\Entity\Theme $theme = null)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $string = (string)$this->getNumero();
        if (NULL !== $this->leader) {
            $string .= ' - ' . $this->getLeader();
        }
        return $string;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Groupe
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get leader
     *
     * @return \CoreBundle\Entity\User
     */
    public function getLeader()
    {
        return $this->leader;
    }

    /**
     * Set leader
     *
     * @param \CoreBundle\Entity\User $leader
     *
     * @return Groupe
     */
    public function setLeader(\CoreBundle\Entity\User $leader = null)
    {
        $this->leader = $leader;

        return $this;
    }
}
