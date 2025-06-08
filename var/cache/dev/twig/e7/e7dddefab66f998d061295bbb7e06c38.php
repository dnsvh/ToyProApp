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

/* dashboard/index.html.twig */
class __TwigTemplate_d434b9cf4953725e585c85aca85ffd9c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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

        yield "Dashboard";
        
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
        yield "    <div class=\"container py-4\">

        ";
        // line 10
        yield "        <div class=\"mb-4\">
            ";
        // line 11
        if ((($tmp = (isset($context["activeEntry"]) || array_key_exists("activeEntry", $context) ? $context["activeEntry"] : (function () { throw new RuntimeError('Variable "activeEntry" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "                <form method=\"post\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_clock_out");
            yield "\">
                    <button type=\"submit\" class=\"btn btn-warning btn-lg w-100\">
                        Uitklokken (sinds ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeEntry"]) || array_key_exists("activeEntry", $context) ? $context["activeEntry"] : (function () { throw new RuntimeError('Variable "activeEntry" does not exist.', 14, $this->source); })()), "clockIn", [], "any", false, false, false, 14), "H:i"), "html", null, true);
            yield ")
                    </button>
                </form>
            ";
        } else {
            // line 18
            yield "                <form method=\"post\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_clock_in");
            yield "\">
                    <button type=\"submit\" class=\"btn btn-success btn-lg w-100\">Inklokken</button>
                </form>
            ";
        }
        // line 22
        yield "        </div>

        ";
        // line 25
        yield "        ";
        if ((($tmp = (isset($context["latest"]) || array_key_exists("latest", $context) ? $context["latest"] : (function () { throw new RuntimeError('Variable "latest" does not exist.', 25, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "            <div class=\"row mb-5 align-items-stretch\">
                ";
            // line 28
            yield "                <div class=\"col-lg-8 d-flex mb-3 mb-lg-0\">
                    <div class=\"card h-100 w-100 shadow-sm d-flex flex-column\">
                        <div class=\"card-body overflow-auto flex-fill\">
                            <h3 class=\"card-title\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latest"]) || array_key_exists("latest", $context) ? $context["latest"] : (function () { throw new RuntimeError('Variable "latest" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
            yield "</h3>
                            <p class=\"card-text\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latest"]) || array_key_exists("latest", $context) ? $context["latest"] : (function () { throw new RuntimeError('Variable "latest" does not exist.', 32, $this->source); })()), "content", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                            ";
            // line 33
            if ((($tmp = (isset($context["latestComment"]) || array_key_exists("latestComment", $context) ? $context["latestComment"] : (function () { throw new RuntimeError('Variable "latestComment" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "                                <hr>
                                <p class=\"mb-1\">
                                    <small>
                                        Laatste opmerking door
                                        <strong>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestComment"]) || array_key_exists("latestComment", $context) ? $context["latestComment"] : (function () { throw new RuntimeError('Variable "latestComment" does not exist.', 38, $this->source); })()), "sender", [], "any", false, false, false, 38), "firstName", [], "any", false, false, false, 38), "html", null, true);
                yield "
                                            ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestComment"]) || array_key_exists("latestComment", $context) ? $context["latestComment"] : (function () { throw new RuntimeError('Variable "latestComment" does not exist.', 39, $this->source); })()), "sender", [], "any", false, false, false, 39), "lastName", [], "any", false, false, false, 39), "html", null, true);
                yield "</strong>
                                        op ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestComment"]) || array_key_exists("latestComment", $context) ? $context["latestComment"] : (function () { throw new RuntimeError('Variable "latestComment" does not exist.', 40, $this->source); })()), "createdAt", [], "any", false, false, false, 40), "d-m H:i"), "html", null, true);
                yield "
                                    </small>
                                </p>
                                <p>";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestComment"]) || array_key_exists("latestComment", $context) ? $context["latestComment"] : (function () { throw new RuntimeError('Variable "latestComment" does not exist.', 43, $this->source); })()), "content", [], "any", false, false, false, 43), "html", null, true);
                yield "</p>
                            ";
            }
            // line 45
            yield "                        </div>
                    </div>
                </div>

                ";
            // line 50
            yield "                <div class=\"col-lg-4 d-flex\">
                    <div class=\"list-group w-100 shadow-sm overflow-auto\">
                        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["nextFive"]) || array_key_exists("nextFive", $context) ? $context["nextFive"] : (function () { throw new RuntimeError('Variable "nextFive" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ann"]) {
                // line 53
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_announcement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ann"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                yield "\"
                               class=\"list-group-item list-group-item-action\">
                                <strong>";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ann"], "title", [], "any", false, false, false, 55), "html", null, true);
                yield "</strong><br>
                                <small>";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ann"], "createdAt", [], "any", false, false, false, 56), "d-m H:i"), "html", null, true);
                yield "</small>
                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ann'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                    </div>
                </div>
            </div>
        ";
        }
        // line 63
        yield "
        ";
        // line 65
        yield "        <h4 class=\"mb-3\">
            Deze week (";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["weekStart"]) || array_key_exists("weekStart", $context) ? $context["weekStart"] : (function () { throw new RuntimeError('Variable "weekStart" does not exist.', 66, $this->source); })()), "d-m"), "html", null, true);
        yield " – ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["weekEnd"]) || array_key_exists("weekEnd", $context) ? $context["weekEnd"] : (function () { throw new RuntimeError('Variable "weekEnd" does not exist.', 66, $this->source); })()), "d-m"), "html", null, true);
        yield ")
        </h4>
        <div class=\"d-flex mb-5\">
            ";
        // line 69
        $context["dagenNamen"] = [1 => "Ma", 2 => "Di", 3 => "Wo", 4 => "Do", 5 => "Vr", 6 => "Za", 7 => "Zo"];
        // line 72
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["weekDays"]) || array_key_exists("weekDays", $context) ? $context["weekDays"] : (function () { throw new RuntimeError('Variable "weekDays" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 73
            yield "                <div class=\"card flex-fill text-center mx-1\">
                    <div class=\"card-body py-3\">
                        <strong>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dagenNamen"]) || array_key_exists("dagenNamen", $context) ? $context["dagenNamen"] : (function () { throw new RuntimeError('Variable "dagenNamen" does not exist.', 75, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["day"], "date", [], "any", false, false, false, 75), "format", ["N"], "method", false, false, false, 75), [], "array", false, false, false, 75), "html", null, true);
            yield "</strong><br>
                        ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "date", [], "any", false, false, false, 76), "d"), "html", null, true);
            yield "<br>
                        <small class=\"text-success\">⏱ ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "minutesWorked", [], "any", false, false, false, 77), "html", null, true);
            yield " min</small>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "        </div>

        ";
        // line 84
        yield "        <div class=\"row gy-3\">
            <div class=\"col-md-6\">
                <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_index");
        yield "\"
                   class=\"card h-100 text-center text-decoration-none text-dark shadow-sm\">
                    <div class=\"card-body d-flex align-items-center justify-content-center\">
                        <h5 class=\"mb-0\">Documenten</h5>
                    </div>
                </a>
            </div>
            ";
        // line 94
        yield "            <div class=\"col-md-6\">
                <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                   class=\"card h-100 text-center text-decoration-none text-dark shadow-sm\">
                    <div class=\"card-body d-flex align-items-center justify-content-center\">
                        <h5 class=\"mb-0\">Profiel</h5>
                    </div>
                </a>
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
        return "dashboard/index.html.twig";
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
        return array (  283 => 95,  280 => 94,  270 => 86,  266 => 84,  262 => 81,  252 => 77,  248 => 76,  244 => 75,  240 => 73,  235 => 72,  233 => 69,  225 => 66,  222 => 65,  219 => 63,  213 => 59,  204 => 56,  200 => 55,  194 => 53,  190 => 52,  186 => 50,  180 => 45,  175 => 43,  169 => 40,  165 => 39,  161 => 38,  155 => 34,  153 => 33,  149 => 32,  145 => 31,  140 => 28,  137 => 26,  134 => 25,  130 => 22,  122 => 18,  115 => 14,  109 => 12,  107 => 11,  104 => 10,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}
    <div class=\"container py-4\">

        {# Inklok-/uitklokknop #}
        <div class=\"mb-4\">
            {% if activeEntry %}
                <form method=\"post\" action=\"{{ path('calendar_clock_out') }}\">
                    <button type=\"submit\" class=\"btn btn-warning btn-lg w-100\">
                        Uitklokken (sinds {{ activeEntry.clockIn|date('H:i') }})
                    </button>
                </form>
            {% else %}
                <form method=\"post\" action=\"{{ path('calendar_clock_in') }}\">
                    <button type=\"submit\" class=\"btn btn-success btn-lg w-100\">Inklokken</button>
                </form>
            {% endif %}
        </div>

        {# Laatste aankondiging + volgende vijf #}
        {% if latest %}
            <div class=\"row mb-5 align-items-stretch\">
                {# Hero kaart #}
                <div class=\"col-lg-8 d-flex mb-3 mb-lg-0\">
                    <div class=\"card h-100 w-100 shadow-sm d-flex flex-column\">
                        <div class=\"card-body overflow-auto flex-fill\">
                            <h3 class=\"card-title\">{{ latest.title }}</h3>
                            <p class=\"card-text\">{{ latest.content }}</p>
                            {% if latestComment %}
                                <hr>
                                <p class=\"mb-1\">
                                    <small>
                                        Laatste opmerking door
                                        <strong>{{ latestComment.sender.firstName }}
                                            {{ latestComment.sender.lastName }}</strong>
                                        op {{ latestComment.createdAt|date('d-m H:i') }}
                                    </small>
                                </p>
                                <p>{{ latestComment.content }}</p>
                            {% endif %}
                        </div>
                    </div>
                </div>

                {# Vijf recente #}
                <div class=\"col-lg-4 d-flex\">
                    <div class=\"list-group w-100 shadow-sm overflow-auto\">
                        {% for ann in nextFive %}
                            <a href=\"{{ path('app_announcement_show', {id: ann.id}) }}\"
                               class=\"list-group-item list-group-item-action\">
                                <strong>{{ ann.title }}</strong><br>
                                <small>{{ ann.createdAt|date('d-m H:i') }}</small>
                            </a>
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% endif %}

        {# Kalender van deze week #}
        <h4 class=\"mb-3\">
            Deze week ({{ weekStart|date('d-m') }} – {{ weekEnd|date('d-m') }})
        </h4>
        <div class=\"d-flex mb-5\">
            {% set dagenNamen = {
                1:'Ma',2:'Di',3:'Wo',4:'Do',5:'Vr',6:'Za',7:'Zo'
            } %}
            {% for day in weekDays %}
                <div class=\"card flex-fill text-center mx-1\">
                    <div class=\"card-body py-3\">
                        <strong>{{ dagenNamen[day.date.format('N')] }}</strong><br>
                        {{ day.date|date('d') }}<br>
                        <small class=\"text-success\">⏱ {{ day.minutesWorked }} min</small>
                    </div>
                </div>
            {% endfor %}
        </div>

        {# Tegels onderaan #}
        <div class=\"row gy-3\">
            <div class=\"col-md-6\">
                <a href=\"{{ path('app_document_index') }}\"
                   class=\"card h-100 text-center text-decoration-none text-dark shadow-sm\">
                    <div class=\"card-body d-flex align-items-center justify-content-center\">
                        <h5 class=\"mb-0\">Documenten</h5>
                    </div>
                </a>
            </div>
            {# in dashboard/index.html.twig, under the row of tiles #}
            <div class=\"col-md-6\">
                <a href=\"{{ path('app_profile') }}\"
                   class=\"card h-100 text-center text-decoration-none text-dark shadow-sm\">
                    <div class=\"card-body d-flex align-items-center justify-content-center\">
                        <h5 class=\"mb-0\">Profiel</h5>
                    </div>
                </a>
            </div>

        </div>

    </div>
{% endblock %}
", "dashboard/index.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\dashboard\\index.html.twig");
    }
}
