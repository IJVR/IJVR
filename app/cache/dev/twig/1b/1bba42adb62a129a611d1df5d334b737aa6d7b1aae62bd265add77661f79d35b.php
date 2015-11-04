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
        $__internal_4a388a1fb7a6f744f24c3f61b13621714a2c077d77b40ba00576d9a15354bc9b = $this->env->getExtension("native_profiler");
        $__internal_4a388a1fb7a6f744f24c3f61b13621714a2c077d77b40ba00576d9a15354bc9b->enter($__internal_4a388a1fb7a6f744f24c3f61b13621714a2c077d77b40ba00576d9a15354bc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a388a1fb7a6f744f24c3f61b13621714a2c077d77b40ba00576d9a15354bc9b->leave($__internal_4a388a1fb7a6f744f24c3f61b13621714a2c077d77b40ba00576d9a15354bc9b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e842b7ddce0b7eafa193138ff87457f09f3002c565483fd2ec20110cb879df02 = $this->env->getExtension("native_profiler");
        $__internal_e842b7ddce0b7eafa193138ff87457f09f3002c565483fd2ec20110cb879df02->enter($__internal_e842b7ddce0b7eafa193138ff87457f09f3002c565483fd2ec20110cb879df02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e842b7ddce0b7eafa193138ff87457f09f3002c565483fd2ec20110cb879df02->leave($__internal_e842b7ddce0b7eafa193138ff87457f09f3002c565483fd2ec20110cb879df02_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a99f0f78b19c842011f84f58a499a551d2133f25ff3e24b2c91d15fbbee568ed = $this->env->getExtension("native_profiler");
        $__internal_a99f0f78b19c842011f84f58a499a551d2133f25ff3e24b2c91d15fbbee568ed->enter($__internal_a99f0f78b19c842011f84f58a499a551d2133f25ff3e24b2c91d15fbbee568ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "  ";
        
        $__internal_a99f0f78b19c842011f84f58a499a551d2133f25ff3e24b2c91d15fbbee568ed->leave($__internal_a99f0f78b19c842011f84f58a499a551d2133f25ff3e24b2c91d15fbbee568ed_prof);

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
