<?php

/* posting_editor.html */
class __TwigTemplate_33a143e82a69ef92c9ef79d18fb1303c014e82ce20a4678ae0180d9337b78856 extends Twig_Template
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
        echo "<fieldset>
\t";
        // line 2
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            // line 3
            echo "\t<div class=\"alert alert-info fade in\">
       ";
            // line 4
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "
    </div>
\t";
        }
        // line 7
        echo "
\t";
        // line 8
        if (((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null) || (isset($context["S_SHOW_PM_ICONS"]) ? $context["S_SHOW_PM_ICONS"] : null))) {
            // line 9
            echo "\t<div class=\"hidden-xs\">
\t <div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"icon\">";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("ICON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t <div class=\"controls controls-row\"> 
      <div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\"><label for=\"icon\">";
            // line 13
            if ((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_PM_ICON");
            }
            echo "</label></div>
     ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_icon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" ";
                echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                echo " tabindex=\"1\"><label for=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                echo "\" alt=\"\" title=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_NAME", array());
                echo "\" /></label></div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t </div> 
\t </div>
\t</div>
\t";
        }
        // line 19
        echo "
\t";
        // line 20
        if (( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && (isset($context["S_DISPLAY_USERNAME"]) ? $context["S_DISPLAY_USERNAME"] : null))) {
            // line 21
            echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"username\">";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
\t<div class=\"input-icon left\">
\t  <i class=\"fa fa-user\"></i>
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"\" tabindex=\"1\" name=\"username\" id=\"username\" value=\"";
            // line 26
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "\">
\t </div> 
\t</div> 
\t</div>
\t";
        }
        // line 31
        echo "
    ";
        // line 32
        // line 33
        echo "
\t";
        // line 34
        if ((((isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null) || (isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) || (isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            // line 35
            echo "\t<div class=\"control-group\"> 
\t<label class=\"control-label\" for=\"subject\">";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t<div class=\"row\">
\t <div class=\"";
            // line 38
            if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
                echo "col-md-12";
            } else {
                echo "col-xs-12 col-lg-8";
            }
            echo "\">
     ";
            // line 39
            echo "  
\t   <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "\" name=\"subject\" id=\"subject\" maxlength=\"";
            if ((isset($context["S_NEW_MESSAGE"]) ? $context["S_NEW_MESSAGE"] : null)) {
                echo "100";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo (isset($context["DRAFT_SUBJECT"]) ? $context["DRAFT_SUBJECT"] : null);
            echo "\">
\t ";
            // line 41
            // line 42
            echo "\t </div> 
\t </div> 
\t </div>
\t ";
            // line 45
            if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
                // line 46
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 47
                echo "\t\t";
                $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "posting_editor.html", 47)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 48
                echo "\t ";
            }
            // line 49
            echo "\t";
        }
        // line 50
        echo "
    ";
        // line 51
        // line 52
        echo "\t
\t ";
        // line 53
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 53)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 54
        echo "
\t
\t <div class=\"space10\"></div>

 <div class=\"row\">
\t";
        // line 59
        // line 60
        echo "    <div class=\"";
        if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
            echo "col-md-12";
        } else {
            echo "col-md-8";
        }
        echo "\"> 
      <span id=\"dragNdrop\">
