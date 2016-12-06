<?php

/* overall_header.html */
class __TwigTemplate_d75b9612cf06cedfbb0ed3d32e17246722752593feb9b71e5663f251c2f46fb8 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<meta charset=\"";
        // line 4
        echo (isset($context["S_CONTENT_ENCODING"]) ? $context["S_CONTENT_ENCODING"] : null);
        echo "\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"designer\" content=\"SiteSplat http://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat\">
<meta content=\"";
        // line 7
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" property=\"og:site_name\">
<meta content=\"";
        // line 8
        echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
        echo "\" property=\"og:description\">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
";
        // line 11
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 12
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "&#40;";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo "&#41;&nbsp;";
        }
        if (( !(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) &&  !(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo "&nbsp;&#45;&nbsp;";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "&nbsp;&#45;&nbsp;";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo "&nbsp;&#45;&nbsp;";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo "&nbsp;&#45;&nbsp;";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        echo "</title>
";
        // line 13
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 14
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "\">";
            }
            // line 15
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=news\">";
            }
            // line 16
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=forums\">";
            }
            // line 17
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics\">";
            }
            // line 18
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics_active\">";
            }
            // line 19
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "\">";
            }
            // line 20
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "&amp;t=";
                echo (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null);
                echo "\">";
            }
            // line 21
        }
        // line 23
        echo "
";
        // line 24
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 25
            echo "\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\" />
";
        }
        // line 27
        echo "
<!-- Google free font here -->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>

<!-- CSS files start here -->
<link href=\"";
        // line 33
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">
";
        // line 34
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 35
            echo "<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/plupload.css\" rel=\"stylesheet\">
";
        }
        // line 37
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
        $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/overall_header_stylesheets_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_snappy', '__main__'));
        $this->env->loadTemplate('@sitesplat_snappy/event/overall_header_stylesheets_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 38
        echo "
";
        // line 39
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

<link href=\"";
        // line 41
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/basics.min.css\" rel=\"stylesheet\">
<!-- Remove the conditional below to use the custom CSS without FLATBOOTS Mini CMS Extension -->
";
        // line 43
        if ((isset($context["S_ALLOW_CUSTOMCSS"]) ? $context["S_ALLOW_CUSTOMCSS"] : null)) {
            // line 44
            echo "<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/custom.css\" rel=\"stylesheet\">
";
        }
        // line 46
        // line 47
        echo "<!-- CSS files stop here -->

";
        // line 49
        // line 50
        echo "
<!-- older scripts set started here after the headjs - cannot do this with phpbb31 due to ajax stuff -->
<script src=\"//cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.load.min.js\"></script>

</head>
<body data-spy=\"scroll\" data-target=\".scrollspy\" id=\"phpbb\" class=\"section-";
        // line 55
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\">
";
        // line 56
        // line 57
        echo "
 <header id=\"top\" class=\"navbar navbar-inverse navbar-static-top flat-nav\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button data-target=\".flat-nav-collapse\" data-toggle=\"collapse\" type=\"button\" class=\"nav-tog lines-button x navbar-toggle neutro\">
\t   <span class=\"sr-only sr-nav\">";
        // line 62
        echo $this->env->getExtension('phpbb')->lang("TOGGLE_NAV");
        echo "</span>
        <span class=\"lines\"></span>
      </button>
\t  ";
        // line 65
        if ((isset($context["LOGO_IMAGE_EXIST"]) ? $context["LOGO_IMAGE_EXIST"] : null)) {
            // line 66
            echo "      \t<a class=\"navbar-brand\" href=\"";
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\"><img style=\"max-height: 60px; max-width:100%; margin-top: -20px;\" class=\"img-responsive\" src=\"";
            echo (isset($context["T_IMAGES_PATH"]) ? $context["T_IMAGES_PATH"] : null);
            echo "../ext/sitesplat/flatbootsminicms/images/logo/";
            echo (isset($context["LOGO_FILENAME"]) ? $context["LOGO_FILENAME"] : null);
            echo "\" alt=\"";
            echo (isset($context["LOGO_TEXT"]) ? $context["LOGO_TEXT"] : null);
            echo "\" /></a>
      ";
        } elseif (        // line 67
(isset($context["LOGO_TEXT"]) ? $context["LOGO_TEXT"] : null)) {
            // line 68
            echo "\t    <a class=\"navbar-brand\" href=\"";
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\">";
            echo (isset($context["LOGO_TEXT"]) ? $context["LOGO_TEXT"] : null);
            echo "</a>
\t  ";
        } else {
            // line 70
            echo "      \t<a class=\"navbar-brand\" href=\"";
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("FLATBOOTS");
            echo "</a>
      ";
        }
        // line 72
        echo "    </div>
\t";
        // line 73
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 74
            echo "        ";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
            $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/flatboots_navigation_instead.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 75
            echo "    ";
        } else {
            // line 76
            echo "\t    ";
            $location = "addons/navigation.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/navigation.html", "overall_header.html", 76)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 77
            echo "\t";
        }
        echo "\t
  </div>
 </header>
    <div class=\"search-input search-input-fullscreen hidden-xs hidden-sm\">
