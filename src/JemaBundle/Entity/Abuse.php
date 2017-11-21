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
    private $comment;

    /**
     * @ORM\ManyToOne(targetEntity="surfer")
     * @ORM\JoinColumn(name="surferId")
     */
    private $surfer;

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
     * Set comment
     *
     * @param integer $comment
     *
     * @return Abuse
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return int
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set surfer
     *
     * @param integer $surfer
     *
     * @return Abuse
     */
    public function setSurfer($surfer)
    {
        $this->surfer = $surfer;

        return $this;
    }

    /**
     * Get surfer
     *
     * @return int
     */
    public function getSurfer()
    {
        return $this->surfer;
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

