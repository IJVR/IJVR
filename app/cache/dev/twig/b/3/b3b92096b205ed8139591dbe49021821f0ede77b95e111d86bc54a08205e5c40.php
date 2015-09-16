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
        $__internal_64a4a03c780f80292076e24330f5b073d2e9f6cc4b7431dc448c5a5b6070920b = $this->env->getExtension("native_profiler");
        $__internal_64a4a03c780f80292076e24330f5b073d2e9f6cc4b7431dc448c5a5b6070920b->enter($__internal_64a4a03c780f80292076e24330f5b073d2e9f6cc4b7431dc448c5a5b6070920b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRPlatformBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64a4a03c780f80292076e24330f5b073d2e9f6cc4b7431dc448c5a5b6070920b->leave($__internal_64a4a03c780f80292076e24330f5b073d2e9f6cc4b7431dc448c5a5b6070920b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44da033f9f5afcb030ce1ecc2704668d78e6199bef3973fd64fc1a4ad480f523 = $this->env->getExtension("native_profiler");
        $__internal_44da033f9f5afcb030ce1ecc2704668d78e6199bef3973fd64fc1a4ad480f523->enter($__internal_44da033f9f5afcb030ce1ecc2704668d78e6199bef3973fd64fc1a4ad480f523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_44da033f9f5afcb030ce1ecc2704668d78e6199bef3973fd64fc1a4ad480f523->leave($__internal_44da033f9f5afcb030ce1ecc2704668d78e6199bef3973fd64fc1a4ad480f523_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab3671922fcef8f389c2b4734c5888a553d1f118af394d5371939ca4f89f8724 = $this->env->getExtension("native_profiler");
        $__internal_ab3671922fcef8f389c2b4734c5888a553d1f118af394d5371939ca4f89f8724->enter($__internal_ab3671922fcef8f389c2b4734c5888a553d1f118af394d5371939ca4f89f8724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
Journal Presentation

<br><br><br>

Last issues
<br><br><br>

</div>
";
        
        $__internal_ab3671922fcef8f389c2b4734c5888a553d1f118af394d5371939ca4f89f8724->leave($__internal_ab3671922fcef8f389c2b4734c5888a553d1f118af394d5371939ca4f89f8724_prof);

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
