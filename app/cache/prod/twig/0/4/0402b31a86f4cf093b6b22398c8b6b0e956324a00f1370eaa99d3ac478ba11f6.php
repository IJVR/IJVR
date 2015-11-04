<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7a44fba8c8fdecfc72903b1cc059a62f4cddc33ea76fdbd66c19aaec2d3723d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a9145cf7571d6ef3c0843a242ec51b26f97ee04c40f4483f651257ca01099a3 = $this->env->getExtension("native_profiler");
        $__internal_6a9145cf7571d6ef3c0843a242ec51b26f97ee04c40f4483f651257ca01099a3->enter($__internal_6a9145cf7571d6ef3c0843a242ec51b26f97ee04c40f4483f651257ca01099a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a9145cf7571d6ef3c0843a242ec51b26f97ee04c40f4483f651257ca01099a3->leave($__internal_6a9145cf7571d6ef3c0843a242ec51b26f97ee04c40f4483f651257ca01099a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61653be27b7dee146c8b1d96ea6e3aedec87144a82c9a086d17a2cf898c279e1 = $this->env->getExtension("native_profiler");
        $__internal_61653be27b7dee146c8b1d96ea6e3aedec87144a82c9a086d17a2cf898c279e1->enter($__internal_61653be27b7dee146c8b1d96ea6e3aedec87144a82c9a086d17a2cf898c279e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_61653be27b7dee146c8b1d96ea6e3aedec87144a82c9a086d17a2cf898c279e1->leave($__internal_61653be27b7dee146c8b1d96ea6e3aedec87144a82c9a086d17a2cf898c279e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
