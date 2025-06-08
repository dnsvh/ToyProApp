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

/* announcement/_delete_form.html.twig */
class __TwigTemplate_0b0aa43a75cb21fd28131957c5dff8a9 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "announcement/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "announcement/_delete_form.html.twig"));

        // line 1
        yield "<form
        method=\"post\"
        action=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_announcement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        yield "\"
        onsubmit=\"return confirm('Weet je zeker dat je deze aankondiging wilt verwijderen?');\"
>
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6))), "html", null, true);
        yield "\">
    <button class=\"btn btn-sm btn-outline-danger\">
        <i class=\"bi bi-trash me-1\"></i> Verwijderen
    </button>
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "announcement/_delete_form.html.twig";
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
        return array (  58 => 6,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form
        method=\"post\"
        action=\"{{ path('app_announcement_delete', {'id': announcement.id}) }}\"
        onsubmit=\"return confirm('Weet je zeker dat je deze aankondiging wilt verwijderen?');\"
>
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ announcement.id) }}\">
    <button class=\"btn btn-sm btn-outline-danger\">
        <i class=\"bi bi-trash me-1\"></i> Verwijderen
    </button>
</form>
", "announcement/_delete_form.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\announcement\\_delete_form.html.twig");
    }
}
