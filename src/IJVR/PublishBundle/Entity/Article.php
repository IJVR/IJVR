<?php
namespace IJVR\PublishBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="IJVR\PublishBundle\Entity\ArticleRepository")
 */
class Article
{




    /**

   * @ORM\ManyToOne(targetEntity="IJVR\PublishBundle\Entity\Issue", cascade={"persist"})
   * @ORM\JoinColumn(nullable=true)
   */

    private $issue;

	


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
     * @var string
     *
     * @ORM\Column(name="abstract", type="text")
     */
    private $abstract;
	
	
	/**
     * @var char
     *
     * @ORM\Column(name="status", type="string", length=1)
     */
    private $status;
	
	    /**

   * @ORM\ManyToMany(targetEntity="IJVR\PublishBundle\Entity\Keyword", cascade={"persist"})

   */
    private $keywords;	 
	
	/**

   * @ORM\ManyToMany(targetEntity="IJVR\PublishBundle\Entity\Author", cascade={"persist"})

   */
    private $authors;	
	
	    /**
     * @var int
     *
     * @ORM\Column(name="pages", type="integer")
     */
    private $pages;
	
	

    /**
     * @var date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
	
	/**
     * @var date
     *
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $update_date;
	
	
	/**
     * @var date
     *
     * @ORM\Column(name="$publish_date", type="datetime")
     */
    private $publish_date;
    /**
     * Get id
     *
     * @return integer 
     */
	 
	  /**
	* @ORM\OneToOne(targetEntity="IJVR\PublishBundle\Entity\Pdf", cascade={"persist"})
	*/
	private $pdf;
	
	/**
	* @ORM\ManyToOne(targetEntity="IJVR\UserBundle\Entity\User\User", cascade={"persist"})
	*/
	private $user;
  
  
    public function getId()
    {
        return $this->id;
    }
	
	public function __construct()
	{
		// Par défaut, la date de l'annonce est la date d'aujourd'hui
		$this->date = new \Datetime();
		$this->publish_date = new \Datetime();
		$this->update_date = new \Datetime();
		$this->status=0;
		$this->pages=0;
	}
	
    /**
     * Set title
     *
     * @param string $title
     * @return Article
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
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set abstract
     *
     * @param string $abstract
     * @return Article
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
        return $this;
    }
    /**
     * Get abstract
     *
     * @return string 
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Set issue
     *
     * @param \IJVR\PublishBundle\Entity\Issue $issue
     * @return Article
     */
    public function setIssue(\IJVR\PublishBundle\Entity\Issue $issue = null)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Get issue
     *
     * @return \IJVR\PublishBundle\Entity\Issue 
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Set pdf
     *
     * @param \IJVR\PublishBundle\Entity\Pdf $pdf
     * @return Article
     */
    public function setPdf(\IJVR\PublishBundle\Entity\Pdf $pdf = null)
    {
        $this->pdf = $pdf;
    
        return $this;
    }

    /**
     * Get pdf
     *
     * @return \IJVR\PublishBundle\Entity\Pdf 
     */
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Article
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set pages
     *
     * @param integer $pages
     * @return Article
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    
        return $this;
    }

    /**
     * Get pages
     *
     * @return integer 
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Add keywords
     *
     * @param \IJVR\PublishBundle\Entity\Keyword $keywords
     * @return Article
     */
    public function addKeyword(\IJVR\PublishBundle\Entity\Keyword $keywords)
    {
        $this->keywords[] = $keywords;
    
        return $this;
    }

    /**
     * Remove keywords
     *
     * @param \IJVR\PublishBundle\Entity\Keyword $keywords
     */
    public function removeKeyword(\IJVR\PublishBundle\Entity\Keyword $keywords)
    {
        $this->keywords->removeElement($keywords);
    }

    /**
     * Get keywords
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set user
     *
     * @param \IJVR\UserBundle\Entity\User\User $user
     * @return Article
     */
    public function setUser(\IJVR\UserBundle\Entity\User\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \IJVR\UserBundle\Entity\User\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set update_date
     *
     * @param \DateTime $updateDate
     * @return Article
     */
    public function setUpdateDate($updateDate)
    {
        $this->update_date = $updateDate;
    
        return $this;
    }

    /**
     * Get update_date
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * Set publish_date
     *
     * @param \DateTime $publishDate
     * @return Article
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

    /**
     * Add authors
     *
     * @param \IJVR\PublishBundle\Entity\Author $authors
     * @return Article
     */
    public function addAuthor(\IJVR\PublishBundle\Entity\Author $authors)
    {
        $this->authors[] = $authors;
    
        return $this;
    }

    /**
     * Remove authors
     *
     * @param \IJVR\PublishBundle\Entity\Author $authors
     */
    public function removeAuthor(\IJVR\PublishBundle\Entity\Author $authors)
    {
        $this->authors->removeElement($authors);
    }

    /**
     * Get authors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAuthors()
    {
        return $this->authors;
    }
}
