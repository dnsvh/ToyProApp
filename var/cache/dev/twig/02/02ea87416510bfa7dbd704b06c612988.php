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

/* document/edit.html.twig */
class __TwigTemplate_b1c5e1168598b0b25d21fe75707e3602 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/edit.html.twig"));

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

        yield "Document bewerken";
        
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
        yield "    <h1>Document bewerken</h1>

    ";
        // line 8
        if ((($tmp = (isset($context["currentFilename"]) || array_key_exists("currentFilename", $context) ? $context["currentFilename"] : (function () { throw new RuntimeError('Variable "currentFilename" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "        <p>
            <strong>Huidig bestand:</strong>
            <a href=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . (isset($context["currentFilename"]) || array_key_exists("currentFilename", $context) ? $context["currentFilename"] : (function () { throw new RuntimeError('Variable "currentFilename" does not exist.', 11, $this->source); })()))), "html", null, true);
            yield "\" target=\"_blank\">
                ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentFilename"]) || array_key_exists("currentFilename", $context) ? $context["currentFilename"] : (function () { throw new RuntimeError('Variable "currentFilename" does not exist.', 12, $this->source); })()), "html", null, true);
            yield "
            </a>
            <small class=\"text-muted\">(klikken om te openen)</small>
        </p>
    ";
        }
        // line 17
        yield "
    ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        yield "

    <div class=\"mb-3\">
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), 'row', ["label" => "Titel"]);
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "documentFile", [], "any", false, false, false, 25), 'row', ["label" => "Nieuw bestand (optioneel)"]);
        yield "
    </div>

    ";
        // line 29
        yield "    <div class=\"mb-3\">
        <label class=\"me-3\">
            <input type=\"radio\"
                   name=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "public", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "full_name", [], "any", false, false, false, 32), "html", null, true);
        yield "\"
                   value=\"1\"
                    ";
        // line 34
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "public", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "data", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
            Publiek
        </label>
        <label>
            <input type=\"radio\"
                   name=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "public", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "full_name", [], "any", false, false, false, 39), "html", null, true);
        yield "\"
                   value=\"0\"
                    ";
        // line 41
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "public", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "data", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
            Privé
        </label>
    </div>

    ";
        // line 47
        yield "    <div style=\"display:none\">
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "public", [], "any", false, false, false, 48), 'row');
        yield "
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "targetRoles", [], "any", false, false, false, 49), 'row');
        yield "
        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "targetTags", [], "any", false, false, false, 50), 'row');
        yield "
        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "targetUsers", [], "any", false, false, false, 51), 'row');
        yield "
    </div>

    ";
        // line 55
        yield "    <div id=\"access-picker\" class=\"mb-4\" style=\"display:none\">
        <h5>Geselecteerde toegang</h5>
        <div id=\"selected-list\" class=\"border p-2 mb-2\" style=\"min-height:2rem\"></div>
        <input type=\"text\" id=\"search-selected\" class=\"form-control form-control-sm mb-3\" placeholder=\"Zoeken…\">

        <h5>Beschikbaar</h5>
        <input type=\"text\" id=\"search-unselected\" class=\"form-control form-control-sm mb-2\" placeholder=\"Zoeken…\">
        <div id=\"unselected-list\" class=\"border p-2\" style=\"min-height:2rem\"></div>
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">Opslaan</button>

    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'rest');
        yield "
    ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        yield "

    <script>
        // identical script to “new”; you can DRY-out into an include
        (() => {
            const roleSel = document.querySelector('select[name=\"document[targetRoles][]\"]');
            const tagSel  = document.querySelector('select[name=\"document[targetTags][]\"]');
            const userSel = document.querySelector('select[name=\"document[targetUsers][]\"]');

            function toArr(s,t){ return Array.from(s.options).map(o=>({ id:o.value,label:o.text,type:t,selected:o.selected })); }
            let items = [...toArr(roleSel,'role'),...toArr(tagSel,'tag'),...toArr(userSel,'user')];

            const pickr= document.getElementById('access-picker'),
                selL= document.getElementById('selected-list'),
                unsL= document.getElementById('unselected-list');

            function render(){
                selL.innerHTML=''; unsL.innerHTML='';
                items.forEach(i=>{
                    const clr=i.type==='role'?'primary':i.type==='tag'?'success':'danger',
                        sp=document.createElement('span');
                    sp.className=`badge border border-\${clr} text-\${clr} bg-light me-1 mb-1`;
                    sp.textContent=(i.type==='role'?'Rol: ':
                        i.type==='tag'?'Team: ':'Gebr.: ')+i.label;
                    sp.style.cursor='pointer';
                    sp.onclick=()=>{
                        i.selected=!i.selected;
                        const sel=i.type==='role'?roleSel:
                            i.type==='tag'?tagSel:
                                userSel;
                        sel.querySelector(`option[value=\"\${i.id}\"]`).selected=i.selected;
                        render();
                    };
                    (i.selected?selL:unsL).append(sp);
                });
            }

            document.querySelectorAll(`input[name=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "public", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "full_name", [], "any", false, false, false, 105), "html", null, true);
        yield "\"]`)
                .forEach(r=>r.addEventListener('change',e=>{
                    pickr.style.display = e.target.value==='0'? 'block' : 'none';
                }));

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
        return "document/edit.html.twig";
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
        return array (  254 => 105,  214 => 68,  210 => 67,  196 => 55,  190 => 51,  186 => 50,  182 => 49,  178 => 48,  175 => 47,  167 => 41,  162 => 39,  154 => 34,  149 => 32,  144 => 29,  138 => 25,  131 => 21,  125 => 18,  122 => 17,  114 => 12,  110 => 11,  106 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Document bewerken{% endblock %}

{% block body %}
    <h1>Document bewerken</h1>

    {% if currentFilename %}
        <p>
            <strong>Huidig bestand:</strong>
            <a href=\"{{ asset('uploads/documents/' ~ currentFilename) }}\" target=\"_blank\">
                {{ currentFilename }}
            </a>
            <small class=\"text-muted\">(klikken om te openen)</small>
        </p>
    {% endif %}

    {{ form_start(form) }}

    <div class=\"mb-3\">
        {{ form_row(form.title, { label: 'Titel' }) }}
    </div>

    <div class=\"mb-3\">
        {{ form_row(form.documentFile, { label: 'Nieuw bestand (optioneel)' }) }}
    </div>

    {# Manual Public/Privé, default checked from form.public.vars.data #}
    <div class=\"mb-3\">
        <label class=\"me-3\">
            <input type=\"radio\"
                   name=\"{{ form.public.vars.full_name }}\"
                   value=\"1\"
                    {{ form.public.vars.data ? 'checked' : '' }}>
            Publiek
        </label>
        <label>
            <input type=\"radio\"
                   name=\"{{ form.public.vars.full_name }}\"
                   value=\"0\"
                    {{ not form.public.vars.data ? 'checked' : '' }}>
            Privé
        </label>
    </div>

    {# Hidden real fields #}
    <div style=\"display:none\">
        {{ form_row(form.public) }}
        {{ form_row(form.targetRoles) }}
        {{ form_row(form.targetTags) }}
        {{ form_row(form.targetUsers) }}
    </div>

    {# Same picker UI as “new” #}
    <div id=\"access-picker\" class=\"mb-4\" style=\"display:none\">
        <h5>Geselecteerde toegang</h5>
        <div id=\"selected-list\" class=\"border p-2 mb-2\" style=\"min-height:2rem\"></div>
        <input type=\"text\" id=\"search-selected\" class=\"form-control form-control-sm mb-3\" placeholder=\"Zoeken…\">

        <h5>Beschikbaar</h5>
        <input type=\"text\" id=\"search-unselected\" class=\"form-control form-control-sm mb-2\" placeholder=\"Zoeken…\">
        <div id=\"unselected-list\" class=\"border p-2\" style=\"min-height:2rem\"></div>
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">Opslaan</button>

    {{ form_rest(form) }}
    {{ form_end(form) }}

    <script>
        // identical script to “new”; you can DRY-out into an include
        (() => {
            const roleSel = document.querySelector('select[name=\"document[targetRoles][]\"]');
            const tagSel  = document.querySelector('select[name=\"document[targetTags][]\"]');
            const userSel = document.querySelector('select[name=\"document[targetUsers][]\"]');

            function toArr(s,t){ return Array.from(s.options).map(o=>({ id:o.value,label:o.text,type:t,selected:o.selected })); }
            let items = [...toArr(roleSel,'role'),...toArr(tagSel,'tag'),...toArr(userSel,'user')];

            const pickr= document.getElementById('access-picker'),
                selL= document.getElementById('selected-list'),
                unsL= document.getElementById('unselected-list');

            function render(){
                selL.innerHTML=''; unsL.innerHTML='';
                items.forEach(i=>{
                    const clr=i.type==='role'?'primary':i.type==='tag'?'success':'danger',
                        sp=document.createElement('span');
                    sp.className=`badge border border-\${clr} text-\${clr} bg-light me-1 mb-1`;
                    sp.textContent=(i.type==='role'?'Rol: ':
                        i.type==='tag'?'Team: ':'Gebr.: ')+i.label;
                    sp.style.cursor='pointer';
                    sp.onclick=()=>{
                        i.selected=!i.selected;
                        const sel=i.type==='role'?roleSel:
                            i.type==='tag'?tagSel:
                                userSel;
                        sel.querySelector(`option[value=\"\${i.id}\"]`).selected=i.selected;
                        render();
                    };
                    (i.selected?selL:unsL).append(sp);
                });
            }

            document.querySelectorAll(`input[name=\"{{ form.public.vars.full_name }}\"]`)
                .forEach(r=>r.addEventListener('change',e=>{
                    pickr.style.display = e.target.value==='0'? 'block' : 'none';
                }));

            render();
        })();
    </script>
{% endblock %}
", "document/edit.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\document\\edit.html.twig");
    }
}
