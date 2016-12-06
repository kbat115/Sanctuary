<?php

/* @dmzx_prettytopic/event/topiclist_row_prepend.html */
class __TwigTemplate_ebc50da9448e0867950ca71b80a7a984325ba48e5cc5f084e0d2ecd902d3a357 extends Twig_Template
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
        if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "TOPIC_TYPE", array())) {
            // line 2
            if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "S_POST_GLOBAL", array())) {
                echo "<span class=\"label label-danger pull-right hidden-phone\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_GLOBAL");
                echo "</span>";
            }
            // line 3
            if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "S_POST_ANNOUNCE", array())) {
                echo "<span class=\"label label-warning pull-right hidden-phone\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_ANNOUNCEMENT");
                echo "</span>";
            }
            // line 4
            if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "S_POST_STICKY", array())) {
                echo "<span class=\"label label-info pull-right hidden-phone\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_STICKY");
                echo "</span>";
            }
            // line 5
            if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "S_HAS_POLL", array())) {
                echo "<span class=\"label label-success pull-right hidden-phone\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_POLL");
                echo "</span>";
            }
            // line 6
            if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "S_TOPIC_LOCKED", array())) {
                echo "<span class=\"label label-primary pull-right hidden-phone\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOCKED");
                echo "</span>";
            }
            // line 7
            if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "S_TOPIC_MOVED", array())) {
                echo "<span class=\"label label-primary pull-right hidden-phone\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_MOVED");
                echo "</span>";
            }
            // line 8
            if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "S_TOPIC_LOGS", array())) {
                echo "<span class=\"label label-info pull-right hidden-phone\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOGS");
                echo "</span>";
            }
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_prettytopic/event/topiclist_row_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 7,  45 => 6,  39 => 5,  33 => 4,  27 => 3,  21 => 2,  19 => 1,);
    }
}
