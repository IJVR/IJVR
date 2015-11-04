<?php

/* IJVRPlatformBundle:Default:about.html.twig */
class __TwigTemplate_9591d59e24fa1ec35ac8a2728cca9a6ecfef8c08ed5fc675611647e7a664e5dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "IJVRPlatformBundle:Default:about.html.twig", 1);
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
        $__internal_0bf9f4d78022f0189f0cfc471fadc9c9ff2454ab7a3724a35f48768685f55569 = $this->env->getExtension("native_profiler");
        $__internal_0bf9f4d78022f0189f0cfc471fadc9c9ff2454ab7a3724a35f48768685f55569->enter($__internal_0bf9f4d78022f0189f0cfc471fadc9c9ff2454ab7a3724a35f48768685f55569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IJVRPlatformBundle:Default:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf9f4d78022f0189f0cfc471fadc9c9ff2454ab7a3724a35f48768685f55569->leave($__internal_0bf9f4d78022f0189f0cfc471fadc9c9ff2454ab7a3724a35f48768685f55569_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_804519c132e9d6dcb3c743447af6d07b2fb7cd3aea73e193fb3486b507732a73 = $this->env->getExtension("native_profiler");
        $__internal_804519c132e9d6dcb3c743447af6d07b2fb7cd3aea73e193fb3486b507732a73->enter($__internal_804519c132e9d6dcb3c743447af6d07b2fb7cd3aea73e193fb3486b507732a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_804519c132e9d6dcb3c743447af6d07b2fb7cd3aea73e193fb3486b507732a73->leave($__internal_804519c132e9d6dcb3c743447af6d07b2fb7cd3aea73e193fb3486b507732a73_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd475311fc0c0ee012307822ba5ce216115556d52220bf0922ca3260d3c35a4f = $this->env->getExtension("native_profiler");
        $__internal_fd475311fc0c0ee012307822ba5ce216115556d52220bf0922ca3260d3c35a4f->enter($__internal_fd475311fc0c0ee012307822ba5ce216115556d52220bf0922ca3260d3c35a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
<h1> About Us </h1>

<h2> Editor-In-Chief And Editorial Office </h2>
<p>IPI Press is very pleased to announce that Dr. Cedric Buche of the Brest National Engineering School (ENIB) located at Brest, France, has been chosen as the new Editor-in-Chief of the IJVR. 
His institution will become the new host of the IJVR, and the new editorial office will be located in Brest. Authors wishing to submit papers to be reviewed for publication in the IJVR can be sent to him at buche@enib.fr. </p>

<h2> Mission Statement </h2>
<p>The original statement of purpose for the IJVR developed in 1995 which still holds true today was: 
\"The International Journal of Virtual Reality is a multimedia publication dedicated to the cooperative development and application of diverse technologies associated with virtual reality. It is designed to disseminate relevant new information to professionals in all aspects of the field using the latest in publishing technology.\"
<br/>
Over time, the VR field has become ever-increasingly divided into many subfields, many of which now have their own specialized journals. Over the last six years the Editor-in-Chief Prof. Zhigeng Pan, chose to maintain a broad interpretation of the definition of the term \"virtual reality\", and thus an equally broad range of subjects to publish in the IJVR. After recent reconsideration of the scope of the IJVR, IPI Press has decided to follow the lead of Prof. Pan and while keeping the name \"Virtual Realiy\" in the title of the journal for its historical significance, continue to maintain a very broad definition of the term \"Virtual Reality\".
<br/>
The term \"International\" in the title continues to be an emphasis, but even more so in the current world of advanced international telecommunications and ubiquitus computer technologies. The IJVR will continue to emphasize its international character by encouraging computer scientists in underdeveloped nations and nations where English is a second language to actively participate as authors, as associates, and as subscribers. The term \"International\" in the title continues to be an emphasis, but even more so in the current world of advanced international telecommunications and ubiquitus computer technologies. The IJVR will continue to emphasize its international character by encouraging computer scientists in underdeveloped nations and nations where English is a second language to actively participate as authors, as associates, and as subscribers. </p>

<h2>History</h2>
<p>The IJVR journal has evolved as the potential for this technology has evolved over the last 30 years. We have been in existence since 1995, and were headquartered in Hangzhou, China, from 2006 to 2012. As founder and original Editor-in-Chief of the IJVR in the USA in 1995, I (Richard Blade, Ph.D.) want to personally commend and thank the Chinese editorial office under Prof. Zhigeng Pan, the EiC, for their outstanding job of managing the website, printing, and mailing the IJVR from 2006 through 2012. Being subsidized by various sources, the website remained open to the public and the most of the Asian institutional print subscribers were not charged for their subscriptions. Even the international subscribers of the print copy were charged relatively little compared to comparable computer science journals. Now that the IJVR is hosted in France, the policy is a full access online.

</p>



</div>
";
        
        $__internal_fd475311fc0c0ee012307822ba5ce216115556d52220bf0922ca3260d3c35a4f->leave($__internal_fd475311fc0c0ee012307822ba5ce216115556d52220bf0922ca3260d3c35a4f_prof);

    }

    public function getTemplateName()
    {
        return "IJVRPlatformBundle:Default:about.html.twig";
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
/* */
/* <div class="container">*/
/* <h1> About Us </h1>*/
/* */
/* <h2> Editor-In-Chief And Editorial Office </h2>*/
/* <p>IPI Press is very pleased to announce that Dr. Cedric Buche of the Brest National Engineering School (ENIB) located at Brest, France, has been chosen as the new Editor-in-Chief of the IJVR. */
/* His institution will become the new host of the IJVR, and the new editorial office will be located in Brest. Authors wishing to submit papers to be reviewed for publication in the IJVR can be sent to him at buche@enib.fr. </p>*/
/* */
/* <h2> Mission Statement </h2>*/
/* <p>The original statement of purpose for the IJVR developed in 1995 which still holds true today was: */
/* "The International Journal of Virtual Reality is a multimedia publication dedicated to the cooperative development and application of diverse technologies associated with virtual reality. It is designed to disseminate relevant new information to professionals in all aspects of the field using the latest in publishing technology."*/
/* <br/>*/
/* Over time, the VR field has become ever-increasingly divided into many subfields, many of which now have their own specialized journals. Over the last six years the Editor-in-Chief Prof. Zhigeng Pan, chose to maintain a broad interpretation of the definition of the term "virtual reality", and thus an equally broad range of subjects to publish in the IJVR. After recent reconsideration of the scope of the IJVR, IPI Press has decided to follow the lead of Prof. Pan and while keeping the name "Virtual Realiy" in the title of the journal for its historical significance, continue to maintain a very broad definition of the term "Virtual Reality".*/
/* <br/>*/
/* The term "International" in the title continues to be an emphasis, but even more so in the current world of advanced international telecommunications and ubiquitus computer technologies. The IJVR will continue to emphasize its international character by encouraging computer scientists in underdeveloped nations and nations where English is a second language to actively participate as authors, as associates, and as subscribers. The term "International" in the title continues to be an emphasis, but even more so in the current world of advanced international telecommunications and ubiquitus computer technologies. The IJVR will continue to emphasize its international character by encouraging computer scientists in underdeveloped nations and nations where English is a second language to actively participate as authors, as associates, and as subscribers. </p>*/
/* */
/* <h2>History</h2>*/
/* <p>The IJVR journal has evolved as the potential for this technology has evolved over the last 30 years. We have been in existence since 1995, and were headquartered in Hangzhou, China, from 2006 to 2012. As founder and original Editor-in-Chief of the IJVR in the USA in 1995, I (Richard Blade, Ph.D.) want to personally commend and thank the Chinese editorial office under Prof. Zhigeng Pan, the EiC, for their outstanding job of managing the website, printing, and mailing the IJVR from 2006 through 2012. Being subsidized by various sources, the website remained open to the public and the most of the Asian institutional print subscribers were not charged for their subscriptions. Even the international subscribers of the print copy were charged relatively little compared to comparable computer science journals. Now that the IJVR is hosted in France, the policy is a full access online.*/
/* */
/* </p>*/
/* */
/* */
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* */
