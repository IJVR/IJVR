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
        $__internal_3a8d2894732c9715a16029b500f96777be4ce4ef0189f3b53e1ad4c2e88fb70b = $this->env->getExtension("native_profiler");
        $__internal_3a8d2894732c9715a16029b500f96777be4ce4ef0189f3b53e1ad4c2e88fb70b->enter($__internal_3a8d2894732c9715a16029b500f96777be4ce4ef0189f3b53e1ad4c2e88fb70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRSearchBundle:Default:searchResult.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a8d2894732c9715a16029b500f96777be4ce4ef0189f3b53e1ad4c2e88fb70b->leave($__internal_3a8d2894732c9715a16029b500f96777be4ce4ef0189f3b53e1ad4c2e88fb70b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7da5046a1b1c956aaafaa28aaa88da4345296544de28c04da73750a303948876 = $this->env->getExtension("native_profiler");
        $__internal_7da5046a1b1c956aaafaa28aaa88da4345296544de28c04da73750a303948876->enter($__internal_7da5046a1b1c956aaafaa28aaa88da4345296544de28c04da73750a303948876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_7da5046a1b1c956aaafaa28aaa88da4345296544de28c04da73750a303948876->leave($__internal_7da5046a1b1c956aaafaa28aaa88da4345296544de28c04da73750a303948876_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_81eda52727fd5e1b1054a11f40d5716212fe27145bf7659fbac67063cf1bde65 = $this->env->getExtension("native_profiler");
        $__internal_81eda52727fd5e1b1054a11f40d5716212fe27145bf7659fbac67063cf1bde65->enter($__internal_81eda52727fd5e1b1054a11f40d5716212fe27145bf7659fbac67063cf1bde65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 34
            echo "\t\t\t\t\t\t\t<input class=\"date\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $context["date"], "html", null, true);
            echo "\" /> ";
            echo twig_escape_filter($this->env, $context["date"], "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\" id=\"checkboxIssue\">
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">
\t\t\t\t\t\t\t\tYear
\t\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["issues"]) ? $context["issues"] : $this->getContext($context, "issues")));
        foreach ($context['_seq'] as $context["_key"] => $context["issue"]) {
            // line 44
            echo "\t\t\t\t\t\t\t<input class=\"issueTitle\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $context["issue"], "html", null, true);
            echo "\" /> ";
            echo twig_escape_filter($this->env, $context["issue"], "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['issue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\" id=\"checkboxKeywords\">
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">
\t\t\t\t\t\t\t\tkeywords
\t\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keywords"]) ? $context["keywords"] : $this->getContext($context, "keywords")));
        foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
            // line 54
            echo "\t\t\t\t\t\t\t<input class=\"keywords\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $context["keyword"], "html", null, true);
            echo "\" /> ";
            echo twig_escape_filter($this->env, $context["keyword"], "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" id=\"checkboxauthors\">
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<label for=\"exampleInputFile\">
\t\t\t\t\t\t\t\tAuthors
\t\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 65
            echo "\t\t\t\t\t\t\t<input class=\"authors\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $context["author"], "html", null, true);
            echo "\"/> ";
            echo twig_escape_filter($this->env, $context["author"], "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
\t\t\t\t\t\t<p> </p>
\t\t

\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ijvr_search_single_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h3></a>
\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "issue", array()), "title", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tVolume ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "issue", array()), "volume", array()), "year", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tArticle first published online : ";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "m/d/Y"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["article"], "pdf", array()), "webpath", array())), "html", null, true);
            echo "\" target=\"__blank\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/images/pdf.png"), "html", null, true);
            echo "\" height=\"30px\"></img>  Download PDF</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Prev</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"> ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t\t\t\t\t<li>
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
        // line 120
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
        // line 128
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



";
        // line 147
        $context["base"] = $this->env->getExtension('asset')->getAssetUrl("");
        // line 148
        echo " \$.ajax({
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
        // line 163
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
        \$(\"#AppendToCol6\").append(\"<p> <\\/p> \\r\\n\\r\\n <div class=\\\"col-md-12\\\"  id=\\\"AppendToCol12\\\"> <a href=\\\"singleArticle/\"+jsonObject.id+\"\\\"><h3>\"+jsonObject.title+\"<\\/h3><\\/a> <dl> <dt> <h3>\" +jsonObject.issue.title+\" <\\/h3> <p> Volume \" +jsonObject.issue.volume.year+\"  <\\/p> <p> Article first published online : \"+jsonObject.date.date.substring(0,4)+\"<a href= ";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base")), "html", null, true);
        echo "uploads/\"+jsonObject.pdf.url+\"/\"+jsonObject.pdf.id+\".pdf target=__blank> <img src=";
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base")), "html", null, true);
        echo "images/pdf.png height=30px></img>&nbsp; Download PDF<\\/a> <\\/p> <\\/dt> <\\/dl> <\\/div>\") 
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
        
        $__internal_81eda52727fd5e1b1054a11f40d5716212fe27145bf7659fbac67063cf1bde65->leave($__internal_81eda52727fd5e1b1054a11f40d5716212fe27145bf7659fbac67063cf1bde65_prof);

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
        return array (  381 => 192,  349 => 163,  332 => 148,  330 => 147,  308 => 128,  293 => 120,  277 => 106,  260 => 103,  240 => 101,  232 => 95,  216 => 89,  210 => 86,  204 => 83,  195 => 79,  184 => 73,  176 => 67,  165 => 65,  161 => 64,  151 => 56,  140 => 54,  136 => 53,  127 => 46,  116 => 44,  112 => 43,  103 => 36,  92 => 34,  88 => 33,  67 => 17,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/* 							{% for date in dates %}*/
/* 							<input class="date" type="checkbox" value="{{date}}" /> {{date}}<br>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* */
/* 						<div class="form-group" id="checkboxIssue">*/
/* 							 */
/* 							<label for="exampleInputEmail1">*/
/* 								Year*/
/* 							</label><br>*/
/* 							{% for issue in issues %}*/
/* 							<input class="issueTitle" type="checkbox" value="{{issue}}" /> {{issue}}<br>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* */
/* 						<div class="form-group" id="checkboxKeywords">*/
/* 							 */
/* 							<label for="exampleInputEmail1">*/
/* 								keywords*/
/* 							</label><br>*/
/* 							{% for keyword in keywords %}*/
/* 							<input class="keywords" type="checkbox" value="{{keyword}}" /> {{keyword}}<br>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* */
/* 						*/
/* 						<div class="form-group" id="checkboxauthors">*/
/* 							 */
/* 							<label for="exampleInputFile">*/
/* 								Authors*/
/* 							</label><br>*/
/* 								{% for author in authors %}*/
/* 							<input class="authors" type="checkbox" value="{{author}}"/> {{author}}<br>*/
/* 								{% endfor %}*/
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
/* 										Volume {{article.issue.volume.year}}*/
/* 									</p>*/
/* 									<p>*/
/* 										Article first published online : {{article.date |date("m/d/Y")}} <a href="{{asset(article.pdf.webpath)}}" target="__blank"><img src="{{asset('/images/pdf.png')}}" height="30px"></img>  Download PDF</a>*/
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
/* 						{% for article in articles %} */
/* 						<li>*/
/* 							<a href="#"> {{ loop.index }} </a>*/
/* 						</li>*/
/* 						{% endfor %}*/
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
/* {%set base=asset('')%}*/
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
/*         $("#AppendToCol6").append("<p> <\/p> \r\n\r\n <div class=\"col-md-12\"  id=\"AppendToCol12\"> <a href=\"singleArticle/"+jsonObject.id+"\"><h3>"+jsonObject.title+"<\/h3><\/a> <dl> <dt> <h3>" +jsonObject.issue.title+" <\/h3> <p> Volume " +jsonObject.issue.volume.year+"  <\/p> <p> Article first published online : "+jsonObject.date.date.substring(0,4)+"<a href= {{base}}uploads/"+jsonObject.pdf.url+"/"+jsonObject.pdf.id+".pdf target=__blank> <img src={{base}}images/pdf.png height=30px></img>&nbsp; Download PDF<\/a> <\/p> <\/dt> <\/dl> <\/div>") */
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
