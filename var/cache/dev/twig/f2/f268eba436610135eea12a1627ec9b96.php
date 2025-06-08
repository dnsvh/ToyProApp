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

/* announcement/show.html.twig */
class __TwigTemplate_f82f1304fc3c5a1b65f858863f3f57e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "announcement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "announcement/show.html.twig"));

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

        yield "Aankondiging ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
        <div class=\"card\">
            ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 8, $this->source); })()), "imagePath", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "                <img
                        src=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/announcements/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 10, $this->source); })()), "imagePath", [], "any", false, false, false, 10))), "html", null, true);
            yield "\"
                        class=\"card-img-top img-fluid\"
                        alt=\"Aankondiging afbeelding\"
                >
            ";
        }
        // line 15
        yield "            <div class=\"card-body\">
                <h1 class=\"card-title\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "</h1>
                <p class=\"card-text\">";
        // line 17
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 17, $this->source); })()), "content", [], "any", false, false, false, 17), "html", null, true));
        yield "</p>

                <ul class=\"list-group list-group-flush mb-3\">
                    <li class=\"list-group-item\">
                        <strong>Gepubliceerd:</strong>
                        ";
        // line 22
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 22, $this->source); })()), "createdAt", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 22, $this->source); })()), "createdAt", [], "any", false, false, false, 22), "Y-m-d H:i"), "html", null, true)) : (""));
        yield "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Infobord:</strong>
                        ";
        // line 26
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 26, $this->source); })()), "infoboard", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Ja") : ("Nee"));
        yield "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Reacties ingeschakeld:</strong>
                        ";
        // line 30
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 30, $this->source); })()), "commentsEnabled", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Ja") : ("Nee"));
        yield "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Zichtbaar:</strong>
                        ";
        // line 34
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 34, $this->source); })()), "visible", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Ja") : ("Nee"));
        yield "
                    </li>
                </ul>

                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_announcement_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i> Terug
                    </a>
                    ";
        // line 42
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_announcement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                            <i class=\"bi bi-pencil me-1\"></i> Bewerken
                        </a>
                    ";
        }
        // line 47
        yield "                </div>
            </div>
        </div>

        ";
        // line 52
        yield "        <div class=\"mt-5\">
            ";
        // line 53
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 53, $this->source); })()), "commentsEnabled", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                <h2 class=\"mb-3\">Reacties</h2>

                ";
            // line 56
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 56, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "                    <ul class=\"list-group mb-4\">
                        ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 58, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 59
                    yield "                            <li class=\"list-group-item\">
                                <div class=\"d-flex justify-content-between align-items-start\">
                                    <div>
                                        <strong>";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sender", [], "any", false, false, false, 62), "firstName", [], "any", false, false, false, 62), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sender", [], "any", false, false, false, 62), "lastName", [], "any", false, false, false, 62), "html", null, true);
                    yield "</strong>
                                        <small class=\"text-muted\">— ";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 63), "Y-m-d H:i"), "html", null, true);
                    yield "</small>
                                    </div>
                                    ";
                    // line 65
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sender", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")))) {
                        // line 66
                        yield "                                        <form
                                                method=\"post\"
                                                action=\"";
                        // line 68
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                        yield "\"
                                                onsubmit=\"return confirm('Weet je zeker dat je deze reactie wilt verwijderen?');\"
                                        >
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 71
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_comment" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 71))), "html", null, true);
                        yield "\">
                                            <button class=\"btn btn-sm btn-outline-danger\">
                                                <i class=\"bi bi-trash me-1\"></i> Verwijder
                                            </button>
                                        </form>
                                    ";
                    }
                    // line 77
                    yield "                                </div>
                                <p class=\"mt-2\">";
                    // line 78
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 78), "html", null, true));
                    yield "</p>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                yield "                    </ul>
                ";
            } else {
                // line 83
                yield "                    <p class=\"text-muted\">Nog geen reacties. Wees de eerste!</p>
                ";
            }
            // line 85
            yield "
                <h3 class=\"mb-3\">Laat een reactie achter</h3>
                ";
            // line 87
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 87, $this->source); })()), 'form_start');
            yield "
                <div class=\"mb-3\">
                    ";
            // line 89
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 89, $this->source); })()), "content", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Typ hier je reactie…"]]);
            yield "
                    ";
            // line 90
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 90, $this->source); })()), "content", [], "any", false, false, false, 90), 'errors');
            yield "
                </div>
                <button class=\"btn btn-success\">
                    <i class=\"bi bi-chat-left-text me-1\"></i> Verzenden
                </button>
                ";
            // line 95
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 95, $this->source); })()), 'form_end');
            yield "

            ";
        } else {
            // line 98
            yield "                <p class=\"text-muted\"><em>Reacties zijn uitgeschakeld voor deze aankondiging.</em></p>
            ";
        }
        // line 100
        yield "        </div>
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
        return "announcement/show.html.twig";
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
        return array (  290 => 100,  286 => 98,  280 => 95,  272 => 90,  268 => 89,  263 => 87,  259 => 85,  255 => 83,  251 => 81,  242 => 78,  239 => 77,  230 => 71,  224 => 68,  220 => 66,  218 => 65,  213 => 63,  207 => 62,  202 => 59,  198 => 58,  195 => 57,  193 => 56,  189 => 54,  187 => 53,  184 => 52,  178 => 47,  170 => 43,  168 => 42,  162 => 39,  154 => 34,  147 => 30,  140 => 26,  133 => 22,  125 => 17,  121 => 16,  118 => 15,  110 => 10,  107 => 9,  105 => 8,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Aankondiging {{ announcement.id }}{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <div class=\"card\">
            {% if announcement.imagePath %}
                <img
                        src=\"{{ asset('uploads/announcements/' ~ announcement.imagePath) }}\"
                        class=\"card-img-top img-fluid\"
                        alt=\"Aankondiging afbeelding\"
                >
            {% endif %}
            <div class=\"card-body\">
                <h1 class=\"card-title\">{{ announcement.title }}</h1>
                <p class=\"card-text\">{{ announcement.content|nl2br }}</p>

                <ul class=\"list-group list-group-flush mb-3\">
                    <li class=\"list-group-item\">
                        <strong>Gepubliceerd:</strong>
                        {{ announcement.createdAt ? announcement.createdAt|date('Y-m-d H:i') : '' }}
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Infobord:</strong>
                        {{ announcement.infoboard ? 'Ja' : 'Nee' }}
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Reacties ingeschakeld:</strong>
                        {{ announcement.commentsEnabled ? 'Ja' : 'Nee' }}
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Zichtbaar:</strong>
                        {{ announcement.visible ? 'Ja' : 'Nee' }}
                    </li>
                </ul>

                <div class=\"d-flex justify-content-between\">
                    <a href=\"{{ path('app_announcement_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left me-1\"></i> Terug
                    </a>
                    {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"{{ path('app_announcement_edit', {id: announcement.id}) }}\" class=\"btn btn-primary\">
                            <i class=\"bi bi-pencil me-1\"></i> Bewerken
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>

        {# ===== Reacties-sectie ===== #}
        <div class=\"mt-5\">
            {% if announcement.commentsEnabled %}
                <h2 class=\"mb-3\">Reacties</h2>

                {% if comments is not empty %}
                    <ul class=\"list-group mb-4\">
                        {% for comment in comments %}
                            <li class=\"list-group-item\">
                                <div class=\"d-flex justify-content-between align-items-start\">
                                    <div>
                                        <strong>{{ comment.sender.firstName }} {{ comment.sender.lastName }}</strong>
                                        <small class=\"text-muted\">— {{ comment.createdAt|date('Y-m-d H:i') }}</small>
                                    </div>
                                    {% if app.user and (app.user.id == comment.sender.id or is_granted('ROLE_ADMIN')) %}
                                        <form
                                                method=\"post\"
                                                action=\"{{ path('comment_delete', {id: comment.id}) }}\"
                                                onsubmit=\"return confirm('Weet je zeker dat je deze reactie wilt verwijderen?');\"
                                        >
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_comment' ~ comment.id) }}\">
                                            <button class=\"btn btn-sm btn-outline-danger\">
                                                <i class=\"bi bi-trash me-1\"></i> Verwijder
                                            </button>
                                        </form>
                                    {% endif %}
                                </div>
                                <p class=\"mt-2\">{{ comment.content|nl2br }}</p>
                            </li>
                        {% endfor %}
                    </ul>
                {% else %}
                    <p class=\"text-muted\">Nog geen reacties. Wees de eerste!</p>
                {% endif %}

                <h3 class=\"mb-3\">Laat een reactie achter</h3>
                {{ form_start(commentForm) }}
                <div class=\"mb-3\">
                    {{ form_widget(commentForm.content, {attr:{class:'form-control', rows:4, placeholder:'Typ hier je reactie…'}}) }}
                    {{ form_errors(commentForm.content) }}
                </div>
                <button class=\"btn btn-success\">
                    <i class=\"bi bi-chat-left-text me-1\"></i> Verzenden
                </button>
                {{ form_end(commentForm) }}

            {% else %}
                <p class=\"text-muted\"><em>Reacties zijn uitgeschakeld voor deze aankondiging.</em></p>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "announcement/show.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\announcement\\show.html.twig");
    }
}
