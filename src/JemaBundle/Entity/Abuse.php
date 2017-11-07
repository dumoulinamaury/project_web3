<?php

namespace JemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abuse
 *
 * @ORM\Table(name="abuse")
 * @ORM\Entity(repositoryClass="JemaBundle\Repository\AbuseRepository")
 */
class Abuse
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
     * @ORM\ManyToOne(targetEntity="comment")
     * @ORM\JoinColumn(name="commentId")
     */
    private $commentId;

    /**
     * @ORM\ManyToOne(targetEntity="surfer")
     * @ORM\JoinColumn(name="surferId")
     */
    private $surferId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dAdded", type="date", nullable=true)
     */
    private $dAdded;


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
     * Set commentId
     *
     * @param integer $commentId
     *
     * @return Abuse
     */
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;

        return $this;
    }

    /**
     * Get commentId
     *
     * @return int
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * Set surferId
     *
     * @param integer $surferId
     *
     * @return Abuse
     */
    public function setSurferId($surferId)
    {
        $this->surferId = $surferId;

        return $this;
    }

    /**
     * Get surferId
     *
     * @return int
     */
    public function getSurferId()
    {
        return $this->surferId;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Abuse
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
     * Set dAdded
     *
     * @param \DateTime $dAdded
     *
     * @return Abuse
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
}

