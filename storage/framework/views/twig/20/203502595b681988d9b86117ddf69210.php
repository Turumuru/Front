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

/* @components/footer/footer.twig */
class __TwigTemplate_ed2d53e0755f6bfdc42da28e3addb92c extends Template
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
        // line 9
        echo "
";
        // line 10
        echo twig_call_macro($macros["macros"], "macro_content", [], 10, $context, $this->getSourceContext());
    }

    // line 3
    public function macro_content(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "    <div class=\"Container\">
        Footer
    </div>
    
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@components/footer/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 4,  50 => 3,  46 => 10,  43 => 9,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as macros %}

{% macro content() %}
    <div class=\"Container\">
        Footer
    </div>
    
{% endmacro %}

{{ macros.content }}", "@components/footer/footer.twig", "/var/www/html/resources/components/footer/footer.twig");
    }
}
