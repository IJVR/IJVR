<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_419779f63e4035c4a2029c4319ce8bef3a93d01c8a4fa7c68a624a3ecc72dbe1 extends Twig_Template
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
        $__internal_68bb58f2c8d85c8a1fd320490a2953fc2154971ba272bdbd44f73b569d32a2a5 = $this->env->getExtension("native_profiler");
        $__internal_68bb58f2c8d85c8a1fd320490a2953fc2154971ba272bdbd44f73b569d32a2a5->enter($__internal_68bb58f2c8d85c8a1fd320490a2953fc2154971ba272bdbd44f73b569d32a2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_68bb58f2c8d85c8a1fd320490a2953fc2154971ba272bdbd44f73b569d32a2a5->leave($__internal_68bb58f2c8d85c8a1fd320490a2953fc2154971ba272bdbd44f73b569d32a2a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
