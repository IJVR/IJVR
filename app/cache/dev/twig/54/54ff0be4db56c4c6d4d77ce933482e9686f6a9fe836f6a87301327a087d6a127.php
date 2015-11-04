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
        $__internal_0819d116e0ed123d2bb175c484d7ab9e8d3e5f401148cbd1d945e2cf5b0f8a48 = $this->env->getExtension("native_profiler");
        $__internal_0819d116e0ed123d2bb175c484d7ab9e8d3e5f401148cbd1d945e2cf5b0f8a48->enter($__internal_0819d116e0ed123d2bb175c484d7ab9e8d3e5f401148cbd1d945e2cf5b0f8a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRSearchBundle:Default:singleArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0819d116e0ed123d2bb175c484d7ab9e8d3e5f401148cbd1d945e2cf5b0f8a48->leave($__internal_0819d116e0ed123d2bb175c484d7ab9e8d3e5f401148cbd1d945e2cf5b0f8a48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e27c67e9f3eec3a37bc08fa7169346396268af13d754fc061003a9ac00e7fdd8 = $this->env->getExtension("native_profiler");
        $__internal_e27c67e9f3eec3a37bc08fa7169346396268af13d754fc061003a9ac00e7fdd8->enter($__internal_e27c67e9f3eec3a37bc08fa7169346396268af13d754fc061003a9ac00e7fdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_e27c67e9f3eec3a37bc08fa7169346396268af13d754fc061003a9ac00e7fdd8->leave($__internal_e27c67e9f3eec3a37bc08fa7169346396268af13d754fc061003a9ac00e7fdd8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9037803e8d97fcecc167de1298051ebde0a71f97861e1cb82ee5da9857214a77 = $this->env->getExtension("native_profiler");
        $__internal_9037803e8d97fcecc167de1298051ebde0a71f97861e1cb82ee5da9857214a77->enter($__internal_9037803e8d97fcecc167de1298051ebde0a71f97861e1cb82ee5da9857214a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/images/logo.png"), "html", null, true);
        echo "\" height='100px' class=\"img-thumbnail\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h2>
\t\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t\t";
        // line 27
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
            // line 28
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ijvr_profile_authors", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\" target=\"__blank\">
\t\t\t\t\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "name", array()), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            // line 31
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 32
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t\t\t\t\t\t,  
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 35
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
        // line 36
        echo "\t\t\t\t\t<br>
\t\t\t\t\t <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ijvr_issue_content", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\" type=\"button\">I";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "issue", array()), "title", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t<p>
\t\t\t\t\tVolume ";
        // line 39
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
        // line 57
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
        // line 66
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
        // line 73
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
        
        $__internal_9037803e8d97fcecc167de1298051ebde0a71f97861e1cb82ee5da9857214a77->leave($__internal_9037803e8d97fcecc167de1298051ebde0a71f97861e1cb82ee5da9857214a77_prof);

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
        return array (  199 => 73,  180 => 66,  168 => 57,  143 => 39,  136 => 37,  133 => 36,  119 => 35,  115 => 33,  112 => 32,  110 => 31,  105 => 29,  100 => 28,  83 => 27,  77 => 24,  70 => 20,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/* 			*/
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
/* 										<a href="{{path('ijvr_profile_authors',{'id':a.id})}}" target="__blank">*/
/* 										{{a.name}} */
/* 										</a>*/
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
