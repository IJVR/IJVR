<?php

namespace IJVR\SearchBundle\Controller;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use IJVR\PublishBundle\Entity\Author;
use IJVR\PublishBundle\Entity\Article;
use IJVR\PublishBundle\Entity\Issue;
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

    public function profileAuthorsAction($id){

        $repository = $this->getDoctrine()->getRepository('IJVRPublishBundle:Author');
        $autho=$repository->find($id);

        $repository = $this->getDoctrine()->getRepository('IJVRPublishBundle:Article');
        $articles=$repository->findByAuthors($autho);

        $aut=[];

        foreach ($articles as $art){

            $authors=$art->getAuthorsText();
            
            $authors_tab = explode("+", $authors);

            
            $text="";
            
            foreach($authors_tab  as $author){
                $repository=$this->getDoctrine()->getManager()->getRepository('IJVRPublishBundle:Author');          
                $a=$repository->getAuthorsText($author);
                if($a)
                    $text.="<a href=".$this->generateUrl('ijvr_profile_authors', array('id' => $a[0]->getId())).">" .$a[0]->getName()."</a>,";
                
            }
            
            $text=substr($text,0,-1);
            array_push($aut,$text);

        }
        //$articles=$repository->findAll();
        return $this->render('IJVRSearchBundle:Default:profile.html.twig',array('author'=> $autho, 'articles' => $articles, 'authors' => $aut));
    }


    public function AllIssuesAction(){

        $repository = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('IJVRPublishBundle:Issue')
                        ;
                        


        $issues=$repository->findbyDate();

       $issues= array_reverse ( $issues );


        $articles_id=array();
        foreach ($issues as $i ){
            $repository = $this->getDoctrine()->getRepository('IJVRPublishBundle:Article');
            $a=$repository->findByIssue($i);

            array_push($articles_id,$a[0]);

        }






        return $this->render('IJVRSearchBundle:Default:all_issues.html.twig',array('issues'=> $issues,'articles_id' => $articles_id));
    }


   //action for minimal search "by title"
    public function minimalSearchAction()
    {
     
        $request = $this->get('request');
    
        $title = $request->request->get('search_field');
        
        $session = $this->getRequest()->getSession() ; 
        

        if (!strcmp ($request->request->get('first'),'true'))
            $session->set('title','');    
        

        $title=trim($title); 

        $titleSession=$session->get('title');
       
        $_authors  = array(); 
        $_keywords = array();
            
        if(empty($title))
        {
            $title=$titleSession ;
        }
        else
            $session->set('title',$title);

        $repository = $this->getDoctrine()->getRepository('IJVRPublishBundle:Article');
        $articles=$repository->getArticlesByTitle($title);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $articles, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
    );


        $articles=$repository->getArticlesByTitle($title);
        $articles= $articles->getResult();
        $issueTitle=null ;
        $date=null;
        $issues = array();
        $authors=array();
        $keywords=array();
        $dates=array();



        foreach($articles as $article)
        {
                if($article->getStatus()==6)
                {
                array_push($dates,$article->getIssue()->getPublishDate()->format('Y'));
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

        }


        $dates=array_unique($dates);
        $issues=array_unique($issues);
        $authors=array_unique($authors);
        $keywords=array_unique($keywords);
        

        return $this->render('IJVRSearchBundle:Default:searchResult.html.twig',array('_keywords' => $_keywords,'_authors' => $_authors,'pagination' => $pagination,'title' => $title, 'issueTitle'=>$issueTitle,
         'date'=>$date, 'issues'=>$issues, 'authors'=> $authors, 'keywords'=>$keywords, 'dates' => $dates));
        
 
    }



    //find Articles by criteria 
    public function findArticlesByCriteriaAction()
    {
        

    $request= $this->get('request');
    

        $abstract=$request->request->get('abstract');; 
        $title=$request->request->get('title');

        $keywords=array();
        $keywords= $request->request->get('keywords');; 
        
        $authors= $request->request->get('authors');; 
        $issueTitle=$request->request->get('issueTitle'); 
        $year=$request->request->get('date');;
        $pageNumber=$request->request->get('pageNumber');;
 
        file_put_contents("test.txt","null :".$authors[0]);
        

        //$authors=json_decode($authors);


        $repository = $this->getDoctrine()->getRepository('IJVRPublishBundle:Article');      
        $articles=$repository->getArticlesByMultipleCriteriasJsonVersion($abstract,$title,$keywords,$issueTitle,$year,$authors);
        $pagesNumber=sizeof($articles);
        $index=0 ;
        $startingIndex=($pageNumber*10-10) ;
        $endingIndex=($pageNumber*10);
        $articlesToSend=[];
        for($i=$startingIndex ; $i<$endingIndex && $i <$pagesNumber ; $i++)
        {        
            $articlesToSend[$index]=$articles[$i];
            $index++ ;
        }


        $jsonToSend=array('articles'=> $articlesToSend , 'pagesNumber'=> $pagesNumber);



    
    // parameters to template
 
        $json = json_encode($jsonToSend);
        //return $this->render('IJVRSearchBundle:Default:searchResult.html.twig',array('articles' => $articles));
        
        
        return new Response($json);
        
    
     }



    //advanced research controller Action 
    public function advancedSearchAction()
    {
	$request= $this->get('request');
      
    	$abstract=$request->request->get('abstract'); 
        $abstract=addslashes($abstract);
    	$title=$request->request->get('title'); 

    	$keywords=array();
    	$keywords= $request->request->get('keywords'); 
        $authors=array();
        $authors= $request->request->get('authors');
    	$issueTitle=$request->request->get('issueTitle');; 
    	$year=$request->request->get('year');


        $session = $this->getRequest()->getSession() ; 
        
        $abstractSession=$session->get('abstract');
        $titleSession=$session->get('title2');
        $keywordsSession = $session->get('keywords');
        $authorsSession = $session->get('authors');
        $issueSession = $session->get('issueTitle');
        $yearSession = $session->get('yearTitle');
        
        $title=trim($title); 
        if(empty($title))
        {
            $title=$titleSession ;
        }
        else
            $session->set('title2',$title);  
        $abstract=trim($abstract); 
        if(empty($asbtract))
        {
            $abstract=$abstractSession;
        } 
        else
            $session->set('abstract',$abstract); 

        if(count($keywords)==0)
        {
            $keywords=$keywordsSession;
        } 
        else
            $session->set('keywords',$keywords);

 
        if(count($authors)==0)
        {
            $authors=$authorsSession;
        } 
        else
            $session->set('authors',$authors);

        $_authors = $authors;
        $_authors = json_encode($_authors);

        $_keywords = $keywords ;
        $_keywords = json_encode($_keywords); 


        $issueTitle=trim($issueTitle); 
        if(empty($issueTitle))
        {
            $issueTitle=$issueSession;
        } 
        else$session->set('issueTitle',$issueTitle); 

        $year=trim($year); 
        if(empty($year))
        {
            $year=$yearSession;
        } 
        else$session->set('year',$year); 



		$repository = $this->getDoctrine()->getRepository('IJVRPublishBundle:Article');
		
       // $str=mysql_real_escape_string($title);

		$articles=$repository->getArticlesByMultipleCriterias($abstract,$title,$keywords,$issueTitle,$year,$authors);
      
        
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $articles, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
    );



        $articles= $articles->getResult() ;
        $issues = array();
        $authors=array();
        $keywords=array();
        $dates=array();

        foreach($articles as $article)
        {
                array_push($dates,$article->getIssue()->getPublishDate()->format('Y'));
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
        //$authors=json_encode($authors);
        
        return $this->render('IJVRSearchBundle:Default:searchResult.html.twig',array('_keywords' => $_keywords,'_authors' => $_authors ,'pagination' => $pagination,'title' => $title, 'date' => $year , 'issueTitle'=> $issueTitle,
             'issues'=>$issues, 'authors'=> $authors, 'keywords'=>$keywords, 'dates' => $dates));
     }

