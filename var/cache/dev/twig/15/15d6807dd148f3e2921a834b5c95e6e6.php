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

/* announcement/edit.html.twig */
class __TwigTemplate_9ed90609cde961b2b8d4f3bfbb6b0af4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "announcement/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "announcement/edit.html.twig"));

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

        yield "Aankondiging bewerken";
        
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
        <h1 class=\"mb-4\">Aankondiging bewerken</h1>

        ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        yield "

        <div class=\"mb-3\">
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), 'label', ["label" => "Titel"]);
        yield "
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), 'errors');
        yield "
        </div>

        <div class=\"mb-3\">
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "content", [], "any", false, false, false, 18), 'label', ["label" => "Inhoud"]);
        yield "
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "content", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "rows" => 5]]);
        yield "
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "content", [], "any", false, false, false, 20), 'errors');
        yield "
        </div>

        <div class=\"mb-3\">
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "imageFile", [], "any", false, false, false, 24), 'label', ["label" => "Afbeelding (optioneel)"]);
        yield "
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "imageFile", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "imageFile", [], "any", false, false, false, 26), 'errors');
        yield "
        </div>

        <div class=\"mb-3\">
            <label class=\"form-check-label me-3\">
                <input
                        class=\"form-check-input me-1\"
                        type=\"radio\"
                        id=\"announcement_public\"
                        name=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "isPublic", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "full_name", [], "any", false, false, false, 35), "html", null, true);
        yield "\"
                        value=\"1\"
                        ";
        // line 37
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "isPublic", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "data", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
                > Publiek
            </label>
            <label class=\"form-check-label\">
                <input
                        class=\"form-check-input me-1\"
                        type=\"radio\"
                        id=\"announcement_private\"
                        name=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "isPublic", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "full_name", [], "any", false, false, false, 45), "html", null, true);
        yield "\"
                        value=\"0\"
                        ";
        // line 47
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "isPublic", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "data", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
                > Privé
            </label>
        </div>

        ";
        // line 53
        yield "        <div style=\"display:none\">
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "isPublic", [], "any", false, false, false, 54), 'row');
        yield "
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "targetRoles", [], "any", false, false, false, 55), 'row');
        yield "
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "targetTags", [], "any", false, false, false, 56), 'row');
        yield "
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "targetUsers", [], "any", false, false, false, 57), 'row');
        yield "
        </div>

        <div id=\"access-picker\" class=\"mb-4\" style=\"display:none\">
            <h5>Geselecteerde toegang</h5>
            <div id=\"selected-list\" class=\"border p-2 mb-2\" style=\"min-height:2rem\"></div>
            <input type=\"text\" id=\"search-selected\" class=\"form-control form-control-sm mb-3\" placeholder=\"Zoeken…\">

            <h5>Beschikbaar</h5>
            <input type=\"text\" id=\"search-unselected\" class=\"form-control form-control-sm mb-2\" placeholder=\"Zoeken…\">
            <div id=\"unselected-list\" class=\"border p-2\" style=\"min-height:2rem\"></div>
        </div>

        <div class=\"form-check mb-3\">
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "infoboard", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-check-input", "id" => "infoboard"]]);
        yield "
            <label class=\"form-check-label\" for=\"infoboard\">Tonen op infobord</label>
        </div>

        <div class=\"form-check mb-3\">
            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "commentsEnabled", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-check-input", "id" => "commentsEnabled"]]);
        yield "
            <label class=\"form-check-label\" for=\"commentsEnabled\">Reacties toestaan</label>
        </div>

        <div class=\"form-check mb-4\">
            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "visible", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-check-input", "id" => "visible"]]);
        yield "
            <label class=\"form-check-label\" for=\"visible\">Zichtbaar voor gebruikers</label>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"bi bi-pencil me-1\"></i> Bijwerken
        </button>
        <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_announcement_index");
        yield "\" class=\"btn btn-secondary ms-2\">
            <i class=\"bi bi-arrow-left me-1\"></i> Terug
        </a>

        ";
        // line 92
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_end');
        yield "
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            // toggle access picker
            const pub = document.getElementById('announcement_public');
            const priv = document.getElementById('announcement_private');
            const picker = document.getElementById('access-picker');
            function togglePicker(){ picker.style.display = priv.checked ? 'block' : 'none'; }
            pub.addEventListener('change',togglePicker);
            priv.addEventListener('change',togglePicker);
            togglePicker();

            // build dual-list
            const roleName = '";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "targetRoles", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "full_name", [], "any", false, false, false, 107), "html", null, true);
        yield "';
            const tagName  = '";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "targetTags", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "full_name", [], "any", false, false, false, 108), "html", null, true);
        yield "';
            const userName = '";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "targetUsers", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "full_name", [], "any", false, false, false, 109), "html", null, true);
        yield "';
            const roleSel = document.querySelector(`select[name=\"\${roleName}\"]`);
            const tagSel  = document.querySelector(`select[name=\"\${tagName}\"]`);
            const userSel = document.querySelector(`select[name=\"\${userName}\"]`);
            let items = [
                ...Array.from(roleSel.options).map(o=>({id:o.value,label:o.text,type:'role',selected:o.selected})),
                ...Array.from(tagSel.options).map(o=>({id:o.value,label:o.text,type:'tag',selected:o.selected})),
                ...Array.from(userSel.options).map(o=>({id:o.value,label:o.text,type:'user',selected:o.selected}))
            ];
            const selList = document.getElementById('selected-list');
            const unselList = document.getElementById('unselected-list');
            function render(){
                selList.innerHTML=''; unselList.innerHTML='';
                items.forEach(i=>{
                    const span = document.createElement('span');
                    const clr = i.type==='role'?'primary':i.type==='tag'?'success':'danger';
                    const prefix = i.type==='role'?'Rol: ':i.type==='tag'?'Team: ':'Gebr.: ';
                    span.className = `badge border-\${clr} text-\${clr} bg-light me-1 mb-1`;
                    span.textContent = prefix+i.label;
                    span.style.cursor='pointer';
                    span.onclick = ()=>{
                        i.selected = !i.selected;
                        const sel = i.type==='role'?roleSel:i.type==='tag'?tagSel:userSel;
                        sel.querySelector(`option[value=\"\${i.id}\"]`).selected = i.selected;
                        render();
                    };
                    (i.selected?selList:unselList).append(span);
                });
            }
            render();

            // simple search
            document.getElementById('search-selected')
                .addEventListener('input', e=>{
                    const q=e.target.value.toLowerCase();
                    selList.childNodes.forEach(b=>b.style.display=b.textContent.toLowerCase().includes(q)?'inline-block':'none');
                });
            document.getElementById('search-unselected')
                .addEventListener('input', e=>{
                    const q=e.target.value.toLowerCase();
                    unselList.childNodes.forEach(b=>b.style.display=b.textContent.toLowerCase().includes(q)?'inline-block':'none');
                });
        });
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
        return "announcement/edit.html.twig";
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
        return array (  281 => 109,  277 => 108,  273 => 107,  255 => 92,  248 => 88,  238 => 81,  230 => 76,  222 => 71,  205 => 57,  201 => 56,  197 => 55,  193 => 54,  190 => 53,  182 => 47,  177 => 45,  166 => 37,  161 => 35,  149 => 26,  145 => 25,  141 => 24,  134 => 20,  130 => 19,  126 => 18,  119 => 14,  115 => 13,  111 => 12,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Aankondiging bewerken{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <h1 class=\"mb-4\">Aankondiging bewerken</h1>

        {{ form_start(form) }}

        <div class=\"mb-3\">
            {{ form_label(form.title, 'Titel') }}
            {{ form_widget(form.title, {attr:{class:'form-control'}}) }}
            {{ form_errors(form.title) }}
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.content, 'Inhoud') }}
            {{ form_widget(form.content, {attr:{class:'form-control', rows:5}}) }}
            {{ form_errors(form.content) }}
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.imageFile, 'Afbeelding (optioneel)') }}
            {{ form_widget(form.imageFile, {attr:{class:'form-control'}}) }}
            {{ form_errors(form.imageFile) }}
        </div>

        <div class=\"mb-3\">
            <label class=\"form-check-label me-3\">
                <input
                        class=\"form-check-input me-1\"
                        type=\"radio\"
                        id=\"announcement_public\"
                        name=\"{{ form.isPublic.vars.full_name }}\"
                        value=\"1\"
                        {{ form.isPublic.vars.data ? 'checked' }}
                > Publiek
            </label>
            <label class=\"form-check-label\">
                <input
                        class=\"form-check-input me-1\"
                        type=\"radio\"
                        id=\"announcement_private\"
                        name=\"{{ form.isPublic.vars.full_name }}\"
                        value=\"0\"
                        {{ not form.isPublic.vars.data ? 'checked' }}
                > Privé
            </label>
        </div>

        {# Hidden real inputs #}
        <div style=\"display:none\">
            {{ form_row(form.isPublic) }}
            {{ form_row(form.targetRoles) }}
            {{ form_row(form.targetTags) }}
            {{ form_row(form.targetUsers) }}
        </div>

        <div id=\"access-picker\" class=\"mb-4\" style=\"display:none\">
            <h5>Geselecteerde toegang</h5>
            <div id=\"selected-list\" class=\"border p-2 mb-2\" style=\"min-height:2rem\"></div>
            <input type=\"text\" id=\"search-selected\" class=\"form-control form-control-sm mb-3\" placeholder=\"Zoeken…\">

            <h5>Beschikbaar</h5>
            <input type=\"text\" id=\"search-unselected\" class=\"form-control form-control-sm mb-2\" placeholder=\"Zoeken…\">
            <div id=\"unselected-list\" class=\"border p-2\" style=\"min-height:2rem\"></div>
        </div>

        <div class=\"form-check mb-3\">
            {{ form_widget(form.infoboard, {attr:{class:'form-check-input',id:'infoboard'}}) }}
            <label class=\"form-check-label\" for=\"infoboard\">Tonen op infobord</label>
        </div>

        <div class=\"form-check mb-3\">
            {{ form_widget(form.commentsEnabled, {attr:{class:'form-check-input',id:'commentsEnabled'}}) }}
            <label class=\"form-check-label\" for=\"commentsEnabled\">Reacties toestaan</label>
        </div>

        <div class=\"form-check mb-4\">
            {{ form_widget(form.visible, {attr:{class:'form-check-input',id:'visible'}}) }}
            <label class=\"form-check-label\" for=\"visible\">Zichtbaar voor gebruikers</label>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"bi bi-pencil me-1\"></i> Bijwerken
        </button>
        <a href=\"{{ path('app_announcement_index') }}\" class=\"btn btn-secondary ms-2\">
            <i class=\"bi bi-arrow-left me-1\"></i> Terug
        </a>

        {{ form_end(form) }}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            // toggle access picker
            const pub = document.getElementById('announcement_public');
            const priv = document.getElementById('announcement_private');
            const picker = document.getElementById('access-picker');
            function togglePicker(){ picker.style.display = priv.checked ? 'block' : 'none'; }
            pub.addEventListener('change',togglePicker);
            priv.addEventListener('change',togglePicker);
            togglePicker();

            // build dual-list
            const roleName = '{{ form.targetRoles.vars.full_name }}';
            const tagName  = '{{ form.targetTags.vars.full_name }}';
            const userName = '{{ form.targetUsers.vars.full_name }}';
            const roleSel = document.querySelector(`select[name=\"\${roleName}\"]`);
            const tagSel  = document.querySelector(`select[name=\"\${tagName}\"]`);
            const userSel = document.querySelector(`select[name=\"\${userName}\"]`);
            let items = [
                ...Array.from(roleSel.options).map(o=>({id:o.value,label:o.text,type:'role',selected:o.selected})),
                ...Array.from(tagSel.options).map(o=>({id:o.value,label:o.text,type:'tag',selected:o.selected})),
                ...Array.from(userSel.options).map(o=>({id:o.value,label:o.text,type:'user',selected:o.selected}))
            ];
            const selList = document.getElementById('selected-list');
            const unselList = document.getElementById('unselected-list');
            function render(){
                selList.innerHTML=''; unselList.innerHTML='';
                items.forEach(i=>{
                    const span = document.createElement('span');
                    const clr = i.type==='role'?'primary':i.type==='tag'?'success':'danger';
                    const prefix = i.type==='role'?'Rol: ':i.type==='tag'?'Team: ':'Gebr.: ';
                    span.className = `badge border-\${clr} text-\${clr} bg-light me-1 mb-1`;
                    span.textContent = prefix+i.label;
                    span.style.cursor='pointer';
                    span.onclick = ()=>{
                        i.selected = !i.selected;
                        const sel = i.type==='role'?roleSel:i.type==='tag'?tagSel:userSel;
                        sel.querySelector(`option[value=\"\${i.id}\"]`).selected = i.selected;
                        render();
                    };
                    (i.selected?selList:unselList).append(span);
                });
            }
            render();

            // simple search
            document.getElementById('search-selected')
                .addEventListener('input', e=>{
                    const q=e.target.value.toLowerCase();
                    selList.childNodes.forEach(b=>b.style.display=b.textContent.toLowerCase().includes(q)?'inline-block':'none');
                });
            document.getElementById('search-unselected')
                .addEventListener('input', e=>{
                    const q=e.target.value.toLowerCase();
                    unselList.childNodes.forEach(b=>b.style.display=b.textContent.toLowerCase().includes(q)?'inline-block':'none');
                });
        });
    </script>
{% endblock %}
", "announcement/edit.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\announcement\\edit.html.twig");
    }
}
