<?php

/* @sitesplat_flatbootsminicms/event/flatboots_navigation_instead.html */
class __TwigTemplate_621b1f927d9e53b56f1bd2fd220c9eccdb3e72a91d9783c74e89a1fab51a8e00 extends Twig_Template
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
        echo "<!-- Main navigation block -->
<nav class=\"collapse navbar-collapse flat-nav-collapse\" aria-label=\"Primary\">
    ";
        // line 3
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 4
            echo "\t<div class=\"user-login hidden-lg hidden-md hidden-sm\">
\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t<li class=\"dropdown dropdown-avatar\">
\t\t\t\t<a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"user-menu\">
\t\t\t\t ";
            // line 8
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo "&nbsp;";
            }
            echo "&nbsp;<span>";
            echo $this->env->getExtension('phpbb')->lang("WELCOME_INDEX");
            echo "&#44;&nbsp;";
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "<i class=\"caret\"></i></span>
\t\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu usermenu\">
\t\t\t\t   <li><a title=\"\" href=\"";
            // line 11
            echo (isset($context["U_UCP_PREFERENCE"]) ? $context["U_UCP_PREFERENCE"] : null);
            echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("UCP_PROFILE");
            echo "</a></li>
\t\t\t\t   <li><a title=\"\" href=\"";
            // line 12
            echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
            echo "\"><i class=\"fa fa-inbox\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("UCP_MESSAGES");
            echo "&nbsp;&nbsp;<span class=\"badge badge-info\">";
            if (((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null) && (isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null))) {
                echo (isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null);
            } else {
                echo (isset($context["S_USER_NEW_PRIVMSG"]) ? $context["S_USER_NEW_PRIVMSG"] : null);
            }
            echo "</span></a></li>
\t\t\t\t   ";
            // line 13
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                echo "\t
\t\t\t\t\t <li><a title=\"\" href=\"";
                // line 14
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\"><i class=\"fa fa-bell\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "&nbsp;&nbsp;";
                if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array()))) {
                } else {
                    echo "<span class=\"badge badge-info\">";
                    echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                    echo "</span>";
                }
                echo "</a></li>
\t\t\t\t   ";
            }
            // line 16
            echo "\t\t\t\t   <li><a title=\"\" href=\"";
            echo (isset($context["U_UCP_PROFILE_SETTINGS"]) ? $context["U_UCP_PROFILE_SETTINGS"] : null);
            echo "\"><i class=\"fa fa-cog\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("UCP_PROFILE_SETTINGS");
            echo "</a></li>
\t               ";
            // line 17
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                echo "<li><a title=\"\" href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\"><i class=\"fa fa-user-md\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL_GENERAL");
                echo "</a></li>";
            }
            // line 18
            echo "\t               ";
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\"><i class=\"fa fa-legal\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("MODERATOR_PANEL_GENERAL");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t\t   ";
            if (((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) &&  !((isset($context["U_ACP"]) ? $context["U_ACP"] : null) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null)))) {
                echo "<li><a href=\"";
                echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
                echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("USER_PANEL");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t   ";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\"><i class=\"fa fa-random\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t  <li><a title=\"\" href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\"><i class=\"fa fa-power-off\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("LOGOUT");
            echo "</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</div>
\t";
        }
        // line 27
        echo "
<ul class=\"nav navbar-nav navbar-nav-fancy\">
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 30
            echo "\t\t<li class=\"dropdown\">
