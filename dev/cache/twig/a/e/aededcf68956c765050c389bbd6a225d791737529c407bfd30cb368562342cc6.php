<?php

/* @sitesplat_flatbootsminicms/event/call_to_action_before.html */
class __TwigTemplate_aededcf68956c765050c389bbd6a225d791737529c407bfd30cb368562342cc6 extends Twig_Template
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
        if (((isset($context["ADSENSE_FOOTER"]) ? $context["ADSENSE_FOOTER"] : null) != "")) {
            echo "<div class=\"clearfix text-center\">";
            echo (isset($context["ADSENSE_FOOTER"]) ? $context["ADSENSE_FOOTER"] : null);
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/call_to_action_before.html";
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
