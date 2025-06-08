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

/* calendar/day.html.twig */
class __TwigTemplate_498de364896c2396e8a9005d80634253 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/day.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/day.html.twig"));

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

        // line 5
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "        Bewerk ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "firstName", [], "any", false, false, false, 6), "html", null, true);
            yield "’s registratie — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 6, $this->source); })()), "date", [], "any", false, false, false, 6), "d-m-Y"), "html", null, true);
            yield "
    ";
        } else {
            // line 8
            yield "        Nieuwe registratie voor ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "firstName", [], "any", false, false, false, 8), "html", null, true);
            yield " — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 8, $this->source); })()), "date", [], "any", false, false, false, 8), "d-m-Y"), "html", null, true);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "    <div class=\"container my-4\">
        <h1 class=\"mb-4\">
            ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "                Bewerk registratie — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 16, $this->source); })()), "date", [], "any", false, false, false, 16), "d-m-Y"), "html", null, true);
            yield "
            ";
        } else {
            // line 18
            yield "                Nieuwe registratie — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), "d-m-Y"), "html", null, true);
            yield "
            ";
        }
        // line 20
        yield "        </h1>

        ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        yield "

        ";
        // line 25
        yield "        <div class=\"col-md-4\">
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), 'row', ["label" => "Datum", "label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control", "readonly" => "readonly"]]);
        // line 30
        yield "
        </div>

        ";
        // line 34
        yield "        <div class=\"col-md-4\">
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), 'row', ["label" => "Gebruiker", "label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control", "disabled" => "disabled"]]);
        // line 39
        yield "
        </div>

        ";
        // line 43
        yield "        <div class=\"col-md-4\">
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "clockIn", [], "any", false, false, false, 44), 'row', ["label" => "Inkloktijd", "label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control"]]);
        // line 48
        yield "
        </div>

        ";
        // line 52
        yield "        <div class=\"col-md-4\">
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "clockOut", [], "any", false, false, false, 53), 'row', ["label" => "Uitkloktijd", "label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control"]]);
        // line 57
        yield "
        </div>

        ";
        // line 61
        yield "        <div class=\"col-md-4\">
            <label class=\"form-label\">Gewerkte tijd (minuten)</label>
            <input type=\"text\"
                   class=\"form-control-plaintext\"
                   readonly
                   value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 66, $this->source); })()), "hoursWorked", [], "any", false, false, false, 66) * 60)), "html", null, true);
        yield " min\">
        </div>

        ";
        // line 70
        yield "        <div class=\"col-12\">
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "comment", [], "any", false, false, false, 71), 'row', ["label" => "Opmerking", "label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control", "rows" => 3]]);
        // line 75
        yield "
        </div>

        ";
        // line 79
        yield "        <div class=\"col-md-6\">
            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "tags", [], "any", false, false, false, 80), 'row', ["label" => "Tags", "label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-select", "multiple" => "multiple"]]);
        // line 84
        yield "
        </div>

        ";
        // line 88
        yield "        <div class=\"col-12 text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 90
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Bijwerken") : ("Opslaan"));
        yield "
            </button>
            <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_month_default");
        yield "\" class=\"btn btn-link ms-2\">
                Terug naar overzicht
            </a>
        </div>

        ";
        // line 97
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'form_end');
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
        return "calendar/day.html.twig";
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
        return array (  235 => 97,  227 => 92,  222 => 90,  218 => 88,  213 => 84,  211 => 80,  208 => 79,  203 => 75,  201 => 71,  198 => 70,  192 => 66,  185 => 61,  180 => 57,  178 => 53,  175 => 52,  170 => 48,  168 => 44,  165 => 43,  160 => 39,  158 => 35,  155 => 34,  150 => 30,  148 => 26,  145 => 25,  140 => 22,  136 => 20,  130 => 18,  124 => 16,  122 => 15,  118 => 13,  105 => 12,  88 => 8,  80 => 6,  77 => 5,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/calendar/day.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}
    {% if entry.id %}
        Bewerk {{ entry.user.firstName }}’s registratie — {{ entry.date|date('d-m-Y') }}
    {% else %}
        Nieuwe registratie voor {{ entry.user.firstName }} — {{ entry.date|date('d-m-Y') }}
    {% endif %}
{% endblock %}

{% block body %}
    <div class=\"container my-4\">
        <h1 class=\"mb-4\">
            {% if entry.id %}
                Bewerk registratie — {{ entry.date|date('d-m-Y') }}
            {% else %}
                Nieuwe registratie — {{ entry.date|date('d-m-Y') }}
            {% endif %}
        </h1>

        {{ form_start(form, { attr: { class: 'row g-3' } }) }}

        {# Datum (readonly) #}
        <div class=\"col-md-4\">
            {{ form_row(form.date, {
                label:     'Datum',
                label_attr:{ class: 'form-label' },
                attr:      { class: 'form-control', readonly: 'readonly' }
            }) }}
        </div>

        {# Gebruiker (readonly) #}
        <div class=\"col-md-4\">
            {{ form_row(form.user, {
                label:     'Gebruiker',
                label_attr:{ class: 'form-label' },
                attr:      { class: 'form-control', disabled: 'disabled' }
            }) }}
        </div>

        {# Clock In #}
        <div class=\"col-md-4\">
            {{ form_row(form.clockIn, {
                label:     'Inkloktijd',
                label_attr:{ class: 'form-label' },
                attr:      { class: 'form-control' }
            }) }}
        </div>

        {# Clock Out #}
        <div class=\"col-md-4\">
            {{ form_row(form.clockOut, {
                label:     'Uitkloktijd',
                label_attr:{ class: 'form-label' },
                attr:      { class: 'form-control' }
            }) }}
        </div>

        {# Minutes Worked #}
        <div class=\"col-md-4\">
            <label class=\"form-label\">Gewerkte tijd (minuten)</label>
            <input type=\"text\"
                   class=\"form-control-plaintext\"
                   readonly
                   value=\"{{ (entry.hoursWorked * 60)|round }} min\">
        </div>

        {# Opmerking #}
        <div class=\"col-12\">
            {{ form_row(form.comment, {
                label:     'Opmerking',
                label_attr:{ class: 'form-label' },
                attr:      { class: 'form-control', rows: 3 }
            }) }}
        </div>

        {# Tags #}
        <div class=\"col-md-6\">
            {{ form_row(form.tags, {
                label:     'Tags',
                label_attr:{ class: 'form-label' },
                attr:      { class: 'form-select', multiple: 'multiple' }
            }) }}
        </div>

        {# Buttons #}
        <div class=\"col-12 text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">
                {{ entry.id ? 'Bijwerken' : 'Opslaan' }}
            </button>
            <a href=\"{{ path('calendar_month_default') }}\" class=\"btn btn-link ms-2\">
                Terug naar overzicht
            </a>
        </div>

        {{ form_end(form) }}
    </div>
{% endblock %}
", "calendar/day.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\calendar\\day.html.twig");
    }
}
