<?php

namespace IJVR\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/* IJVR Platform Bundle Controller */

class DefaultController extends Controller
{
	
    	public function viewAction($id)
    	{
		 
       	return $this->render('IJVRPlatformBundle:Default:index.html.twig', array('id' => $id));
    	}


	//home action leads to home page 
	public function homeAction()
    	{
		        
		return $this->render('IJVRPlatformBundle:Default:home.html.twig');
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
		$to  = 'tassiabdelghani@gmail.com';
		//headers in order to avoid spam list
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
		$headers .= 'To: user <tassiabdelghani@gmail.com>' . "\r\n";
		$headers .= 'From: server ' .$sender. "\r\n";

		//send mail and go to comfirmation page
		if ( mail($to,$subject,$message)	)
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
