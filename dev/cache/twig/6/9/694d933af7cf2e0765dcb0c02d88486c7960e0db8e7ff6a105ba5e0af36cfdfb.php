<?php

/* @sitesplat_flatbootsminicms/event/viewtopic_body_postrow_post_before.html */
class __TwigTemplate_694d933af7cf2e0765dcb0c02d88486c7960e0db8e7ff6a105ba5e0af36cfdfb extends Twig_Template
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
        if ((((isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null) == "alternate") && ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_ROW_COUNT", array()) % 2 == 1))) {
            // line 2
            echo "\t<style>
\t\t.alt-odd .side-segment {margin-left: 80px;margin-right: 0;}
\t\t.alt-odd-time {margin-left: 14px;}
\t\t.alt-odd .avatar-over {margin-left: -5px;}
\t</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/viewtopic_body_postrow_post_before.html";
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
