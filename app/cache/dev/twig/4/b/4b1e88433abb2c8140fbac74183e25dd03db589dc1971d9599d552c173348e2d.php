<?php

/* IJVRPlatformBundle:Default:test.html.twig */
class __TwigTemplate_4b1e88433abb2c8140fbac74183e25dd03db589dc1971d9599d552c173348e2d extends Twig_Template
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
        $__internal_24d472a2633c6fff2de2de30689360dc74144e80a27f3ee2c8cf1e7b0dfd5300 = $this->env->getExtension("native_profiler");
        $__internal_24d472a2633c6fff2de2de30689360dc74144e80a27f3ee2c8cf1e7b0dfd5300->enter($__internal_24d472a2633c6fff2de2de30689360dc74144e80a27f3ee2c8cf1e7b0dfd5300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRPlatformBundle:Default:test.html.twig"));

        // line 1
        echo "<html>
<head>
<title>
Test de Twig
</title>
</head>
<body>

COUCOU
Ceci est un test

<br>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
</body>
</html>
";
        
        $__internal_24d472a2633c6fff2de2de30689360dc74144e80a27f3ee2c8cf1e7b0dfd5300->leave($__internal_24d472a2633c6fff2de2de30689360dc74144e80a27f3ee2c8cf1e7b0dfd5300_prof);

    }

    public function getTemplateName()
    {
        return "IJVRPlatformBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  22 => 1,);
    }
}
