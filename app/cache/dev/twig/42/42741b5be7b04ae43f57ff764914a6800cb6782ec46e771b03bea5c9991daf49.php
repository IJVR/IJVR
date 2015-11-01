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
        $__internal_9e6ae9ccb89f04308270d586c7a2533a022ed816daa8f1f894a1a472e9740240 = $this->env->getExtension("native_profiler");
        $__internal_9e6ae9ccb89f04308270d586c7a2533a022ed816daa8f1f894a1a472e9740240->enter($__internal_9e6ae9ccb89f04308270d586c7a2533a022ed816daa8f1f894a1a472e9740240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e6ae9ccb89f04308270d586c7a2533a022ed816daa8f1f894a1a472e9740240->leave($__internal_9e6ae9ccb89f04308270d586c7a2533a022ed816daa8f1f894a1a472e9740240_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ea321386784e2cd9b571bd0c63e72866edc803513572f5af742aca6aa53a65e = $this->env->getExtension("native_profiler");
        $__internal_9ea321386784e2cd9b571bd0c63e72866edc803513572f5af742aca6aa53a65e->enter($__internal_9ea321386784e2cd9b571bd0c63e72866edc803513572f5af742aca6aa53a65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9ea321386784e2cd9b571bd0c63e72866edc803513572f5af742aca6aa53a65e->leave($__internal_9ea321386784e2cd9b571bd0c63e72866edc803513572f5af742aca6aa53a65e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b03e79fc17348aa72d2682301297aa542aa000d2b54598792c178e719167e37e = $this->env->getExtension("native_profiler");
        $__internal_b03e79fc17348aa72d2682301297aa542aa000d2b54598792c178e719167e37e->enter($__internal_b03e79fc17348aa72d2682301297aa542aa000d2b54598792c178e719167e37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b03e79fc17348aa72d2682301297aa542aa000d2b54598792c178e719167e37e->leave($__internal_b03e79fc17348aa72d2682301297aa542aa000d2b54598792c178e719167e37e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eef1218fdc3b7d58bfcbddc02a80f79bd988d834db954f024fe6cceb4d4aa46e = $this->env->getExtension("native_profiler");
        $__internal_eef1218fdc3b7d58bfcbddc02a80f79bd988d834db954f024fe6cceb4d4aa46e->enter($__internal_eef1218fdc3b7d58bfcbddc02a80f79bd988d834db954f024fe6cceb4d4aa46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_eef1218fdc3b7d58bfcbddc02a80f79bd988d834db954f024fe6cceb4d4aa46e->leave($__internal_eef1218fdc3b7d58bfcbddc02a80f79bd988d834db954f024fe6cceb4d4aa46e_prof);

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
