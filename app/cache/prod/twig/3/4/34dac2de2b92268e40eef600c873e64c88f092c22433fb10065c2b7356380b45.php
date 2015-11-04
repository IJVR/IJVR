<?php

/* IJVRUserBundle:Default:gestion.html.twig */
class __TwigTemplate_6365b545abfe491b7711c6e1a503b4b28d22d1d4aaa8eaad9969ed8fc3e940db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IJVRUserBundle:Default:gestion.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Gestion des Droits - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"container\">

   <h2 style=\"\">Gestion des Droits</h2>
   
   ";
        // line 13
        $context["i"] = 0;
        echo "   
   
   <table class=\"table\">
\t\t<th>
\t\t\tIci vous pouvez gerer les droits des utilisateurs<br>Pour une recherche plus rapide, utilisez la barre de recherche dans le header<br>
\t
\t\t</th>
\t</table>
\t<!--POUR TOUS LES ADMIN -->
   <table class=\"table\">
   <th>
\t\t\t\tAdministrateurs<br><br>
\t
\t\t\t</th>
\t\t\t<th>
\t\t\t</th>
   ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            echo "   
\t\t";
            // line 31
            if (((isset($context["i"]) ? $context["i"] : null) == 0)) {
                // line 32
                echo "\t\t\t
\t\t";
            }
            // line 33
            echo "   
   
\t\t<tr>
\t\t\t<!--ON LES AFFICHE-->
\t\t\t<td>\t\t\t\t
\t\t\t\t   ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\t\t\t  
\t\t\t</td>
   
\t\t\t<!--PUIS ON MET UN BOUTON POUR RETIRER LES DROITS D'ADMIN-->
\t\t\t<td align=\"right\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"  onclick=\"\t   
\t\t\t\t\$.ajax({
\t\t\t\t\t\ttype:'POST',
\t\t\t\t\t\turl:'";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retire_admin", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "',
\t\t\t\t\t\tdata:'act=retire',
\t\t\t\t\t\tsuccess: function(){
\t\t\t\t\t\twindow.location = '';
\t\t\t\t\t\t}
\t\t\t\t});\">
\t\t\t\t\t<i class=\"fa fa-wrench\"></i>&nbsp;Retirer les droits d'administrateur
\t\t\t\t</button>
\t  
   
\t\t\t</td>
\t\t</tr>
\t\t";
            // line 58
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 59
            echo "   
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "   
\t\t\tAucun utilisateur dans ce groupe  
   
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "   \t
\t<!--PAGINATION ADMIN-->\t\t\t\t
   </table>
\t
   <br><br>
   ";
        // line 69
        $context["i"] = 0;
        echo " 
   
   <!--POUR TOUS LES UTILISATEURS-->
    <table class=\"table\">
\t<th>
\t\t\t\t\tUtilisateurs<br><br>
\t
\t\t\t\t</th>
\t\t\t\t<th></th>
\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 79
            echo "   
\t\t\t";
            // line 80
            if (((isset($context["i"]) ? $context["i"] : null) == 0)) {
                // line 81
                echo "\t\t\t\t
\t\t\t";
            }
            // line 83
            echo "  
