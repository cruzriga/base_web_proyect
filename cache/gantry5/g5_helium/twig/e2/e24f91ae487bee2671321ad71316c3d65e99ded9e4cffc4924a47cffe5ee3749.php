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

/* @particles/gp_calltoaction4.html.twig */
class __TwigTemplate_e5b041423d88827fd089766b9615b17c75e40d7bc2e25ad212ef29a2e94e8c16 extends \Twig\Template
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
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "\t<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"gp_cta4 ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []), "html", null, true);
        echo "\">
\t\t";
        // line 5
        if (($this->getAttribute(($context["particle"] ?? null), "bg_img", []) && $this->getAttribute(($context["particle"] ?? null), "bg_mask", []))) {
            // line 6
            echo "\t\t\t<div class=\"gp_mask\"></div>
\t\t";
        }
        $context["containerblock_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["containerblock_end"] = ('' === $tmp = "\t</div>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/gp_calltoaction4.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 15
        echo "\t<style type=\"text/css\">
\t\t#";
        // line 16
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " {
\t\t\t";
        // line 17
        if ($this->getAttribute(($context["particle"] ?? null), "bg_color", [])) {
            // line 18
            echo "\t\t\t\tbackground-color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "bg_color", []));
            echo ";
\t\t\t";
        }
        // line 20
        echo "\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "bg_img", [])) {
            // line 21
            echo "\t\t\t\tbackground-image: url(\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "bg_img", [])));
            echo "\");
\t\t\t\tbackground-position: center center;
\t\t\t\tbackground-repeat: no-repeat;
\t\t\t\tbackground-size: cover;
\t\t\t";
        }
        // line 26
        echo "\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "border_color", [])) {
            // line 27
            echo "\t\t\t\tborder: 1px solid ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "border_color", []));
            echo ";
\t\t\t";
        }
        // line 29
        echo "\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "border_left_color", [])) {
            // line 30
            echo "\t\t\t\tborder-left: 3px solid ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "border_left_color", []));
            echo ";
\t\t\t";
        }
        // line 32
        echo "\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "text_color", [])) {
            // line 33
            echo "\t\t\t\tcolor: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text_color", []));
            echo ";
\t\t\t";
        }
        // line 35
        echo "\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "padding", [])) {
            // line 36
            echo "\t\t\t\tpadding: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "padding", []));
            echo ";
\t\t\t";
        }
        // line 38
        echo "\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "shadow", [])) {
            // line 39
            echo "\t\t\t\tbox-shadow: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "shadow", []));
            echo ";
\t\t\t\t-webkit-box-shadow: ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "shadow", []));
            echo ";
\t\t\t";
        }
        // line 42
        echo "\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "font_size", [])) {
            // line 43
            echo "\t\t\t\tfont-size: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "font_size", []));
            echo ";
\t\t\t";
        }
        // line 45
        echo "\t\t}
\t\t";
        // line 46
        if ($this->getAttribute(($context["particle"] ?? null), "text_color", [])) {
            // line 47
            echo "\t\t\t#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " h1, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " h2, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " h3, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " h4 {
\t\t\t\tcolor: ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text_color", []));
            echo ";
\t\t\t}
\t\t";
        }
        // line 51
        echo "\t\t";
        if (($this->getAttribute(($context["particle"] ?? null), "bg_img", []) && $this->getAttribute(($context["particle"] ?? null), "bg_mask", []))) {
            // line 52
            echo "\t\t\t#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .gp_mask {
\t\t\t\tbackground: ";
            // line 53
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "bg_mask_color", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "bg_mask_color", []), "#000000")) : ("#000000")), "html", null, true);
            echo ";
\t\t\t\topacity: ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "bg_mask", []));
            echo ";
\t\t\t}
\t\t";
        }
        // line 57
        echo "\t</style>
";
    }

    // line 60
    public function block_particle($context, array $blocks = [])
    {
        // line 61
        echo "\t";
        echo twig_escape_filter($this->env, ($context["containerblock_start"] ?? null), "html", null, true);
        echo "
\t\t<div class=\"gp_content\">
\t\t\t";
        // line 63
        if (($this->getAttribute(($context["particle"] ?? null), "title", []) || $this->getAttribute(($context["particle"] ?? null), "desc", []))) {
            // line 64
            echo "\t\t\t\t<div class=\"gp_content_left\">
\t\t\t\t\t";
            // line 65
            if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
                // line 66
                echo "\t\t\t\t\t\t<";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_tag", []));
                echo " style=\"margin-top:0; margin-bottom:15px;\">";
                echo $this->getAttribute(($context["particle"] ?? null), "title", []);
                echo "</";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_tag", []));
                echo ">
\t\t\t\t\t";
            }
            // line 68
            echo "
\t\t\t\t\t";
            // line 69
            if ($this->getAttribute(($context["particle"] ?? null), "desc", [])) {
                // line 70
                echo "\t\t\t\t\t\t<div>";
                echo $this->getAttribute(($context["particle"] ?? null), "desc", []);
                echo "</div>
\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 74
        echo "
\t\t\t";
        // line 75
        if ($this->getAttribute(($context["particle"] ?? null), "button_text", [])) {
            // line 76
            echo "\t\t\t\t<div class=\"gp_content_right\">
\t\t\t\t\t<a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "button_url", []));
            echo "\" target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "button_target", []), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "button_class", []));
            echo "\">";
            echo $this->getAttribute(($context["particle"] ?? null), "button_text", []);
            echo " </a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 80
        echo "\t\t</div>
\t";
        // line 81
        echo twig_escape_filter($this->env, ($context["containerblock_end"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/gp_calltoaction4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 81,  254 => 80,  242 => 77,  239 => 76,  237 => 75,  234 => 74,  230 => 72,  224 => 70,  222 => 69,  219 => 68,  209 => 66,  207 => 65,  204 => 64,  202 => 63,  196 => 61,  193 => 60,  188 => 57,  182 => 54,  178 => 53,  173 => 52,  170 => 51,  164 => 48,  153 => 47,  151 => 46,  148 => 45,  142 => 43,  139 => 42,  134 => 40,  129 => 39,  126 => 38,  120 => 36,  117 => 35,  111 => 33,  108 => 32,  102 => 30,  99 => 29,  93 => 27,  90 => 26,  81 => 21,  78 => 20,  72 => 18,  70 => 17,  66 => 16,  63 => 15,  60 => 14,  55 => 1,  52 => 10,  47 => 6,  45 => 5,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/gp_calltoaction4.html.twig", "/home/conqbfeh/public_html/templates/g5_helium/custom/particles/gp_calltoaction4.html.twig");
    }
}
