<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_e0084f9e52c358b901c0334fe15d2ed09f4807084b5d6b2ae85139cdaa8e82e3 extends Twig_Template
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
        $__internal_216307d60383798b2488d5442a6eff7940f15fb9d5e256db68df68c772941b5c = $this->env->getExtension("native_profiler");
        $__internal_216307d60383798b2488d5442a6eff7940f15fb9d5e256db68df68c772941b5c->enter($__internal_216307d60383798b2488d5442a6eff7940f15fb9d5e256db68df68c772941b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_216307d60383798b2488d5442a6eff7940f15fb9d5e256db68df68c772941b5c->leave($__internal_216307d60383798b2488d5442a6eff7940f15fb9d5e256db68df68c772941b5c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c8f5d778f88c619f7fa03abe26af926560cadb6b9edfd23cb0cc88ae35d4586 = $this->env->getExtension("native_profiler");
        $__internal_5c8f5d778f88c619f7fa03abe26af926560cadb6b9edfd23cb0cc88ae35d4586->enter($__internal_5c8f5d778f88c619f7fa03abe26af926560cadb6b9edfd23cb0cc88ae35d4586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c8f5d778f88c619f7fa03abe26af926560cadb6b9edfd23cb0cc88ae35d4586->leave($__internal_5c8f5d778f88c619f7fa03abe26af926560cadb6b9edfd23cb0cc88ae35d4586_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9852c8a6e01e9ab02c3f1fbc916d9e0d0938363d0d654966e704d5eac3c76ad5 = $this->env->getExtension("native_profiler");
        $__internal_9852c8a6e01e9ab02c3f1fbc916d9e0d0938363d0d654966e704d5eac3c76ad5->enter($__internal_9852c8a6e01e9ab02c3f1fbc916d9e0d0938363d0d654966e704d5eac3c76ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "  ";
        
        $__internal_9852c8a6e01e9ab02c3f1fbc916d9e0d0938363d0d654966e704d5eac3c76ad5->leave($__internal_9852c8a6e01e9ab02c3f1fbc916d9e0d0938363d0d654966e704d5eac3c76ad5_prof);

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
