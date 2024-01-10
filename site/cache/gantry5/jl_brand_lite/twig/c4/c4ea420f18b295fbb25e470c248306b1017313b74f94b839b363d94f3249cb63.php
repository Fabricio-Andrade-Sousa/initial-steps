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

/* @particles/jlnavcanvas.html.twig */
class __TwigTemplate_a0591453bcd9322f4b586b8281d01f0065382cb1579d36892293bf0a87a2d5c6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        try {            // line 2
            echo "    ";
            $context["menu"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", []), "instance", [0 => ($context["particle"] ?? null)], "method");
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 4
            echo "    <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 7
        $context["nav_init"] = (($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) ? ($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) : ("default"));
        // line 8
        $context["cv_nav_init"] = (($this->getAttribute(($context["particle"] ?? null), "cv_nav_style", [])) ? ($this->getAttribute(($context["particle"] ?? null), "cv_nav_style", [])) : ("default"));
        // line 9
        echo "
";
        // line 10
        ob_start(function () { return ''; });
        // line 11
        if (($this->getAttribute(($context["particle"] ?? null), "dropdown_animation", []) == "slide")) {
            echo ".tm-header-mobile-slide {z-index: 9;}";
        }
        // line 12
        if ($this->getAttribute(($context["particle"] ?? null), "offcanvas_minheight", [])) {
            // line 13
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle {min-height:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "offcanvas_minheight", []), "html", null, true);
            echo "px; }
";
        }
        // line 15
        if ($this->getAttribute(($context["particle"] ?? null), "toggle_color", [])) {
            // line 16
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle {color:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "toggle_color", []), "html", null, true);
            echo "; }
";
        }
        // line 18
        if ($this->getAttribute(($context["particle"] ?? null), "toggle_color_hover", [])) {
            // line 19
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle:focus,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle:hover {color:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "toggle_color_hover", []), "html", null, true);
            echo ";}
";
        }
        // line 21
        if ($this->getAttribute(($context["particle"] ?? null), "customize_bar_background", [])) {
            // line 22
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .tm-nav-mobile { background: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "customize_bar_background", []), "html", null, true);
            echo "; }
";
        }
        // line 24
        if ($this->getAttribute(($context["particle"] ?? null), "nav_cv_color", [])) {
            // line 25
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo ">li>a,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-sub a{color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_cv_color", []), "html", null, true);
            echo ";}
";
        }
        // line 27
        if ($this->getAttribute(($context["particle"] ?? null), "nav_color_active", [])) {
            // line 28
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo ">li>a:focus,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo ">li>a:hover,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo ">li.jl-active>a,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-sub a:focus,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-sub a:hover,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-sub li.jl-active > a {color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_color_active", []));
            echo ";}
