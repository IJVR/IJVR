<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3cd5f512ddefe133ba645cf86c815eea7735a21f7eb2c8a2a781d2ecaaa1d958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdc1d3e67ee57a2aacf9a6d2cebf7f7ed5a87ee40a0616d012a00b0ba7c4586f = $this->env->getExtension("native_profiler");
        $__internal_bdc1d3e67ee57a2aacf9a6d2cebf7f7ed5a87ee40a0616d012a00b0ba7c4586f->enter($__internal_bdc1d3e67ee57a2aacf9a6d2cebf7f7ed5a87ee40a0616d012a00b0ba7c4586f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdc1d3e67ee57a2aacf9a6d2cebf7f7ed5a87ee40a0616d012a00b0ba7c4586f->leave($__internal_bdc1d3e67ee57a2aacf9a6d2cebf7f7ed5a87ee40a0616d012a00b0ba7c4586f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0374ffd90a035f6cd2bed538e44fdd1af90f58c57c9d3778e0f8c641902eb93 = $this->env->getExtension("native_profiler");
        $__internal_d0374ffd90a035f6cd2bed538e44fdd1af90f58c57c9d3778e0f8c641902eb93->enter($__internal_d0374ffd90a035f6cd2bed538e44fdd1af90f58c57c9d3778e0f8c641902eb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d0374ffd90a035f6cd2bed538e44fdd1af90f58c57c9d3778e0f8c641902eb93->leave($__internal_d0374ffd90a035f6cd2bed538e44fdd1af90f58c57c9d3778e0f8c641902eb93_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50c361b443b5f8cb1b96ac76e42d06c6dc1ccee365d69a3f8dbb278b8dc83fd9 = $this->env->getExtension("native_profiler");
        $__internal_50c361b443b5f8cb1b96ac76e42d06c6dc1ccee365d69a3f8dbb278b8dc83fd9->enter($__internal_50c361b443b5f8cb1b96ac76e42d06c6dc1ccee365d69a3f8dbb278b8dc83fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50c361b443b5f8cb1b96ac76e42d06c6dc1ccee365d69a3f8dbb278b8dc83fd9->leave($__internal_50c361b443b5f8cb1b96ac76e42d06c6dc1ccee365d69a3f8dbb278b8dc83fd9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9e36335ffb52274bb8c6c8ef5aebc9b8beec5f8387d97a820b2bcb445e95348 = $this->env->getExtension("native_profiler");
        $__internal_f9e36335ffb52274bb8c6c8ef5aebc9b8beec5f8387d97a820b2bcb445e95348->enter($__internal_f9e36335ffb52274bb8c6c8ef5aebc9b8beec5f8387d97a820b2bcb445e95348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f9e36335ffb52274bb8c6c8ef5aebc9b8beec5f8387d97a820b2bcb445e95348->leave($__internal_f9e36335ffb52274bb8c6c8ef5aebc9b8beec5f8387d97a820b2bcb445e95348_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