//getIssuebyArticle 
    public function searchForIssueFromAContainingArticleAction($id)
    {
    
        
        $repository = $this->getDoctrine()->getRepository('IJVRPublishBundle:Article');
        $issueId=$repository->getIssueIdByArticleId($id);
        $articles=$repository->getArticlesByIssueId($issueId);

        $aut=[];

        foreach ($articles as $art){

			$authors=$art->getAuthorsText();
			
			$authors_tab = explode("+", $authors);

			
			$text="";
			
			foreach($authors_tab  as $author){
				$repository=$this->getDoctrine()->getManager()->getRepository('IJVRPublishBundle:Author');			
				$a=$repository->getAuthorsText($author);
				if($a)
					$text.="<a href=".$this->generateUrl('ijvr_profile_authors', array('id' => $a[0]->getId())).">" .$a[0]->getName()."</a>,";
				
			}
			
			$text=substr($text,0,-1);
			array_push($aut,$text);

        }


        return $this->render('IJVRSearchBundle:Default:issueArticles.html.twig',array('articles' =>$articles, 'authors' => $aut));
    
    }

    //action for single article display	
    public function singleArticleAction($id)
    {
		
    	$repository=$this->getDoctrine()->getManager()->getRepository('IJVRPublishBundle:Article');
		$art=$repository->find($id);
		
		$authors=$art->getAuthorsText();
		
		$authors_tab = explode("+", $authors);

		
		$text="";
		
		foreach($authors_tab  as $author){
			$repository=$this->getDoctrine()->getManager()->getRepository('IJVRPublishBundle:Author');			
			$a=$repository->getAuthorsText($author);
			if($a)
				$text.="<a href=".$this->generateUrl('ijvr_profile_authors', array('id' => $a[0]->getId())).">" .$a[0]->getName()."</a>,";
			
		}
		
		$text=substr($text,0,-1);
		
		return $this->render('IJVRSearchBundle:Default:singleArticle.html.twig',array('article'=> $art,'authors' => $text));


    	}
    public function advancedSearchViewAction()
    {
        $session = $this->getRequest()->getSession() ; 
         $session->set('title2','');
        $session->set('abstract','');
        $session->set('keywords','');
        $session->set('authors','');
        $session->set('issueTitle','');
        $session->set('year','');
    	return $this->render('IJVRSearchBundle:Default:advancedSearch.html.twig');

    }

   





	
}
