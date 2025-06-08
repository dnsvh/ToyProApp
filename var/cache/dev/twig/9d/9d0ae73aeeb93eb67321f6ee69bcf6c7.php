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

/* announcement/index.html.twig */
class __TwigTemplate_1896e0a5f4a5962005f90fe0987ed190 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "announcement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "announcement/index.html.twig"));

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

        yield "Aankondigingen";
        
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
        yield "    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Aankondigingen</h1>

        <div class=\"row mb-3 gy-2\">
            ";
        // line 11
        yield "            <div class=\"col-md-4\">
                <input
                        id=\"annSearch\"
                        type=\"text\"
                        class=\"form-control\"
                        placeholder=\"🔍 Zoek op titel of inhoud…\"
                >
            </div>

            ";
        // line 21
        yield "            <div class=\"col-md-2\">
                <select id=\"annFilterInfoboard\" class=\"form-select\">
                    <option value=\"\">Alle infoborden</option>
                    <option value=\"Ja\">Infobord: Ja</option>
                    <option value=\"Nee\">Infobord: Nee</option>
                </select>
            </div>

            ";
        // line 30
        yield "            ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                <div class=\"col-md-2\">
                    <select id=\"annFilterVisible\" class=\"form-select\">
                        <option value=\"\">Alle zichtbaarheid</option>
                        <option value=\"Ja\">Zichtbaar: Ja</option>
                        <option value=\"Nee\">Zichtbaar: Nee</option>
                    </select>
                </div>
            ";
        }
        // line 39
        yield "
            ";
        // line 41
        yield "            <div class=\"col-md-3\">
                <select id=\"annSortSelect\" class=\"form-select\">
                    <option value=\"\">Sorteer op…</option>
                    <option value=\"date_desc\">Datum (nieuw → oud)</option>
                    <option value=\"date_asc\">Datum (oud → nieuw)</option>
                    <option value=\"title_asc\">Titel (A → Z)</option>
                    <option value=\"title_desc\">Titel (Z → A)</option>
                </select>
            </div>

            ";
        // line 52
        yield "            <div class=\"col-md-1 text-md-end\">
                <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_announcement_new");
        yield "\" class=\"btn btn-success\">
                    <i class=\"bi bi-plus-lg me-1\"></i> Nieuw
                </a>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table id=\"announcementsTable\"
                   class=\"table table-striped table-hover align-middle\">
                <thead class=\"table-light\">
                <tr>
                    <th data-sort=\"number\">#</th>
                    <th data-sort=\"text\">Titel</th>
                    <th data-sort=\"text\">Inhoud</th>
                    <th data-sort=\"text\">Infobord</th>
                    ";
        // line 68
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                        <th data-sort=\"text\">Zichtbaar</th>
                    ";
        }
        // line 71
        yield "                    <th data-sort=\"date\">Aangemaakt</th>
                    <th>Acties</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["announcements"]) || array_key_exists("announcements", $context) ? $context["announcements"] : (function () { throw new RuntimeError('Variable "announcements" does not exist.', 76, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 77
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "visible", [], "any", false, false, false, 77) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 78
                yield "                        <tr>
                            <td>";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 79), "html", null, true);
                yield "</td>
                            <td>";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 80), "html", null, true);
                yield "</td>
                            <td>";
                // line 81
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "content", [], "any", false, false, false, 81)) > 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "content", [], "any", false, false, false, 81), 0, 30) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "content", [], "any", false, false, false, 81), "html", null, true)));
                yield "</td>
                            <td>";
                // line 82
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "infoboard", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Ja") : ("Nee"));
                yield "</td>
                            ";
                // line 83
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 84
                    yield "                                <td>";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "visible", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Ja") : ("Nee"));
                    yield "</td>
                            ";
                }
                // line 86
                yield "                            <td>";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "createdAt", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "createdAt", [], "any", false, false, false, 86), "Y-m-d H:i"), "html", null, true)) : (""));
                yield "</td>
                            <td class=\"text-nowrap\">
                                <a class=\"btn btn-sm btn-outline-secondary me-1\"
                                   title=\"Bekijken\"
                                   href=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_announcement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\">
                                    <i class=\"bi bi-eye\"></i> Bekijken
                                </a>
                                <a class=\"btn btn-sm btn-outline-primary\"
                                   title=\"Bewerken\"
                                   href=\"";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_announcement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 95)]), "html", null, true);
                yield "\">
                                    <i class=\"bi bi-pencil\"></i> Bewerken
                                </a>
                            </td>
                        </tr>
                    ";
            }
            // line 101
            yield "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            yield "                    <tr>
                        <td colspan=\"";
            // line 103
            yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (7) : (6));
            yield "\"
                            class=\"text-center\">
                            Geen aankondigingen gevonden.
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 115
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

        // line 116
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.getElementById('announcementsTable');
            const tbody = table.tBodies[0];
            let rows = Array.from(tbody.rows);

            const searchInput = document.getElementById('annSearch');
            const filterInf   = document.getElementById('annFilterInfoboard');
            const filterVis   = document.getElementById('annFilterVisible');
            const sortSelect  = document.getElementById('annSortSelect');

            function applyFilters() {
                const q   = searchInput.value.trim().toLowerCase();
                const inf = filterInf.value;
                const vis = filterVis ? filterVis.value : '';
                rows.forEach(r => {
                    const text = r.textContent.toLowerCase();
                    const okSearch = !q || text.includes(q);
                    const okInf    = !inf || r.cells[3].textContent === inf;
                    const okVis    = !filterVis || !vis || r.cells[4].textContent === vis;
                    r.style.display = (okSearch && okInf && okVis ? '' : 'none');
                });
            }

            searchInput.addEventListener('input', applyFilters);
            filterInf.addEventListener('change', applyFilters);
            if (filterVis) filterVis.addEventListener('change', applyFilters);

            // Column-click sorting
            table.querySelectorAll('th[data-sort]').forEach((th, idx) => {
                let asc = true;
                th.style.cursor = 'pointer';
                th.addEventListener('click', () => {
                    const type = th.dataset.sort;
                    rows.sort((a, b) => {
                        let x = a.cells[idx].textContent.trim();
                        let y = b.cells[idx].textContent.trim();
                        if (type === 'number') { x = +x; y = +y; }
                        if (type === 'date')   { x = new Date(x); y = new Date(y); }
                        return (x < y ? (asc ? -1 : 1) : x > y ? (asc ? 1 : -1) : 0);
                    });
                    asc = !asc;
                    rows.forEach(r => tbody.appendChild(r));
                });
            });

            // Dropdown-based sort
            sortSelect.addEventListener('change', e => {
                const v = e.target.value; let idx, asc;
                if (v === 'date_desc')   { idx = is_granted('ROLE_ADMIN') ? 5 : 4; asc = false; }
                else if (v === 'date_asc')  { idx = is_granted('ROLE_ADMIN') ? 5 : 4; asc = true; }
                else if (v === 'title_asc') { idx = 1; asc = true; }
                else if (v === 'title_desc'){ idx = 1; asc = false; }
                else return;
                rows.sort((a,b) => {
                    let x = a.cells[idx].textContent.trim();
                    let y = b.cells[idx].textContent.trim();
                    if (idx >= (is_granted('ROLE_ADMIN') ? 5 : 4)) {
                        x = new Date(x); y = new Date(y);
                    }
                    return (x < y ? (asc ? -1 : 1) : x > y ? (asc ? 1 : -1) : 0);
                });
                rows.forEach(r => tbody.appendChild(r));
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
        return "announcement/index.html.twig";
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
        return array (  298 => 116,  285 => 115,  270 => 109,  258 => 103,  255 => 102,  250 => 101,  241 => 95,  233 => 90,  225 => 86,  219 => 84,  217 => 83,  213 => 82,  209 => 81,  205 => 80,  201 => 79,  198 => 78,  195 => 77,  190 => 76,  183 => 71,  179 => 69,  177 => 68,  159 => 53,  156 => 52,  144 => 41,  141 => 39,  131 => 31,  128 => 30,  118 => 21,  107 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Aankondigingen{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Aankondigingen</h1>

        <div class=\"row mb-3 gy-2\">
            {# Search #}
            <div class=\"col-md-4\">
                <input
                        id=\"annSearch\"
                        type=\"text\"
                        class=\"form-control\"
                        placeholder=\"🔍 Zoek op titel of inhoud…\"
                >
            </div>

            {# Filter Infobord #}
            <div class=\"col-md-2\">
                <select id=\"annFilterInfoboard\" class=\"form-select\">
                    <option value=\"\">Alle infoborden</option>
                    <option value=\"Ja\">Infobord: Ja</option>
                    <option value=\"Nee\">Infobord: Nee</option>
                </select>
            </div>

            {# Filter Zichtbaar (voor admins) #}
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"col-md-2\">
                    <select id=\"annFilterVisible\" class=\"form-select\">
                        <option value=\"\">Alle zichtbaarheid</option>
                        <option value=\"Ja\">Zichtbaar: Ja</option>
                        <option value=\"Nee\">Zichtbaar: Nee</option>
                    </select>
                </div>
            {% endif %}

            {# Sorteren #}
            <div class=\"col-md-3\">
                <select id=\"annSortSelect\" class=\"form-select\">
                    <option value=\"\">Sorteer op…</option>
                    <option value=\"date_desc\">Datum (nieuw → oud)</option>
                    <option value=\"date_asc\">Datum (oud → nieuw)</option>
                    <option value=\"title_asc\">Titel (A → Z)</option>
                    <option value=\"title_desc\">Titel (Z → A)</option>
                </select>
            </div>

            {# Nieuwe aankondiging knop #}
            <div class=\"col-md-1 text-md-end\">
                <a href=\"{{ path('app_announcement_new') }}\" class=\"btn btn-success\">
                    <i class=\"bi bi-plus-lg me-1\"></i> Nieuw
                </a>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table id=\"announcementsTable\"
                   class=\"table table-striped table-hover align-middle\">
                <thead class=\"table-light\">
                <tr>
                    <th data-sort=\"number\">#</th>
                    <th data-sort=\"text\">Titel</th>
                    <th data-sort=\"text\">Inhoud</th>
                    <th data-sort=\"text\">Infobord</th>
                    {% if is_granted('ROLE_ADMIN') %}
                        <th data-sort=\"text\">Zichtbaar</th>
                    {% endif %}
                    <th data-sort=\"date\">Aangemaakt</th>
                    <th>Acties</th>
                </tr>
                </thead>
                <tbody>
                {% for a in announcements %}
                    {% if a.visible or is_granted('ROLE_ADMIN') %}
                        <tr>
                            <td>{{ a.id }}</td>
                            <td>{{ a.title }}</td>
                            <td>{{ a.content|length > 30 ? a.content[:30] ~ '…' : a.content }}</td>
                            <td>{{ a.infoboard ? 'Ja' : 'Nee' }}</td>
                            {% if is_granted('ROLE_ADMIN') %}
                                <td>{{ a.visible ? 'Ja' : 'Nee' }}</td>
                            {% endif %}
                            <td>{{ a.createdAt ? a.createdAt|date('Y-m-d H:i') : '' }}</td>
                            <td class=\"text-nowrap\">
                                <a class=\"btn btn-sm btn-outline-secondary me-1\"
                                   title=\"Bekijken\"
                                   href=\"{{ path('app_announcement_show', {id: a.id}) }}\">
                                    <i class=\"bi bi-eye\"></i> Bekijken
                                </a>
                                <a class=\"btn btn-sm btn-outline-primary\"
                                   title=\"Bewerken\"
                                   href=\"{{ path('app_announcement_edit', {id: a.id}) }}\">
                                    <i class=\"bi bi-pencil\"></i> Bewerken
                                </a>
                            </td>
                        </tr>
                    {% endif %}
                {% else %}
                    <tr>
                        <td colspan=\"{{ is_granted('ROLE_ADMIN') ? 7 : 6 }}\"
                            class=\"text-center\">
                            Geen aankondigingen gevonden.
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.getElementById('announcementsTable');
            const tbody = table.tBodies[0];
            let rows = Array.from(tbody.rows);

            const searchInput = document.getElementById('annSearch');
            const filterInf   = document.getElementById('annFilterInfoboard');
            const filterVis   = document.getElementById('annFilterVisible');
            const sortSelect  = document.getElementById('annSortSelect');

            function applyFilters() {
                const q   = searchInput.value.trim().toLowerCase();
                const inf = filterInf.value;
                const vis = filterVis ? filterVis.value : '';
                rows.forEach(r => {
                    const text = r.textContent.toLowerCase();
                    const okSearch = !q || text.includes(q);
                    const okInf    = !inf || r.cells[3].textContent === inf;
                    const okVis    = !filterVis || !vis || r.cells[4].textContent === vis;
                    r.style.display = (okSearch && okInf && okVis ? '' : 'none');
                });
            }

            searchInput.addEventListener('input', applyFilters);
            filterInf.addEventListener('change', applyFilters);
            if (filterVis) filterVis.addEventListener('change', applyFilters);

            // Column-click sorting
            table.querySelectorAll('th[data-sort]').forEach((th, idx) => {
                let asc = true;
                th.style.cursor = 'pointer';
                th.addEventListener('click', () => {
                    const type = th.dataset.sort;
                    rows.sort((a, b) => {
                        let x = a.cells[idx].textContent.trim();
                        let y = b.cells[idx].textContent.trim();
                        if (type === 'number') { x = +x; y = +y; }
                        if (type === 'date')   { x = new Date(x); y = new Date(y); }
                        return (x < y ? (asc ? -1 : 1) : x > y ? (asc ? 1 : -1) : 0);
                    });
                    asc = !asc;
                    rows.forEach(r => tbody.appendChild(r));
                });
            });

            // Dropdown-based sort
            sortSelect.addEventListener('change', e => {
                const v = e.target.value; let idx, asc;
                if (v === 'date_desc')   { idx = is_granted('ROLE_ADMIN') ? 5 : 4; asc = false; }
                else if (v === 'date_asc')  { idx = is_granted('ROLE_ADMIN') ? 5 : 4; asc = true; }
                else if (v === 'title_asc') { idx = 1; asc = true; }
                else if (v === 'title_desc'){ idx = 1; asc = false; }
                else return;
                rows.sort((a,b) => {
                    let x = a.cells[idx].textContent.trim();
                    let y = b.cells[idx].textContent.trim();
                    if (idx >= (is_granted('ROLE_ADMIN') ? 5 : 4)) {
                        x = new Date(x); y = new Date(y);
                    }
                    return (x < y ? (asc ? -1 : 1) : x > y ? (asc ? 1 : -1) : 0);
                });
                rows.forEach(r => tbody.appendChild(r));
            });
        });
    </script>
{% endblock %}
", "announcement/index.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\announcement\\index.html.twig");
    }
}
