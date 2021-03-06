<?php

/* ::layout.html.twig */
class __TwigTemplate_c1eac89f1c26d40cb068475421644ff21127aa67c946b22e409ce9153e55d303 extends Twig_Template
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
        $__internal_d5427761449d803e622cfa736a6e2e55c94176c5147b2f19466848ab1329fc22 = $this->env->getExtension("native_profiler");
        $__internal_d5427761449d803e622cfa736a6e2e55c94176c5147b2f19466848ab1329fc22->enter($__internal_d5427761449d803e622cfa736a6e2e55c94176c5147b2f19466848ab1329fc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-tokenfield.min.css"), "html", null, true);
        echo "\"  media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<script src=\"https://code.jquery.com/ui/jquery-ui-1-9-git.js\" ></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fileinput.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-tokenfield.min.js"), "html", null, true);
        echo "\" ></script>
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
        // line 90
        echo $this->env->getExtension('routing')->getPath("ijvr_platform_home");
        echo "\">
      <img src=\" ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"height:60px;position:absolute;top:0;\"></img></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

      
      <ul class=\"nav navbar-nav navbar-right\">
\t  <form class=\"navbar-form navbar-left\" method=\"POST\" action=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("ijvr_minimal_search");
        echo "\" role=\"search\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" name=\"search_field\" placeholder=\"Quick Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
\t\t
      </form>
\t  
\t  
\t  ";
        // line 108
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 109
            echo "\t <li > <a href=\"";
            echo $this->env->getExtension('routing')->getPath("issue_publish");
            echo "\" style=\"color:red\"><i class=\"fa fa-upload\"></i> </a></li>
\t  <li > <a href=\"";
            // line 110
            echo $this->env->getExtension('routing')->getPath("gestion");
            echo "\" style=\"color:red\"><i class=\"fa fa-user-plus\"></i> </a></li>
\t  <li > <a href=\"";
            // line 111
            echo $this->env->getExtension('routing')->getPath("moderation");
            echo "\" style=\"color:red\"><i class=\"fa fa-flag\"></i> </a></li>
\t <li > <a href=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("dashboard");
            echo "\" style=\"color:red\"><i class=\"fa fa-tachometer\"></i> </a></li>\t  
\t  ";
        }
        // line 114
        echo "        <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("ijvr_platform_home");
        echo "\"><i class=\"fa fa-home\"></i></a></li>
\t\t
\t\t";
        // line 116
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 117
            echo "\t  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i></a></li>
\t  ";
        } else {
            // line 119
            echo "\t <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">log in</i></a></li>
\t  ";
        }
        // line 121
        echo "

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class=\"container\" >
<button type=\"button\" style=\"float:left;\" class=\"btn  btn-primary btn-lg btn-space\" onClick=\"location.href='";
        // line 129
        echo $this->env->getExtension('routing')->getPath("ijvr_go_to_advanced_search");
        echo "'\"><i class=\"fa fa-search\"></i> Search </button>
   
<center>
<button type=\"button\" class=\"btn btn-primary btn-lg btn-space\"  onClick=\"location.href='";
        // line 132
        echo $this->env->getExtension('routing')->getPath("ijvr_publish_index");
        echo "'\"><i class=\"fa fa-pencil\"></i> Publish </button>
  
<button type=\"button\" style=\"float:right;\" class=\"btn btn-primary btn-lg btn-space\" onClick=\"location.href='";
        // line 134
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "'\" >
";
        // line 135
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 136
            echo "<i class=\"fa fa-user\"></i> 
Profile
";
        } else {
            // line 139
            echo "<i class=\"fa fa-sign-in\"></i>
Log in
";
        }
        // line 142
        echo " </button></center>
</div>
    ";
        // line 144
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "\t
\t<div id=\"push\"></div>
</div>
\t<div id=\"footer\">
\t\t<div class=\"container\" >
\t\t\t<div align=\"right\" style=\"margin-bottom:0px;\">
\t\t\t<a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("ijvr_platform_contact");
        echo "\">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t<a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("ijvr_platform_about");
        echo "\">About us</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t 

  </body>