\t\t\t<tr>
\t\t\t\t<!--SON LES AFFICHE-->
\t\t\t\t<td>
\t\t\t\t\t
\t\t\t\t\t   ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "
\t\t\t\t 
\t\t\t   </td>
\t\t\t\t
\t\t\t\t<!--PUIS ON MET UN BOUTON POUR DONNER LES DROITS D'ADMIN-->
\t\t\t\t<td align=\"right\">   
\t\t\t\t\t   <button type=\"button\" class=\"btn btn-primary\"  onclick=\"\t  
\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\ttype:'POST',
\t\t\t\t\t\t\t\t\turl:'";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("donne_admin", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "',
\t\t\t\t\t\t\t\t\tdata:'act=donne',
\t\t\t\t\t\t\t\t\tsuccess: function(){
\t\t\t\t\t\t\t\t\twindow.location = '';
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<i class=\"fa fa-wrench\"></i>&nbsp;Donner les droits d'administrateur
\t\t\t\t\t\t</button>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
            // line 109
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 110
            echo "   
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 111
            echo "   
\t\t\tAucun utilisateur dans ce groupe
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "\t</table>
\t<!--PAGINATION UTILISATEURS-->
\t
\t<br><br>
</div>

";
    }

    public function getTemplateName()
    {
        return "IJVRUserBundle:Default:gestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 114,  207 => 111,  201 => 110,  199 => 109,  185 => 98,  172 => 88,  165 => 83,  161 => 81,  159 => 80,  156 => 79,  151 => 78,  139 => 69,  132 => 64,  123 => 60,  117 => 59,  115 => 58,  100 => 46,  89 => 38,  82 => 33,  78 => 32,  76 => 31,  73 => 30,  68 => 29,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Gestion des Droits - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/* */
/*    <h2 style="">Gestion des Droits</h2>*/
/*    */
/*    {%set i=0 %}   */
/*    */
/*    <table class="table">*/
/* 		<th>*/
/* 			Ici vous pouvez gerer les droits des utilisateurs<br>Pour une recherche plus rapide, utilisez la barre de recherche dans le header<br>*/
/* 	*/
/* 		</th>*/
/* 	</table>*/
/* 	<!--POUR TOUS LES ADMIN -->*/
/*    <table class="table">*/
/*    <th>*/
/* 				Administrateurs<br><br>*/
/* 	*/
/* 			</th>*/
/* 			<th>*/
/* 			</th>*/
/*    {%for user in admins%}*/
/*    */
/* 		{%if i==0 %}*/
/* 			*/
/* 		{%endif%}   */
/*    */
/* 		<tr>*/
/* 			<!--ON LES AFFICHE-->*/
/* 			<td>				*/
/* 				   {{user.username}}			  */
/* 			</td>*/
/*    */
/* 			<!--PUIS ON MET UN BOUTON POUR RETIRER LES DROITS D'ADMIN-->*/
/* 			<td align="right">*/
/* 				<button type="button" class="btn btn-primary"  onclick="	   */
/* 				$.ajax({*/
/* 						type:'POST',*/
/* 						url:'{{path('retire_admin',{'id': user.id})}}',*/
/* 						data:'act=retire',*/
/* 						success: function(){*/
/* 						window.location = '';*/
/* 						}*/
/* 				});">*/
/* 					<i class="fa fa-wrench"></i>&nbsp;Retirer les droits d'administrateur*/
/* 				</button>*/
/* 	  */
/*    */
/* 			</td>*/
/* 		</tr>*/
/* 		{%set i=i+1%}*/
/*    */
/* 	{%else%}   */
/* 			Aucun utilisateur dans ce groupe  */
/*    */
/* 	{%endfor%}*/
/*    	*/
/* 	<!--PAGINATION ADMIN-->				*/
/*    </table>*/
/* 	*/
/*    <br><br>*/
/*    {%set i=0 %} */
/*    */
/*    <!--POUR TOUS LES UTILISATEURS-->*/
/*     <table class="table">*/
/* 	<th>*/
/* 					Utilisateurs<br><br>*/
/* 	*/
/* 				</th>*/
/* 				<th></th>*/
/* 		{%for user in users%}*/
/*    */
/* 			{%if i==0 %}*/
/* 				*/
/* 			{%endif%}*/
/*   */
/* 			<tr>*/
/* 				<!--SON LES AFFICHE-->*/
/* 				<td>*/
/* 					*/
/* 					   {{user.username}}*/
/* 				 */
/* 			   </td>*/
/* 				*/
/* 				<!--PUIS ON MET UN BOUTON POUR DONNER LES DROITS D'ADMIN-->*/
/* 				<td align="right">   */
/* 					   <button type="button" class="btn btn-primary"  onclick="	  */
/* 						   */
/* 								$.ajax({*/
/* 									type:'POST',*/
/* 									url:'{{path('donne_admin',{'id': user.id})}}',*/
/* 									data:'act=donne',*/
/* 									success: function(){*/
/* 									window.location = '';*/
/* 									}*/
/* 								});"*/
/* 						>*/
/* 							<i class="fa fa-wrench"></i>&nbsp;Donner les droits d'administrateur*/
/* 						</button>*/
/* 				</td>*/
/* 			</tr>*/
/* 			{%set i=i+1%}*/
/*    */
/* 		{%else%}   */
/* 			Aucun utilisateur dans ce groupe*/
/* 		{%endfor%}*/
/* 	</table>*/
/* 	<!--PAGINATION UTILISATEURS-->*/
/* 	*/
/* 	<br><br>*/
/* </div>*/
/* */
/* {% endblock %}*/
