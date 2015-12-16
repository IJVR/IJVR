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
use IJVR\PublishBundle\Entity\AcceptanceRate;
use IJVR\PublishBundle\Form\IssueType;




class LienLoginController extends BaseController
{	
	
	
	//-----PAGE DE REDIRECTION-----------
	public function redirectAction(Request $request)
    {  
	    //redirige vers l'accueil
		return $this->redirect($this->generateUrl('ijvr_platform_home'));
		
	}

	public function changesAction(Request $request)
    {  
	    //redirige vers l'accueil

    	$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRPublishBundle:AcceptanceRate');

		$m=$repository->findAll();
		$em = $this->getDoctrine()->getManager();

		if(isset($m[0])){

			$metrics=$m[0];
		}

		else{
			$metrics=new AcceptanceRate();
			$metrics->setRate(0);
			$metrics->setReviewDelay(0);
			$metrics->setPublishDelay(0);
			$metrics->setCitations(0);
			$metrics->setHindex(0);
			$metrics->setImpact(0);
			$metrics->setCitationsBetween(0);
			$metrics->setArticlesBetween(0);
			$em->persist($metrics);			  
			$em->flush();		


		}

    	$acceptance_rate=$this->get('request')->request->get('acceptance_rate');
		$review_delay=$this->get('request')->request->get('review_delay');
		$publish_delay=$this->get('request')->request->get('publish_delay');
		$citations=$this->get('request')->request->get('citations');
		$hindex=$this->get('request')->request->get('hindex');
		$citations_between=$this->get('request')->request->get('citations_between');
		$articles_between=$this->get('request')->request->get('articles_between');

		if($citations_between){
			$metrics->setCitationsBetween($citations_between);
		}

		else{
			$metrics->setCitationsBetween($metrics->getCitationsBetween());
		}

		if($articles_between){
			$metrics->setArticlesBetween($articles_between);
		}

		else{
			$metrics->setArticlesBetween($metrics->getArticlesBetween());
		}		

		if($acceptance_rate){
			$metrics->setRate($acceptance_rate);
		}

		else{
			$metrics->setRate($metrics->getRate());
		}

		if($review_delay){
			$metrics->setReviewDelay($review_delay);
		}

		else{
			$metrics->setReviewDelay($metrics->getReviewDelay());
		}


		if($publish_delay){
			$metrics->setPublishDelay($publish_delay);
		}

		else{
			$metrics->setPublishDelay($metrics->getPublishDelay());
		}
		if($citations){

			$metrics->setCitations($citations);

		}

		else{
			$metrics->setCitations($metrics->getCitations());
		}

		if($hindex){

			$metrics->setHindex($hindex);

		}

		else{
			$metrics->setHindex($metrics->getHindex());
		}


		$impact=$metrics->getCitationsBetween()/$metrics->getArticlesBetween();
		$metrics->setImpact($impact);
		$em->persist($metrics);			  
		$em->flush();		



		return $this->redirect($this->generateUrl('dashboard'));
		
	}

