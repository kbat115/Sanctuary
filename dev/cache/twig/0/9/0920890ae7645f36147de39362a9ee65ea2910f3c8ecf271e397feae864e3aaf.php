<?php

/* overall_footer.html */
class __TwigTemplate_0920890ae7645f36147de39362a9ee65ea2910f3c8ecf271e397feae864e3aaf extends Twig_Template
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
        // line 2
        echo "
\t</div> <!-- page-body id in header -->
  </div> <!-- content-forum in header -->
 </div> <!-- container in header -->

";
        // line 7
        // line 8
        echo "
";
        // line 9
        if ((( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "index"))) {
            // line 10
            echo "    ";
            $location = "addons/sitesplat_login_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/sitesplat_login_body.html", "overall_footer.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 12
        echo "
\t<section class=\"section-page\">
        <div id=\"rtblock\" class=\"container\">
            ";
        // line 15
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "fltl", array()))) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_fltl', '__main__'));
            $this->env->loadTemplate('@sitesplat_fltl/event/fltl.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        } else {
            $location = "addons/recent_topics_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/recent_topics_body.html", "overall_footer.html", 15)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 16
        echo "        </div>
    </section>

";
        // line 19
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
        $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/call_to_action_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        echo "\t
  ";
        // line 20
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 21
            echo "     ";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
            $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/call_to_action_body_instead.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 22
            echo "  ";
        } else {
            echo " 
\t";
            // line 23
            $location = "addons/call_to_action_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/call_to_action_body.html", "overall_footer.html", 23)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 24
            echo "  ";
        }
        // line 25
        echo "  
\t
\t";
        // line 27
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 28
            echo "\t\t";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
            $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/prefooter_instead.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 29
            echo "\t";
        } else {
            // line 30
            echo "    <section class=\"section-pre-footer\">
\t\t<div class=\"container center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-5 twitter\">
\t\t\t\t";
            // line 34
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bbtags", array())) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "index"))) {
                // line 35
                echo "\t\t\t\t\t ";
                // line 36
                echo "\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t<div class=\"thumb\"><i class=\"fa fa-paw\"></i></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h3>";
                // line 39
                echo $this->env->getExtension('phpbb')->lang("FLATBOOTS_ABOUT_TITLE");
                echo "</h3>
\t\t\t\t\t\t<p>";
                // line 40
                echo $this->env->getExtension('phpbb')->lang("FLATBOOTS_ABOUT_PART_ONE");
                echo "</p>
\t\t\t\t\t\t<a href=\"#\"><strong>";
                // line 41
                echo $this->env->getExtension('phpbb')->lang("READ_MORE");
                echo "</strong></a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 43
            echo "\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5 col-sm-offset-2 twitter\">
\t\t\t\t\t<div class=\"thumb\"><i class=\"fa fa-twitter\"></i></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h3><a href=\"https://twitter.com/SiteSplat\">";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("JOIN_US_TWITTER");
            echo "&nbsp;<small>@SiteSplat</small></a></h3>
\t\t\t\t\t\t <div id=\"twitter-feed\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t <div class=\"section-bg\"></div>
\t</section>
\t";
        }
        // line 57
        echo "    
\t<footer class=\"burned-asphalt\"> <!-- Footer block -->
\t\t<div class=\"midnight-\" id=\"sub-footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row bottomLinks\">
\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t <nav>
\t\t\t\t\t";
        // line 65
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 66
            echo "\t\t\t\t\t\t";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
            $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/footer_links_instead.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 67
            echo "\t\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t\t\t<ul class=\"list-inline footer-nav\">
\t\t\t\t\t\t <li><a href=\"http://goo.gl/LvmwlF\" title=\"\">";
            // line 69
            echo $this->env->getExtension('phpbb')->lang("ADVERTISE");
            echo "</a></li>
