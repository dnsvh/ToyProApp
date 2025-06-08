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

/* calendar_entry/show.html.twig */
class __TwigTemplate_59fe3c27cbda8042ffd15c861e532231 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar_entry/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar_entry/show.html.twig"));

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

        yield "Registratie #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        
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
        <h1 class=\"mb-4\">Registratie #";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>

        <table class=\"table table-bordered\">
            <tr><th>Datum</th><td>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 9, $this->source); })()), "date", [], "any", false, false, false, 9), "Y-m-d"), "html", null, true);
        yield "</td></tr>
            <tr><th>In</th><td>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 10, $this->source); })()), "clockIn", [], "any", false, false, false, 10), "H:i"), "html", null, true);
        yield "</td></tr>
            <tr><th>Uit</th><td>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 11, $this->source); })()), "clockOut", [], "any", false, false, false, 11), "H:i"), "html", null, true);
        yield "</td></tr>
            <tr><th>Minuten</th>
                <td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 13, $this->source); })()), "hoursWorked", [], "any", false, false, false, 13) * 60)), "html", null, true);
        yield " min</td></tr>
            <tr><th>Opmerking</th><td>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 14, $this->source); })()), "comment", [], "any", false, false, false, 14), "html", null, true);
        yield "</td></tr>
            <tr><th>Tags</th>
                <td>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 17, $this->source); })()), "tags", [], "any", false, false, false, 17));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 18
            yield "                        <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 18), "html", null, true);
            yield "</span>
                    ";
            $context['_iterated'] = true;
        }
        // line 19
        if (!$context['_iterated']) {
            // line 20
            yield "                        –
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "                </td>
            </tr>
        </table>

        <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_index");
        yield "\" class=\"btn btn-link\">← Terug naar overzicht</a>
        <a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\"
           class=\"btn btn-primary\">Bewerken</a>
        <form method=\"post\"
              action=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\"
              class=\"d-inline\"
              onsubmit=\"return confirm('Weet je het zeker?');\">
            <input type=\"hidden\"
                   name=\"_token\"
                   value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35))), "html", null, true);
        yield "\">
            <button class=\"btn btn-danger\">Verwijderen</button>
        </form>
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
        return "calendar_entry/show.html.twig";
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
        return array (  178 => 35,  170 => 30,  164 => 27,  160 => 26,  154 => 22,  147 => 20,  145 => 19,  138 => 18,  133 => 17,  127 => 14,  123 => 13,  118 => 11,  114 => 10,  110 => 9,  104 => 6,  101 => 5,  88 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Registratie #{{ calendar_entry.id }}{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Registratie #{{ calendar_entry.id }}</h1>

        <table class=\"table table-bordered\">
            <tr><th>Datum</th><td>{{ calendar_entry.date|date('Y-m-d') }}</td></tr>
            <tr><th>In</th><td>{{ calendar_entry.clockIn|date('H:i') }}</td></tr>
            <tr><th>Uit</th><td>{{ calendar_entry.clockOut|date('H:i') }}</td></tr>
            <tr><th>Minuten</th>
                <td>{{ (calendar_entry.hoursWorked * 60)|round }} min</td></tr>
            <tr><th>Opmerking</th><td>{{ calendar_entry.comment }}</td></tr>
            <tr><th>Tags</th>
                <td>
                    {% for tag in calendar_entry.tags %}
                        <span class=\"badge bg-secondary\">{{ tag.name }}</span>
                    {% else %}
                        –
                    {% endfor %}
                </td>
            </tr>
        </table>

        <a href=\"{{ path('app_calendar_entry_index') }}\" class=\"btn btn-link\">← Terug naar overzicht</a>
        <a href=\"{{ path('app_calendar_entry_edit',{id:calendar_entry.id}) }}\"
           class=\"btn btn-primary\">Bewerken</a>
        <form method=\"post\"
              action=\"{{ path('app_calendar_entry_delete',{id:calendar_entry.id}) }}\"
              class=\"d-inline\"
              onsubmit=\"return confirm('Weet je het zeker?');\">
            <input type=\"hidden\"
                   name=\"_token\"
                   value=\"{{ csrf_token('delete' ~ calendar_entry.id) }}\">
            <button class=\"btn btn-danger\">Verwijderen</button>
        </form>
    </div>
{% endblock %}
", "calendar_entry/show.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\calendar_entry\\show.html.twig");
    }
}
