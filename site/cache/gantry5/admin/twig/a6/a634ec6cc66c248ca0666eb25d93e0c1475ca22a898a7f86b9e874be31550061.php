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

/* @gantry-admin/layouts/switcher.html.twig */
class __TwigTemplate_735f66f5e83619db3d0bf17f72b5a8e421d6a941908024381dd355f2534d7ee9 extends \Twig\Template
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
        echo "
<div class=\"g-tabs\" role=\"tablist\">
    <ul>
        <li class=\"active\">
            <a href=\"#\" id=\"g-switcher-platforms-tab\" role=\"presentation\" aria-controls=\"g-switcher-platforms\" role=\"tab\" aria-expanded=\"true\">
                ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PRESETS"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"#\" id=\"g-switcher-platforms-outlines\" role=\"presentation\" aria-controls=\"g-switcher-outlines\" role=\"tab\" aria-expanded=\"false\">
                ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_OUTLINES"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>
</div>

<div class=\"g-panes\">
    <div class=\"g-pane clearfix active\" role=\"tabpanel\" id=\"g-switcher-platforms\" aria-labelledby=\"g-switcher-platforms-tab\" aria-expanded=\"true\">
        <div class=\"g-preserve-particles\">
            <label>
                <input data-g-preserve=\"preset\" type=\"checkbox\" checked=\"checked\" />
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SWITCH_PRESET_DESC"), "html", null, true);
        echo "
            </label>
        </div>

        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["presets"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["group"]) {
            // line 27
            echo "        <ul class=\"g-switch-presets";
            if (($context["name"] == "user")) {
                echo " float-left";
            } else {
                echo " float-right";
            }
            echo "\" role=\"tablist\">
            <li tabindex=\"0\" class=\"g-switch-title\" role=\"presentation\">
                ";
            // line 29
            echo twig_escape_filter($this->env, ((($context["name"] == "user")) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LM_SWITCHER_USER")) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LM_SWITCHER_PLATFORM"))), "html", null, true);
            echo "
            </li>
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["group"]);
            foreach ($context['_seq'] as $context["key"] => $context["current"]) {
                // line 32
                echo "            <li tabindex=\"0\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_X_PRESET", $context["current"]), "html", null, true);
                echo "\" role=\"button\"
                data-switch=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => ((("configurations/" . ($context["configuration"] ?? null)) . "/layout/preset/") . $context["key"])], "method"), "html", null, true);
                echo "\"
                class=\"g-switch-preset\"
            >
                ";
                // line 36
                echo twig_escape_filter($this->env, $context["current"], "html", null, true);
                echo "
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['current'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </div>

    <div class=\"g-pane clearfix\" role=\"tabpanel\" id=\"g-switcher-outlines\" aria-labelledby=\"g-switcher-outlines-tab\" aria-expanded=\"false\">
        ";
        // line 44
        $context["user_conf"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "outlines", []), "copy", []), "user", []);
        // line 45
        echo "        ";
        $context["system_conf"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "outlines", []), "system", []);
        // line 46
        echo "
        <div class=\"g-preserve-particles\">
            <label>
                <input data-g-preserve=\"outline\" type=\"checkbox\" />
                ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SWITCH_OUTLINE_DESC"), "html", null, true);
        echo "
            </label>
            ";
        // line 52
        if ((($context["configuration"] ?? null) != "default")) {
            // line 53
            echo "            <label>
                <input data-g-inherit=\"outline\" type=\"checkbox\" checked=\"checked\" />
                ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SWITCH_OUTLINE_INHERIT_DESC"), "html", null, true);
            echo "
            </label>
            ";
        }
        // line 58
        echo "        </div>
        <ul class=\"g-switch-conf-user";
        // line 59
        if ($this->getAttribute(($context["system_conf"] ?? null), "count", [])) {
            echo " float-left";
        }
        echo "\" role=\"tablist\">
            <li tabindex=\"0\" class=\"g-switch-title\" role=\"presentation\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LM_SWITCHER_USER"), "html", null, true);
        echo "</li>
            <li tabindex=\"0\"
                aria-label=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_X_OUTLINE", $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BASE_OUTLINE")), "html", null, true);
        echo "\"
                role=\"button\"
                data-switch=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => (("configurations/" . ($context["configuration"] ?? null)) . "/layout/switch/default")], "method"), "html", null, true);
        echo "\"
                class=\"g-switch-configuration\"
            >
                ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BASE_OUTLINE"), "html", null, true);
        echo "
            </li>
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_conf"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["current"]) {
            // line 70
            echo "                ";
            if (($context["key"] != ($context["configuration"] ?? null))) {
                // line 71
                echo "                    ";
                $context["label"] = twig_title_string_filter($this->env, twig_trim_filter(twig_replace_filter($context["current"], ["_" => " "])));
                // line 72
                echo "                    <li tabindex=\"0\"
                        aria-label=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_X_OUTLINE", ($context["label"] ?? null)), "html", null, true);
                echo "\"
                        role=\"button\"
                        data-switch=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => ((("configurations/" . ($context["configuration"] ?? null)) . "/layout/switch/") . $context["key"])], "method"), "html", null, true);
                echo "\"
                        class=\"g-switch-configuration\"
                    >
                        ";
                // line 78
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                    </li>
                ";
            }
            // line 81
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['current'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </ul>

        ";
        // line 84
        if ($this->getAttribute(($context["system_conf"] ?? null), "count", [])) {
            // line 85
            echo "            <ul class=\"g-switch-conf-systems float-right\">
                <li tabindex=\"0\" class=\"g-switch-title\" role=\"presentation\">";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LM_SWITCHER_SYSTEM"), "html", null, true);
            echo "</li>
                ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["system_conf"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["current"]) {
                // line 88
                echo "                    ";
                $context["label"] = twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_trim_filter(twig_replace_filter($context["current"], ["_" => " "]))));
                // line 89
                echo "                    <li tabindex=\"0\"
                        aria-label=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_X_OUTLINE", ($context["label"] ?? null)), "html", null, true);
                echo "\"
                        role=\"button\"
                        data-switch=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => ((("configurations/" . ($context["configuration"] ?? null)) . "/layout/switch/") . $context["key"])], "method"), "html", null, true);
                echo "\"
                        class=\"g-switch-configuration\"
                    >
                        ";
                // line 95
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['current'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "            </ul>
        ";
        }
        // line 100
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/layouts/switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 100,  258 => 98,  249 => 95,  243 => 92,  238 => 90,  235 => 89,  232 => 88,  228 => 87,  224 => 86,  221 => 85,  219 => 84,  215 => 82,  209 => 81,  203 => 78,  197 => 75,  192 => 73,  189 => 72,  186 => 71,  183 => 70,  179 => 69,  174 => 67,  168 => 64,  163 => 62,  158 => 60,  152 => 59,  149 => 58,  143 => 55,  139 => 53,  137 => 52,  132 => 50,  126 => 46,  123 => 45,  121 => 44,  116 => 41,  109 => 39,  100 => 36,  94 => 33,  89 => 32,  85 => 31,  80 => 29,  70 => 27,  66 => 26,  59 => 22,  45 => 11,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/layouts/switcher.html.twig", "/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/administrator/components/com_gantry5/templates/layouts/switcher.html.twig");
    }
}
