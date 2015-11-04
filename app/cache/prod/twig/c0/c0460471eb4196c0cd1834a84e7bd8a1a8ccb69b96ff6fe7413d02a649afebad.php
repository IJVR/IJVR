<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_c1a0a60f5e7ae020bc2ff3e9a1d4591f933e5a65a5471147344f85f411d661f5 extends Twig_Template
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
        $__internal_8028fae1a0218cf2b427b20e49254f5a9d7fd644850ba48ae2e6e492c4c79bf7 = $this->env->getExtension("native_profiler");
        $__internal_8028fae1a0218cf2b427b20e49254f5a9d7fd644850ba48ae2e6e492c4c79bf7->enter($__internal_8028fae1a0218cf2b427b20e49254f5a9d7fd644850ba48ae2e6e492c4c79bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_8028fae1a0218cf2b427b20e49254f5a9d7fd644850ba48ae2e6e492c4c79bf7->leave($__internal_8028fae1a0218cf2b427b20e49254f5a9d7fd644850ba48ae2e6e492c4c79bf7_prof);

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
