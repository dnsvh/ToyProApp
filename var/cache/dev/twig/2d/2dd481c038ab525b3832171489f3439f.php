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

/* base.html.twig */
class __TwigTemplate_5bbb14f8416821714d8e6d2241cfb097 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    ";
        // line 9
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 11
        yield "</head>
<body>

";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["notification"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 16
            yield "    <div id=\"toast-notification\" class=\"alert alert-info notification-toast\">
        <span>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</span>
        <button type=\"button\" class=\"btn-close btn-sm\" aria-label=\"Close\" onclick=\"dismissToast()\"></button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
";
        // line 23
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-light shadow-sm\">
    <div class=\"container\">
        ";
        // line 26
        yield "        <a class=\"navbar-brand\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_list");
        yield "\">
            <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\"
                 alt=\"ToyPro Logo\"
                 style=\"height: 40px;\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\"
                data-bs-toggle=\"collapse\"
                data-bs-target=\"#mainNav\"
                aria-controls=\"mainNav\"
                aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"mainNav\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_list");
        yield "\">Vacatures</a>
                </li>
                ";
        // line 45
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            yield "\">Dashboard</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_announcement_index");
            yield "\">Mededelingen</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 53
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_month_default");
            yield "\">Kalender</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_index");
            yield "\">Documenten</a>
                    </li>
                ";
        }
        // line 59
        yield "
                ";
        // line 61
        yield "                ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"adminMenu\" role=\"button\"
                           data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Admin
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"adminMenu\">
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 69
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_userregistration");
            yield "\">
                                    Gebruiker registreren
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 74
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_usermanagement");
            yield "\">
                                    Gebruikersbeheer
                                </a>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 81
        yield "            </ul>

            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                ";
        // line 84
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">
                            ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "firstName", [], "any", false, false, false, 87), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "lastName", [], "any", false, false, false, 87), "html", null, true);
            yield "
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Uitloggen</a>
                    </li>
                ";
        } else {
            // line 94
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 95
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Inloggen</a>
                    </li>
                ";
        }
        // line 98
        yield "            </ul>
        </div>
    </div>
</nav>

<main class=\"container py-4\">
    ";
        // line 104
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 105
        yield "</main>

";
        // line 107
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "

";
        // line 110
        yield "<style>
    .notification-toast {
        position: fixed;
        top: 1rem;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1050;
        min-width: 300px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
</style>
<script>
    function dismissToast() {
        const t = document.getElementById('toast-notification');
        if (t) t.remove();
    }
    window.addEventListener('DOMContentLoaded', () => {
        const t = document.getElementById('toast-notification');
        if (!t) return;
        setTimeout(dismissToast, 6000);
        t.addEventListener('click', dismissToast);
    });
</script>

";
        // line 136
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 137
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "ToyProApp";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  357 => 136,  335 => 104,  313 => 10,  290 => 6,  277 => 137,  275 => 136,  247 => 110,  242 => 107,  238 => 105,  236 => 104,  228 => 98,  222 => 95,  219 => 94,  213 => 91,  204 => 87,  200 => 86,  197 => 85,  195 => 84,  190 => 81,  180 => 74,  172 => 69,  163 => 62,  160 => 61,  157 => 59,  151 => 56,  145 => 53,  139 => 50,  133 => 47,  130 => 46,  128 => 45,  123 => 43,  104 => 27,  99 => 26,  95 => 23,  92 => 21,  82 => 17,  79 => 16,  75 => 15,  70 => 11,  68 => 10,  63 => 9,  58 => 6,  52 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/base.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}ToyProApp{% endblock %}</title>

    {# CSS from Webpack Encore #}
    {{ encore_entry_link_tags('app') }}
    {% block stylesheets %}{% endblock %}
</head>
<body>

{# ===== Notification Toast (for e.g. “Nieuwe aankondiging: …”) ===== #}
{% for msg in app.flashes('notification') %}
    <div id=\"toast-notification\" class=\"alert alert-info notification-toast\">
        <span>{{ msg }}</span>
        <button type=\"button\" class=\"btn-close btn-sm\" aria-label=\"Close\" onclick=\"dismissToast()\"></button>
    </div>
{% endfor %}

{# ===== Navbar ===== #}
<nav class=\"navbar navbar-expand-lg navbar-light bg-light shadow-sm\">
    <div class=\"container\">
        {# Logo (upload your logo file to public/images/logo.png) #}
        <a class=\"navbar-brand\" href=\"{{ path('job_list') }}\">
            <img src=\"{{ asset('images/logo.png') }}\"
                 alt=\"ToyPro Logo\"
                 style=\"height: 40px;\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\"
                data-bs-toggle=\"collapse\"
                data-bs-target=\"#mainNav\"
                aria-controls=\"mainNav\"
                aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"mainNav\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('job_list') }}\">Vacatures</a>
                </li>
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('dashboard') }}\">Dashboard</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_announcement_index') }}\">Mededelingen</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('calendar_month_default') }}\">Kalender</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_document_index') }}\">Documenten</a>
                    </li>
                {% endif %}

                {# Admin dropdown #}
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"adminMenu\" role=\"button\"
                           data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Admin
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"adminMenu\">
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('admin_userregistration') }}\">
                                    Gebruiker registreren
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('admin_usermanagement') }}\">
                                    Gebruikersbeheer
                                </a>
                            </li>
                        </ul>
                    </li>
                {% endif %}
            </ul>

            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_profile') }}\">
                            {{ app.user.firstName }} {{ app.user.lastName }}
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Uitloggen</a>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Inloggen</a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

<main class=\"container py-4\">
    {% block body %}{% endblock %}
</main>

{{ encore_entry_script_tags('app') }}

{# ===== Toast CSS & JS ===== #}
<style>
    .notification-toast {
        position: fixed;
        top: 1rem;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1050;
        min-width: 300px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
</style>
<script>
    function dismissToast() {
        const t = document.getElementById('toast-notification');
        if (t) t.remove();
    }
    window.addEventListener('DOMContentLoaded', () => {
        const t = document.getElementById('toast-notification');
        if (!t) return;
        setTimeout(dismissToast, 6000);
        t.addEventListener('click', dismissToast);
    });
</script>

{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\base.html.twig");
    }
}
