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

/* @particles/gp_contactinfo1.html.twig */
class __TwigTemplate_09bb6be8def99de9525b03b4cd688ebc93badac04b6be27260829440f1c7298b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        echo "\" class=\"gp_contactinfo1 ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []), "html", null, true);
        echo "\">
";
        $context["containerblock_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        $context["containerblock_end"] = ('' === $tmp = "\t</div>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        ob_start(function () { return ''; });
        // line 12
        echo "\t<div class=\"gp_content\">
\t\t";
        // line 13
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            echo "<h3>";
            echo nl2br($this->getAttribute(($context["particle"] ?? null), "title", []));
            echo "</h3>";
        }
        // line 14
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "desc", [])) {
            echo "<div class=\"gp_desc\">";
            echo nl2br($this->getAttribute(($context["particle"] ?? null), "desc", []));
            echo "</div>";
        }
        // line 15
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "gpItems", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "\t\t\t<div class=\"gp_info\">
\t\t\t\t<h4 style=\"margin: 16px 0 5px;\">";
            // line 17
            if ($this->getAttribute($context["item"], "icon", [])) {
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                echo "\"></i>&nbsp;&nbsp;";
            }
            echo $this->getAttribute($context["item"], "title", []);
            echo "</h4>
\t\t\t\t<div class=\"gp_info_desc\">";
            // line 18
            echo nl2br($this->getAttribute($context["item"], "desc", []));
            echo "</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</div>
";
        $context["gp_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/gp_contactinfo1.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_particle($context, array $blocks = [])
    {
        // line 25
        echo "\t";
        echo twig_escape_filter($this->env, ($context["containerblock_start"] ?? null), "html", null, true);
        echo "
\t\t";
        // line 26
        echo twig_escape_filter($this->env, ($context["gp_content"] ?? null), "html", null, true);
        echo "
\t";
        // line 27
        echo twig_escape_filter($this->env, ($context["containerblock_end"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/gp_contactinfo1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 27,  109 => 26,  104 => 25,  101 => 24,  96 => 1,  92 => 21,  83 => 18,  74 => 17,  71 => 16,  66 => 15,  59 => 14,  53 => 13,  50 => 12,  48 => 11,  45 => 7,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/gp_contactinfo1.html.twig", "/home/conqbfeh/public_html/templates/g5_helium/custom/particles/gp_contactinfo1.html.twig");
    }
}
