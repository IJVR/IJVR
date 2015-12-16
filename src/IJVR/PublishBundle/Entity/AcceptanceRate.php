<?php

namespace IJVR\PublishBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AcceptanceRate
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AcceptanceRate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="string", length=255)
     */
    private $rate;

     /**
     * @var string
     *
     * @ORM\Column(name="review_delay", type="string", length=255)
     */
    private $review_delay;

     /**
     * @var string
     *
     * @ORM\Column(name="publish_delay", type="string", length=255)
     */
    private $publish_delay;

    /**
     * @var integer
     *
     * @ORM\Column(name="citations", type="integer")
     */
    private $citations;

    /**
     * @var integer
     *
     * @ORM\Column(name="hindex", type="integer")
     */
    private $hindex;

    /**
     * @var integer
     *
     * @ORM\Column(name="impact", type="integer")
     */
    private $impact;

     /**
     * @var integer
     *
     * @ORM\Column(name="citations_between", type="integer")
     */
    private $citations_between;

    /**
     * @var integer
     *
     * @ORM\Column(name="articles_between", type="integer")
     */
    private $articles_between;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rate
     *
     * @param string $rate
     * @return AcceptanceRate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set review_delay
     *
     * @param string $reviewDelay
     * @return AcceptanceRate
     */
    public function setReviewDelay($reviewDelay)
    {
        $this->review_delay = $reviewDelay;

        return $this;
    }

    /**
     * Get review_delay
     *
     * @return string 
     */
    public function getReviewDelay()
    {
        return $this->review_delay;
    }

    /**
     * Set publish_delay
     *
     * @param string $publishDelay
     * @return AcceptanceRate
     */
    public function setPublishDelay($publishDelay)
    {
        $this->publish_delay = $publishDelay;

        return $this;
    }

    /**
     * Get publish_delay
     *
     * @return string 
     */
    public function getPublishDelay()
    {
        return $this->publish_delay;
    }

    /**
     * Set citations
     *
     * @param integer $citations
     * @return AcceptanceRate
     */
    public function setCitations($citations)
    {
        $this->citations = $citations;

        return $this;
    }

    /**
     * Get citations
     *
     * @return integer 
     */
    public function getCitations()
    {
        return $this->citations;
    }

    /**
     * Set hindex
     *
     * @param integer $hindex
     * @return AcceptanceRate
     */
    public function setHindex($hindex)
    {
        $this->hindex = $hindex;

        return $this;
    }

    /**
     * Get hindex
     *
     * @return integer 
     */
    public function getHindex()
    {
        return $this->hindex;
    }

    /**
     * Set impact
     *
     * @param integer $impact
     * @return AcceptanceRate
     */
    public function setImpact($impact)
    {
        $this->impact = $impact;

        return $this;
    }

    /**
     * Get impact
     *
     * @return integer 
     */
    public function getImpact()
    {
        return $this->impact;
    }

    /**
     * Set citations_between
     *
     * @param integer $citationsBetween
     * @return AcceptanceRate
     */
    public function setCitationsBetween($citationsBetween)
    {
        $this->citations_between = $citationsBetween;

        return $this;
    }

    /**
     * Get citations_between
     *
     * @return integer 
     */
    public function getCitationsBetween()
    {
        return $this->citations_between;
    }

    /**
     * Set articles_between
     *
     * @param integer $articlesBetween
     * @return AcceptanceRate
     */
    public function setArticlesBetween($articlesBetween)
    {
        $this->articles_between = $articlesBetween;

        return $this;
    }

    /**
     * Get articles_between
     *
     * @return integer 
     */
    public function getArticlesBetween()
    {
        return $this->articles_between;
    }
}
