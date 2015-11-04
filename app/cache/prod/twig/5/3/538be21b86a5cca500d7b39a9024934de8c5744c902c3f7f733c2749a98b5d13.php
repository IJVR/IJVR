<?php

/* IJVRPlatformBundle:Default:home.html.twig */
class __TwigTemplate_1977918f6c70a5060c5282dfc1b09c68ca049232006ea37073c21d84d5daddd4 extends Twig_Template
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
        $__internal_05710fd57478fa59c60f15a9cd0c6cd670276ac651692d9f9f4d01155227d98d = $this->env->getExtension("native_profiler");
        $__internal_05710fd57478fa59c60f15a9cd0c6cd670276ac651692d9f9f4d01155227d98d->enter($__internal_05710fd57478fa59c60f15a9cd0c6cd670276ac651692d9f9f4d01155227d98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRPlatformBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05710fd57478fa59c60f15a9cd0c6cd670276ac651692d9f9f4d01155227d98d->leave($__internal_05710fd57478fa59c60f15a9cd0c6cd670276ac651692d9f9f4d01155227d98d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04e96037c36da1e8a89e1654635023206c98361e0c6c21d806c225ec67c06652 = $this->env->getExtension("native_profiler");
        $__internal_04e96037c36da1e8a89e1654635023206c98361e0c6c21d806c225ec67c06652->enter($__internal_04e96037c36da1e8a89e1654635023206c98361e0c6c21d806c225ec67c06652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_04e96037c36da1e8a89e1654635023206c98361e0c6c21d806c225ec67c06652->leave($__internal_04e96037c36da1e8a89e1654635023206c98361e0c6c21d806c225ec67c06652_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d5c97f2325bab069f4cae1fb459a1fac852ca2633f04bc0cfe711945e35eb28 = $this->env->getExtension("native_profiler");
        $__internal_4d5c97f2325bab069f4cae1fb459a1fac852ca2633f04bc0cfe711945e35eb28->enter($__internal_4d5c97f2325bab069f4cae1fb459a1fac852ca2633f04bc0cfe711945e35eb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/home.css.twig"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<div class=\"container\">
<h1>Journal Presentation</h1>
<br>
<h2>Welcome to the International Journal of Virtual Reality (IJVR)</h2>
<br>
The IJVR is a professional journal dedicated to the promotion and publication of new research and technology in the realm of Virtual Reality. The information regarding this new and constantly emerging technology is of interest to computer media professionals worldwide as well as others interested in the expanding potential of virtual reality. The journal has been published since 1995 when virtual reality was still in its infancy. This website provides free access to current and archived abstracts and full access to all articles for subscribers.
<br><br><br>

<h2>Last issues</h2>
<div class=\"row\">
<div id=\"small-img\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 center\">
  <ul>
    <li><img src=\"http://o.aolcdn.com/hss/storage/midas/3a46d7cfdf368f98b6ffd7923db67c58/200264155/morpheus.jpg\" width=\"300\" height=\"200\"  alt=\"Issue01\" class=\"img-responsive inline-block\" alt=\"Responsive image\"/></li>
    <li><img src=\"http://marjoriekayesbabylondreams.com/wp-content/uploads/2011/07/Holodek-300x200.jpg\" width=\"300\" height=\"200\"  alt=\"Issue01\" class=\"img-responsive inline-block\" alt=\"Responsive image\"/></li>
    <li><img src=\"http://bloximages.chicago2.vip.townnews.com/theeagle.com/content/tncms/assets/v3/editorial/7/62/7624d849-7c8e-5526-88a7-872273364796/55221b3ab6e37.image.jpg?resize=300%2C200\" width=\"300\" height=\"200\"  alt=\"Issue02\" class=\"img-responsive inline-block\" alt=\"Responsive image\"/></li>
   </ul>            
</div>

<br><br><br>
</div>
</div>
";
        
        $__internal_4d5c97f2325bab069f4cae1fb459a1fac852ca2633f04bc0cfe711945e35eb28->leave($__internal_4d5c97f2325bab069f4cae1fb459a1fac852ca2633f04bc0cfe711945e35eb28_prof);

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
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* <link href="{{ asset('css/home.css.twig') }}" rel="stylesheet" />*/
/* <div class="container">*/
/* <h1>Journal Presentation</h1>*/
/* <br>*/
/* <h2>Welcome to the International Journal of Virtual Reality (IJVR)</h2>*/
/* <br>*/
/* The IJVR is a professional journal dedicated to the promotion and publication of new research and technology in the realm of Virtual Reality. The information regarding this new and constantly emerging technology is of interest to computer media professionals worldwide as well as others interested in the expanding potential of virtual reality. The journal has been published since 1995 when virtual reality was still in its infancy. This website provides free access to current and archived abstracts and full access to all articles for subscribers.*/
/* <br><br><br>*/
/* */
/* <h2>Last issues</h2>*/
/* <div class="row">*/
/* <div id="small-img" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center">*/
/*   <ul>*/
/*     <li><img src="http://o.aolcdn.com/hss/storage/midas/3a46d7cfdf368f98b6ffd7923db67c58/200264155/morpheus.jpg" width="300" height="200"  alt="Issue01" class="img-responsive inline-block" alt="Responsive image"/></li>*/
/*     <li><img src="http://marjoriekayesbabylondreams.com/wp-content/uploads/2011/07/Holodek-300x200.jpg" width="300" height="200"  alt="Issue01" class="img-responsive inline-block" alt="Responsive image"/></li>*/
/*     <li><img src="http://bloximages.chicago2.vip.townnews.com/theeagle.com/content/tncms/assets/v3/editorial/7/62/7624d849-7c8e-5526-88a7-872273364796/55221b3ab6e37.image.jpg?resize=300%2C200" width="300" height="200"  alt="Issue02" class="img-responsive inline-block" alt="Responsive image"/></li>*/
/*    </ul>            */
/* </div>*/
/* */
/* <br><br><br>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
