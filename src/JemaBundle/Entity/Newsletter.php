<?php

namespace JemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 *
 * @ORM\Table(name="Newsletter")
 * @ORM\Entity(repositoryClass="JemaBundle\Repository\NewsletterRepository")
 */
class Newsletter
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
     * @ORM\Column(name="title", type="string", length=64, nullable=true)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dAdded", type="date", nullable=true)
     */
    private $dAdded;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;


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
     * Set title
     *
     * @param string $title
     *
     * @return Newsletter
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
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
     * Set dAdded
     *
     * @param \DateTime $dAdded
     *
     * @return Newsletter
     */
    public function setDAdded($dAdded)
    {
        $this->dAdded = $dAdded;

        return $this;
    }

    /**
     * Get dAdded
     *
     * @return \DateTime
     */
    public function getDAdded()
    {
        return $this->dAdded;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Newsletter
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}

