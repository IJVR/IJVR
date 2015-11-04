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
        $__internal_aa3b2e92b4548f0c97a4137742233fa22a40a27ec74342c16f30d7d8ddfedbad = $this->env->getExtension("native_profiler");
        $__internal_aa3b2e92b4548f0c97a4137742233fa22a40a27ec74342c16f30d7d8ddfedbad->enter($__internal_aa3b2e92b4548f0c97a4137742233fa22a40a27ec74342c16f30d7d8ddfedbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRPlatformBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa3b2e92b4548f0c97a4137742233fa22a40a27ec74342c16f30d7d8ddfedbad->leave($__internal_aa3b2e92b4548f0c97a4137742233fa22a40a27ec74342c16f30d7d8ddfedbad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_793c9d1d587d2d1f41909d2ad1e505e85bd50513d474ee6537f68e109aa523a4 = $this->env->getExtension("native_profiler");
        $__internal_793c9d1d587d2d1f41909d2ad1e505e85bd50513d474ee6537f68e109aa523a4->enter($__internal_793c9d1d587d2d1f41909d2ad1e505e85bd50513d474ee6537f68e109aa523a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_793c9d1d587d2d1f41909d2ad1e505e85bd50513d474ee6537f68e109aa523a4->leave($__internal_793c9d1d587d2d1f41909d2ad1e505e85bd50513d474ee6537f68e109aa523a4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a593b6e2ebdf6131bb4ff97b0adb4792740ccc3b4250c88a7d758d157843c73f = $this->env->getExtension("native_profiler");
        $__internal_a593b6e2ebdf6131bb4ff97b0adb4792740ccc3b4250c88a7d758d157843c73f->enter($__internal_a593b6e2ebdf6131bb4ff97b0adb4792740ccc3b4250c88a7d758d157843c73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/home.css.twig"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<div class=\"container\">

<h2>Welcome to the International Journal of Virtual Reality (IJVR)</h2>
<br>
The IJVR is a professional journal dedicated to the promotion and publication of new research and technology in the realm of Virtual Reality. The information regarding this new and constantly emerging technology is of interest to computer media professionals worldwide as well as others interested in the expanding potential of virtual reality. The journal has been published since 1995 when virtual reality was still in its infancy. 
<br><br><br>

<div width=\"80%\" style=\"float:left\">
<h2>Last issue</h2>

\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div >\t\t\t
\t\t\t\t    
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<table class=\"table table-hover table-bordered\">
\t\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 24
            echo "\t\t\t\t\t\t\t<tr><td>
\t\t\t\t\t\t\t<a href=\"";
            // line 25
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
        // line 29
        echo "\t\t\t\t\t</table>
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
    Acceptance rate : x %
  </div>
</div>



</div>

<div class=\"row\">
<div id=\"small-img\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 center\">
<br><br><br>
  <ul>
    <li><img src=\"http://o.aolcdn.com/hss/storage/midas/3a46d7cfdf368f98b6ffd7923db67c58/200264155/morpheus.jpg\" width=\"300\" height=\"200\"  alt=\"Issue01\" class=\"img-responsive inline-block\" alt=\"Responsive image\"/></li>
    <li><img src=\"http://marjoriekayesbabylondreams.com/wp-content/uploads/2011/07/Holodek-300x200.jpg\" width=\"300\" height=\"200\"  alt=\"Issue01\" class=\"img-responsive inline-block\" alt=\"Responsive image\"/></li>
    <li><img src=\"http://1.bp.blogspot.com/-XzH57tdHKhs/T2R6C_tu4fI/AAAAAAAAANM/h6wRn8yvUDU/s1600/358365%255B1%255D.png\" width=\"300\" height=\"200\"  alt=\"Issue02\" class=\"img-responsive inline-block\" alt=\"Responsive image\"/></li>
   </ul>            
</div>

<br><br><br>
</div>
</div>
";
        
        $__internal_a593b6e2ebdf6131bb4ff97b0adb4792740ccc3b4250c88a7d758d157843c73f->leave($__internal_a593b6e2ebdf6131bb4ff97b0adb4792740ccc3b4250c88a7d758d157843c73f_prof);

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
        return array (  94 => 29,  82 => 25,  79 => 24,  75 => 23,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/* <br><br><br>*/
/* */
/* <div width="80%" style="float:left">*/
/* <h2>Last issue</h2>*/
/* */
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
/*     Acceptance rate : x %*/
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
/*     <li><img src="http://o.aolcdn.com/hss/storage/midas/3a46d7cfdf368f98b6ffd7923db67c58/200264155/morpheus.jpg" width="300" height="200"  alt="Issue01" class="img-responsive inline-block" alt="Responsive image"/></li>*/
/*     <li><img src="http://marjoriekayesbabylondreams.com/wp-content/uploads/2011/07/Holodek-300x200.jpg" width="300" height="200"  alt="Issue01" class="img-responsive inline-block" alt="Responsive image"/></li>*/
/*     <li><img src="http://1.bp.blogspot.com/-XzH57tdHKhs/T2R6C_tu4fI/AAAAAAAAANM/h6wRn8yvUDU/s1600/358365%255B1%255D.png" width="300" height="200"  alt="Issue02" class="img-responsive inline-block" alt="Responsive image"/></li>*/
/*    </ul>            */
/* </div>*/
/* */
/* <br><br><br>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
