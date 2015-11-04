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
        $__internal_d1f124891f3403073599950393b952f3a2cb94e0bae596a472ecc37657861af5 = $this->env->getExtension("native_profiler");
        $__internal_d1f124891f3403073599950393b952f3a2cb94e0bae596a472ecc37657861af5->enter($__internal_d1f124891f3403073599950393b952f3a2cb94e0bae596a472ecc37657861af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRSearchBundle:Default:singleArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1f124891f3403073599950393b952f3a2cb94e0bae596a472ecc37657861af5->leave($__internal_d1f124891f3403073599950393b952f3a2cb94e0bae596a472ecc37657861af5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95a6edfb6f1ecd567c952e621e98ddddde5a4bda203433777f8a2fa20cfb438e = $this->env->getExtension("native_profiler");
        $__internal_95a6edfb6f1ecd567c952e621e98ddddde5a4bda203433777f8a2fa20cfb438e->enter($__internal_95a6edfb6f1ecd567c952e621e98ddddde5a4bda203433777f8a2fa20cfb438e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_95a6edfb6f1ecd567c952e621e98ddddde5a4bda203433777f8a2fa20cfb438e->leave($__internal_95a6edfb6f1ecd567c952e621e98ddddde5a4bda203433777f8a2fa20cfb438e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a4b32c6c48be76dc23db3df949fa46656474e15684e141142a2ce063b9fd86c = $this->env->getExtension("native_profiler");
        $__internal_5a4b32c6c48be76dc23db3df949fa46656474e15684e141142a2ce063b9fd86c->enter($__internal_5a4b32c6c48be76dc23db3df949fa46656474e15684e141142a2ce063b9fd86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/images/logo.png"), "html", null, true);
        echo "\" height='100px' class=\"img-thumbnail\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h2>
\t\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "authors", array()));
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
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "name", array()), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t\t\t";
            // line 56
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 57
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t,  
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 60
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
        // line 61
        echo "\t\t\t\t\t<br>
\t\t\t\t\t <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ijvr_issue_content", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\" type=\"button\">I";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "issue", array()), "title", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t<p>
\t\t\t\t\tVolume ";
        // line 64
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
\t\t\t\t\t<p >
\t\t\t\t\t\t
\t\t\t";
        // line 82
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
        // line 91
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
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "pdf", array()), "webpath", array())), "html", null, true);
        echo "\" target=\"__blank\"><h3><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/images/pdf.png"), "html", null, true);
        echo "\" height=\"50px\"></img> Download PDF</h3></a>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tMetrics
\t\t\t\t\t</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\t</p>
<p>Source Normalized Impact per Paper (SNIP): </p>
<p>SCImago Journal Rank (SJR): </p>
<p>Impact Factor: </p>
<p>5-Year Impact Factor: \t</p>\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a4b32c6c48be76dc23db3df949fa46656474e15684e141142a2ce063b9fd86c->leave($__internal_5a4b32c6c48be76dc23db3df949fa46656474e15684e141142a2ce063b9fd86c_prof);

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
        return array (  221 => 98,  202 => 91,  190 => 82,  165 => 64,  158 => 62,  155 => 61,  141 => 60,  137 => 58,  134 => 57,  132 => 56,  127 => 55,  110 => 54,  104 => 51,  97 => 47,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/* 					<img alt="Bootstrap Image Preview" src="{{asset('/images/logo.png')}}" height='100px' class="img-thumbnail"/>*/
/* 				</div>*/
/* 				<div class="col-md-6">*/
/* 					<h2>*/
/* 					{{article.title}}*/
/* 					</h2>*/
/* 					*/
/* 					{% for a in article.authors %}*/
/* 										{{a.name}} */
/* 										{%if loop.last%}*/
/* 										{%else%}*/
/* 										,  */
/* 										{%endif%}*/
/* 									{%endfor%}*/
/* 					<br>*/
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
/* 					<p >*/
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
/* 			 <a href="{{asset(article.pdf.webpath)}}" target="__blank"><h3><img src="{{asset('/images/pdf.png')}}" height="50px"></img> Download PDF</h3></a>*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<h2>*/
/* 						Metrics*/
/* 					</h2>*/
/* 					<p>*/
/* 						</p>*/
/* <p>Source Normalized Impact per Paper (SNIP): </p>*/
/* <p>SCImago Journal Rank (SJR): </p>*/
/* <p>Impact Factor: </p>*/
/* <p>5-Year Impact Factor: 	</p>		*/
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
