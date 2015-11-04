<?php

namespace IJVR\SearchBundle\Controller;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;

/*

Search Bundle default controller

*/


class DefaultController extends Controller
{
    public static  $_articles ;
	
    public function indexAction()
    {
        return $this->render('IJVRSearchBundle:Default:index.html.twig');
    }




    //action for minimal search "by title"
    public function minimalSearchAction()
    {
	 
     $request = $this->get('request');
	
		$title = $request->request->get('search_field');
		$repository = $this->getDoctrine()->getRepository('IJVRPublishBundle:Article');
		$articles=$repository->getArticlesByTitle($title);
		$issueTitle=null ;
        $date=null;
        $issues = array();
        $authors=array();
        $keywords=array();
        $dates=array();

        foreach($articles as $article)
        {
                array_push($dates,$article->getDate()->format('Y'));
                array_push($issues, $article->getIssue()->getTitle());
                foreach($article->getAuthors() as $author)
                {
                    array_push($authors, $author->getName());
                }
                foreach($article->getKeywords() as $keyword)
                {
                    array_push($keywords, $keyword->getKeyword());
                }

        }


        $dates=array_unique($dates);
        $issues=array_unique($issues);
        $authors=array_unique($authors);
        $keywords=array_unique($keywords);
		return $this->render('IJVRSearchBundle:Default:searchResult.html.twig',array('articles' => $articles ,'title' => $title, 'issueTitle'=>$issueTitle,
         'date'=>$date, 'issues'=>$issues, 'authors'=> $authors, 'keywords'=>$keywords, 'dates' => $dates));
		
 
    }



    //find Articles by criteria	
    public function findArticlesByCriteriaAction()
    {
    	

	$request= $this->get('request');
	if($request->getMethod()=='POST')
	{

    	$abstract=$request->request->get('abstract');; 
    	$title=$request->request->get('title');
    	$keywords=array();
    	$keywords= $request->request->get('keywords');; 
        $authors=array();
        $authors= $request->request->get('authors');; 
    	$issueTitle=$request->request->get('issueTitle'); 
    	$year=$request->request->get('date');;

		$repository = $this->getDoctrine()->getRepository('IJVRPublishBundle:Article');
		$articles=$repository->getArticlesByMultipleCriteriasJsonVersion($abstract,$title,$keywords,$issueTitle,$year,$authors);
		
	
    // parameters to template
 
		$json = json_encode($articles);
		//return $this->render('IJVRSearchBundle:Default:searchResult.html.twig',array('articles' => $articles));
		
		
		return new Response($json);
		
	}
     }



    //advanced research controller Action 
    public function advancedSearchAction()
    {
	$request= $this->get('request');
        if($request->getMethod()=='POST')
    {
    	$abstract=$request->request->get('abstract'); 
    	$title=$request->request->get('title'); 
    	$keywords=array();
    	$keywords= $request->request->get('keywords'); 
        $authors=array();
        $authors= $request->request->get('authors');
    	$issueTitle=$request->request->get('issueTitle');; 
    	$year=$request->request->get('year');; ;


		$repository = $this->getDoctrine()->getRepository('IJVRPublishBundle:Article');
		
       // $str=mysql_real_escape_string($title);

		$articles=$repository->getArticlesByMultipleCriterias($abstract,$title,$keywords,$issueTitle,$year,$authors);
      
        
        
        
        return $this->render('IJVRSearchBundle:Default:searchResult.html.twig',array('articles' => $articles ,'title' => $title, 'date' => $year , 'issueTitle'=> $issueTitle));
    }
	

     }

    //getIssuebyArticle 
    public function searchForIssueFromAContainingArticleAction($id)
    {
	
		
		$repository = $this->getDoctrine()->getRepository('IJVRPublishBundle:Article');
		$issueId=$repository->getIssueIdByArticleId($id);
		$articles=$repository->getArticlesByIssueId($issueId);
		return $this->render('IJVRSearchBundle:Default:issueArticles.html.twig',array('articles' => 			$articles));
	
	}

    //action for single article display	
    public function singleArticleAction($id)
    {
    	$repository=$this->getDoctrine()->getManager()->getRepository('IJVRPublishBundle:Article');
		$art=$repository->find($id);
		
		return $this->render('IJVRSearchBundle:Default:singleArticle.html.twig',array('article'=> $art));


    	}
    public function advancedSearchViewAction()
    {
    	return $this->render('IJVRSearchBundle:Default:advancedSearch.html.twig');
    }

   





	
}
