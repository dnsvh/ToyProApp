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
class __TwigTemplate_f8ef440541eb9d1114f3b15663b612fa extends Template
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

        yield "Kalender – ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 4, $this->source); })()), "firstName", [], "any", false, false, false, 4), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 4, $this->source); })()), "lastName", [], "any", false, false, false, 4), "html", null, true);
        
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
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h1 class=\"mb-0\">Kalender – ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 9, $this->source); })()), "firstName", [], "any", false, false, false, 9), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 9, $this->source); })()), "lastName", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
            <div>
                ";
        // line 11
        $context["prev"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["firstOfMonth"]) || array_key_exists("firstOfMonth", $context) ? $context["firstOfMonth"] : (function () { throw new RuntimeError('Variable "firstOfMonth" does not exist.', 11, $this->source); })()), "modify", ["-1 month"], "method", false, false, false, 11);
        // line 12
        yield "                ";
        $context["next"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["firstOfMonth"]) || array_key_exists("firstOfMonth", $context) ? $context["firstOfMonth"] : (function () { throw new RuntimeError('Variable "firstOfMonth" does not exist.', 12, $this->source); })()), "modify", ["+1 month"], "method", false, false, false, 12);
        // line 13
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_month_view", ["year" => CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 14, $this->source); })()), "format", ["Y"], "method", false, false, false, 14), "month" => CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 15, $this->source); })()), "format", ["n"], "method", false, false, false, 15), "userId" => CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        // line 17
        yield "\"
                   class=\"btn btn-outline-secondary me-1\">
                    ← Vorige
                </a>
                <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_month_view", ["year" => CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 22, $this->source); })()), "format", ["Y"], "method", false, false, false, 22), "month" => CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 23, $this->source); })()), "format", ["n"], "method", false, false, false, 23), "userId" => CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
        // line 25
        yield "\"
                   class=\"btn btn-outline-secondary\">
                    Volgende →
                </a>
            </div>
        </div>

        ";
        // line 32
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 32, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "            <form method=\"get\" class=\"row mb-4 gx-2 gy-2 align-items-center\">
                <label class=\"col-auto col-form-label\">Gebruiker:</label>
                <div class=\"col-auto\">
                    <select name=\"userId\" class=\"form-select\" onchange=\"this.form.submit()\">
                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 38
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 38), "html", null, true);
                yield "\" ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 38) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38))) ? ("selected") : (""));
                yield ">
                                ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "firstName", [], "any", false, false, false, 39), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "lastName", [], "any", false, false, false, 39), "html", null, true);
                yield "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "                    </select>
                </div>
            </form>
        ";
        }
        // line 46
        yield "
        <h4>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 47, $this->source); })()), "html", null, true);
        yield " – ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%02d", (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 47, $this->source); })())), "html", null, true);
        yield "</h4>

        <table class=\"table table-bordered text-center\">
            <thead class=\"table-light\">
            <tr>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Zo", "Ma", "Di", "Wo", "Do", "Vr", "Za"]);
        foreach ($context['_seq'] as $context["_key"] => $context["dag"]) {
            // line 53
            yield "                    <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["dag"], "html", null, true);
            yield "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "            </tr>
            </thead>
            <tbody>
            ";
        // line 58
        $context["dagNum"] = 1;
        // line 59
        yield "            ";
        $context["startDow"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["firstOfMonth"]) || array_key_exists("firstOfMonth", $context) ? $context["firstOfMonth"] : (function () { throw new RuntimeError('Variable "firstOfMonth" does not exist.', 59, $this->source); })()), "format", ["w"], "method", false, false, false, 59) + 0);
        // line 60
        yield "            ";
        $context["daysInMonth"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastOfMonth"]) || array_key_exists("lastOfMonth", $context) ? $context["lastOfMonth"] : (function () { throw new RuntimeError('Variable "lastOfMonth" does not exist.', 60, $this->source); })()), "format", ["t"], "method", false, false, false, 60) + 0);
        // line 61
        yield "
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["week"]) {
            // line 63
            yield "                <tr>
                    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["dow"]) {
                // line 65
                yield "                        ";
                if ((($context["week"] == 0) && ($context["dow"] < (isset($context["startDow"]) || array_key_exists("startDow", $context) ? $context["startDow"] : (function () { throw new RuntimeError('Variable "startDow" does not exist.', 65, $this->source); })())))) {
                    // line 66
                    yield "                            <td></td>
                        ";
                } elseif ((                // line 67
(isset($context["dagNum"]) || array_key_exists("dagNum", $context) ? $context["dagNum"] : (function () { throw new RuntimeError('Variable "dagNum" does not exist.', 67, $this->source); })()) <= (isset($context["daysInMonth"]) || array_key_exists("daysInMonth", $context) ? $context["daysInMonth"] : (function () { throw new RuntimeError('Variable "daysInMonth" does not exist.', 67, $this->source); })()))) {
                    // line 68
                    yield "                            ";
                    $context["datum"] = Twig\Extension\CoreExtension::sprintf("%04d-%02d-%02d", (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 68, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 68, $this->source); })()), (isset($context["dagNum"]) || array_key_exists("dagNum", $context) ? $context["dagNum"] : (function () { throw new RuntimeError('Variable "dagNum" does not exist.', 68, $this->source); })()));
                    // line 69
                    yield "                            ";
                    $context["entry"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entryMap"] ?? null), (isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new RuntimeError('Variable "datum" does not exist.', 69, $this->source); })()), [], "array", true, true, false, 69) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["entryMap"]) || array_key_exists("entryMap", $context) ? $context["entryMap"] : (function () { throw new RuntimeError('Variable "entryMap" does not exist.', 69, $this->source); })()), (isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new RuntimeError('Variable "datum" does not exist.', 69, $this->source); })()), [], "array", false, false, false, 69)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entryMap"]) || array_key_exists("entryMap", $context) ? $context["entryMap"] : (function () { throw new RuntimeError('Variable "entryMap" does not exist.', 69, $this->source); })()), (isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new RuntimeError('Variable "datum" does not exist.', 69, $this->source); })()), [], "array", false, false, false, 69)) : (null));
                    // line 70
                    yield "                            <td style=\"vertical-align: top;\">
                                <div><strong>";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dagNum"]) || array_key_exists("dagNum", $context) ? $context["dagNum"] : (function () { throw new RuntimeError('Variable "dagNum" does not exist.', 71, $this->source); })()), "html", null, true);
                    yield "</strong></div>

                                ";
                    // line 73
                    if ((($tmp = (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 73, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 74
                        yield "                                    <div class=\"mt-1\">
                                        <i class=\"bi bi-clock\"></i>
                                        ";
                        // line 76
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 76, $this->source); })()), "hoursWorked", [], "any", false, false, false, 76) * 60)), "html", null, true);
                        yield " min
                                    </div>
                                    <a href=\"";
                        // line 78
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_day_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
                        yield "\"
                                       class=\"btn btn-sm btn-outline-primary mt-1\">
                                        Details
                                    </a>
                                ";
                    } else {
                        // line 83
                        yield "                                    ";
                        if ((((CoreExtension::getAttribute($this->env, $this->source,                         // line 84
(isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER") &&                         // line 86
(isset($context["commonTags"]) || array_key_exists("commonTags", $context) ? $context["commonTags"] : (function () { throw new RuntimeError('Variable "commonTags" does not exist.', 86, $this->source); })())))) {
                            // line 88
                            yield "                                        <div class=\"mt-1\">
                                            <a href=\"";
                            // line 89
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_day_view", ["date" =>                             // line 90
(isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new RuntimeError('Variable "datum" does not exist.', 90, $this->source); })()), "userId" => CoreExtension::getAttribute($this->env, $this->source,                             // line 91
(isset($context["targetUser"]) || array_key_exists("targetUser", $context) ? $context["targetUser"] : (function () { throw new RuntimeError('Variable "targetUser" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
                            // line 92
                            yield "\"
                                               class=\"btn btn-sm btn-outline-success\">
                                                + Toevoegen
                                            </a>
                                        </div>
                                    ";
                        }
                        // line 98
                        yield "                                ";
                    }
                    // line 99
                    yield "                            </td>
                            ";
                    // line 100
                    $context["dagNum"] = ((isset($context["dagNum"]) || array_key_exists("dagNum", $context) ? $context["dagNum"] : (function () { throw new RuntimeError('Variable "dagNum" does not exist.', 100, $this->source); })()) + 1);
                    // line 101
                    yield "                        ";
                } else {
                    // line 102
                    yield "                            <td></td>
                        ";
                }
                // line 104
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dow'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['week'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "            </tbody>
        </table>
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
        return array (  323 => 107,  316 => 105,  310 => 104,  306 => 102,  303 => 101,  301 => 100,  298 => 99,  295 => 98,  287 => 92,  285 => 91,  284 => 90,  283 => 89,  280 => 88,  278 => 86,  277 => 84,  275 => 83,  267 => 78,  262 => 76,  258 => 74,  256 => 73,  251 => 71,  248 => 70,  245 => 69,  242 => 68,  240 => 67,  237 => 66,  234 => 65,  230 => 64,  227 => 63,  223 => 62,  220 => 61,  217 => 60,  214 => 59,  212 => 58,  207 => 55,  198 => 53,  194 => 52,  184 => 47,  181 => 46,  175 => 42,  164 => 39,  157 => 38,  153 => 37,  147 => 33,  145 => 32,  136 => 25,  134 => 24,  133 => 23,  132 => 22,  131 => 21,  125 => 17,  123 => 16,  122 => 15,  121 => 14,  119 => 13,  116 => 12,  114 => 11,  107 => 9,  103 => 7,  90 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/calendar/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Kalender – {{ targetUser.firstName }} {{ targetUser.lastName }}{% endblock %}

{% block body %}
    <div class=\"container my-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h1 class=\"mb-0\">Kalender – {{ targetUser.firstName }} {{ targetUser.lastName }}</h1>
            <div>
                {% set prev = firstOfMonth.modify('-1 month') %}
                {% set next = firstOfMonth.modify('+1 month') %}
                <a href=\"{{ path('calendar_month_view', {
                    year: prev.format('Y'),
                    month: prev.format('n'),
                    userId: targetUser.id
                }) }}\"
                   class=\"btn btn-outline-secondary me-1\">
                    ← Vorige
                </a>
                <a href=\"{{ path('calendar_month_view', {
                    year: next.format('Y'),
                    month: next.format('n'),
                    userId: targetUser.id
                }) }}\"
                   class=\"btn btn-outline-secondary\">
                    Volgende →
                </a>
            </div>
        </div>

        {% if allUsers is not empty %}
            <form method=\"get\" class=\"row mb-4 gx-2 gy-2 align-items-center\">
                <label class=\"col-auto col-form-label\">Gebruiker:</label>
                <div class=\"col-auto\">
                    <select name=\"userId\" class=\"form-select\" onchange=\"this.form.submit()\">
                        {% for u in allUsers %}
                            <option value=\"{{ u.id }}\" {{ u.id == targetUser.id ? 'selected' : '' }}>
                                {{ u.firstName }} {{ u.lastName }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
            </form>
        {% endif %}

        <h4>{{ year }} – {{ '%02d'|format(month) }}</h4>

        <table class=\"table table-bordered text-center\">
            <thead class=\"table-light\">
            <tr>
                {% for dag in ['Zo','Ma','Di','Wo','Do','Vr','Za'] %}
                    <th>{{ dag }}</th>
                {% endfor %}
            </tr>
            </thead>
            <tbody>
            {% set dagNum = 1 %}
            {% set startDow = firstOfMonth.format('w') + 0 %}
            {% set daysInMonth = lastOfMonth.format('t') + 0 %}

            {% for week in 0..5 %}
                <tr>
                    {% for dow in 0..6 %}
                        {% if week == 0 and dow < startDow %}
                            <td></td>
                        {% elseif dagNum <= daysInMonth %}
                            {% set datum = '%04d-%02d-%02d'|format(year, month, dagNum) %}
                            {% set entry = entryMap[datum] ?? null %}
                            <td style=\"vertical-align: top;\">
                                <div><strong>{{ dagNum }}</strong></div>

                                {% if entry %}
                                    <div class=\"mt-1\">
                                        <i class=\"bi bi-clock\"></i>
                                        {{ (entry.hoursWorked * 60)|round }} min
                                    </div>
                                    <a href=\"{{ path('calendar_day_view', { id: entry.id }) }}\"
                                       class=\"btn btn-sm btn-outline-primary mt-1\">
                                        Details
                                    </a>
                                {% else %}
                                    {% if
                                        targetUser.id == app.user.id
                                        or is_granted('ROLE_ADMIN')
                                        or (is_granted('ROLE_MANAGER') and commonTags)
                                    %}
                                        <div class=\"mt-1\">
                                            <a href=\"{{ path('calendar_day_view', {
                                                date: datum,
                                                userId: targetUser.id
                                            }) }}\"
                                               class=\"btn btn-sm btn-outline-success\">
                                                + Toevoegen
                                            </a>
                                        </div>
                                    {% endif %}
                                {% endif %}
                            </td>
                            {% set dagNum = dagNum + 1 %}
                        {% else %}
                            <td></td>
                        {% endif %}
                    {% endfor %}
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "calendar/index.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\calendar\\index.html.twig");
    }
}
