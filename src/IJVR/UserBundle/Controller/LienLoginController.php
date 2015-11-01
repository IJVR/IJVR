<?php

namespace IJVR\UserBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Session\Session;
use IJVR\PublishBundle\Entity\Issue;
use IJVR\PublishBundle\Entity\Volume;
use IJVR\PublishBundle\Form\IssueType;




class LienLoginController extends BaseController
{	
	
	
	//-----PAGE DE REDIRECTION-----------
	public function redirectAction(Request $request)
    {   
	    //redirige vers l'accueil
		return $this->redirect($this->generateUrl('ijvr_platform_home'));
		
	}
	
	public function moderationAction(Request $request)
    {   

		//renvoi la page	
		
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRPublishBundle:Article')
			;
			
		/*
		0 uploaded
		1 is being read
		2 correction to make
		3 correction made
		4 waiting to publish
		5 rejected
		6 published
		*/
		$posts=$repository->findByStatus(0);
		$posts_being_read=$repository->findByStatus(1);
		$posts_correction=$repository->findByStatus(3);
		$posts_waiting_to_publish=$repository->findByStatus(4);
		
		
		
		$content = $this->get('templating')->render('IJVRUserBundle:Default:moderation.html.twig',array('posts'=>$posts,'read' => $posts_being_read ,'correction' => $posts_correction,'wait' => $posts_waiting_to_publish ));
		return new response($content);
	}
	
		public function beingReadAction($id,Request $request)
    {   
		$request = $this->container->get('request');

		$em = $this->getDoctrine()->getManager();
		$user=$this->container->get('security.context')->getToken()->getUser();
		
		//on cherche le post
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRPublishBundle:Article')
			;
		$post = $repository->find($id);
		//on lui retire le signalement
		$post->setStatus(1);
		$post->setUpdateDate(new \Datetime());
		$em->persist($post);			  
		$em->flush();		
		
		return $this->redirect($this->generateUrl('moderation'));
		//return new response("ok");
	}
	
		public function waitingAction($id,Request $request)
    {   
		$request = $this->container->get('request');

		$em = $this->getDoctrine()->getManager();
		$user=$this->container->get('security.context')->getToken()->getUser();
		
		//on cherche le post
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRPublishBundle:Article')
			;
		$post = $repository->find($id);
		//on lui retire le signalement
		$post->setStatus(4);
		$post->setUpdateDate(new \Datetime());		
		$em->persist($post);			  
		$em->flush();		
		
		return $this->redirect($this->generateUrl('moderation'));
		//return new response("ok");
	}
	
		public function correction_to_makeAction($id,Request $request)
    {   
		$request = $this->container->get('request');

		$em = $this->getDoctrine()->getManager();
		$user=$this->container->get('security.context')->getToken()->getUser();
		
		//on cherche le post
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRPublishBundle:Article')
			;
		$post = $repository->find($id);
		//on lui retire le signalement
		$post->setStatus(2);
		$post->setUpdateDate(new \Datetime());
		$em->persist($post);			  
		$em->flush();		
		
		return $this->redirect($this->generateUrl('moderation'));
		//return new response("ok");
	}
	
		public function rejectedAction($id,Request $request)
    {   
		$request = $this->container->get('request');

		$em = $this->getDoctrine()->getManager();
		$user=$this->container->get('security.context')->getToken()->getUser();
		
		//on cherche le post
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRPublishBundle:Article')
			;
		$post = $repository->find($id);
		//on lui retire le signalement
		$post->setStatus(5);		
		$em->persist($post);
		$post->setUpdateDate(new \Datetime());
		$em->flush();		
		
		return $this->redirect($this->generateUrl('moderation'));
		//return new response("ok");
	}
	
		public function publishedAction($id,Request $request)
    {   
		$request = $this->container->get('request');

		$em = $this->getDoctrine()->getManager();
		$user=$this->container->get('security.context')->getToken()->getUser();
		
		//on cherche le post
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRPublishBundle:Article')
			;
		$post = $repository->find($id);
		//on lui retire le signalement
		$post->setStatus(6);		
		$em->persist($post);
		$post->setUpdateDate(new \Datetime());
		$post->setPublishDate(new \Datetime());
		$em->flush();		
		
		return $this->redirect($this->generateUrl('moderation'));
		//return new response("ok");
	}
	
