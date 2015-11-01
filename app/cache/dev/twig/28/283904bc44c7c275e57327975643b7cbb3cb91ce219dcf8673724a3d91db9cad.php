<?php

/* IJVRSearchBundle:Default:index.html.twig */
class __TwigTemplate_4f773efa5a571a7d147f2d7956b6f7e2de3071b42eb10a562b1554def58a80d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IJVRSearchBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4244f6d468a80e3e113ce343ac63ba4949de8ebe4d261ca2bb57459a3511df51 = $this->env->getExtension("native_profiler");
        $__internal_4244f6d468a80e3e113ce343ac63ba4949de8ebe4d261ca2bb57459a3511df51->enter($__internal_4244f6d468a80e3e113ce343ac63ba4949de8ebe4d261ca2bb57459a3511df51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRSearchBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4244f6d468a80e3e113ce343ac63ba4949de8ebe4d261ca2bb57459a3511df51->leave($__internal_4244f6d468a80e3e113ce343ac63ba4949de8ebe4d261ca2bb57459a3511df51_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8cf45128f3bb43d0b5ccc3ab41c3cc039e7d60e172876b63df83307890148dd = $this->env->getExtension("native_profiler");
        $__internal_a8cf45128f3bb43d0b5ccc3ab41c3cc039e7d60e172876b63df83307890148dd->enter($__internal_a8cf45128f3bb43d0b5ccc3ab41c3cc039e7d60e172876b63df83307890148dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_a8cf45128f3bb43d0b5ccc3ab41c3cc039e7d60e172876b63df83307890148dd->leave($__internal_a8cf45128f3bb43d0b5ccc3ab41c3cc039e7d60e172876b63df83307890148dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b9bfc27eca4deceb66a18e4671a54fb5cad22ebd144a85a3f14498ee4dbd55c = $this->env->getExtension("native_profiler");
        $__internal_4b9bfc27eca4deceb66a18e4671a54fb5cad22ebd144a85a3f14498ee4dbd55c->enter($__internal_4b9bfc27eca4deceb66a18e4671a54fb5cad22ebd144a85a3f14498ee4dbd55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<br/>
<br/>

<form action=\"criteria_search\" method=\"POST\" >
 <label> Issue Test </label>
 <input type=\"text\" name=\"criteria\" />
 <input type=\"text\" name=\"value\" />
 <input type=\"submit\" />
</form>

</br>
</br>


";
        
        $__internal_4b9bfc27eca4deceb66a18e4671a54fb5cad22ebd144a85a3f14498ee4dbd55c->leave($__internal_4b9bfc27eca4deceb66a18e4671a54fb5cad22ebd144a85a3f14498ee4dbd55c_prof);

    }

    public function getTemplateName()
    {
        return "IJVRSearchBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* <br/>*/
/* <br/>*/
/* */
/* <form action="criteria_search" method="POST" >*/
/*  <label> Issue Test </label>*/
/*  <input type="text" name="criteria" />*/
/*  <input type="text" name="value" />*/
/*  <input type="submit" />*/
/* </form>*/
/* */
/* </br>*/
/* </br>*/
/* */
/* */
/* {% endblock %}*/
/* */