\t   <form method=\"get\" id=\"search\" action=\"";
        // line 81
        echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
        echo "\">
\t\t   <fieldset>
\t\t   <input name=\"keywords\" id=\"keywords\" type=\"text\" maxlength=\"128\" title=\"";
        // line 83
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" value=\"\" autocomplete=\"off\"/>
\t\t   <div class=\"close\">&times;</div>
\t\t   ";
        // line 85
        echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
        echo "
\t\t   </fieldset> 
        </form> 
    </div>

";
        // line 90
        if ( !(isset($context["HIDE_HEADER"]) ? $context["HIDE_HEADER"] : null)) {
            echo "\t\t
  ";
            // line 91
            if ((isset($context["IN_BADGE"]) ? $context["IN_BADGE"] : null)) {
                // line 92
                echo "   ";
                $location = "@sitesplat_badge/header_badge_teaser.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("@sitesplat_badge/header_badge_teaser.html", "overall_header.html", 92)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 93
                echo "  ";
            } else {
                // line 94
                echo "   ";
                $location = "addons/header_teaser_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("addons/header_teaser_body.html", "overall_header.html", 94)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 95
                echo "  ";
            }
        } else {
            // line 97
            echo "<div style=\"padding-top:30px;\" class=\"space-teaser\"></div>
";
        }
        // line 99
        echo "  
<div class=\"container\">
  <!-- start content -->
  <div id=\"content-forum\">

  ";
        // line 104
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
        $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/header_breadcrumb_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 105
        echo "\t<div class=\"breadcrumb-line clearfix\">
\t\t<ul class=\"breadcrumb\">
\t\t<!-- https://developers.google.com/structured-data/testing-tool/ -->
\t\t";
        // line 108
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 109
        echo "
\t\t";
        // line 110
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 111
            echo "\t\t   <li><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\"><span class=\"icon fa fa-home\"></span></a></li>
\t\t   <li ";
            // line 112
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a></li>
\t\t";
        } else {
            // line 114
            echo "\t\t   <li><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\"><span class=\"icon fa fa-home\"></span></a></li>
\t\t   <li ";
            // line 115
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("INDEX");
            echo "</span></a></li>
\t\t";
        }
        // line 117
        echo "\t\t  
        ";
        // line 118
        // line 119
        echo "\t\t  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 120
            echo "\t\t   <li ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a itemprop=\"url\" href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\"";
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></li>\t\t 
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t\t";
        echo "  
\t    
\t\t</ul>
\t\t";
        // line 125
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewforum") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewtopic")))) {
            // line 126
            echo "\t\t<ul class=\"breadcrumb-buttons visible-xxs\">
\t\t    <li>
\t\t\t  <a href=\"#\" title=\"\" data-toggle=\"modal\" data-target=\"#BreadcrumbMap\">
\t\t\t   <i class=\"icon fa fa-sitemap\"></i>
\t\t\t  </a>
\t\t   </li>
\t\t</ul>
\t\t";
        }
        // line 134
        echo "\t</div>
\t
    ";
        // line 136
        // line 137
        echo "\t
\t<div id=\"page-body\">
\t
\t";
        // line 140
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 141
            echo "\t<div class=\"alert alert-warning fade in\">
\t\t<button data-dismiss=\"alert\" class=\"close\"><span class=\"awe-remove-circle\"></span></button>
\t\t<i class=\"fa fa-info\"></i>&nbsp;<strong>";
            // line 143
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t</div>
\t";
        }
        // line 146
        echo "\t
    ";
        // line 147
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 147,  524 => 146,  515 => 143,  511 => 141,  509 => 140,  504 => 137,  503 => 136,  499 => 134,  489 => 126,  487 => 125,  481 => 122,  463 => 120,  458 => 119,  457 => 118,  454 => 117,  445 => 115,  440 => 114,  431 => 112,  426 => 111,  424 => 110,  421 => 109,  418 => 108,  413 => 105,  408 => 104,  401 => 99,  397 => 97,  393 => 95,  380 => 94,  377 => 93,  364 => 92,  362 => 91,  358 => 90,  350 => 85,  343 => 83,  338 => 81,  330 => 77,  317 => 76,  314 => 75,  308 => 74,  306 => 73,  303 => 72,  291 => 70,  279 => 68,  277 => 67,  262 => 66,  260 => 65,  254 => 62,  247 => 57,  246 => 56,  238 => 55,  231 => 50,  230 => 49,  226 => 47,  225 => 46,  219 => 44,  217 => 43,  212 => 41,  207 => 39,  204 => 38,  195 => 37,  189 => 35,  187 => 34,  183 => 33,  175 => 27,  169 => 25,  167 => 24,  164 => 23,  162 => 21,  145 => 20,  130 => 19,  119 => 18,  108 => 17,  97 => 16,  86 => 15,  75 => 14,  73 => 13,  49 => 12,  45 => 11,  39 => 8,  35 => 7,  29 => 4,  22 => 2,  19 => 1,);
    }
}
