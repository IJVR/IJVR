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
			$em->persist($article);
	      	$em->flush();
			
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
		
		
		
		

	    // On passe la méthode createView() du formulaire à la vue
	    // afin qu'elle puisse afficher le formulaire toute seule
	    return $this->render('IJVRPublishBundle:Default:submit.html.twig', array(
	      'form' => $form->createView(), 'authors' => $authors , 'keywords' => $keywords
	    ));
	}
}
