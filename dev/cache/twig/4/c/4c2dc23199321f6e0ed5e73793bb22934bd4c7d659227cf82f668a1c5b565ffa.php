<?php

/* confirm_bbcode.html */
class __TwigTemplate_4c2dc23199321f6e0ed5e73793bb22934bd4c7d659227cf82f668a1c5b565ffa extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "confirm_bbcode.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"confirm\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
        echo "\">
\t<div class=\"errorbox\">
\t\t<h3>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("WARNING");
        echo "</h3>
\t\t<p>";
        // line 6
        echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
        echo "</p>
\t</div>
<fieldset>


\t";
        // line 11
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "

\t<div style=\"text-align: center;\">
\t\t<input type=\"submit\" name=\"confirm\" value=\"";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "\" class=\"button2\" />&nbsp; 
\t\t<input type=\"submit\" name=\"cancel\" value=\"";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("CANCEL");
        echo "\" class=\"button2\" />
\t</div>

</fieldset>
\t\t
</form>

";
        // line 22
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "confirm_bbcode.html", 22)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "confirm_bbcode.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  61 => 15,  57 => 14,  51 => 11,  43 => 6,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