\t\t\t\t\t\t <li><a href=\"";
            // line 70
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></li>
\t\t\t\t\t\t <li><a href=\"";
            // line 71
            echo (isset($context["U_DMCA"]) ? $context["U_DMCA"] : null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb')->lang("DMCA");
            echo "</a></li>
\t\t\t\t\t\t <li><a href=\"";
            // line 72
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS");
            echo "</a></li>
\t\t\t\t\t\t ";
            // line 73
            // line 74
            echo "\t\t\t\t\t\t ";
            if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
                // line 75
                echo "\t\t\t\t\t\t <li><a href=\"";
                echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
                echo "\" title=\"\">";
                echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
                echo "</a></li>
\t\t\t\t\t\t ";
            }
            // line 77
            echo "\t\t\t\t\t\t ";
            // line 78
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 79
        echo "\t
\t\t\t\t\t </nav>
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">\t
\t\t\t\t\t\t<div class=\"clearfix socialbar\">
\t\t\t\t\t\t";
        // line 85
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 86
            echo "\t\t\t\t\t\t\t\t";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
            $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/footer_social_instead.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 87
            echo "\t\t\t\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t\t\t\t<div class=\"social-network\">
\t\t\t\t\t\t\t\t<a class=\"google-plus-color\" title=\"Google+\" href=\"https://plus.google.com/u/0/100435978342273345264/\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"github-color\" title=\"Github\" href=\"#2\"><i class=\"fa fa-github\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"behance-color\" title=\"Behance\" href=\"#3\"><i class=\"fa fa-behance\"></i></a>
\t\t\t\t\t\t\t\t<!-- <a class=\"dropbox-color\" title=\"Dropbox\" href=\"#4\"><i class=\"fa fa-dropbox\"></i></a> -->
\t\t\t\t\t\t\t\t<!-- <a class=\"pinterest-color\" title=\"Pinterest\" href=\"#5\"><i class=\"fa fa-pinterest\"></i></a> -->
\t\t\t\t\t\t\t\t<a class=\"facebook-color\" title=\"Facebook\" href=\"#6\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"twitter-color\" title=\"Twitter\" href=\"https://twitter.com/SiteSplat\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t<!-- <a class=\"bitbucket-color\" title=\"Bitbucket\" href=\"#8\"><i class=\"fa fa-bitbucket\"></i></a> -->
\t\t\t\t\t\t\t\t<a class=\"envato-color\" title=\"Envato\" href=\"http://themeforest.net/user/ThemeSplat/portfolio?ref=ThemeSplat\"><i class=\"icon-moon-envatoleaf\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"rss-color hidden-xs\" title=\"rss\" href=\"";
            // line 98
            echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
            echo "\"><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 100
        echo "\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t <p class=\"copyrights\">
\t\t\t\t\t  ";
        // line 106
        // line 107
        echo "\t\t\t\t\t  <small>";
        echo $this->env->getExtension('phpbb')->lang("HANDCRAFTED");
        echo "</small>&nbsp;<i class=\"fa fa-heart text-flatboots-red\"></i>&nbsp;<small>";
        echo $this->env->getExtension('phpbb')->lang("AND");
        echo "</small>&nbsp;<i class=\"fa fa-coffee\"></i>&nbsp;<small>";
        echo $this->env->getExtension('phpbb')->lang("BY");
        echo "<a href=\"http://www.sitesplat.com/\" title=\"SiteSplat.com\" target=\"_blank\">&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("SITESPLAT");
        echo "</a></small>
\t\t\t\t\t  ";
        // line 108
        // line 109
        echo "\t\t\t\t\t </p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t  <p class=\"debug-output\">
\t\t\t\t\t  ";
        // line 114
        // line 115
        echo "\t\t\t\t\t\t<small>&#45;&nbsp;";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "&nbsp;&#45;</small>
\t\t\t\t\t  ";
        // line 116
        // line 117
        echo "\t\t\t\t\t\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo " <small>";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
            echo "</small>";
        }
        // line 118
        echo "\t\t\t\t\t\t<!-- ";
        echo $this->env->getExtension('phpbb')->lang("FLATBOOTS_VERSION");
        echo " -->
\t\t\t\t\t  </p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>

<a id=\"totop\" class=\"top-flat\" href=\"\" onclick=\"return false;\" style=\"display:none;\"></a>

