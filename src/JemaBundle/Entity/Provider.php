<?php

namespace JemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Provider
 *
 * @ORM\Table(name="provider")
 * @ORM\Entity(repositoryClass="JemaBundle\Repository\ProviderRepository")
 */
class Provider extends User
{
    /**
     * @var string
     *
     * @ORM\Column(name="trueName", type="string", length=128, nullable=true, unique=true)
     */
    private $trueName;

    /**
     * @var string
     *
     * @ORM\Column(name="webSite", type="string", length=255, nullable=true)
     */
    private $webSite;

    /**
     * @var string
     *
     * @ORM\Column(name="mailContact", type="string", length=255, nullable=true)
     */
    private $mailContact;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=32, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="vat", type="string", length=32, nullable=true, unique=true)
     */
    private $vat;

    /**
     * @ORM\OneToOne(targetEntity="Picture")
     * @ORM\JoinColumn(name="logoId", nullable=true)
     */
    private $logo;

    /**
     * @ORM\OneToMany(targetEntity="Stage", mappedBy="provider", cascade={"all"})
     */
    private $stages;

    public function __construct() {
        $this->stages = new ArrayCollection();
    }


    /**
     * Set trueName
     *
     * @param string $trueName
     *
     * @return Provider
     */
    public function setTrueName($trueName)
    {
        $this->trueName = $trueName;

        return $this;
    }

    /**
     * Get trueName
     *
     * @return string
     */
    public function getTrueName()
    {
        return $this->trueName;
    }

    /**
     * Set webSite
     *
     * @param string $webSite
     *
     * @return Provider
     */
    public function setWebSite($webSite)
    {
        $this->webSite = $webSite;

        return $this;
    }

    /**
     * Get webSite
     *
     * @return string
     */
    public function getWebSite()
    {
        return $this->webSite;
    }

    /**
     * Set mailContact
     *
     * @param string $mailContact
     *
     * @return Provider
     */
    public function setMailContact($mailContact)
    {
        $this->mailContact = $mailContact;

        return $this;
    }

    /**
     * Get mailContact
     *
     * @return string
     */
    public function getMailContact()
    {
        return $this->mailContact;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Provider
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set vat
     *
     * @param string $vat
     *
     * @return Provider
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set logo
     *
     * @param integer $logo
     *
     * @return Surfer
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return int
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Get stages
     *
     * @return ArrayCollection
     */
    public function getStages()
    {
        return $this->stages;
    }
}

