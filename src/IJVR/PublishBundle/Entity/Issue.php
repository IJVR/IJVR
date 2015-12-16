<?php

namespace IJVR\PublishBundle\Entity;

use Doctrine\ORM\Mapping as ORM;






/**
 * Issue
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="IJVR\PublishBundle\Entity\IssueRepository")
 */
class Issue
{



   /**

   * @ORM\ManyToOne(targetEntity="IJVR\PublishBundle\Entity\Volume", cascade={"persist"})

   */

    private $volume;


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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var date
     *
     * @ORM\Column(name="$publish_date", type="datetime")
     */
    private $publish_date;


    public function __construct()
    {
        // Par défaut, la date de l'annonce est la date d'aujourd'hui
        $this->publish_date = new \Datetime();

    }

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
     * Set title
     *
     * @param string $title
     * @return Issue
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
     * Set volume
     *
     * @param \IJVR\PublishBundle\Entity\Volume $volume
     * @return Issue
     */
    public function setVolume(\IJVR\PublishBundle\Entity\Volume $volume = null)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return \IJVR\PublishBundle\Entity\Volume 
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set publish_date
     *
     * @param \DateTime $publishDate
     * @return Issue
     */
    public function setPublishDate($publishDate)
    {
        $this->publish_date = $publishDate;
    
        return $this;
    }

    /**
     * Get publish_date
     *
     * @return \DateTime 
     */
    public function getPublishDate()
    {
        return $this->publish_date;
    }
}
