<?php

/* IJVRPlatformBundle:Default:index.html.twig */
class __TwigTemplate_cf5e08c140dfdb8bf8db0be84337862f956397f5a4da8212869124909d1d3f80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IJVRPlatformBundle:Default:index.html.twig", 1);
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
        $__internal_38c4bfa2f10d25a6c5e49fd3f8c4baa2d4de283e7215d46003fb201c8acda7c2 = $this->env->getExtension("native_profiler");
        $__internal_38c4bfa2f10d25a6c5e49fd3f8c4baa2d4de283e7215d46003fb201c8acda7c2->enter($__internal_38c4bfa2f10d25a6c5e49fd3f8c4baa2d4de283e7215d46003fb201c8acda7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRPlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38c4bfa2f10d25a6c5e49fd3f8c4baa2d4de283e7215d46003fb201c8acda7c2->leave($__internal_38c4bfa2f10d25a6c5e49fd3f8c4baa2d4de283e7215d46003fb201c8acda7c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_db1511d63a81ee67019c989dad02aa47909a6a7941ea838bb5467b307d1f1bf2 = $this->env->getExtension("native_profiler");
        $__internal_db1511d63a81ee67019c989dad02aa47909a6a7941ea838bb5467b307d1f1bf2->enter($__internal_db1511d63a81ee67019c989dad02aa47909a6a7941ea838bb5467b307d1f1bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_db1511d63a81ee67019c989dad02aa47909a6a7941ea838bb5467b307d1f1bf2->leave($__internal_db1511d63a81ee67019c989dad02aa47909a6a7941ea838bb5467b307d1f1bf2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db078b10b5f712e7ee080f5e686ea72717ca6e4ba67143cad1352ec6496d4724 = $this->env->getExtension("native_profiler");
        $__internal_db078b10b5f712e7ee080f5e686ea72717ca6e4ba67143cad1352ec6496d4724->enter($__internal_db078b10b5f712e7ee080f5e686ea72717ca6e4ba67143cad1352ec6496d4724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        
        $__internal_db078b10b5f712e7ee080f5e686ea72717ca6e4ba67143cad1352ec6496d4724->leave($__internal_db078b10b5f712e7ee080f5e686ea72717ca6e4ba67143cad1352ec6496d4724_prof);

    }

    public function getTemplateName()
    {
        return "IJVRPlatformBundle:Default:index.html.twig";
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
