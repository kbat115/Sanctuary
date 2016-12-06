<?php

/* @sitesplat_snappy/event/viewtopic_body_post_buttons_before_absolute.html */
class __TwigTemplate_47ebbc62591ac1ccf711927d75c5ac1ffff8082e1bd34e5a8434e01537cb62ba extends Twig_Template
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
                echo "<div class=\"btn-group btn-group-sm btn-snappy hidden-xs\" role=\"group\">
 <a class=\"btn btn-sm btn-default\" href=\"javascript:void(0);\" onclick=\"addquote(";
                // line 4
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
                echo ", '";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR", array());
                echo "', '";
                echo addslashes($this->env->getExtension('phpbb')->lang("WROTE"));
                echo "');\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("QUOTE");
                echo " ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR", array());
                echo "\"><i class=\"fa fa-comment\"></i></a>
 <a class=\"btn btn-sm btn-default\" href=\"javascript:void(0);\" onclick=\"insert_text('[b]&#64;";
                // line 5
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR", array());
                echo "[/b], ', false);\" title=\"&#64;";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR", array());
                echo "\"><i class=\"icon-moon-email icon-moon-fx\"></i></a>
</div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_snappy/event/viewtopic_body_post_buttons_before_absolute.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
