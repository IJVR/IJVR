<?php
namespace IJVR\PublishBundle\Entity;

 
use Doctrine\ORM\EntityRepository;
 
/**
 * WorkRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */



class IssueRepository extends EntityRepository
{
    
    public function findbyDate()
    {
        return $this->findBy(array(), array('publish_date' => 'ASC'));
    }
        
}

?>