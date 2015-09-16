<?php

namespace IJVR\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function viewAction($id)
    {
		 
       return $this->render('IJVRPlatformBundle:Default:index.html.twig', array('id' => $id));
    }
	public function homeAction()
    {

        return $this->render('IJVRPlatformBundle:Default:home.html.twig');
    }
	public function viewSlugAction($slug, $year, $format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
    }

}
