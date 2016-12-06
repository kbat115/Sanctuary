<?php

/* @sitesplat_snappy/snappy_reply_buttons.html */
class __TwigTemplate_e04bd5bf15605df81c0994a6406cac4dfedb957b5cd34c2e42f1bb7e78f458cd extends Twig_Template
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
        echo "<script>
\tvar form_name = 'qr_postform';
\tvar text_name = 'message';
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 14
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_B_HELP"));
        echo "',
\t\ti: '";
        // line 15
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_I_HELP"));
        echo "',
\t\tu: '";
        // line 16
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_U_HELP"));
        echo "',
\t\tq: '";
        // line 17
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP"));
        echo "',
\t\tc: '";
        // line 18
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_C_HELP"));
        echo "',
\t\tl: '";
        // line 19
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_L_HELP"));
        echo "',
\t\to: '";
        // line 20
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_O_HELP"));
        echo "',
\t\tp: '";
        // line 21
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_P_HELP"));
        echo "',
\t\tw: '";
        // line 22
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_W_HELP"));
        echo "',
\t\ta: '";
        // line 23
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_A_HELP"));
        echo "',
\t\ts: '";
        // line 24
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_S_HELP"));
        echo "',
\t\tf: '";
        // line 25
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_F_HELP"));
        echo "',
\t\ty: '";
        // line 26
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_Y_HELP"));
        echo "',
\t\td: '";
        // line 27
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_D_HELP"));
        echo "'
\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 29
            echo "\t\t,cb_";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ": '";
            echo $this->getAttribute($context["custom_tags"], "A_BBCODE_HELPLINE", array());
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t}
</script>
<script src=\"";
        // line 33
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/editor.js\"></script>

";
        // line 35
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 36
            echo "<div class=\"space10\"></div>
<div class=\"text-center\" role=\"toolbar\">
    <div class=\"btn-group\">
         <a href=\"#\" class=\"btn btn-default\" accesskey=\"b\" name=\"addbbcode0\" onclick=\"bbstyle(0); return false;\"  title=\"";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP");
            echo "\"><i class=\"fa fa-bold\"></i></a>
         <a href=\"#\" class=\"btn btn-default\" accesskey=\"i\" name=\"addbbcode2\" onclick=\"bbstyle(2); return false;\" title=\"";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP");
            echo "\"><i class=\"fa fa-italic\"></i></a>
         <a href=\"#\" class=\"btn btn-default\" accesskey=\"u\" name=\"addbbcode4\" onclick=\"bbstyle(4); return false;\" title=\"";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP");
            echo "\"><i class=\"fa fa-underline\"></i></a>
\t</div>
\t
\t<div class=\"btn-group hidden-xs\">
         <a href=\"#\" class=\"btn btn-default\" accesskey=\"l\" name=\"addbbcode10\" onclick=\"bbstyle(10); return false;\" title=\"";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP");
            echo "\"><i class=\"fa fa-list\"></i></a>
         <a href=\"#\" class=\"btn btn-default\" accesskey=\"o\" name=\"addbbcode12\" onclick=\"bbstyle(12); return false;\" title=\"";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("BBCODE_O_HELP");
            echo "\"><i class=\"fa fa-list-ol\"></i></a>
         <a href=\"#\" class=\"btn btn-default\" accesskey=\"y\" name=\"addlistitem\" onclick=\"bbstyle(-1); return false;\" title=\"";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("BBCODE_LISTITEM_HELP");
            echo "\"><i class=\"fa fa-asterisk\"></i></a>
    </div>

\t<div class=\"btn-group\">
\t    <a href=\"#\" class=\"btn btn-default\" accesskey=\"c\" name=\"addbbcode8\" onclick=\"bbstyle(8); return false;\" title=\"";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP");
            echo "\"><i class=\"fa fa-code\"></i></a>
        ";
            // line 52
            if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
                // line 53
                echo "\t     <a href=\"#\" class=\"btn btn-default\" accesskey=\"q\" name=\"addbbcode6\" onclick=\"bbstyle(6); return false;\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP");
                echo "\"><i class=\"fa fa-comment\"></i></a>
\t    ";
            }
            // line 54
            echo " 
\t\t";
            // line 55
            if ((isset($context["S_BBCODE_IMG"]) ? $context["S_BBCODE_IMG"] : null)) {
                // line 56
                echo "\t     <a href=\"#\" class=\"btn btn-default\" accesskey=\"p\" name=\"addbbcode14\" onclick=\"bbstyle(14); return false;\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP");
                echo "\"><i class=\"fa fa-picture-o\"></i></a>
