<?php

/* posting_poll_body.html */
class __TwigTemplate_c777084d7b519ae4119da95bd4022c31c0b548feab256d6bcc46df755e9385b6 extends Twig_Template
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
        echo "<div class=\"panel-body tab-pane\" id=\"posting-poll-html\">
\t";
        // line 2
        if ((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null)) {
            // line 3
            echo "\t<p>";
            echo $this->env->getExtension('phpbb')->lang("ADD_POLL_EXPLAIN");
            echo "</p>
\t";
        }
        // line 5
        echo "
\t<fieldset>
\t";
        // line 7
        if ((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null)) {
            // line 8
            echo "\t  <div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"poll_title\">";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("POLL_QUESTION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t    <div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"\" name=\"poll_title\" id=\"poll_title\" maxlength=\"255\" value=\"";
            // line 11
            echo (isset($context["POLL_TITLE"]) ? $context["POLL_TITLE"] : null);
            echo "\">
\t    </div> 
\t  </div>
\t\t
\t   <div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"poll_option_text\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("POLL_OPTIONS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><span class=\"help-block\">";
            echo $this->env->getExtension('phpbb')->lang("POLL_OPTIONS_EXPLAIN");
            echo "</span>
\t    <div class=\"controls controls-row\"> 
        <textarea placeholder=\"\" rows=\"4\" name=\"poll_option_text\" id=\"poll_option_text\" class=\"form-control\">";
            // line 18
            echo (isset($context["POLL_OPTIONS"]) ? $context["POLL_OPTIONS"] : null);
            echo "</textarea>
\t    </div> 
\t    </div>
\t<div class=\"control-group\"> 
\t<div class=\"row\"> 
\t\t<div class=\"col-md-4\"> 
\t         <label class=\"control-label\" for=\"poll_max_options\">";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("POLL_MAX_OPTIONS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><span class=\"help-block\">";
            echo $this->env->getExtension('phpbb')->lang("POLL_MAX_OPTIONS_EXPLAIN_ALT");
            echo "</span>
\t\t\t<div class=\"input-group col-xs-7\">
\t\t       <input type=\"text\" name=\"poll_max_options\" id=\"poll_max_options\" size=\"3\" maxlength=\"3\" value=\"";
            // line 26
            echo (isset($context["POLL_MAX_OPTIONS"]) ? $context["POLL_MAX_OPTIONS"] : null);
            echo "\" placeholder=\"\" class=\"form-control input-sm\">
\t\t      <span class=\"input-group-addon\">";
            // line 27
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</span>
\t         </div>
\t    </div>
\t\t<div class=\"col-md-4\"> 
\t         <label class=\"control-label\" for=\"poll_length\">";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("POLL_FOR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><span class=\"help-block\">";
            echo $this->env->getExtension('phpbb')->lang("POLL_FOR_EXPLAIN");
            echo "</span>
\t\t\t<div class=\"input-group col-xs-7\">
\t\t       <input type=\"text\" name=\"poll_length\" id=\"poll_length\" size=\"3\" maxlength=\"3\" value=\"";
            // line 33
            echo (isset($context["POLL_LENGTH"]) ? $context["POLL_LENGTH"] : null);
            echo "\" placeholder=\"\" class=\"form-control input-sm\">
\t\t      <span class=\"input-group-addon\">";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</span>
\t         </div>
        </div>
\t\t<div class=\"col-md-4\"> 
\t\t";
            // line 38
            if ((isset($context["S_POLL_VOTE_CHANGE"]) ? $context["S_POLL_VOTE_CHANGE"] : null)) {
                // line 39
                echo "\t     <label class=\"control-label\" for=\"poll_vote_change\">";
                echo $this->env->getExtension('phpbb')->lang("POLL_VOTE_CHANGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><span class=\"help-block\">";
                echo $this->env->getExtension('phpbb')->lang("POLL_VOTE_CHANGE_EXPLAIN");
                echo "</span>
\t    <div class=\"controls controls-row\"> 
         <input type=\"checkbox\" id=\"poll_vote_change\" name=\"poll_vote_change\"";
                // line 41
                echo (isset($context["VOTE_CHANGE_CHECKED"]) ? $context["VOTE_CHANGE_CHECKED"] : null);
                echo "><label class=\"checkbox-inline\" for=\"poll_vote_change\">";
                echo $this->env->getExtension('phpbb')->lang("POLL_VOTE_CHANGE_LABEL");
                echo "</label>
\t     </div> 
\t\t";
            }
            // line 44
            echo "\t\t</div>
\t</div>\t
\t</div>
    ";
        }
        // line 48
        echo "\t";
        // line 49
        echo "    
\t    ";
        // line 50
        if ((isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null)) {
            echo "\t
\t\t<div class=\"control-group\"> 
\t\t <label class=\"control-label\" for=\"poll_delete\">";
            // line 52
            echo $this->env->getExtension('phpbb')->lang("DELETE_POLL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><span class=\"help-block\">";
            echo $this->env->getExtension('phpbb')->lang("POLL_DELETE_HELPER");
            echo "</span>
\t    <div class=\"controls controls-row\"> 
        <input type=\"checkbox\" name=\"poll_delete\" id=\"poll_delete\"";
            // line 54
            if ((isset($context["S_POLL_DELETE_CHECKED"]) ? $context["S_POLL_DELETE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo "><label class=\"checkbox-inline\" for=\"poll_delete\">";
            echo $this->env->getExtension('phpbb')->lang("POLL_DELETE");
            echo "</label>
\t    </div> 
\t     <div class=\"space10\"></div>
\t\t</div>
\t    ";
        }
        // line 59
        echo "\t</fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_poll_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 59,  151 => 54,  143 => 52,  138 => 50,  135 => 49,  133 => 48,  127 => 44,  119 => 41,  110 => 39,  108 => 38,  101 => 34,  97 => 33,  89 => 31,  82 => 27,  78 => 26,  70 => 24,  61 => 18,  53 => 16,  45 => 11,  39 => 9,  36 => 8,  34 => 7,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
