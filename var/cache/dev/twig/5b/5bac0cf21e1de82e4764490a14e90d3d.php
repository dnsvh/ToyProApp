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

/* document/new.html.twig */
class __TwigTemplate_e698e107f983896f23e5bfbc905974d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/new.html.twig"));

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

        yield "Document uploaden";
        
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
        yield "    <h1>Document uploaden</h1>

    ";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        yield "

    <div class=\"mb-3\">
        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), 'row', ["label" => "Titel"]);
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "documentFile", [], "any", false, false, false, 15), 'row', ["label" => "Bestand"]);
        yield "
    </div>

    ";
        // line 19
        yield "    <div class=\"mb-3\">
        <label class=\"me-3\">
            <input type=\"radio\" name=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "public", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "full_name", [], "any", false, false, false, 21), "html", null, true);
        yield "\" value=\"1\" checked>
            Publiek
        </label>
        <label>
            <input type=\"radio\" name=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "public", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "full_name", [], "any", false, false, false, 25), "html", null, true);
        yield "\" value=\"0\">
            Privé
        </label>
    </div>

    ";
        // line 31
        yield "    <div style=\"display:none\">
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "public", [], "any", false, false, false, 32), 'row');
        yield "
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "targetRoles", [], "any", false, false, false, 33), 'row');
        yield "
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "targetTags", [], "any", false, false, false, 34), 'row');
        yield "
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "targetUsers", [], "any", false, false, false, 35), 'row');
        yield "
    </div>

    ";
        // line 39
        yield "    <div id=\"access-picker\" class=\"mb-4\" style=\"display:none\">
        <h5>Geselecteerde toegang</h5>
        <div id=\"selected-list\" class=\"border p-2 mb-2\" style=\"min-height:2rem\"></div>
        <input type=\"text\" id=\"search-selected\" class=\"form-control form-control-sm mb-3\" placeholder=\"Zoeken…\">

        <h5>Beschikbaar</h5>
        <input type=\"text\" id=\"search-unselected\" class=\"form-control form-control-sm mb-2\" placeholder=\"Zoeken…\">
        <div id=\"unselected-list\" class=\"border p-2\" style=\"min-height:2rem\"></div>
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">Uploaden</button>

    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'rest');
        yield "
    ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        yield "

    <script>
        (() => {
            // grab the real selects
            const roleSel = document.querySelector('select[name=\"document[targetRoles][]\"]');
            const tagSel  = document.querySelector('select[name=\"document[targetTags][]\"]');
            const userSel = document.querySelector('select[name=\"document[targetUsers][]\"]');

            // build our items array
            function toArr(s, type) {
                return Array.from(s.options).map(o => ({
                    id: o.value, label: o.text, type, selected: o.selected
                }));
            }
            let items = [
                ...toArr(roleSel,'role'),
                ...toArr(tagSel,'tag'),
                ...toArr(userSel,'user')
            ];

            const pickr = document.getElementById('access-picker');
            const selList = document.getElementById('selected-list');
            const unselList = document.getElementById('unselected-list');

            // render badges
            function render() {
                selList.innerHTML = '';
                unselList.innerHTML = '';
                items.forEach(i => {
                    const span = document.createElement('span');
                    const clr = i.type==='role' ? 'primary' : i.type==='tag' ? 'success' : 'danger';
                    span.className = `badge border border-\${clr} text-\${clr} bg-light me-1 mb-1`;
                    span.textContent = (i.type==='role' ? 'Rol: ' : i.type==='tag' ? 'Team: ' : 'Gebr.: ') + i.label;
                    span.style.cursor = 'pointer';
                    span.onclick = () => {
                        i.selected = !i.selected;
                        const sel = i.type==='role'? roleSel : i.type==='tag'? tagSel : userSel;
                        sel.querySelector(`option[value=\"\${i.id}\"]`).selected = i.selected;
                        render();
                    };
                    (i.selected ? selList : unselList).append(span);
                });
            }

            // show picker only on Privé
            document.querySelectorAll(`input[name=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "public", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "full_name", [], "any", false, false, false, 98), "html", null, true);
        yield "\"]`)
                .forEach(radio => {
                    radio.addEventListener('change', e => {
                        pickr.style.display = e.target.value==='0' ? 'block' : 'none';
                    });
                });

            // initial
            render();
        })();
    </script>
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
        return "document/new.html.twig";
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
        return array (  230 => 98,  181 => 52,  177 => 51,  163 => 39,  157 => 35,  153 => 34,  149 => 33,  145 => 32,  142 => 31,  134 => 25,  127 => 21,  123 => 19,  117 => 15,  110 => 11,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Document uploaden{% endblock %}

{% block body %}
    <h1>Document uploaden</h1>

    {{ form_start(form) }}

    <div class=\"mb-3\">
        {{ form_row(form.title, { label: 'Titel' }) }}
    </div>

    <div class=\"mb-3\">
        {{ form_row(form.documentFile, { label: 'Bestand' }) }}
    </div>

    {# --- Manual Public/Privé toggle --- #}
    <div class=\"mb-3\">
        <label class=\"me-3\">
            <input type=\"radio\" name=\"{{ form.public.vars.full_name }}\" value=\"1\" checked>
            Publiek
        </label>
        <label>
            <input type=\"radio\" name=\"{{ form.public.vars.full_name }}\" value=\"0\">
            Privé
        </label>
    </div>

    {# --- Hidden real fields (mark them \"rendered\" so form_rest won't duplicate) --- #}
    <div style=\"display:none\">
        {{ form_row(form.public) }}
        {{ form_row(form.targetRoles) }}
        {{ form_row(form.targetTags) }}
        {{ form_row(form.targetUsers) }}
    </div>

    {# --- Combined dual-list picker --- #}
    <div id=\"access-picker\" class=\"mb-4\" style=\"display:none\">
        <h5>Geselecteerde toegang</h5>
        <div id=\"selected-list\" class=\"border p-2 mb-2\" style=\"min-height:2rem\"></div>
        <input type=\"text\" id=\"search-selected\" class=\"form-control form-control-sm mb-3\" placeholder=\"Zoeken…\">

        <h5>Beschikbaar</h5>
        <input type=\"text\" id=\"search-unselected\" class=\"form-control form-control-sm mb-2\" placeholder=\"Zoeken…\">
        <div id=\"unselected-list\" class=\"border p-2\" style=\"min-height:2rem\"></div>
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">Uploaden</button>

    {{ form_rest(form) }}
    {{ form_end(form) }}

    <script>
        (() => {
            // grab the real selects
            const roleSel = document.querySelector('select[name=\"document[targetRoles][]\"]');
            const tagSel  = document.querySelector('select[name=\"document[targetTags][]\"]');
            const userSel = document.querySelector('select[name=\"document[targetUsers][]\"]');

            // build our items array
            function toArr(s, type) {
                return Array.from(s.options).map(o => ({
                    id: o.value, label: o.text, type, selected: o.selected
                }));
            }
            let items = [
                ...toArr(roleSel,'role'),
                ...toArr(tagSel,'tag'),
                ...toArr(userSel,'user')
            ];

            const pickr = document.getElementById('access-picker');
            const selList = document.getElementById('selected-list');
            const unselList = document.getElementById('unselected-list');

            // render badges
            function render() {
                selList.innerHTML = '';
                unselList.innerHTML = '';
                items.forEach(i => {
                    const span = document.createElement('span');
                    const clr = i.type==='role' ? 'primary' : i.type==='tag' ? 'success' : 'danger';
                    span.className = `badge border border-\${clr} text-\${clr} bg-light me-1 mb-1`;
                    span.textContent = (i.type==='role' ? 'Rol: ' : i.type==='tag' ? 'Team: ' : 'Gebr.: ') + i.label;
                    span.style.cursor = 'pointer';
                    span.onclick = () => {
                        i.selected = !i.selected;
                        const sel = i.type==='role'? roleSel : i.type==='tag'? tagSel : userSel;
                        sel.querySelector(`option[value=\"\${i.id}\"]`).selected = i.selected;
                        render();
                    };
                    (i.selected ? selList : unselList).append(span);
                });
            }

            // show picker only on Privé
            document.querySelectorAll(`input[name=\"{{ form.public.vars.full_name }}\"]`)
                .forEach(radio => {
                    radio.addEventListener('change', e => {
                        pickr.style.display = e.target.value==='0' ? 'block' : 'none';
                    });
                });

            // initial
            render();
        })();
    </script>
{% endblock %}
", "document/new.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\document\\new.html.twig");
    }
}
