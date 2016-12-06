<?php

/* @sitesplat_flatbootsminicms/event/viewtopic_body_postrow_before.html */
class __TwigTemplate_d8bede1019e6648508cf4a981310de4f3cd1f806b7f408000e7e07be9da7dd28 extends Twig_Template
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
        if (((isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null) != "left")) {
            // line 2
            echo "\t<style>
\t\t# ";
            // line 3
            echo (isset($context["MINI_PROFILE_POSITION"]) ? $context["MINI_PROFILE_POSITION"] : null);
            echo "
\t\t.forum-answer .side-segment {margin-right: 80px;margin-left: 0;}
\t\t.avatar-over {margin-left: 10px; margin-right: -15px;}
\t\t.prof-right {margin-right: 0;}
\t</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/viewtopic_body_postrow_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
