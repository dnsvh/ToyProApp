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

/* admin/usermanagement_edit.html.twig */
class __TwigTemplate_b75b5aed2a6591a8800ff0895f71d8fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/usermanagement_edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/usermanagement_edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Bewerk ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "email", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">

                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-primary text-white\">
                        <h2 class=\"h5 mb-0\">
                            <i class=\"bi bi-person-circle me-2\"></i>
                            Gebruiker bewerken
                        </h2>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        yield "

                        <div class=\"col-md-6\">
                            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'row', ["disabled" => true, "label" => "Emailadres", "attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "enabled", [], "any", false, false, false, 24), 'row', ["label" => "Actief", "attr" => ["class" => "form-check-input mt-2"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "firstName", [], "any", false, false, false, 27), 'row', ["label" => "Voornaam", "attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "lastName", [], "any", false, false, false, 30), 'row', ["label" => "Achternaam", "attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "role", [], "any", false, false, false, 33), 'row', ["label" => "Rol", "attr" => ["class" => "form-select"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "tags", [], "any", false, false, false, 36), 'row', ["label" => "Team(s)", "attr" => ["class" => "form-select"]]);
        yield "
                        </div>

                        <div class=\"col-12 text-end\">
                            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_usermanagement");
        yield "\" class=\"btn btn-secondary me-2\">
                                <i class=\"bi bi-arrow-left-circle me-1\"></i> Annuleren
                            </a>
                            <button class=\"btn btn-success\">
                                <i class=\"bi bi-save me-1\"></i> Opslaan
                            </button>
                        </div>

                        ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
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
        return "admin/usermanagement_edit.html.twig";
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
        return array (  169 => 48,  158 => 40,  151 => 36,  145 => 33,  139 => 30,  133 => 27,  127 => 24,  121 => 21,  115 => 18,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bewerk {{ user.email }}{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">

                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-primary text-white\">
                        <h2 class=\"h5 mb-0\">
                            <i class=\"bi bi-person-circle me-2\"></i>
                            Gebruiker bewerken
                        </h2>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form, { attr: { class: 'row g-3' } }) }}

                        <div class=\"col-md-6\">
                            {{ form_row(form.email,      { disabled: true, label: 'Emailadres', attr: { class: 'form-control' } }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.enabled,    { label: 'Actief', attr: { class: 'form-check-input mt-2' } }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.firstName,  { label: 'Voornaam', attr: { class: 'form-control' } }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.lastName,   { label: 'Achternaam', attr: { class: 'form-control' } }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.role,       { label: 'Rol', attr: { class: 'form-select' } }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.tags,       { label: 'Team(s)', attr: { class: 'form-select' } }) }}
                        </div>

                        <div class=\"col-12 text-end\">
                            <a href=\"{{ path('admin_usermanagement') }}\" class=\"btn btn-secondary me-2\">
                                <i class=\"bi bi-arrow-left-circle me-1\"></i> Annuleren
                            </a>
                            <button class=\"btn btn-success\">
                                <i class=\"bi bi-save me-1\"></i> Opslaan
                            </button>
                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "admin/usermanagement_edit.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\admin\\usermanagement_edit.html.twig");
    }
}
