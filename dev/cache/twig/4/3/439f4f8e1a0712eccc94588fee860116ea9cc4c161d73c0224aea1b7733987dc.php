<?php

/* @sitesplat_flatbootsminicms/event/footer_links_instead.html */
class __TwigTemplate_439f4f8e1a0712eccc94588fee860116ea9cc4c161d73c0224aea1b7733987dc extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "links", array()))) {
            // line 2
            echo "\t<ul class=\"list-inline footer-nav\">
\t\t";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["links"]) {
                // line 4
                echo "\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["links"], "URL", array());
                echo "\"";
                if ($this->getAttribute($context["links"], "EXTERNAL", array())) {
                    echo " target=\"_blank\"";
                }
                echo "><i class=\"";
                echo $this->getAttribute($context["links"], "ICON", array());
                echo "\"></i> ";
                echo $this->getAttribute($context["links"], "NAME", array());
                echo "</a></li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "\t</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/footer_links_instead.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
