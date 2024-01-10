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

/* @particles/jlfooterinfo.html.twig */
class __TwigTemplate_dbf0dfe5da0bbcf155a153f28beb045554ade19092ba66fc0e54773efc0c8979 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        // line 14
        ob_start(function () { return ''; });
        // line 15
        if (($this->getAttribute(($context["particle"] ?? null), "animation", []) != "inherit")) {
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
            echo "\"";
        }
        $context["animation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        ob_start(function () { return ''; });
        // line 20
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
        // line 24
        ob_start(function () { return ''; });
        // line 25
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
        // line 29
        ob_start(function () { return ''; });
        // line 30
        if (($this->getAttribute(($context["particle"] ?? null), "align", []) != "inherit")) {
            echo " jl-flex jl-flex-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "align", []));
            if (($this->getAttribute(($context["particle"] ?? null), "breakpoint", []) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint", []));
            }
        }
        if ((($this->getAttribute(($context["particle"] ?? null), "align", []) != "inherit") && ($this->getAttribute(($context["particle"] ?? null), "breakpoint", []) != "always"))) {
            if (($this->getAttribute(($context["particle"] ?? null), "fallback", []) != "inherit")) {
                echo " jl-flex-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "fallback", []));
            }
        }
        $context["grid_alignment"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        ob_start(function () { return ''; });
        // line 35
        if ($this->getAttribute(($context["particle"] ?? null), "particle_title", [])) {
            // line 36
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
            // line 37
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) == "line")) {
                echo " <span>";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "</span>
";
            } else {
                // line 38
                echo " ";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "
";
            }
            // line 40
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        $context["image_width"] = (($this->getAttribute(($context["particle"] ?? null), "image_width", [])) ? (((" width=\"" . $this->getAttribute(($context["particle"] ?? null), "image_width", [])) . "\"")) : (""));
        // line 46
        $context["image_height"] = (($this->getAttribute(($context["particle"] ?? null), "image_height", [])) ? (((" height=\"" . $this->getAttribute(($context["particle"] ?? null), "image_height", [])) . "\"")) : (""));
        // line 47
        $context["image_size"] = (((twig_test_empty($this->getAttribute(($context["particle"] ?? null), "image_width", [])) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "image_height", [])))) ? ((" " . $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute(($context["particle"] ?? null), "image", [])))) : (""));
        // line 49
        $context["image_loading"] = ((($this->getAttribute(($context["particle"] ?? null), "image_loading", []) == false)) ? (" loading=\"lazy\"") : (""));
        // line 52
        ob_start(function () { return ''; });
        // line 53
        if (($this->getAttribute(($context["particle"] ?? null), "social_style", []) && ($this->getAttribute(($context["particle"] ?? null), "social_style", []) != "button"))) {
            echo " jl-link-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "social_style", []));
        }
        $context["socials_cls"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        if ($this->getAttribute(($context["particle"] ?? null), "social_target", [])) {
            // line 57
            $context["targetAttrib"] = ((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "social_target", []))) . "\"");
            // line 58
            $context["targetAttrib"] = ((($this->getAttribute(($context["particle"] ?? null), "social_target", []) == "_blank")) ? ((($context["targetAttrib"] ?? null) . " rel=\"noopener noreferrer\"")) : (($context["targetAttrib"] ?? null)));
        }
        // line 62
        ob_start(function () { return ''; });
        // line 63
        echo "<div class=\"jl-child-width-auto jl-grid-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "social_gutter", []), "html", null, true);
        if (($this->getAttribute(($context["particle"] ?? null), "social_margin_top", []) == "default")) {
            echo " jl-margin-top";
        } else {
            echo " jl-margin-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "social_margin_top", []));
            echo "-top";
        }
        echo twig_escape_filter($this->env, ($context["grid_alignment"] ?? null), "html", null, true);
        echo "\" jl-grid>
";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 65
            echo "    ";
            $context["title"] = (( !twig_test_empty($this->getAttribute($context["item"], "title", []))) ? (twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []))) : (twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []))));
            // line 66
            echo "    ";
            $context["titleAttrib"] = (( !twig_test_empty(($context["title"] ?? null))) ? (((((" title=\"" . ($context["title"] ?? null)) . "\" aria-label=\"") . ($context["title"] ?? null)) . "\"")) : (""));
            // line 67
            echo "    <div class=\"tm-item\">
        <a class=\"tm-link";
            // line 68
            echo twig_escape_filter($this->env, ($context["socials_cls"] ?? null), "html", null, true);
            echo (((($this->getAttribute(($context["particle"] ?? null), "social_style", []) == "button") && twig_in_filter($this->getAttribute(($context["particle"] ?? null), "display", []), [0 => "both", 1 => "icons_only"]))) ? (" jl-icon-button") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
            echo "\"";
            echo ($context["targetAttrib"] ?? null);
            echo ($context["titleAttrib"] ?? null);
            echo ">
            ";
            // line 69
            if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "display", []), [0 => "both", 1 => "icons_only"])) {
                echo "<span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                echo "\"></span>";
            }
            // line 70
            echo "            ";
            if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "display", []), [0 => "both", 1 => "text_only"])) {
                echo "<span class=\"g-social-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                echo "</span>";
            }
            // line 71
            echo "        </a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</div>