<div class=\"hidden\">";
        // line 129
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        echo "</div> 

<!-- injected via core and ajax JS for the return confirmation actions -->
   <div id=\"page-footer\">
\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 133
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"alert alert-default phpbb_alert\" data-l-err=\"";
        // line 137
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<h3 class=\"alert_title\">&nbsp;</h3>
\t\t <p class=\"alert_text\"></p>
\t</div>
\t
\t<div id=\"phpbb_confirm\" class=\"alert alert-default phpbb_alert\">
\t\t<button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<div class=\"alert_text\"></div>
\t</div>
  </div>\t
<!-- injected via core and ajax JS for the return confirmation actions -->

";
        // line 150
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewforum") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewtopic")))) {
            // line 151
            echo "\t<div class=\"modal fade\" id=\"BreadcrumbMap\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"BreadcrumbsLabel\">
\t  <div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t  <div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t<h4 class=\"modal-title\" id=\"BreadcrumbsLabel\">";
            // line 156
            echo $this->env->getExtension('phpbb')->lang("NAVIGATION");
            echo "</h4>
\t\t  </div>
\t\t  <div class=\"modal-body file-tree\">
\t\t   <ul>
\t\t\t<li class=\"root\"><a href=\"";
            // line 160
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("INDEX");
            echo "</a></li>
\t\t\t";
            // line 161
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
                // line 162
                echo "\t\t\t   <li><a href=\"";
                echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "\t\t   </ul>
\t\t    <i class=\"icon-compass fa fa-compass\"></i>
\t\t  </div>
\t\t  <div class=\"modal-footer\">
\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
\t";
        }
        // line 173
        echo "
\t";
        // line 174
        if ((isset($context["ENABLE_POPUP_LOGIN"]) ? $context["ENABLE_POPUP_LOGIN"] : null)) {
            // line 175
            echo "\t\t<div class=\"modal fade\" id=\"modal-login\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t<h3 class=\"modal-title\">";
            // line 180
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 183
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<label for=\"username\" class=\"control-label\">";
            // line 185
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-icon left\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"username\" id=\"username\" placeholder=\"";
            // line 188
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<label for=\"password\" class=\"control-label\">";
            // line 191
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-icon left\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-key\"></i>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\" id=\"password\" placeholder=\"";
            // line 194
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 196
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 197
                echo "\t\t\t\t\t\t\t\t\t<div class=\"controls controls-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin-pop\"><label for=\"autologin-pop\">";
                // line 198
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo "</label></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 201
            echo "\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" id=\"load\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" data-loading-text=\"";
            echo $this->env->getExtension('phpbb')->lang("LOADING_LOG_IN");
            echo " <i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "</button>
\t\t\t\t\t\t\t\t";
            // line 202
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.modal-content -->
\t\t\t</div><!-- /.modal-dialog -->
\t\t</div><!-- /.modal -->
\t";
        }
        // line 212
        echo "
