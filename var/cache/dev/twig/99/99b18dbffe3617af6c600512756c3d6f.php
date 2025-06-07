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
class __TwigTemplate_ec75cc9d71a93155329d21adc7e68ab3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar_entry/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar_entry/show.html.twig"));

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

        yield "Calendar entry #";
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
        yield "    <h1>Calendar entry #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

    <table class=\"table\">
        <tr><th>Date</th><td>";
        // line 10
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 10, $this->source); })()), "date", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 10, $this->source); })()), "date", [], "any", false, false, false, 10), "Y-m-d"), "html", null, true)) : (""));
        yield "</td></tr>
        <tr><th>Clock In</th><td>";
        // line 11
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 11, $this->source); })()), "clockIn", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 11, $this->source); })()), "clockIn", [], "any", false, false, false, 11), "H:i"), "html", null, true)) : (""));
        yield "</td></tr>
        <tr><th>Clock Out</th><td>";
        // line 12
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 12, $this->source); })()), "clockOut", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 12, $this->source); })()), "clockOut", [], "any", false, false, false, 12), "H:i"), "html", null, true)) : (""));
        yield "</td></tr>
        <tr><th>Hours Worked</th><td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 13, $this->source); })()), "hoursWorked", [], "any", false, false, false, 13), "html", null, true);
        yield "</td></tr>
        <tr><th>Comment</th><td>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 14, $this->source); })()), "comment", [], "any", false, false, false, 14), "html", null, true);
        yield "</td></tr>
        <tr><th>User</th><td>";
        // line 15
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "email", [], "any", false, false, false, 15), "html", null, true)) : (""));
        yield "</td></tr>
        <tr><th>Tags</th>
            <td>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 18, $this->source); })()), "tags", [], "any", false, false, false, 18));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 19
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 19), "html", null, true);
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
            }
            // line 20
            yield "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "            </td>
        </tr>
    </table>

    <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_index");
        yield "\">back to list</a>
    <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 29
        yield "    <form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Are you sure?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["calendar_entry"]) || array_key_exists("calendar_entry", $context) ? $context["calendar_entry"] : (function () { throw new RuntimeError('Variable "calendar_entry" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30))), "html", null, true);
        yield "\">
        <button class=\"btn btn-danger\">delete</button>
    </form>
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
        return array (  191 => 30,  186 => 29,  181 => 26,  177 => 25,  171 => 21,  157 => 20,  151 => 19,  134 => 18,  128 => 15,  124 => 14,  120 => 13,  116 => 12,  112 => 11,  108 => 10,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/calendar_entry/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Calendar entry #{{ calendar_entry.id }}{% endblock %}

{% block body %}
    <h1>Calendar entry #{{ calendar_entry.id }}</h1>

    <table class=\"table\">
        <tr><th>Date</th><td>{{ calendar_entry.date ? calendar_entry.date|date('Y-m-d') : '' }}</td></tr>
        <tr><th>Clock In</th><td>{{ calendar_entry.clockIn ? calendar_entry.clockIn|date('H:i') : '' }}</td></tr>
        <tr><th>Clock Out</th><td>{{ calendar_entry.clockOut ? calendar_entry.clockOut|date('H:i') : '' }}</td></tr>
        <tr><th>Hours Worked</th><td>{{ calendar_entry.hoursWorked }}</td></tr>
        <tr><th>Comment</th><td>{{ calendar_entry.comment }}</td></tr>
        <tr><th>User</th><td>{{ calendar_entry.user ? calendar_entry.user.email : '' }}</td></tr>
        <tr><th>Tags</th>
            <td>
                {% for tag in calendar_entry.tags %}
                    {{ tag.name }}{% if not loop.last %}, {% endif %}
                {% endfor %}
            </td>
        </tr>
    </table>

    <a href=\"{{ path('app_calendar_entry_index') }}\">back to list</a>
    <a href=\"{{ path('app_calendar_entry_edit', { 'id': calendar_entry.id }) }}\">edit</a>

    {# Delete form: #}
    <form method=\"post\" action=\"{{ path('app_calendar_entry_delete', { 'id': calendar_entry.id }) }}\" onsubmit=\"return confirm('Are you sure?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ calendar_entry.id) }}\">
        <button class=\"btn btn-danger\">delete</button>
    </form>
{% endblock %}
", "calendar_entry/show.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\calendar_entry\\show.html.twig");
    }
}
