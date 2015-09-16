<?php

namespace IJVR\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function viewAction($id)
    {
		 $url = $this->get('router')->generate(
            'ijvr_platform_view', // 1er argument : le nom de la route
            array('id' => id)    // 2e argument : les valeurs des paramètres
        );
		return new Response($url);
        //return $this->render('IJVRPlatformBundle:Default:index.html.twig', array('id' => $id));
    }
	
	public function viewSlugAction($slug, $year, $format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
    }

}
