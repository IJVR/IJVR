<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_95c8be8afdcad56f849df151ad40a0e6140e26f2f95b3faf08b4d2db452b25c1 extends Twig_Template
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
        $__internal_760023d8bebb591c369cca8665ca7a86d1dac89dbaee9ebe020ffa165a627571 = $this->env->getExtension("native_profiler");
        $__internal_760023d8bebb591c369cca8665ca7a86d1dac89dbaee9ebe020ffa165a627571->enter($__internal_760023d8bebb591c369cca8665ca7a86d1dac89dbaee9ebe020ffa165a627571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_760023d8bebb591c369cca8665ca7a86d1dac89dbaee9ebe020ffa165a627571->leave($__internal_760023d8bebb591c369cca8665ca7a86d1dac89dbaee9ebe020ffa165a627571_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e222c67ad69ce921bfc6a741a11619bebc923304a10f943a1b84d814dc9bfd3 = $this->env->getExtension("native_profiler");
        $__internal_2e222c67ad69ce921bfc6a741a11619bebc923304a10f943a1b84d814dc9bfd3->enter($__internal_2e222c67ad69ce921bfc6a741a11619bebc923304a10f943a1b84d814dc9bfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2e222c67ad69ce921bfc6a741a11619bebc923304a10f943a1b84d814dc9bfd3->leave($__internal_2e222c67ad69ce921bfc6a741a11619bebc923304a10f943a1b84d814dc9bfd3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4b06e740ea5224866ff0b94d2132257e0091762f9c263df8bff986935763007 = $this->env->getExtension("native_profiler");
        $__internal_b4b06e740ea5224866ff0b94d2132257e0091762f9c263df8bff986935763007->enter($__internal_b4b06e740ea5224866ff0b94d2132257e0091762f9c263df8bff986935763007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b4b06e740ea5224866ff0b94d2132257e0091762f9c263df8bff986935763007->leave($__internal_b4b06e740ea5224866ff0b94d2132257e0091762f9c263df8bff986935763007_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e705f6bb2daa5bbdac3929d1cea7225cccc8aedcef0ed86380bfd9782b32b395 = $this->env->getExtension("native_profiler");
        $__internal_e705f6bb2daa5bbdac3929d1cea7225cccc8aedcef0ed86380bfd9782b32b395->enter($__internal_e705f6bb2daa5bbdac3929d1cea7225cccc8aedcef0ed86380bfd9782b32b395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e705f6bb2daa5bbdac3929d1cea7225cccc8aedcef0ed86380bfd9782b32b395->leave($__internal_e705f6bb2daa5bbdac3929d1cea7225cccc8aedcef0ed86380bfd9782b32b395_prof);

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
