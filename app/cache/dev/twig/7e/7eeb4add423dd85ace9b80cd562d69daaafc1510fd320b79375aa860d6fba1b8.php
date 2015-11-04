<?php

/* IJVRSearchBundle:Default:advancedSearch.html.twig */
class __TwigTemplate_e2039088a41c9b99b1adb9aaeb831531e0791a78bb8591458d350b3fe94ba7a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IJVRSearchBundle:Default:advancedSearch.html.twig", 1);
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
        $__internal_76d953ef52daa54c982a9f35eab8af0657f79a895fa01240e74b917a05da8f88 = $this->env->getExtension("native_profiler");
        $__internal_76d953ef52daa54c982a9f35eab8af0657f79a895fa01240e74b917a05da8f88->enter($__internal_76d953ef52daa54c982a9f35eab8af0657f79a895fa01240e74b917a05da8f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRSearchBundle:Default:advancedSearch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76d953ef52daa54c982a9f35eab8af0657f79a895fa01240e74b917a05da8f88->leave($__internal_76d953ef52daa54c982a9f35eab8af0657f79a895fa01240e74b917a05da8f88_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3ad0be7edeae28beb0d2a55e661c7d6bd90e55a3fcd236b59d9e4af1ce8b2e5 = $this->env->getExtension("native_profiler");
        $__internal_d3ad0be7edeae28beb0d2a55e661c7d6bd90e55a3fcd236b59d9e4af1ce8b2e5->enter($__internal_d3ad0be7edeae28beb0d2a55e661c7d6bd90e55a3fcd236b59d9e4af1ce8b2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_d3ad0be7edeae28beb0d2a55e661c7d6bd90e55a3fcd236b59d9e4af1ce8b2e5->leave($__internal_d3ad0be7edeae28beb0d2a55e661c7d6bd90e55a3fcd236b59d9e4af1ce8b2e5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d055ee05ecbc6a5cebe375ce606551d473ba240403ee406b1eda4481b17f68c = $this->env->getExtension("native_profiler");
        $__internal_9d055ee05ecbc6a5cebe375ce606551d473ba240403ee406b1eda4481b17f68c->enter($__internal_9d055ee05ecbc6a5cebe375ce606551d473ba240403ee406b1eda4481b17f68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<script>\$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapperKeywords        = \$(\".input_fields_wrap_keywords\"); //Fields wrapper
    var wrapperAuthors        = \$(\".input_fields_wrap_authors\"); //Fields wrapper
    var add_button      = \$(\".add_field_button\"); //Add button ID
    var add_author      = \$(\".add_author_button\"); //Add button ID
    var x = 1; //initlal text box count
    \$(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            \$(wrapperKeywords).append(' <div><input type=\"text\" class=\"form-control\" name=\"keywords[]\"/><a href=\"#\" class=\"remove_field \">Remove</a></div>'); //add input box
        }
    });

     \$(add_author).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            \$(wrapperAuthors).append(' <div><input type=\"text\" class=\"form-control\" name=\"authors[]\"/><a href=\"#\" class=\"remove_author \">Remove</a></div>'); //add input box
        }
    });
    
    \$(wrapperKeywords).on(\"click\",\".remove_field\", function(e){ //user click on remove text
        e.preventDefault(); \$(this).parent('div').remove(); x--;
    });

    \$(wrapperAuthors).on(\"click\",\".remove_author\", function(e){ //user click on remove text
        e.preventDefault(); \$(this).parent('div').remove(); x--;
    });
});





</script>
<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h3>
\t\t\t\tAdvanced Search
\t\t\t</h3>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<form class=\"form-horizontal\" id=\"advancedSearchForm\" method=\"POST\" action=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("ijvr_advanced_search");
        echo "\">
<fieldset>

<!-- Form Name -->




<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinput\">Article</label>  
  <div class=\"col-md-4\">
  <input id=\"textinput\" name=\"title\" type=\"text\"  class=\"form-control input-md\">
  
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinput\">Issue</label>  
  <div class=\"col-md-4\">
  <input id=\"textinput\" name=\"issueTitle\" type=\"text\" class=\"form-control input-md\">

  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinput\">Keywords</label>  
  <div class=\"col-md-4 input_fields_wrap_keywords\">
 
<button class=\"add_field_button btn btn-default glyphicon glyphicon-plus btn-xs\">Add More keywords</button>
  <input id=\"textinput3\" name=\"keywords[]\" type=\"text\" class=\"form-control input-md\"><br>
  
  </div>

</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinput\">Authors</label>  
  <div class=\"col-md-4 input_fields_wrap_authors\">
 
<button class=\"add_author_button btn btn-default glyphicon glyphicon-plus btn-xs\">Add More Authors</button>
  <input id=\"textinput4\" name=\"authors[]\" type=\"text\" class=\"form-control input-md\"><br>
  
  </div>



</div>
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinput\"></label>  
  <div class=\"col-md-4\">
  <button id=\"submitBtn\" name=\"textinput\" type=\"submit\" class=\"btn btn-default\">Search </button>
    
  </div>
</div>

