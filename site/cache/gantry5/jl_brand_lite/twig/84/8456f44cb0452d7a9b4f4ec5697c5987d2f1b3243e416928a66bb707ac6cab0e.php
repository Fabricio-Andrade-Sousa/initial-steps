<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/jlnavbar.html.twig */
class __TwigTemplate_6c0199f977c538e5c2f4019a6e85b50a918d8eb8d3a7a79c4005f2badd511213 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        try {            // line 2
            $context["menu"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", []), "instance", [0 => ($context["particle"] ?? null)], "method");
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 4
            echo "<div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute(($context["particle"] ?? null), "g5canvas", [])) {
            // line 8
            ob_start(function () { return ''; });
            // line 9
            (($this->getAttribute(($context["particle"] ?? null), "canvas_section", [])) ? (print (twig_escape_filter($this->env, (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "canvas_section", [])) . " "), "html", null, true))) : (print ("")));
            echo ".g-block.hidden {display: block;visibility: visible;}
.g-offcanvas-open .jl-sticky {z-index: inherit;}
";
            // line 11
            (($this->getAttribute(($context["particle"] ?? null), "canvas_section", [])) ? (print (twig_escape_filter($this->env, (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "canvas_section", [])) . " "), "html", null, true))) : (print ("")));
            echo ".g-offcanvas-toggle {position: relative;top: 0;left: 0;line-height: 0;display: flex !important;justify-content: center;align-items: center;column-gap: 0.25em;box-sizing: border-box;}
";
            $context["mobile_menu_visibility"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => ($context["mobile_menu_visibility"] ?? null), 1 => 0], "method");
            // line 14
            $this->displayBlock('javascript_footer', $context, $blocks);
        }
        // line 21
        echo "
";
        // line 22
        $context["sec_id"] = twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "section", []));
        // line 23
        echo "
";
        // line 24
        if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) && $this->getAttribute(($context["particle"] ?? null), "section", []))) {
            // line 25
            ob_start(function () { return ''; });
            // line 26
            echo "    jlUIkit.sticky('";
            echo twig_escape_filter($this->env, ($context["sec_id"] ?? null), "html", null, true);
            echo "', {
    ";
            // line 27
            if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) == "stickyonscroll")) {
                // line 28
                echo "    showOnUp: true,
    animation: 'jl-animation-slide-top',
    ";
            }
            // line 31
            echo "    ";
            if ($this->getAttribute(($context["particle"] ?? null), "media", [])) {
                // line 32
                echo "    media: '@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "media", []), "html", null, true);
                echo "',
    ";
            }
            // line 34
            echo "    top: '";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "top", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "top", []), 0)) : (0)), "html", null, true);
            echo "',
    offset: ";
            // line 35
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "offset", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "offset", []), 0)) : (0)), "html", null, true);
            echo "
} )
";
            $context["inline_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineScript", [0 => ($context["inline_js"] ?? null), 1 => 10, 2 => "footer"], "method");
        }
        // line 40
        echo "
";
        // line 41
        if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) || $this->getAttribute(($context["particle"] ?? null), "m_sticky", []))) {
            // line 42
            $context["sticky_navbar"] = ('' === $tmp = "html {height: auto;}") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 43
            $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => ($context["sticky_navbar"] ?? null), 1 => 0], "method");
        }
        // line 45
        ob_start(function () { return ''; });
        // line 46
        ob_start(function () { return ''; });
        // line 47
        if (($this->getAttribute(($context["particle"] ?? null), "dropbar", []) && ($this->getAttribute(($context["particle"] ?? null), "layout", []) == "justify"))) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".horizontal-justify .jl-container .jl-main-nav { padding: 0; }";
        }
        // line 48
        if (($this->getAttribute(($context["particle"] ?? null), "main_nav_margin", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])))) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .g-container .g-main-nav { margin: 0; }";
        }
        // line 49
        if ($this->getAttribute(($context["particle"] ?? null), "transparent_header", [])) {
            echo ".jl-header-overlay {position: absolute;z-index: 980;left: 0;right: 0;}";
        }
        // line 50
        if (($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_divider", []) && $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_divider_color", []))) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav.jl-nav-divider>:not(.jl-nav-header,.jl-nav-divider)+:not(.jl-nav-header,.jl-nav-divider) {border-top: 1px solid ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_divider_color", []));
            echo ";}";
        }
        // line 51
        if ($this->getAttribute(($context["particle"] ?? null), "navbar_height", [])) {
            // line 52
            echo "    #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-item, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-nav>li>a,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-nav>li>div.g-menu-item-container,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-toggle {min-height: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_height", []));
            echo "}
";
        }
        // line 54
        if ($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) {
            // line 55
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_color", [])) {
                // line 56
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a {color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_color", []), "html", null, true);
                echo ";}
";
            }
            // line 58
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", [])) {
                // line 59
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-item:not(.jl-logo), #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-toggle { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", []), "html", null, true);
                echo "; }
";
            }
            // line 61
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", [])) {
                // line 62
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav > li > a{text-transform: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", []), "html", null, true);
                echo ";}
";
            }
            // line 64
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", [])) {
                // line 65
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li:hover>a, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a.jl-open, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a:focus{color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", []), "html", null, true);
                echo ";}
";
            }
            // line 67
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_active_color", [])) {
                // line 68
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a:active, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li.jl-active>a{ color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                echo "; }
";
            }
            // line 70
            if (((($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []) || $this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []))) {
                // line 71
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown { 
        ";
                // line 72
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", [])) {
                    echo "background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []), "html", null, true);
                    echo ";";
                }
                // line 73
                echo "        ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_color", []), "html", null, true);
                    echo ";";
                }
                // line 74
                echo "        ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) {
                    echo "border-radius: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", []), "html", null, true);
                    echo ";";
                }
                // line 75
                echo "        ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_padding", [])) {
                    echo "padding: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []), "html", null, true);
                    echo ";";
                }
                // line 76
                echo "    }
";
            }
            // line 78
            if (($this->getAttribute(($context["particle"] ?? null), "dropbar", []) && $this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []))) {
                // line 79
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropbar { 
        background: ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []), "html", null, true);
                echo ";
    }
";
            }
            // line 83
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", [])) {
                // line 84
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav>li>a { padding: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", []));
                echo "; }
";
            }
            // line 86
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                // line 87
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a { ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", []));
                    echo ";";
                }
                echo " }
";
            }
            // line 89
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", [])) {
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", []), "html", null, true);
                echo ";} ";
            }
            echo " 
";
            // line 90
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", [])) {
                // line 91
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a:focus, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a:hover{ color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", []));
                echo "; }
";
            }
            // line 93
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", [])) {
                // line 94
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li.jl-active>a{ color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", []));
                echo ";}
";
            }
            // line 96
            if (($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_style", []) == "secondary")) {
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav-secondary .jl-nav-header {padding-left: 10px;}";
            }
            // line 97
            if ((($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_style", []) == "secondary") && $this->getAttribute(($context["particle"] ?? null), "dropdown_item_hover_background", []))) {
                // line 98
                echo "  #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav-secondary > li > a:hover, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav-secondary > li.jl-active > a {
    background-color: ";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_item_hover_background", []));
                echo ";
  }
";
            }
        } else {
            // line 103
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_color", [])) {
                // line 104
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li>.g-menu-item-container,
#";
                // line 105
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-logo { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_color", []), "html", null, true);
                echo "; }
";
            }
            // line 107
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", [])) {
                // line 108
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel > li > .g-menu-item-container, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-toggle { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", []), "html", null, true);
                echo "; }
";
            }
            // line 110
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", [])) {
                // line 111
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel > li > .g-menu-item-container {text-transform: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", []), "html", null, true);
                echo ";}
";
            }
            // line 113
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", [])) {
                // line 114
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li:hover>.g-menu-item-container,
#";
                // line 115
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li:hover>.g-menu-item-container {color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", []), "html", null, true);
                echo ";}
";
            }
            // line 117
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_active_color", [])) {
                // line 118
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li.active>.g-menu-item-container { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                echo "; }
#";
                // line 119
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li.active>.g-separator { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                echo "; }
";
                // line 120
                if (twig_test_empty($this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) {
                    // line 121
                    echo "    #";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo " .g-main-nav .g-toplevel > li:not(.g-menu-item-type-particle):not(.g-menu-item-type-module).active > .g-menu-item-container {color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                    echo ";}
";
                }
            }
            // line 124
            if (((($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []) || $this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []))) {
                // line 125
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-dropdown { 
";
                // line 126
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", [])) {
                    // line 127
                    echo "    background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []), "html", null, true);
                    echo ";
";
                }
                // line 129
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) {
                    // line 130
                    echo "    color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_color", []), "html", null, true);
                    echo ";
";
                }
                // line 132
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) {
                    // line 133
                    echo "    border-radius: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", []), "html", null, true);
                    echo ";
