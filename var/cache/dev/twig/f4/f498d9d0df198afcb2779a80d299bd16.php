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
class __TwigTemplate_271233354e88975b2df535dc44bd2eee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "announcement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "announcement/show.html.twig"));

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

        yield "Announcement #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        
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
        yield "    <h1>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

    ";
        // line 10
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 10, $this->source); })()), "imagePath", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "        <div>
            <img
                    src=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/announcements/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 13, $this->source); })()), "imagePath", [], "any", false, false, false, 13))), "html", null, true);
            yield "\"
                    alt=\"Announcement image\"
                    style=\"max-width:400px;\"
            />
        </div>
    ";
        }
        // line 19
        yield "
    <p>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 20, $this->source); })()), "content", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>

    <p>
        <strong>Published:</strong>
        ";
        // line 24
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24), "Y-m-d H:i"), "html", null, true)) : (""));
        yield "
    </p>

    <p>
        <strong>On InfoBoard?</strong> ";
        // line 28
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 28, $this->source); })()), "infoboard", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Yes") : ("No"));
        yield "<br/>
        <strong>Comments Enabled?</strong> ";
        // line 29
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 29, $this->source); })()), "commentsEnabled", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Yes") : ("No"));
        yield "<br/>
        <strong>Visible?</strong> ";
        // line 30
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 30, $this->source); })()), "visible", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Yes") : ("No"));
        yield "
    </p>

    <hr/>

    ";
        // line 36
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 36, $this->source); })()), "commentsEnabled", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "        <h2>Comments</h2>

        ";
            // line 40
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 40, $this->source); })())) > 0)) {
                // line 41
                yield "            <ul>
                ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 42, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 43
                    yield "                    <li style=\"margin-bottom:1em;\">
                        <small>
                            <strong>
                                ";
                    // line 46
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sender", [], "any", false, false, false, 46), "firstName", [], "any", false, false, false, 46) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sender", [], "any", false, false, false, 46), "lastName", [], "any", false, false, false, 46)), "html", null, true);
                    yield "
                            </strong>
                            on ";
                    // line 48
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 48), "Y-m-d H:i"), "html", null, true);
                    yield "
                        </small>
                        <div>";
                    // line 50
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 50), "html", null, true));
                    yield "</div>

                        ";
                    // line 53
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "sender", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")))) {
                        // line 54
                        yield "                            <form
                                    method=\"post\"
                                    action=\"";
                        // line 56
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                        yield "\"
                                    style=\"display:inline;\"
                            >
                                <input
                                        type=\"hidden\"
                                        name=\"_token\"
                                        value=\"";
                        // line 62
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_comment" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 62))), "html", null, true);
                        yield "\"
                                >
                                <button
                                        class=\"btn btn-sm btn-danger\"
                                        type=\"submit\"
                                        onclick=\"return confirm('Are you sure you want to delete this comment?');\"
                                >
                                    Delete
                                </button>
                            </form>
                        ";
                    }
                    // line 73
                    yield "                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                yield "            </ul>
        ";
            } else {
                // line 77
                yield "            <p>No comments yet. Be the first to comment!</p>
        ";
            }
            // line 79
            yield "
        <hr/>


        <h3>Leave a comment</h3>
        ";
            // line 84
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 84, $this->source); })()), 'form_start');
            yield "
        ";
            // line 85
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 85, $this->source); })()), "content", [], "any", false, false, false, 85), 'row');
            yield "
        <button class=\"btn btn-primary\" type=\"submit\">Submit Comment</button>
        ";
            // line 87
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 87, $this->source); })()), 'form_end');
            yield "
    ";
        } else {
            // line 89
            yield "        <p><em>Comments are disabled for this announcement.</em></p>
    ";
        }
        // line 91
        yield "
    <br/>
    <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_announcement_index");
        yield "\">« Back to announcements</a>
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
        return array (  267 => 93,  263 => 91,  259 => 89,  254 => 87,  249 => 85,  245 => 84,  238 => 79,  234 => 77,  230 => 75,  223 => 73,  209 => 62,  200 => 56,  196 => 54,  193 => 53,  188 => 50,  183 => 48,  178 => 46,  173 => 43,  169 => 42,  166 => 41,  163 => 40,  159 => 37,  156 => 36,  148 => 30,  144 => 29,  140 => 28,  133 => 24,  126 => 20,  123 => 19,  114 => 13,  110 => 11,  107 => 10,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/announcement/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Announcement #{{ announcement.id }}{% endblock %}

{% block body %}
    <h1>{{ announcement.title }}</h1>

    {# If an image was uploaded, display it #}
    {% if announcement.imagePath %}
        <div>
            <img
                    src=\"{{ asset('uploads/announcements/' ~ announcement.imagePath) }}\"
                    alt=\"Announcement image\"
                    style=\"max-width:400px;\"
            />
        </div>
    {% endif %}

    <p>{{ announcement.content }}</p>

    <p>
        <strong>Published:</strong>
        {{ announcement.createdAt ? announcement.createdAt|date('Y-m-d H:i') : '' }}
    </p>

    <p>
        <strong>On InfoBoard?</strong> {{ announcement.infoboard ? 'Yes' : 'No' }}<br/>
        <strong>Comments Enabled?</strong> {{ announcement.commentsEnabled ? 'Yes' : 'No' }}<br/>
        <strong>Visible?</strong> {{ announcement.visible ? 'Yes' : 'No' }}
    </p>

    <hr/>

    {# ===== Comments Section ===== #}
    {% if announcement.commentsEnabled %}
        <h2>Comments</h2>

        {# List of visible comments #}
        {% if comments|length > 0 %}
            <ul>
                {% for comment in comments %}
                    <li style=\"margin-bottom:1em;\">
                        <small>
                            <strong>
                                {{ comment.sender.firstName ~ ' ' ~ comment.sender.lastName }}
                            </strong>
                            on {{ comment.createdAt|date('Y-m-d H:i') }}
                        </small>
                        <div>{{ comment.content|nl2br }}</div>

                        {# ========== Delete Button ========== #}
                        {% if app.user and (app.user.id == comment.sender.id or is_granted('ROLE_ADMIN')) %}
                            <form
                                    method=\"post\"
                                    action=\"{{ path('comment_delete', { id: comment.id }) }}\"
                                    style=\"display:inline;\"
                            >
                                <input
                                        type=\"hidden\"
                                        name=\"_token\"
                                        value=\"{{ csrf_token('delete_comment' ~ comment.id) }}\"
                                >
                                <button
                                        class=\"btn btn-sm btn-danger\"
                                        type=\"submit\"
                                        onclick=\"return confirm('Are you sure you want to delete this comment?');\"
                                >
                                    Delete
                                </button>
                            </form>
                        {% endif %}
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            <p>No comments yet. Be the first to comment!</p>
        {% endif %}

        <hr/>


        <h3>Leave a comment</h3>
        {{ form_start(commentForm) }}
        {{ form_row(commentForm.content) }}
        <button class=\"btn btn-primary\" type=\"submit\">Submit Comment</button>
        {{ form_end(commentForm) }}
    {% else %}
        <p><em>Comments are disabled for this announcement.</em></p>
    {% endif %}

    <br/>
    <a href=\"{{ path('app_announcement_index') }}\">« Back to announcements</a>
{% endblock %}
", "announcement/show.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\announcement\\show.html.twig");
    }
}
