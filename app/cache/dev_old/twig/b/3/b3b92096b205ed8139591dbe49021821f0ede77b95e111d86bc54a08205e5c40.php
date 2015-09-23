<?php

/* IJVRPlatformBundle:Default:home.html.twig */
class __TwigTemplate_b3b92096b205ed8139591dbe49021821f0ede77b95e111d86bc54a08205e5c40 extends Twig_Template
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
        $__internal_c78af0cc0d8365a4c62ab9d546844094600907bf357415fc579d5b38136bd0e1 = $this->env->getExtension("native_profiler");
        $__internal_c78af0cc0d8365a4c62ab9d546844094600907bf357415fc579d5b38136bd0e1->enter($__internal_c78af0cc0d8365a4c62ab9d546844094600907bf357415fc579d5b38136bd0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRPlatformBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c78af0cc0d8365a4c62ab9d546844094600907bf357415fc579d5b38136bd0e1->leave($__internal_c78af0cc0d8365a4c62ab9d546844094600907bf357415fc579d5b38136bd0e1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a27a0bd4d7dada9e51866179a772a6fdb243a53378c2e5e5864d8f242e02d80 = $this->env->getExtension("native_profiler");
        $__internal_9a27a0bd4d7dada9e51866179a772a6fdb243a53378c2e5e5864d8f242e02d80->enter($__internal_9a27a0bd4d7dada9e51866179a772a6fdb243a53378c2e5e5864d8f242e02d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_9a27a0bd4d7dada9e51866179a772a6fdb243a53378c2e5e5864d8f242e02d80->leave($__internal_9a27a0bd4d7dada9e51866179a772a6fdb243a53378c2e5e5864d8f242e02d80_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f65902241f13a542922f28da385b4eca46fbcd789b88ccb885437974dde911f2 = $this->env->getExtension("native_profiler");
        $__internal_f65902241f13a542922f28da385b4eca46fbcd789b88ccb885437974dde911f2->enter($__internal_f65902241f13a542922f28da385b4eca46fbcd789b88ccb885437974dde911f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
Journal Presentation

<br><br><br>

Last issues
<br><br><br>

</div>
";
        
        $__internal_f65902241f13a542922f28da385b4eca46fbcd789b88ccb885437974dde911f2->leave($__internal_f65902241f13a542922f28da385b4eca46fbcd789b88ccb885437974dde911f2_prof);

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