\t    ";
            }
            // line 58
            echo "\t    ";
            if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                // line 59
                echo "\t     <a href=\"#\" class=\"btn btn-default\" accesskey=\"w\" name=\"addbbcode16\" onclick=\"bbstyle(16); return false;\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP");
                echo "\"><i class=\"fa fa-link\"></i></a>
\t\t";
            }
            // line 61
            echo "\t</div>
\t
\t<div class=\"btn-group hidden-xs\">
\t";
            // line 64
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 65
                echo "\t";
                if (($this->getAttribute($context["custom_tags"], "BBCODE_TAG", array()) == "youtube")) {
                    // line 66
                    echo "\t<a href=\"#\" class=\"btn btn-default\" name=\"addbbcode";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "\" onclick=\"bbstyle(";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "); return false;\" title=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                    echo "\"><i class=\"fa fa-youtube\"></i></a>
\t";
                }
                // line 68
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t
\t";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 71
                echo "\t";
                if (($this->getAttribute($context["custom_tags"], "BBCODE_TAG", array()) == "c")) {
                    // line 72
                    echo "\t<a href=\"#\" class=\"btn btn-default\" name=\"addbbcode";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "\" onclick=\"bbstyle(";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "); return false;\" title=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                    echo "\"><i class=\"fa fa-text-width\"></i></a>
\t";
                }
                // line 74
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "   </div>

\t<select class=\"selectpicker hidden-xs\" data-style=\"btn-default\" data-width=\"auto\" name=\"addbbcode20\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
            // line 77
            echo $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP");
            echo "\">
\t\t<option value=\"50\">";
            // line 78
            echo $this->env->getExtension('phpbb')->lang("FONT_TINY");
            echo "</option>
\t\t<option value=\"85\">";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("FONT_SMALL");
            echo "</option>
\t\t<option data-icon=\"fa fa-font\" value=\"100\" selected=\"selected\">";
            // line 80
            echo $this->env->getExtension('phpbb')->lang("FONT_NORMAL");
            echo "</option>
\t\t";
            // line 81
            if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 150))) {
                // line 82
                echo "\t\t\t<option value=\"150\">";
                echo $this->env->getExtension('phpbb')->lang("FONT_LARGE");
                echo "</option>
\t\t\t";
                // line 83
                if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 200))) {
                    // line 84
                    echo "\t\t\t\t<option value=\"200\">";
                    echo $this->env->getExtension('phpbb')->lang("FONT_HUGE");
                    echo "</option>
\t\t\t";
                }
                // line 86
                echo "\t\t";
            }
            // line 87
            echo "\t</select>
\t
\t<select class=\"selectpicker hidden-xs\" data-style=\"btn-default\" data-width=\"auto\" name=\"addbbcode_custom\" onchange=\"bbstyle(this.form.addbbcode_custom.options[this.form.addbbcode_custom.selectedIndex].value*1);this.form.addbbcode_custom.selectedIndex = 0;\">
\t  <option data-icon=\"fa fa-cog\" value=\"100\" selected=\"selected\">BBCodes</option>
      ";
            // line 91
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 92
                echo "      <option value=\"";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                echo "\">";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
                echo "</option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "   
    </select>
\t 
\t<button type=\"button\" class=\"btn btn-default\" value=\"";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES");
            echo "\" id=\"add_files\"><i class=\"fa fa-cloud-upload\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES");
            echo "</button>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_snappy/snappy_reply_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 96,  309 => 93,  296 => 92,  292 => 91,  286 => 87,  283 => 86,  277 => 84,  275 => 83,  270 => 82,  268 => 81,  264 => 80,  260 => 79,  256 => 78,  252 => 77,  248 => 75,  242 => 74,  232 => 72,  229 => 71,  225 => 70,  222 => 69,  216 => 68,  206 => 66,  203 => 65,  199 => 64,  194 => 61,  188 => 59,  185 => 58,  179 => 56,  177 => 55,  174 => 54,  168 => 53,  166 => 52,  162 => 51,  155 => 47,  151 => 46,  147 => 45,  140 => 41,  136 => 40,  132 => 39,  127 => 36,  125 => 35,  120 => 33,  116 => 31,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  29 => 9,  19 => 1,);
    }
}
