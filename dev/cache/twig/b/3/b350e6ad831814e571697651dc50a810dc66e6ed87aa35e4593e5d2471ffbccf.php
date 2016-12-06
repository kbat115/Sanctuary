<?php

/* @sitesplat_flatbootsminicms/event/prefooter_instead.html */
class __TwigTemplate_b350e6ad831814e571697651dc50a810dc66e6ed87aa35e4593e5d2471ffbccf extends Twig_Template
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
        // line 1
        if ( !(isset($context["HIDE_FOOTER"]) ? $context["HIDE_FOOTER"] : null)) {
            // line 2
            echo "\t<section class=\"section-pre-footer\">
\t\t<div class=\"container center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-5 twitter\">
\t\t\t\t\t<div class=\"thumb\"><i class=\"fa fa-paw\"></i></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h3>";
            // line 8
            echo (isset($context["ABOUT_US_TITLE"]) ? $context["ABOUT_US_TITLE"] : null);
            echo "</h3>
\t\t\t\t\t\t<p>";
            // line 9
            echo (isset($context["ABOUT_US"]) ? $context["ABOUT_US"] : null);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5 col-sm-offset-2 twitter\">
\t\t\t\t\t<div class=\"thumb\"><i class=\"fa fa-twitter\"></i></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h3><a href=\"https://twitter.com/";
            // line 15
            echo (isset($context["TWITTER_SCREEN_NAME"]) ? $context["TWITTER_SCREEN_NAME"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("JOIN_US_TWITTER");
            echo "&nbsp;<small>@";
            echo (isset($context["TWITTER_SCREEN_NAME"]) ? $context["TWITTER_SCREEN_NAME"] : null);
            echo "</small></a></h3>
\t\t\t\t\t\t <div id=\"twitter-feed\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t <div class=\"section-bg\"></div>
\t</section>
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/prefooter_instead.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  33 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
