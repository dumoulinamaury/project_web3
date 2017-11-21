<?php

namespace JemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceCat
 *
 * @ORM\Table(name="service_cat")
 * @ORM\Entity(repositoryClass="JemaBundle\Repository\ServiceCatRepository")
 */
class ServiceCat
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
     * @ORM\Column(name="name", type="string", length=128, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     *
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="inFront", type="boolean", nullable=true)
     */
    private $inFront;

    /**
     * @var bool
     *
     * @ORM\Column(name="validated", type="boolean", nullable=true)
     */
    private $validated;

    /**
     * @ORM\OneToOne(targetEntity="Picture", cascade={"all"} )
     * @ORM\JoinColumn(name="photoId")
     */
    private $picture;

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
     * Set name
     *
     * @param string $name
     *
     * @return ServiceCat
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ServiceCat
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

    /**
     * Set inFront
     *
     * @param boolean $inFront
     *
     * @return ServiceCat
     */
    public function setInFront($inFront)
    {
        $this->inFront = $inFront;

        return $this;
    }

    /**
     * Get inFront
     *
     * @return bool
     */
    public function getInFront()
    {
        return $this->inFront;
    }

    /**
     * Set validated
     *
     * @param boolean $validated
     *
     * @return ServiceCat
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return bool
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * Set picture
     *
     * @param \JemaBundle\Entity\Picture
     *
     * @return ServiceCat
     */
    public function setPicture(\JemaBundle\Entity\Picture $picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return \JemaBundle\Entity\Picture
     */
    public function getPicture()
    {
        return $this->picture;
    }
}

