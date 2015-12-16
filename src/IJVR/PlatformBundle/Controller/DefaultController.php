<?php

namespace IJVR\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use IJVR\PublishBundle\Entity\Issue;
use IJVR\PublishBundle\Entity\Article;
use IJVR\PublishBundle\Entity\AcceptanceRate;

/* IJVR Platform Bundle Controller */

class DefaultController extends Controller
{
	
    	public function viewAction($id)
    	{
		 
       	return $this->render('IJVRPlatformBundle:Default:index.html.twig', array('id' => $id));
    	}

    	public function editorial_boardAction()
    	{
		 
       	return $this->render('IJVRPlatformBundle:Default:editorial_board.html.twig');
    	}


	//home action leads to home page 
	public function homeAction()
    	{

		$repository = $this->getDoctrine()
						->getManager()
						->getRepository('IJVRPublishBundle:Issue')
						;
						


		$issue=$repository->findbyDate();

		$last_issue=null;
		foreach($issue as $i){
		$last_issue=$i;
		}

		$repository = $this->getDoctrine()
						->getManager()
						->getRepository('IJVRPublishBundle:Article')
						;
						
		$article=$repository->findByIssue($last_issue);
		$articles=$repository->findByStatus(6);
		$count=0;
		foreach($articles as $art){
			$count++;
		}

		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('IJVRPublishBundle:AcceptanceRate');

		$m=$repository->findAll();
		$m=$m[0];

		return $this->render('IJVRPlatformBundle:Default:home.html.twig', array(
	      'issue' => $last_issue, 'article' => $article, 'count' => $count, 'metrics' => $m));
   	}


	//
	public function viewSlugAction($slug, $year, $format)
    	{
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
    	}
	



	//contact Action leads to contact us page 
    	public function contactAction()
    	{	 
       		return $this->render('IJVRPlatformBundle:Default:contact.html.twig');
    	}
	
   	 //send mail ti IJVR admin
	 public function sendMailAction()
	 {
		//get data from the form
      		$request = $this->get('request');
      		if($request->getMethod()=='POST'){
			$content = $request->request->get('message');
			$sender  = $request->request->get('email');
			$name    = $request->request->get('name');
			$subject = $request->request->get('subject');
		
		
		//admin's email {still need to be modified}
		$to  = 'buche@enib.fr';
		//headers in order to avoid spam list
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
		$headers .= 'To: user <tassiabdelghani@gmail.com>' . "\r\n";
		$headers .= 'From: server ' .$sender. "\r\n";

		//send mail and go to comfirmation page
		if ( mail($to,$subject,$content)	)
		{
		 $message = "success" ;
        	 return $this->render('IJVRPlatformBundle:Default:mailConfirmation.html.twig',array('message' => $message,));
		}
		else
		{
		 $message = "failure" ;
		 return $this->render('IJVRPlatformBundle:Default:mailConfirmation.html.twig',array('message' => $message));	
		}
	}

      
    }

	//aboutAction this action leads to about us page
	public function aboutAction()
    		{

       		 return $this->render('IJVRPlatformBundle:Default:about.html.twig');
   	 	}

}
