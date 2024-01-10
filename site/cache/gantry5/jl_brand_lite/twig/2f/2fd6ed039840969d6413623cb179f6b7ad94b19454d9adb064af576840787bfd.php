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

/* @particles/jldivider.html.twig */
class __TwigTemplate_33e6499f03181f769635ad9dfa89af34ebc77653d44bcd77c302a3493c9aade5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript' => [$this, 'block_javascript'],
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 34
        ob_start(function () { return ''; });
        // line 35
        if (($this->getAttribute(($context["particle"] ?? null), "g_maxwidth", []) != "inherit")) {
            echo " jl-width-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "g_maxwidth", []), "html", null, true);
            if (($this->getAttribute(($context["particle"] ?? null), "g_maxwidth_breakpoint", []) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "g_maxwidth_breakpoint", []), "html", null, true);
            }
            if (($this->getAttribute(($context["particle"] ?? null), "g_maxwidth_alignment", []) == "left")) {
            } elseif (($this->getAttribute(($context["particle"] ?? null), "g_maxwidth_alignment", []) == "center")) {
                echo " jl-margin-auto";
            } else {
                echo " jl-margin-auto-left";
            }
        }
        $context["content_maxwidth"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        ob_start(function () { return ''; });
        // line 40
        if (($this->getAttribute(($context["particle"] ?? null), "pa_horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "pa_horizontal_end", []))) {
            echo "x: ";
            (($this->getAttribute(($context["particle"] ?? null), "pa_horizontal_start", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_horizontal_start", []), "html", null, true))) : (print ("0")));
            echo ",";
            (($this->getAttribute(($context["particle"] ?? null), "pa_horizontal_end", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_horizontal_end", []), "html", null, true))) : (print ("0")));
            echo ";";
        }
        $context["pahorizontal"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        ob_start(function () { return ''; });
        // line 45
        if (($this->getAttribute(($context["particle"] ?? null), "pa_vertical_start", []) || $this->getAttribute(($context["particle"] ?? null), "pa_vertical_end", []))) {
            echo "y: ";
            (($this->getAttribute(($context["particle"] ?? null), "pa_vertical_start", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_vertical_start", []), "html", null, true))) : (print ("0")));
            echo ",";
            (($this->getAttribute(($context["particle"] ?? null), "pa_vertical_end", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_vertical_end", []), "html", null, true))) : (print ("0")));
            echo ";";
        }
        $context["pavertical"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        ob_start(function () { return ''; });
        // line 50
        if (($this->getAttribute(($context["particle"] ?? null), "scale_start", []) || $this->getAttribute(($context["particle"] ?? null), "scale_end", []))) {
            echo "scale: ";
            (($this->getAttribute(($context["particle"] ?? null), "scale_start", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "scale_start", []), "html", null, true))) : (print ("1")));
            echo ",";
            (($this->getAttribute(($context["particle"] ?? null), "scale_end", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "scale_end", []), "html", null, true))) : (print ("1")));
            echo ";";
        }
        $context["scale"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        ob_start(function () { return ''; });
        // line 55
        if (($this->getAttribute(($context["particle"] ?? null), "rotate_start", []) || $this->getAttribute(($context["particle"] ?? null), "rotate_end", []))) {
            echo "rotate: ";
            (($this->getAttribute(($context["particle"] ?? null), "rotate_start", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "rotate_start", []), "html", null, true))) : (print ("0")));
            echo ",";
            (($this->getAttribute(($context["particle"] ?? null), "rotate_end", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "rotate_end", []), "html", null, true))) : (print ("0")));
            echo ";";
        }
        $context["rotate"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        ob_start(function () { return ''; });
        // line 60
        if (($this->getAttribute(($context["particle"] ?? null), "opacity_start", []) || $this->getAttribute(($context["particle"] ?? null), "opacity_end", []))) {
            echo "opacity: ";
            (($this->getAttribute(($context["particle"] ?? null), "opacity_start", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "opacity_start", []), "html", null, true))) : (print ("1")));
            echo ",";
            (($this->getAttribute(($context["particle"] ?? null), "opacity_end", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "opacity_end", []), "html", null, true))) : (print ("1")));
            echo ";";
        }
        $context["opacity"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        ob_start(function () { return ''; });
        // line 65
        if (($this->getAttribute(($context["particle"] ?? null), "animation", []) == "parallax")) {
            // line 66
            $context["pa_z_index"] = (($this->getAttribute(($context["particle"] ?? null), "pa_z_index", [])) ? (" jl-position-z-index jl-position-relative") : (""));
            // line 67
            $context["parallax_transform_origin"] = ((($this->getAttribute(($context["particle"] ?? null), "parallax_transform_origin", []) != "center-center")) ? ((" jl-transform-origin-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "parallax_transform_origin", [])))) : (""));
            // line 68
            if (((((((((((((($this->getAttribute(($context["particle"] ?? null), "pa_horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "pa_horizontal_end", [])) || $this->getAttribute(($context["particle"] ?? null), "pa_vertical_start", [])) || $this->getAttribute(($context["particle"] ?? null), "pa_vertical_end", [])) || $this->getAttribute(($context["particle"] ?? null), "scale_start", [])) || $this->getAttribute(($context["particle"] ?? null), "scale_end", [])) || $this->getAttribute(($context["particle"] ?? null), "rotate_start", [])) || $this->getAttribute(($context["particle"] ?? null), "rotate_end", [])) || $this->getAttribute(($context["particle"] ?? null), "opacity_start", [])) || $this->getAttribute(($context["particle"] ?? null), "opacity_end", [])) || $this->getAttribute(($context["particle"] ?? null), "easing", [])) || $this->getAttribute(($context["particle"] ?? null), "parallax_start", [])) || $this->getAttribute(($context["particle"] ?? null), "parallax_end", [])) || $this->getAttribute(($context["particle"] ?? null), "pa_breakpoint", []))) {
                echo " jl-parallax=\"";
                echo twig_escape_filter($this->env, ((((($context["pahorizontal"] ?? null) . ($context["pavertical"] ?? null)) . ($context["scale"] ?? null)) . ($context["rotate"] ?? null)) . ($context["opacity"] ?? null)), "html", null, true);
                if ($this->getAttribute(($context["particle"] ?? null), "easing", [])) {
                    echo "easing: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "easing", []));
                    echo ";";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "parallax_start", [])) {
                    echo "start: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "parallax_start", []));
                    echo ";";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "parallax_end", [])) {
                    echo "end: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "parallax_end", []));
                    echo ";";
                }
                if (($this->getAttribute(($context["particle"] ?? null), "pa_breakpoint", []) != "always")) {
                    echo "media: @";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_breakpoint", []));
                }
                echo "\"";
            }
        } elseif (($this->getAttribute(        // line 69
($context["particle"] ?? null), "animation", []) != "inherit")) {
            // line 70
            echo " jl-scrollspy=\"cls: jl-animation-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animation", []));
            echo ";";
            if (($this->getAttribute(($context["particle"] ?? null), "animation_repeat", []) == "enabled")) {
                echo " repeat: true;";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "animation_delay", [])) {
                echo " delay: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animation_delay", []));
                echo ";";
            }
            echo "\"
";
        }
        $context["animation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        ob_start(function () { return ''; });
        // line 76
        if (($this->getAttribute(($context["particle"] ?? null), "align", []) != "inherit")) {
            echo " jl-text-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "align", []));
            if (($this->getAttribute(($context["particle"] ?? null), "breakpoint", []) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint", []));
            }
        }
        if ((($this->getAttribute(($context["particle"] ?? null), "align", []) != "inherit") && ($this->getAttribute(($context["particle"] ?? null), "breakpoint", []) != "always"))) {
            if (($this->getAttribute(($context["particle"] ?? null), "fallback", []) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "fallback", []));
            }
        }
        $context["particle_alignment"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        ob_start(function () { return ''; });
        // line 81
        if ($this->getAttribute(($context["particle"] ?? null), "particle_title", [])) {
            // line 82
            echo "<";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo " id=\"el-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g5-title";
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_align", []) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_align", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "particle_predefined_color", []) != "default")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_predefined_color", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_style", []) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_style", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) != "none")) {
                echo " jl-heading-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []));
            }
            if ($this->getAttribute(($context["particle"] ?? null), "particle_title_text_transform", [])) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_text_transform", []));
            }
            if ($this->getAttribute(($context["particle"] ?? null), "particle_title_font_weight", [])) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_font_weight", []));
            }
            echo "\">
";
            // line 83
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) == "line")) {
                echo " <span>";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "</span>
";
            } else {
                // line 84
                echo " ";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "
";
            }
            // line 86
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        ob_start(function () { return ''; });
        // line 91
        if (($this->getAttribute(($context["particle"] ?? null), "divider_align", []) != "inherit")) {
            echo " jl-text-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "divider_align", []));
            if (($this->getAttribute(($context["particle"] ?? null), "divider_breakpoint", []) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "divider_breakpoint", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "divider_fallback", []) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "divider_fallback", []));
            }
        }
        $context["divider_align"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        if (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "default")) {
            // line 95
            $context["divider_cls"] = " class=\"jl-hr\"";
        } elseif (($this->getAttribute(        // line 96
($context["particle"] ?? null), "divider_style", []) == "icon")) {
            // line 97
            $context["divider_cls"] = " class=\"jl-divider-icon\"";
        } elseif (($this->getAttribute(        // line 98
($context["particle"] ?? null), "divider_style", []) == "vertical")) {
            // line 99
            $context["divider_cls"] = " class=\"jl-divider-vertical\"";
        } else {
            // line 101
            $context["divider_cls"] = ((" class=\"jl-divider-small" . ($context["divider_align"] ?? null)) . "\"");
        }
        // line 105
        if (($this->getAttribute(($context["particle"] ?? null), "visibility", []) != "inherit")) {
            // line 106
            $context["visibility"] = ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), [0 => "s", 1 => "m", 2 => "l", 3 => "xl"])) ? ((" jl-visible@" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "visibility", [])))) : ((" jl-" . twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), ["-" => "@"]))));
        }
        // line 110
        if (($this->getAttribute(($context["particle"] ?? null), "margin", []) != "inherit")) {
            // line 111
            $context["margin"] = ((($this->getAttribute(($context["particle"] ?? null), "margin", []) != "default")) ? ((" jl-margin-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "margin", [])))) : (" jl-margin"));
        }
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jldivider.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        echo "<style>
";
        // line 5
        if (($this->getAttribute(($context["particle"] ?? null), "particle_title_color", []) || $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", []))) {
            // line 6
            echo "#el-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".g5-title { ";
            if ($this->getAttribute(($context["particle"] ?? null), "particle_title_color", [])) {
                echo "color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_color", []), "html", null, true);
                echo ";";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", [])) {
                echo "font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", []), "html", null, true);
                echo "px;";
            }
            echo " }
";
        }
        // line 8
        if (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "small")) {
            // line 9
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-divider-small::after {border-top: ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_border", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_border", []), "1")) : ("1")));
            echo "px solid ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_color", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_color", []), "#e5e5e5")) : ("#e5e5e5")));
            echo ";}
