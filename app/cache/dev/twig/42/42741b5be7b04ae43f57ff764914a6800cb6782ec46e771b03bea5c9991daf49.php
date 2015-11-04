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
        $__internal_5b729b6b894c853057487548680d3933f1c6f448d1f2ce2374071a9f5e48e34a = $this->env->getExtension("native_profiler");
        $__internal_5b729b6b894c853057487548680d3933f1c6f448d1f2ce2374071a9f5e48e34a->enter($__internal_5b729b6b894c853057487548680d3933f1c6f448d1f2ce2374071a9f5e48e34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b729b6b894c853057487548680d3933f1c6f448d1f2ce2374071a9f5e48e34a->leave($__internal_5b729b6b894c853057487548680d3933f1c6f448d1f2ce2374071a9f5e48e34a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aef88a1110dacf18f1095d5e7b7a4489a92a25913f728b72ab41d4b766150a82 = $this->env->getExtension("native_profiler");
        $__internal_aef88a1110dacf18f1095d5e7b7a4489a92a25913f728b72ab41d4b766150a82->enter($__internal_aef88a1110dacf18f1095d5e7b7a4489a92a25913f728b72ab41d4b766150a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aef88a1110dacf18f1095d5e7b7a4489a92a25913f728b72ab41d4b766150a82->leave($__internal_aef88a1110dacf18f1095d5e7b7a4489a92a25913f728b72ab41d4b766150a82_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8d7e950f026e690953c7699f7ae72cf625c46d8821f4850c6284806a6966d69 = $this->env->getExtension("native_profiler");
        $__internal_a8d7e950f026e690953c7699f7ae72cf625c46d8821f4850c6284806a6966d69->enter($__internal_a8d7e950f026e690953c7699f7ae72cf625c46d8821f4850c6284806a6966d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a8d7e950f026e690953c7699f7ae72cf625c46d8821f4850c6284806a6966d69->leave($__internal_a8d7e950f026e690953c7699f7ae72cf625c46d8821f4850c6284806a6966d69_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_675ef7f712f49149abcce92c15c8e1651f4a3fd6ae023fe658a2964aec93b207 = $this->env->getExtension("native_profiler");
        $__internal_675ef7f712f49149abcce92c15c8e1651f4a3fd6ae023fe658a2964aec93b207->enter($__internal_675ef7f712f49149abcce92c15c8e1651f4a3fd6ae023fe658a2964aec93b207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_675ef7f712f49149abcce92c15c8e1651f4a3fd6ae023fe658a2964aec93b207->leave($__internal_675ef7f712f49149abcce92c15c8e1651f4a3fd6ae023fe658a2964aec93b207_prof);

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
