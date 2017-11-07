<?php

namespace JemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity(repositoryClass="JemaBundle\Repository\PromotionRepository")
 */
class Promotion
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
     * @ORM\ManyToOne(targetEntity="provider")
     * @ORM\JoinColumn(name="providerId", nullable=true)
     */
    private $providerId;

    /**
     * @ORM\ManyToOne(targetEntity="serviceCat")
     * @ORM\JoinColumn(name="serviceCatId", nullable=true)
     */
    private $serviceCatId;

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
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="date", nullable=true)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="date", nullable=true)
     */
    private $end;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="displayStart", type="date", nullable=true)
     */
    private $displayStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="displayEnd", type="date", nullable=true)
     */
    private $displayEnd;


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
     * Set providerId
     *
     * @param integer $providerId
     *
     * @return Promotion
     */
    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;

        return $this;
    }

    /**
     * Get providerId
     *
     * @return int
     */
    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * Set serviceCatId
     *
     * @param integer $serviceCatId
     *
     * @return Promotion
     */
    public function setServiceCatId($serviceCatId)
    {
        $this->serviceCatId = $serviceCatId;

        return $this;
    }

    /**
     * Get serviceCatId
     *
     * @return int
     */
    public function getServiceCatId()
    {
        return $this->serviceCatId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Promotion
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
     * @return Promotion
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
     * Set url
     *
     * @param string $url
     *
     * @return Promotion
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

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Promotion
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Promotion
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set displayStart
     *
     * @param \DateTime $displayStart
     *
     * @return Promotion
     */
    public function setDisplayStart($displayStart)
    {
        $this->displayStart = $displayStart;

        return $this;
    }

    /**
     * Get displayStart
     *
     * @return \DateTime
     */
    public function getDisplayStart()
    {
        return $this->displayStart;
    }

    /**
     * Set displayEnd
     *
     * @param \DateTime $displayEnd
     *
     * @return Promotion
     */
    public function setDisplayEnd($displayEnd)
    {
        $this->displayEnd = $displayEnd;

        return $this;
    }

    /**
     * Get displayEnd
     *
     * @return \DateTime
     */
    public function getDisplayEnd()
    {
        return $this->displayEnd;
    }
}

