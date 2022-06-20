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

/* /var/www/html/resources/views/home.twig */
class __TwigTemplate_04e783215107d44e9d68de717c3df04a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@layouts/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        // line 2
        $context["scope"] = ["slides" => [0 => ["desktopImage" => "assets/images/mockup/slides/slide-desktop.png", "mobileImage" => "assets/images/mockup/slides/slide-mobile.png", "title" => "Проектируем<br> и строим загородные дома", "text" => "Строим дома «под ключ»: от этапа проектирования и до финишной отделки помещений."], 1 => ["desktopImage" => "assets/images/mockup/slides/slide-desktop.png", "mobileImage" => "assets/images/mockup/slides/slide-mobile.png", "title" => "Integer condimentum eget massa eget ornare", "text" => "Donec vehicula imperdiet tortor, ut fringilla lectus tempus et."], 2 => ["desktopImage" => "assets/images/mockup/slides/slide-desktop.png", "mobileImage" => "assets/images/mockup/slides/slide-mobile.png", "title" => "Cras molestie sem sit amet turpis sodales sodales", "text" => "Nunc lacinia, dui vel condimentum fringilla, nunc nisl dignissim mauris, et dapibus ante nunc eu nunc."]]];
        // line 1
        $this->parent = $this->loadTemplate("@layouts/base.twig", "/var/www/html/resources/views/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    <div class=\"Container Main\">
        <div class=\"Layout__section Layout__section--slider\">
            ";
        // line 29
        $this->loadTemplate("@components/slider/slider.twig", "/var/www/html/resources/views/home.twig", 29)->display(twig_array_merge($context, ["items" => TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source,         // line 30
($context["scope"] ?? null), "slides", [], "any", false, false, false, 30), "leftArrowSwiper" => TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source,         // line 31
($context["scope"] ?? null), "leftArrowSwiper", [], "any", false, false, false, 31), "rightArrowSwiper" => TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source,         // line 32
($context["scope"] ?? null), "rightArrowSwiper", [], "any", false, false, false, 32)]));
        // line 34
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/resources/views/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 34,  61 => 32,  60 => 31,  59 => 30,  58 => 29,  54 => 27,  50 => 26,  45 => 1,  43 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@layouts/base.twig' %}
{% set scope = {
    slides: [
        {
            desktopImage: 'assets/images/mockup/slides/slide-desktop.png',
            mobileImage: 'assets/images/mockup/slides/slide-mobile.png',
            title: 'Проектируем<br> и строим загородные дома',
            text: 'Строим дома «под ключ»: от этапа проектирования и до финишной отделки помещений.',
        },
        {
            desktopImage: 'assets/images/mockup/slides/slide-desktop.png',
            mobileImage: 'assets/images/mockup/slides/slide-mobile.png',
            title: 'Integer condimentum eget massa eget ornare',
            text: 'Donec vehicula imperdiet tortor, ut fringilla lectus tempus et.',
        },
        {
            desktopImage: 'assets/images/mockup/slides/slide-desktop.png',
            mobileImage: 'assets/images/mockup/slides/slide-mobile.png',
            title: 'Cras molestie sem sit amet turpis sodales sodales',
            text: 'Nunc lacinia, dui vel condimentum fringilla, nunc nisl dignissim mauris, et dapibus ante nunc eu nunc.',
        },
    ],
} %}


{% block main %}
    <div class=\"Container Main\">
        <div class=\"Layout__section Layout__section--slider\">
            {% include \"@components/slider/slider.twig\" with {
                items: scope.slides,
                leftArrowSwiper: scope.leftArrowSwiper,
                rightArrowSwiper: scope.rightArrowSwiper,
            } %}
        </div>
    </div>
{% endblock %}", "/var/www/html/resources/views/home.twig", "/var/www/html/resources/views/home.twig");
    }
}
