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

/* profile/index.html.twig */
class __TwigTemplate_444a1c7894bdd346eb28520aa69d57a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

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

        yield "Mijn Profiel";
        
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
        <h1 class=\"mb-4\">Mijn Profiel</h1>

        <div class=\"row\">
            ";
        // line 12
        yield "            <div class=\"col-md-6 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-light\">
                        <strong>Persoonlijke Gegevens</strong>
                    </div>
                    <div class=\"card-body\">
                        <p><strong>Email:</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
                        <p><strong>Voornaam:</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "firstName", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
                        <p><strong>Achternaam:</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "lastName", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
                        ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "birthday", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                            <p><strong>Geboortedatum:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "birthday", [], "any", false, false, false, 22), "d-m-Y"), "html", null, true);
            yield "</p>
                        ";
        }
        // line 24
        yield "                        ";
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "tags", [], "any", false, false, false, 24))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "                            <p><strong>Teams:</strong>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "tags", [], "any", false, false, false, 26), ", ", function ($__tag__) use ($context, $macros) { $context["tag"] = $__tag__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26); }), "html", null, true);
            // line 27
            yield "</p>
                        ";
        }
        // line 29
        yield "                    </div>
                </div>
            </div>

            ";
        // line 34
        yield "            <div class=\"col-md-6 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-light\">
                        <strong>Wachtwoord wijzigen</strong>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "flashes", ["success"], "method", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 41
            yield "                            <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "
                        ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 44, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 46, $this->source); })()), "newPassword", [], "any", false, false, false, 46), "first", [], "any", false, false, false, 46), 'row');
        yield "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 49, $this->source); })()), "newPassword", [], "any", false, false, false, 49), "second", [], "any", false, false, false, 49), 'row');
        yield "
                        </div>
                        <button class=\"btn btn-primary\">Wijzig wachtwoord</button>
                        ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 52, $this->source); })()), 'form_end');
        yield "
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
        return "profile/index.html.twig";
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
        return array (  192 => 52,  186 => 49,  180 => 46,  175 => 44,  172 => 43,  163 => 41,  159 => 40,  151 => 34,  145 => 29,  141 => 27,  139 => 26,  137 => 25,  134 => 24,  128 => 22,  126 => 21,  122 => 20,  118 => 19,  114 => 18,  106 => 12,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/profile/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Mijn Profiel{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <h1 class=\"mb-4\">Mijn Profiel</h1>

        <div class=\"row\">
            {# -- Linker kolom: gebruikersgegevens -- #}
            <div class=\"col-md-6 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-light\">
                        <strong>Persoonlijke Gegevens</strong>
                    </div>
                    <div class=\"card-body\">
                        <p><strong>Email:</strong> {{ user.email }}</p>
                        <p><strong>Voornaam:</strong> {{ user.firstName }}</p>
                        <p><strong>Achternaam:</strong> {{ user.lastName }}</p>
                        {% if user.birthday %}
                            <p><strong>Geboortedatum:</strong> {{ user.birthday|date('d-m-Y') }}</p>
                        {% endif %}
                        {% if user.tags|length %}
                            <p><strong>Teams:</strong>
                                {{- user.tags|join(', ', tag => tag.name) -}}
                            </p>
                        {% endif %}
                    </div>
                </div>
            </div>

            {# -- Rechter kolom: wachtwoord wijzigen -- #}
            <div class=\"col-md-6 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-light\">
                        <strong>Wachtwoord wijzigen</strong>
                    </div>
                    <div class=\"card-body\">
                        {% for msg in app.flashes('success') %}
                            <div class=\"alert alert-success\">{{ msg }}</div>
                        {% endfor %}

                        {{ form_start(passwordForm) }}
                        <div class=\"mb-3\">
                            {{ form_row(passwordForm.newPassword.first) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_row(passwordForm.newPassword.second) }}
                        </div>
                        <button class=\"btn btn-primary\">Wijzig wachtwoord</button>
                        {{ form_end(passwordForm) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "profile/index.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\profile\\index.html.twig");
    }
}
