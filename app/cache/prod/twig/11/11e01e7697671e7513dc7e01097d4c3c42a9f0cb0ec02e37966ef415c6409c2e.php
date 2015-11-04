<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9fb7f069bf2b845e4c7ab9ce81cf19076a8e3abc3aa9c99d8effbb5de1399c0a extends Twig_Template
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
        $__internal_653aabf6dc54fbef610c0029d03f54fa5236c4ff862b7471c7db5a3dfac83841 = $this->env->getExtension("native_profiler");
        $__internal_653aabf6dc54fbef610c0029d03f54fa5236c4ff862b7471c7db5a3dfac83841->enter($__internal_653aabf6dc54fbef610c0029d03f54fa5236c4ff862b7471c7db5a3dfac83841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_653aabf6dc54fbef610c0029d03f54fa5236c4ff862b7471c7db5a3dfac83841->leave($__internal_653aabf6dc54fbef610c0029d03f54fa5236c4ff862b7471c7db5a3dfac83841_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1d31d2899344b610f962a3c6c52da4be33e269b5c4f40ceb7f6a58ea3d1ec06 = $this->env->getExtension("native_profiler");
        $__internal_e1d31d2899344b610f962a3c6c52da4be33e269b5c4f40ceb7f6a58ea3d1ec06->enter($__internal_e1d31d2899344b610f962a3c6c52da4be33e269b5c4f40ceb7f6a58ea3d1ec06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e1d31d2899344b610f962a3c6c52da4be33e269b5c4f40ceb7f6a58ea3d1ec06->leave($__internal_e1d31d2899344b610f962a3c6c52da4be33e269b5c4f40ceb7f6a58ea3d1ec06_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f30e4508a48c06acbf6d1de1f78d65bf0c1fb38f38d85c7bc86802776288382 = $this->env->getExtension("native_profiler");
        $__internal_2f30e4508a48c06acbf6d1de1f78d65bf0c1fb38f38d85c7bc86802776288382->enter($__internal_2f30e4508a48c06acbf6d1de1f78d65bf0c1fb38f38d85c7bc86802776288382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f30e4508a48c06acbf6d1de1f78d65bf0c1fb38f38d85c7bc86802776288382->leave($__internal_2f30e4508a48c06acbf6d1de1f78d65bf0c1fb38f38d85c7bc86802776288382_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b406f075be1fb1752e48b7ee39c39b030f7bfe2391a2b206aa6c89f12c03c263 = $this->env->getExtension("native_profiler");
        $__internal_b406f075be1fb1752e48b7ee39c39b030f7bfe2391a2b206aa6c89f12c03c263->enter($__internal_b406f075be1fb1752e48b7ee39c39b030f7bfe2391a2b206aa6c89f12c03c263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b406f075be1fb1752e48b7ee39c39b030f7bfe2391a2b206aa6c89f12c03c263->leave($__internal_b406f075be1fb1752e48b7ee39c39b030f7bfe2391a2b206aa6c89f12c03c263_prof);

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
