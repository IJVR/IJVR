<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_40916c98de5f61216fa562faf550deb79f2500a4b71daef970c20cb096b8f50f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d1e106056d1a0959701b5c7ccad8f27dffa3249cbfbc56f72ed482c35ec2747 = $this->env->getExtension("native_profiler");
        $__internal_3d1e106056d1a0959701b5c7ccad8f27dffa3249cbfbc56f72ed482c35ec2747->enter($__internal_3d1e106056d1a0959701b5c7ccad8f27dffa3249cbfbc56f72ed482c35ec2747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d1e106056d1a0959701b5c7ccad8f27dffa3249cbfbc56f72ed482c35ec2747->leave($__internal_3d1e106056d1a0959701b5c7ccad8f27dffa3249cbfbc56f72ed482c35ec2747_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7bdaf97e4ec4550997781d0da05a7375150d2f68fe22c93d31ff9cbdba7cdad = $this->env->getExtension("native_profiler");
        $__internal_a7bdaf97e4ec4550997781d0da05a7375150d2f68fe22c93d31ff9cbdba7cdad->enter($__internal_a7bdaf97e4ec4550997781d0da05a7375150d2f68fe22c93d31ff9cbdba7cdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"container\">

<h3>Sign In</h3>
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t
\t<div class=\"input-group\">
        <span class=\"input-group-addon \"><i class=\"fa fa-user\"></i></span>    
    <input type=\"text\" class=\"form-control\"  placeholder=\"Username\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

  </div>
  
  <br>
  <div class=\"input-group\">
        <span class=\"input-group-addon \"><i class=\"fa fa-key\"></i></span>   
    <input type=\"password\" class=\"form-control\" placeholder=\"Password\" id=\"password\" name=\"_password\" required=\"required\" />
  </div>
  
   <div class=\"form-group\">

      <div class=\"checkbox\">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t      </div>
    
  </div>
\t
\t
  <div class=\"form-group\">

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">registration</a>
</div>
</form>

</div>

";
        
        $__internal_a7bdaf97e4ec4550997781d0da05a7375150d2f68fe22c93d31ff9cbdba7cdad->leave($__internal_a7bdaf97e4ec4550997781d0da05a7375150d2f68fe22c93d31ff9cbdba7cdad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  94 => 41,  83 => 33,  65 => 18,  57 => 13,  53 => 12,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <div class="container">*/
/* */
/* <h3>Sign In</h3>*/
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* 	*/
/* 	<div class="input-group">*/
/*         <span class="input-group-addon "><i class="fa fa-user"></i></span>    */
/*     <input type="text" class="form-control"  placeholder="Username" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*   </div>*/
/*   */
/*   <br>*/
/*   <div class="input-group">*/
/*         <span class="input-group-addon "><i class="fa fa-key"></i></span>   */
/*     <input type="password" class="form-control" placeholder="Password" id="password" name="_password" required="required" />*/
/*   </div>*/
/*   */
/*    <div class="form-group">*/
/* */
/*       <div class="checkbox">*/
/*   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* 	      </div>*/
/*     */
/*   </div>*/
/* 	*/
/* 	*/
/*   <div class="form-group">*/
/* */
/*     <input type="submit" id="_submit" name="_submit" class="btn btn-primary" value="{{ 'security.login.submit'|trans }}" />*/
/* 	<a href="{{path('fos_user_registration_register')}}">registration</a>*/
/* </div>*/
/* </form>*/
/* */
/* </div>*/
/* */
/* {% endblock fos_user_content %}*/