";
                }
                // line 135
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_padding", [])) {
                    // line 136
                    echo "    padding: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []), "html", null, true);
                    echo ";
";
                }
                // line 138
                echo " }
";
            }
            // line 140
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                // line 141
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", []));
                    echo ";";
                }
                echo " }
";
            }
            // line 143
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", [])) {
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", []), "html", null, true);
                echo ";} ";
            }
            echo " 
";
            // line 144
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", [])) {
                // line 145
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container:focus,#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container:hover { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", []));
                echo "; }
";
            }
            // line 147
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", [])) {
                // line 148
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li:not(.g-menu-item-type-particle):not(.g-menu-item-type-module).active .g-menu-item-container { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", []));
                echo ";}
";
            }
            // line 150
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", [])) {
                // line 151
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container {font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", []));
                echo ";}
";
            }
            // line 153
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", [])) {
                // line 154
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { padding: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", []));
                echo "; }
";
            }
        }
        // line 157
        if ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom") &&  !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "ct_container_width", [])))) {
            // line 158
            echo "    #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .tm-header .g-container { max-width: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "ct_container_width", []));
            echo "; }
";
        }
        // line 160
        if ($this->getAttribute(($context["particle"] ?? null), "nav_bg_color", [])) {
            // line 161
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-container:not(.jl-navbar-transparent) {
    background-color: ";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_bg_color", []), "html", null, true);
            echo ";
}
";
        }
        // line 165
        if ($this->getAttribute(($context["particle"] ?? null), "logo_color", [])) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-logo { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "logo_color", []), "html", null, true);
            echo ";}";
        }
        // line 166
        if ($this->getAttribute(($context["particle"] ?? null), "mobile_text_color", [])) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .tm-header-mobile .jl-logo { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "mobile_text_color", []), "html", null, true);
            echo ";}";
        }
        // line 167
        if (($this->getAttribute(($context["particle"] ?? null), "transparent_header", []) == "light")) {
            // line 168
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li > a, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-search-toggle, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-toggle {color: rgba(255, 255, 255, 0.8);}#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-search-toggle:hover, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-search-toggle:focus, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-toggle:hover, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-toggle:focus {color: #ffffff;}#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li:hover > a, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li > a:focus, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li > a[aria-expanded=\"true\"]{color: #ffffff;}#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li > a:active, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li.jl-active > a{color: #ffffff;}
";
        }
        // line 170
        if (($this->getAttribute(($context["particle"] ?? null), "search_style", []) == "modal")) {
            // line 171
            echo "#js-search-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-search-large .jl-search-input {background: #f8f8f8;border: none;box-shadow:none}
#js-search-";
            // line 172
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-search-large .jl-search-icon";
            echo (($this->getAttribute(($context["particle"] ?? null), "icon_flip", [])) ? ("-flip~") : (":not(.jl-search-icon-flip)~"));
            echo ".jl-search-input {padding-";
            echo (($this->getAttribute(($context["particle"] ?? null), "icon_flip", [])) ? ("right") : ("left"));
            echo ": 40px;}
";
        }
        // line 174
        if (($this->getAttribute(($context["particle"] ?? null), "navbar_style", []) && ($this->getAttribute(($context["particle"] ?? null), "subnav_extended", []) == "drop"))) {
            // line 175
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-dropdown-nav [aria-expanded=true]>.jl-drop-parent-icon {transform: rotate(-90deg)}
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["inline_css"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 179
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => ($context["inline_css"] ?? null), 1 => 0], "method");
        // line 180
        echo "
";
        // line 181
        ob_start(function () { return ''; });
        // line 182
        if ($this->getAttribute(($context["particle"] ?? null), "g5canvas", [])) {
            // line 183
            echo "<div class=\"g-offcanvas-toggle jl-navbar-toggle\" role=\"navigation\" data-offcanvas-toggle aria-controls=\"g-offcanvas\">
    <span jl-navbar-toggle-icon class=\"jl-icon jl-navbar-toggle-icon\"></span>
</div>
";
        } else {
            // line 187
            echo "<a class=\"jl-navbar-toggle jl-navbar-toggle-animate mobile-toggle\" href=\"#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" jl-toggle=\"animation: jl-animation-fade\">
";
            // line 188
            if (($this->getAttribute(($context["particle"] ?? null), "menu_text", []) && ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "right"))) {
                echo "<span class=\"jl-margin-small-right jl-text-middle\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_text", []), "html", null, true);
                echo "</span>";
            }
            // line 189
            echo "<span jl-navbar-toggle-icon></span>
";
            // line 190
            if (($this->getAttribute(($context["particle"] ?? null), "menu_text", []) && ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "left"))) {
                echo "<span class=\"jl-margin-small-left jl-text-middle\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_text", []), "html", null, true);
                echo "</span>";
            }
            // line 191
            echo "</a>
";
        }
        $context["menu_toggle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 194
        echo "
";
        // line 195
        if ($this->getAttribute(($context["particle"] ?? null), "sc_link_target", [])) {
            // line 196
            echo "    ";
            $context["targetAttrib"] = ((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "sc_link_target", []))) . "\"");
            // line 197
            echo "    ";
            $context["targetAttrib"] = ((($this->getAttribute(($context["particle"] ?? null), "sc_link_target", []) == "_blank")) ? ((($context["targetAttrib"] ?? null) . " rel=\"noopener noreferrer\"")) : (($context["targetAttrib"] ?? null)));
        }
        // line 199
        echo "
";
        // line 201
        ob_start(function () { return ''; });
        // line 202
        echo "<ul class=\"jl-flex-inline jl-flex-middle jl-flex-nowrap";
        if ($this->getAttribute(($context["particle"] ?? null), "social_icon_gap", [])) {
            echo " jl-grid-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "social_icon_gap", []));
        }
        if ($this->getAttribute(($context["particle"] ?? null), "social_inverse", [])) {
            echo " jl-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "social_inverse", []), "html", null, true);
        }
        echo "\" jl-grid>
";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "social_items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 204
            echo "    ";
            $context["title"] = (( !twig_test_empty($this->getAttribute($context["item"], "social_title", []))) ? (twig_escape_filter($this->env, $this->getAttribute($context["item"], "social_title", []))) : (twig_escape_filter($this->env, $this->getAttribute($context["item"], "social_text", []))));
            // line 205
            echo "    ";
            $context["titleAttrib"] = (( !twig_test_empty(($context["title"] ?? null))) ? (((((" title=\"" . ($context["title"] ?? null)) . "\" aria-label=\"") . ($context["title"] ?? null)) . "\"")) : (""));
            // line 206
            echo "    <li>
        <a class=\"tm-icon";
            // line 207
            echo ((($this->getAttribute(($context["particle"] ?? null), "sc_icon_button", []) && twig_in_filter($this->getAttribute(($context["particle"] ?? null), "display", []), [0 => "both", 1 => "icons_only"]))) ? (" jl-icon-button") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "social_link", []));
            echo "\"";
            echo ($context["targetAttrib"] ?? null);
            echo ($context["titleAttrib"] ?? null);
            echo ">
            ";
            // line 208
            if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "display", []), [0 => "both", 1 => "icons_only"])) {
                echo "<span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "social_icon", []));
                echo "\"></span>";
            }
            // line 209
            echo "            ";
            if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "display", []), [0 => "both", 1 => "text_only"])) {
                echo "<span class=\"g-social-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "social_text", []));
                echo "</span>";
            }
            // line 210
            echo "        </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "</ul>
";
        $context["social_icons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 215
        echo "
";
        // line 216
        $context["theme_container"] = ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) ? ("g-container") : (("jl-container" . ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])))) : ("")))));
        // line 217
        echo "
