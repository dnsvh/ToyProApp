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

/* admin/userregistration.html.twig */
class __TwigTemplate_e3e5fb0e86c5282cf33c0eba7bf97d3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/userregistration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/userregistration.html.twig"));

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

        yield "Nieuwe gebruiker registreren";
        
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
            <div class=\"col-lg-6\">

                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-success text-white\">
                        <h2 class=\"h5 mb-0\">
                            <i class=\"bi bi-person-plus-fill me-2\"></i>
                            Nieuwe gebruiker
                        </h2>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 20
            yield "                            <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
                        ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        yield "

                        <div class=\"col-md-12\">
                            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'row', ["label" => "Emailadres", "attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"col-md-12\">
                            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "plainPassword", [], "any", false, false, false, 29), 'row', ["label" => "Wachtwoord", "attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "firstName", [], "any", false, false, false, 32), 'row', ["label" => "Voornaam", "attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "lastName", [], "any", false, false, false, 35), 'row', ["label" => "Achternaam", "attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "birthday", [], "any", false, false, false, 38), 'row', ["label" => "Geboortedatum", "attr" => ["class" => "form-control", "type" => "date"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "role", [], "any", false, false, false, 41), 'row', ["label" => "Rol", "attr" => ["class" => "form-select"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "tags", [], "any", false, false, false, 44), 'row', ["label" => "Team(s)", "attr" => ["class" => "form-select"]]);
        yield "
                        </div>

                        <div class=\"col-12 text-end\">
                            <button class=\"btn btn-success\">
                                <i class=\"bi bi-check-circle me-1\"></i> Aanmaken
                            </button>
                        </div>

                        ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
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
        return "admin/userregistration.html.twig";
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
        return array (  184 => 53,  172 => 44,  166 => 41,  160 => 38,  154 => 35,  148 => 32,  142 => 29,  136 => 26,  130 => 23,  127 => 22,  118 => 20,  114 => 19,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/userregistration.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nieuwe gebruiker registreren{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">

                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-success text-white\">
                        <h2 class=\"h5 mb-0\">
                            <i class=\"bi bi-person-plus-fill me-2\"></i>
                            Nieuwe gebruiker
                        </h2>
                    </div>
                    <div class=\"card-body\">
                        {% for msg in app.flashes('success') %}
                            <div class=\"alert alert-success\">{{ msg }}</div>
                        {% endfor %}

                        {{ form_start(form, { attr: { class: 'row g-3' } }) }}

                        <div class=\"col-md-12\">
                            {{ form_row(form.email,         { label: 'Emailadres',       attr: { class: 'form-control' } }) }}
                        </div>
                        <div class=\"col-md-12\">
                            {{ form_row(form.plainPassword, { label: 'Wachtwoord',      attr: { class: 'form-control' } }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.firstName,     { label: 'Voornaam',        attr: { class: 'form-control' } }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.lastName,      { label: 'Achternaam',      attr: { class: 'form-control' } }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.birthday,      { label: 'Geboortedatum',   attr: { class: 'form-control', type: 'date' } }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.role,          { label: 'Rol',             attr: { class: 'form-select' } }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.tags,          { label: 'Team(s)',         attr: { class: 'form-select' } }) }}
                        </div>

                        <div class=\"col-12 text-end\">
                            <button class=\"btn btn-success\">
                                <i class=\"bi bi-check-circle me-1\"></i> Aanmaken
                            </button>
                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "admin/userregistration.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\admin\\userregistration.html.twig");
    }
}