<script>
// this loads jquery asyncrounously & in parallel
head.load(\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js\", \"";
        // line 215
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/bootstrap/js/bootstrap.min.js\", \"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/core.min.js\", \"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/forum_fn.min.js\", \"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/ajax.min.js\");
</script>

<!-- we use this event to load the JS scripts properly via the extension system -->
";
        // line 219
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_fltl', '__main__'));
        $this->env->loadTemplate('@sitesplat_fltl/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_snappy', '__main__'));
        $this->env->loadTemplate('@sitesplat_snappy/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 220
        echo "
<!-- injected via a module or an include -->
<script>
// some function that depends on bootstrap and jquery
head.ready(function () {
\t\$('.footable').footable();\$(\".selectpicker\").selectpicker();\$(\".selectpicker\").tooltip(\"disable\");var totop=\$(\"#totop\");totop.click(function(){\$(\"html, body\").stop(true,true).animate({scrollTop:0},500);return false});\$(window).scroll(function(){if(\$(this).scrollTop()>600){totop.fadeIn()}else{totop.fadeOut()}});\$(\"button[data-loading-text], input[data-loading-text], .btn-load\").click(function(){var e=\$(this);e.button(\"loading\");setTimeout(function(){e.button(\"reset\")},3e3)});
\t\$(\"input\").iCheck({checkboxClass:\"icheckbox_flat-aero\",radioClass:\"iradio_flat-aero\"});\$(\".btn-search\").click(function(){\$(\".search-input\").toggleClass(\"open\").find(\"input\").focus()});\$(\".close\").click(function(){\$(this).prev(\"input\").val(\"\").parents(\".search-input\").removeClass(\"open\")});\$(\".nav-tog\").click(function(){if(\$(this).hasClass(\"neutro\")){\$(this).removeClass(\"neutro\").addClass(\"open\")}else{\$(this).removeClass(\"open\").addClass(\"neutro\")}});
\t\$('input[data-reset-on-edit]').on('keyup', function() {\$(this.getAttribute('data-reset-on-edit')).val('');});
\tfunction isTouchDevice(){return true==(\"ontouchstart\"in window||window.DocumentTouch&&document instanceof DocumentTouch);}if(isTouchDevice()===false){jQuery(function(e){e(\"a\").tooltip({html:true,container:\"body\"})});}\t
    \$('#notification_list_button').click(function(){setTimeout(function(){\$(\".nano\").nanoScroller();},0);});\t
});
// some function that depends on bootstrap and jquery
head.load(\"";
        // line 232
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/twitterFetcher.min.js\");
head.ready('twitterFetcher.min.js',function(twit){var twit={\"id\":'";
        // line 233
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            echo (isset($context["TWITTER_ID"]) ? $context["TWITTER_ID"] : null);
        } else {
            echo "391407906655965184";
        }
        echo "',\"domId\":'twitter-feed',\"maxTweets\":1,\"showUser\":false,\"showImages\":true,\"enableLinks\":true};twitterFetcher.fetch(twit);});
</script>
<!-- injected via a module or an include -->

";
        // line 237
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

";
        // line 239
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 240
            echo "<!-- // lets load the plupload crap super huge files becuase... wait for it wait for it. \"swear here\" -->
";
            // line 241
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 241)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 243
        echo "
";
        // line 244
        // line 245
        echo "
<!-- Google Analytics: change UA-XXXXXXXX-X to be your site's ID. -->
";
        // line 247
        echo (isset($context["GOOGLE_ANALYTICS"]) ? $context["GOOGLE_ANALYTICS"] : null);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 247,  590 => 245,  589 => 244,  586 => 243,  573 => 241,  570 => 240,  568 => 239,  563 => 237,  552 => 233,  548 => 232,  534 => 220,  525 => 219,  512 => 215,  507 => 212,  494 => 202,  485 => 201,  479 => 198,  476 => 197,  474 => 196,  469 => 194,  462 => 191,  456 => 188,  449 => 185,  444 => 183,  436 => 180,  429 => 175,  427 => 174,  424 => 173,  413 => 164,  402 => 162,  398 => 161,  392 => 160,  385 => 156,  378 => 151,  376 => 150,  358 => 137,  343 => 133,  334 => 129,  319 => 118,  312 => 117,  311 => 116,  306 => 115,  305 => 114,  298 => 109,  297 => 108,  286 => 107,  285 => 106,  277 => 100,  271 => 98,  259 => 88,  256 => 87,  250 => 86,  248 => 85,  240 => 79,  236 => 78,  234 => 77,  226 => 75,  223 => 74,  222 => 73,  216 => 72,  210 => 71,  204 => 70,  200 => 69,  197 => 68,  194 => 67,  188 => 66,  186 => 65,  176 => 57,  164 => 48,  157 => 43,  151 => 41,  147 => 40,  143 => 39,  139 => 37,  136 => 36,  134 => 35,  132 => 34,  126 => 30,  123 => 29,  117 => 28,  115 => 27,  111 => 25,  108 => 24,  96 => 23,  91 => 22,  85 => 21,  83 => 20,  76 => 19,  71 => 16,  52 => 15,  47 => 12,  33 => 10,  31 => 9,  28 => 8,  27 => 7,  20 => 2,  19 => 1,);
    }
}
