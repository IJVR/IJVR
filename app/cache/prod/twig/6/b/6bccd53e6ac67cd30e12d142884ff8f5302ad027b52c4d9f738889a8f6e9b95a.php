<?php

/* ::layout.html.twig */
class __TwigTemplate_473ac8597ea7a37799457e3dff319910a3d3fb2b01214813370a139045914f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd48e26d8e3ffaf14a653827cc2b91c749aae5e65875ccd14739f82559b25025 = $this->env->getExtension("native_profiler");
        $__internal_dd48e26d8e3ffaf14a653827cc2b91c749aae5e65875ccd14739f82559b25025->enter($__internal_dd48e26d8e3ffaf14a653827cc2b91c749aae5e65875ccd14739f82559b25025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/fileinput.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css\" rel=\"Stylesheet\"></link>
\t<script src=\"https://code.jquery.com/ui/jquery-ui-1-9-git.js\" ></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fileinput.min.js"), "html", null, true);
        echo "\"></script>
  </head>
  <body>
  <style>
\t\t\t  
\t\t\t   @media screen and (max-width: 480px){
\t\t\t   .btn-space{
\t\t\t\tfont-size: 10px;
\t\t\t  }
\t\t\t  
\t\t\t  }
\t\t\t  
\t\t</style>
  <style>
  html,
 
 
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }
\t   .divider{
    width:5px;
    height:auto;
    display:inline-block;
}


  #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }
\t        /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 30px;
      }
      #footer {
        background-color: #375A7F;
      }
\t  
\t  .wrapper{
\t  min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -30px;
\t  }
  </style>
  
 <div class=\"wrapper\">
 
 
<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("ijvr_platform_home");
        echo "\">Logo  The International Journal of Virtual Reality</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

      
      <ul class=\"nav navbar-nav navbar-right\">
\t  <form class=\"navbar-form navbar-left\" method=\"POST\" action=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("ijvr_minimal_search");
        echo "\" role=\"search\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" name=\"search_field\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
\t\t
      </form>
\t  
\t  
\t  ";
        // line 105
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 106
            echo "\t <li > <a href=\"";
            echo $this->env->getExtension('routing')->getPath("issue_publish");
            echo "\" style=\"color:red\"><i class=\"fa fa-upload\"></i> </a></li>
\t  <li > <a href=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("gestion");
            echo "\" style=\"color:red\"><i class=\"fa fa-user-plus\"></i> </a></li>
\t  <li > <a href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath("moderation");
            echo "\" style=\"color:red\"><i class=\"fa fa-flag\"></i> </a></li>\t
\t  ";
        }
        // line 110
        echo "        <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("ijvr_platform_home");
        echo "\"><i class=\"fa fa-home\"></i></a></li>
\t\t
\t\t";
        // line 112
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 113
            echo "\t  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i></a></li>
\t  ";
        } else {
            // line 115
            echo "\t <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-sign-in\"></i></a></li>
\t  ";
        }
        // line 117
        echo "

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class=\"container\" >
<button type=\"button\" style=\"float:left;\" class=\"btn  btn-primary btn-lg btn-space\"><i class=\"fa fa-search\"></i> Search </button>
   
<center>
<button type=\"button\" class=\"btn btn-primary btn-lg btn-space\"  onClick=\"location.href='";
        // line 128
        echo $this->env->getExtension('routing')->getPath("ijvr_publish_index");
        echo "'\"><i class=\"fa fa-pencil\"></i> Publish </button>
  
<button type=\"button\" style=\"float:right;\" class=\"btn btn-primary btn-lg btn-space\" onClick=\"location.href='";
        // line 130
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "'\" >
<i class=\"fa fa-user\"></i> Profile </button></center>
</div>
    ";
        // line 133
        $this->displayBlock('body', $context, $blocks);
        // line 135
        echo "\t
\t<div id=\"push\"></div>
</div>
\t<div id=\"footer\">
\t\t<div class=\"container\" >
\t\t\t<div align=\"right\" style=\"margin-bottom:0px;\">
\t\t\t<a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("ijvr_platform_contact");
        echo "\">Contact</a>&nbsp;
\t\t\t<a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("ijvr_platform_about");
        echo "\">About us</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t 

  </body>
