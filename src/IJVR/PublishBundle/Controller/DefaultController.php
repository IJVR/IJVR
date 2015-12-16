<?php

namespace IJVR\PublishBundle\Controller;

use IJVR\PublishBundle\Entity\Article;
use IJVR\PublishBundle\Entity\Author;
use IJVR\PublishBundle\Entity\Keyword;
use IJVR\PublishBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IJVRPublishBundle:Default:index.html.twig');
    }
	
	public function guideAction()
    {
        return $this->render('IJVRPublishBundle:Default:guide.html.twig');
    }
	
	
		public function validationAction()
    {
        return $this->render('IJVRPublishBundle:Default:validation.html.twig');
    }
	
    public function submitAction(Request $request)
	{
	if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}	
	    // Creation de l'objet Article
	    $article = new Article();

		$form = $this->get('form.factory')->create(new ArticleType, $article);
		
	    $form->handleRequest($request);

	    // Si le formulaire est rempli
	    if ($form->isValid()) {
	      	// On l'enregistre notre objet dans la BDD
	      	$em = $this->getDoctrine()->getManager(); 
			$article->setUser($this->get('security.context')->getToken()->getUser());


			$authors = explode(",", $this->get('request')->request->get('Authors'));
			
			if(isset($authors[0]))
				$article->setAuthorsText($this->get('request')->request->get('Authors'));
			else
				$article->setAuthorsText("none");


			$em->persist($article);
	      	$em->flush();
			
			$text="";
			
			

			
			$keywords = explode(",", $this->get('request')->request->get('Keywords'));	

			
			
			$repository_author = $this->getDoctrine()
						->getManager()
						->getRepository('IJVRPublishBundle:Author')
						;
						
			$repository_keywords = $this->getDoctrine()
						->getManager()
						->getRepository('IJVRPublishBundle:Keyword')
						;
								 
					//pour chaque amis tagués , on cree un tag en bdd					
					foreach($authors  as $author){
						
						$text.=$author. '+';
						
						$a=$repository_author->findBy(array('name' => $author));
						
						if(isset($a[0]) and $a[0]!= null){						
							$article->addAuthor($a[0]);
							$em->persist($article);
							$em->flush();
						}
						else{
							$aut=new Author();
							$aut->setName($author);
							$article->addAuthor($aut);
							$em->persist($aut);
							$em->persist($article);
							$em->flush();
						}
					}	
					foreach($keywords  as $keyword){
						
						$a=$repository_keywords->findBy(array('keyword' => $keyword));
						
						if(isset($a[0]) and $a[0]!= null){						
							$article->addKeyword($a[0]);
							$em->persist($article);
							$em->flush();
						}
						else{
							$aut=new Keyword();
							$aut->setKeyword($keyword);
							$article->addKeyword($aut);
							$em->persist($aut);
							$em->persist($article);
							$em->flush();
						}
					}	
			
			$text=substr($text,0,-1);
			$article->setAuthorsText($text);
			$em->persist($article);
	      	$em->flush();

	      	$request->getSession()->getFlashBag()->add('notice', 'Your article has been sent to the editor');
	    	// On redirige vers la page de visualisation de l'annonce nouvellement créée
      		//return $this->redirect($this->generateUrl('ijvr_publish_view', array('id' => $advert->getId())));
			
			//return $this->redirect($this->generateUrl('')));
			
			return $this->redirect($this->generateUrl('ijvr_publish_validation'));
    	}
		
		$repository_author = $this->getDoctrine()
						->getManager()
						->getRepository('IJVRPublishBundle:Author')
						;
						
		$aut=$repository_author->findAll();
		
		$authors=array();
		foreach($aut as $a){
			array_push($authors,$a->getName());
		}
		
		$repository_keywords = $this->getDoctrine()
						->getManager()
						->getRepository('IJVRPublishBundle:Keyword')
						;
						
		$key=$repository_keywords->findAll();
		
		$keywords=array();
		foreach($key as $a){
			array_push($keywords,$a->getKeyword());
		}
		
		
		
		

		ini_set('sendmail_from', 'ijvr@ijvr.com');

			// send mail

	        //user's email and name
			$session = $this->getRequest()->getSession();
			$to = $session->get('email');
			$username = $session->get('username');

	        //headers in order to avoid spam list
	        $headers  = 'MIME-Version: 1.0' . "\r\n";
	        $headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
	        $headers .= 'To: user <$mail>' . "\r\n";
	        $headers .= 'From: server n0delrue@gmail.com "\r\n"';
			
			//send comfirmation mails
	        //mail to the admin
	        $admin = 'buche@enib.fr';
	      	$subjectAdmin = 'New upload to IJVR from '.$username;
	      	$messageAdmin= 'A new article has been upload to IJVR.org. Go to http://www.ijvr.org/web/admin/moderation for moderation';
	      	mail($admin,$subjectAdmin,$messageAdmin);
	      	//Mail to the user
	        $subjectUser = 'Confirmation upload IJVR';
	        $message = $username.', your article has well been uploaded. You can track it in http://www.ijvr.org/web/profile/';
			mail($to,$subjectUser,$message);







	    // On passe la méthode createView() du formulaire à la vue
	    // afin qu'elle puisse afficher le formulaire toute seule
	    return $this->render('IJVRPublishBundle:Default:submit.html.twig', array(
	      'form' => $form->createView(), 'authors' => $authors , 'keywords' => $keywords
	    ));


	    
	}


	public function editAction($id,Request $request)
	{


	    // Creation de l'objet Article
	   // $article = new Article();
	    $repository = $this->getDoctrine()
						->getManager()
						->getRepository('IJVRPublishBundle:Article')
						;
						
		$article=$repository->find($id);

		$authors_art=array();
		foreach ($article->getAuthors() as $a) {
			array_push($authors_art, $a->getName());
		}
		$keywords_art=array();
		foreach ($article->getKeywords() as $a) {
			array_push($keywords_art, $a->getKeyword());
		}

		$user=$this->get('security.context')->getToken()->getUser();

		if ($user ===  $article->getUser() ) {
					

		$form = $this->get('form.factory')->create(new ArticleType, $article);
		
	    $form->handleRequest($request);

	    // Si le formulaire est rempli
	    if ($form->isValid()) {
	      	// On l'enregistre notre objet dans la BDD
	      	$em = $this->getDoctrine()->getManager(); 
			//$article->setUser($this->get('security.context')->getToken()->getUser());
			$article->setStatus(3);
			//$article->setAuthorsText($this->get('request')->request->get('Authors'));
			$em->persist($article);
	      	$em->flush();
			
			$text="";
			
			$authors = explode(",", $this->get('request')->request->get('Authors'));
			$keywords = explode(",", $this->get('request')->request->get('Keywords'));			
			
			$repository_author = $this->getDoctrine()
						->getManager()
						->getRepository('IJVRPublishBundle:Author')
						;
						
			$repository_keywords = $this->getDoctrine()
						->getManager()
						->getRepository('IJVRPublishBundle:Keyword')
						;
								 
					//pour chaque amis tagués , on cree un tag en bdd					
					foreach($authors  as $author){
						
						$text.=$author. '+';
						
						$a=$repository_author->findBy(array('name' => $author));
						
						if(isset($a[0]) and $a[0]!= null){	

							$cpt=0;
							foreach ($article->getAuthors() as $aut) {
								if($aut ==$a[0])
									$cpt++;
							}
							if($cpt==0){
								$article->addAuthor($a[0]);
							
								$em->persist($article);
								$em->flush();
							}
						}
						else{
							$aut=new Author();
							$aut->setName($author);
							$article->addAuthor($aut);
							$em->persist($aut);
							$em->persist($article);
							$em->flush();
						}
					}	
					foreach($keywords  as $keyword){
						
						$a=$repository_keywords->findBy(array('keyword' => $keyword));
						
						if(isset($a[0]) and $a[0]!= null){	

							$cpt=0;
							foreach ($article->getKeywords() as $aut) {
								if($aut ==$a[0])
									$cpt++;
							}
							if($cpt==0){					
								$article->addKeyword($a[0]);
								$em->persist($article);
								$em->flush();
							}
						}
						else{
							$aut=new Keyword();
							$aut->setKeyword($keyword);
							$article->addKeyword($aut);
							$em->persist($aut);
							$em->persist($article);
							$em->flush();
						}
					}	
			
			$text=substr($text,0,-1);
			$article->setAuthorsText($text);
			$em->persist($article);
	      	$em->flush();
			
	      	$request->getSession()->getFlashBag()->add('notice', 'Your article has been edited to the editor');
	    	
	      	//envoie du mail à l'editor

	      	//ini_set('sendmail_from', 'ijvr@ijvr.org');
			// send mail to inform editor

		        //find user's name
	      	$session = $this->getRequest()->getSession();
			$username = $session->get('username');

		        //headers in order to avoid spam list
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
			$headers .= 'To: user <$mail>' . "\r\n";
			$headers .= 'From: server n0delrue@gmail.com "\r\n"';

				//send mail to validate  
				//Mail to the Editor
			$to ='buche@enib.fr';
			$subject = 'Corrrection made to article in IJVR';
			$message = $username.' has uploaded a corrected article in the IJVR website';
			mail($to,$subject,$message);


	    	// On redirige vers la page de visualisation      	
			return $this->redirect($this->generateUrl('ijvr_publish_validation'));
    	}
		
		$repository_author = $this->getDoctrine()
						->getManager()
						->getRepository('IJVRPublishBundle:Author')
						;
						
		$aut=$repository_author->findAll();
		
		$authors=array();
		foreach($aut as $a){
			array_push($authors,$a->getName());
		}
		
		$repository_keywords = $this->getDoctrine()
						->getManager()
						->getRepository('IJVRPublishBundle:Keyword')
						;
						
		$key=$repository_keywords->findAll();
		
		$keywords=array();
		foreach($key as $a){
			array_push($keywords,$a->getKeyword());
		}
		
		
		

	    // On passe la méthode createView() du formulaire à la vue
	    // afin qu'elle puisse afficher le formulaire toute seule
	    return $this->render('IJVRPublishBundle:Default:edit.html.twig', array(
	      'form' => $form->createView(), 'authors' => $authors , 'keywords' => $keywords, 'authors_art' => $authors_art, 'keywords_art' => $keywords_art
	    ));
	}
else 
	 return $this->redirect($this->generateUrl('fos_user_security_login'));
}

		

}
