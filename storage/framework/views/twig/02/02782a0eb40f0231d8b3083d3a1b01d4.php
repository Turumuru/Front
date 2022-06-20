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

/* @components/slider/slider.twig */
class __TwigTemplate_0294f96ed7f17643673dfea5f2cf5f42 extends Template
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
$context["items"]) ?? (""))];
        // line 6
        echo "
";
        // line 28
        echo "
";
        // line 53
        echo "
";
        // line 54
        echo twig_call_macro($macros["macros"], "macro_content", [($context["scope"] ?? null)], 54, $context, $this->getSourceContext());
    }

    // line 7
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
            echo "    
    <!-- Slider main container -->
    <div class=\"Slider swiper\" data-swiper>
        <!-- Additional required wrapper -->
        <div class=\"swiper-wrapper\">
            <!-- Slides -->
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["scope"] ?? null), "items", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                echo "                <div class=\"swiper-slide\">
                    ";
                // line 15
                echo twig_call_macro($macros["macros"], "macro_slide", [$context["item"]], 15, $context, $this->getSourceContext());
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </div>
        <!-- If we need pagination -->
        <div class=\"swiper-pagination\"></div>

        <!-- If we need navigation buttons -->
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 29
    public function macro_slide($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "    ";
            $context["data"] = ["desktopImage" => (((TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source,             // line 31
($context["data"] ?? null), "desktopImage", [], "any", true, true, false, 31) &&  !(null === TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "desktopImage", [], "any", false, false, false, 31)))) ? (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "desktopImage", [], "any", false, false, false, 31)) : ("")), "mobileImage" => (((TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source,             // line 32
($context["data"] ?? null), "mobileImage", [], "any", true, true, false, 32) &&  !(null === TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "mobileImage", [], "any", false, false, false, 32)))) ? (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "mobileImage", [], "any", false, false, false, 32)) : ("")), "title" => (((TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source,             // line 33
($context["data"] ?? null), "title", [], "any", true, true, false, 33) &&  !(null === TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, false, 33)))) ? (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, false, 33)) : ("")), "text" => (((TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source,             // line 34
($context["data"] ?? null), "text", [], "any", true, true, false, 34) &&  !(null === TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "text", [], "any", false, false, false, 34)))) ? (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "text", [], "any", false, false, false, 34)) : (""))];
            // line 36
            echo "
    <div class=\"Slide\">
        <picture class=\"Slide__picture\">
            <source media=\"(max-width: 639px)\" srcset=\"";
            // line 39
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "mobileImage", [], "any", false, false, false, 39), "html", null, true);
            echo "\">
            <source media=\"(min-width: 640px)\" srcset=\"";
            // line 40
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "desktopImage", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
            <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "desktopImage", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"Slide__image contain\">
        </picture>
        <div class=\"Slide__content\">
            <h2 class=\"Slide__title\">
                ";
            // line 45
            echo TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, false, 45);
            echo "
            </h2>
            <p class=\"Slide__text\">
                ";
            // line 48
            echo TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["data"] ?? null), "text", [], "any", false, false, false, 48);
            echo "
            </p>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@components/slider/slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 48,  155 => 45,  146 => 41,  142 => 40,  138 => 39,  133 => 36,  131 => 34,  130 => 33,  129 => 32,  128 => 31,  126 => 30,  113 => 29,  95 => 18,  86 => 15,  83 => 14,  79 => 13,  59 => 7,  55 => 54,  52 => 53,  49 => 28,  46 => 6,  44 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as macros %}

{% set scope = {
    items: items ?? '',
} %}

{% macro content(scope) %}    
    <!-- Slider main container -->
    <div class=\"Slider swiper\" data-swiper>
        <!-- Additional required wrapper -->
        <div class=\"swiper-wrapper\">
            <!-- Slides -->
            {% for item in scope.items %}
                <div class=\"swiper-slide\">
                    {{ macros.slide(item) }}
                </div>
            {% endfor %}
        </div>
        <!-- If we need pagination -->
        <div class=\"swiper-pagination\"></div>

        <!-- If we need navigation buttons -->
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
        </div>
    </div>
{% endmacro %}

{% macro slide(data) %}
    {% set data = {
        desktopImage: data.desktopImage ?? '',
        mobileImage: data.mobileImage ?? '',
        title: data.title ?? '',
        text: data.text ?? '',
    } %}

    <div class=\"Slide\">
        <picture class=\"Slide__picture\">
            <source media=\"(max-width: 639px)\" srcset=\"{{ data.mobileImage }}\">
            <source media=\"(min-width: 640px)\" srcset=\"{{ data.desktopImage }}\">
            <img src=\"{{ data.desktopImage }}\" alt=\"{{ data.title }}\" class=\"Slide__image contain\">
        </picture>
        <div class=\"Slide__content\">
            <h2 class=\"Slide__title\">
                {{ data.title|raw }}
            </h2>
            <p class=\"Slide__text\">
                {{ data.text|raw }}
            </p>
        </div>
    </div>
{% endmacro %}

{{ macros.content(scope) }}", "@components/slider/slider.twig", "/var/www/html/resources/components/slider/slider.twig");
    }
}
