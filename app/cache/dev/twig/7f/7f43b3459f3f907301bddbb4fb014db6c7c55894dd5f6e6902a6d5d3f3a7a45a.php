<?php

/* IJVRPlatformBundle:Default:home.html.twig */
class __TwigTemplate_9a44cf81e1b098d090b7f52bbe031b58678387b18c16e4375306ff8c1f3ecad4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IJVRPlatformBundle:Default:home.html.twig", 1);
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
        $__internal_46998f3e1c3e6045347bab04811a6977d2e90e24590ea43846fef243e9cbec80 = $this->env->getExtension("native_profiler");
        $__internal_46998f3e1c3e6045347bab04811a6977d2e90e24590ea43846fef243e9cbec80->enter($__internal_46998f3e1c3e6045347bab04811a6977d2e90e24590ea43846fef243e9cbec80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRPlatformBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46998f3e1c3e6045347bab04811a6977d2e90e24590ea43846fef243e9cbec80->leave($__internal_46998f3e1c3e6045347bab04811a6977d2e90e24590ea43846fef243e9cbec80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87e5c6c4c97d9a8ab3e97372ed58a82ca198bd05b3dc3ae59d65804ceef3c760 = $this->env->getExtension("native_profiler");
        $__internal_87e5c6c4c97d9a8ab3e97372ed58a82ca198bd05b3dc3ae59d65804ceef3c760->enter($__internal_87e5c6c4c97d9a8ab3e97372ed58a82ca198bd05b3dc3ae59d65804ceef3c760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_87e5c6c4c97d9a8ab3e97372ed58a82ca198bd05b3dc3ae59d65804ceef3c760->leave($__internal_87e5c6c4c97d9a8ab3e97372ed58a82ca198bd05b3dc3ae59d65804ceef3c760_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_083a71a2ae423b357f6b8e5e18454b2c487e5118dc100a3fbdc988231b6de7c5 = $this->env->getExtension("native_profiler");
        $__internal_083a71a2ae423b357f6b8e5e18454b2c487e5118dc100a3fbdc988231b6de7c5->enter($__internal_083a71a2ae423b357f6b8e5e18454b2c487e5118dc100a3fbdc988231b6de7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/home.css.twig"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<div class=\"container\">

<h2>Welcome to the International Journal of Virtual Reality (IJVR)</h2>
<br>
The IJVR is a professional journal dedicated to the promotion and publication of new research and technology in the realm of Virtual Reality. The information regarding this new and constantly emerging technology is of interest to computer media professionals worldwide as well as others interested in the expanding potential of virtual reality. The journal has been published since 1995 when virtual reality was still in its infancy. 
<br><br>
International Journal of Virtual Reality solicites contributions
describing original research results, applications, and experience in all
fields of Virtual Reality.<br><br><br>

<div width=\"80%\" style=\"float:left\">
<h2>Last issue</h2>
\t\tPublished on: ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), 0, array(), "array"), "publishDate", array()), "m/d/Y"), "html", null, true);
        echo "<br><br>
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div >\t\t\t
\t\t\t\t    
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<table class=\"table table-hover table-bordered\">
\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 27
            echo "\t\t\t\t\t\t\t<tr><td>
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ijvr_search_single_article", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "title", array()), "html", null, true);
            echo " </a>

\t\t\t\t\t\t\t</td></tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t\t</table>
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("ijvr_all_issues");
        echo "\">All the issues</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t
\t\t</div>
\t
</div>

<div width=\"20%\" style=\"float:right\">

<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Metrics</h3>
  </div>
  <div class=\"panel-body\">
    Acceptance rate : 37 %<br>
    Average delays for reviews : 1.5 months <br/>
    Acceptance delays for publication : 2.5 months
  </div>
</div>



</div>

<div class=\"row\">
<div id=\"small-img\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 center\">
<br><br><br>
  <ul>
    <li><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\"  style=\"width:300px;height:177px;\"  alt=\"Issue01\" class=\"img-responsive inline-block\" alt=\"Responsive image\"/></li>
    <li><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\"  style=\"width:300px;height:177px;\"  alt=\"Issue02\" class=\"img-responsive inline-block\" alt=\"Responsive image\"/></li>
    <li><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/2.png"), "html", null, true);
        echo "\"  style=\"width:300px;height:190px;\"  alt=\"Issue03\" class=\"img-responsive inline-block\" alt=\"Responsive image\"/></li>
   </ul>            
</div>

<br><br><br>
</div>
</div>
";
        
        $__internal_083a71a2ae423b357f6b8e5e18454b2c487e5118dc100a3fbdc988231b6de7c5->leave($__internal_083a71a2ae423b357f6b8e5e18454b2c487e5118dc100a3fbdc988231b6de7c5_prof);

    }

    public function getTemplateName()
    {
        return "IJVRPlatformBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 67,  142 => 66,  138 => 65,  104 => 34,  100 => 32,  88 => 28,  85 => 27,  81 => 26,  71 => 19,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* <link href="{{ asset('css/home.css.twig') }}" rel="stylesheet" />*/
/* <div class="container">*/
/* */
/* <h2>Welcome to the International Journal of Virtual Reality (IJVR)</h2>*/
/* <br>*/
/* The IJVR is a professional journal dedicated to the promotion and publication of new research and technology in the realm of Virtual Reality. The information regarding this new and constantly emerging technology is of interest to computer media professionals worldwide as well as others interested in the expanding potential of virtual reality. The journal has been published since 1995 when virtual reality was still in its infancy. */
/* <br><br>*/
/* International Journal of Virtual Reality solicites contributions*/
/* describing original research results, applications, and experience in all*/
/* fields of Virtual Reality.<br><br><br>*/
/* */
/* <div width="80%" style="float:left">*/
/* <h2>Last issue</h2>*/
/* 		Published on: {{article[0].publishDate | date("m/d/Y")}}<br><br>*/
/* 		<div class="col-md-12">*/
/* 			<div class="row">*/
/* 				<div >			*/
/* 				    */
/* 										*/
/* 					<table class="table table-hover table-bordered">*/
/* 						{%for a in article%}*/
/* 							<tr><td>*/
/* 							<a href="{{path('ijvr_search_single_article',{'id':a.id})}}"> {{a.title}} </a>*/
/* */
/* 							</td></tr>*/
/* 						{%endfor%}*/
/* 					</table>*/
/* 					<br>*/
/* 					<a href="{{path('ijvr_all_issues')}}">All the issues</a>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 			*/
/* 		</div>*/
/* 	*/
/* </div>*/
/* */
/* <div width="20%" style="float:right">*/
/* */
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title">Metrics</h3>*/
/*   </div>*/
/*   <div class="panel-body">*/
/*     Acceptance rate : 37 %<br>*/
/*     Average delays for reviews : 1.5 months <br/>*/
/*     Acceptance delays for publication : 2.5 months*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* */
/* </div>*/
/* */
/* <div class="row">*/
/* <div id="small-img" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center">*/
/* <br><br><br>*/
/*   <ul>*/
/*     <li><img src="{{asset('images/1.jpg')}}"  style="width:300px;height:177px;"  alt="Issue01" class="img-responsive inline-block" alt="Responsive image"/></li>*/
/*     <li><img src="{{asset('images/3.jpg')}}"  style="width:300px;height:177px;"  alt="Issue02" class="img-responsive inline-block" alt="Responsive image"/></li>*/
/*     <li><img src="{{asset('images/2.png')}}"  style="width:300px;height:190px;"  alt="Issue03" class="img-responsive inline-block" alt="Responsive image"/></li>*/
/*    </ul>            */
/* </div>*/
/* */
/* <br><br><br>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
