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

/* calendar_entry/new.html.twig */
class __TwigTemplate_cdf489b4c58791c64b54814c48d5e4fd extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar_entry/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar_entry/new.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Nieuwe Uurregistratie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-primary text-white\">
                        <h2 class=\"mb-0\"><i class=\"bi bi-clock-history me-2\"></i>Nieuwe Uurregistratie</h2>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "date", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Datum"]);
        yield "
                            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "readonly" => "readonly"]]);
        yield "
                            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "date", [], "any", false, false, false, 19), 'errors');
        yield "
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "clockIn", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Inklokken"]);
        yield "
                                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "clockIn", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "clockIn", [], "any", false, false, false, 25), 'errors');
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "clockOut", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Uitklokken"]);
        yield "
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "clockOut", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "clockOut", [], "any", false, false, false, 30), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "comment", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Opmerking"]);
        yield "
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "comment", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "rows" => 3]]);
        yield "
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "comment", [], "any", false, false, false, 36), 'errors');
        yield "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "tags", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Tags"]);
        yield "
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "tags", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-select", "multiple" => "multiple"]]);
        yield "
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "tags", [], "any", false, false, false, 41), 'errors');
        yield "
                        </div>
                        <div class=\"d-grid\">
                            <button type=\"submit\" class=\"btn btn-success btn-lg\">
                                <i class=\"bi bi-save2 me-1\"></i> Opslaan
                            </button>
                        </div>
                        ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        yield "
                    </div>
                    <div class=\"card-footer text-end\">
                        <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_index");
        yield "\" class=\"btn btn-link\">
                            <i class=\"bi bi-arrow-left-circle me-1\"></i> Terug naar overzicht
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return "calendar_entry/new.html.twig";
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
        return array (  197 => 51,  191 => 48,  181 => 41,  177 => 40,  173 => 39,  167 => 36,  163 => 35,  159 => 34,  152 => 30,  148 => 29,  144 => 28,  138 => 25,  134 => 24,  130 => 23,  123 => 19,  119 => 18,  115 => 17,  110 => 15,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/calendar_entry/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nieuwe Uurregistratie{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-primary text-white\">
                        <h2 class=\"mb-0\"><i class=\"bi bi-clock-history me-2\"></i>Nieuwe Uurregistratie</h2>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form, { attr: { novalidate: 'novalidate' } }) }}
                        <div class=\"mb-3\">
                            {{ form_label(form.date, 'Datum', { label_attr: {'class':'form-label'} }) }}
                            {{ form_widget(form.date, { attr: {'class':'form-control', readonly:'readonly'} }) }}
                            {{ form_errors(form.date) }}
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.clockIn, 'Inklokken', { label_attr: {'class':'form-label'} }) }}
                                {{ form_widget(form.clockIn, { attr: {'class':'form-control'} }) }}
                                {{ form_errors(form.clockIn) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.clockOut, 'Uitklokken', { label_attr: {'class':'form-label'} }) }}
                                {{ form_widget(form.clockOut, { attr: {'class':'form-control'} }) }}
                                {{ form_errors(form.clockOut) }}
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.comment, 'Opmerking', { label_attr: {'class':'form-label'} }) }}
                            {{ form_widget(form.comment, { attr: {'class':'form-control', rows:3} }) }}
                            {{ form_errors(form.comment) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.tags, 'Tags', { label_attr: {'class':'form-label'} }) }}
                            {{ form_widget(form.tags, { attr: {'class':'form-select', multiple:'multiple'} }) }}
                            {{ form_errors(form.tags) }}
                        </div>
                        <div class=\"d-grid\">
                            <button type=\"submit\" class=\"btn btn-success btn-lg\">
                                <i class=\"bi bi-save2 me-1\"></i> Opslaan
                            </button>
                        </div>
                        {{ form_end(form) }}
                    </div>
                    <div class=\"card-footer text-end\">
                        <a href=\"{{ path('app_calendar_entry_index') }}\" class=\"btn btn-link\">
                            <i class=\"bi bi-arrow-left-circle me-1\"></i> Terug naar overzicht
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "calendar_entry/new.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\calendar_entry\\new.html.twig");
    }
}
