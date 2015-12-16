<?php

namespace IJVR\UserBundle\Entity\User;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
	public function Find_admin()
  {		$qb = $this->createQueryBuilder('u');
		$qb->where('u.roles LIKE :role')
					->setParameters(array('role' => '%"ROLE_ADMIN"%'));

    return $qb->getQuery()
          ->getResult();
  }
  
    public function Find_users()
  {		
		$a=$this->Find_admin();
		$admin_names=array();
		foreach ($a as $b){
			
			array_push($admin_names,$b->getUsername());
		}
		$qb = $this->createQueryBuilder('u');
		$qb->where($qb->expr()->notIn('u.username',$admin_names));
					

    return $qb->getQuery()
          ->getResult();	
  }

  public function Find_users_like($username)
  {
	  	$qb = $this->createQueryBuilder('u');
		$qb->where('u.username LIKE :user')
					->setParameters(array('user' => '%'.$username.'%'));

    return $qb->getQuery()
          ->getResult();
  }
	
  
}