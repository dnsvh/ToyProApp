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

/* calendar_entry/index.html.twig */
class __TwigTemplate_00cb62c5a29c7815629eaeb0e88ab3fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar_entry/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar_entry/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Mijn urenregistraties";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Urenregistraties</h1>

        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_new");
        yield "\" class=\"btn btn-primary mb-3\">
            <i class=\"bi bi-plus-lg\"></i> Nieuwe registratie
        </a>

        <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover\">
                <thead class=\"table-light\">
                <tr>
                    <th>#</th>
                    <th>Datum</th>
                    <th>In</th>
                    <th>Uit</th>
                    <th>Minuten</th>
                    <th>Opmerking</th>
                    <th>Acties</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["calendar_entries"]) || array_key_exists("calendar_entries", $context) ? $context["calendar_entries"] : (function () { throw new RuntimeError('Variable "calendar_entries" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 27
            yield "                    <tr>
                        <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                        <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "date", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true);
            yield "</td>
                        <td>";
            // line 30
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "clockIn", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "clockIn", [], "any", false, false, false, 30), "H:i"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 31
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "clockOut", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "clockOut", [], "any", false, false, false, 31), "H:i"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "hoursWorked", [], "any", false, false, false, 32) * 60)), "html", null, true);
            yield " min</td>
                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "comment", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                        <td class=\"text-nowrap\">
                            <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\"
                               class=\"btn btn-sm btn-outline-secondary me-1\">
                                <i class=\"bi bi-eye\"></i> Bekijken
                            </a>
                            <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\"
                               class=\"btn btn-sm btn-outline-primary me-1\">
                                <i class=\"bi bi-pencil\"></i> Bewerken
                            </a>
                            <form method=\"post\"
                                  action=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Weet je het zeker?');\">
                                <input type=\"hidden\"
                                       name=\"_token\"
                                       value=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 49))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-sm btn-outline-danger\">
                                    <i class=\"bi bi-trash\"></i> Verwijderen
                                </button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 56
        if (!$context['_iterated']) {
            // line 57
            yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center\">Geen registraties gevonden.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                </tbody>
            </table>
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
        return "calendar_entry/index.html.twig";
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
        return array (  205 => 61,  196 => 57,  194 => 56,  182 => 49,  174 => 44,  166 => 39,  159 => 35,  154 => 33,  150 => 32,  146 => 31,  142 => 30,  138 => 29,  134 => 28,  131 => 27,  126 => 26,  105 => 8,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Mijn urenregistraties{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Urenregistraties</h1>

        <a href=\"{{ path('app_calendar_entry_new') }}\" class=\"btn btn-primary mb-3\">
            <i class=\"bi bi-plus-lg\"></i> Nieuwe registratie
        </a>

        <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover\">
                <thead class=\"table-light\">
                <tr>
                    <th>#</th>
                    <th>Datum</th>
                    <th>In</th>
                    <th>Uit</th>
                    <th>Minuten</th>
                    <th>Opmerking</th>
                    <th>Acties</th>
                </tr>
                </thead>
                <tbody>
                {% for entry in calendar_entries %}
                    <tr>
                        <td>{{ entry.id }}</td>
                        <td>{{ entry.date|date('Y-m-d') }}</td>
                        <td>{{ entry.clockIn ? entry.clockIn|date('H:i') : '' }}</td>
                        <td>{{ entry.clockOut ? entry.clockOut|date('H:i') : '' }}</td>
                        <td>{{ (entry.hoursWorked * 60)|round }} min</td>
                        <td>{{ entry.comment }}</td>
                        <td class=\"text-nowrap\">
                            <a href=\"{{ path('app_calendar_entry_show',{id:entry.id}) }}\"
                               class=\"btn btn-sm btn-outline-secondary me-1\">
                                <i class=\"bi bi-eye\"></i> Bekijken
                            </a>
                            <a href=\"{{ path('app_calendar_entry_edit',{id:entry.id}) }}\"
                               class=\"btn btn-sm btn-outline-primary me-1\">
                                <i class=\"bi bi-pencil\"></i> Bewerken
                            </a>
                            <form method=\"post\"
                                  action=\"{{ path('app_calendar_entry_delete',{id:entry.id}) }}\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Weet je het zeker?');\">
                                <input type=\"hidden\"
                                       name=\"_token\"
                                       value=\"{{ csrf_token('delete' ~ entry.id) }}\">
                                <button class=\"btn btn-sm btn-outline-danger\">
                                    <i class=\"bi bi-trash\"></i> Verwijderen
                                </button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"text-center\">Geen registraties gevonden.</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "calendar_entry/index.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\calendar_entry\\index.html.twig");
    }
}
