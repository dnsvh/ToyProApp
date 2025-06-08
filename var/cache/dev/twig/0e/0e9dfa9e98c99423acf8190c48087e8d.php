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

/* document/show.html.twig */
class __TwigTemplate_ad14011764b5670569ed1c300f17daa4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/show.html.twig"));

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

        yield "Document: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        
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
        <h1 class=\"mb-4\">Document: ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>

        <div class=\"table-responsive\">
            <table class=\"table\">
                <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Titel</th>
                    <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Bestandsnaam</th>
                    <td>
                        ";
        // line 25
        yield "                        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 25, $this->source); })()), "filename", [], "any", false, false, false, 25))), "html", null, true);
        yield "\" target=\"_blank\" class=\"d-inline-flex align-items-center\">
                            <i class=\"bi bi-file-earmark-arrow-up me-2\"></i>
                            ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 27, $this->source); })()), "filename", [], "any", false, false, false, 27), "html", null, true);
        yield "
                            <span class=\"ms-2 text-muted\">(klik om te openen)</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Upload datum</th>
                    <td>";
        // line 34
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 34, $this->source); })()), "uploadDate", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 34, $this->source); })()), "uploadDate", [], "any", false, false, false, 34), "Y-m-d H:i"), "html", null, true)) : ("–"));
        yield "</td>
                </tr>
                <tr>
                    <th>Openbaar</th>
                    <td>";
        // line 38
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 38, $this->source); })()), "public", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Ja") : ("Nee"));
        yield "</td>
                </tr>
                <tr>
                    <th>Geüpload door</th>
                    <td>";
        // line 42
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 42, $this->source); })()), "uploadedBy", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 42, $this->source); })()), "uploadedBy", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), "html", null, true)) : ("–"));
        yield "</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class=\"d-flex flex-wrap gap-2 mt-3\">
            <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"bi bi-arrow-left me-1\"></i> Terug naar lijst
            </a>
            <a href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                <i class=\"bi bi-pencil me-1\"></i> Bewerken
            </a>
            <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_logs", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        yield "\" class=\"btn btn-info text-white\">
                <i class=\"bi bi-clock-history me-1\"></i> Logs bekijken
            </a>
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
        return "document/show.html.twig";
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
        return array (  181 => 55,  175 => 52,  169 => 49,  159 => 42,  152 => 38,  145 => 34,  135 => 27,  129 => 25,  121 => 19,  114 => 15,  104 => 8,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/document/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Document: {{ document.title }}{% endblock %}

{% block body %}
    <div class=\"container my-4\">
        <h1 class=\"mb-4\">Document: {{ document.title }}</h1>

        <div class=\"table-responsive\">
            <table class=\"table\">
                <tbody>
                <tr>
                    <th>Id</th>
                    <td>{{ document.id }}</td>
                </tr>
                <tr>
                    <th>Titel</th>
                    <td>{{ document.title }}</td>
                </tr>
                <tr>
                    <th>Bestandsnaam</th>
                    <td>
                        {# add an icon and text so it’s obvious this is a link #}
                        <a href=\"{{ asset('uploads/documents/' ~ document.filename) }}\" target=\"_blank\" class=\"d-inline-flex align-items-center\">
                            <i class=\"bi bi-file-earmark-arrow-up me-2\"></i>
                            {{ document.filename }}
                            <span class=\"ms-2 text-muted\">(klik om te openen)</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Upload datum</th>
                    <td>{{ document.uploadDate ? document.uploadDate|date('Y-m-d H:i') : '–' }}</td>
                </tr>
                <tr>
                    <th>Openbaar</th>
                    <td>{{ document.public ? 'Ja' : 'Nee' }}</td>
                </tr>
                <tr>
                    <th>Geüpload door</th>
                    <td>{{ document.uploadedBy ? document.uploadedBy.email : '–' }}</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class=\"d-flex flex-wrap gap-2 mt-3\">
            <a href=\"{{ path('app_document_index') }}\" class=\"btn btn-secondary\">
                <i class=\"bi bi-arrow-left me-1\"></i> Terug naar lijst
            </a>
            <a href=\"{{ path('app_document_edit', {id: document.id}) }}\" class=\"btn btn-primary\">
                <i class=\"bi bi-pencil me-1\"></i> Bewerken
            </a>
            <a href=\"{{ path('app_document_logs', {id: document.id}) }}\" class=\"btn btn-info text-white\">
                <i class=\"bi bi-clock-history me-1\"></i> Logs bekijken
            </a>
        </div>
    </div>
{% endblock %}
", "document/show.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\document\\show.html.twig");
    }
}
