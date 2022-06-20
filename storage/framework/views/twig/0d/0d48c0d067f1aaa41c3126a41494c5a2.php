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

/* @components/header/header.twig */
class __TwigTemplate_cbd6b545ffaa6433404be7d784da13a1 extends Template
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
        $context["scope"] = ["menu" => [0 => ["url" => "/", "title" => "Реализованные проекты"], 1 => ["url" => "/", "title" => "Новости"], 2 => ["url" => "/", "title" => "Контакты"]], "phone" => "8 (800) 555-35-35"];
        // line 20
        echo "
";
        // line 48
        echo "
";
        // line 49
        echo twig_call_macro($macros["macros"], "macro_content", [($context["scope"] ?? null)], 49, $context, $this->getSourceContext());
        echo "

";
        // line 58
        echo " 

";
        // line 70
        echo "
";
        // line 76
        echo "
";
    }

    // line 21
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
            // line 22
            echo "    <div class=\"Container Header\">
        <div class=\"Header__logo\">
            ";
            // line 24
            echo twig_call_macro($macros["macros"], "macro_logo", [], 24, $context, $this->getSourceContext());
            echo "
        </div>

        <nav class=\"Header__nav\">
            ";
            // line 28
            $this->loadTemplate("@components/site-nav/site-nav.twig", "@components/header/header.twig", 28)->display(twig_array_merge($context, ["items" => TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source,             // line 29
($context["scope"] ?? null), "menu", [], "any", false, false, false, 29)]));
            // line 31
            echo "        </nav>

        <div class=\"Header__phone\">
            ";
            // line 34
            echo twig_call_macro($macros["macros"], "macro_phone", [TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["scope"] ?? null), "phone", [], "any", false, false, false, 34)], 34, $context, $this->getSourceContext());
            echo "
        </div>

        
        <div class=\"Header__feedbackButton\">
            ";
            // line 39
            echo twig_call_macro($macros["macros"], "macro_button", [], 39, $context, $this->getSourceContext());
            echo "
        </div>

        <div class=\"Header__offCanvasButton\">
            ";
            // line 43
            echo twig_call_macro($macros["macros"], "macro_offCanvasButton", [], 43, $context, $this->getSourceContext());
            echo "
        </div>
    </div>
    ";
            // line 46
            echo twig_call_macro($macros["macros"], "macro_offCanvas", [($context["scope"] ?? null)], 46, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 51
    public function macro_logo(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 52
            echo "    <a href=\"";
            echo $this->env->getFunction('route')->getCallable()("home");
            echo "\">
        <img
            src=\"";
            // line 54
            echo "assets/images/logo.svg";
            echo "\"
            alt=\"Cottage\"
         >
    </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 60
    public function macro_phone($__phone__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "phone" => $__phone__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 61
            echo "    ";
            $context["phone"] = (($context["phone"]) ?? (""));
            // line 62
            echo "    <a href=\"tel:";
            echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
            echo "\" class=\"PrimaryPhone\">
        <img 
            src=\"";
            // line 64
            echo "assets/icons/phone-green.svg";
            echo "\"
            alt=\"Phone icon\"
         >
         ";
            // line 67
            echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
            echo "
    </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 71
    public function macro_button(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 72
            echo "    <button type=\"button\" class=\"Button Button--primary\">
        Оставить заявку
    </button>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 77
    public function macro_offCanvasButton(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 78
            echo "    <button
        uk-toggle=\"target: #offcanvas\"
        type=\"button\"
        class=\"Button Button--primary Button--icon\"
    >
        <img 
                src=\"";
            // line 84
            echo "assets/icons/list-white.png";
            echo "\"
                alt=\"List icon\" width=\"24\" height=\"14\"
        >
    </button>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 89
    public function macro_offCanvas($__scope__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 90
            echo "    <div id=\"offcanvas\" uk-offcanvas=\"overlay: true; flip: true;\" class=\"OffCanvas\">
        <div class=\"uk-offcanvas-bar OffCanvas__layout\">
            <button
                class=\"uk-offcanvas-close Button OffCanvas__close\"
                type=\"button\"
                
            >
                <img
                    src=\"";
            // line 98
            echo "assets/icons/cross-white.svg";
            echo "\"
                    alt=\"Cross icon\" width=\"12\" height=\"12\"
                >
            </button>

            <nav class=\"OffCanvas__nav\">
            ";
            // line 104
            $this->loadTemplate("@components/site-nav/site-nav.twig", "@components/header/header.twig", 104)->display(twig_array_merge($context, ["items" => TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source,             // line 105
($context["scope"] ?? null), "menu", [], "any", false, false, false, 105), "column" => true, "white" => true]));
            // line 109
            echo "            </nav>

            <div class=\"OffCanvas__contacts\">
                ";
            // line 112
            $this->loadTemplate("@components/contacts/contacts.twig", "@components/header/header.twig", 112)->display($context);
            // line 113
            echo "            </div>
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
        return "@components/header/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 113,  302 => 112,  297 => 109,  295 => 105,  294 => 104,  285 => 98,  275 => 90,  262 => 89,  248 => 84,  240 => 78,  228 => 77,  216 => 72,  204 => 71,  192 => 67,  186 => 64,  180 => 62,  177 => 61,  164 => 60,  150 => 54,  144 => 52,  132 => 51,  121 => 46,  115 => 43,  108 => 39,  100 => 34,  95 => 31,  93 => 29,  92 => 28,  85 => 24,  81 => 22,  68 => 21,  63 => 76,  60 => 70,  56 => 58,  51 => 49,  48 => 48,  45 => 20,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as macros %}

{% set scope = {
    menu: [
        {
            url: '/',
            title: 'Реализованные проекты',
        },
        {
            url: '/',
            title: 'Новости',
        },
        {
            url: '/',
            title: 'Контакты',
        },
    ],
    phone: '8 (800) 555-35-35',
} %}

{% macro content(scope) %}
    <div class=\"Container Header\">
        <div class=\"Header__logo\">
            {{ macros.logo }}
        </div>

        <nav class=\"Header__nav\">
            {% include \"@components/site-nav/site-nav.twig\" with {
                items: scope.menu,
            } %}
        </nav>

        <div class=\"Header__phone\">
            {{ macros.phone(scope.phone) }}
        </div>

        
        <div class=\"Header__feedbackButton\">
            {{ macros.button }}
        </div>

        <div class=\"Header__offCanvasButton\">
            {{ macros.offCanvasButton }}
        </div>
    </div>
    {{ macros.offCanvas(scope) }}
{% endmacro %}

{{ macros.content(scope) }}

{% macro logo() %}
    <a href=\"{{ route('home') }}\">
        <img
            src=\"{{ 'assets/images/logo.svg' }}\"
            alt=\"Cottage\"
         >
    </a>
{% endmacro %} 

{% macro phone(phone) %}
    {% set phone = phone ?? '' %}
    <a href=\"tel:{{ phone }}\" class=\"PrimaryPhone\">
        <img 
            src=\"{{ 'assets/icons/phone-green.svg' }}\"
            alt=\"Phone icon\"
         >
         {{ phone }}
    </a>
{% endmacro %}

{% macro button() %}
    <button type=\"button\" class=\"Button Button--primary\">
        Оставить заявку
    </button>
{% endmacro %}

{% macro offCanvasButton() %}
    <button
        uk-toggle=\"target: #offcanvas\"
        type=\"button\"
        class=\"Button Button--primary Button--icon\"
    >
        <img 
                src=\"{{ 'assets/icons/list-white.png' }}\"
                alt=\"List icon\" width=\"24\" height=\"14\"
        >
    </button>
{% endmacro %}
{% macro offCanvas(scope) %}
    <div id=\"offcanvas\" uk-offcanvas=\"overlay: true; flip: true;\" class=\"OffCanvas\">
        <div class=\"uk-offcanvas-bar OffCanvas__layout\">
            <button
                class=\"uk-offcanvas-close Button OffCanvas__close\"
                type=\"button\"
                
            >
                <img
                    src=\"{{ 'assets/icons/cross-white.svg' }}\"
                    alt=\"Cross icon\" width=\"12\" height=\"12\"
                >
            </button>

            <nav class=\"OffCanvas__nav\">
            {% include '@components/site-nav/site-nav.twig' with {
                items: scope.menu,
                column: true,
                white: true,
            } %}
            </nav>

            <div class=\"OffCanvas__contacts\">
                {% include '@components/contacts/contacts.twig' %}
            </div>
        </div>
    </div>
{% endmacro %}", "@components/header/header.twig", "/var/www/html/resources/components/header/header.twig");
    }
}
