<?php

namespace JemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipality
 *
 * @ORM\Table(name="municipality")
 * @ORM\Entity(repositoryClass="JemaBundle\Repository\MunicipalityRepository")
 */
class Municipality
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
     * @ORM\Column(name="municipality", type="string", length=128)
     */
    private $municipality;


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
     * Set municipality
     *
     * @param string $municipality
     *
     * @return Municipality
     */
    public function setMunicipality($municipality)
    {
        $this->municipality = $municipality;

        return $this;
    }

    /**
     * Get municipality
     *
     * @return string
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }
}

