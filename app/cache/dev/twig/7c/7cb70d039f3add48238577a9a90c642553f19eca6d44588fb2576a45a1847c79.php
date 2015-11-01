<?php

/* IJVRSearchBundle:Default:searchResult.html.twig */
class __TwigTemplate_bac37e1841697c32d60af52c87b9493496c898cf52f5024394fcdeb5c9cd663e extends Twig_Template
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
        $__internal_b7a4693a0665dcc7114ebb3afdc9f55819a6c728ce31d6aece76cd3e8bfeb51a = $this->env->getExtension("native_profiler");
        $__internal_b7a4693a0665dcc7114ebb3afdc9f55819a6c728ce31d6aece76cd3e8bfeb51a->enter($__internal_b7a4693a0665dcc7114ebb3afdc9f55819a6c728ce31d6aece76cd3e8bfeb51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRSearchBundle:Default:searchResult.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7a4693a0665dcc7114ebb3afdc9f55819a6c728ce31d6aece76cd3e8bfeb51a->leave($__internal_b7a4693a0665dcc7114ebb3afdc9f55819a6c728ce31d6aece76cd3e8bfeb51a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36b7d21ee5e67c0ea3cf92982b0cccd9335c75f32cdd086330418f2df5d0f157 = $this->env->getExtension("native_profiler");
        $__internal_36b7d21ee5e67c0ea3cf92982b0cccd9335c75f32cdd086330418f2df5d0f157->enter($__internal_36b7d21ee5e67c0ea3cf92982b0cccd9335c75f32cdd086330418f2df5d0f157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_36b7d21ee5e67c0ea3cf92982b0cccd9335c75f32cdd086330418f2df5d0f157->leave($__internal_36b7d21ee5e67c0ea3cf92982b0cccd9335c75f32cdd086330418f2df5d0f157_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_808f0705c36e9f2135e6057d97c390bc21b820eb7da8b1e01743d55b4187564f = $this->env->getExtension("native_profiler");
        $__internal_808f0705c36e9f2135e6057d97c390bc21b820eb7da8b1e01743d55b4187564f->enter($__internal_808f0705c36e9f2135e6057d97c390bc21b820eb7da8b1e01743d55b4187564f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t<span>There are</span> <strong>";
        // line 17
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))), "html", null, true);
        echo "</strong> <span>results for:</span> <strong>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</strong>
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
\t\t\t\t\t\t<div class=\"form-group\" id=\"checkboxkeywords\">
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<label for=\"exampleInputFile\">
\t\t\t\t\t\t\t\tTopic
\t\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 56
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "keywords", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
                // line 57
                echo "\t\t\t\t\t\t\t<input class=\"keywords\" type=\"checkbox\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["keyword"], "keyword", array()), "html", null, true);
                echo "\"/> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["keyword"], "keyword", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" id=\"checkboxauthors\">
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<label for=\"exampleInputFile\">
\t\t\t\t\t\t\t\tAuthors
\t\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 68
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "authors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 69
                echo "\t\t\t\t\t\t\t<input class=\"authors\" type=\"checkbox\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                echo "\"/> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
\t\t\t\t\t\t<p> </p>
\t\t

\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ijvr_search_single_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h3></a>
\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "issue", array()), "title", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tVolume ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "issue", array()), "volume", array()), "id", array()), "html", null, true);
            echo ", Issue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "issue", array()), "id", array()), "html", null, true);
            echo " , ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "issue", array()), "volume", array()), "year", array()), "html", null, true);
            echo ", Pages: 2530–2554, 
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tArticle first published online : ";
            // line 94
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
        // line 100
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t
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
console.log(\"dkhelt\")

var datao = {  title : \"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "\"  ,  date:\"";
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "\" , issueTitle :\"";
        echo twig_escape_filter($this->env, (isset($context["issueTitle"]) ? $context["issueTitle"] : $this->getContext($context, "issueTitle")), "html", null, true);
        echo "\", keywords :[] , authors:[]} ;

console.log(datao)

\$(document).on(\"click\",\".date, .issueTitle, .keywords, .authors\",function(event){

console.log(\$(this).attr('class'))
\$(\".col-md-12\").remove();
console.log(\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "\")
console.log(datao)
 if(\$(this).attr('class')===\"date\")
\tdatao[\"date\"]=\$(this).val()
if(\$(this).attr('class')===\"issueTitle\")
\tdatao[\"issueTitle\"]=\$(this).val()
if(\$(this).attr('class')===\"keywords\")
\tdatao[\"keywords\"].push(\$(this).val())
if(\$(this).attr('class')===\"authors\")
\tdatao[\"authors\"].push(\$(this).val())


console.log(datao[\"keywords\"])


console.log(datao)




 \$.ajax({
         url: \"criteria_search\",          
         type: 'POST', //I want a type as POST
         data: datao,
         success: function(data){ 
         articles=\$.parseJSON(data)
         console.log(articles)
\t\t 

         var uniqueIssueTitles= \$.unique(articles.map(function (d) {
    return d.issue.title;}));
var uniqueDates= \$.unique(articles.map(function (d) {
    return d.date.date.substring(0,4);}));

\t\t 
\t\$(\"#AppendToElem\").append(\" <div class=\\\"col-md-12\\\"> <h2> Search Results <\\/h2> <p> <span>There are<\\/span> <strong>\"+articles.length+\"<\\/strong> <span> results for:<\\/span> <strong>";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "<\\/strong> <\\/p> <p> <a class=\\\"btn\\\" href=\\\"#\\\"><\\/a> <\\/p> <div class=\\\"row\\\" id=\\\"AppendToRow\\\"> <div class=\\\"col-md-3\\\" id=\\\"AppendToCol3\\\"> <h3> Filter List <\\/h3> <div class=\\\"form-group\\\" id=\\\"checkboxDate\\\" > <label for=\\\"exampleInputEmail1\\\"> Year <\\/label><br>\");\t
\t  \$.each(uniqueDates, function(index,jsonObject){
\t   
        \$(\"#checkboxDate\").append(\"<input class=\\\"date\\\" type=\\\"checkbox\\\" value=\"+jsonObject+\" /> \"+jsonObject+ \"<br>\") 
         });
 \$(\"#AppendToCol3\").append(\"<\\/div> <div class=\\\"form-group\\\" id=\\\"checkboxTitle\\\"> <label for=\\\"exampleInputPassword1\\\"> Issue Title <\\/label><br>\");
\t 
\t  \$.each(uniqueIssueTitles, function(index,jsonObject){
\t   
        \$(\"#checkboxTitle\").append(\"<input  class=\\\"issueTitle\\\" type=\\\"checkbox\\\" value=\"+jsonObject+\" /> \"+jsonObject+ \"<br>\") 
         });
\t\t \$(\"#AppendToCol3\").append(\"<\\/div> <div class=\\\"form-group\\\" id=\\\"checkboxkeywords\\\"> <label for=\\\"exampleInputFile\\\"> Topic <\\/label><br>\");
\t\t  \$.each(articles, function(index,article){
\t\t  \t\t\$.each(article.keywords, function(index,keyword){
\t\t  \$(\"#checkboxkeywords\").append(\"<input class=\\\"keywords\\\" type=\\\"checkbox\\\" value=\"+keyword.keyword+\" /> \"+keyword.keyword+ \"<br>\") 
\t\t  \t\t\t});
         });


\t\t   \$(\"#AppendToCol3\").append(\"<\\/div> <div class=\\\"form-group\\\" id=\\\"checkboxauthors\\\"> <label for=\\\"exampleInputFile\\\"> Authors <\\/label><br>\");
\t\t  \$.each(articles, function(index,article){
\t\t  \t\t\$.each(article.authors, function(index,author){
\t\t  \$(\"#checkboxauthors\").append(\"<input class=\\\"authors\\\" type=\\\"checkbox\\\" value=\"+author.name+\" /> \"+author.name+ \"<br>\") 
\t\t  \t\t\t});
         });

\t\t \$(\"#AppendToRow\").append(\"<\\/div> <\\/div> <div class=\\\"col-md-6\\\" id=\\\"AppendToCol6\\\" > <div class=\\\"row\\\">\")
\t\t  \$.each(articles, function(index,jsonObject){
\t   
        \$(\"#AppendToCol6\").append(\"<p> <\\/p> \\r\\n\\r\\n <div class=\\\"col-md-12\\\"  id=\\\"AppendToCol12\\\"> <a href=\\\"#singleArticle\\\"><h3>\"+jsonObject.title+\"<\\/h3><\\/a> <dl> <dt> <h3>\" +jsonObject.issue.title+\" <\\/h3> <p> Volume Volume.id, Issue\"+ jsonObject.issue.id+ \", article.issue.volume.year, Pages: 2530\\u20132554,  <\\/p> <p> Article first published online : \"+jsonObject.date.date.substring(0,4)+\", DOI: 10.1111\\/j.1467-8659.2010.01822.x<a href=\\\"pdfurl\\\"> &nbsp; Download PDF<\\/a> <\\/p> <\\/dt> <\\/dl> <\\/div>\") 
         });
\t\t 
\t\t  \$(\"#AppendToCol6\").append(\" <\\/div> <ul class=\\\"pagination\\\">  <li> <a href=\\\"#\\\">Prev<\\/a> <\\/li> <li> <a href=\\\"#\\\">1<\\/a> <\\/li> <li> <a href=\\\"#\\\">2<\\/a> <\\/li> <li> <a href=\\\"#\\\">3<\\/a> <\\/li> <li> <a href=\\\"#\\\">4<\\/a> <\\/li> <li> <a href=\\\"#\\\">5<\\/a> <\\/li> <li> <a href=\\\"#\\\">Next<\\/a> <\\/li> <\\/ul> <\\/div> <\\/div> <\\/div>\");
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
        
        $__internal_808f0705c36e9f2135e6057d97c390bc21b820eb7da8b1e01743d55b4187564f->leave($__internal_808f0705c36e9f2135e6057d97c390bc21b820eb7da8b1e01743d55b4187564f_prof);

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
        return array (  347 => 178,  309 => 143,  294 => 135,  257 => 100,  243 => 94,  233 => 91,  227 => 88,  218 => 84,  207 => 78,  199 => 72,  193 => 71,  182 => 69,  177 => 68,  173 => 67,  164 => 60,  158 => 59,  147 => 57,  142 => 56,  138 => 55,  128 => 47,  117 => 45,  113 => 44,  103 => 36,  92 => 34,  88 => 33,  67 => 17,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/* 				<span>There are</span> <strong>{{articles|length}}</strong> <span>results for:</span> <strong>{{title}}</strong>*/
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
/* 						<div class="form-group" id="checkboxkeywords">*/
/* 							 */
/* 							<label for="exampleInputFile">*/
/* 								Topic*/
/* 							</label><br>*/
/* 							{% for article in articles %}*/
/* 								{% for keyword in article.keywords %}*/
/* 							<input class="keywords" type="checkbox" value="{{keyword.keyword}}"/> {{keyword.keyword}}<br>*/
/* 								{% endfor %}*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group" id="checkboxauthors">*/
/* 							 */
/* 							<label for="exampleInputFile">*/
/* 								Authors*/
/* 							</label><br>*/
/* 							{% for article in articles %}*/
/* 								{% for author in article.authors %}*/
/* 							<input class="authors" type="checkbox" value="{{author.name}}"/> {{author.name}}<br>*/
/* 								{% endfor %}*/
/* 							{% endfor %}*/
/* 						</div>*/
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
/* 										Volume {{article.issue.volume.id}}, Issue {{article.issue.id}} , {{article.issue.volume.year}}, Pages: 2530–2554, */
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
/* 						*/
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
/* console.log("dkhelt")*/
/* */
/* var datao = {  title : "{{title}}"  ,  date:"{{date}}" , issueTitle :"{{issueTitle}}", keywords :[] , authors:[]} ;*/
/* */
/* console.log(datao)*/
/* */
/* $(document).on("click",".date, .issueTitle, .keywords, .authors",function(event){*/
/* */
/* console.log($(this).attr('class'))*/
/* $(".col-md-12").remove();*/
/* console.log("{{title}}")*/
/* console.log(datao)*/
/*  if($(this).attr('class')==="date")*/
/* 	datao["date"]=$(this).val()*/
/* if($(this).attr('class')==="issueTitle")*/
/* 	datao["issueTitle"]=$(this).val()*/
/* if($(this).attr('class')==="keywords")*/
/* 	datao["keywords"].push($(this).val())*/
/* if($(this).attr('class')==="authors")*/
/* 	datao["authors"].push($(this).val())*/
/* */
/* */
/* console.log(datao["keywords"])*/
/* */
/* */
/* console.log(datao)*/
/* */
/* */
/* */
/* */
/*  $.ajax({*/
/*          url: "criteria_search",          */
/*          type: 'POST', //I want a type as POST*/
/*          data: datao,*/
/*          success: function(data){ */
/*          articles=$.parseJSON(data)*/
/*          console.log(articles)*/
/* 		 */
/* */
/*          var uniqueIssueTitles= $.unique(articles.map(function (d) {*/
/*     return d.issue.title;}));*/
/* var uniqueDates= $.unique(articles.map(function (d) {*/
/*     return d.date.date.substring(0,4);}));*/
/* */
/* 		 */
/* 	$("#AppendToElem").append(" <div class=\"col-md-12\"> <h2> Search Results <\/h2> <p> <span>There are<\/span> <strong>"+articles.length+"<\/strong> <span> results for:<\/span> <strong>{{title}}<\/strong> <\/p> <p> <a class=\"btn\" href=\"#\"><\/a> <\/p> <div class=\"row\" id=\"AppendToRow\"> <div class=\"col-md-3\" id=\"AppendToCol3\"> <h3> Filter List <\/h3> <div class=\"form-group\" id=\"checkboxDate\" > <label for=\"exampleInputEmail1\"> Year <\/label><br>");	*/
/* 	  $.each(uniqueDates, function(index,jsonObject){*/
/* 	   */
/*         $("#checkboxDate").append("<input class=\"date\" type=\"checkbox\" value="+jsonObject+" /> "+jsonObject+ "<br>") */
/*          });*/
/*  $("#AppendToCol3").append("<\/div> <div class=\"form-group\" id=\"checkboxTitle\"> <label for=\"exampleInputPassword1\"> Issue Title <\/label><br>");*/
/* 	 */
/* 	  $.each(uniqueIssueTitles, function(index,jsonObject){*/
/* 	   */
/*         $("#checkboxTitle").append("<input  class=\"issueTitle\" type=\"checkbox\" value="+jsonObject+" /> "+jsonObject+ "<br>") */
/*          });*/
/* 		 $("#AppendToCol3").append("<\/div> <div class=\"form-group\" id=\"checkboxkeywords\"> <label for=\"exampleInputFile\"> Topic <\/label><br>");*/
/* 		  $.each(articles, function(index,article){*/
/* 		  		$.each(article.keywords, function(index,keyword){*/
/* 		  $("#checkboxkeywords").append("<input class=\"keywords\" type=\"checkbox\" value="+keyword.keyword+" /> "+keyword.keyword+ "<br>") */
/* 		  			});*/
/*          });*/
/* */
/* */
/* 		   $("#AppendToCol3").append("<\/div> <div class=\"form-group\" id=\"checkboxauthors\"> <label for=\"exampleInputFile\"> Authors <\/label><br>");*/
/* 		  $.each(articles, function(index,article){*/
/* 		  		$.each(article.authors, function(index,author){*/
/* 		  $("#checkboxauthors").append("<input class=\"authors\" type=\"checkbox\" value="+author.name+" /> "+author.name+ "<br>") */
/* 		  			});*/
/*          });*/
/* */
/* 		 $("#AppendToRow").append("<\/div> <\/div> <div class=\"col-md-6\" id=\"AppendToCol6\" > <div class=\"row\">")*/
/* 		  $.each(articles, function(index,jsonObject){*/
/* 	   */
/*         $("#AppendToCol6").append("<p> <\/p> \r\n\r\n <div class=\"col-md-12\"  id=\"AppendToCol12\"> <a href=\"#singleArticle\"><h3>"+jsonObject.title+"<\/h3><\/a> <dl> <dt> <h3>" +jsonObject.issue.title+" <\/h3> <p> Volume Volume.id, Issue"+ jsonObject.issue.id+ ", article.issue.volume.year, Pages: 2530\u20132554,  <\/p> <p> Article first published online : "+jsonObject.date.date.substring(0,4)+", DOI: 10.1111\/j.1467-8659.2010.01822.x<a href=\"pdfurl\"> &nbsp; Download PDF<\/a> <\/p> <\/dt> <\/dl> <\/div>") */
/*          });*/
/* 		 */
/* 		  $("#AppendToCol6").append(" <\/div> <ul class=\"pagination\">  <li> <a href=\"#\">Prev<\/a> <\/li> <li> <a href=\"#\">1<\/a> <\/li> <li> <a href=\"#\">2<\/a> <\/li> <li> <a href=\"#\">3<\/a> <\/li> <li> <a href=\"#\">4<\/a> <\/li> <li> <a href=\"#\">5<\/a> <\/li> <li> <a href=\"#\">Next<\/a> <\/li> <\/ul> <\/div> <\/div> <\/div>");*/
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
