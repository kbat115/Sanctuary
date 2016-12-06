<?php

/* @sitesplat_flatbootsminicms/event/header_breadcrumb_before.html */
class __TwigTemplate_7e5abcf665c8839def6b08fb3ecbed2b91a4c104a7e6436ccb8dd6c64e2fb119 extends Twig_Template
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
        if (((isset($context["ADSENSE_HEADER"]) ? $context["ADSENSE_HEADER"] : null) != "")) {
            echo "<div class=\"clearfix text-center\">";
            echo (isset($context["ADSENSE_HEADER"]) ? $context["ADSENSE_HEADER"] : null);
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/header_breadcrumb_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
