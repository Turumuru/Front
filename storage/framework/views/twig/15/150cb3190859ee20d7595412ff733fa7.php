<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @components/site-nav/site-nav.twig */
class __TwigTemplate_5b3a534c909c3dd10e3dbfd5e09231b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        // line 1
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 2
        echo "
";
        // line 3
        $context["scope"] = ["items" => ((        // line 4
$context["items"]) ?? ([])), "column" => ((        // line 5
$context["column"]) ?? (false)), "white" => ((        // line 6
$context["white"]) ?? (false))];
        // line 8
        echo "
";
        // line 31
        echo "
";
        // line 32
        echo twig_call_macro($macros["macros"], "macro_content", [($context["scope"] ?? null)], 32, $context, $this->getSourceContext());
    }

    // line 9
    public function macro_content($__scope__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 10
            echo "    <ul
        class=\"
            SiteNav
            ";
            // line 13
            echo ((TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["scope"] ?? null), "column", [], "any", false, false, false, 13)) ? ("SiteNav--column") : (""));
            echo "
            ";
            // line 14
            echo ((TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["scope"] ?? null), "white", [], "any", false, false, false, 14)) ? ("SiteNav--white") : (""));
            echo "
        \"
    >
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["scope"] ?? null), "items", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "            ";
                $context["item"] = ["url" => (((TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source,                 // line 19
$context["item"], "url", [], "any", true, true, false, 19) &&  !(null === TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 19)))) ? (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 19)) : ("")), "title" => (((TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source,                 // line 20
$context["item"], "title", [], "any", true, true, false, 20) &&  !(null === TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20)))) ? (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20)) : (""))];
                // line 22
                echo "
            <li class=\"SiteNav__listItem\">
                <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 24), "html", null, true);
                echo "\" class=\"SiteNav__item\">
                    ";
                // line 25
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 25), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@components/site-nav/site-nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  103 => 25,  99 => 24,  95 => 22,  93 => 20,  92 => 19,  90 => 18,  86 => 17,  80 => 14,  76 => 13,  71 => 10,  58 => 9,  54 => 32,  51 => 31,  48 => 8,  46 => 6,  45 => 5,  44 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as macros %}

{% set scope = {
    items: items ?? [],
    column: column ?? false,
    white: white ?? false,
} %}

{% macro content(scope) %}
    <ul
        class=\"
            SiteNav
            {{ scope.column ? \"SiteNav--column\" }}
            {{ scope.white ? \"SiteNav--white\" }}
        \"
    >
        {% for item in scope.items %}
            {% set item = {
                url: item.url ?? '',
                title: item.title ?? '',
            } %}

            <li class=\"SiteNav__listItem\">
                <a href=\"{{ item.url }}\" class=\"SiteNav__item\">
                    {{ item.title }}
                </a>
            </li>
        {% endfor %}
    </ul>
{% endmacro %}

{{ macros.content(scope) }}", "@components/site-nav/site-nav.twig", "/var/www/html/resources/components/site-nav/site-nav.twig");
    }
}