";
        // line 219
        ob_start(function () { return ''; });
        // line 220
        if (($this->getAttribute(($context["particle"] ?? null), "search_style", []) == "default")) {
            // line 221
            echo "  ";
            if ( !$this->getAttribute(($context["joomla"] ?? null), "checkVersion", [0 => "4.0"], "method")) {
                // line 222
                echo "    <form class=\"jl-search jl-search-default\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php"], "method"), "html", null, true);
                echo "\" method=\"post\">
      <span jl-search-icon class=\"";
                // line 223
                echo (($this->getAttribute(($context["particle"] ?? null), "icon_flip", [])) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
      <input class=\"jl-search-input\" type=\"search\" name=\"searchword\" placeholder=\"";
                // line 224
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\">
      <input type=\"hidden\" name=\"task\" value=\"search\" />
      <input type=\"hidden\" name=\"option\" value=\"com_search\" />
      <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 227
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
    </form>
  ";
            } else {
                // line 230
                echo "    <form class=\"jl-search jl-search-default\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php?option=com_finder&view=search"], "method"), "html", null, true);
                echo "\" method=\"get\" role=\"search\">
      <span jl-search-icon class=\"";
                // line 231
                echo (($this->getAttribute(($context["particle"] ?? null), "icon_flip", [])) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
      <input id=\"js-search-";
                // line 232
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"jl-search-input\" type=\"search\" name=\"q\" placeholder=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\">
      <input type=\"hidden\" name=\"option\" value=\"com_finder\" />
      <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 234
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
    </form>  
  ";
            }
        } else {
            // line 238
            echo "<a href=\"#js-search-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"jl-search-toggle\" jl-search-icon jl-toggle title=\"Search Icon\"></a>
<div id=\"js-search-";
            // line 239
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"jl-modal-full jl-modal\" jl-modal>
  <div class=\"jl-modal-dialog jl-flex jl-flex-center jl-flex-middle\" jl-height-viewport>
    <button class=\"jl-modal-close-full jl-close-large\" type=\"button\" jl-close></button>
    ";
            // line 242
            if ( !$this->getAttribute(($context["joomla"] ?? null), "checkVersion", [0 => "4.0"], "method")) {
                // line 243
                echo "        <form class=\"jl-search jl-search-large\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php"], "method"), "html", null, true);
                echo "\" method=\"post\">
        <span jl-search-icon class=\"";
                // line 244
                echo (($this->getAttribute(($context["particle"] ?? null), "icon_flip", [])) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
        <input class=\"jl-search-input jl-text-center\" type=\"search\" name=\"searchword\" placeholder=\"";
                // line 245
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\" autofocus>
        <input type=\"hidden\" name=\"task\" value=\"search\" />
        <input type=\"hidden\" name=\"option\" value=\"com_search\" />
        <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 248
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
        </form>
    ";
            } else {
                // line 251
                echo "        <form class=\"jl-search jl-search-large\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php?option=com_finder&view=search"], "method"), "html", null, true);
                echo "\" method=\"get\" role=\"search\">
        <span jl-search-icon class=\"";
                // line 252
                echo (($this->getAttribute(($context["particle"] ?? null), "icon_flip", [])) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
        <input id=\"";
                // line 253
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"jl-search-input jl-text-center\" type=\"search\" name=\"q\" placeholder=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\" autofocus>
        <input type=\"hidden\" name=\"option\" value=\"com_finder\" />
        <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 255
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
        </form>  
    ";
            }
            // line 258
            echo "  </div>
</div>
";
        }
        $context["navbar_search"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 262
        echo "
";
        // line 270
        echo "
";
        // line 288
        echo "
";
        // line 299
        echo "
";
        // line 450
        echo "
";
        // line 488
        echo "
";
        // line 497
        echo "
";
        // line 529
        echo "
";
        // line 530
        $context["macro"] = $this;
        // line 531
        echo "
";
        // line 532
        $context["url"] = _twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "url", [])), $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"));
        // line 533
        if ((($context["url"] ?? null) == $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"))) {
            $context["rel"] = "rel=\"home\"";
        }
        // line 534
        $context["logo_init"] = ($this->getAttribute(($context["particle"] ?? null), "image", []) || $this->getAttribute(($context["particle"] ?? null), "text", []));
        // line 535
        echo "
";
        // line 536
        ob_start(function () { return ''; });
        // line 537
        echo "    ";
        $context["class"] = (($this->getAttribute(($context["particle"] ?? null), "class", [])) ? ((("class=\"" . $this->getAttribute(($context["particle"] ?? null), "class", [])) . "\"")) : (""));
        // line 538
        echo "    ";
        $context["height"] = (($this->getAttribute(($context["particle"] ?? null), "height", [])) ? ((("style=\"max-height: " . $this->getAttribute(($context["particle"] ?? null), "height", [])) . "\"")) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute(($context["particle"] ?? null), "image", []))));
        // line 539
        echo "
    ";
        // line 540
        if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
            // line 541
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])));
            echo "\" ";
            echo ((array_key_exists("height", $context)) ? (_twig_default_filter(($context["height"] ?? null), "")) : (""));
            echo " alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []), "html", null, true);
            echo "\"";
            echo (($this->getAttribute(($context["particle"] ?? null), "svg_support", [])) ? (" jl-svg") : (""));
            echo ">
    ";
        } else {
            // line 543
            echo "        ";
            echo $this->getAttribute(($context["particle"] ?? null), "text", []);
            echo " 
    ";
        }
        // line 545
        echo "
";
        $context["logo_render"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 547
        echo "
";
        // line 548
        ob_start(function () { return ''; });
        // line 549
        echo "    ";
        $context["class"] = (($this->getAttribute(($context["particle"] ?? null), "class", [])) ? ((("class=\"" . $this->getAttribute(($context["particle"] ?? null), "class", [])) . "\"")) : (""));
        echo "    
    ";
        // line 550
        $context["image_height"] = (($this->getAttribute(($context["particle"] ?? null), "image_height", [])) ? ((("style=\"max-height: " . $this->getAttribute(($context["particle"] ?? null), "image_height", [])) . "\"")) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", []))));
        // line 551
        echo "
    ";
        // line 552
        if ($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) {
            // line 553
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])));
            echo "\" ";
            echo ((array_key_exists("image_height", $context)) ? (_twig_default_filter(($context["image_height"] ?? null), "")) : (""));
            echo " alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []), "html", null, true);
            echo "\"";
            echo (($this->getAttribute(($context["particle"] ?? null), "svg_support", [])) ? (" jl-svg") : (""));
            echo ">
    ";
        } else {
            // line 555
            echo "        ";
            echo $this->getAttribute(($context["particle"] ?? null), "text", []);
            echo " 
    ";
        }
        // line 557
        echo "
";
        $context["mobile_logo_render"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 559
        echo "
";
        // line 561
        $context["isNavbarpos"] = (((($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar") || (($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar") && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) || (($this->getAttribute(($context["particle"] ?? null), "html_pos", []) == "navbar") && $this->getAttribute(($context["particle"] ?? null), "html", []))) || $this->getAttribute($this->getAttribute(($context["menu"] ?? null), "root", []), "count", [], "method"));
        // line 562
        $context["isHeaderpos"] = ((($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "header") || (($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "header") && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) || (($this->getAttribute(($context["particle"] ?? null), "html_pos", []) == "header") && $this->getAttribute(($context["particle"] ?? null), "html", [])));
        // line 563
        echo "
";
        // line 564
        if ($this->getAttribute($this->getAttribute(($context["menu"] ?? null), "root", []), "count", [], "method")) {
            // line 565
            echo "
<div id=\"";
            // line 566
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"tm-header menu-";
            echo (($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) ? ("extended") : ("simple"));
            if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "layout", []), [0 => "left", 1 => "center", 2 => "right"])) {
                echo " horizontal-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", []));
            }
            echo " jl-visible@";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_visibility", []));
            if ($this->getAttribute(($context["particle"] ?? null), "transparent_header", [])) {
                echo " jl-header-overlay";
            }
            echo "\" jl-header>

";
            // line 568
            if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "section", [])))) {
                // line 569
                echo "<div jl-sticky media=\"@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_visibility", []));
                echo "\"";
                echo ((($this->getAttribute(($context["particle"] ?? null), "sticky", []) == "stickyonscroll")) ? (" show-on-up animation=\"jl-animation-slide-top\"") : (""));
                if ($this->getAttribute(($context["particle"] ?? null), "top", [])) {
                    echo " top=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "top", []));
                    echo "\"";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "offset", [])) {
                    echo " offset=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "offset", []));
                    echo "\"";
                }
                echo " cls-active=\"jl-navbar-sticky\"";
                if ($this->getAttribute(($context["particle"] ?? null), "transparent_header", [])) {
                    echo " cls-inactive=\"jl-navbar-transparent jl-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "transparent_header", []));
                    echo "\"";
                }
                echo " sel-target=\".jl-navbar-container\">
";
            }
            // line 571
            echo "
<div class=\"jl-navbar-container";
            // line 572
            if (($this->getAttribute(($context["particle"] ?? null), "transparent_header", []) &&  !$this->getAttribute(($context["particle"] ?? null), "sticky", []))) {
                echo " jl-navbar-transparent jl-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "transparent_header", []));
            }
            echo "\">

";
            // line 574
            if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
                // line 575
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, ($context["theme_container"] ?? null), "html", null, true);
                echo "\">
        ";
                // line 576
                echo ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) ? ("<div class=\"navbar-wrapper\">") : (""));
                echo "
