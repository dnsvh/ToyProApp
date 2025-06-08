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

/* calendar_entry/edit.html.twig */
class __TwigTemplate_352483fca16c580c875f6dd5a0bd312f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar_entry/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar_entry/edit.html.twig"));

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

        yield "Bewerk Tijdregistratie #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        
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
        yield "    <div class=\"container my-4\">
        <h1 class=\"mb-4\">Bewerk Tijdregistratie #";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>

        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        yield "

        <div class=\"col-md-4\">
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "date", [], "any", false, false, false, 13), 'row', ["label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control"]]);
        // line 16
        yield "
        </div>

        <div class=\"col-md-4\">
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "clockIn", [], "any", false, false, false, 20), 'row', ["label" => "Inkloktijd", "label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control"]]);
        // line 24
        yield "
        </div>

        <div class=\"col-md-4\">
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "clockOut", [], "any", false, false, false, 28), 'row', ["label" => "Uitkloktijd", "label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control"]]);
        // line 32
        yield "
        </div>

        <div class=\"col-12\">
            <div class=\"form-group\">
                <label class=\"form-label\">Gewerkte Minuten</label>
                <input type=\"text\"
                       class=\"form-control-plaintext\"
                       readonly
                       value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 41, $this->source); })()), "hoursWorked", [], "any", false, false, false, 41) * 60)), "html", null, true);
        yield " min\" />
            </div>
        </div>

        <div class=\"col-12\">
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "comment", [], "any", false, false, false, 46), 'row', ["label" => "Opmerking", "label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control", "rows" => 3]]);
        // line 50
        yield "
        </div>

        <div class=\"col-md-6\">
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "tags", [], "any", false, false, false, 54), 'row', ["label" => "Tags", "label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-select", "multiple" => "multiple"]]);
        // line 58
        yield "
        </div>

        <div class=\"col-12 text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">
                Bijwerken
            </button>
            <a href=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
        yield "\"
               class=\"btn btn-secondary ms-2\">
                Bekijken
            </a>
            <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_index");
        yield "\"
               class=\"btn btn-link ms-2\">
                Terug naar lijst
            </a>
        </div>

        ";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        yield "
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
        return "calendar_entry/edit.html.twig";
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
        return array (  187 => 75,  178 => 69,  171 => 65,  162 => 58,  160 => 54,  154 => 50,  152 => 46,  144 => 41,  133 => 32,  131 => 28,  125 => 24,  123 => 20,  117 => 16,  115 => 13,  109 => 10,  104 => 8,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/calendar_entry/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Bewerk Tijdregistratie #{{ calendar_entry.id }}{% endblock %}

{% block body %}
    <div class=\"container my-4\">
        <h1 class=\"mb-4\">Bewerk Tijdregistratie #{{ calendar_entry.id }}</h1>

        {{ form_start(form, { attr: { class: 'row g-3' } }) }}

        <div class=\"col-md-4\">
            {{ form_row(form.date, {
                label_attr: { class: 'form-label' },
                attr:       { class: 'form-control' }
            }) }}
        </div>

        <div class=\"col-md-4\">
            {{ form_row(form.clockIn, {
                label:     'Inkloktijd',
                label_attr:{ class: 'form-label' },
                attr:      { class: 'form-control' }
            }) }}
        </div>

        <div class=\"col-md-4\">
            {{ form_row(form.clockOut, {
                label:     'Uitkloktijd',
                label_attr:{ class: 'form-label' },
                attr:      { class: 'form-control' }
            }) }}
        </div>

        <div class=\"col-12\">
            <div class=\"form-group\">
                <label class=\"form-label\">Gewerkte Minuten</label>
                <input type=\"text\"
                       class=\"form-control-plaintext\"
                       readonly
                       value=\"{{ (calendar_entry.hoursWorked * 60)|round }} min\" />
            </div>
        </div>

        <div class=\"col-12\">
            {{ form_row(form.comment, {
                label:     'Opmerking',
                label_attr:{ class: 'form-label' },
                attr:      { class: 'form-control', rows: 3 }
            }) }}
        </div>

        <div class=\"col-md-6\">
            {{ form_row(form.tags, {
                label:     'Tags',
                label_attr:{ class: 'form-label' },
                attr:      { class: 'form-select', multiple: 'multiple' }
            }) }}
        </div>

        <div class=\"col-12 text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">
                Bijwerken
            </button>
            <a href=\"{{ path('app_calendar_entry_show', { id: calendar_entry.id }) }}\"
               class=\"btn btn-secondary ms-2\">
                Bekijken
            </a>
            <a href=\"{{ path('app_calendar_entry_index') }}\"
               class=\"btn btn-link ms-2\">
                Terug naar lijst
            </a>
        </div>

        {{ form_end(form) }}
    </div>
{% endblock %}
", "calendar_entry/edit.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\calendar_entry\\edit.html.twig");
    }
}