";
        }
        // line 11
        if (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "vertical")) {
            // line 12
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-divider-vertical {border-left: ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_border", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_border", []), "1")) : ("1")));
            echo "px solid ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_color", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_color", []), "#e5e5e5")) : ("#e5e5e5")));
            echo ";}
";
        }
        // line 14
        if (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "icon")) {
            // line 15
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-divider-icon::after,
#";
            // line 16
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-divider-icon::before {border-bottom: ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_border", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_border", []), "1")) : ("1")));
            echo "px solid ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_color", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_color", []), "#e5e5e5")) : ("#e5e5e5")));
            echo ";}
";
        }
        // line 18
        if (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "default")) {
            // line 19
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-hr,
#";
            // line 20
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle hr {
  border-top: ";
            // line 21
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_border", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_border", []), "1")) : ("1")));
            echo "px solid ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_color", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_color", []), "#e5e5e5")) : ("#e5e5e5")));
            echo ";
}
";
        }
        // line 24
        echo "</style>
";
    }

    // line 27
    public function block_javascript($context, array $blocks = [])
    {
        // line 28
        if (($this->getAttribute(($context["particle"] ?? null), "animation", []) == "parallax")) {
            // line 29
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jlcomponents/parallax.min.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    // line 114
    public function block_particle($context, array $blocks = [])
    {
        // line 115
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 116
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div class=\"";
            // line 117
            echo twig_escape_filter($this->env, ((((((($context["id"] ?? null) . ($context["content_maxwidth"] ?? null)) . ($context["particle_alignment"] ?? null)) . ($context["pa_z_index"] ?? null)) . ($context["parallax_transform_origin"] ?? null)) . ($context["margin"] ?? null)) . ($context["visibility"] ?? null)), "html", null, true);
            if ($this->getAttribute(($context["particle"] ?? null), "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []), "html", null, true);
            }
            echo "\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">
";
            // line 118
            if (($this->getAttribute(($context["particle"] ?? null), "divider_element", []) == "hr")) {
                // line 119
                echo "<hr";
                echo ($context["divider_cls"] ?? null);
                echo ">
";
            } else {
                // line 121
                echo "<div";
                echo ($context["divider_cls"] ?? null);
                echo "></div>
";
            }
            // line 123
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jldivider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 123,  411 => 121,  405 => 119,  403 => 118,  393 => 117,  389 => 116,  387 => 115,  384 => 114,  376 => 29,  374 => 28,  371 => 27,  366 => 24,  358 => 21,  354 => 20,  349 => 19,  347 => 18,  338 => 16,  333 => 15,  331 => 14,  321 => 12,  319 => 11,  309 => 9,  307 => 8,  290 => 6,  288 => 5,  285 => 4,  282 => 3,  277 => 1,  274 => 111,  272 => 110,  269 => 106,  267 => 105,  264 => 101,  261 => 99,  259 => 98,  257 => 97,  255 => 96,  253 => 95,  251 => 94,  237 => 91,  235 => 90,  228 => 86,  222 => 84,  215 => 83,  183 => 82,  181 => 81,  179 => 80,  163 => 76,  161 => 75,  145 => 70,  143 => 69,  118 => 68,  116 => 67,  114 => 66,  112 => 65,  110 => 64,  101 => 60,  99 => 59,  90 => 55,  88 => 54,  79 => 50,  77 => 49,  68 => 45,  66 => 44,  57 => 40,  55 => 39,  39 => 35,  37 => 34,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jldivider.html.twig", "/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/templates/jl_brand_lite/particles/jldivider.html.twig");
    }
}