\t\t\t";
            // line 31
            if ( !twig_length_filter($this->env, $this->getAttribute($context["menu"], "sub", array()))) {
                // line 32
                echo "\t\t\t <a href=\"";
                echo $this->getAttribute($context["menu"], "URL", array());
                echo "\"";
                if ($this->getAttribute($context["menu"], "EXTERNAL", array())) {
                    echo " target=\"_blank\"";
                }
                echo ">";
                echo $this->getAttribute($context["menu"], "NAME", array());
                echo "</a>
\t\t\t ";
            } else {
                // line 34
                echo "\t\t\t <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                echo $this->getAttribute($context["menu"], "NAME", array());
                echo "&nbsp;<b class=\"caret\"></b></a>
\t\t\t ";
            }
            // line 36
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute($context["menu"], "sub", array()))) {
                // line 37
                echo "\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t";
                // line 38
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "sub", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 39
                    echo "\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["sub"], "URL", array());
                    echo "\"";
                    if ($this->getAttribute($context["sub"], "EXTERNAL", array())) {
                        echo " target=\"_blank\"";
                    }
                    echo "><i class=\"";
                    echo $this->getAttribute($context["sub"], "ICON", array());
                    echo " icon-flip-horizontal\"></i>&nbsp;";
                    echo $this->getAttribute($context["sub"], "NAME", array());
                    echo "</a></li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 43
            echo "\t\t</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</ul>

<!-- Remove ext links -->
";
        // line 48
        if ((isset($context["S_ALLOW_CUSTOMLINKS"]) ? $context["S_ALLOW_CUSTOMLINKS"] : null)) {
            // line 49
            echo "<ul class=\"nav navbar-nav navbar-nav-fancy extension-links\">
    <li class=\"dropdown\">
      <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("MORE");
            echo "&nbsp;<b class=\"caret\"></b></a>
       <span class=\"dropdown-arrow\"></span>
        <ul class=\"dropdown-menu\">
\t\t\t";
            // line 54
            // line 55
            echo "\t\t\t <li><a href=\"";
            echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
            echo "\"><i class=\"fa fa-question-circle\"></i>";
            echo $this->env->getExtension('phpbb')->lang("FAQ");
            echo "</a></li>
\t\t\t";
            // line 56
            // line 57
            echo "        </ul>
    </li>
</ul>
";
        }
        // line 61
        echo "<!-- Remove ext links -->

";
        // line 63
        if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 64
            echo "    <ul class=\"nav navbar-nav navbar-right navbar-nav-fancy\">
\t    ";
            // line 65
            if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                // line 66
                echo "\t\t<li><a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT");
                echo "</a></li>
\t   ";
            }
            // line 68
            echo "\t    ";
            if ( !(isset($context["ENABLE_POPUP_LOGIN"]) ? $context["ENABLE_POPUP_LOGIN"] : null)) {
                // line 69
                echo "\t\t\t<li><a href=\"";
                echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "</a></li>
\t\t";
            } else {
                // line 71
                echo "\t\t\t<li><a href=\"\" data-toggle=\"modal\" data-target=\"#modal-login\" role=\"button\" data-toggle=\"modal\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "</a></li>
\t\t";
            }
            // line 73
            echo "\t</ul>
\t";
        }
        // line 75
        echo "\t  
\t";
        // line 76
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 77
            echo "\t<div class=\"user-login hidden-xs\">
\t\t<ul class=\"nav navbar-nav navbar-right navbar-nav-fancy\">
\t\t";
            // line 79
            // line 80
            echo "\t\t<li><a class=\"btn-search\" href=\"javascript:void(0)\"><i class=\"fa fa-lightbulb-o\"></i></a></li>
\t\t";
            // line 81
            // line 82
            echo "\t\t";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                echo "\t
\t\t    <li class=\"dropdown dropdown-avatar dropdown-notification\">
\t\t\t  <a id=\"notification_list_button\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i>";
                // line 84
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array())) && (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null))) {
                    echo "<em class=\"notifications badge badge-danger\">";
                    echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                    echo "</em>";
                }
                echo "</a>
                <ul class=\"dropdown-menu user-login-drop arrow-up\">
                 <li><a href=\"";
                // line 86
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" class=\"notification-heading\">";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "</a></li>
                   ";
                // line 87
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "@sitesplat_flatbootsminicms/event/flatboots_navigation_instead.html", 87)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 88
                echo "                </ul>
            </li>
\t\t";
            }
            // line 91
            echo "\t\t\t
\t\t\t<li class=\"dropdown dropdown-avatar\">
\t\t\t  <a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
\t\t\t   ";
            // line 94
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo "&nbsp;";
            } else {
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/user4.png\" alt=\"No avatar\">";
            }
            echo "&nbsp;<span>";
            echo $this->env->getExtension('phpbb')->lang("WELCOME_INDEX");
            echo "&#44;&nbsp;";
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "<i class=\"caret\"></i></span>
\t\t\t  </a>
                ";
            // line 96
            if ((isset($context["S_USER_NEW_PRIVMSG"]) ? $context["S_USER_NEW_PRIVMSG"] : null)) {
                echo "<em class=\"notifications-pm badge badge-warning\">";
                echo (isset($context["PM_NEW_COUNT_BADGE"]) ? $context["PM_NEW_COUNT_BADGE"] : null);
                echo "</em>";
            } elseif ((isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null)) {
                echo "<em class=\"notifications-pm badge badge-success\">";
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo "</em>";
            }
            echo "                   
