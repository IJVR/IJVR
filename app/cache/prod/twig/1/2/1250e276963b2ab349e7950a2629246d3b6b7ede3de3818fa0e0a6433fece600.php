<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ad036194a2e11adc943019f9461107f8aa8e73d8676aecba3a0c0ff369dbc484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c18e5d01b6856c3e62ca11c4dc09030c8cd6af604d790183fed8a38b9efabe69 = $this->env->getExtension("native_profiler");
        $__internal_c18e5d01b6856c3e62ca11c4dc09030c8cd6af604d790183fed8a38b9efabe69->enter($__internal_c18e5d01b6856c3e62ca11c4dc09030c8cd6af604d790183fed8a38b9efabe69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c18e5d01b6856c3e62ca11c4dc09030c8cd6af604d790183fed8a38b9efabe69->leave($__internal_c18e5d01b6856c3e62ca11c4dc09030c8cd6af604d790183fed8a38b9efabe69_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_600cf459e69ef69d5eef82fb66073b9630103b45b7a24a324afcd5487216bd05 = $this->env->getExtension("native_profiler");
        $__internal_600cf459e69ef69d5eef82fb66073b9630103b45b7a24a324afcd5487216bd05->enter($__internal_600cf459e69ef69d5eef82fb66073b9630103b45b7a24a324afcd5487216bd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  ";
        // line 7
        echo "
  ";
        // line 9
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 11
        echo "
";
        
        $__internal_600cf459e69ef69d5eef82fb66073b9630103b45b7a24a324afcd5487216bd05->leave($__internal_600cf459e69ef69d5eef82fb66073b9630103b45b7a24a324afcd5487216bd05_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b48109c4527c9ba0f2d314432bf441fd54352866e96201f7d7d20255d0907455 = $this->env->getExtension("native_profiler");
        $__internal_b48109c4527c9ba0f2d314432bf441fd54352866e96201f7d7d20255d0907455->enter($__internal_b48109c4527c9ba0f2d314432bf441fd54352866e96201f7d7d20255d0907455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "  ";
        
        $__internal_b48109c4527c9ba0f2d314432bf441fd54352866e96201f7d7d20255d0907455->leave($__internal_b48109c4527c9ba0f2d314432bf441fd54352866e96201f7d7d20255d0907455_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  58 => 9,  50 => 11,  47 => 9,  44 => 7,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/* */
/*   {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/* */
/*   {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