	public function publish_issueAction(Request $request)
    {   
		$issue = new Issue();
		
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRPublishBundle:Article')
			;			
			
		$repository_v = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRPublishBundle:Volume')
			;	
		

		$posts=$repository->findByStatus(4);
		
		$volume=$repository_v->findAll();

		$form = $this->get('form.factory')->create(new IssueType, $issue);
		
	    $form->handleRequest($request);

	    // Si le formulaire est rempli
	    if ($form->isValid()) {
			
			
			$articles_to_publish=$this->getRequest()->get('mesIds');
			
			$em = $this->getDoctrine()->getManager();
	      	$em->persist($issue);
	      	$em->flush();
			
			$v=$this->getRequest()->get('volume');
			$vol=$repository_v->findByYear($v);
			
			if($vol){
			
			$issue->setVolume($vol[0]);
			$em->persist($issue);
			$em->flush();
			
			}
			else{
			$issue->setVolume(new Volume());
			$issue->getVolume()->setYear($v);
			$em->persist($issue);
			$em->flush();
			
			}		
			
			
			if(isset($articles_to_publish)){
			foreach ($articles_to_publish as $article){
			
				$repository = $this->getDoctrine()
				->getManager()
				->getRepository('IJVRPublishBundle:Article')
				;
				
				$art=$repository->find($article);
				
				$art->setStatus(6);
				$art->setIssue($issue);
				$art->setUpdateDate(new \Datetime());
				$art->setPublishDate(new \Datetime());
				$em->persist($art);
				$em->flush();
			}
			
			
			$request->getSession()->getFlashBag()->add('notice', 'Your issue has been published');
		
			}

    	}

		//renvoi la page	
		$content = $this->get('templating')->render('IJVRUserBundle:Default:issue_publish.html.twig', array(
	      'form' => $form->createView(),'articles' => $posts, 'volume' => $volume
	    ));
		return new response($content);
	}
	
		//----PAGE DE GESTION DES DROITS D'ADMIN---------------------------
		
	public function gestionAction(Request $request)
    {   
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRUserBundle:User\User')
			;
		//cherche les admins	
		$admins=$repository->Find_admin();
		//cherche les utilisateurs simples	
		$user=$repository->Find_users();
			

		//renvoi la page	
		$content = $this->get('templating')->render('IJVRUserBundle:Default:gestion.html.twig',array('admins'=>$admins,'users' =>$user));
		return new response($content);
	}
	
	
	
	
		//----ACTION DONNER DROITS ADMIN---------------------------
		public function donneadminAction($id,Request $request)
    {   
		$request = $this->container->get('request');

		$em = $this->getDoctrine()->getManager();
		
		$user=$this->container->get('security.context')->getToken()->getUser();
		
		//on cherche l'utilisateur
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRUserBundle:User\User')
			;
		$user = $repository->find($id);
		//on lui donne le role d'admin
		$role = array('ROLE_ADMIN'); 
		$user->setRoles($role);
		$em->persist($user);			  
		$em->flush();		
			
		return new response("ok");
	}
	//----ACTION RETIRER DROITS ADMIN---------------------------
		public function retireadminAction($id,Request $request)
    {   
		$request = $this->container->get('request');

		$em = $this->getDoctrine()->getManager();
		
		$user=$this->container->get('security.context')->getToken()->getUser();
		
		//on cherche l'uilisateur
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRUserBundle:User\User')
			;
		
		$user = $repository->find($id);
		
		//on lui donne un role utilisateur simple
		$role = array('ROLE_USER'); 
		$user->setRoles($role);		
		$em->persist($user);			  
		$em->flush();		
			
		return new response("ok");
	}
	
	//----PAGE TABLEAU DE BORD ---------------------------
	public function dashboardAction(Request $request)
    {   
		//renvoi la page	
		return $this->render('IJVRUserBundle:Default:dashboard.html.twig');

	}
	
}