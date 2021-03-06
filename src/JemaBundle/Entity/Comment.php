<?php

namespace JemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="JemaBundle\Repository\CommentRepository")
 */
class Comment
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
     * @ORM\ManyToOne(targetEntity="surfer")
     * @ORM\JoinColumn(name="surferId")
     */
    private $surfer;

    /**
     * @ORM\ManyToOne(targetEntity="provider")
     * @ORM\JoinColumn(name="providerId")
     */
    private $provider;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=128, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

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
     * Set surfer
     *
     * @param integer $surfer
     *
     * @return Comment
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
     * Set provider
     *
     * @param integer $provider
     *
     * @return Comment
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return int
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return Comment
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Comment
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
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set dAdded
     *
     * @param \DateTime $dAdded
     *
     * @return Comment
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