\t   <textarea class=\"form-control\" rows=\"10\" ";
        // line 62
        if ((((isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null) &&  !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) &&  !(isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            echo "name=\"signature\" id=\"signature\" ";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" placeholder=\"\" class=\"form-control\">";
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo (isset($context["DRAFT_MESSAGE"]) ? $context["DRAFT_MESSAGE"] : null);
        echo (isset($context["IMGUR_IMAGE"]) ? $context["IMGUR_IMAGE"] : null);
        echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
        echo "</textarea>
\t  <span> 
\t</div>
\t";
        // line 65
        // line 66
        echo "
\t<div class=\"col-md-4\">
    ";
        // line 68
        echo "\t
\t\t
\t\t";
        // line 70
        if (((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array())))) {
            // line 71
            echo "\t\t<strong>";
            echo $this->env->getExtension('phpbb')->lang("SMILIES");
            echo "
\t\t  ";
            // line 72
            if (((isset($context["S_SHOW_SMILEY_LINK"]) ? $context["S_SHOW_SMILEY_LINK"] : null) && (isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null))) {
                // line 73
                echo "\t\t\t<a class=\"btn-link btn-xs\" href=\"";
                echo (isset($context["U_MORE_SMILIES"]) ? $context["U_MORE_SMILIES"] : null);
                echo "\" onclick=\"popup(this.href, 450, 350, '_phpbbsmilies'); return false;\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MORE_SMILIES");
                echo "\"><i class=\"fa fa-plus\"></i></a>
\t\t  ";
            }
            // line 75
            echo "\t\t</strong><br />
\t <div class=\"hidden-xs\">
\t\t\t";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 78
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
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
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t\t";
        }
        // line 81
        echo "    ";
        // line 82
        echo "\t\t";
        if ((isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null)) {
            // line 83
            echo "\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()))) {
                echo "<hr />";
            }
            // line 84
            echo "\t\t";
            echo (isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null);
            echo "<br />
\t\t";
            // line 85
            if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                // line 86
                echo "\t\t\t";
                echo (isset($context["IMG_STATUS"]) ? $context["IMG_STATUS"] : null);
                echo "<br />
\t\t\t";
                // line 87
                echo (isset($context["FLASH_STATUS"]) ? $context["FLASH_STATUS"] : null);
                echo "<br />
\t\t\t";
                // line 88
                echo (isset($context["URL_STATUS"]) ? $context["URL_STATUS"] : null);
                echo "<br />
\t\t";
            }
            // line 90
            echo "\t\t";
            echo (isset($context["SMILIES_STATUS"]) ? $context["SMILIES_STATUS"] : null);
            echo "
\t\t";
        }
        // line 92
        echo "\t\t";
        if (((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null) || (isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null))) {
            // line 93
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
                echo "<hr />";
            }
            // line 94
            echo "\t\t\t";
            if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
                echo "<strong><a href=\"";
                echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 95
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
                echo "<strong><a href=\"#topic-review\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 96
            echo "\t\t";
        }
        // line 97
        echo "\t </div>
\t</div>
 </div>
</fieldset>


";
        // line 103
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "EXTRA_POSTING_OPTIONS", array()) == 1)) {
            // line 104
            echo "
\t";
            // line 105
            if ( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
                // line 106
                echo "\t</div>
\t";
            }
            // line 108
            echo "

\t";
            // line 110
            if (( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null) && ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1))) {
                // line 111
                echo "\t\t<fieldset class=\"form-actions\">
\t\t\t";
                // line 112
                echo (isset($context["S_HIDDEN_ADDRESS_FIELD"]) ? $context["S_HIDDEN_ADDRESS_FIELD"] : null);
                echo "
\t\t\t";
                // line 113
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 114
                // line 115
                echo "\t\t\t";
                if ((isset($context["S_HAS_DRAFTS"]) ? $context["S_HAS_DRAFTS"] : null)) {
                    echo "<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOADING");
                    echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                    echo "\" onclick=\"load_draft = true;\"><span class=\"hidden-xs\">";
                    echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                    echo "</span><i class=\"visible-xs glyphicon glyphicon-floppy-open fa-btn-fx\"></i></button>";
                }
                // line 116
                echo "\t\t\t";
                if ((isset($context["S_SAVE_ALLOWED"]) ? $context["S_SAVE_ALLOWED"] : null)) {
                    echo "<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb')->lang("SAVING");
                    echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DRAFT");
                    echo "\"><span class=\"hidden-xs\">";
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DRAFT");
                    echo "</span><i class=\"visible-xs glyphicon glyphicon-floppy-saved fa-btn-fx\"></i></button>";
                }
                // line 117
                echo "\t\t\t<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb')->lang("LOADING");
                echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PREVIEW");
                echo "\"";
                if ( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " >";
                echo $this->env->getExtension('phpbb')->lang("PREVIEW");
                echo "</button>
\t\t\t<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                // line 118
                echo $this->env->getExtension('phpbb')->lang("LOADING");
                echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "</button>
\t\t</fieldset>
\t";
            }
            // line 121
            echo "\t
