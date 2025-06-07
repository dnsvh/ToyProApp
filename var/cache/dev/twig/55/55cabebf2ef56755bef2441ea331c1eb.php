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

/* calendar/index.html.twig */
class __TwigTemplate_4382cbf2bb26a5de26e7345d06198de1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/index.html.twig"));

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
        yield "    Calendar – ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 5, $this->source); })()), "getFirstName", [], "method", false, false, false, 5), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 5, $this->source); })()), "getLastName", [], "method", false, false, false, 5), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    <h1>Calendar – ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 9, $this->source); })()), "getFirstName", [], "method", false, false, false, 9), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 9, $this->source); })()), "getLastName", [], "method", false, false, false, 9), "html", null, true);
        yield "</h1>

    ";
        // line 11
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 11, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "        <form method=\"get\"
              action=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_month_view", ["year" => (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 13, $this->source); })()), "month" => (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 13, $this->source); })())]), "html", null, true);
            yield "\">
            View user:
            <select name=\"userId\" onchange=\"this.form.submit()\">
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 17
                yield "                    <option
                            value=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 18), "html", null, true);
                yield "\"
                            ";
                // line 19
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 19) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19))) ? ("selected") : (""));
                yield "
                    >
                        ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getFirstName", [], "method", false, false, false, 21), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getLastName", [], "method", false, false, false, 21), "html", null, true);
                yield "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "            </select>
        </form>
    ";
        }
        // line 27
        yield "
    <h2>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%02d", (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 28, $this->source); })())), "html", null, true);
        yield "</h2>

    ";
        // line 30
        $context["firstDayIndex"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["firstOfMonth"]) || array_key_exists("firstOfMonth", $context) ? $context["firstOfMonth"] : (function () { throw new RuntimeError('Variable "firstOfMonth" does not exist.', 30, $this->source); })()), "format", ["w"], "method", false, false, false, 30);
        // line 31
        yield "    ";
        $context["daysInMonth"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastOfMonth"]) || array_key_exists("lastOfMonth", $context) ? $context["lastOfMonth"] : (function () { throw new RuntimeError('Variable "lastOfMonth" does not exist.', 31, $this->source); })()), "format", ["t"], "method", false, false, false, 31);
        // line 32
        yield "
    ";
        // line 34
        yield "    ";
        $context["commonTags"] = false;
        // line 35
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 35, $this->source); })()), "getTags", [], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["myTag"]) {
            // line 36
            yield "        ";
            if (CoreExtension::inFilter($context["myTag"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 36, $this->source); })()), "getTags", [], "method", false, false, false, 36))) {
                // line 37
                yield "            ";
                $context["commonTags"] = true;
                // line 38
                yield "        ";
            }
            // line 39
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['myTag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "
    <table class=\"table table-bordered text-center\">
        <thead>
        <tr>
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["dayName"]) {
            // line 45
            yield "                <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["dayName"], "html", null, true);
            yield "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dayName'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "        </tr>
        </thead>
        <tbody>
        ";
        // line 50
        $context["dayCounter"] = 1;
        // line 51
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["week"]) {
            // line 52
            yield "            <tr>
                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["dow"]) {
                // line 54
                yield "                    ";
                // line 55
                yield "                    ";
                if ((($context["week"] == 0) && ($context["dow"] < (isset($context["firstDayIndex"]) || array_key_exists("firstDayIndex", $context) ? $context["firstDayIndex"] : (function () { throw new RuntimeError('Variable "firstDayIndex" does not exist.', 55, $this->source); })())))) {
                    // line 56
                    yield "                        <td></td>

                    ";
                } elseif ((                // line 58
(isset($context["dayCounter"]) || array_key_exists("dayCounter", $context) ? $context["dayCounter"] : (function () { throw new RuntimeError('Variable "dayCounter" does not exist.', 58, $this->source); })()) <= (isset($context["daysInMonth"]) || array_key_exists("daysInMonth", $context) ? $context["daysInMonth"] : (function () { throw new RuntimeError('Variable "daysInMonth" does not exist.', 58, $this->source); })()))) {
                    // line 59
                    yield "                        ";
                    $context["dayStr"] = Twig\Extension\CoreExtension::sprintf("%02d", (isset($context["dayCounter"]) || array_key_exists("dayCounter", $context) ? $context["dayCounter"] : (function () { throw new RuntimeError('Variable "dayCounter" does not exist.', 59, $this->source); })()));
                    // line 60
                    yield "                        ";
                    $context["monthStr"] = Twig\Extension\CoreExtension::sprintf("%02d", (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 60, $this->source); })()));
                    // line 61
                    yield "                        ";
                    $context["dateKey"] = (((((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 61, $this->source); })()) . "-") . (isset($context["monthStr"]) || array_key_exists("monthStr", $context) ? $context["monthStr"] : (function () { throw new RuntimeError('Variable "monthStr" does not exist.', 61, $this->source); })())) . "-") . (isset($context["dayStr"]) || array_key_exists("dayStr", $context) ? $context["dayStr"] : (function () { throw new RuntimeError('Variable "dayStr" does not exist.', 61, $this->source); })()));
                    // line 62
                    yield "                        ";
                    $context["cellEntry"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["entryMap"] ?? null), (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 62, $this->source); })()), [], "array", true, true, false, 62)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entryMap"]) || array_key_exists("entryMap", $context) ? $context["entryMap"] : (function () { throw new RuntimeError('Variable "entryMap" does not exist.', 62, $this->source); })()), (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 62, $this->source); })()), [], "array", false, false, false, 62)) : (null));
                    // line 63
                    yield "
                        <td style=\"vertical-align: top;\">
                            <div><strong>";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dayCounter"]) || array_key_exists("dayCounter", $context) ? $context["dayCounter"] : (function () { throw new RuntimeError('Variable "dayCounter" does not exist.', 65, $this->source); })()), "html", null, true);
                    yield "</strong></div>

                            ";
                    // line 67
                    if ((($tmp = (isset($context["cellEntry"]) || array_key_exists("cellEntry", $context) ? $context["cellEntry"] : (function () { throw new RuntimeError('Variable "cellEntry" does not exist.', 67, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 68
                        yield "                                <div>⏱ Hours: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cellEntry"]) || array_key_exists("cellEntry", $context) ? $context["cellEntry"] : (function () { throw new RuntimeError('Variable "cellEntry" does not exist.', 68, $this->source); })()), "getHoursWorked", [], "method", false, false, false, 68), "html", null, true);
                        yield "</div>
                                <div>
                                    <a href=\"";
                        // line 70
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_entry_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cellEntry"]) || array_key_exists("cellEntry", $context) ? $context["cellEntry"] : (function () { throw new RuntimeError('Variable "cellEntry" does not exist.', 70, $this->source); })()), "getId", [], "method", false, false, false, 70)]), "html", null, true);
                        yield "\">
                                        Details
                                    </a>
                                </div>

                            ";
                    } else {
                        // line 76
                        yield "                                ";
                        // line 77
                        yield "                                ";
                        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") &&                         // line 79
(isset($context["commonTags"]) || array_key_exists("commonTags", $context) ? $context["commonTags"] : (function () { throw new RuntimeError('Variable "commonTags" does not exist.', 79, $this->source); })())))) {
                            // line 81
                            yield "                                    <div style=\"margin-top: .5em;\">
                                        <a href=\"";
                            // line 82
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_day_view", ["date" =>                             // line 83
(isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 83, $this->source); })()), "userId" => CoreExtension::getAttribute($this->env, $this->source,                             // line 84
(isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
                            // line 85
                            yield "\">
                                            + Add
                                        </a>
                                    </div>
                                ";
                        }
                        // line 90
                        yield "                            ";
                    }
                    // line 91
                    yield "                        </td>

                        ";
                    // line 93
                    $context["dayCounter"] = ((isset($context["dayCounter"]) || array_key_exists("dayCounter", $context) ? $context["dayCounter"] : (function () { throw new RuntimeError('Variable "dayCounter" does not exist.', 93, $this->source); })()) + 1);
                    // line 94
                    yield "
                    ";
                } else {
                    // line 96
                    yield "                        <td></td>
                    ";
                }
                // line 98
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dow'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['week'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "        </tbody>
    </table>
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
        return "calendar/index.html.twig";
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
        return array (  335 => 101,  328 => 99,  322 => 98,  318 => 96,  314 => 94,  312 => 93,  308 => 91,  305 => 90,  298 => 85,  296 => 84,  295 => 83,  294 => 82,  291 => 81,  289 => 79,  287 => 77,  285 => 76,  276 => 70,  270 => 68,  268 => 67,  263 => 65,  259 => 63,  256 => 62,  253 => 61,  250 => 60,  247 => 59,  245 => 58,  241 => 56,  238 => 55,  236 => 54,  232 => 53,  229 => 52,  224 => 51,  222 => 50,  217 => 47,  208 => 45,  204 => 44,  198 => 40,  192 => 39,  189 => 38,  186 => 37,  183 => 36,  178 => 35,  175 => 34,  172 => 32,  169 => 31,  167 => 30,  160 => 28,  157 => 27,  152 => 24,  141 => 21,  136 => 19,  132 => 18,  129 => 17,  125 => 16,  119 => 13,  116 => 12,  114 => 11,  106 => 9,  93 => 8,  77 => 5,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/calendar/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}
    Calendar – {{ targetUser.getFirstName() }} {{ targetUser.getLastName() }}
{% endblock %}