</html>
";
        
        $__internal_d5427761449d803e622cfa736a6e2e55c94176c5147b2f19466848ab1329fc22->leave($__internal_d5427761449d803e622cfa736a6e2e55c94176c5147b2f19466848ab1329fc22_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8cefa866b39d5cdf0964ce46414cbb85f0700aa609713419d40c553a4034093 = $this->env->getExtension("native_profiler");
        $__internal_c8cefa866b39d5cdf0964ce46414cbb85f0700aa609713419d40c553a4034093->enter($__internal_c8cefa866b39d5cdf0964ce46414cbb85f0700aa609713419d40c553a4034093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IJVR";
        
        $__internal_c8cefa866b39d5cdf0964ce46414cbb85f0700aa609713419d40c553a4034093->leave($__internal_c8cefa866b39d5cdf0964ce46414cbb85f0700aa609713419d40c553a4034093_prof);

    }

    // line 144
    public function block_body($context, array $blocks = array())
    {
        $__internal_909dd1f9db14cb1eff463d25486ff4cbe5b681c0180dc932baad82fc6ecf4d16 = $this->env->getExtension("native_profiler");
        $__internal_909dd1f9db14cb1eff463d25486ff4cbe5b681c0180dc932baad82fc6ecf4d16->enter($__internal_909dd1f9db14cb1eff463d25486ff4cbe5b681c0180dc932baad82fc6ecf4d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 145
        echo "    ";
        
        $__internal_909dd1f9db14cb1eff463d25486ff4cbe5b681c0180dc932baad82fc6ecf4d16->leave($__internal_909dd1f9db14cb1eff463d25486ff4cbe5b681c0180dc932baad82fc6ecf4d16_prof);

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
        return array (  289 => 145,  283 => 144,  271 => 6,  255 => 153,  251 => 152,  243 => 146,  241 => 144,  237 => 142,  232 => 139,  227 => 136,  225 => 135,  221 => 134,  216 => 132,  210 => 129,  200 => 121,  194 => 119,  188 => 117,  186 => 116,  180 => 114,  175 => 112,  171 => 111,  167 => 110,  162 => 109,  160 => 108,  148 => 99,  137 => 91,  133 => 90,  56 => 16,  52 => 15,  47 => 13,  42 => 11,  35 => 7,  31 => 6,  24 => 1,);
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
/* 	<link href="{{ asset('css/bootstrap-tokenfield.min.css')}}"  media="all" rel="stylesheet" type="text/css" />*/
/* 	<script src="https://code.jquery.com/ui/jquery-ui-1-9-git.js" ></script>*/
/* 	<script src="{{ asset('js/fileinput.min.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('js/bootstrap-tokenfield.min.js')}}" ></script>*/
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
/*       <a class="navbar-brand" href="{{path('ijvr_platform_home')}}">*/
/*       <img src=" {{asset('images/logo.png')}}" style="height:60px;position:absolute;top:0;"></img></a>*/
/*     </div>*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* */
/*       */
/*       <ul class="nav navbar-nav navbar-right">*/
/* 	  <form class="navbar-form navbar-left" method="POST" action="{{path('ijvr_minimal_search')}}" role="search">*/
/*         <div class="form-group">*/
/*           <input type="text" class="form-control" name="search_field" placeholder="Quick Search">*/
/*         </div>*/
/*         <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>*/
/* 		*/
/*       </form>*/
/* 	  */
/* 	  */
/* 	  {% if is_granted("ROLE_ADMIN") %}*/
/* 	 <li > <a href="{{ path('issue_publish') }}" style="color:red"><i class="fa fa-upload"></i> </a></li>*/
/* 	  <li > <a href="{{ path('gestion') }}" style="color:red"><i class="fa fa-user-plus"></i> </a></li>*/
/* 	  <li > <a href="{{ path('moderation') }}" style="color:red"><i class="fa fa-flag"></i> </a></li>*/
/* 	 <li > <a href="{{ path('dashboard') }}" style="color:red"><i class="fa fa-tachometer"></i> </a></li>	  */
/* 	  {%endif%}*/
/*         <li><a href="{{path('ijvr_platform_home')}}"><i class="fa fa-home"></i></a></li>*/
/* 		*/
/* 		{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 	  <li><a href="{{ path('fos_user_security_logout') }}"><i class="fa fa-sign-out"></i></a></li>*/
/* 	  {%else%}*/
/* 	 <li><a href="{{ path('fos_user_security_login') }}">log in</i></a></li>*/
/* 	  {%endif%}*/
/* */
/* */
/*       </ul>*/
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
/* <div class="container" >*/
/* <button type="button" style="float:left;" class="btn  btn-primary btn-lg btn-space" onClick="location.href='{{path('ijvr_go_to_advanced_search')}}'"><i class="fa fa-search"></i> Search </button>*/
/*    */
/* <center>*/
/* <button type="button" class="btn btn-primary btn-lg btn-space"  onClick="location.href='{{path('ijvr_publish_index')}}'"><i class="fa fa-pencil"></i> Publish </button>*/
/*   */
/* <button type="button" style="float:right;" class="btn btn-primary btn-lg btn-space" onClick="location.href='{{path('fos_user_profile_show')}}'" >*/
/* {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* <i class="fa fa-user"></i> */
/* Profile*/
/* {%else%}*/
/* <i class="fa fa-sign-in"></i>*/
/* Log in*/
/* {%endif%}*/
/*  </button></center>*/
/* </div>*/
/*     {% block body %}*/
/*     {% endblock %}*/
/* 	*/
/* 	<div id="push"></div>*/
/* </div>*/
/* 	<div id="footer">*/
/* 		<div class="container" >*/
/* 			<div align="right" style="margin-bottom:0px;">*/
/* 			<a href="{{path('ijvr_platform_contact')}}">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/* 			<a href="{{path('ijvr_platform_about')}}">About us</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	 */
/* */
/*   </body>*/
/* </html>*/
/* */
