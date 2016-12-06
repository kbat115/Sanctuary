<?php

/* @sitesplat_flatbootsminicms/event/call_to_action_body_instead.html */
class __TwigTemplate_78d97ca0873c47a9a7c8066431c2109469f8c8eed216224c52559cf4f14a1002 extends Twig_Template
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
        if (((isset($context["CALL_ENABLED"]) ? $context["CALL_ENABLED"] : null) && (((isset($context["CALL_ONLY_REGISTERED"]) ? $context["CALL_ONLY_REGISTERED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) ||  !(isset($context["CALL_ONLY_REGISTERED"]) ? $context["CALL_ONLY_REGISTERED"] : null)))) {
            // line 2
            echo "\t<div class=\"mastbottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<p class=\"call-to-action\">";
            // line 6
            echo (isset($context["CALL_TEXT"]) ? $context["CALL_TEXT"] : null);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<a href=\"";
            // line 9
            echo (isset($context["CALL_LINK"]) ? $context["CALL_LINK"] : null);
            echo "\" class=\"btn btn-xl btn-danger pull-right\" title=\"\">";
            echo (isset($context["CALL_BUTTON_TEXT"]) ? $context["CALL_BUTTON_TEXT"] : null);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t\t
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/call_to_action_body_instead.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  27 => 6,  21 => 2,  19 => 1,);
    }
}