";
            }
            // line 578
            echo "
    <nav class=\"jl-navbar";
            // line 579
            echo (($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) ? (" jl-main-nav") : (" g-main-nav"));
            echo ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "justify")) ? (" jl-navbar-justify") : (""));
            echo "\"";
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) {
                echo " jl-navbar=\"";
                echo (($this->getAttribute(($context["particle"] ?? null), "dropbar", [])) ? ("dropbar: true; ") : (""));
                echo "container: #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo ".tm-header";
                echo (($this->getAttribute(($context["particle"] ?? null), "sticky", [])) ? (" > [jl-sticky]") : (""));
                echo "; boundary: #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar;";
                ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_alignment", []))) ? (print (twig_escape_filter($this->env, ((" align: " . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_alignment", []))) . ";"), "html", null, true))) : (print ("")));
                (($this->getAttribute(($context["particle"] ?? null), "navbar_alignment", [])) ? (print (twig_escape_filter($this->env, ((" target-x: #" . ($context["id"] ?? null)) . " .jl-navbar;"), "html", null, true))) : (print ("")));
                echo (((($this->getAttribute(($context["particle"] ?? null), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "hoverExpand", []), "true")) : ("true"))) ? ("") : (" mode: click"));
                echo "\"";
            } else {
                echo (($this->getAttribute(($context["particle"] ?? null), "mobileTarget", [])) ? (" data-g-mobile-target") : (""));
                echo " data-g-hover-expand=\"";
                echo (((($this->getAttribute(($context["particle"] ?? null), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "hoverExpand", []), "true")) : ("true"))) ? ("true") : ("false"));
                echo "\"";
            }
            echo ">

        ";
            // line 581
            if ((($context["logo_init"] ?? null) || ($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left"))) {
                // line 582
                echo "        <div class=\"jl-navbar-left\">

        ";
                // line 584
                if (($context["logo_init"] ?? null)) {
                    // line 585
                    echo "            <a class=\"jl-navbar-item jl-logo\" href=\"";
                    echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                    echo "\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "text", [])) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                        echo "\"";
                    }
                    echo " aria-label=\"Back to the homepage\" rel=\"home\" ";
                    echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                    echo ">
                ";
                    // line 586
                    echo twig_escape_filter($this->env, ($context["logo_render"] ?? null), "html", null, true);
                    echo "
            </a>
        ";
                }
                // line 589
                echo "
        ";
                // line 590
                if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left")) {
                    // line 591
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    echo "\">
            ";
                    // line 592
                    echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                    echo "
        </ul>
        ";
                }
                // line 595
                echo "
        ";
                // line 596
                if ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left") && ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar"))) {
                    // line 597
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 598
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 601
                echo "
        ";
                // line 602
                if (((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left") && ($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar")) && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 603
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child custom\">
                ";
                    // line 605
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 609
                echo "
        </div>
        ";
            }
            // line 612
            echo "
        ";
            // line 613
            if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center")) {
                // line 614
                echo "
        <div class=\"jl-navbar-center\">

        ";
                // line 617
                if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center")) {
                    // line 618
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    echo "\">
            ";
                    // line 619
                    echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                    echo "
        </ul>
        ";
                }
                // line 622
                echo "
        ";
                // line 623
                if ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center") && ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar"))) {
                    // line 624
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 625
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 628
                echo "
        ";
                // line 629
                if (((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center") && ($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar")) && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 630
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 632
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 636
                echo "
        </div>
        ";
            }
            // line 639
            echo "
        ";
            // line 640
            if ((($context["isHeaderpos"] ?? null) || (($context["isNavbarpos"] ?? null) && ($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right")))) {
                // line 641
                echo "        <div class=\"jl-navbar-right\">

        ";
                // line 643
                if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right")) {
                    // line 644
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    echo "\">
            ";
                    // line 645
                    echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                    echo "
        </ul>
        ";
                }
                // line 648
                echo "
        ";
                // line 649
                if ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right") && ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar"))) {
                    // line 650
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 651
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 654
                echo "
        ";
                // line 655
                if (((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right") && ($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar")) && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 656
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 658
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 662
                echo "
        ";
                // line 663
                if (($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "header")) {
                    // line 664
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 665
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 668
                echo "
        ";
                // line 669
                if ((($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "header") && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 670
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 672
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 676
                echo "
        </div>
        ";
            }
            // line 679
            echo "
    </nav>

";
            // line 682
            if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
                // line 683
                echo "        ";
                echo ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) ? ("</div>") : (""));
                echo "
    </div>
";
            }
            // line 686
            echo "</div>

";
            // line 688
            if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "section", [])))) {
                // line 689
                echo "</div>
";
            }
            // line 691
            echo "
</div>
";
        }
        // line 694
        echo "
";
        // line 696
        echo "
<div class=\"";
        // line 697
        if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
            echo "tm-header-mobile ";
        }
        echo "jl-hidden@";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_visibility", []));
        echo "\">

";
        // line 699
        if ($this->getAttribute(($context["particle"] ?? null), "m_sticky", [])) {
            // line 700
            echo "<div jl-sticky";
            echo ((($this->getAttribute(($context["particle"] ?? null), "m_sticky", []) == "stickyonscroll")) ? (" show-on-up animation=\"jl-animation-slide-top\"") : (""));
            if ($this->getAttribute(($context["particle"] ?? null), "ms_top", [])) {
                echo " top=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "ms_top", []));
                echo "\"";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "ms_offset", [])) {
                echo " offset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "ms_offset", []));
                echo "\"";
            }
            echo " cls-active=\"jl-navbar-sticky\" sel-target=\".jl-navbar-container\">
";
        }
        // line 702
        echo "
<div class=\"jl-navbar-container\">

    ";
        // line 705
        if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
            // line 706
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, ($context["theme_container"] ?? null), "html", null, true);
            echo "\">
    ";
        }
        // line 708
        echo "
        <nav class=\"jl-navbar\" jl-navbar=\"container: .tm-header-mobile\">

            ";
        // line 711
        if ((($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "left") || ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "left"))) {
            // line 712
            echo "
                <div class=\"jl-navbar-left\">

                    ";
            // line 715
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "left")) {
                // line 716
                echo "                    <a class=\"jl-navbar-item jl-logo\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\"";
                if ($this->getAttribute(($context["particle"] ?? null), "text", [])) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                    echo "\"";
                }
                echo " aria-label=\"Back to the homepage\" rel=\"home\" ";
                echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                echo ">
                        ";
                // line 717
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
                echo "
                    </a>
                    ";
            }
            // line 720
            echo "
                    ";
            // line 721
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "left")) {
                // line 722
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["menu_toggle"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 724
            echo "
                </div>
            ";
        }
        // line 727
        echo "
            ";
        // line 728
        if (($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "center")) {
            // line 729
            echo "                <div class=\"jl-navbar-center\">
                    <a class=\"jl-navbar-item jl-logo\" href=\"";
            // line 730
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\"";
            if ($this->getAttribute(($context["particle"] ?? null), "text", [])) {
                echo " title=\"";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                echo "\"";
            }
            echo " aria-label=\"Back to the homepage\" rel=\"home\" ";
            echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
            echo ">
                        ";
            // line 731
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
        }
        // line 735
        echo "
            ";
        // line 736
        if ((($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "right") || ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "right"))) {
            // line 737
            echo "                <div class=\"jl-navbar-right\">
                    ";
            // line 738
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "right")) {
                // line 739
                echo "                    <a class=\"jl-navbar-item jl-logo\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\"";
                if ($this->getAttribute(($context["particle"] ?? null), "text", [])) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                    echo "\"";
                }
                echo " aria-label=\"Back to the homepage\" rel=\"home\" ";
                echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                echo ">
                        ";
                // line 740
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
                echo "
                    </a>
                    ";
            }
            // line 743
            echo "
                    ";
            // line 744
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "right")) {
                // line 745
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["menu_toggle"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 747
            echo "                </div>
            ";
        }
        // line 749
        echo "
        </nav>

    ";
        // line 752
        if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
            // line 753
            echo "        </div>
    ";
        }
        // line 755
        echo "
</div>

";
        // line 758
        if ((($this->getAttribute(($context["particle"] ?? null), "menu_animation", []) == "dropdown") &&  !$this->getAttribute(($context["particle"] ?? null), "g5canvas", []))) {
            // line 759
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate("@particles/jlnavcanvas.html.twig", "@particles/jlnavbar.html.twig", 759);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
        }
        // line 761
        if ($this->getAttribute(($context["particle"] ?? null), "m_sticky", [])) {
            // line 762
            echo "</div>
";
        }
        // line 764
        echo "
