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

/* @components/contacts/contacts.twig */
class __TwigTemplate_b32a38b3731317eb61f95ce61b85daba extends Template
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
        $context["scope"] = ["phone" => "8 (800) 555-35-35", "email" => "info@gmail.com", "location" => "г. Владивосток<br>ул. Выселковая 49, стр. 3"];
        // line 8
        echo "
";
        // line 43
        echo "
";
        // line 44
        echo twig_call_macro($macros["macros"], "macro_content", [($context["scope"] ?? null)], 44, $context, $this->getSourceContext());
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
            echo "    <div class=\"ContactsSection\">
        <div class=\"ContactsItem\">
            <a href=\"tel: ";
            // line 12
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["scope"] ?? null), "phone", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                <img
                    src=\"";
            // line 14
            echo "assets/icons/phone-white.svg";
            echo "\"
                    alt=\"Telephone icon\" width=\"24\" height=\"14\"
                    class=\"ContactsItem__icon\"
                >
            </a>
            ";
            // line 19
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["scope"] ?? null), "phone", [], "any", false, false, false, 19), "html", null, true);
            echo "
        </div>
        <div class=\"ContactsItem\">
            <a href=\"email: ";
            // line 22
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["scope"] ?? null), "email", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
                <img
                    src=\"";
            // line 24
            echo "assets/icons/email-white.svg";
            echo "\"
                    alt=\"Email icon\" width=\"24\" height=\"14\"
                    class=\"ContactsItem__icon\"
                >
            </a>
            ";
            // line 29
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["scope"] ?? null), "email", [], "any", false, false, false, 29), "html", null, true);
            echo "
        </div>
        <div class=\"ContactsItem\">
            <span>
                <img
                    src=\"";
            // line 34
            echo "assets/icons/location-marker-white.svg";
            echo "\"
                    alt=\"Location icon\" width=\"24\" height=\"14\"
                    class=\"ContactsItem__icon\"
                >
            </span>
            ";
            // line 39
            echo TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["scope"] ?? null), "location", [], "any", false, false, false, 39);
            echo "
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
        return "@components/contacts/contacts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  112 => 34,  104 => 29,  96 => 24,  91 => 22,  85 => 19,  77 => 14,  72 => 12,  68 => 10,  55 => 9,  51 => 44,  48 => 43,  45 => 8,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as macros %}

{% set scope = {
    phone: '8 (800) 555-35-35',
    email: 'info@gmail.com',
    location: 'г. Владивосток<br>ул. Выселковая 49, стр. 3',
} %}

{% macro content(scope) %}
    <div class=\"ContactsSection\">
        <div class=\"ContactsItem\">
            <a href=\"tel: {{ scope.phone }}\">
                <img
                    src=\"{{ 'assets/icons/phone-white.svg' }}\"
                    alt=\"Telephone icon\" width=\"24\" height=\"14\"
                    class=\"ContactsItem__icon\"
                >
            </a>
            {{ scope.phone }}
        </div>
        <div class=\"ContactsItem\">
            <a href=\"email: {{ scope.email }}\">
                <img
                    src=\"{{ 'assets/icons/email-white.svg' }}\"
                    alt=\"Email icon\" width=\"24\" height=\"14\"
                    class=\"ContactsItem__icon\"
                >
            </a>
            {{ scope.email }}
        </div>
        <div class=\"ContactsItem\">
            <span>
                <img
                    src=\"{{ 'assets/icons/location-marker-white.svg' }}\"
                    alt=\"Location icon\" width=\"24\" height=\"14\"
                    class=\"ContactsItem__icon\"
                >
            </span>
            {{ scope.location|raw }}
        </div>
    </div>
{% endmacro %}

{{ macros.content(scope) }}", "@components/contacts/contacts.twig", "/var/www/html/resources/components/contacts/contacts.twig");
    }
}
