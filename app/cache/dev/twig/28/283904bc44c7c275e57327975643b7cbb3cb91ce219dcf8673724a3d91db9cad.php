<?php

/* IJVRSearchBundle:Default:index.html.twig */
class __TwigTemplate_4f773efa5a571a7d147f2d7956b6f7e2de3071b42eb10a562b1554def58a80d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IJVRSearchBundle:Default:index.html.twig", 1);
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
        $__internal_4489ff2215dba7efc5b5494ac2bd9095a1843bc3f834fd0db3476494bae72781 = $this->env->getExtension("native_profiler");
        $__internal_4489ff2215dba7efc5b5494ac2bd9095a1843bc3f834fd0db3476494bae72781->enter($__internal_4489ff2215dba7efc5b5494ac2bd9095a1843bc3f834fd0db3476494bae72781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRSearchBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4489ff2215dba7efc5b5494ac2bd9095a1843bc3f834fd0db3476494bae72781->leave($__internal_4489ff2215dba7efc5b5494ac2bd9095a1843bc3f834fd0db3476494bae72781_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_38e6f8c3c8bbc799343cb35f5af01c880ab722df6908cd3cc00ca75680aa30fc = $this->env->getExtension("native_profiler");
        $__internal_38e6f8c3c8bbc799343cb35f5af01c880ab722df6908cd3cc00ca75680aa30fc->enter($__internal_38e6f8c3c8bbc799343cb35f5af01c880ab722df6908cd3cc00ca75680aa30fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_38e6f8c3c8bbc799343cb35f5af01c880ab722df6908cd3cc00ca75680aa30fc->leave($__internal_38e6f8c3c8bbc799343cb35f5af01c880ab722df6908cd3cc00ca75680aa30fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_012aab69621f17c8c59ac6f1be768e6e04292ab32b6bd7c00fcd44abac4a5fe2 = $this->env->getExtension("native_profiler");
        $__internal_012aab69621f17c8c59ac6f1be768e6e04292ab32b6bd7c00fcd44abac4a5fe2->enter($__internal_012aab69621f17c8c59ac6f1be768e6e04292ab32b6bd7c00fcd44abac4a5fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<br/>
<br/>

<form action=\"criteria_search\" method=\"POST\" >
 <label> Issue Test </label>
 <input type=\"text\" name=\"criteria\" />
 <input type=\"text\" name=\"value\" />
 <input type=\"submit\" />
</form>

</br>
</br>


";
        
        $__internal_012aab69621f17c8c59ac6f1be768e6e04292ab32b6bd7c00fcd44abac4a5fe2->leave($__internal_012aab69621f17c8c59ac6f1be768e6e04292ab32b6bd7c00fcd44abac4a5fe2_prof);

    }

    public function getTemplateName()
    {
        return "IJVRSearchBundle:Default:index.html.twig";
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
/* <br/>*/
/* <br/>*/
/* */
/* <form action="criteria_search" method="POST" >*/
/*  <label> Issue Test </label>*/
/*  <input type="text" name="criteria" />*/
/*  <input type="text" name="value" />*/
/*  <input type="submit" />*/
/* </form>*/
/* */
/* </br>*/
/* </br>*/
/* */
/* */
/* {% endblock %}*/
/* */
