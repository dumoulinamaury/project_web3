<?php

namespace JemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlockSurfer
 *
 * @ORM\Table(name="block_surfer")
 * @ORM\Entity(repositoryClass="JemaBundle\Repository\BlockSurferRepository")
 */
class BlockSurfer
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
     * @ORM\ManyToOne(targetEntity="block")
     * @ORM\JoinColumn(name="blockId", nullable=true)
     */
    private $block;

    /**
     * @ORM\ManyToOne(targetEntity="surfer")
     * @ORM\JoinColumn(name="surferId", nullable=true)
     */
    private $surfer;

    /**
     * @var int
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true)
     */
    private $sequence;


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
     * Set block
     *
     * @param integer $block
     *
     * @return BlockSurfer
     */
    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return int
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set surfer
     *
     * @param integer $surfer
     *
     * @return BlockSurfer
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
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return BlockSurfer
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }
}

