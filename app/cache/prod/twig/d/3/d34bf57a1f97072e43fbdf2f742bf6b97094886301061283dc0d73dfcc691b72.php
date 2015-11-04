<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_bd0c067b1b6c59cb4296650a9d32f183f1d1ce02af42bf4bc4ca9f7c919f1b2d extends Twig_Template
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
        $__internal_6342d17ae6e9a76418db9e67521ed21bc7017575dae46d54f0392f5e02ef2f07 = $this->env->getExtension("native_profiler");
        $__internal_6342d17ae6e9a76418db9e67521ed21bc7017575dae46d54f0392f5e02ef2f07->enter($__internal_6342d17ae6e9a76418db9e67521ed21bc7017575dae46d54f0392f5e02ef2f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "<div class=\"container\">
<h3>My Profile</h3><br> <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">modify</a><br>
<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">change password</a>
<div class=\"fos_user_user_show\"><br>

<address>
  <strong>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo " :</strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
</address>

<address>
  <strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo " :</strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
</address>
 
    
</div>
<br><br>
<h4>Current Papers</h4>
<br>
<table class=\"table table-hover\">
\t<tr>
\t\t<td>Action
\t\t</td>
\t\t<td>Title
\t\t</td>
\t\t<td>Upload Date
\t\t</td>
\t\t<td>Last Update Date
\t\t</td>
\t\t<td>Status
\t\t</td>
\t</tr>
\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 34
            echo "\t\t<tr>
\t\t<td>
\t\t</td>
\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
\t\t</td>
\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "m/d/Y"), "html", null, true);
            echo "
