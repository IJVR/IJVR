<?php

/* IJVRSearchBundle:Default:singleArticle.html.twig */
class __TwigTemplate_49f390f5c9f1ea9bc79444d4191f5eeb970fde65773482da26d3e8dfab0c8775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IJVRSearchBundle:Default:singleArticle.html.twig", 1);
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
        $__internal_8a58baecb9c2f0ececf7cdba3f316050c7f4b04722018e16786343ff4032fd53 = $this->env->getExtension("native_profiler");
        $__internal_8a58baecb9c2f0ececf7cdba3f316050c7f4b04722018e16786343ff4032fd53->enter($__internal_8a58baecb9c2f0ececf7cdba3f316050c7f4b04722018e16786343ff4032fd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRSearchBundle:Default:singleArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a58baecb9c2f0ececf7cdba3f316050c7f4b04722018e16786343ff4032fd53->leave($__internal_8a58baecb9c2f0ececf7cdba3f316050c7f4b04722018e16786343ff4032fd53_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c85a8f71597d516752749f904a383f0f8b2efb2175fb0cb514eb5864d249827 = $this->env->getExtension("native_profiler");
        $__internal_9c85a8f71597d516752749f904a383f0f8b2efb2175fb0cb514eb5864d249827->enter($__internal_9c85a8f71597d516752749f904a383f0f8b2efb2175fb0cb514eb5864d249827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_9c85a8f71597d516752749f904a383f0f8b2efb2175fb0cb514eb5864d249827->leave($__internal_9c85a8f71597d516752749f904a383f0f8b2efb2175fb0cb514eb5864d249827_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e482eb0c644c792864b209e7214152f35b69c2cda5410e9d072352b72235e87 = $this->env->getExtension("native_profiler");
        $__internal_8e482eb0c644c792864b209e7214152f35b69c2cda5410e9d072352b72235e87->enter($__internal_8e482eb0c644c792864b209e7214152f35b69c2cda5410e9d072352b72235e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 <div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t<br></br>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-2\">
\t\t\t<h3 class=\"text-left\">
\t\t\t\tTable of contents
\t\t\t</h3>
\t\t\t<div class=\"panel-group\" id=\"panel-835590\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t <a class=\"panel-title\" data-toggle=\"collapse\" data-parent=\"#panel-835590\" href=\"#panel-element-704681\">Highlights


</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"panel-element-704681\" class=\"panel-collapse collapse in\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\tAnim pariatur cliche...
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t <a class=\"panel-title\" data-toggle=\"collapse\" data-parent=\"#panel-835590\" href=\"#panel-element-360342\">keywords</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"panel-element-360342\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\tAnim pariatur cliche...
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"http://lorempixel.com/140/140/\" class=\"img-thumbnail\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h2>
\t\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "
\t\t\t\t\t</h2>
\t\t\t\t\t <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ijvr_issue_content", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\" type=\"button\">I";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "issue", array()), "title", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t<p>
\t\t\t\t\tVolume ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "issue", array()), "volume", array()), "id", array()), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "m/Y"), "html", null, true);
        echo ", Pages : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pages", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h3 class=\"text-muted\">
\t\t\t\t\t\tAbstract
\t\t\t\t\t</h3>
\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t
\t\t\t";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "abstract", array()), "html", null, true);
        echo "\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h3 class=\"text-muted\">
\t\t\t\t\t\tKeywords
\t\t\t\t\t</h3>
\t\t\t\t\t<p>\t\t\t\t
\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "keywords", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["keyword"], "keyword", array()), "html", null, true);
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t 
\t\t\t <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pdf", array()), "webpath", array())), "html", null, true);
        echo "\"><h3>Download PDF</h3></a>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tMetrics
\t\t\t\t\t</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\t</p>
<p>Source Normalized Impact per Paper (SNIP): 1.042</p>
<p>SCImago Journal Rank (SJR): 0.489</p>
<p>Impact Factor: 0.831</p>
<p>5-Year Impact Factor: 1.311\t</p>\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_8e482eb0c644c792864b209e7214152f35b69c2cda5410e9d072352b72235e87->leave($__internal_8e482eb0c644c792864b209e7214152f35b69c2cda5410e9d072352b72235e87_prof);

    }

    public function getTemplateName()
    {
        return "IJVRSearchBundle:Default:singleArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 89,  150 => 82,  138 => 73,  113 => 55,  106 => 53,  101 => 51,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*  <div class="container-fluid">*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 		<br></br>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-2">*/
/* 			<h3 class="text-left">*/
/* 				Table of contents*/
/* 			</h3>*/
/* 			<div class="panel-group" id="panel-835590">*/
/* 				<div class="panel panel-default">*/
/* 					<div class="panel-heading">*/
/* 						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-835590" href="#panel-element-704681">Highlights*/
/* */
/* */
/* </a>*/
/* 					</div>*/
/* 					<div id="panel-element-704681" class="panel-collapse collapse in">*/
/* 						<div class="panel-body">*/
/* 							Anim pariatur cliche...*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="panel panel-default">*/
/* 					<div class="panel-heading">*/
/* 						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-835590" href="#panel-element-360342">keywords</a>*/
/* 					</div>*/
/* 					<div id="panel-element-360342" class="panel-collapse collapse">*/
/* 						<div class="panel-body">*/
/* 							Anim pariatur cliche...*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-6">*/
/* 			<div class="row">*/
/* 				<div class="col-md-2">*/
/* 					<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-thumbnail" />*/
/* 				</div>*/
/* 				<div class="col-md-6">*/
/* 					<h2>*/
/* 					{{article.title}}*/
/* 					</h2>*/
/* 					 <a href="{{path('ijvr_issue_content',{'id':article.id})}}" class="btn" type="button">I{{article.issue.title}}</a>*/
/* 					<p>*/
/* 					Volume {{article.issue.volume.id}} , {{article.date |date("m/Y")}}, Pages : {{article.pages}}*/
/* 					</p>*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<div class="row">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<h3 class="text-muted">*/
/* 						Abstract*/
/* 					</h3>*/
/* 					<p class="lead">*/
/* 						*/
/* 			{{article.abstract}}	</p>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 						<h3 class="text-muted">*/
/* 						Keywords*/
/* 					</h3>*/
/* 					<p>				*/
/* 	{% for keyword in article.keywords %} {{keyword.keyword}}	{% endfor %}</p>*/
/* 				*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			 */
/* 			 <a href="{{asset(article.pdf.webpath)}}"><h3>Download PDF</h3></a>*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<h2>*/
/* 						Metrics*/
/* 					</h2>*/
/* 					<p>*/
/* 						</p>*/
/* <p>Source Normalized Impact per Paper (SNIP): 1.042</p>*/
/* <p>SCImago Journal Rank (SJR): 0.489</p>*/
/* <p>Impact Factor: 0.831</p>*/
/* <p>5-Year Impact Factor: 1.311	</p>		*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
