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

/* @layouts/base.twig */
class __TwigTemplate_99250e75b501aa3ac50843b0a298c83f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ZagDom</title>

    <link rel=\"stylesheet\" href=\"build/main.css\">
</head>
<body class=\"antialiased\">
    <div class=\"Layout\">
        <header class=\"Layout__header\">
            ";
        // line 14
        $this->loadTemplate("@components/header/header.twig", "@layouts/base.twig", 14)->display($context);
        // line 15
        echo "        </header>
        <main class=\"Layout__main\">
            ";
        // line 17
        $this->displayBlock('main', $context, $blocks);
        // line 18
        echo "        </main>
        <footer class=\"Layout__footer\">
            ";
        // line 20
        $this->loadTemplate("@components/footer/footer.twig", "@layouts/base.twig", 20)->display($context);
        // line 21
        echo "        </footer>
    </div>

    <script type=\"text/javascript\" src=\"build/main.js\"></script>
</body>
</html>";
    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@layouts/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  68 => 21,  66 => 20,  62 => 18,  60 => 17,  56 => 15,  54 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ZagDom</title>

    <link rel=\"stylesheet\" href=\"build/main.css\">
</head>
<body class=\"antialiased\">
    <div class=\"Layout\">
        <header class=\"Layout__header\">
            {% include \"@components/header/header.twig\" %}
        </header>
        <main class=\"Layout__main\">
            {% block main %}{% endblock %}
        </main>
        <footer class=\"Layout__footer\">
            {% include \"@components/footer/footer.twig\" %}
        </footer>
    </div>

    <script type=\"text/javascript\" src=\"build/main.js\"></script>
</body>
</html>", "@layouts/base.twig", "/var/www/html/resources/layouts/base.twig");
    }
}
