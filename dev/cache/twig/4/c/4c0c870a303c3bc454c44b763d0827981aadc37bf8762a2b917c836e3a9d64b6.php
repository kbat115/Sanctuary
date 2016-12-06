<?php

/* @sitesplat_flatbootsminicms/event/viewtopic_body_postrow_post_after.html */
class __TwigTemplate_4c0c870a303c3bc454c44b763d0827981aadc37bf8762a2b917c836e3a9d64b6 extends Twig_Template
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
        if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_FIRST_ROW", array()) && ((isset($context["ADSENSE_TOPIC"]) ? $context["ADSENSE_TOPIC"] : null) != ""))) {
            // line 2
            echo "\t<div class=\"clearfix text-center\">";
            echo (isset($context["ADSENSE_TOPIC"]) ? $context["ADSENSE_TOPIC"] : null);
            echo "</div>
    <div class=\"space10\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/viewtopic_body_postrow_post_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
