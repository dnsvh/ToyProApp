<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* jobs/index.html.twig */
class __TwigTemplate_7990b0c560f07c73f93b9e20303f71ac extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jobs/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jobs/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Vacatures bij ToyPro";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1 class=\"mb-4\">Vacatures bij ToyPro</h1>

    <ul class=\"list-group\">
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
            <div>
                <h5 class=\"mb-1\">Order Picker</h5>
                <small>Nederweert &middot; Parttime</small>
            </div>
            <a href=\"#\" class=\"btn btn-sm btn-primary\">Meer info</a>
        </li>
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
            <div>
                <h5 class=\"mb-1\">Voorraadbeheer</h5>
                <small>Nederweert &middot; Parttime</small>
            </div>
            <a href=\"#\" class=\"btn btn-sm btn-primary\">Meer info</a>
        </li>
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
            <div>
                <h5 class=\"mb-1\">PHP Symfony Full Stack Developer</h5>
                <small>Nederweert (hybride) &middot; Fulltime / Parttime</small>
            </div>
            <a href=\"#\" class=\"btn btn-sm btn-primary\">Meer info</a>
        </li>
    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "jobs/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vacatures bij ToyPro{% endblock %}

{% block body %}
    <h1 class=\"mb-4\">Vacatures bij ToyPro</h1>

    <ul class=\"list-group\">
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
            <div>
                <h5 class=\"mb-1\">Order Picker</h5>
                <small>Nederweert &middot; Parttime</small>
            </div>
            <a href=\"#\" class=\"btn btn-sm btn-primary\">Meer info</a>
        </li>
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
            <div>
                <h5 class=\"mb-1\">Voorraadbeheer</h5>
                <small>Nederweert &middot; Parttime</small>
            </div>
            <a href=\"#\" class=\"btn btn-sm btn-primary\">Meer info</a>
        </li>
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
            <div>
                <h5 class=\"mb-1\">PHP Symfony Full Stack Developer</h5>
                <small>Nederweert (hybride) &middot; Fulltime / Parttime</small>
            </div>
            <a href=\"#\" class=\"btn btn-sm btn-primary\">Meer info</a>
        </li>
    </ul>
{% endblock %}
", "jobs/index.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\jobs\\index.html.twig");
    }
}
