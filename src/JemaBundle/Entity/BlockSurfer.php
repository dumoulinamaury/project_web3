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
    private $blockId;

    /**
     * @ORM\ManyToOne(targetEntity="surfer")
     * @ORM\JoinColumn(name="surferId", nullable=true)
     */
    private $surferId;

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
     * Set blockId
     *
     * @param integer $blockId
     *
     * @return BlockSurfer
     */
    public function setBlockId($blockId)
    {
        $this->blockId = $blockId;

        return $this;
    }

    /**
     * Get blockId
     *
     * @return int
     */
    public function getBlockId()
    {
        return $this->blockId;
    }

    /**
     * Set surferId
     *
     * @param integer $surferId
     *
     * @return BlockSurfer
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