";
        }
        // line 30
        if ($this->getAttribute(($context["particle"] ?? null), "nav_color_header", [])) {
            // line 31
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-header {color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_color_header", []), "html", null, true);
            echo ";}
";
        }
        // line 33
        if ($this->getAttribute(($context["particle"] ?? null), "toggle_text_fontsize", [])) {
            // line 34
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle { font-size: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "toggle_text_fontsize", []), "html", null, true);
            echo "px; }
";
        }
        $context["inline_mc_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => ($context["inline_mc_style"] ?? null), 1 => 0], "method");
        // line 38
        echo "
";
        // line 56
        echo "
";
        // line 67
        echo "
";
        // line 166
        echo "
";
        // line 176
        echo "
";
        // line 185
        echo "
";
        // line 196
        echo "
";
        // line 198
        $context["attrs_menu"] = ((("tm-nav-mobile jl-offcanvas-bar" . (($this->getAttribute(($context["particle"] ?? null), "nav_center", [])) ? (" jl-text-center") : (""))) . (($this->getAttribute(($context["particle"] ?? null), "modal_vertically", [])) ? (" jl-flex") : (""))) . (($this->getAttribute(($context["particle"] ?? null), "offcanvas_inverse", [])) ? ((" jl-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "offcanvas_inverse", [])))) : ("")));
        // line 199
        echo "
";
        // line 200
        $context["attrs_menu"] = ((($context["attrs_menu"] ?? null)) ? (((" class=\"" . twig_trim_filter(($context["attrs_menu"] ?? null))) . "\"")) : (""));
        // line 201
        echo "
";
        // line 202
        $context["macro"] = $this;
        // line 203
        echo "
";
        // line 204
        if (($this->getAttribute(($context["particle"] ?? null), "menu_animation", []) == "offcanvas")) {
            // line 205
            $pageblockVariables = [];
            if ($pageblockVariables && !is_array($pageblockVariables)) {
                throw new UnexpectedValueException('{% pageblock with x %}: x is not an array');
            }
            $location = "body_bottom";
            if ($location && !is_string($location)) {
                throw new UnexpectedValueException('{% pageblock in x %}: x is not a string');
            }
            $priority = isset($pageblockVariables['priority']) ? $pageblockVariables['priority'] : 0;
            ob_start();
            // line 206
            echo "<div id=\"mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" jl-offcanvas=\"mode: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animation_mode", []), "html", null, true);
            echo ";";
            echo (($this->getAttribute(($context["particle"] ?? null), "flip_offcanvas", [])) ? (" flip: true;") : (""));
            echo (($this->getAttribute(($context["particle"] ?? null), "overlay", [])) ? (" overlay: true;") : (""));
            echo "\">
    <div";
            // line 207
            echo ($context["attrs_menu"] ?? null);
            echo ">

    ";
            // line 209
            if ($this->getAttribute(($context["particle"] ?? null), "close_button", [])) {
                // line 210
                echo "        <button class=\"jl-offcanvas-close\" type=\"button\" jl-close></button>
    ";
            }
            // line 212
            echo "
        ";
            // line 213
            if ($this->getAttribute(($context["particle"] ?? null), "modal_vertically", [])) {
                // line 214
                echo "            <div class=\"jl-margin-auto-vertical jl-width-1-1\">
        ";
            }
            // line 216
            echo "
            <div class=\"jl-child-width-1-1\" jl-grid>
                
                ";
            // line 219
            if ($this->getAttribute($this->getAttribute(($context["menu"] ?? null), "root", []), "count", [], "method")) {
                // line 220
                echo "                <div>
                    <ul class=\"jl-nav jl-nav-";
                // line 221
                echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
                echo (($this->getAttribute(($context["particle"] ?? null), "nav_center", [])) ? (" jl-nav-center") : (" jl-text-left"));
                echo (($this->getAttribute(($context["particle"] ?? null), "nav_divider", [])) ? (" jl-nav-divider") : (""));
                echo "\" jl-nav=\"targets: > .js-accordion\">
                        ";
                // line 222
                echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                echo "
                    </ul>
                </div>
                ";
            }
            // line 226
            echo "                
                ";
            // line 227
            if ($this->getAttribute(($context["particle"] ?? null), "module_id", [])) {
                // line 228
                echo "                    <div>
                     ";
                // line 229
                echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "displayModule", [0 => $this->getAttribute(($context["particle"] ?? null), "module_id", []), 1 => ["style" => (($this->getAttribute(($context["particle"] ?? null), "chrome", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "chrome", []), "gantry")) : ("gantry")), "position" => "particle"]], "method");
                echo "
                    </div>
                ";
            }
            // line 232
            echo "
            </div>

        ";
            // line 235
            if ($this->getAttribute(($context["particle"] ?? null), "modal_vertically", [])) {
                // line 236
                echo "            </div>
        ";
            }
            // line 238
            echo "
    </div>
</div>
";
            $content = ob_get_clean();
            Gantry\Framework\Gantry::instance()['document']->addHtml($content, $priority, $location);
        }
    }

    // line 39
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
            // line 40
            echo "    ";
            try {                // line 41
                echo "    ";
                $context["in_particle"] = (((($this->getAttribute(($context["context"] ?? null), "in_particle", [], "any", true, true) &&  !(null === $this->getAttribute(($context["context"] ?? null), "in_particle", [])))) ? ($this->getAttribute(($context["context"] ?? null), "in_particle", [])) : (0)) + 1);
                // line 42
                echo "    ";
                if ((($context["in_particle"] ?? null) > 5)) {
                    // line 43
                    echo "        ";
                    throw new \RuntimeException("Particle loop detected"                    ,                     500                    );
                    // line 44
                    echo "    ";
                }
                // line 45
                echo "
    ";
                // line 46
                $context["context"] = twig_array_merge(($context["context"] ?? null), ["particle" => $this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "in_particle" => ($context["in_particle"] ?? null)]);
                // line 47
                echo "    ";
                $context["classes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "block", []), "class", []);
                // line 48
                echo "    <div class=\"menu-item-particle";
                ((($context["classes"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["classes"] ?? null)), "html", null, true))) : (print ("")));
                echo "\">
        ";
                // line 49
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
                try {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                     $this->loadTemplate([0 => (("particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig")], "@particles/jlnavcanvas.html.twig", 49);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display(twig_to_array(                    // line 50
($context["context"] ?? null)));
                }
                // line 51
                echo "    </div>
    ";
            } catch (\Exception $e) {
                if ($context['gantry']->debug()) throw $e;
                if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
                $context['e'] = $e;
                // line 53
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

    // line 57
    public function getdisplayTitle($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 58
            echo "    ";
            if (( !$this->getAttribute(($context["item"] ?? null), "icon_only", []) ||  !($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) {
                // line 59
                echo "        ";
                if ($this->getAttribute(($context["item"] ?? null), "subtitle", [])) {
                    // line 60
                    echo "        <div>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        <div class=\"jl-nav-subtitle\">";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "subtitle", []), "html", null, true);
                    echo "</div></div>
        ";
                } else {
                    // line 63
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        ";
                }
                // line 65
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

    // line 68
    public function getdisplayItem($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 69
            echo "    ";
            $context["self"] = $this;
            // line 70
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "particle") &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "enabled", []))) {
                // line 71
                echo "        ";
                $context["enabled"] = 0;
                // line 72
                echo "    ";
            }
            // line 73
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "visible", []) && $this->getAttribute(($context["item"] ?? null), "enabled", [])) && ((array_key_exists("enabled", $context)) ? (_twig_default_filter(($context["enabled"] ?? null), 1)) : (1)))) {
                // line 74
                echo "        ";
                $context["title"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) || $this->getAttribute(($context["item"] ?? null), "link_title", []))) ? (((" title=\"" . twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "link_title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "link_title", []), $this->getAttribute(($context["item"] ?? null), "title", []))) : ($this->getAttribute(($context["item"] ?? null), "title", []))))) . "\"")) : (""));
                // line 75
                echo "        ";
                $context["label"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) && ($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) ? (((" aria-label=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []))) . "\"")) : (""));
                // line 76
                echo "        ";
                $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? (" jl-active") : (""));
                // line 77
                echo "        ";
                $context["dropdown"] = ((($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) ? ((" g-" . $this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method"))) : (""));
                // line 78
                echo "        ";
                $context["parent"] = ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", []))) ? (" jl-parent") : (""));
                // line 79
                echo "        ";
                $context["target"] = (((($this->getAttribute(($context["item"] ?? null), "target", []) != "_self") || $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "forceTarget", []))) ? (((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "target", []))) . "\"")) : (""));
                // line 80
                echo "        ";
                $context["rel"] = $this->getAttribute(($context["item"] ?? null), "rel", []);
                // line 81
                echo "
        ";
                // line 82
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_blank")) {
                    // line 83
                    echo "            ";
                    if (!twig_in_filter("noopener", ($context["rel"] ?? null))) {
                        // line 84
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 85
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noopener");
                        // line 86
                        echo "            ";
                    }
                    // line 87
                    echo "            ";
                    if (!twig_in_filter("noreferrer", ($context["rel"] ?? null))) {
                        // line 88
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 89
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noreferrer");
                        // line 90
                        echo "            ";
                    }
                    // line 91
                    echo "        ";
                }
                // line 92
                echo "
        ";
                // line 93
                $context["listAttributes"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute(($context["item"] ?? null), "attributes", []));
                // line 94
                echo "        ";
                $context["linkAttributes"] = "";
                // line 95
                echo "        
        ";
                // line 96
                if ($this->getAttribute(($context["item"] ?? null), "link_attributes", [])) {
                    // line 97
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "link_attributes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 98
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attribute"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 99
                            echo "                    ";
                            if (($context["key"] == "rel")) {
                                // line 100
                                echo "                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $context["value"], " "));
                                foreach ($context['_seq'] as $context["_key"] => $context["hVal"]) {
                                    // line 101
                                    echo "                            ";
                                    if (!twig_in_filter($context["hVal"], ($context["rel"] ?? null))) {
                                        // line 102
                                        echo "                                ";
                                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                                        // line 103
                                        echo "                                ";
                                        $context["rel"] = (($context["rel"] ?? null) . $context["hVal"]);
                                        // line 104
                                        echo "                            ";
                                    }
                                    // line 105
                                    echo "                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hVal'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 106
                                echo "                    ";
                            } else {
                                // line 107
                                echo "                        ";
                                $context["linkAttributes"] = (((((($context["linkAttributes"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                                // line 108
                                echo "                    ";
                            }
                            // line 109
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 110
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    echo "        ";
                }
                // line 112
                echo "
        ";
                // line 114
                echo "        ";
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_nonav")) {
                    // line 115
                    echo "            ";
                    $context["target"] = "target=\"_blank\"";
                    // line 116
                    echo "            ";
                    $context["linkAttributes"] = (($context["linkAttributes"] ?? null) . " onclick=\"window.open(this.href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes'); return false;\"");
                    // line 117
                    echo "        ";
                }
                // line 118
                echo "        ";
                $context["item_accordion"] = (((((($this->getAttribute(($context["item"] ?? null), "type", []) == "separator") || ($this->getAttribute(($context["item"] ?? null), "type", []) == "heading")) && ($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) && ($context["parent"] ?? null))) ? (" js-accordion") : (""));
                // line 119
                echo "        ";
                $context["rel"] = ((($context["rel"] ?? null)) ? (((" rel=\"" . twig_escape_filter($this->env, ($context["rel"] ?? null), "html_attr")) . "\"")) : (""));
                // line 120
                echo "        <li class=\"item-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["item_accordion"] ?? null), "html", null, true);
                }
                echo ((((($context["parent"] ?? null) && ($context["item_accordion"] ?? null)) && ($context["active"] ?? null))) ? (" jl-open") : (""));
                echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
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
                echo "\"";
                // line 121
                if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "\"";
                }
                echo ($context["listAttributes"] ?? null);
                echo ">
            ";
                // line 122
                if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                    // line 123
                    echo "                <a";
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
                    // line 124
                    if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                        // line 125
                        echo "                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\" />
                    ";
                    } elseif ($this->getAttribute(                    // line 126
($context["item"] ?? null), "icon", [])) {
                        // line 127
                        echo "                        <i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>
                    ";
                    }
                    // line 129
                    echo "                    ";
                    echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                    echo "
                    ";
                    // line 130
                    if ((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                        // line 131
                        echo "<span jl-nav-parent-icon></span>";
                    }
                    // line 133
                    echo "                </a>
            ";
                } else {
                    // line 135
                    echo "                ";
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) || ($this->getAttribute(($context["item"] ?? null), "level", []) == 1))) {
                        // line 136
                        echo "                    <a href=\"#\" class=\"menu__";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "type", []), "html", null, true);
                        if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
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
                    // line 138
                    echo "                ";
                    if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                        // line 139
                        echo "                    ";
                        echo $context["self"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                        echo "
                ";
                    } elseif (($this->getAttribute(                    // line 140
($context["item"] ?? null), "type", []) == "heading")) {
                        // line 141
                        echo "                    ";
                        echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        echo "
                ";
                    } else {
                        // line 143
                        echo "                
                ";
                        // line 144
                        if (($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) {
                            // line 145
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        }
                        // line 147
                        echo "
                ";
                    }
                    // line 149
                    echo "
                ";
                    // line 150
                    if ((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                        // line 151
                        echo "<span jl-nav-parent-icon></span>";
                    }
                    // line 153
                    echo "
                ";
                    // line 154
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) || ($this->getAttribute(($context["item"] ?? null), "level", []) == 1))) {
                        // line 155
                        echo "                    </a>
                ";
                    }
                    // line 157
                    echo "
            ";
                }
                // line 159
                echo "            ";
                if (($context["parent"] ?? null)) {
                    // line 160
                    echo $context["self"]->getdisplaySubmenu(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                }
                // line 162
                echo "          </li>

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

    // line 167
    public function getdisplayContainers($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 168
            echo "\t";
            $context["self"] = $this;
            // line 169
            echo "\t";
            $context["groups"] = ((($this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method") == "standard")) ? ([0 => ($context["item"] ?? null)]) : ($this->getAttribute(($context["item"] ?? null), "groups", [])));
            // line 170
            echo "\t<ul class=\"jl-nav-sub\">
\t\t";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
            foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                // line 172
                echo "\t\t\t";
                echo $context["self"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                echo "
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "\t</ul>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 177
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
            // line 178
            echo "    ";
            $context["self"] = $this;
            // line 179
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 180
                echo "        ";
                $context["start_level"] = (($context["start_level"]) ?? ((($context["root_level"]) ?? ($this->getAttribute($context["item"], "level", [])))));
                // line 181
                echo "        ";
                $context["dropdown"] = (($context["dropdown_type"]) ?? ($this->getAttribute($context["item"], "dropdown", [])));
                // line 182
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

    // line 186
    public function getdisplaySubmenu($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 187
            echo "\t";
            $context["self"] = $this;
            // line 188
            echo "\t";
            if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                // line 189
                echo "\t\t";
                $context["animation"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method"), "g-fade")) : ("g-fade"));
                // line 190
                echo "\t\t";
                if (((((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) == 1) && ( !($context["dropdown_type"] ?? null) == "fullwidth")) || (($context["dropdown_type"] ?? null) == "standard")) || (((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") && (($context["dropdown_type"] ?? null) == "fullwidth")))) {
                    // line 191
                    echo "\t\t\t";
                    $context["dropdown_dir"] = ("g-dropdown-" . (($this->getAttribute(($context["item"] ?? null), "dropdown_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "dropdown_dir", []), "right")) : ("right")));
                    // line 192
                    echo "\t\t";
                }
                // line 193
                echo "\t\t";
                echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                echo "
\t";
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
        return "@particles/jlnavcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  924 => 193,  921 => 192,  918 => 191,  915 => 190,  912 => 189,  909 => 188,  906 => 187,  891 => 186,  869 => 182,  866 => 181,  863 => 180,  858 => 179,  855 => 178,  839 => 177,  823 => 174,  814 => 172,  810 => 171,  807 => 170,  804 => 169,  801 => 168,  786 => 167,  768 => 162,  765 => 160,  762 => 159,  758 => 157,  754 => 155,  752 => 154,  749 => 153,  746 => 151,  744 => 150,  741 => 149,  737 => 147,  734 => 145,  732 => 144,  729 => 143,  723 => 141,  721 => 140,  716 => 139,  713 => 138,  699 => 136,  696 => 135,  692 => 133,  689 => 131,  687 => 130,  682 => 129,  676 => 127,  674 => 126,  667 => 125,  665 => 124,  648 => 123,  646 => 122,  637 => 121,  616 => 120,  613 => 119,  610 => 118,  607 => 117,  604 => 116,  601 => 115,  598 => 114,  595 => 112,  592 => 111,  586 => 110,  580 => 109,  577 => 108,  574 => 107,  571 => 106,  565 => 105,  562 => 104,  559 => 103,  556 => 102,  553 => 101,  548 => 100,  545 => 99,  540 => 98,  535 => 97,  533 => 96,  530 => 95,  527 => 94,  525 => 93,  522 => 92,  519 => 91,  516 => 90,  513 => 89,  510 => 88,  507 => 87,  504 => 86,  501 => 85,  498 => 84,  495 => 83,  493 => 82,  490 => 81,  487 => 80,  484 => 79,  481 => 78,  478 => 77,  475 => 76,  472 => 75,  469 => 74,  466 => 73,  463 => 72,  460 => 71,  457 => 70,  454 => 69,  439 => 68,  423 => 65,  417 => 63,  412 => 61,  407 => 60,  404 => 59,  401 => 58,  389 => 57,  370 => 53,  363 => 51,  360 => 50,  352 => 49,  347 => 48,  344 => 47,  342 => 46,  339 => 45,  336 => 44,  333 => 43,  330 => 42,  327 => 41,  325 => 40,  312 => 39,  302 => 238,  298 => 236,  296 => 235,  291 => 232,  285 => 229,  282 => 228,  280 => 227,  277 => 226,  270 => 222,  264 => 221,  261 => 220,  259 => 219,  254 => 216,  250 => 214,  248 => 213,  245 => 212,  241 => 210,  239 => 209,  234 => 207,  224 => 206,  213 => 205,  211 => 204,  208 => 203,  206 => 202,  203 => 201,  201 => 200,  198 => 199,  196 => 198,  193 => 196,  190 => 185,  187 => 176,  184 => 166,  181 => 67,  178 => 56,  175 => 38,  173 => 37,  164 => 34,  162 => 33,  152 => 31,  150 => 30,  120 => 28,  118 => 27,  104 => 25,  102 => 24,  94 => 22,  92 => 21,  82 => 19,  80 => 18,  72 => 16,  70 => 15,  62 => 13,  60 => 12,  56 => 11,  54 => 10,  51 => 9,  49 => 8,  47 => 7,  44 => 6,  38 => 4,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlnavcanvas.html.twig", "/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/templates/jl_brand_lite/particles/jlnavcanvas.html.twig");
    }
}