";
        $context["socials"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        if (($this->getAttribute(($context["particle"] ?? null), "visibility", []) != "inherit")) {
            // line 79
            $context["visibility"] = ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), [0 => "s", 1 => "m", 2 => "l", 3 => "xl"])) ? ((" jl-visible@" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "visibility", [])))) : ((" jl-" . twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), ["-" => "@"]))));
        }
        // line 83
        if (($this->getAttribute(($context["particle"] ?? null), "margin", []) != "inherit")) {
            // line 84
            $context["margin"] = ((($this->getAttribute(($context["particle"] ?? null), "margin", []) != "default")) ? ((" jl-margin-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "margin", [])))) : (" jl-margin"));
        }
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlfooterinfo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        if (($this->getAttribute(($context["particle"] ?? null), "particle_title_color", []) || $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", []))) {
            // line 5
            echo "<style>
";
            // line 6
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_color", []) || $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", []))) {
                // line 7
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
            // line 9
            echo "</style>
";
        }
    }

    // line 87
    public function block_particle($context, array $blocks = [])
    {
        // line 88
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 89
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div id=\"";
            // line 90
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (((((($context["id"] ?? null) . ($context["content_maxwidth"] ?? null)) . ($context["particle_alignment"] ?? null)) . ($context["visibility"] ?? null)) . ($context["pa_z_index"] ?? null)) . ($context["margin"] ?? null)), "html", null, true);
            if ($this->getAttribute(($context["particle"] ?? null), "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []), "html", null, true);
            }
            echo "\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">
";
            // line 91
            if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
                // line 92
                echo "<a class=\"jl-logo jl-link-reset";
                echo twig_escape_filter($this->env, ($context["grid_alignment"] ?? null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_self")) : ("_self")), "html", null, true);
                echo "\" aria-label=\"Back to the homepage\">
  <img src=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])), "html", null, true);
                echo "\"";
                echo ($context["image_width"] ?? null);
                echo ($context["image_height"] ?? null);
                echo ($context["image_size"] ?? null);
                echo " alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_alt", []), "html", null, true);
                echo "\"";
                echo ($context["image_loading"] ?? null);
                echo ">
</a>
";
            }
            // line 96
            echo "
";
            // line 97
            if ($this->getAttribute(($context["particle"] ?? null), "content", [])) {
                // line 98
                echo "<div class=\"tm-content jl-panel";
                if (($this->getAttribute(($context["particle"] ?? null), "content_margin_top", []) == "default")) {
                    echo " jl-margin-top";
                } else {
                    echo " jl-margin-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_margin_top", []));
                    echo "-top";
                }
                echo "\">
  ";
                // line 99
                echo $this->getAttribute(($context["particle"] ?? null), "content", []);
                echo "
</div>
";
            }
            // line 102
            echo "
";
            // line 103
            if ($this->getAttribute(($context["particle"] ?? null), "html", [])) {
                // line 104
                echo "<div class=\"jl-margin-top\">
    ";
                // line 105
                $context["html"] = (($this->getAttribute(($context["particle"] ?? null), "twig", [])) ? ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "compile", [0 => $this->getAttribute(($context["particle"] ?? null), "html", [])], "method")) : ($this->getAttribute(($context["particle"] ?? null), "html", [])));
                // line 106
                echo "    ";
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->htmlFilter((($this->getAttribute(($context["particle"] ?? null), "filter", [])) ? ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "filter", [0 => ($context["html"] ?? null)], "method")) : (($context["html"] ?? null))));
                echo "
</div>
";
            }
            // line 109
            echo "
";
            // line 110
            if ($this->getAttribute(($context["particle"] ?? null), "module_id", [])) {
                // line 111
                echo "<div class=\"jl-margin-top\">
    ";
                // line 112
                echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "displayModule", [0 => $this->getAttribute(($context["particle"] ?? null), "module_id", []), 1 => ["style" => (($this->getAttribute(($context["particle"] ?? null), "chrome", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "chrome", []), "gantry")) : ("gantry")), "position" => "particle"]], "method");
                echo "
</div>
";
            }
            // line 115
            echo "
";
            // line 116
            if ($this->getAttribute(($context["particle"] ?? null), "items", [])) {
                // line 117
                echo "  ";
                echo twig_escape_filter($this->env, ($context["socials"] ?? null), "html", null, true);
                echo "
";
            }
            // line 119
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jlfooterinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 119,  402 => 117,  400 => 116,  397 => 115,  391 => 112,  388 => 111,  386 => 110,  383 => 109,  376 => 106,  374 => 105,  371 => 104,  369 => 103,  366 => 102,  360 => 99,  349 => 98,  347 => 97,  344 => 96,  330 => 93,  321 => 92,  319 => 91,  307 => 90,  303 => 89,  301 => 88,  298 => 87,  292 => 9,  275 => 7,  273 => 6,  270 => 5,  268 => 4,  265 => 3,  260 => 1,  257 => 84,  255 => 83,  252 => 79,  250 => 78,  246 => 74,  238 => 71,  231 => 70,  225 => 69,  215 => 68,  212 => 67,  209 => 66,  206 => 65,  202 => 64,  189 => 63,  187 => 62,  184 => 58,  182 => 57,  180 => 56,  174 => 53,  172 => 52,  170 => 49,  168 => 47,  166 => 46,  164 => 45,  157 => 40,  151 => 38,  144 => 37,  112 => 36,  110 => 35,  108 => 34,  92 => 30,  90 => 29,  74 => 25,  72 => 24,  56 => 20,  54 => 19,  38 => 15,  36 => 14,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlfooterinfo.html.twig", "/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/templates/jl_brand_lite/particles/jlfooterinfo.html.twig");
    }
}
