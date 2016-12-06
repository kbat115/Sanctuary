<?php

/* @sitesplat_flatbootsminicms/event/overall_header_stylesheets_after.html */
class __TwigTemplate_b6db6df1cf19189c87faa3c57cdf25df08cdee46d72691d7b4433480d280e533 extends Twig_Template
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
        $asset_file = "@sitesplat_flatbootsminicms/minicms.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('14');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        // line 2
        echo "
";
        // line 3
        if ((isset($context["BACKGROUND_IMAGE_EXIST"]) ? $context["BACKGROUND_IMAGE_EXIST"] : null)) {
            // line 4
            echo "\t<style>
\t\tbody {
\t\t\tbackground: url(\"";
            // line 6
            echo (isset($context["T_IMAGES_PATH"]) ? $context["T_IMAGES_PATH"] : null);
            echo "../ext/sitesplat/flatbootsminicms/images/bg/";
            echo (isset($context["BACKGROUND_FILENAME"]) ? $context["BACKGROUND_FILENAME"] : null);
            echo "\") repeat scroll 0 0 #999999;
\t\t}
\t</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/overall_header_stylesheets_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  38 => 4,  36 => 3,  33 => 2,  19 => 1,);
    }
}
