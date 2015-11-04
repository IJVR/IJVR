<?php

/* IJVRSearchBundle:Default:issueArticles.html.twig */
class __TwigTemplate_d8d46bc6b72ff2fef764ad24aa681f8e95c70cf7363063ca57079f1b6396dc37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IJVRSearchBundle:Default:issueArticles.html.twig", 1);
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
        $__internal_74f6ba270d055d96d3c996d56d81c9fa593987fa6b9f4e762690137dd8d950e9 = $this->env->getExtension("native_profiler");
        $__internal_74f6ba270d055d96d3c996d56d81c9fa593987fa6b9f4e762690137dd8d950e9->enter($__internal_74f6ba270d055d96d3c996d56d81c9fa593987fa6b9f4e762690137dd8d950e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRSearchBundle:Default:issueArticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f6ba270d055d96d3c996d56d81c9fa593987fa6b9f4e762690137dd8d950e9->leave($__internal_74f6ba270d055d96d3c996d56d81c9fa593987fa6b9f4e762690137dd8d950e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5cc1487038c8073d014ddbe5325919c84d4440a8fa776327ae8ee6a97495f78 = $this->env->getExtension("native_profiler");
        $__internal_c5cc1487038c8073d014ddbe5325919c84d4440a8fa776327ae8ee6a97495f78->enter($__internal_c5cc1487038c8073d014ddbe5325919c84d4440a8fa776327ae8ee6a97495f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_c5cc1487038c8073d014ddbe5325919c84d4440a8fa776327ae8ee6a97495f78->leave($__internal_c5cc1487038c8073d014ddbe5325919c84d4440a8fa776327ae8ee6a97495f78_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f11f81ea07d7dc2c059eb00ec40ae7528b67a8d5607103c3be6cbc7c6985d5a = $this->env->getExtension("native_profiler");
        $__internal_4f11f81ea07d7dc2c059eb00ec40ae7528b67a8d5607103c3be6cbc7c6985d5a->enter($__internal_4f11f81ea07d7dc2c059eb00ec40ae7528b67a8d5607103c3be6cbc7c6985d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<br/>
<br/>

 <div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t<br></br>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t
\t\t
\t\t<div class=\"\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/images/logo.png"), "html", null, true);
        echo "\" height='10px' class=\"img-thumbnail\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h2>
\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0, array(), "array"), "issue", array()), "title", array()), "html", null, true);
        echo "
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\tVolume ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0, array(), "array"), "issue", array()), "volume", array()), "id", array()), "html", null, true);
        echo " \t</p>
\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0, array(), "array"), "date", array()), "m/d/Y"), "html", null, true);
        echo "
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t<h2>
\t\t\t\tArticles
\t\t\t</h2>
\t\t\t
\t\t\t<p>
\t\t\t\t<a class=\"btn\" href=\"#\"></a>
\t\t\t</p>
\t\t\t<div class=\"row\" id=\"AppendToRow\">
\t\t\t\t
\t\t\t\t<div class=\"\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<table class=\"table table-hover table-bordered\">
\t\t\t\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
\t\t\t\t\t\t<tr><td>
\t\t\t\t\t\t<p> </p>
\t\t

\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ijvr_search_single_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h3></a>
\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t<dt>

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "authors", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 63
                echo "
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ijvr_profile_authors", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
                echo "\" target=\"__blank\">
\t\t\t\t\t\t\t\t\t\t";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "name", array()), "html", null, true);
                echo " 
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 67
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t\t,  
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 71
                echo "\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tVolume ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "issue", array()), "volume", array()), "year", array()), "html", null, true);
            echo ", Issue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "issue", array()), "title", array()), "html", null, true);
            echo " , Pages: 2530–2554
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["article"], "pdf", array()), "webpath", array())), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/images/pdf.png"), "html", null, true);
            echo "\" height=\"30px\"></img>Download PDF</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t\t</div>
\t\t\t
\t
\t</div>
</div>





";
        
        $__internal_4f11f81ea07d7dc2c059eb00ec40ae7528b67a8d5607103c3be6cbc7c6985d5a->leave($__internal_4f11f81ea07d7dc2c059eb00ec40ae7528b67a8d5607103c3be6cbc7c6985d5a_prof);

    }

    public function getTemplateName()
    {
        return "IJVRSearchBundle:Default:issueArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 85,  199 => 78,  191 => 75,  186 => 72,  172 => 71,  168 => 69,  165 => 68,  163 => 67,  158 => 65,  154 => 64,  151 => 63,  134 => 62,  124 => 57,  112 => 50,  89 => 30,  85 => 29,  78 => 25,  71 => 21,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/*  <div class="container">*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 		<br></br>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		*/
/* 		*/
/* 		<div class="">*/
/* 			<div class="row">*/
/* 				<div class="col-md-2">*/
/* 					<img alt="Bootstrap Image Preview" src="{{asset('/images/logo.png')}}" height='10px' class="img-thumbnail"/>*/
/* 				</div>*/
/* 				<div class="col-md-6">*/
/* 					<h2>*/
/* 					{{articles[0].issue.title}}*/
/* 					</h2>*/
/* 					*/
/* 					<p>*/
/* 					Volume {{articles[0].issue.volume.id}} 	</p>*/
/* 					{{articles[0].date |date("m/d/Y")}}*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="row">*/
/* 					<div class="col-md-12">*/
/* 			<h2>*/
/* 				Articles*/
/* 			</h2>*/
/* 			*/
/* 			<p>*/
/* 				<a class="btn" href="#"></a>*/
/* 			</p>*/
/* 			<div class="row" id="AppendToRow">*/
/* 				*/
/* 				<div class="">*/
/* 					<div class="row">*/
/* */
/* 						<table class="table table-hover table-bordered">*/
/* 						{% for article in articles %} */
/* 						<tr><td>*/
/* 						<p> </p>*/
/* 		*/
/* */
/* 						<div class="col-md-12">*/
/* 						*/
/* 							 <a href="{{path('ijvr_search_single_article',{'id':article.id})}}"><h3>{{ article.title }}</h3></a>*/
/* 							<dl>*/
/* 								<dt>*/
/* */
/* 									*/
/* 									{% for a in article.authors %}*/
/* */
/* 									<a href="{{path('ijvr_profile_authors',{'id':a.id})}}" target="__blank">*/
/* 										{{a.name}} */
/* 										</a>*/
/* 										{%if loop.last%}*/
/* 										{%else%}*/
/* 										,  */
/* 										{%endif%}*/
/* 									{%endfor%}*/
/* 									<br>*/
/* 									*/
/* 									<p>*/
/* 										Volume {{article.issue.volume.year}}, Issue {{article.issue.title}} , Pages: 2530–2554*/
/* 									</p>*/
/* 									<p>*/
/* 										 <a href="{{asset(article.pdf.webpath)}}" ><img src="{{asset('/images/pdf.png')}}" height="30px"></img>Download PDF</a>*/
/* 									</p>*/
/* 								</dt>*/
/* 							</dl>*/
/* 						</div>*/
/* 						</td>*/
/* 						{% endfor %}*/
/* 						</table>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 			</div>*/
/* 			*/
/* 	*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
