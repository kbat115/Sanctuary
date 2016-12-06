<?php

/* acp_mchat.html */
class __TwigTemplate_ddb2c999ab1f1bb4aa213530c9871b9b2b78bbd7738e03f0ad0f19da41509eca extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_mchat.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h1>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("ACP_MCHAT_TITLE");
        echo "</h1>";
        echo $this->env->getExtension('phpbb')->lang("ACP_MCHAT_VERSION");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " <em>";
        echo (isset($context["MCHAT_VERSION"]) ? $context["MCHAT_VERSION"] : null);
        echo "</em>

<form id=\"acp_mchat\" method=\"post\" action=\"";
        // line 5
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
\t";
        // line 6
        if (((isset($context["MCHAT_PURGE"]) ? $context["MCHAT_PURGE"] : null) && (isset($context["MCHAT_FOUNDER"]) ? $context["MCHAT_FOUNDER"] : null))) {
            // line 7
            echo "\t\t<fieldset>
\t\t\t<legend>";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("CONFIRM");
            echo "</legend>
\t\t\t<span>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("MCHAT_PURGE_CONFIRM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span>
\t\t\t<p class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"mchat_purge_confirm\" value=\"";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" />
\t\t\t\t";
            // line 13
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t</p>
\t\t</fieldset>
\t";
        } else {
            // line 17
            echo "\t\t<fieldset>
\t\t\t<legend>";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("MCHAT_SETTINGS_INDEX");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_on_index\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("MCHAT_ON_INDEX");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_on_index\" value=\"1\"";
            // line 21
            if ((isset($context["MCHAT_ON_INDEX"]) ? $context["MCHAT_ON_INDEX"] : null)) {
                echo " id=\"mchat_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_on_index\" value=\"0\"";
            // line 22
            if ( !(isset($context["MCHAT_ON_INDEX"]) ? $context["MCHAT_ON_INDEX"] : null)) {
                echo " id=\"mchat_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_location\">";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("MCHAT_LOCATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_location\" value=\"1\"";
            // line 26
            if ((isset($context["MCHAT_LOCATION"]) ? $context["MCHAT_LOCATION"] : null)) {
                echo " id=\"mchat_location\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("MCHAT_TOP_OF_FORUM");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_location\" value=\"0\"";
            // line 27
            if ( !(isset($context["MCHAT_LOCATION"]) ? $context["MCHAT_LOCATION"] : null)) {
                echo " id=\"mchat_location\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("MCHAT_BOTTOM_OF_FORUM");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_index_height\">";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("MCHAT_INDEX_HEIGHT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("MCHAT_INDEX_HEIGHT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"mchat_index_height\" id=\"mchat_index_height\" size=\"10\" maxlength=\"4\" value=\"";
            // line 32
            echo (isset($context["MCHAT_INDEX_HEIGHT"]) ? $context["MCHAT_INDEX_HEIGHT"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_message_num\">";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("MCHAT_MESSAGE_NUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("MCHAT_MESSAGE_NUM_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"mchat_message_num\" id=\"mchat_message_num\" size=\"10\" maxlength=\"4\" value=\"";
            // line 37
            echo (isset($context["MCHAT_MESSAGE_NUM"]) ? $context["MCHAT_MESSAGE_NUM"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("MCHAT_SETTINGS_CUSTOM");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_custom_page\">";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("MCHAT_CUSTOM_PAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 44
            echo $this->env->getExtension('phpbb')->lang("MCHAT_CUSTOM_PAGE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_custom_page\" value=\"1\"";
            // line 45
            if ((isset($context["MCHAT_CUSTOM_PAGE"]) ? $context["MCHAT_CUSTOM_PAGE"] : null)) {
                echo " id=\"mchat_custom_page\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_custom_page\" value=\"0\"";
            // line 46
            if ( !(isset($context["MCHAT_CUSTOM_PAGE"]) ? $context["MCHAT_CUSTOM_PAGE"] : null)) {
                echo " id=\"mchat_custom_page\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_custom_height\">";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("MCHAT_CUSTOM_HEIGHT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 50
            echo $this->env->getExtension('phpbb')->lang("MCHAT_CUSTOM_HEIGHT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"mchat_custom_height\" id=\"mchat_custom_height\" size=\"10\" maxlength=\"4\" value=\"";
            // line 51
            echo (isset($context["MCHAT_CUSTOM_HEIGHT"]) ? $context["MCHAT_CUSTOM_HEIGHT"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_message_limit\">";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("MCHAT_MESSAGE_LIMIT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("MCHAT_MESSAGE_LIMIT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"mchat_message_limit\" id=\"mchat_message_limit\" size=\"10\" value=\"";
            // line 56
            echo (isset($context["MCHAT_MESSAGE_LIMIT"]) ? $context["MCHAT_MESSAGE_LIMIT"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 60
            echo $this->env->getExtension('phpbb')->lang("MCHAT_SETTINGS_ARCHIVE");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_archive_limit\">";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("MCHAT_ARCHIVE_LIMIT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("MCHAT_ARCHIVE_LIMIT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"mchat_archive_limit\" id=\"mchat_archive_limit\" size=\"10\" value=\"";
            // line 64
            echo (isset($context["MCHAT_ARCHIVE_LIMIT"]) ? $context["MCHAT_ARCHIVE_LIMIT"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("MCHAT_SETTINGS_MESSAGES");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_timeout\">";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("MCHAT_USER_TIMEOUT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("MCHAT_TIMEOUT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"mchat_timeout\" id=\"mchat_timeout\" size=\"10\" maxlength=\"4\" value=\"";
            // line 72
            echo (isset($context["MCHAT_TIMEOUT"]) ? $context["MCHAT_TIMEOUT"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_refresh\">";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("MCHAT_REFRESH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 76
            echo $this->env->getExtension('phpbb')->lang("MCHAT_REFRESH_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"mchat_refresh\" id=\"mchat_refresh\" size=\"10\" value=\"";
            // line 77
            echo (isset($context["MCHAT_REFRESH"]) ? $context["MCHAT_REFRESH"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_edit_delete_limit\">";
            // line 80
            echo $this->env->getExtension('phpbb')->lang("MCHAT_EDIT_DELETE_LIMIT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 81
            echo $this->env->getExtension('phpbb')->lang("MCHAT_EDIT_DELETE_LIMIT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"mchat_edit_delete_limit\" id=\"mchat_edit_delete_limit\" size=\"10\" value=\"";
            // line 82
            echo (isset($context["MCHAT_EDIT_DELETE_LIMIT"]) ? $context["MCHAT_EDIT_DELETE_LIMIT"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_live_updates\">";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("MCHAT_LIVE_UPDATES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("MCHAT_LIVE_UPDATES_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_live_updates\" value=\"1\"";
            // line 87
            if ((isset($context["MCHAT_LIVE_UPDATES"]) ? $context["MCHAT_LIVE_UPDATES"] : null)) {
                echo " id=\"mchat_live_updates\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_live_updates\" value=\"0\"";
            // line 88
            if ( !(isset($context["MCHAT_LIVE_UPDATES"]) ? $context["MCHAT_LIVE_UPDATES"] : null)) {
                echo " id=\"mchat_live_updates\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_message_top\">";
            // line 91
            echo $this->env->getExtension('phpbb')->lang("MCHAT_MESSAGE_TOP");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 92
            echo $this->env->getExtension('phpbb')->lang("MCHAT_MESSAGE_TOP_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_message_top\" value=\"1\"";
            // line 93
            if ((isset($context["MCHAT_MESSAGE_TOP"]) ? $context["MCHAT_MESSAGE_TOP"] : null)) {
                echo " id=\"mchat_message_top\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("MCHAT_TOP");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_message_top\" value=\"0\"";
            // line 94
            if ( !(isset($context["MCHAT_MESSAGE_TOP"]) ? $context["MCHAT_MESSAGE_TOP"] : null)) {
                echo " id=\"mchat_message_top\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("MCHAT_BOTTOM");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_avatars\">";
            // line 97
            echo $this->env->getExtension('phpbb')->lang("MCHAT_AVATARS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 98
            echo $this->env->getExtension('phpbb')->lang("MCHAT_AVATARS_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_avatars\" value=\"1\"";
            // line 99
            if ((isset($context["MCHAT_AVATARS"]) ? $context["MCHAT_AVATARS"] : null)) {
                echo " id=\"mchat_avatars\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_avatars\" value=\"0\"";
            // line 100
            if ( !(isset($context["MCHAT_AVATARS"]) ? $context["MCHAT_AVATARS"] : null)) {
                echo " id=\"mchat_avatars\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_dateoptions\">";
            // line 103
            echo $this->env->getExtension('phpbb')->lang("MCHAT_DATE_FORMAT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("MCHAT_DATE_FORMAT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<select name=\"mchat_dateoptions\" id=\"mchat_dateoptions\" onchange=\"if(this.value=='custom'){phpbb.toggleDisplay('custom_date',1);}else{phpbb.toggleDisplay('custom_date',-1);} if (this.value == 'custom') { document.getElementById('mchat_date').value = default_dateformat; } else { document.getElementById('mchat_date').value = this.value; }\">
\t\t\t\t\t\t";
            // line 106
            echo (isset($context["S_MCHAT_DATEFORMAT_OPTIONS"]) ? $context["S_MCHAT_DATEFORMAT_OPTIONS"] : null);
            echo "
\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t\t<dd><div id=\"custom_date\"";
            // line 109
            if ( !(isset($context["S_CUSTOM_DATEFORMAT"]) ? $context["S_CUSTOM_DATEFORMAT"] : null)) {
                echo " style=\"display:none;\"";
            }
            echo "><input type=\"text\" name=\"mchat_date\" id=\"mchat_date\" value=\"";
            echo (isset($context["MCHAT_DATE"]) ? $context["MCHAT_DATE"] : null);
            echo "\" maxlength=\"30\" /></div></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_pause_on_input\">";
            // line 112
            echo $this->env->getExtension('phpbb')->lang("MCHAT_PAUSE_ON_INPUT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("MCHAT_PAUSE_ON_INPUT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_pause_on_input\" value=\"1\"";
            // line 114
            if ((isset($context["MCHAT_PAUSE_ON_INPUT"]) ? $context["MCHAT_PAUSE_ON_INPUT"] : null)) {
                echo " id=\"mchat_pause_on_input\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_pause_on_input\" value=\"0\"";
            // line 115
            if ( !(isset($context["MCHAT_PAUSE_ON_INPUT"]) ? $context["MCHAT_PAUSE_ON_INPUT"] : null)) {
                echo " id=\"mchat_pause_on_input\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_flood_time\">";
            // line 118
            echo $this->env->getExtension('phpbb')->lang("MCHAT_FLOOD_TIME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 119
            echo $this->env->getExtension('phpbb')->lang("MCHAT_FLOOD_TIME_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"mchat_flood_time\" id=\"mchat_flood_time\" size=\"10\" value=\"";
            // line 120
            echo (isset($context["MCHAT_FLOOD_TIME"]) ? $context["MCHAT_FLOOD_TIME"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_max_message_lngth\">";
            // line 123
            echo $this->env->getExtension('phpbb')->lang("MCHAT_MAX_MESSAGE_LENGTH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 124
            echo $this->env->getExtension('phpbb')->lang("MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"mchat_max_message_lngth\" id=\"mchat_max_message_lngth\" size=\"10\" value=\"";
            // line 125
            echo (isset($context["MCHAT_MAX_MESSAGE_LNGTH"]) ? $context["MCHAT_MAX_MESSAGE_LNGTH"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_override_min_post_chars\">";
            // line 128
            echo $this->env->getExtension('phpbb')->lang("MCHAT_OVERRIDE_MIN_POST_CHARS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 129
            echo $this->env->getExtension('phpbb')->lang("MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_override_min_post_chars\" value=\"1\"";
            // line 130
            if ((isset($context["MCHAT_OVERRIDE_MIN_POST_CHARS"]) ? $context["MCHAT_OVERRIDE_MIN_POST_CHARS"] : null)) {
                echo " id=\"mchat_override_min_post_chars\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_override_min_post_chars\" value=\"0\"";
            // line 131
            if ( !(isset($context["MCHAT_OVERRIDE_MIN_POST_CHARS"]) ? $context["MCHAT_OVERRIDE_MIN_POST_CHARS"] : null)) {
                echo " id=\"mchat_override_min_post_chars\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_override_smilie_limit\">";
            // line 134
            echo $this->env->getExtension('phpbb')->lang("MCHAT_OVERRIDE_SMILIE_LIMIT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 135
            echo $this->env->getExtension('phpbb')->lang("MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_override_smilie_limit\" value=\"1\"";
            // line 136
            if ((isset($context["MCHAT_OVERRIDE_SMILIE_LIMIT"]) ? $context["MCHAT_OVERRIDE_SMILIE_LIMIT"] : null)) {
                echo " id=\"mchat_override_smilie_limit\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_override_smilie_limit\" value=\"0\"";
            // line 137
            if ( !(isset($context["MCHAT_OVERRIDE_SMILIE_LIMIT"]) ? $context["MCHAT_OVERRIDE_SMILIE_LIMIT"] : null)) {
                echo " id=\"mchat_override_smilie_limit\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_bbcode_disallowed\">";
            // line 140
            echo $this->env->getExtension('phpbb')->lang("MCHAT_BBCODES_DISALLOWED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 141
            echo $this->env->getExtension('phpbb')->lang("MCHAT_BBCODES_DISALLOWED_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><textarea name=\"mchat_bbcode_disallowed\" id=\"mchat_bbcode_disallowed\" rows=\"3\" cols=\"40\">";
            // line 142
            echo (isset($context["MCHAT_BBCODE_DISALLOWED"]) ? $context["MCHAT_BBCODE_DISALLOWED"] : null);
            echo "</textarea></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_rules\">";
            // line 145
            echo $this->env->getExtension('phpbb')->lang("ACP_MCHAT_RULES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 146
            echo $this->env->getExtension('phpbb')->lang("ACP_MCHAT_RULES_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><textarea name=\"mchat_rules\" id=\"mchat_rules\" rows=\"5\" cols=\"40\">";
            // line 147
            echo (isset($context["MCHAT_RULES"]) ? $context["MCHAT_RULES"] : null);
            echo "</textarea></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_static_message\">";
            // line 150
            echo $this->env->getExtension('phpbb')->lang("MCHAT_STATIC_MESSAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t<span>";
            // line 151
            echo $this->env->getExtension('phpbb')->lang("MCHAT_STATIC_MESSAGE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><textarea name=\"mchat_static_message\" id=\"mchat_static_message\" rows=\"5\" cols=\"40\">";
            // line 152
            echo (isset($context["MCHAT_STATIC_MESSAGE"]) ? $context["MCHAT_STATIC_MESSAGE"] : null);
            echo "</textarea></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 156
            echo $this->env->getExtension('phpbb')->lang("MCHAT_SETTINGS_POSTS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_new_posts_topic\">";
            // line 158
            echo $this->env->getExtension('phpbb')->lang("MCHAT_NEW_POSTS_TOPIC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 159
            echo $this->env->getExtension('phpbb')->lang("MCHAT_NEW_POSTS_TOPIC_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_new_posts_topic\" value=\"1\"";
            // line 160
            if ((isset($context["MCHAT_NEW_POSTS_TOPIC"]) ? $context["MCHAT_NEW_POSTS_TOPIC"] : null)) {
                echo " id=\"mchat_new_posts_topic\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_new_posts_topic\" value=\"0\"";
            // line 161
            if ( !(isset($context["MCHAT_NEW_POSTS_TOPIC"]) ? $context["MCHAT_NEW_POSTS_TOPIC"] : null)) {
                echo " id=\"mchat_new_posts_topic\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_new_posts_reply\">";
            // line 164
            echo $this->env->getExtension('phpbb')->lang("MCHAT_NEW_POSTS_REPLY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 165
            echo $this->env->getExtension('phpbb')->lang("MCHAT_NEW_POSTS_REPLY_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_new_posts_reply\" value=\"1\"";
            // line 166
            if ((isset($context["MCHAT_NEW_POSTS_REPLY"]) ? $context["MCHAT_NEW_POSTS_REPLY"] : null)) {
                echo " id=\"mchat_new_posts_reply\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_new_posts_reply\" value=\"0\"";
            // line 167
            if ( !(isset($context["MCHAT_NEW_POSTS_REPLY"]) ? $context["MCHAT_NEW_POSTS_REPLY"] : null)) {
                echo " id=\"mchat_new_posts_reply\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_new_posts_edit\">";
            // line 170
            echo $this->env->getExtension('phpbb')->lang("MCHAT_NEW_POSTS_EDIT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 171
            echo $this->env->getExtension('phpbb')->lang("MCHAT_NEW_POSTS_EDIT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_new_posts_edit\" value=\"1\"";
            // line 172
            if ((isset($context["MCHAT_NEW_POSTS_EDIT"]) ? $context["MCHAT_NEW_POSTS_EDIT"] : null)) {
                echo " id=\"mchat_new_posts_edit\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_new_posts_edit\" value=\"0\"";
            // line 173
            if ( !(isset($context["MCHAT_NEW_POSTS_EDIT"]) ? $context["MCHAT_NEW_POSTS_EDIT"] : null)) {
                echo " id=\"mchat_new_posts_edit\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_new_posts_quote\">";
            // line 176
            echo $this->env->getExtension('phpbb')->lang("MCHAT_NEW_POSTS_QUOTE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 177
            echo $this->env->getExtension('phpbb')->lang("MCHAT_NEW_POSTS_QUOTE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_new_posts_quote\" value=\"1\"";
            // line 178
            if ((isset($context["MCHAT_NEW_POSTS_QUOTE"]) ? $context["MCHAT_NEW_POSTS_QUOTE"] : null)) {
                echo " id=\"mchat_new_posts_quote\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_new_posts_quote\" value=\"0\"";
            // line 179
            if ( !(isset($context["MCHAT_NEW_POSTS_QUOTE"]) ? $context["MCHAT_NEW_POSTS_QUOTE"] : null)) {
                echo " id=\"mchat_new_posts_quote\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 183
            echo $this->env->getExtension('phpbb')->lang("MCHAT_SETTINGS_PRUNE");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_prune\">";
            // line 185
            echo $this->env->getExtension('phpbb')->lang("MCHAT_PRUNE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 186
            echo $this->env->getExtension('phpbb')->lang("MCHAT_PRUNE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_prune\" value=\"1\"";
            // line 187
            if ((isset($context["MCHAT_PRUNE"]) ? $context["MCHAT_PRUNE"] : null)) {
                echo " id=\"mchat_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_prune\" value=\"0\"";
            // line 188
            if ( !(isset($context["MCHAT_PRUNE"]) ? $context["MCHAT_PRUNE"] : null)) {
                echo " id=\"mchat_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_prune_num\">";
            // line 191
            echo $this->env->getExtension('phpbb')->lang("MCHAT_PRUNE_NUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"mchat_prune_num\" size=\"10\" id=\"mchat_prune_num\" value=\"";
            // line 192
            echo (isset($context["MCHAT_PRUNE_NUM"]) ? $context["MCHAT_PRUNE_NUM"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t";
            // line 194
            if ((isset($context["MCHAT_FOUNDER"]) ? $context["MCHAT_FOUNDER"] : null)) {
                // line 195
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_purge\">";
                // line 196
                echo $this->env->getExtension('phpbb')->lang("MCHAT_PURGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input class=\"button1\" type=\"submit\" id=\"mchat_purge\" name=\"mchat_purge\" value=\"";
                // line 197
                echo $this->env->getExtension('phpbb')->lang("MCHAT_PURGE");
                echo "\" /></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 200
            echo "\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 202
            echo $this->env->getExtension('phpbb')->lang("MCHAT_SETTINGS_STATS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_whois\">";
            // line 204
            echo $this->env->getExtension('phpbb')->lang("MCHAT_WHOIS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_whois\" value=\"1\"";
            // line 205
            if ((isset($context["MCHAT_WHOIS"]) ? $context["MCHAT_WHOIS"] : null)) {
                echo " id=\"mchat_whois\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_whois\" value=\"0\"";
            // line 206
            if ( !(isset($context["MCHAT_WHOIS"]) ? $context["MCHAT_WHOIS"] : null)) {
                echo " id=\"mchat_whois\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_stats_index\">";
            // line 209
            echo $this->env->getExtension('phpbb')->lang("MCHAT_STATS_INDEX");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t<span>";
            // line 210
            echo $this->env->getExtension('phpbb')->lang("MCHAT_STATS_INDEX_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_stats_index\" value=\"1\"";
            // line 211
            if ((isset($context["MCHAT_STATS_INDEX"]) ? $context["MCHAT_STATS_INDEX"] : null)) {
                echo " id=\"mchat_stats_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_stats_index\" value=\"0\"";
            // line 212
            if ( !(isset($context["MCHAT_STATS_INDEX"]) ? $context["MCHAT_STATS_INDEX"] : null)) {
                echo " id=\"mchat_stats_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"mchat_whois\">";
            // line 215
            echo $this->env->getExtension('phpbb')->lang("MCHAT_WHOIS_REFRESH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t<span>";
            // line 216
            echo $this->env->getExtension('phpbb')->lang("MCHAT_WHOIS_REFRESH_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"mchat_whois_refresh\" id=\"mchat_whois\" size=\"10\" value=\"";
            // line 217
            echo (isset($context["MCHAT_WHOIS_REFRESH"]) ? $context["MCHAT_WHOIS_REFRESH"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<p class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 221
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 222
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t\t";
            // line 223
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t</p>
\t";
        }
        // line 226
        echo "</form>
";
        // line 227
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_mchat.html", 227)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_mchat.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  824 => 227,  821 => 226,  815 => 223,  811 => 222,  807 => 221,  800 => 217,  796 => 216,  791 => 215,  781 => 212,  773 => 211,  769 => 210,  764 => 209,  754 => 206,  746 => 205,  741 => 204,  736 => 202,  732 => 200,  726 => 197,  721 => 196,  718 => 195,  716 => 194,  711 => 192,  706 => 191,  696 => 188,  688 => 187,  684 => 186,  679 => 185,  674 => 183,  663 => 179,  655 => 178,  651 => 177,  646 => 176,  636 => 173,  628 => 172,  624 => 171,  619 => 170,  609 => 167,  601 => 166,  597 => 165,  592 => 164,  582 => 161,  574 => 160,  570 => 159,  565 => 158,  560 => 156,  553 => 152,  549 => 151,  544 => 150,  538 => 147,  534 => 146,  529 => 145,  523 => 142,  519 => 141,  514 => 140,  504 => 137,  496 => 136,  492 => 135,  487 => 134,  477 => 131,  469 => 130,  465 => 129,  460 => 128,  454 => 125,  450 => 124,  445 => 123,  439 => 120,  435 => 119,  430 => 118,  420 => 115,  412 => 114,  408 => 113,  403 => 112,  393 => 109,  387 => 106,  378 => 103,  368 => 100,  360 => 99,  356 => 98,  351 => 97,  341 => 94,  333 => 93,  329 => 92,  324 => 91,  314 => 88,  306 => 87,  302 => 86,  297 => 85,  291 => 82,  287 => 81,  282 => 80,  276 => 77,  272 => 76,  267 => 75,  261 => 72,  257 => 71,  252 => 70,  247 => 68,  240 => 64,  236 => 63,  231 => 62,  226 => 60,  219 => 56,  215 => 55,  210 => 54,  204 => 51,  200 => 50,  195 => 49,  185 => 46,  177 => 45,  173 => 44,  168 => 43,  163 => 41,  156 => 37,  152 => 36,  147 => 35,  141 => 32,  137 => 31,  132 => 30,  122 => 27,  114 => 26,  109 => 25,  99 => 22,  91 => 21,  86 => 20,  81 => 18,  78 => 17,  71 => 13,  67 => 12,  63 => 11,  57 => 9,  53 => 8,  50 => 7,  48 => 6,  44 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
