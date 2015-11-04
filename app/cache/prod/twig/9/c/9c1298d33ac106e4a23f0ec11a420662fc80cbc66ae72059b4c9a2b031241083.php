<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d58a3cc237a936545e99c9a11a82ef91b52d35e68e77dfedbeb3995feb51ee5e extends Twig_Template
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
        $__internal_2a4339501ddd9483b4dbeb37996cf14a3469594bc136fc31d5087d4d389bfead = $this->env->getExtension("native_profiler");
        $__internal_2a4339501ddd9483b4dbeb37996cf14a3469594bc136fc31d5087d4d389bfead->enter($__internal_2a4339501ddd9483b4dbeb37996cf14a3469594bc136fc31d5087d4d389bfead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a4339501ddd9483b4dbeb37996cf14a3469594bc136fc31d5087d4d389bfead->leave($__internal_2a4339501ddd9483b4dbeb37996cf14a3469594bc136fc31d5087d4d389bfead_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b99b8b1759dbd078aaf69ffb5948261e6ef3ea39928f06abde31b1cae308cab3 = $this->env->getExtension("native_profiler");
        $__internal_b99b8b1759dbd078aaf69ffb5948261e6ef3ea39928f06abde31b1cae308cab3->enter($__internal_b99b8b1759dbd078aaf69ffb5948261e6ef3ea39928f06abde31b1cae308cab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b99b8b1759dbd078aaf69ffb5948261e6ef3ea39928f06abde31b1cae308cab3->leave($__internal_b99b8b1759dbd078aaf69ffb5948261e6ef3ea39928f06abde31b1cae308cab3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64e1c35f83d4271f4f27ad6b9aa3ab68f270d7981f591a920d1a51e643c266c0 = $this->env->getExtension("native_profiler");
        $__internal_64e1c35f83d4271f4f27ad6b9aa3ab68f270d7981f591a920d1a51e643c266c0->enter($__internal_64e1c35f83d4271f4f27ad6b9aa3ab68f270d7981f591a920d1a51e643c266c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_64e1c35f83d4271f4f27ad6b9aa3ab68f270d7981f591a920d1a51e643c266c0->leave($__internal_64e1c35f83d4271f4f27ad6b9aa3ab68f270d7981f591a920d1a51e643c266c0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b37f43062c1ee133e67cb2b00cfb2f1cf64fb462830e0df809cbd483f62c857 = $this->env->getExtension("native_profiler");
        $__internal_6b37f43062c1ee133e67cb2b00cfb2f1cf64fb462830e0df809cbd483f62c857->enter($__internal_6b37f43062c1ee133e67cb2b00cfb2f1cf64fb462830e0df809cbd483f62c857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6b37f43062c1ee133e67cb2b00cfb2f1cf64fb462830e0df809cbd483f62c857->leave($__internal_6b37f43062c1ee133e67cb2b00cfb2f1cf64fb462830e0df809cbd483f62c857_prof);

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