\t\t</td>
\t\t<td>
\t\t
\t\t</td>
\t\t";
            // line 44
            if (($this->getAttribute($context["post"], "status", array()) == 0)) {
                // line 45
                echo "\t\t<td> Just being uploaded
\t\t</td>
\t\t";
            } else {
                // line 47
                echo "\t\t
\t\t\t";
                // line 48
                if (($this->getAttribute($context["post"], "status", array()) == 1)) {
                    // line 49
                    echo "\t\t\t<td> being read
\t\t\t</td>
\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t";
                    if (($this->getAttribute($context["post"], "status", array()) == 2)) {
                        // line 53
                        echo "\t\t\t\t<td> correction to make
\t\t\t\t</td>
\t\t\t\t";
                    } else {
                        // line 56
                        echo "\t\t\t\t\t";
                        if (($this->getAttribute($context["post"], "status", array()) == 3)) {
                            // line 57
                            echo "\t\t\t\t\t<td> correction made
\t\t\t\t\t</td>
\t\t\t\t\t";
                        } else {
                            // line 60
                            echo "\t\t\t\t\t\t";
                            if (($this->getAttribute($context["post"], "status", array()) == 4)) {
                                // line 61
                                echo "\t\t\t\t\t\t
\t\t\t\t\t\t<td> Waiting to be published
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{else}
\t\t\t\t\t\t<td>
\t\t\t\t\t\trejected
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                            }
                            // line 69
                            echo "\t\t\t\t\t";
                        }
                        // line 70
                        echo "\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t";
                }
                // line 72
                echo "\t\t";
            }
            // line 73
            echo "\t</tr>
\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "</table>
<br>

<h4>Published Papers</h4>

<table class=\"table table-hover\">
\t<tr>
\t\t<td>Action
\t\t</td>
\t\t<td>Issue
\t\t</td>
\t\t<td>Title
\t\t</td>
\t\t<td>Upload Date
\t\t</td>
\t\t<td>Publish Date
\t\t</td>
\t</tr>
\t
\t\t<tr>
\t\t<td><a>Send a mail</a>
\t\t</td>
\t\t<td>2015-a10
\t\t</td>
\t\t<td>This is a test
\t\t</td>
\t\t<td>09/30/15
\t\t</td>
\t\t<td>09/30/15
\t\t</td>
\t</tr>
</table>

<br><br><br>
</div>
";
        
        $__internal_6342d17ae6e9a76418db9e67521ed21bc7017575dae46d54f0392f5e02ef2f07->leave($__internal_6342d17ae6e9a76418db9e67521ed21bc7017575dae46d54f0392f5e02ef2f07_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 76,  151 => 73,  148 => 72,  145 => 71,  142 => 70,  139 => 69,  129 => 61,  126 => 60,  121 => 57,  118 => 56,  113 => 53,  110 => 52,  105 => 49,  103 => 48,  100 => 47,  95 => 45,  93 => 44,  85 => 39,  80 => 37,  75 => 34,  71 => 33,  45 => 12,  36 => 8,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="container">*/
/* <h3>My Profile</h3><br> <a href="{{path('fos_user_profile_edit')}}">modify</a><br>*/
/* <a href="{{path('fos_user_change_password')}}">change password</a>*/
/* <div class="fos_user_user_show"><br>*/
/* */
/* <address>*/
/*   <strong>{{ 'profile.show.username'|trans }} :</strong>{{ user.username }}*/
/* </address>*/
/* */
/* <address>*/
/*   <strong>{{ 'profile.show.email'|trans }} :</strong>{{ user.email }}*/
/* </address>*/
/*  */
/*     */
/* </div>*/
/* <br><br>*/
/* <h4>Current Papers</h4>*/
/* <br>*/
/* <table class="table table-hover">*/
/* 	<tr>*/
/* 		<td>Action*/
/* 		</td>*/
/* 		<td>Title*/
/* 		</td>*/
/* 		<td>Upload Date*/
/* 		</td>*/
/* 		<td>Last Update Date*/
/* 		</td>*/
/* 		<td>Status*/
/* 		</td>*/
/* 	</tr>*/
/* 	{%for post in list %}*/
/* 		<tr>*/
/* 		<td>*/
/* 		</td>*/
/* 		<td>{{post.title}}*/
/* 		</td>*/
/* 		<td>{{post.date |date('m/d/Y')}}*/
/* 		</td>*/
/* 		<td>*/
/* 		*/
/* 		</td>*/
/* 		{%if post.status == 0%}*/
/* 		<td> Just being uploaded*/
/* 		</td>*/
/* 		{%else %}		*/
/* 			{%if post.status == 1%}*/
/* 			<td> being read*/
/* 			</td>*/
/* 			{%else %}*/
/* 				{%if post.status == 2%}*/
/* 				<td> correction to make*/
/* 				</td>*/
/* 				{%else %}*/
/* 					{%if post.status == 3%}*/
/* 					<td> correction made*/
/* 					</td>*/
/* 					{%else %}*/
/* 						{%if post.status == 4%}*/
/* 						*/
/* 						<td> Waiting to be published*/
/* 						</td>*/
/* 						{else}*/
/* 						<td>*/
/* 						rejected*/
/* 						</td>*/
/* 						{%endif%}*/
/* 					{%endif%}*/
/* 				{%endif%}*/
/* 			{%endif%}*/
/* 		{%endif%}*/
/* 	</tr>*/
/* 	*/
/* 	{%endfor%}*/
/* </table>*/
/* <br>*/
/* */
/* <h4>Published Papers</h4>*/
/* */
/* <table class="table table-hover">*/
/* 	<tr>*/
/* 		<td>Action*/
/* 		</td>*/
/* 		<td>Issue*/
/* 		</td>*/
/* 		<td>Title*/
/* 		</td>*/
/* 		<td>Upload Date*/
/* 		</td>*/
/* 		<td>Publish Date*/
/* 		</td>*/
/* 	</tr>*/
/* 	*/
/* 		<tr>*/
/* 		<td><a>Send a mail</a>*/
/* 		</td>*/
/* 		<td>2015-a10*/
/* 		</td>*/
/* 		<td>This is a test*/
/* 		</td>*/
/* 		<td>09/30/15*/
/* 		</td>*/
/* 		<td>09/30/15*/
/* 		</td>*/
/* 	</tr>*/
/* </table>*/
/* */
/* <br><br><br>*/
/* </div>*/
/* */