{% block body %}
    <h1>Calendar – {{ targetUser.getFirstName() }} {{ targetUser.getLastName() }}</h1>

    {% if allUsers is not empty %}
        <form method=\"get\"
              action=\"{{ path('calendar_month_view', { year: year, month: month }) }}\">
            View user:
            <select name=\"userId\" onchange=\"this.form.submit()\">
                {% for user in allUsers %}
                    <option
                            value=\"{{ user.id }}\"
                            {{ user.id == targetUser.id ? 'selected' : '' }}
                    >
                        {{ user.getFirstName() }} {{ user.getLastName() }}
                    </option>
                {% endfor %}
            </select>
        </form>
    {% endif %}

    <h2>{{ year }}-{{ '%02d'|format(month) }}</h2>

    {% set firstDayIndex = firstOfMonth.format('w') %}
    {% set daysInMonth   = lastOfMonth.format('t') %}

    {# Compute “commonTags” – true if currentUser and targetUser share any CalendarTag #}
    {% set commonTags = false %}
    {% for myTag in currentUser.getTags() %}
        {% if myTag in targetUser.getTags() %}
            {% set commonTags = true %}
        {% endif %}
    {% endfor %}

    <table class=\"table table-bordered text-center\">
        <thead>
        <tr>
            {% for dayName in ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'] %}
                <th>{{ dayName }}</th>
            {% endfor %}
        </tr>
        </thead>
        <tbody>
        {% set dayCounter = 1 %}
        {% for week in 0..5 %}
            <tr>
                {% for dow in 0..6 %}
                    {# Empty cells until we reach the first-of-month #}
                    {% if week == 0 and dow < firstDayIndex %}
                        <td></td>

                    {% elseif dayCounter <= daysInMonth %}
                        {% set dayStr   = '%02d'|format(dayCounter) %}
                        {% set monthStr = '%02d'|format(month) %}
                        {% set dateKey  = year ~ '-' ~ monthStr ~ '-' ~ dayStr %}
                        {% set cellEntry = entryMap[dateKey] is defined ? entryMap[dateKey] : null %}

                        <td style=\"vertical-align: top;\">
                            <div><strong>{{ dayCounter }}</strong></div>

                            {% if cellEntry %}
                                <div>⏱ Hours: {{ cellEntry.getHoursWorked() }}</div>
                                <div>
                                    <a href=\"{{ path('app_calendar_entry_show', { id: cellEntry.getId() }) }}\">
                                        Details
                                    </a>
                                </div>

                            {% else %}
                                {# Only show “+ Add” if: owner OR Admin OR (Manager+commonTags) #}
                                {% if targetUser.id == currentUser.id
                                    or is_granted('ROLE_ADMIN')
                                    or ( is_granted('ROLE_MANAGER') and commonTags )
                                %}
                                    <div style=\"margin-top: .5em;\">
                                        <a href=\"{{ path('calendar_day_view', {
                                            date: dateKey,
                                            userId: targetUser.id
                                        }) }}\">
                                            + Add
                                        </a>
                                    </div>
                                {% endif %}
                            {% endif %}
                        </td>

                        {% set dayCounter = dayCounter + 1 %}

                    {% else %}
                        <td></td>
                    {% endif %}
                {% endfor %}
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "calendar/index.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\calendar\\index.html.twig");
    }
}
