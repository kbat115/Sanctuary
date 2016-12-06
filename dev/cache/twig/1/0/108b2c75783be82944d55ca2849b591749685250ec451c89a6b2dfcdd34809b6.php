<?php

/* @sitesplat_snappy/event/quickreply_editor_panel_after.html */
class __TwigTemplate_108b2c75783be82944d55ca2849b591749685250ec451c89a6b2dfcdd34809b6 extends Twig_Template
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
        echo "<div class=\"clearfix text-left\" id=\"attach-panel\">
\t<div id=\"attach-panel-multi\">
\t</div>
\t<div id=\"file-list-container\" class=\"";
        // line 4
        if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attach_row", array()))) {
            echo " hidden";
        }
        echo "\">
\t <div id=\"file-list\">
\t\t<div class=\"attach-row panel panel-default panel-body\" id=\"attach-row-tpl\">
\t\t   <button type=\"button\" value=\"";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("DELETE_FILE");
        echo "\" class=\"close file-delete\"><i class=\"awe-remove-circle\"></i></button>\t
\t\t\t<div class=\"attach-name\">  
\t\t\t\t<span class=\"pull-left file-name text-overflow\"></span>
\t\t\t\t <span class=\"file-size\"></span>
\t\t\t\t  <span class=\"file-status\"></span>
\t\t\t\t   <button type=\"button\" value=\"";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("PLACE_INLINE");
        echo "\" class=\"btn-link hidden file-inline-bbcode\">";
        echo $this->env->getExtension('phpbb')->lang("PLACE_INLINE");
        echo "</button>
\t\t\t\t<div class=\"attach-comment\">
\t\t\t\t <textarea rows=\"1\" maxlength=\"45\" class=\"inputbox form-control form-ghost form-plupload\" placeholder=\"";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("ADD_DESCRIPTION");
        echo "\"></textarea>
\t\t\t\t</div>
\t\t    </div>
\t\t\t<span class=\"file-progress progress\">
\t\t\t <span class=\"file-progress-bar progress-bar progress-bar-info progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\"></span>
\t\t\t</span>\t\t\t\t
\t\t</div>
\t </div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@sitesplat_snappy/event/quickreply_editor_panel_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  40 => 12,  32 => 7,  24 => 4,  19 => 1,);
    }
}
