<?php

/* ucp_profile_avatar.html */
class __TwigTemplate_edf6c0be07f1931f32bfed4505c34e9acb6478d8a03295abf108dd1b0367a39d extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_profile_avatar.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((( !(isset($context["S_CUSTOM_DRIVER"]) ? $context["S_CUSTOM_DRIVER"] : null) ||  !(isset($context["S_CUSTOM_GROUP_REQUIRED"]) ? $context["S_CUSTOM_GROUP_REQUIRED"] : null)) || ((isset($context["S_CUSTOM_AVATAR_GROUP"]) ? $context["S_CUSTOM_AVATAR_GROUP"] : null) && (isset($context["S_CUSTOM_SOURCE"]) ? $context["S_CUSTOM_SOURCE"] : null)))) {
            // line 4
            echo "\t<form id=\"ucp\" method=\"post\" action=\"";
            echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
            echo "\"";
            echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
            echo ">
\t";
            // line 5
            $location = "ucp_avatar_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_avatar_options.html", "ucp_profile_avatar.html", 5)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 6
            echo "\t";
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t";
            // line 7
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</form>
";
        } else {
            // line 10
            echo "\t<div class=\"well\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("NO_CUSTOM_AVATAR");
            echo "</strong></div>
";
        }
        // line 12
        echo "
";
        // line 13
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_avatar.html", 13)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_avatar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  66 => 10,  60 => 7,  55 => 6,  43 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
