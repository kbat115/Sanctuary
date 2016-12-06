<?php

/* @sitesplat_snappy/event/viewtopic_body_postrow_post_content_footer.html */
class __TwigTemplate_ac9e267cc5d7e17425898e5e5a274888e2d0969a34bad42b07ec94edef0d2e7b extends Twig_Template
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
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null))) {
            // line 2
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_QUOTE", array())) {
                // line 3
                echo "<div id=\"message_";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
                echo "\" style=\"display:none\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "DECODED_MESSAGE", array());
                echo "</div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_snappy/event/viewtopic_body_postrow_post_content_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }
}