";
        // line 765
        if ((($this->getAttribute(($context["particle"] ?? null), "menu_animation", []) != "dropdown") &&  !$this->getAttribute(($context["particle"] ?? null), "g5canvas", []))) {
            // line 766
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
            try {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =                 $this->loadTemplate("@particles/jlnavcanvas.html.twig", "@particles/jlnavbar.html.twig", 766);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
            }
        }
        // line 768
        echo "
</div>
";
    }

    // line 14
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 15
        echo "<script>
var el = document.getElementsByClassName(\"g-offcanvas-hide\");
while (el.length > 0) el[0].remove();
</script>
";
    }

    // line 263
    public function getgetCustomWidth($__item__ = null, $__menu__ = null, $__mode__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "mode" => $__mode__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 264
            if ((((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") &&  !((($context["dropdown_type"] ?? null) == "fullwidth") && ($this->getAttribute(($context["item"] ?? null), "level", []) > ($context["start_level"] ?? null))))) {
                // line 265
                if ((($context["mode"] ?? null) == "item")) {
                    echo " style=\"position: relative;\"";
                } elseif ((                // line 266
($context["mode"] ?? null) == "submenu")) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "width", []), "html", null, true);
                    echo ";\" data-g-item-width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "width", []), "html", null, true);
                    echo "\"";
                }
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 271
    public function getdisplayParticle($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 272
            echo "    ";
            try {                // line 273
                echo "    ";
                $context["in_particle"] = (((($this->getAttribute(($context["context"] ?? null), "in_particle", [], "any", true, true) &&  !(null === $this->getAttribute(($context["context"] ?? null), "in_particle", [])))) ? ($this->getAttribute(($context["context"] ?? null), "in_particle", [])) : (0)) + 1);
                // line 274
                echo "    ";
                if ((($context["in_particle"] ?? null) > 5)) {
                    // line 275
                    echo "        ";
                    throw new \RuntimeException("Particle loop detected"                    ,                     500                    );
                    // line 276
                    echo "    ";
                }
                // line 277
                echo "
    ";
                // line 278
                $context["context"] = twig_array_merge(($context["context"] ?? null), ["particle" => $this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "in_particle" => ($context["in_particle"] ?? null)]);
                // line 279
                echo "    ";
                $context["classes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "block", []), "class", []);
                // line 280
                echo "    <div class=\"menu-item-particle";
                ((($context["classes"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["classes"] ?? null)), "html", null, true))) : (print ("")));
                echo "\">
        ";
                // line 281
                $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = null;
                try {
                    $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =                     $this->loadTemplate([0 => (("particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig")], "@particles/jlnavbar.html.twig", 281);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) {
                    $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b->display(twig_to_array(                    // line 282
($context["context"] ?? null)));
                }
                // line 283
                echo "    </div>
    ";
            } catch (\Exception $e) {
                if ($context['gantry']->debug()) throw $e;
                if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
                $context['e'] = $e;
                // line 285
                echo "        <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
                echo "</div>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 289
    public function getdisplayTitle($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 290
            echo "    ";
            if (( !$this->getAttribute(($context["item"] ?? null), "icon_only", []) ||  !($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) {
                // line 291
                echo "        ";
                if ($this->getAttribute(($context["item"] ?? null), "subtitle", [])) {
                    // line 292
                    echo "        <div>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        <div class=\"jl-navbar-subtitle\">";
                    // line 293
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "subtitle", []), "html", null, true);
                    echo "</div></div>
        ";
                } else {
                    // line 295
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        ";
                }
                // line 297
                echo "    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 300
    public function getdisplayItem($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 301
            echo "    ";
            $context["self"] = $this;
            // line 302
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "particle") &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "enabled", []))) {
                // line 303
                echo "        ";
                $context["enabled"] = 0;
                // line 304
                echo "    ";
            }
            // line 305
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "visible", []) && $this->getAttribute(($context["item"] ?? null), "enabled", [])) && ((array_key_exists("enabled", $context)) ? (_twig_default_filter(($context["enabled"] ?? null), 1)) : (1)))) {
                // line 306
                echo "        ";
                $context["title"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) || $this->getAttribute(($context["item"] ?? null), "link_title", []))) ? (((" title=\"" . twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "link_title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "link_title", []), $this->getAttribute(($context["item"] ?? null), "title", []))) : ($this->getAttribute(($context["item"] ?? null), "title", []))))) . "\"")) : (""));
                // line 307
                echo "        ";
                $context["label"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) && ($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) ? (((" aria-label=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []))) . "\"")) : (""));
                // line 308
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 309
                    echo "        ";
                    $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? (" jl-active") : (""));
                    // line 310
                    echo "        ";
                } else {
                    // line 311
                    echo "        ";
                    $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? (" active") : (""));
                    // line 312
                    echo "        ";
                }
                // line 313
                echo "        ";
                $context["dropdown"] = ((($this->getAttribute(($context["item"] ?? null), "level", []) == ($context["start_level"] ?? null))) ? ((" g-" . $this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method"))) : (""));
                // line 314
                echo "        ";
                $context["parrentIcon"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "parrentIcon", []);
                // line 315
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 316
                    echo "        ";
                    $context["parent"] = ((($this->getAttribute(($context["item"] ?? null), "hasChildren", [], "method") &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) ? (" jl-parent") : (""));
                    // line 317
                    echo "        ";
                } else {
                    // line 318
                    echo "        ";
                    $context["parent"] = ((($this->getAttribute(($context["item"] ?? null), "hasChildren", [], "method") &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) ? (" g-parent") : (""));
                    // line 319
                    echo "        ";
                }
                echo "        
        
        ";
                // line 321
                $context["target"] = (((($this->getAttribute(($context["item"] ?? null), "target", []) != "_self") || $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "forceTarget", []))) ? (((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "target", []))) . "\"")) : (""));
                // line 322
                echo "        ";
                $context["rel"] = $this->getAttribute(($context["item"] ?? null), "rel", []);
                // line 323
                echo "
        ";
                // line 324
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_blank")) {
                    // line 325
                    echo "            ";
                    if (!twig_in_filter("noopener", ($context["rel"] ?? null))) {
                        // line 326
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 327
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noopener");
                        // line 328
                        echo "            ";
                    }
                    // line 329
                    echo "            ";
                    if (!twig_in_filter("noreferrer", ($context["rel"] ?? null))) {
                        // line 330
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 331
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noreferrer");
                        // line 332
                        echo "            ";
                    }
                    // line 333
                    echo "        ";
                }
                // line 334
                echo "
        ";
                // line 335
                $context["listAttributes"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute(($context["item"] ?? null), "attributes", []));
                // line 336
                echo "        ";
                $context["linkAttributes"] = "";
                // line 337
                echo "
        ";
                // line 338
                if ($this->getAttribute(($context["item"] ?? null), "link_attributes", [])) {
                    // line 339
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "link_attributes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 340
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attribute"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 341
                            echo "                    ";
                            if (($context["key"] == "rel")) {
                                // line 342
                                echo "                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $context["value"], " "));
                                foreach ($context['_seq'] as $context["_key"] => $context["hVal"]) {
                                    // line 343
                                    echo "                            ";
                                    if (!twig_in_filter($context["hVal"], ($context["rel"] ?? null))) {
                                        // line 344
                                        echo "                                ";
                                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                                        // line 345
                                        echo "                                ";
                                        $context["rel"] = (($context["rel"] ?? null) . $context["hVal"]);
                                        // line 346
                                        echo "                            ";
                                    }
                                    // line 347
                                    echo "                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hVal'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 348
                                echo "                    ";
                            } else {
                                // line 349
                                echo "                        ";
                                $context["linkAttributes"] = (((((($context["linkAttributes"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                                // line 350
                                echo "                    ";
                            }
                            // line 351
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 352
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 353
                    echo "        ";
                }
                // line 354
                echo "
        ";
                // line 356
                echo "        ";
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_nonav")) {
                    // line 357
                    echo "            ";
                    $context["target"] = "target=\"_blank\"";
                    // line 358
                    echo "            ";
                    $context["linkAttributes"] = (($context["linkAttributes"] ?? null) . " onclick=\"window.open(this.href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes'); return false;\"");
                    // line 359
                    echo "        ";
                }
                // line 360
                echo "        ";
                $context["item_accordion"] = (((((($this->getAttribute(($context["item"] ?? null), "type", []) == "separator") || ($this->getAttribute(($context["item"] ?? null), "type", []) == "heading")) && ($this->getAttribute(($context["item"] ?? null), "level", []) > 1)) && ($context["parent"] ?? null))) ? (" js-accordion") : (""));
                // line 361
                echo "        ";
                $context["rel"] = ((($context["rel"] ?? null)) ? (((" rel=\"" . twig_escape_filter($this->env, ($context["rel"] ?? null), "html_attr")) . "\"")) : (""));
                // line 362
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 363
                    echo "        <li class=\"item-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                    if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                    }
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    if ($this->getAttribute(($context["item"] ?? null), "class", [])) {
                        echo " ";
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                    }
                    if ( !($context["parent"] ?? null)) {
                        if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "separator") && ($this->getAttribute(($context["item"] ?? null), "level", []) != 1))) {
                            echo " jl-nav-divider";
                        } elseif ((($this->getAttribute(($context["item"] ?? null), "type", []) == "heading") && ($this->getAttribute(($context["item"] ?? null), "level", []) != 1))) {
                            echo " jl-nav-header";
                        }
                    }
                    if ((($this->getAttribute(($context["item"] ?? null), "level", []) > 1) && ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "subnav_extended", []) == "accordion"))) {
                        echo " ";
                        if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                            echo twig_escape_filter($this->env, ($context["item_accordion"] ?? null), "html", null, true);
                        }
                        echo ((((($context["parent"] ?? null) && ($context["item_accordion"] ?? null)) && ($context["active"] ?? null))) ? (" jl-open") : (""));
                    }
                    echo "\"";
                    // line 364
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "item", ($context["dropdown"] ?? null));
                    // line 365
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
                ";
                    // line 366
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        // line 367
                        echo "                    <a";
                        if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
                            echo " class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "anchor_class", []), "html", null, true);
                            echo "\"";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", []), "html", null, true);
                        echo "\"";
                        echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                        if ($this->getAttribute(($context["item"] ?? null), "hash", [])) {
                            echo " jl-scroll";
                        }
                        echo ">
                        ";
                        // line 368
                        if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                            // line 369
                            echo "                            <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                            echo "\" />
                        ";
                        } elseif ($this->getAttribute(                        // line 370
($context["item"] ?? null), "icon", [])) {
                            // line 371
                            echo "                            <i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                            echo "\" aria-hidden=\"true\"></i>
                        ";
                        }
                        // line 373
                        echo "                        ";
                        echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        echo "
                        ";
                        // line 374
                        if (((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) && ($context["parrentIcon"] ?? null))) {
                            // line 375
                            echo "<span jl-drop-parent-icon></span>";
                        }
                        // line 377
                        echo "                    </a>
                ";
                    } else {
                        // line 379
                        echo "                    ";
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) || ($this->getAttribute(($context["item"] ?? null), "level", []) == 1))) {
                            // line 380
                            echo "                        <a href=\"#\" class=\"menu__";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "type", []), "html", null, true);
                            if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "anchor_class", []), "html", null, true);
                            }
                            echo "\"";
                            echo (((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                            if ((( !twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) && ($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) && (($this->getAttribute(($context["item"] ?? null), "type", []) == "heading") || ($this->getAttribute(($context["item"] ?? null), "type", []) == "separator")))) {
                                echo " aria-haspopup=\"true\" aria-expanded=\"false\" tabindex=\"0\"";
                            }
                            echo ">
                    ";
                        }
                        // line 382
                        echo "                    ";
                        if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                            // line 383
                            echo "                        <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                            echo "\" />
                    ";
                        } elseif ($this->getAttribute(                        // line 384
($context["item"] ?? null), "icon", [])) {
                            // line 385
                            echo "                        <i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                            echo "\" aria-hidden=\"true\"></i>
                    ";
                        }
                        // line 387
                        echo "                    ";
                        if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                            // line 388
                            echo "                        ";
                            echo $context["self"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                            echo "
                    ";
                        } elseif (($this->getAttribute(                        // line 389
($context["item"] ?? null), "type", []) == "heading")) {
                            // line 390
                            echo "                        ";
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            echo "
                    ";
                        } else {
                            // line 392
                            echo "                    
                    ";
                            // line 393
                            if ((($this->getAttribute(($context["item"] ?? null), "level", []) == 1) || ($context["parent"] ?? null))) {
                                // line 394
                                echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            }
                            // line 396
                            echo "
                    ";
                        }
                        // line 398
                        echo "
                    ";
                        // line 399
                        if (((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) && ($context["parrentIcon"] ?? null))) {
                            // line 400
                            echo "<span jl-drop-parent-icon></span>";
                        }
                        // line 402
                        echo "
                    ";
                        // line 403
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) || ($this->getAttribute(($context["item"] ?? null), "level", []) == 1))) {
                            // line 404
                            echo "                        </a>
                    ";
                        }
                        // line 406
                        echo " 
                ";
                    }
                    // line 408
                    echo "
        ";
                } else {
                    // line 410
                    echo "        <li class=\"g-menu-item g-menu-item-type-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "type", []), "html", null, true);
                    echo " g-menu-item-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                    if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                    }
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["dropdown"] ?? null), "html", null, true);
                    echo " ";
                    if (($this->getAttribute(($context["item"] ?? null), "url", []) && ($context["parent"] ?? null))) {
                        if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                            echo "g-menu-item-link-parent";
                        }
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                    echo "\"";
                    // line 411
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "item", ($context["dropdown"] ?? null));
                    // line 412
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
            ";
                    // line 413
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        // line 414
                        echo "                <a class=\"g-menu-item-container";
                        (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? (print (twig_escape_filter($this->env, (" " . $this->getAttribute(($context["item"] ?? null), "anchor_class", [])), "html", null, true))) : (print ("")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", []), "html", null, true);
                        echo "\"";
                        echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                        echo ">
            ";
                    } else {
                        // line 416
                        echo "                <div class=\"g-menu-item-container";
                        (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? (print (twig_escape_filter($this->env, (" " . $this->getAttribute(($context["item"] ?? null), "anchor_class", [])), "html", null, true))) : (print ("")));
                        echo "\" data-g-menuparent=\"\"";
                        echo ($context["label"] ?? null);
                        echo ">";
                    }
                    // line 417
                    echo "                ";
                    if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                        // line 418
                        echo "                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\" />
                ";
                    } elseif ($this->getAttribute(                    // line 419
($context["item"] ?? null), "icon", [])) {
                        // line 420
                        echo "                    <i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>
                ";
                    }
                    // line 422
                    echo "                ";
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        // line 423
                        echo "                    <span class=\"g-menu-item-content\">
                        ";
                        // line 424
                        echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        echo "
                    </span>
                    ";
                        // line 426
                        if ((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                            // line 427
                            echo "<span class=\"g-menu-parent-indicator\" data-g-menuparent=\"\"></span>";
                        }
                        // line 429
                        echo "                ";
                    } else {
                        // line 430
                        echo "                    ";
                        if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                            // line 431
                            echo "                        ";
                            echo $context["self"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                            echo "
                    ";
                        } elseif (($this->getAttribute(                        // line 432
($context["item"] ?? null), "type", []) == "heading")) {
                            // line 433
                            echo "                        <span class=\"g-nav-header g-menu-item-content\"";
                            echo ($context["title"] ?? null);
                            echo ">";
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            echo "</span>
                    ";
                        } else {
                            // line 435
                            echo "                        <span class=\"g-separator g-menu-item-content\"";
                            echo ($context["title"] ?? null);
                            echo ">";
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            echo "</span>
                    ";
                        }
                        // line 437
                        echo "                    ";
                        if ((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                            // line 438
                            echo "<span class=\"g-menu-parent-indicator\"></span>";
                        }
                        // line 440
                        echo "                ";
                    }
                    // line 441
                    echo "            ";
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        echo "</a>
            ";
                    } else {
                        // line 442
                        echo "</div>";
                    }
                    // line 443
                    echo "            ";
                }
                // line 444
                echo "            ";
                if (($context["parent"] ?? null)) {
                    // line 445
                    echo $context["self"]->getdisplaySubmenu(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                }
                // line 447
                echo "        </li>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 451
    public function getdisplayContainers($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 452
            echo "    ";
            $context["self"] = $this;
            // line 453
            echo "    ";
            $context["groups"] = ((($this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method") == "standard")) ? ([0 => ($context["item"] ?? null)]) : ($this->getAttribute(($context["item"] ?? null), "groups", [])));
            // line 454
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                // line 455
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                    // line 456
                    echo "        ";
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                        echo "<div class=\"g-block ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('toGrid')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "columnWidth", [0 => $context["column"]], "method")]), "html", null, true);
                        echo "\">";
                    }
                    // line 457
                    echo "            ";
                    if (($this->getAttribute(($context["item"] ?? null), "level", []) >= 2)) {
                        // line 458
                        echo "            ";
                        if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "subnav_extended", []) == "drop")) {
                            // line 459
                            echo "            ";
                            $context["navDropbar_animation"] = (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_dropdown_animation", [])) ? (((" animation: " . $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_dropdown_animation", [])) . "; animate-out: true;")) : (""));
                            // line 460
                            echo "                <div class=\"jl-dropdown jl-drop\" jl-drop=\"pos: right-top;";
                            echo twig_escape_filter($this->env, ($context["navDropbar_animation"] ?? null), "html", null, true);
                            (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropnav_offset", [])) ? (print (twig_escape_filter($this->env, ("offset:" . $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropnav_offset", [])), "html", null, true))) : (print ("")));
                            echo "\">
            ";
                        }
                        // line 462
                        echo "                <ul class=\"jl-nav-sub\">
            ";
                    } else {
                        // line 464
                        echo "                <ul class=\"jl-nav";
                        echo ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "subnav_extended", []) == "drop")) ? (" jl-dropdown-nav") : (""));
                        echo " jl-nav-";
                        echo (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_nav_style", [])) ? ("secondary") : ("default"));
                        echo (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_nav_divider", [])) ? (" jl-nav-divider") : (""));
                        echo " jl-navbar-dropdown-nav\"";
                        if ((($this->getAttribute(($context["item"] ?? null), "level", []) > 1) && ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "subnav_extended", []) == "accordion"))) {
                            echo " jl-nav=\"targets: > .js-accordion\"";
                        }
                        echo ">
            ";
                    }
                    // line 466
                    echo "                ";
                    echo $context["self"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo "
            </ul>
            ";
                    // line 468
                    if ((($this->getAttribute(($context["item"] ?? null), "level", []) >= 2) && ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "subnav_extended", []) == "drop"))) {
                        // line 469
                        echo "                </div>
            ";
                    }
                    // line 471
                    echo "        ";
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                        echo "</div>";
                    }
                    // line 472
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "    
    ";
            } else {
                // line 474
                echo "        <div class=\"g-grid\">
        ";
                // line 475
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                    // line 476
                    echo "            <div class=\"g-block ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('toGrid')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "columnWidth", [0 => $context["column"]], "method")]), "html", null, true);
                    echo "\">
                <ul class=\"g-sublevel\">
                    <li class=\"g-level-";
                    // line 478
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "level", []) - ($context["start_level"] ?? null)) + 1), "html", null, true);
                    echo " g-go-back\">
                        <a class=\"g-menu-item-container\" href=\"#\" data-g-menuparent=\"\"><span>Back</span></a>
                    </li>
                    ";
                    // line 481
                    echo $context["self"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo "
                </ul>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 485
                echo "        </div>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 489
    public function getdisplayItems($__items__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 490
            echo "    ";
            $context["self"] = $this;
            // line 491
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 492
                echo "        ";
                $context["start_level"] = (($context["start_level"]) ?? ((($context["root_level"]) ?? ($this->getAttribute($context["item"], "level", [])))));
                // line 493
                echo "        ";
                $context["dropdown"] = (($context["dropdown_type"]) ?? ($this->getAttribute($context["item"], "dropdown", [])));
                // line 494
                echo "        ";
                echo $context["self"]->getdisplayItem($context["item"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown"] ?? null), ($context["start_level"] ?? null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 498
    public function getdisplaySubmenu($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 499
            echo "    ";
            $context["self"] = $this;
            // line 500
            echo "    ";
            if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                // line 501
                echo "        ";
                $context["animation"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method"), "g-fade")) : ("g-fade"));
                // line 502
                echo "        ";
                $context["dropdown_offset"] = ((twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_offset", []))) ? ((("offset: " . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_offset", []))) . ";")) : (""));
                // line 503
                echo "        ";
                $context["dropdown_alignment"] = (((twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_alignment", [])) &&  !$this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_stretch", []))) ? (((" pos: bottom-" . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_alignment", []))) . ";")) : (""));
                // line 504
                echo "        ";
                $context["navbar_animation"] = ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_dropdown_animation", []) &&  !$this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropbar", []))) ? (((" animation: " . $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_dropdown_animation", [])) . "; animate-out: true;")) : (""));
                // line 505
                echo "        ";
                $context["dropdown_stretch"] = (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_stretch", [])) ? (" stretch: x; flip: false;") : (""));
                // line 506
                echo "        ";
                if (((((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) == 1) && ( !($context["dropdown_type"] ?? null) == "fullwidth")) || (($context["dropdown_type"] ?? null) == "standard")) || (((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") && (($context["dropdown_type"] ?? null) == "fullwidth")))) {
                    // line 507
                    echo "            ";
                    $context["dropdown_dir"] = ("g-dropdown-" . (($this->getAttribute(($context["item"] ?? null), "dropdown_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "dropdown_dir", []), "right")) : ("right")));
                    // line 508
                    echo "        ";
                }
                // line 509
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 510
                    echo "        ";
                    if (($this->getAttribute(($context["item"] ?? null), "level", []) >= 2)) {
                        // line 511
                        echo "            ";
                        echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                        echo "
        ";
                    } else {
                        // line 513
                        echo "        <div class=\"jl-navbar-dropdown";
                        if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_large", [])) {
                            echo (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropbar", [])) ? (" jl-navbar-dropdown-dropbar-large") : (" jl-navbar-dropdown-large"));
                        }
                        if (((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1) &&  !($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropbar", []) && $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_stretch", [])))) {
                            echo " jl-navbar-dropdown-width-";
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])), "html", null, true);
                        }
                        if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", [])) {
                            echo " jl-text-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", []));
                        }
                        echo "\"";
                        if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropbar", []) || $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_dropdown_animation", [])) || $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_stretch", []))) {
                            echo " jl-drop=\"";
                            if ( !$this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropbar", [])) {
                                echo "cls-drop: jl-navbar-dropdown; ";
                            }
                            echo "boundary: #";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "id", []), "html", null, true);
                            echo " .jl-navbar;";
                            echo (((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "hoverExpand", []), "true")) : ("true"))) ? ("") : (" mode: click;"));
                            echo twig_escape_filter($this->env, ($context["dropdown_alignment"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_stretch"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["navbar_animation"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_offset"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        if ( !$this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_stretch", [])) {
                            echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "submenu", ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                        }
                        echo ">
            ";
                        // line 514
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                            echo "<div class=\"jl-drop-grid jl-child-width-1-";
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])), "html", null, true);
                            echo "\" jl-grid>";
                        }
                        // line 515
                        echo "                ";
                        echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                        echo "
            ";
                        // line 516
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                            echo "</div>";
                        }
                        // line 517
                        echo "        </div>
        ";
                    }
                    // line 519
                    echo "        ";
                } else {
                    // line 520
                    echo "        <ul class=\"g-dropdown g-inactive ";
                    echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["dropdown_dir"] ?? null), "html", null, true);
                    if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", [])) {
                        echo " jl-text-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", []));
                    }
                    echo "\"";
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "submenu", ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo ">
            <li class=\"g-dropdown-column\">
               ";
                    // line 522
                    echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo "
            </li>
        </ul>        
        ";
                }
                // line 526
                echo "
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@particles/jlnavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2627 => 526,  2620 => 522,  2606 => 520,  2603 => 519,  2599 => 517,  2595 => 516,  2590 => 515,  2584 => 514,  2550 => 513,  2544 => 511,  2541 => 510,  2538 => 509,  2535 => 508,  2532 => 507,  2529 => 506,  2526 => 505,  2523 => 504,  2520 => 503,  2517 => 502,  2514 => 501,  2511 => 500,  2508 => 499,  2492 => 498,  2470 => 494,  2467 => 493,  2464 => 492,  2459 => 491,  2456 => 490,  2440 => 489,  2423 => 485,  2413 => 481,  2407 => 478,  2401 => 476,  2397 => 475,  2394 => 474,  2385 => 472,  2380 => 471,  2376 => 469,  2374 => 468,  2368 => 466,  2355 => 464,  2351 => 462,  2344 => 460,  2341 => 459,  2338 => 458,  2335 => 457,  2328 => 456,  2323 => 455,  2320 => 454,  2317 => 453,  2314 => 452,  2298 => 451,  2281 => 447,  2278 => 445,  2275 => 444,  2272 => 443,  2269 => 442,  2263 => 441,  2260 => 440,  2257 => 438,  2254 => 437,  2246 => 435,  2238 => 433,  2236 => 432,  2231 => 431,  2228 => 430,  2225 => 429,  2222 => 427,  2220 => 426,  2215 => 424,  2212 => 423,  2209 => 422,  2203 => 420,  2201 => 419,  2194 => 418,  2191 => 417,  2184 => 416,  2173 => 414,  2171 => 413,  2162 => 412,  2160 => 411,  2141 => 410,  2137 => 408,  2133 => 406,  2129 => 404,  2127 => 403,  2124 => 402,  2121 => 400,  2119 => 399,  2116 => 398,  2112 => 396,  2109 => 394,  2107 => 393,  2104 => 392,  2098 => 390,  2096 => 389,  2091 => 388,  2088 => 387,  2082 => 385,  2080 => 384,  2073 => 383,  2070 => 382,  2055 => 380,  2052 => 379,  2048 => 377,  2045 => 375,  2043 => 374,  2038 => 373,  2032 => 371,  2030 => 370,  2023 => 369,  2021 => 368,  2004 => 367,  2002 => 366,  1993 => 365,  1991 => 364,  1965 => 363,  1962 => 362,  1959 => 361,  1956 => 360,  1953 => 359,  1950 => 358,  1947 => 357,  1944 => 356,  1941 => 354,  1938 => 353,  1932 => 352,  1926 => 351,  1923 => 350,  1920 => 349,  1917 => 348,  1911 => 347,  1908 => 346,  1905 => 345,  1902 => 344,  1899 => 343,  1894 => 342,  1891 => 341,  1886 => 340,  1881 => 339,  1879 => 338,  1876 => 337,  1873 => 336,  1871 => 335,  1868 => 334,  1865 => 333,  1862 => 332,  1859 => 331,  1856 => 330,  1853 => 329,  1850 => 328,  1847 => 327,  1844 => 326,  1841 => 325,  1839 => 324,  1836 => 323,  1833 => 322,  1831 => 321,  1825 => 319,  1822 => 318,  1819 => 317,  1816 => 316,  1813 => 315,  1810 => 314,  1807 => 313,  1804 => 312,  1801 => 311,  1798 => 310,  1795 => 309,  1792 => 308,  1789 => 307,  1786 => 306,  1783 => 305,  1780 => 304,  1777 => 303,  1774 => 302,  1771 => 301,  1755 => 300,  1739 => 297,  1733 => 295,  1728 => 293,  1723 => 292,  1720 => 291,  1717 => 290,  1705 => 289,  1686 => 285,  1679 => 283,  1676 => 282,  1668 => 281,  1663 => 280,  1660 => 279,  1658 => 278,  1655 => 277,  1652 => 276,  1649 => 275,  1646 => 274,  1643 => 273,  1641 => 272,  1628 => 271,  1606 => 266,  1603 => 265,  1601 => 264,  1585 => 263,  1577 => 15,  1574 => 14,  1568 => 768,  1557 => 766,  1555 => 765,  1552 => 764,  1548 => 762,  1546 => 761,  1535 => 759,  1533 => 758,  1528 => 755,  1524 => 753,  1522 => 752,  1517 => 749,  1513 => 747,  1507 => 745,  1505 => 744,  1502 => 743,  1496 => 740,  1483 => 739,  1481 => 738,  1478 => 737,  1476 => 736,  1473 => 735,  1466 => 731,  1454 => 730,  1451 => 729,  1449 => 728,  1446 => 727,  1441 => 724,  1435 => 722,  1433 => 721,  1430 => 720,  1424 => 717,  1411 => 716,  1409 => 715,  1404 => 712,  1402 => 711,  1397 => 708,  1391 => 706,  1389 => 705,  1384 => 702,  1368 => 700,  1366 => 699,  1357 => 697,  1354 => 696,  1351 => 694,  1346 => 691,  1342 => 689,  1340 => 688,  1336 => 686,  1329 => 683,  1327 => 682,  1322 => 679,  1317 => 676,  1310 => 672,  1306 => 670,  1304 => 669,  1301 => 668,  1295 => 665,  1292 => 664,  1290 => 663,  1287 => 662,  1280 => 658,  1276 => 656,  1274 => 655,  1271 => 654,  1265 => 651,  1262 => 650,  1260 => 649,  1257 => 648,  1251 => 645,  1246 => 644,  1244 => 643,  1240 => 641,  1238 => 640,  1235 => 639,  1230 => 636,  1223 => 632,  1219 => 630,  1217 => 629,  1214 => 628,  1208 => 625,  1205 => 624,  1203 => 623,  1200 => 622,  1194 => 619,  1189 => 618,  1187 => 617,  1182 => 614,  1180 => 613,  1177 => 612,  1172 => 609,  1165 => 605,  1161 => 603,  1159 => 602,  1156 => 601,  1150 => 598,  1147 => 597,  1145 => 596,  1142 => 595,  1136 => 592,  1131 => 591,  1129 => 590,  1126 => 589,  1120 => 586,  1107 => 585,  1105 => 584,  1101 => 582,  1099 => 581,  1072 => 579,  1069 => 578,  1064 => 576,  1059 => 575,  1057 => 574,  1049 => 572,  1046 => 571,  1022 => 569,  1020 => 568,  1004 => 566,  1001 => 565,  999 => 564,  996 => 563,  994 => 562,  992 => 561,  989 => 559,  985 => 557,  979 => 555,  967 => 553,  965 => 552,  962 => 551,  960 => 550,  955 => 549,  953 => 548,  950 => 547,  946 => 545,  940 => 543,  928 => 541,  926 => 540,  923 => 539,  920 => 538,  917 => 537,  915 => 536,  912 => 535,  910 => 534,  906 => 533,  904 => 532,  901 => 531,  899 => 530,  896 => 529,  893 => 497,  890 => 488,  887 => 450,  884 => 299,  881 => 288,  878 => 270,  875 => 262,  869 => 258,  863 => 255,  856 => 253,  852 => 252,  847 => 251,  841 => 248,  835 => 245,  831 => 244,  826 => 243,  824 => 242,  818 => 239,  813 => 238,  806 => 234,  799 => 232,  795 => 231,  790 => 230,  784 => 227,  778 => 224,  774 => 223,  769 => 222,  766 => 221,  764 => 220,  762 => 219,  759 => 217,  757 => 216,  754 => 215,  750 => 213,  742 => 210,  735 => 209,  729 => 208,  720 => 207,  717 => 206,  714 => 205,  711 => 204,  707 => 203,  695 => 202,  693 => 201,  690 => 199,  686 => 197,  683 => 196,  681 => 195,  678 => 194,  673 => 191,  667 => 190,  664 => 189,  658 => 188,  653 => 187,  647 => 183,  645 => 182,  643 => 181,  640 => 180,  638 => 179,  630 => 175,  628 => 174,  619 => 172,  614 => 171,  612 => 170,  584 => 168,  582 => 167,  574 => 166,  566 => 165,  560 => 162,  555 => 161,  553 => 160,  545 => 158,  543 => 157,  534 => 154,  532 => 153,  524 => 151,  522 => 150,  514 => 148,  512 => 147,  502 => 145,  500 => 144,  491 => 143,  479 => 141,  477 => 140,  473 => 138,  467 => 136,  465 => 135,  459 => 133,  457 => 132,  451 => 130,  449 => 129,  443 => 127,  441 => 126,  436 => 125,  434 => 124,  425 => 121,  423 => 120,  417 => 119,  410 => 118,  408 => 117,  401 => 115,  396 => 114,  394 => 113,  386 => 111,  384 => 110,  374 => 108,  372 => 107,  365 => 105,  360 => 104,  358 => 103,  351 => 99,  344 => 98,  342 => 97,  336 => 96,  328 => 94,  326 => 93,  316 => 91,  314 => 90,  304 => 89,  292 => 87,  290 => 86,  282 => 84,  280 => 83,  274 => 80,  269 => 79,  267 => 78,  263 => 76,  256 => 75,  249 => 74,  242 => 73,  236 => 72,  231 => 71,  229 => 70,  219 => 68,  217 => 67,  205 => 65,  203 => 64,  195 => 62,  193 => 61,  181 => 59,  179 => 58,  171 => 56,  169 => 55,  167 => 54,  153 => 52,  151 => 51,  143 => 50,  139 => 49,  133 => 48,  127 => 47,  125 => 46,  123 => 45,  120 => 43,  118 => 42,  116 => 41,  113 => 40,  110 => 38,  104 => 35,  99 => 34,  93 => 32,  90 => 31,  85 => 28,  83 => 27,  78 => 26,  76 => 25,  74 => 24,  71 => 23,  69 => 22,  66 => 21,  63 => 14,  61 => 13,  56 => 11,  51 => 9,  49 => 8,  47 => 7,  44 => 6,  38 => 4,  32 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlnavbar.html.twig", "/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/templates/jl_brand_lite/particles/jlnavbar.html.twig");
    }
}