</fieldset>
</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
console.log(\$(\"#subhmitBtn\"))
\$(\"#submitBtn\").click(function(event) {
console.log(\$('#textinput3').val())
  
    
    var \$nonempty = \$('.form-control').filter(function() {
    return this.value != ''
  });

  if (\$nonempty.length == 0) {
    
     event.preventDefault();
  }
  
       
    
});


</script>
";
        
        $__internal_9d055ee05ecbc6a5cebe375ce606551d473ba240403ee406b1eda4481b17f68c->leave($__internal_9d055ee05ecbc6a5cebe375ce606551d473ba240403ee406b1eda4481b17f68c_prof);

    }

    public function getTemplateName()
    {
        return "IJVRSearchBundle:Default:advancedSearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 53,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* <script>$(document).ready(function() {*/
/*     var max_fields      = 10; //maximum input boxes allowed*/
/*     var wrapperKeywords        = $(".input_fields_wrap_keywords"); //Fields wrapper*/
/*     var wrapperAuthors        = $(".input_fields_wrap_authors"); //Fields wrapper*/
/*     var add_button      = $(".add_field_button"); //Add button ID*/
/*     var add_author      = $(".add_author_button"); //Add button ID*/
/*     var x = 1; //initlal text box count*/
/*     $(add_button).click(function(e){ //on add input button click*/
/*         e.preventDefault();*/
/*         if(x < max_fields){ //max input box allowed*/
/*             x++; //text box increment*/
/*             $(wrapperKeywords).append(' <div><input type="text" class="form-control" name="keywords[]"/><a href="#" class="remove_field ">Remove</a></div>'); //add input box*/
/*         }*/
/*     });*/
/* */
/*      $(add_author).click(function(e){ //on add input button click*/
/*         e.preventDefault();*/
/*         if(x < max_fields){ //max input box allowed*/
/*             x++; //text box increment*/
/*             $(wrapperAuthors).append(' <div><input type="text" class="form-control" name="authors[]"/><a href="#" class="remove_author ">Remove</a></div>'); //add input box*/
/*         }*/
/*     });*/
/*     */
/*     $(wrapperKeywords).on("click",".remove_field", function(e){ //user click on remove text*/
/*         e.preventDefault(); $(this).parent('div').remove(); x--;*/
/*     });*/
/* */
/*     $(wrapperAuthors).on("click",".remove_author", function(e){ //user click on remove text*/
/*         e.preventDefault(); $(this).parent('div').remove(); x--;*/
/*     });*/
/* });*/
/* */
/* */
/* */
/* */
/* */
/* </script>*/
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 			<h3>*/
/* 				Advanced Search*/
/* 			</h3>*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					*/
/* 					*/
/* 					<form class="form-horizontal" id="advancedSearchForm" method="POST" action="{{path('ijvr_advanced_search')}}">*/
/* <fieldset>*/
/* */
/* <!-- Form Name -->*/
/* */
/* */
/* */
/* */
/* <!-- Text input-->*/
/* <div class="form-group">*/
/*   <label class="col-md-4 control-label" for="textinput">Article</label>  */
/*   <div class="col-md-4">*/
/*   <input id="textinput" name="title" type="text"  class="form-control input-md">*/
/*   */
/*   </div>*/
/* </div>*/
/* */
/* <!-- Text input-->*/
/* <div class="form-group">*/
/*   <label class="col-md-4 control-label" for="textinput">Issue</label>  */
/*   <div class="col-md-4">*/
/*   <input id="textinput" name="issueTitle" type="text" class="form-control input-md">*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* <!-- Text input-->*/
/* <div class="form-group">*/
/*   <label class="col-md-4 control-label" for="textinput">Keywords</label>  */
/*   <div class="col-md-4 input_fields_wrap_keywords">*/
/*  */
/* <button class="add_field_button btn btn-default glyphicon glyphicon-plus btn-xs">Add More keywords</button>*/
/*   <input id="textinput3" name="keywords[]" type="text" class="form-control input-md"><br>*/
/*   */
/*   </div>*/
/* */
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-md-4 control-label" for="textinput">Authors</label>  */
/*   <div class="col-md-4 input_fields_wrap_authors">*/
/*  */
/* <button class="add_author_button btn btn-default glyphicon glyphicon-plus btn-xs">Add More Authors</button>*/
/*   <input id="textinput4" name="authors[]" type="text" class="form-control input-md"><br>*/
/*   */
/*   </div>*/
/* */
/* */
/* */
/* </div>*/
/* <div class="form-group">*/
/*   <label class="col-md-4 control-label" for="textinput"></label>  */
/*   <div class="col-md-4">*/
/*   <button id="submitBtn" name="textinput" type="submit" class="btn btn-default">Search </button>*/
/*     */
/*   </div>*/
/* </div>*/
/* */
/* </fieldset>*/
/* </form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* console.log($("#subhmitBtn"))*/
/* $("#submitBtn").click(function(event) {*/
/* console.log($('#textinput3').val())*/
/*   */
/*     */
/*     var $nonempty = $('.form-control').filter(function() {*/
/*     return this.value != ''*/
/*   });*/
/* */
/*   if ($nonempty.length == 0) {*/
/*     */
/*      event.preventDefault();*/
/*   }*/
/*   */
/*        */
/*     */
/* });*/
/* */
/* */
/* </script>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
