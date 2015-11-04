<?php

/* IJVRSearchBundle:Default:searchResult.html.twig */
class __TwigTemplate_b7a4d7f669557af8a5465aa7cbce6e4e6f85081110d8e0df728a83ddbca4bed3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IJVRSearchBundle:Default:searchResult.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3d456140a357f4f9d17b5fd23af741dfe427a6e7734866e58e1ac76bdd96a9d = $this->env->getExtension("native_profiler");
        $__internal_a3d456140a357f4f9d17b5fd23af741dfe427a6e7734866e58e1ac76bdd96a9d->enter($__internal_a3d456140a357f4f9d17b5fd23af741dfe427a6e7734866e58e1ac76bdd96a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRSearchBundle:Default:searchResult.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d456140a357f4f9d17b5fd23af741dfe427a6e7734866e58e1ac76bdd96a9d->leave($__internal_a3d456140a357f4f9d17b5fd23af741dfe427a6e7734866e58e1ac76bdd96a9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9c1e2fea793f5df02147341a23ef5a4c5a5c64337124e62253b0358cb72bb50 = $this->env->getExtension("native_profiler");
        $__internal_f9c1e2fea793f5df02147341a23ef5a4c5a5c64337124e62253b0358cb72bb50->enter($__internal_f9c1e2fea793f5df02147341a23ef5a4c5a5c64337124e62253b0358cb72bb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_f9c1e2fea793f5df02147341a23ef5a4c5a5c64337124e62253b0358cb72bb50->leave($__internal_f9c1e2fea793f5df02147341a23ef5a4c5a5c64337124e62253b0358cb72bb50_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ceb1e94213e585bdee40faf9f65b52ae9305aff5415ccf0df78e3e46fe033c96 = $this->env->getExtension("native_profiler");
        $__internal_ceb1e94213e585bdee40faf9f65b52ae9305aff5415ccf0df78e3e46fe033c96->enter($__internal_ceb1e94213e585bdee40faf9f65b52ae9305aff5415ccf0df78e3e46fe033c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<br/>
<br/>


<div class=\"container-fluid\">
\t<div class=\"row\" id=\"AppendToElem\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>
\t\t\t\tSearch Results
\t\t\t</h2>
\t\t\t<p>
\t\t\t\t<span>There are</span> <strong>3974</strong> <span>results for:</span> <strong>Computer Animation and Virtual Worlds</strong>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a class=\"btn\" href=\"#\"></a>
\t\t\t</p>
\t\t\t<div class=\"row\" id=\"AppendToRow\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tFilter List
\t\t\t\t\t</h3>
\t\t\t\t\t       
\t\t\t\t\t\t<div class=\"form-group\" id=\"checkboxDate\">
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">
\t\t\t\t\t\t\t\tYear
\t\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 34
            echo "\t\t\t\t\t\t\t<input class=\"date\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "Y"), "html", null, true);
            echo "\" /> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "Y"), "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" id=\"checkboxTitle\">
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<label for=\"exampleInputPassword1\">
\t\t\t\t\t\t\t\tIssue Title
\t\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 45
            echo "\t\t\t\t\t\t\t<input class=\"issueTitle\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "issue", array()), "title", array()), "html", null, true);
            echo "\"/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "issue", array()), "title", array()), "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 59
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
\t\t\t\t\t\t<p> </p>
\t\t

\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ijvr_search_single_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h3></a>
\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "issue", array()), "title", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tVolume ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "issue", array()), "volume", array()), "id", array()), "html", null, true);
            echo ", Issue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "issue", array()), "id", array()), "html", null, true);
            echo " , ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "issue", array()), "volume", array()), "year", array()), "html", null, true);
            echo ", Pages: 2530–2554, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "authors", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tArticle first published online : ";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "m/d/Y"), "html", null, true);
            echo ", DOI: 10.1111/j.1467-8659.2010.01822.x<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "pdf", array()), "url", array()), "html", null, true);
            echo "\"> &nbsp; Download PDF</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Prev</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">1</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">2</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">3</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">4</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">5</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Next</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


 <script>




