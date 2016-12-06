<?php

/* @sitesplat_snappy/snappy_quickreply_editor.html */
class __TwigTemplate_443c2c1ad8451bec45f5210fb8c2abc4d4c86d8ceb31047412e9290620fe60ee extends Twig_Template
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
        echo "<div class=\"clearfix\">
\t<form role=\"form\" name=\"qr_postform\" id=\"qr_postform\" method=\"post\" action=\"";
        // line 2
        echo (isset($context["U_QR_ACTION"]) ? $context["U_QR_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
     <fieldset> 
\t\t<div class=\"row\">\t\t\t
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t  ";
        // line 7
        // line 8
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 9
        $location = "snappy_reply_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("snappy_reply_buttons.html", "@sitesplat_snappy/snappy_quickreply_editor.html", 9)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 10
        echo "\t\t\t\t";
        if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
            // line 11
            echo "\t\t\t\t <div class=\"space10\"></div>
\t\t\t\t <div id=\"quick_reply_smilies\" class=\"text-center\">
\t\t\t\t  ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 14
                echo "\t\t\t\t   <a href=\"#\" onclick=\"insert_text('";
                echo $this->getAttribute($context["smiley"], "A_SMILEY_CODE", array());
                echo "', true); return false;\"><img src=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_CODE", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_DESC", array());
                echo "\" /></a>
\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t  </div>
\t\t\t\t <div class=\"space10\"></div>
\t\t\t\t";
        }
        // line 19
        echo "                <div class=\"panel-qr\">
\t\t\t\t <input type=\"hidden\" name=\"subject\" id=\"subject\" value=\"";
        // line 20
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "\"/>
\t\t\t\t\t<label class=\"control-label sr-only\" for=\"";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("MESSAGE");
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("MESSAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                    ";
        // line 22
        echo "\t\t\t\t
\t\t\t\t\t<div id=\"quick_reply_message\" class=\"form-group qr-textarea\">
\t\t\t\t\t  <textarea class=\"form-control ccount\" rows=\"3\" placeholder=\"";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("MESSAGE_ENTER_PLACEHOLDER");
        echo "\" name=\"message\" id=\"message\"></textarea>
\t\t\t\t\t  <span class=\"label label-success snappy_saved hidden counter_right\">";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("SAVED");
        echo "</span>
\t\t\t\t\t  <a href=\"javascript:void(0)\" title=\"Clear local storage\" class=\"btn-clr\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t <div class=\"space10\"></div>
\t\t\t\t    <div class=\"text-center\">
\t\t\t\t\t  ";
        // line 30
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t              ";
        // line 31
        echo (isset($context["QR_HIDDEN_FIELDS"]) ? $context["QR_HIDDEN_FIELDS"] : null);
        echo "
\t\t              <button type=\"submit\" class=\"btn btn-default load\" disabled=\"disabled\" tabindex=\"7\" name=\"post\" value=\"";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("LOADING");
        echo "<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t\t              <button type=\"submit\" class=\"btn btn-default load\" disabled=\"disabled\" tabindex=\"6\" name=\"preview\" value=\"";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("FULL_EDITOR");
        echo "\" id=\"qr_full_editor\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("LOADING");
        echo "<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("FULL_EDITOR");
        echo "</button>
\t\t\t\t      <button onclick=\"document.getElementById('show_button').style.display = 'inline-block';\" class=\"btn btn-default\" type=\"button\" data-target=\".quick-reply\" data-toggle=\"collapse\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t    </div>
\t\t\t    </div>
            </div>
\t\t\t<div class=\"col-md-3\">
\t\t\t  <div class=\"panel-body snappy_options text-left\">
\t\t\t\t";
        // line 40
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            echo "<div><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
            echo (isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null);
            echo "><label class=\"icheck-control\" for=\"disable_bbcode\">";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
            echo "</label></div>";
        }
        // line 41
        echo "\t\t\t\t";
        if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
            echo "<div><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
            echo (isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null);
            echo "><label class=\"icheck-control\" for=\"disable_smilies\">";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
            echo "</label></div>";
        }
        // line 42
        echo "\t\t\t\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            echo "<div><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"><label class=\"icheck-control\" for=\"disable_magic_url\">";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
            echo "</label></div>";
        }
        // line 43
        echo "\t\t\t\t";
        if ((isset($context["S_SIG_ALLOWED"]) ? $context["S_SIG_ALLOWED"] : null)) {
            echo "<div><input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
            echo (isset($context["S_SIGNATURE_CHECKED"]) ? $context["S_SIGNATURE_CHECKED"] : null);
            echo "><label class=\"icheck-control\" for=\"attach_sig\">";
            echo $this->env->getExtension('phpbb')->lang("ATTACH_SIGNATURE");
            echo "</label></div>";
        }
        // line 44
        echo "\t\t\t\t";
        if ((isset($context["S_NOTIFY_ALLOWED"]) ? $context["S_NOTIFY_ALLOWED"] : null)) {
            echo "<div><input type=\"checkbox\" name=\"notify\" id=\"notify\"";
            echo (isset($context["S_NOTIFY_CHECKED"]) ? $context["S_NOTIFY_CHECKED"] : null);
            echo "><label class=\"icheck-control\" for=\"notify\">";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_REPLY");
            echo "</label></div>";
        }
        // line 45
        echo "\t\t\t\t";
        if ((isset($context["S_LOCK_TOPIC_ALLOWED"]) ? $context["S_LOCK_TOPIC_ALLOWED"] : null)) {
            echo "<div><input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
            echo (isset($context["S_LOCK_TOPIC_CHECKED"]) ? $context["S_LOCK_TOPIC_CHECKED"] : null);
            echo "><label class=\"icheck-control\" for=\"lock_topic\">";
            echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
            echo "</label></div>";
        }
        // line 46
        echo "\t\t\t\t";
        if ((isset($context["S_LOCK_POST_ALLOWED"]) ? $context["S_LOCK_POST_ALLOWED"] : null)) {
            echo "<div><input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"><label class=\"icheck-control\" for=\"lock_post\">";
            echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
            echo "[";
            echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
            echo "]</label></div>";
        }
        // line 47
        echo "\t     \t   ";
        // line 48
        echo "\t\t\t   </div>
\t\t\t</div>
\t\t</div>
\t </fieldset>
\t";
        // line 52
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_snappy', '__main__'));
        $this->env->loadTemplate('@sitesplat_snappy/event/quickreply_editor_panel_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        echo "  
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@sitesplat_snappy/snappy_quickreply_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 52,  205 => 48,  203 => 47,  194 => 46,  185 => 45,  176 => 44,  167 => 43,  160 => 42,  151 => 41,  143 => 40,  129 => 33,  121 => 32,  117 => 31,  113 => 30,  105 => 25,  101 => 24,  97 => 22,  90 => 21,  86 => 20,  83 => 19,  78 => 16,  59 => 14,  55 => 13,  51 => 11,  48 => 10,  36 => 9,  33 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }
}