	public function searchUserAction(Request $request)
    {   

	    $repository_user = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRUserBundle:User\User');	

			
		$users=$repository_user->Find_users_like($_GET['search']);


		$us=$repository_user->findAll();
		$names=array();
		foreach ($us as $u) {
			array_push($names,$u->getUsername());
		}

		return $this->render('IJVRUserBundle:Default:searchUser.html.twig',array('users' => $users,'names' =>$names ));
		
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


	public function justUploadedAction($id,Request $request)
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
		$post->setStatus(0);
		$post->setUpdateDate(new \Datetime());
		$em->persist($post);			  
		$em->flush();		
		
		//ini_set('sendmail_from', 'n0delrue@gmail.com');
			// send mail to inform 

	        //find user's email and name
		$to = $post->getUser()->get('email');
		$username = $post->getUser()->get('username');
		$comment = $post->getComment();

	        //headers in order to avoid spam list
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
		$headers .= 'To: user <$mail>' . "\r\n";
		$headers .= 'From: server n0delrue@gmail.com "\r\n"';

			//send mail to validate   
	      	//Mail to the user
		$subject = 'Article uploaded in IJVR';
		$message = '$username, Your new article has weel been uploaded to the IJVR website';
		//mail($to,$subject,$message);

			//Mail to the Editor
		$to ='n0delrue@enib.fr';
		$subject = 'Article uploaded in IJVR';
		$message = '$username has uploaded a new article in the IJVR website';
		//mail($to,$subject,$message);


		return $this->redirect($this->generateUrl('moderation'));
		//return new response("ok");
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
		if(isset($_POST['commentaire']))
			$post->setComment($_POST['commentaire']);
		$post->setUpdateDate(new \Datetime());
		$em->persist($post);			  
		$em->flush();	

		//ini_set('sendmail_from', 'n0delrue@gmail.com');
			// send mail to inform 

	        //find user's email and name
		$to = $this->container->get('security.context')->getToken()->getUser()->getEmail();
		$username =$this->container->get('security.context')->getToken()->getUser()->getUsername();
		$comment = $post->getComment();

	        //headers in order to avoid spam list
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
		$headers .= 'To: user <$mail>' . "\r\n";
		$headers .= 'From: server n0delrue@gmail.com "\r\n"';

			//send mail with the comment    
	      	//Mail to the user
		$subject = 'Correction to make article IJVR';
		$message = $username.', You have just received a message from IJVR to make a correction in your article :
		'.$comment;
		//mail($to,$subject,$message);
		
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

		//ini_set('sendmail_from', 'n0delrue@gmail.com');
			// send mail to inform 

	        //find user's email and name
		$to = $post->getUser()->getEmail();
		$username = $post->getUser()->getUsername();

	        //headers in order to avoid spam list
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
		$headers .= 'To: user <$mail>' . "\r\n";
		$headers .= 'From: server IJVR "\r\n"';

			//send reject mail        
	      	//Mail to the user
		$subject = 'Upload IJVR rejected';
		$message = '$username, we are sorry to tell you that your article has been rejected. The IJVR team ';
		//mail($to,$subject,$message);		
		
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
		

		//ini_set('sendmail_from', 'n0delrue@gmail.com');
			// send mail to inform of publication

	        //find user's email and name
		$to = $this->container->get('security.context')->getToken()->getUser()->getEmail();
		$username = $this->container->get('security.context')->getToken()->getUser()->getUsername();

	        //headers in order to avoid spam list
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
		$headers .= 'To: user <$mail>' . "\r\n";
		$headers .= 'From: server IJVR "\r\n"';

			//send notification mail        
	      	//Mail to the user
		$subject = 'Article publication IJVR';
		$message = $username.', we are glad to tell you that your article has just been published in the last isssue.
		Have look on our web page http://www.ijvr.org/web/platform/home IJVR ';
		//mail($to,$subject,$message);

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
			

			$mesPages=$this->getRequest()->get('mesIds')[1];
			
			$articles_to_publish=$this->getRequest()->get('mesIds')[0];

			
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

				foreach ($articles_to_publish as $key =>$article){

					$repository = $this->getDoctrine()
					->getManager()
					->getRepository('IJVRPublishBundle:Article')
					;

					$art=$repository->find($article);
					$art->getPdf()->setWebPath($v,$issue->getTitle(),$key+1);
					$art->setPages($mesPages[$key]);
					$art->setStatus(6);
					$art->setIssue($issue);
					$art->setUpdateDate(new \Datetime());
					$art->setPublishDate(new \Datetime());
					$em->persist($art);
					$em->flush();
				}


				$request->getSession()->getFlashBag()->add('notice', 'Your issue has been published');
				return $this->redirect($this->generateUrl('dashboard'));
			}


 // -----------------Mails--------------------------
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRUserBundle:User\User')
			;


		//ini_set('sendmail_from', 'n0delrue@gmail.com');
		// send mail to inform of issu publication

	 	//headers in order to avoid spam list
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
		$headers .= 'To: user <$mail>' . "\r\n";
		$headers .= 'From: server IJVR "\r\n"';

		$subject = 'Issue publication IJVR';

		$us=$repository->findAll();
		foreach ($us as $u) {
			
			$name= $u->getUsername();
			$mail =$u->getEmail();       
		    //Mail to the user
			$message = '$name, A new issue has been published.
			Have a look at http://www.ijvr.org/web/platform/home
			The IJVR team';
			//mail($mail,$subject,$message);

		}
		 // -----------------Mails--------------------------


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

		$us=$repository->findAll();
		$names=array();
		foreach ($us as $u) {
			array_push($names,$u->getUsername());
		}
			

		//renvoi la page	
		$content = $this->get('templating')->render('IJVRUserBundle:Default:gestion.html.twig',array('admins'=>$admins,'users' =>$user, 'names' => $names));
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


		public function deleteUserAction($id,Request $request)
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
		$em->remove($user);
		
		//on lui donne un role utilisateur simple
					  
		$em->flush();		
			
		return $this->redirect($this->generateUrl('gestion'));
	}



	public function donne_user_plusAction($id,Request $request)
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
		$role = array('ROLE_USER_PLUS'); 
		$user->setRoles($role);
		$em->persist($user);			  
		$em->flush();		
			
		return new response("ok");
	}
	//----ACTION RETIRER DROITS ADMIN---------------------------
		public function retire_user_plusAction($id,Request $request)
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

    	$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRPublishBundle:Keyword')
			;
		
		$keywords = $repository->findAll();

		$cpt_keywords=array();

		foreach($keywords as $key){
			$repository = $this->getDoctrine()
				->getManager()
				->getRepository('IJVRPublishBundle:Article')
			;

			$articles=$repository->findByKeywords($key);

			$cpt=count($articles);
			array_push($cpt_keywords,$cpt);
		}

		array_multisort($cpt_keywords, $keywords, SORT_ASC);

		$cpt_keywords=array_reverse($cpt_keywords);
		$keywords=array_reverse($keywords);

		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRPublishBundle:AcceptanceRate')
			;


			$m = $repository->findAll();

			$m=$m[0];

		return $this->render('IJVRUserBundle:Default:dashboard.html.twig',array('keywords' => $keywords , 'cpt' => $cpt_keywords,'metrics' => $m));

	}
	
}