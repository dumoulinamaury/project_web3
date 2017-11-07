<?php

namespace JemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="userType", type="string")
 * @ORM\DiscriminatorMap({"admin" = "User", "provider" = "Provider", "surfer" = "Surfer"})
 */
class User
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
     * @ORM\Column(name="name", type="string", length=64, unique=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, unique=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=128)
     */
    private $pass;

    /**
     * @var int
     *
     * @ORM\Column(name="failedLogin", type="integer", nullable=true)
     */
    private $failedLogin;

    /**
     * @var bool
     *
     * @ORM\Column(name="activated", type="boolean", nullable=true)
     */
    private $activated;

    /**
     * @var bool
     *
     * @ORM\Column(name="banned", type="boolean", nullable=true)
     */
    private $banned;

    /**
     * @ORM\ManyToOne(targetEntity="PostalCode")
     * @ORM\JoinColumn(name="pcId", nullable=true)
     */
    private $pcId;

    /**
     * @ORM\ManyToOne(targetEntity="Municipality")
     * @ORM\JoinColumn(name="municipalityId", nullable=true)
     */
    private $municipalityId;

    /**
     * @ORM\ManyToOne(targetEntity="Locality")
     * @ORM\JoinColumn(name="localityId", nullable=true)
     */
    private $localityId;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=128, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="numberBox", type="string", length=16, nullable=true)
     */
    private $numberBox;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="register", type="date", nullable=true)
     */
    private $register;

    /**
     * @ORM\OneToOne(targetEntity="Picture")
     * @ORM\JoinColumn(name="avatarId", nullable=true)
     */
    private $avatarId;


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
     * @return User
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
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return User
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set failedLogin
     *
     * @param integer $failedLogin
     *
     * @return User
     */
    public function setFailedLogin($failedLogin)
    {
        $this->failedLogin = $failedLogin;

        return $this;
    }

    /**
     * Get failedLogin
     *
     * @return int
     */
    public function getFailedLogin()
    {
        return $this->failedLogin;
    }

    /**
     * Set activated
     *
     * @param boolean $activated
     *
     * @return User
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;

        return $this;
    }

    /**
     * Get activated
     *
     * @return bool
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Set banned
     *
     * @param boolean $banned
     *
     * @return User
     */
    public function setBanned($banned)
    {
        $this->banned = $banned;

        return $this;
    }

    /**
     * Get banned
     *
     * @return bool
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * Set pcId
     *
     * @param integer $pcId
     *
     * @return User
     */
    public function setPcId($pcId)
    {
        $this->pcId = $pcId;

        return $this;
    }

    /**
     * Get pcId
     *
     * @return int
     */
    public function getPcId()
    {
        return $this->pcId;
    }

    /**
     * Set municipalityId
     *
     * @param integer $municipalityId
     *
     * @return User
     */
    public function setMunicipalityId($municipalityId)
    {
        $this->municipalityId = $municipalityId;

        return $this;
    }

    /**
     * Get municipalityId
     *
     * @return int
     */
    public function getMunicipalityId()
    {
        return $this->municipalityId;
    }

    /**
     * Set localityId
     *
     * @param integer $localityId
     *
     * @return User
     */
    public function setLocalityId($localityId)
    {
        $this->localityId = $localityId;

        return $this;
    }

    /**
     * Get localityId
     *
     * @return int
     */
    public function getLocalityId()
    {
        return $this->localityId;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return User
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set numberBox
     *
     * @param string $numberBox
     *
     * @return User
     */
    public function setNumberBox($numberBox)
    {
        $this->numberBox = $numberBox;

        return $this;
    }

    /**
     * Get numberBox
     *
     * @return string
     */
    public function getNumberBox()
    {
        return $this->numberBox;
    }

    /**
     * Set register
     *
     * @param \DateTime $register
     *
     * @return User
     */
    public function setRegister($register)
    {
        $this->register = $register;

        return $this;
    }

    /**
     * Get register
     *
     * @return \DateTime
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * Set avatarId
     *
     * @param integer $avatarId
     *
     * @return User
     */
    public function setAvatarId($avatarId)
    {
        $this->avatarId = $avatarId;

        return $this;
    }

    /**
     * Get avatarId
     *
     * @return int
     */
    public function getAvatarId()
    {
        return $this->avatarId;
    }
}

