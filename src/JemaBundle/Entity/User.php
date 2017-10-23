<?php

namespace JemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="JemaBundle\Repository\UserRepository")
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
     * @ORM\Column(name="userType", type="string", length=1)
     */
    private $userType;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=255)
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
     * @var int
     *
     * @ORM\Column(name="pcId", type="integer", nullable=true)
     */
    private $pcId;

    /**
     * @var int
     *
     * @ORM\Column(name="municipalityId", type="integer", nullable=true)
     */
    private $municipalityId;

    /**
     * @var string
     *
     * @ORM\Column(name="localityId", type="string", length=64, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=true)
     */
    private $name;

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
     * @ORM\Column(name="tva", type="string", length=32, nullable=true)
     */
    private $tva;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=64, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=64, nullable=true)
     */
    private $lastName;

    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter", type="boolean", nullable=true)
     */
    private $newsletter;

    /**
     * @var string
     *
     * @ORM\Column(name="photoId", type="integer", nullable=true)
     */
    private $photoId;

    /**
     * @var int
     *
     * @ORM\Column(name="logoId", type="integer", nullable=true)
     */
    private $logoId;

    /**
     * @var int
     *
     * @ORM\Column(name="avatarId", type="integer", nullable=true)
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
     * Set userType
     *
     * @param string $userType
     *
     * @return User
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
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
     * @param string $localityId
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
     * @return string
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
     * Set webSite
     *
     * @param string $webSite
     *
     * @return User
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
     * @return User
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
     * @return User
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
     * Set tva
     *
     * @param string $tva
     *
     * @return User
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return string
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     *
     * @return User
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return bool
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set photoId
     *
     * @param string $photoId
     *
     * @return User
     */
    public function setPhotoId($photoId)
    {
        $this->photoId = $photoId;

        return $this;
    }

    /**
     * Get photoId
     *
     * @return string
     */
    public function getPhotoId()
    {
        return $this->photoId;
    }

    /**
     * Set logoId
     *
     * @param integer $logoId
     *
     * @return User
     */
    public function setLogoId($logoId)
    {
        $this->logoId = $logoId;

        return $this;
    }

    /**
     * Get logoId
     *
     * @return int
     */
    public function getLogoId()
    {
        return $this->logoId;
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

