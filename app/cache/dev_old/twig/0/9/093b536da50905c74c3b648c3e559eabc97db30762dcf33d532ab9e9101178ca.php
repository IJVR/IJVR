<?php

/* ::layout.html.twig */
class __TwigTemplate_093b536da50905c74c3b648c3e559eabc97db30762dcf33d532ab9e9101178ca extends Twig_Template
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
        $__internal_907a8cb1e2d955ffbe901828e99b42d2a543e0b244f62dabd830b0019dc1b3cf = $this->env->getExtension("native_profiler");
        $__internal_907a8cb1e2d955ffbe901828e99b42d2a543e0b244f62dabd830b0019dc1b3cf->enter($__internal_907a8cb1e2d955ffbe901828e99b42d2a543e0b244f62dabd830b0019dc1b3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
\t
  </head>
  <body>
  
  <style>
  html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
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
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }
  </style>
  
  <div id=\"wrap\">
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
      <a class=\"navbar-brand\" href=\"#\">Logo IJVR</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

      
      <ul class=\"nav navbar-nav navbar-right\">
\t  <form class=\"navbar-form navbar-left\" role=\"search\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span></button>
\t\t
      </form>
        <li><a href=\"#\"><span class=\"glyphicon glyphicon-home\"></span></a></li>
\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-off\"></span></a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class=\"container\" style=\"display:inline-block;\">
<button type=\"button\" class=\"btn btn-primary\">Search</button>
<button type=\"button\" class=\"btn btn-primary\"  >Publish</button>
<button type=\"button\" class=\"btn btn-primary\"  >Profile</button>
</div>
    ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "\t</div>
\t<div id=\"push\"></div>
\t<div id=\"footer\">
\t\t<div class=\"container\" >
\t\t\t<div align=\"right\" style=\"margin-bottom:0px;\">
\t\t\t<a href=\"\">Contact</a>&nbsp;
\t\t\t<a href=\"\">About us</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
  </body>
</html>";
        
        $__internal_907a8cb1e2d955ffbe901828e99b42d2a543e0b244f62dabd830b0019dc1b3cf->leave($__internal_907a8cb1e2d955ffbe901828e99b42d2a543e0b244f62dabd830b0019dc1b3cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1040ceaeaf61aba9f82a86b96ec994ee57ca9cf98c54d6cb75aeb3e7de4117e = $this->env->getExtension("native_profiler");
        $__internal_e1040ceaeaf61aba9f82a86b96ec994ee57ca9cf98c54d6cb75aeb3e7de4117e->enter($__internal_e1040ceaeaf61aba9f82a86b96ec994ee57ca9cf98c54d6cb75aeb3e7de4117e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IJVR";
        
        $__internal_e1040ceaeaf61aba9f82a86b96ec994ee57ca9cf98c54d6cb75aeb3e7de4117e->leave($__internal_e1040ceaeaf61aba9f82a86b96ec994ee57ca9cf98c54d6cb75aeb3e7de4117e_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd54408daa2491c5a7b4a76bf2f229c09628e49b6429fd98373d1181e392caef = $this->env->getExtension("native_profiler");
        $__internal_fd54408daa2491c5a7b4a76bf2f229c09628e49b6429fd98373d1181e392caef->enter($__internal_fd54408daa2491c5a7b4a76bf2f229c09628e49b6429fd98373d1181e392caef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "    ";
        
        $__internal_fd54408daa2491c5a7b4a76bf2f229c09628e49b6429fd98373d1181e392caef->leave($__internal_fd54408daa2491c5a7b4a76bf2f229c09628e49b6429fd98373d1181e392caef_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  149 => 82,  143 => 81,  131 => 5,  111 => 83,  109 => 81,  30 => 5,  24 => 1,);
    }
}
