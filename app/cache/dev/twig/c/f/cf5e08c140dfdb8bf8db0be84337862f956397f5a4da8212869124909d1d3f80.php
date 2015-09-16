<?php

/* IJVRPlatformBundle:Default:index.html.twig */
class __TwigTemplate_cf5e08c140dfdb8bf8db0be84337862f956397f5a4da8212869124909d1d3f80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37e38bc77d876418ac1a0b52aaa8a91de001a8399c79eb690b5702fd01f4c8d5 = $this->env->getExtension("native_profiler");
        $__internal_37e38bc77d876418ac1a0b52aaa8a91de001a8399c79eb690b5702fd01f4c8d5->enter($__internal_37e38bc77d876418ac1a0b52aaa8a91de001a8399c79eb690b5702fd01f4c8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRPlatformBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "!
";
        
        $__internal_37e38bc77d876418ac1a0b52aaa8a91de001a8399c79eb690b5702fd01f4c8d5->leave($__internal_37e38bc77d876418ac1a0b52aaa8a91de001a8399c79eb690b5702fd01f4c8d5_prof);

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
        return array (  22 => 1,);
    }
}
