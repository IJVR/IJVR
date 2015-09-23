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
        $__internal_b3a07e59e1e3694242c8c37b720853b22be52ac1427a0542296d070c23c4d3d6 = $this->env->getExtension("native_profiler");
        $__internal_b3a07e59e1e3694242c8c37b720853b22be52ac1427a0542296d070c23c4d3d6->enter($__internal_b3a07e59e1e3694242c8c37b720853b22be52ac1427a0542296d070c23c4d3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRPlatformBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3a07e59e1e3694242c8c37b720853b22be52ac1427a0542296d070c23c4d3d6->leave($__internal_b3a07e59e1e3694242c8c37b720853b22be52ac1427a0542296d070c23c4d3d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb50e09a486bc7832e9b24b4ee4d33efbadaa89ddbb79b946d2a9436df17f98d = $this->env->getExtension("native_profiler");
        $__internal_fb50e09a486bc7832e9b24b4ee4d33efbadaa89ddbb79b946d2a9436df17f98d->enter($__internal_fb50e09a486bc7832e9b24b4ee4d33efbadaa89ddbb79b946d2a9436df17f98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_fb50e09a486bc7832e9b24b4ee4d33efbadaa89ddbb79b946d2a9436df17f98d->leave($__internal_fb50e09a486bc7832e9b24b4ee4d33efbadaa89ddbb79b946d2a9436df17f98d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_483c5919cbbff9b1d2e90d5b33097e8e41fb345c1dfe926d55f97d6186d6202e = $this->env->getExtension("native_profiler");
        $__internal_483c5919cbbff9b1d2e90d5b33097e8e41fb345c1dfe926d55f97d6186d6202e->enter($__internal_483c5919cbbff9b1d2e90d5b33097e8e41fb345c1dfe926d55f97d6186d6202e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
Journal Presentation

<br><br><br>

Last issues
<br><br><br>

</div>
";
        
        $__internal_483c5919cbbff9b1d2e90d5b33097e8e41fb345c1dfe926d55f97d6186d6202e->leave($__internal_483c5919cbbff9b1d2e90d5b33097e8e41fb345c1dfe926d55f97d6186d6202e_prof);

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
