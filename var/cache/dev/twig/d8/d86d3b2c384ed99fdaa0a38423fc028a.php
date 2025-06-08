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

/* security/login.html.twig */
class __TwigTemplate_9436e1df09dde27261603613aadf2c8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Inloggen";
        
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
        yield "    <div class=\"container py-5\" style=\"max-width: 400px;\">
        <div class=\"card shadow-sm\">
            <div class=\"card-body\">
                <h2 class=\"card-title text-center mb-4\">Inloggen</h2>

                ";
        // line 11
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "                    <div class=\"alert alert-danger\">
                        ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 16
        yield "
                <form method=\"post\" action=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">E-mailadres</label>
                        <input
                                type=\"email\"
                                class=\"form-control\"
                                name=\"email\"
                                id=\"email\"
                                value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "\"
                                required
                                autofocus
                        >
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label\">Wachtwoord</label>
                        <input
                                type=\"password\"
                                class=\"form-control\"
                                name=\"password\"
                                id=\"password\"
                                required
                        >
                    </div>

                    <div class=\"form-check mb-3\">
                        <input
                                class=\"form-check-input\"
                                type=\"checkbox\"
                                name=\"_remember_me\"
                                id=\"remember_me\"
                                ";
        // line 50
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "get", ["_remember_me"], "method", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
                        >
                        <label class=\"form-check-label\" for=\"remember_me\">
                            Onthoud mij
                        </label>
                    </div>

                    <div class=\"d-grid mb-3\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            Inloggen
                        </button>
                    </div>

                    <div class=\"text-center\">
                        <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\">Wachtwoord vergeten?</a>
                    </div>
                </form>
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
        return "security/login.html.twig";
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
        return array (  180 => 64,  163 => 50,  137 => 27,  125 => 18,  121 => 17,  118 => 16,  112 => 13,  109 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inloggen{% endblock %}

{% block body %}
    <div class=\"container py-5\" style=\"max-width: 400px;\">
        <div class=\"card shadow-sm\">
            <div class=\"card-body\">
                <h2 class=\"card-title text-center mb-4\">Inloggen</h2>

                {% if error %}
                    <div class=\"alert alert-danger\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}

                <form method=\"post\" action=\"{{ path('app_login') }}\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">E-mailadres</label>
                        <input
                                type=\"email\"
                                class=\"form-control\"
                                name=\"email\"
                                id=\"email\"
                                value=\"{{ last_username }}\"
                                required
                                autofocus
                        >
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label\">Wachtwoord</label>
                        <input
                                type=\"password\"
                                class=\"form-control\"
                                name=\"password\"
                                id=\"password\"
                                required
                        >
                    </div>

                    <div class=\"form-check mb-3\">
                        <input
                                class=\"form-check-input\"
                                type=\"checkbox\"
                                name=\"_remember_me\"
                                id=\"remember_me\"
                                {{ app.request.get('_remember_me') ? 'checked' }}
                        >
                        <label class=\"form-check-label\" for=\"remember_me\">
                            Onthoud mij
                        </label>
                    </div>

                    <div class=\"d-grid mb-3\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            Inloggen
                        </button>
                    </div>

                    <div class=\"text-center\">
                        <a href=\"{{ path('app_forgot_password') }}\">Wachtwoord vergeten?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "security/login.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\security\\login.html.twig");
    }
}