\t\t\t\t   <ul class=\"dropdown-menu user-login-drop arrow-up\">
                        <li>";
            // line 98
            if ((isset($context["S_USER_NEW_PRIVMSG"]) ? $context["S_USER_NEW_PRIVMSG"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\">";
                echo (isset($context["PM_NEW_COUNT"]) ? $context["PM_NEW_COUNT"] : null);
                echo "</a>";
            } elseif ((isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\">";
                echo (isset($context["PM_UNREAD_COUNT"]) ? $context["PM_UNREAD_COUNT"] : null);
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("NO_PMS_INFO");
                echo "</a>";
            }
            echo "</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"navbar-wrapper\">
                              <div class=\"navbar-content navbar-avatar\">
                                    <div class=\"row\">
                                        <div class=\"col-md-5 col-xs-5\">
                                          ";
            // line 104
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
            } else {
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/user4.png\" alt=\"No avatar\">";
            }
            // line 105
            echo "                                            <p class=\"text-center\"><a href=\"";
            echo (isset($context["U_UCP_PROFILE_AVATAR"]) ? $context["U_UCP_PROFILE_AVATAR"] : null);
            echo "\">
                                                <small>";
            // line 106
            echo $this->env->getExtension('phpbb')->lang("CHANGE_AVATAR");
            echo "</small>
                                            </a></p>
                                        </div>
                                        <div class=\"col-md-7 col-xs-7\"><span>";
            // line 109
            echo (isset($context["CURRENT_USERNAME_FULL"]) ? $context["CURRENT_USERNAME_FULL"] : null);
            echo "</span>
                                            <p class=\"text-muted small\">";
            // line 110
            echo (isset($context["USER_EMAIL_MENU"]) ? $context["USER_EMAIL_MENU"] : null);
            echo "</p>
                                             ";
            // line 111
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                echo "<a class=\"btn btn-info btn-sm btn-block\" href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\"><i class=\"fa fa-user-md\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL_GENERAL");
                echo "</a>";
            }
            // line 112
            echo "\t                                         ";
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                echo "<a class=\"btn btn-warning btn-sm btn-block\" href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\"><i class=\"fa fa-legal\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("MODERATOR_PANEL_GENERAL");
                echo "</a>";
            }
            // line 113
            echo "                                             ";
            if (((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) &&  !((isset($context["U_ACP"]) ? $context["U_ACP"] : null) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null)))) {
                echo "<a class=\"btn btn-success btn-sm btn-block\" href=\"";
                echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
                echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("USER_PANEL");
                echo "</a>";
            }
            // line 114
            echo "\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"navbar-footer\">
                                    <div class=\"navbar-footer-content\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm\" href=\"";
            // line 120
            echo (isset($context["U_UCP_PROFILE_SETTINGS"]) ? $context["U_UCP_PROFILE_SETTINGS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("CHANGE_PASSWORD");
            echo "</a></div>
                                            <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm pull-right\" href=\"";
            // line 121
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LOGOUT");
            echo "</a></div>
                                        </div>
                                    </div>
                               </div>
\t\t\t\t\t\t\t</div>
                        </li>
                    </ul>
            </li>
\t\t</ul>
\t</div>
\t";
        }
        // line 132
        echo "</nav>";
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/flatboots_navigation_instead.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 132,  455 => 121,  449 => 120,  441 => 114,  432 => 113,  423 => 112,  415 => 111,  411 => 110,  407 => 109,  401 => 106,  396 => 105,  388 => 104,  361 => 98,  348 => 96,  332 => 94,  327 => 91,  322 => 88,  310 => 87,  304 => 86,  295 => 84,  289 => 82,  288 => 81,  285 => 80,  284 => 79,  280 => 77,  278 => 76,  275 => 75,  271 => 73,  265 => 71,  257 => 69,  254 => 68,  246 => 66,  244 => 65,  241 => 64,  239 => 63,  235 => 61,  229 => 57,  228 => 56,  221 => 55,  220 => 54,  214 => 51,  210 => 49,  208 => 48,  203 => 45,  196 => 43,  192 => 41,  175 => 39,  171 => 38,  168 => 37,  165 => 36,  159 => 34,  147 => 32,  145 => 31,  142 => 30,  138 => 29,  134 => 27,  122 => 21,  113 => 20,  104 => 19,  95 => 18,  87 => 17,  80 => 16,  66 => 14,  62 => 13,  50 => 12,  44 => 11,  31 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }
}