<div class=\"space10\"></div>
";
            // line 123
            if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
                // line 124
                echo "<script>
function addClass(e,s){e.classList?e.classList.add(s):e.className+=\" \"+s}function removeClass(e,s){e.classList?e.classList.remove(s):e.className=e.className.replace(new RegExp(\"(^|\\\\b)\"+s.split(\" \").join(\"|\")+\"(\\\\b|\$)\",\"gi\"),\" \")}function txtDropClicked(){removeClassesOnFocus(!1),addClass(document.getElementById(\"message\"),\"dropzone-wrap\"),addClass(document.getElementById(\"dragNdrop\"),\"dropzone-content\")}function removeClassesOnFocus(e){var s=e===!1?document.getElementById(\"message\"):e.target;removeClass(s,\"dropzone-wrap\"),removeClass(s.parentNode,\"dropzone-content\")}window.addEventListener(\"load\",function(){document.getElementById(\"ToggleTxTDrop\").addEventListener(\"click\",txtDropClicked),document.getElementById(\"message\").addEventListener(\"focus\",removeClassesOnFocus)});
</script>
";
            }
            // line 128
            echo "\t\t<div class=\"panel has-nav-tabs panel-default\"><!-- panel has-nav-tabs no-border with tab start tag here posting_layout.html -->
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t<li class=\"";
            // line 130
            if ((isset($context["IMGUR_DELETEHASH"]) ? $context["IMGUR_DELETEHASH"] : null)) {
            } else {
                echo "active";
            }
            echo "\"><a data-toggle=\"tab\" href=\"#options-panel-below\"><span>";
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</span></a></li>
\t\t\t\t";
            // line 131
            if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
                echo "<li class=\"\"><a data-toggle=\"tab\" href=\"#posting-attach-body-html\" id=\"ToggleTxTDrop\"><span>";
                echo $this->env->getExtension('phpbb')->lang("ADD_ATTACHMENT");
                echo "</span></a></li>";
            }
            // line 132
            echo "\t\t\t\t";
            if ((((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "posting") && (isset($context["IN_IMGUR"]) ? $context["IN_IMGUR"] : null))) {
                echo "<li class=\"";
                if ((isset($context["IMGUR_DELETEHASH"]) ? $context["IMGUR_DELETEHASH"] : null)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#posting-imgur-html\"><span>";
                echo $this->env->getExtension('phpbb')->lang("IMGUR_UPLOAD_TITLE");
                echo "</span></a></li>";
            } else {
            }
            // line 133
            echo "\t\t\t\t";
            if (((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null) || (isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null))) {
                echo "<li class=\"\"><a data-toggle=\"tab\" href=\"#posting-poll-html\"><span>";
                echo $this->env->getExtension('phpbb')->lang("ADD_POLL");
                echo "</span></a></li>";
            }
            // line 134
            echo "\t\t\t";
            // line 135
            echo "\t\t\t</ul>
\t
    <div class=\"tab-content panel-content\">
\t   ";
            // line 138
            if (( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null) && ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1))) {
                // line 139
                echo "\t\t<div class=\"panel-body tab-pane";
                if ((isset($context["IMGUR_DELETEHASH"]) ? $context["IMGUR_DELETEHASH"] : null)) {
                } else {
                    echo " active";
                }
                echo "\" id=\"options-panel-below\">
\t\t<fieldset>
\t\t";
                // line 141
                // line 142
                echo "\t\t\t";
                if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                    // line 143
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    echo (isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"disable_bbcode\">";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
                    echo "</label>
\t\t\t";
                }
                // line 145
                echo "\t\t\t";
                if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
                    // line 146
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    echo (isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"disable_smilies\">";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
                    echo "</label>
\t\t\t";
                }
                // line 148
                echo "\t\t\t";
                if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                    // line 149
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    echo (isset($context["S_MAGIC_URL_CHECKED"]) ? $context["S_MAGIC_URL_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"disable_magic_url\">";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
                    echo "</label>
\t\t\t";
                }
                // line 151
                echo "\t\t\t";
                if ((isset($context["S_SIG_ALLOWED"]) ? $context["S_SIG_ALLOWED"] : null)) {
                    // line 152
                    echo "\t\t\t <input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    echo (isset($context["S_SIGNATURE_CHECKED"]) ? $context["S_SIGNATURE_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"attach_sig\">";
                    echo $this->env->getExtension('phpbb')->lang("ATTACH_SIG");
                    echo "</label>
\t\t\t";
                }
                // line 154
                echo "\t\t\t";
                if ((isset($context["S_NOTIFY_ALLOWED"]) ? $context["S_NOTIFY_ALLOWED"] : null)) {
                    // line 155
                    echo "\t\t\t <input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    echo (isset($context["S_NOTIFY_CHECKED"]) ? $context["S_NOTIFY_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"notify\">";
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_REPLY");
                    echo "</label>
\t\t\t";
                }
                // line 157
                echo "\t\t\t";
                if ((isset($context["S_LOCK_TOPIC_ALLOWED"]) ? $context["S_LOCK_TOPIC_ALLOWED"] : null)) {
                    // line 158
                    echo "\t\t\t <input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    echo (isset($context["S_LOCK_TOPIC_CHECKED"]) ? $context["S_LOCK_TOPIC_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"lock_topic\">";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
                    echo "</label>
\t\t\t";
                }
                // line 160
                echo "\t\t\t";
                if ((isset($context["S_LOCK_POST_ALLOWED"]) ? $context["S_LOCK_POST_ALLOWED"] : null)) {
                    // line 161
                    echo "\t\t\t <input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    echo (isset($context["S_LOCK_POST_CHECKED"]) ? $context["S_LOCK_POST_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"lock_post\">";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
                    echo "&#93;</label>
\t\t\t";
                }
                // line 163
                echo "\t\t\t";
                if ((((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null) || (isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null)) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
                    // line 164
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 166
                echo "\t\t\t";
                if (((isset($context["S_SOFTDELETE_ALLOWED"]) ? $context["S_SOFTDELETE_ALLOWED"] : null) || (isset($context["S_DELETE_ALLOWED"]) ? $context["S_DELETE_ALLOWED"] : null))) {
                    // line 167
                    echo "\t\t\t <input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    echo (isset($context["S_SOFTDELETE_CHECKED"]) ? $context["S_SOFTDELETE_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"delete\">";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_SOFT");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_SOFT_WARN");
                    echo "&#93;</label>
\t\t\t <input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\"><label class=\"check-control\" for=\"delete_permanent\">";
                    // line 168
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENT");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENT_WARN");
                    echo "&#93;</label>\t
\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 171
                echo "\t\t\t
\t\t\t";
                // line 172
                if ((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null)) {
                    // line 173
                    echo "\t\t    <div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"topic_type-0\">";
                    // line 174
                    if ((isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("POST_TOPIC_AS");
                    }
                    echo ":</label>
\t         <div class=\"controls controls-row\"> 
             ";
                    // line 176
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_type", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        // line 177
                        echo "\t\t\t  <input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\"";
                        echo $this->getAttribute($context["topic_type"], "S_CHECKED", array());
                        echo "><label class=\"radio-inline\" for=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\">";
                        echo $this->getAttribute($context["topic_type"], "L_TOPIC_TYPE", array());
                        echo "</label>
\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 179
                    echo "\t         </div> 
\t\t\t <div class=\"space10\"></div>
\t        </div>
\t\t\t";
                }
                // line 183
                echo "
\t\t\t";
                // line 184
                if (((isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
                    // line 185
                    echo "\t\t\t<div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"topic_time_limit\">";
                    // line 186
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><span class=\"help-block\">";
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</span>
\t\t\t<div class=\"input-group col-xs-8 col-sm-2 col-md-2\">
\t\t       <input type=\"text\" class=\"form-control input-sm\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" maxlength=\"3\" value=\"";
                    // line 188
                    echo (isset($context["TOPIC_TIME_LIMIT"]) ? $context["TOPIC_TIME_LIMIT"] : null);
                    echo "\">
\t\t      <span class=\"input-group-addon\">";
                    // line 189
                    echo $this->env->getExtension('phpbb')->lang("DAYS");
                    echo "</span>
\t         </div>
\t\t\t <div class=\"space10\"></div>
\t       </div>
\t\t\t";
                }
                // line 194
                echo "\t\t\t
\t\t\t";
                // line 195
                if ((isset($context["S_EDIT_REASON"]) ? $context["S_EDIT_REASON"] : null)) {
                    // line 196
                    echo "\t\t\t<div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"edit_reason\">";
                    // line 197
                    echo $this->env->getExtension('phpbb')->lang("EDIT_REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>
\t        <div class=\"row\"> 
\t\t\t<div class=\"col-xs-8 col-sm-5 col-md-5\"> 
             <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
                    // line 200
                    echo $this->env->getExtension('phpbb')->lang("EDIT_LINK_PLACEHOLDER");
                    echo "\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    echo (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null);
                    echo "\">
\t        </div>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 205
                echo "\t\t ";
                echo "\t
\t\t</fieldset>
\t\t";
            }
            // line 208
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  717 => 208,  711 => 205,  701 => 200,  694 => 197,  691 => 196,  689 => 195,  686 => 194,  678 => 189,  674 => 188,  666 => 186,  663 => 185,  661 => 184,  658 => 183,  652 => 179,  635 => 177,  631 => 176,  622 => 174,  619 => 173,  617 => 172,  614 => 171,  606 => 168,  597 => 167,  594 => 166,  590 => 164,  587 => 163,  577 => 161,  574 => 160,  566 => 158,  563 => 157,  555 => 155,  552 => 154,  544 => 152,  541 => 151,  533 => 149,  530 => 148,  522 => 146,  519 => 145,  511 => 143,  508 => 142,  507 => 141,  498 => 139,  496 => 138,  491 => 135,  489 => 134,  482 => 133,  470 => 132,  464 => 131,  455 => 130,  451 => 128,  445 => 124,  443 => 123,  439 => 121,  429 => 118,  416 => 117,  405 => 116,  394 => 115,  393 => 114,  389 => 113,  385 => 112,  382 => 111,  380 => 110,  376 => 108,  372 => 106,  370 => 105,  367 => 104,  365 => 103,  357 => 97,  354 => 96,  347 => 95,  338 => 94,  333 => 93,  330 => 92,  324 => 90,  319 => 88,  315 => 87,  310 => 86,  308 => 85,  303 => 84,  298 => 83,  295 => 82,  293 => 81,  290 => 80,  271 => 78,  267 => 77,  263 => 75,  255 => 73,  253 => 72,  248 => 71,  246 => 70,  242 => 68,  238 => 66,  237 => 65,  222 => 62,  212 => 60,  211 => 59,  204 => 54,  192 => 53,  189 => 52,  188 => 51,  185 => 50,  182 => 49,  179 => 48,  166 => 47,  162 => 46,  160 => 45,  155 => 42,  154 => 41,  140 => 40,  137 => 39,  129 => 38,  123 => 36,  120 => 35,  118 => 34,  115 => 33,  114 => 32,  111 => 31,  103 => 26,  95 => 22,  92 => 21,  90 => 20,  87 => 19,  81 => 15,  56 => 14,  48 => 13,  42 => 11,  38 => 9,  36 => 8,  33 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