\$(document).on(\"click\",\".date\",function(){
console.log(\"dkhelt\")
\$(\".col-md-12\").remove();

 \$.ajax({
         url: \"criteria_search\",          
         type: 'POST', //I want a type as POST
         data: {criteria:\$(this).attr('class'), value:\$(this).val() } ,
         success: function(data){ 
         articles=\$.parseJSON(data)
         console.log(articles)
\t\t 
\t\$(\"#AppendToElem\").append(\" <div class=\\\"col-md-12\\\"> <h2> Search Results <\\/h2> <p> <span>There are<\\/span> <strong>3974<\\/strong> <span>results for:<\\/span> <strong>Computer Animation and Virtual Worlds<\\/strong> <\\/p> <p> <a class=\\\"btn\\\" href=\\\"#\\\"><\\/a> <\\/p> <div class=\\\"row\\\" id=\\\"AppendToRow\\\"> <div class=\\\"col-md-3\\\" id=\\\"AppendToCol3\\\"> <h3> Filter List <\\/h3> <div class=\\\"form-group\\\" id=\\\"checkboxDate\\\" > <label for=\\\"exampleInputEmail1\\\"> Year <\\/label><br>\");\t
\t  \$.each(articles, function(index,jsonObject){
\t   
        \$(\"#checkboxDate\").append(\"<input class=\\\"date\\\" type=\\\"checkbox\\\" value=\"+jsonObject.date.date.substring(0,4)+\" /> \"+jsonObject.date.date.substring(0,4)+ \"<br>\") 
         });
 \$(\"#AppendToCol3\").append(\"<\\/div> <div class=\\\"form-group\\\" id=\\\"checkboxTitle\\\"> <label for=\\\"exampleInputPassword1\\\"> Issue Title <\\/label><br>\");
\t 
\t  \$.each(articles, function(index,jsonObject){
\t   
        \$(\"#checkboxTitle\").append(\"<input  type=\\\"checkbox\\\" value=\"+jsonObject.issue.title+\" /> \"+jsonObject.issue.title+ \"<br>\") 
         });
\t\t \$(\"#AppendToCol3\").append(\"<\\/div> <div class=\\\"form-group\\\" id=\\\"checkboxkeywords\\\"> <label for=\\\"exampleInputFile\\\"> Topic <\\/label><br>\");
\t\t \$.each(articles, function(index,jsonObject){
\t   
        \$(\"#checkboxKeywords\").append(\"<input  type=\\\"checkbox\\\" value=\\\"keyword later\\\" /> add keywords later <br>\") 
         });
\t\t 
\t\t \$(\"#AppendToRow\").append(\"<\\/div> <\\/div> <div class=\\\"col-md-6\\\" id=\\\"AppendToCol6\\\" > <div class=\\\"row\\\">\")
\t\t  \$.each(articles, function(index,jsonObject){
\t   
        \$(\"#AppendToCol6\").append(\"<p> <\\/p> \\r\\n\\r\\n <div class=\\\"col-md-12\\\"  id=\\\"AppendToCol12\\\"> <a href=\\\"#singleArticle\\\"><h3>\"+jsonObject.title+\"<\\/h3><\\/a> <dl> <dt> <h3>\" +jsonObject.issue.title+\" <\\/h3> <p> Volume Volume.id, Issue\"+ jsonObject.issue.id+ \", article.issue.volume.year, Pages: 2530\\u20132554, \"+jsonObject.authors+\" <\\/p> <p> Article first published online : \"+jsonObject.date.date.substring(0,4)+\", DOI: 10.1111\\/j.1467-8659.2010.01822.x<a href=\\\"pdfurl\\\"> &nbsp; Download PDF<\\/a> <\\/p> <\\/dt> <\\/dl> <\\/div>\") 
         });
\t\t 
\t\t  \$(\"#AppendToCol6\").append(\" <\\/div> <ul class=\\\"pagination\\\"> <li> <a href=\\\"#\\\">Prev<\\/a> <\\/li> <li> <a href=\\\"#\\\">1<\\/a> <\\/li> <li> <a href=\\\"#\\\">2<\\/a> <\\/li> <li> <a href=\\\"#\\\">3<\\/a> <\\/li> <li> <a href=\\\"#\\\">4<\\/a> <\\/li> <li> <a href=\\\"#\\\">5<\\/a> <\\/li> <li> <a href=\\\"#\\\">Next<\\/a> <\\/li> <\\/ul> <\\/div> <\\/div> <\\/div>\");
\t\t 
\t/*\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t
         \$.each(articles, function(index,jsonObject){
\t   
         console.log(jsonObject.title)
         });
        
 /* \$.each( data, function( key, val ) {
    console.log(key+\"lol \"+val)

  });*/
       console.log(data)  
       
            \$(\".row\").append(\"\");
         },
         error: function(xhr,textStatus,error){
         console.log(xhr.statusText)
         console.log(textStatus)
         console.log(error)
         console.log(\"makhdamch\")
         
         }
      });
//\$(this).attr(\"value\")

}
);



  </script>

";
        
        $__internal_ceb1e94213e585bdee40faf9f65b52ae9305aff5415ccf0df78e3e46fe033c96->leave($__internal_ceb1e94213e585bdee40faf9f65b52ae9305aff5415ccf0df78e3e46fe033c96_prof);

    }

    public function getTemplateName()
    {
        return "IJVRSearchBundle:Default:searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 87,  174 => 81,  162 => 78,  156 => 75,  147 => 71,  136 => 65,  128 => 59,  123 => 47,  112 => 45,  108 => 44,  98 => 36,  87 => 34,  83 => 33,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* <br/>*/
/* <br/>*/
/* */
/* */
/* <div class="container-fluid">*/
/* 	<div class="row" id="AppendToElem">*/
/* 		<div class="col-md-12">*/
/* 			<h2>*/
/* 				Search Results*/
/* 			</h2>*/
/* 			<p>*/
/* 				<span>There are</span> <strong>3974</strong> <span>results for:</span> <strong>Computer Animation and Virtual Worlds</strong>*/
/* 			</p>*/
/* 			<p>*/
/* 				<a class="btn" href="#"></a>*/
/* 			</p>*/
/* 			<div class="row" id="AppendToRow">*/
/* 				<div class="col-md-3">*/
/* 					<h3>*/
/* 						Filter List*/
/* 					</h3>*/
/* 					       */
/* 						<div class="form-group" id="checkboxDate">*/
/* 							 */
/* 							<label for="exampleInputEmail1">*/
/* 								Year*/
/* 							</label><br>*/
/* 							{% for article in articles %}*/
/* 							<input class="date" type="checkbox" value="{{article.date |date("Y")}}" /> {{article.date |date("Y")}}<br>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 						<div class="form-group" id="checkboxTitle">*/
/* 							 */
/* 							<label for="exampleInputPassword1">*/
/* 								Issue Title*/
/* 							</label><br>*/
/* 							{% for article in articles %}*/
/* 							<input class="issueTitle" type="checkbox" value="{{article.issue.title}}"/> {{article.issue.title}}<br>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 						{#<div class="form-group" id="checkboxkeywords">*/
/* 							 */
/* 							<label for="exampleInputFile">*/
/* 								Topic*/
/* 							</label><br>*/
/* 							{% for article in articles %}*/
/* 							<input class="authors" type="checkbox" /> article.authors<br>*/
/* 							{% endfor %}*/
/* 						</div>#}*/
/* 						*/
/* 						*/
/* 					*/
/* 				</div>*/
/* 				<div class="col-md-6">*/
/* 					<div class="row">*/
/* 						{% for article in articles %} */
/* 						<p> </p>*/
/* 		*/
/* */
/* 						<div class="col-md-12">*/
/* 						*/
/* 							 <a href="{{path('ijvr_search_single_article',{'id':article.id})}}"><h3>{{ article.title }}</h3></a>*/
/* 							<dl>*/
/* 								<dt>*/
/* 									<h3>*/
/* 										{{article.issue.title}}*/
/* 									</h3>*/
/* 									<p>*/
/* 										Volume {{article.issue.volume.id}}, Issue {{article.issue.id}} , {{article.issue.volume.year}}, Pages: 2530–2554, {{article.authors}}*/
/* 									</p>*/
/* 									<p>*/
/* 										Article first published online : {{article.date |date("m/d/Y")}}, DOI: 10.1111/j.1467-8659.2010.01822.x<a href="{{article.pdf.url}}"> &nbsp; Download PDF</a>*/
/* 									</p>*/
/* 								</dt>*/
/* 							</dl>*/
/* 						</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 					<ul class="pagination">*/
/* 						<li>*/
/* 							<a href="#">Prev</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="#">1</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="#">2</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="#">3</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="#">4</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="#">5</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="#">Next</a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/*  <script>*/
/* */
/* */
/* */
/* */
/* $(document).on("click",".date",function(){*/
/* console.log("dkhelt")*/
/* $(".col-md-12").remove();*/
/* */
/*  $.ajax({*/
/*          url: "criteria_search",          */
/*          type: 'POST', //I want a type as POST*/
/*          data: {criteria:$(this).attr('class'), value:$(this).val() } ,*/
/*          success: function(data){ */
/*          articles=$.parseJSON(data)*/
/*          console.log(articles)*/
/* 		 */
/* 	$("#AppendToElem").append(" <div class=\"col-md-12\"> <h2> Search Results <\/h2> <p> <span>There are<\/span> <strong>3974<\/strong> <span>results for:<\/span> <strong>Computer Animation and Virtual Worlds<\/strong> <\/p> <p> <a class=\"btn\" href=\"#\"><\/a> <\/p> <div class=\"row\" id=\"AppendToRow\"> <div class=\"col-md-3\" id=\"AppendToCol3\"> <h3> Filter List <\/h3> <div class=\"form-group\" id=\"checkboxDate\" > <label for=\"exampleInputEmail1\"> Year <\/label><br>");	*/
/* 	  $.each(articles, function(index,jsonObject){*/
/* 	   */
/*         $("#checkboxDate").append("<input class=\"date\" type=\"checkbox\" value="+jsonObject.date.date.substring(0,4)+" /> "+jsonObject.date.date.substring(0,4)+ "<br>") */
/*          });*/
/*  $("#AppendToCol3").append("<\/div> <div class=\"form-group\" id=\"checkboxTitle\"> <label for=\"exampleInputPassword1\"> Issue Title <\/label><br>");*/
/* 	 */
/* 	  $.each(articles, function(index,jsonObject){*/
/* 	   */
/*         $("#checkboxTitle").append("<input  type=\"checkbox\" value="+jsonObject.issue.title+" /> "+jsonObject.issue.title+ "<br>") */
/*          });*/
/* 		 $("#AppendToCol3").append("<\/div> <div class=\"form-group\" id=\"checkboxkeywords\"> <label for=\"exampleInputFile\"> Topic <\/label><br>");*/
/* 		 $.each(articles, function(index,jsonObject){*/
/* 	   */
/*         $("#checkboxKeywords").append("<input  type=\"checkbox\" value=\"keyword later\" /> add keywords later <br>") */
/*          });*/
/* 		 */
/* 		 $("#AppendToRow").append("<\/div> <\/div> <div class=\"col-md-6\" id=\"AppendToCol6\" > <div class=\"row\">")*/
/* 		  $.each(articles, function(index,jsonObject){*/
/* 	   */
/*         $("#AppendToCol6").append("<p> <\/p> \r\n\r\n <div class=\"col-md-12\"  id=\"AppendToCol12\"> <a href=\"#singleArticle\"><h3>"+jsonObject.title+"<\/h3><\/a> <dl> <dt> <h3>" +jsonObject.issue.title+" <\/h3> <p> Volume Volume.id, Issue"+ jsonObject.issue.id+ ", article.issue.volume.year, Pages: 2530\u20132554, "+jsonObject.authors+" <\/p> <p> Article first published online : "+jsonObject.date.date.substring(0,4)+", DOI: 10.1111\/j.1467-8659.2010.01822.x<a href=\"pdfurl\"> &nbsp; Download PDF<\/a> <\/p> <\/dt> <\/dl> <\/div>") */
/*          });*/
/* 		 */
/* 		  $("#AppendToCol6").append(" <\/div> <ul class=\"pagination\"> <li> <a href=\"#\">Prev<\/a> <\/li> <li> <a href=\"#\">1<\/a> <\/li> <li> <a href=\"#\">2<\/a> <\/li> <li> <a href=\"#\">3<\/a> <\/li> <li> <a href=\"#\">4<\/a> <\/li> <li> <a href=\"#\">5<\/a> <\/li> <li> <a href=\"#\">Next<\/a> <\/li> <\/ul> <\/div> <\/div> <\/div>");*/
/* 		 */
/* 	/*		*/
/* 							*/
/* 							*/
/* 						*/
/* 				*/
/* 							*/
/* 						*/
/* 				*/
/*          $.each(articles, function(index,jsonObject){*/
/* 	   */
/*          console.log(jsonObject.title)*/
/*          });*/
/*         */
/*  /* $.each( data, function( key, val ) {*/
/*     console.log(key+"lol "+val)*/
/* */
/*   });*//* */
/*        console.log(data)  */
/*        */
/*             $(".row").append("");*/
/*          },*/
/*          error: function(xhr,textStatus,error){*/
/*          console.log(xhr.statusText)*/
/*          console.log(textStatus)*/
/*          console.log(error)*/
/*          console.log("makhdamch")*/
/*          */
/*          }*/
/*       });*/
/* //$(this).attr("value")*/
/* */
/* }*/
/* );*/
/* */
/* */
/* */
/*   </script>*/
/* */
/* {% endblock %}*/
/* */