</html>
";
        
        $__internal_dd48e26d8e3ffaf14a653827cc2b91c749aae5e65875ccd14739f82559b25025->leave($__internal_dd48e26d8e3ffaf14a653827cc2b91c749aae5e65875ccd14739f82559b25025_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8471dd4879879c3381398c91ab80b4255e0bc5c15c2dd961c7a31f0a35ec3ca = $this->env->getExtension("native_profiler");
        $__internal_e8471dd4879879c3381398c91ab80b4255e0bc5c15c2dd961c7a31f0a35ec3ca->enter($__internal_e8471dd4879879c3381398c91ab80b4255e0bc5c15c2dd961c7a31f0a35ec3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IJVR";
        
        $__internal_e8471dd4879879c3381398c91ab80b4255e0bc5c15c2dd961c7a31f0a35ec3ca->leave($__internal_e8471dd4879879c3381398c91ab80b4255e0bc5c15c2dd961c7a31f0a35ec3ca_prof);

    }

    // line 133
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee4d80882751c1296b30cae5e267b2cc995884ef481f8edebd9092248aa4e7a0 = $this->env->getExtension("native_profiler");
        $__internal_ee4d80882751c1296b30cae5e267b2cc995884ef481f8edebd9092248aa4e7a0->enter($__internal_ee4d80882751c1296b30cae5e267b2cc995884ef481f8edebd9092248aa4e7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 134
        echo "    ";
        
        $__internal_ee4d80882751c1296b30cae5e267b2cc995884ef481f8edebd9092248aa4e7a0->leave($__internal_ee4d80882751c1296b30cae5e267b2cc995884ef481f8edebd9092248aa4e7a0_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 134,  250 => 133,  238 => 6,  222 => 142,  218 => 141,  210 => 135,  208 => 133,  202 => 130,  197 => 128,  184 => 117,  178 => 115,  172 => 113,  170 => 112,  164 => 110,  159 => 108,  155 => 107,  150 => 106,  148 => 105,  136 => 96,  125 => 88,  48 => 14,  42 => 11,  35 => 7,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}IJVR{% endblock %}</title>*/
/* 	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />*/
/* 	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>*/
/* 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/* 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* 	<link href="{{ asset('css/fileinput.min.css') }}" rel="stylesheet" />*/
/* 	<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>*/
/* 	<script src="https://code.jquery.com/ui/jquery-ui-1-9-git.js" ></script>*/
/* 	<script src="{{ asset('js/fileinput.min.js') }}"></script>*/
/*   </head>*/
/*   <body>*/
/*   <style>*/
/* 			  */
/* 			   @media screen and (max-width: 480px){*/
/* 			   .btn-space{*/
/* 				font-size: 10px;*/
/* 			  }*/
/* 			  */
/* 			  }*/
/* 			  */
/* 		</style>*/
/*   <style>*/
/*   html,*/
/*  */
/*  */
/*       body {*/
/*         height: 100%;*/
/*         /* The html and body elements cannot have any padding or margin. *//* */
/*       }*/
/* 	   .divider{*/
/*     width:5px;*/
/*     height:auto;*/
/*     display:inline-block;*/
/* }*/
/* */
/* */
/*   #wrap > .container {*/
/*         padding-top: 60px;*/
/*       }*/
/*       .container .credit {*/
/*         margin: 20px 0;*/
/*       }*/
/* 	        /* Wrapper for page content to push down footer *//* */
/*       #wrap {*/
/*         min-height: 100%;*/
/*         height: auto !important;*/
/*         height: 100%;*/
/*         /* Negative indent footer by it's height *//* */
/*         margin: 0 auto -60px;*/
/*       }*/
/* */
/*       /* Set the fixed height of the footer here *//* */
/*       #push,*/
/*       #footer {*/
/*         height: 30px;*/
/*       }*/
/*       #footer {*/
/*         background-color: #375A7F;*/
/*       }*/
/* 	  */
/* 	  .wrapper{*/
/* 	  min-height: 100%;*/
/*         height: auto !important;*/
/*         height: 100%;*/
/*         /* Negative indent footer by it's height *//* */
/*         margin: 0 auto -30px;*/
/* 	  }*/
/*   </style>*/
/*   */
/*  <div class="wrapper">*/
/*  */
/*  */
/* <nav class="navbar navbar-default">*/
/*   <div class="container-fluid">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="{{path('ijvr_platform_home')}}">Logo  The International Journal of Virtual Reality</a>*/
/*     </div>*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* */
/*       */
/*       <ul class="nav navbar-nav navbar-right">*/
/* 	  <form class="navbar-form navbar-left" method="POST" action="{{path('ijvr_minimal_search')}}" role="search">*/
/*         <div class="form-group">*/
/*           <input type="text" class="form-control" name="search_field" placeholder="Search">*/
/*         </div>*/
/*         <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>*/
/* 		*/
/*       </form>*/
/* 	  */
/* 	  */
/* 	  {% if is_granted("ROLE_ADMIN") %}*/
/* 	 <li > <a href="{{ path('issue_publish') }}" style="color:red"><i class="fa fa-upload"></i> </a></li>*/
/* 	  <li > <a href="{{ path('gestion') }}" style="color:red"><i class="fa fa-user-plus"></i> </a></li>*/
/* 	  <li > <a href="{{ path('moderation') }}" style="color:red"><i class="fa fa-flag"></i> </a></li>	*/
/* 	  {%endif%}*/
/*         <li><a href="{{path('ijvr_platform_home')}}"><i class="fa fa-home"></i></a></li>*/
/* 		*/
/* 		{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 	  <li><a href="{{ path('fos_user_security_logout') }}"><i class="fa fa-sign-out"></i></a></li>*/
/* 	  {%else%}*/
/* 	 <li><a href="{{ path('fos_user_security_login') }}"><i class="fa fa-sign-in"></i></a></li>*/
/* 	  {%endif%}*/
/* */
/* */
/*       </ul>*/
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
/* <div class="container" >*/
/* <button type="button" style="float:left;" class="btn  btn-primary btn-lg btn-space"><i class="fa fa-search"></i> Search </button>*/
/*    */
/* <center>*/
/* <button type="button" class="btn btn-primary btn-lg btn-space"  onClick="location.href='{{path('ijvr_publish_index')}}'"><i class="fa fa-pencil"></i> Publish </button>*/
/*   */
/* <button type="button" style="float:right;" class="btn btn-primary btn-lg btn-space" onClick="location.href='{{path('fos_user_profile_show')}}'" >*/
/* <i class="fa fa-user"></i> Profile </button></center>*/
/* </div>*/
/*     {% block body %}*/
/*     {% endblock %}*/
/* 	*/
/* 	<div id="push"></div>*/
/* </div>*/
/* 	<div id="footer">*/
/* 		<div class="container" >*/
/* 			<div align="right" style="margin-bottom:0px;">*/
/* 			<a href="{{path('ijvr_platform_contact')}}">Contact</a>&nbsp;*/
/* 			<a href="{{path('ijvr_platform_about')}}">About us</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	 */
/* */
/*   </body>*/
/* </html>*/
/* */
