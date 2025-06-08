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

/* document/index.html.twig */
class __TwigTemplate_ce7c8d9372b9dfd69595cc7e89db2206 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/index.html.twig"));

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

        yield "Documenten";
        
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
        yield "    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Documenten</h1>

        <div class=\"row mb-3 gy-2\">
            ";
        // line 12
        yield "            <div class=\"col-md-4\">
                <input
                        id=\"docSearch\"
                        type=\"text\"
                        class=\"form-control\"
                        placeholder=\"🔍 Zoek op titel of bestand…\"
                >
            </div>

            ";
        // line 22
        yield "            <div class=\"col-md-3\">
                <select id=\"docFilterPublic\" class=\"form-select\">
                    <option value=\"\">Alle zichtbaarheid</option>
                    <option value=\"Ja\">Publiek</option>
                    <option value=\"Nee\">Privé</option>
                </select>
            </div>

            ";
        // line 31
        yield "            <div class=\"col-md-3\">
                <select id=\"docSortSelect\" class=\"form-select\">
                    <option value=\"\">Sorteer op…</option>
                    <option value=\"date_desc\">Datum (nieuw → oud)</option>
                    <option value=\"date_asc\">Datum (oud → nieuw)</option>
                    <option value=\"title_asc\">Titel (A → Z)</option>
                    <option value=\"title_desc\">Titel (Z → A)</option>
                </select>
            </div>

            ";
        // line 42
        yield "            <div class=\"col-md-2 text-md-end\">
                <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_new");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"bi bi-upload me-1\"></i> Nieuw document
                </a>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table id=\"documentsTable\" class=\"table table-striped table-hover\">
                <thead class=\"table-light\">
                <tr>
                    <th data-sort=\"number\">#</th>
                    <th data-sort=\"text\">Titel</th>
                    <th data-sort=\"text\">Bestandsnaam</th>
                    <th data-sort=\"date\">Datum upload</th>
                    <th data-sort=\"text\">Publiek</th>
                    <th>Acties</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 62, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 63
            yield "                    <tr>
                        <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                        <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "title", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                        <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "filename", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                        <td>";
            // line 67
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["document"], "uploadDate", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "uploadDate", [], "any", false, false, false, 67), "Y-m-d H:i"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 68
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["document"], "public", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Ja") : ("Nee"));
            yield "</td>
                        <td class=\"text-nowrap\">
                            <a class=\"btn btn-sm btn-outline-secondary me-1\" title=\"Bekijken\"
                               href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\">
                                <i class=\"bi bi-eye\"></i> Bekijken
                            </a>
                            <a class=\"btn btn-sm btn-outline-primary me-1\" title=\"Bewerken\"
                               href=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\">
                                <i class=\"bi bi-pencil\"></i> Bewerken
                            </a>
                            <a class=\"btn btn-sm btn-outline-info me-1\" title=\"Logs\"
                               href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_logs", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\">
                                <i class=\"bi bi-clock-history\"></i> Logs
                            </a>
                            <form method=\"post\"
                                  action=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Weet je zeker dat je dit document wilt verwijderen?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 86))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-sm btn-outline-danger\" title=\"Verwijderen\">
                                    <i class=\"bi bi-trash\"></i> Verwijderen
                                </button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 93
        if (!$context['_iterated']) {
            // line 94
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Geen documenten gevonden.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['document'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
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

        // line 105
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.getElementById('documentsTable');
            const tbody = table.tBodies[0];
            let rows = Array.from(tbody.rows);

            // Search & Filter
            const searchInput = document.getElementById('docSearch');
            const filterSelect = document.getElementById('docFilterPublic');
            function applySearchFilter() {
                const q = searchInput.value.trim().toLowerCase();
                const pub = filterSelect.value;
                rows.forEach(r => {
                    const text = r.textContent.toLowerCase();
                    const matchesSearch = !q || text.includes(q);
                    const matchesPub    = !pub || r.cells[4].textContent.trim() === pub;
                    r.style.display = (matchesSearch && matchesPub) ? '' : 'none';
                });
            }
            searchInput.addEventListener('input', applySearchFilter);
            filterSelect.addEventListener('change', applySearchFilter);

            // Click-to-sort on headers
            table.querySelectorAll('th[data-sort]').forEach((th, idx) => {
                let asc = true;
                th.style.cursor = 'pointer';
                th.addEventListener('click', () => {
                    const type = th.getAttribute('data-sort');
                    rows.sort((a, b) => {
                        let x = a.cells[idx].textContent.trim();
                        let y = b.cells[idx].textContent.trim();
                        if (type === 'number') { x = parseFloat(x); y = parseFloat(y); }
                        if (type === 'date')   { x = new Date(x); y = new Date(y); }
                        if (x < y) return asc ? -1 : 1;
                        if (x > y) return asc ? 1 : -1;
                        return 0;
                    });
                    asc = !asc;
                    rows.forEach(r => tbody.appendChild(r));
                });
            });

            // Dropdown-based sort
            document.getElementById('docSortSelect').addEventListener('change', function(e) {
                const val = e.target.value;
                let idx, asc;
                if (val === 'date_desc') { idx = 3; asc = false; }
                else if (val === 'date_asc')  { idx = 3; asc = true; }
                else if (val === 'title_asc') { idx = 1; asc = true; }
                else if (val === 'title_desc'){ idx = 1; asc = false; }
                else return; // no-op
                // reuse header-sort logic
                const fakeTh = document.querySelector(`th[data-sort]`);
                // sort rows
                rows.sort((a,b) => {
                    let x = a.cells[idx].textContent.trim();
                    let y = b.cells[idx].textContent.trim();
                    if (idx===3) { x = new Date(x); y = new Date(y); }
                    if (x < y) return asc ? -1 : 1;
                    if (x > y) return asc ? 1 : -1;
                    return 0;
                });
                rows.forEach(r=>tbody.appendChild(r));
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
        return "document/index.html.twig";
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
        return array (  273 => 105,  260 => 104,  245 => 98,  236 => 94,  234 => 93,  222 => 86,  216 => 83,  209 => 79,  202 => 75,  195 => 71,  189 => 68,  185 => 67,  181 => 66,  177 => 65,  173 => 64,  170 => 63,  165 => 62,  143 => 43,  140 => 42,  128 => 31,  118 => 22,  107 => 12,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/document/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Documenten{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Documenten</h1>

        <div class=\"row mb-3 gy-2\">
            {# Search #}
            <div class=\"col-md-4\">
                <input
                        id=\"docSearch\"
                        type=\"text\"
                        class=\"form-control\"
                        placeholder=\"🔍 Zoek op titel of bestand…\"
                >
            </div>

            {# Filter Publiek/Nee #}
            <div class=\"col-md-3\">
                <select id=\"docFilterPublic\" class=\"form-select\">
                    <option value=\"\">Alle zichtbaarheid</option>
                    <option value=\"Ja\">Publiek</option>
                    <option value=\"Nee\">Privé</option>
                </select>
            </div>

            {# Sorteren dropdown #}
            <div class=\"col-md-3\">
                <select id=\"docSortSelect\" class=\"form-select\">
                    <option value=\"\">Sorteer op…</option>
                    <option value=\"date_desc\">Datum (nieuw → oud)</option>
                    <option value=\"date_asc\">Datum (oud → nieuw)</option>
                    <option value=\"title_asc\">Titel (A → Z)</option>
                    <option value=\"title_desc\">Titel (Z → A)</option>
                </select>
            </div>

            {# Nieuw document knop #}
            <div class=\"col-md-2 text-md-end\">
                <a href=\"{{ path('app_document_new') }}\" class=\"btn btn-primary\">
                    <i class=\"bi bi-upload me-1\"></i> Nieuw document
                </a>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table id=\"documentsTable\" class=\"table table-striped table-hover\">
                <thead class=\"table-light\">
                <tr>
                    <th data-sort=\"number\">#</th>
                    <th data-sort=\"text\">Titel</th>
                    <th data-sort=\"text\">Bestandsnaam</th>
                    <th data-sort=\"date\">Datum upload</th>
                    <th data-sort=\"text\">Publiek</th>
                    <th>Acties</th>
                </tr>
                </thead>
                <tbody>
                {% for document in documents %}
                    <tr>
                        <td>{{ document.id }}</td>
                        <td>{{ document.title }}</td>
                        <td>{{ document.filename }}</td>
                        <td>{{ document.uploadDate ? document.uploadDate|date('Y-m-d H:i') : '' }}</td>
                        <td>{{ document.public ? 'Ja' : 'Nee' }}</td>
                        <td class=\"text-nowrap\">
                            <a class=\"btn btn-sm btn-outline-secondary me-1\" title=\"Bekijken\"
                               href=\"{{ path('app_document_show', {id: document.id}) }}\">
                                <i class=\"bi bi-eye\"></i> Bekijken
                            </a>
                            <a class=\"btn btn-sm btn-outline-primary me-1\" title=\"Bewerken\"
                               href=\"{{ path('app_document_edit', {id: document.id}) }}\">
                                <i class=\"bi bi-pencil\"></i> Bewerken
                            </a>
                            <a class=\"btn btn-sm btn-outline-info me-1\" title=\"Logs\"
                               href=\"{{ path('app_document_logs', {id: document.id}) }}\">
                                <i class=\"bi bi-clock-history\"></i> Logs
                            </a>
                            <form method=\"post\"
                                  action=\"{{ path('app_document_delete', {id: document.id}) }}\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Weet je zeker dat je dit document wilt verwijderen?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ document.id) }}\">
                                <button class=\"btn btn-sm btn-outline-danger\" title=\"Verwijderen\">
                                    <i class=\"bi bi-trash\"></i> Verwijderen
                                </button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Geen documenten gevonden.</td>
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
            const table = document.getElementById('documentsTable');
            const tbody = table.tBodies[0];
            let rows = Array.from(tbody.rows);

            // Search & Filter
            const searchInput = document.getElementById('docSearch');
            const filterSelect = document.getElementById('docFilterPublic');
            function applySearchFilter() {
                const q = searchInput.value.trim().toLowerCase();
                const pub = filterSelect.value;
                rows.forEach(r => {
                    const text = r.textContent.toLowerCase();
                    const matchesSearch = !q || text.includes(q);
                    const matchesPub    = !pub || r.cells[4].textContent.trim() === pub;
                    r.style.display = (matchesSearch && matchesPub) ? '' : 'none';
                });
            }
            searchInput.addEventListener('input', applySearchFilter);
            filterSelect.addEventListener('change', applySearchFilter);

            // Click-to-sort on headers
            table.querySelectorAll('th[data-sort]').forEach((th, idx) => {
                let asc = true;
                th.style.cursor = 'pointer';
                th.addEventListener('click', () => {
                    const type = th.getAttribute('data-sort');
                    rows.sort((a, b) => {
                        let x = a.cells[idx].textContent.trim();
                        let y = b.cells[idx].textContent.trim();
                        if (type === 'number') { x = parseFloat(x); y = parseFloat(y); }
                        if (type === 'date')   { x = new Date(x); y = new Date(y); }
                        if (x < y) return asc ? -1 : 1;
                        if (x > y) return asc ? 1 : -1;
                        return 0;
                    });
                    asc = !asc;
                    rows.forEach(r => tbody.appendChild(r));
                });
            });

            // Dropdown-based sort
            document.getElementById('docSortSelect').addEventListener('change', function(e) {
                const val = e.target.value;
                let idx, asc;
                if (val === 'date_desc') { idx = 3; asc = false; }
                else if (val === 'date_asc')  { idx = 3; asc = true; }
                else if (val === 'title_asc') { idx = 1; asc = true; }
                else if (val === 'title_desc'){ idx = 1; asc = false; }
                else return; // no-op
                // reuse header-sort logic
                const fakeTh = document.querySelector(`th[data-sort]`);
                // sort rows
                rows.sort((a,b) => {
                    let x = a.cells[idx].textContent.trim();
                    let y = b.cells[idx].textContent.trim();
                    if (idx===3) { x = new Date(x); y = new Date(y); }
                    if (x < y) return asc ? -1 : 1;
                    if (x > y) return asc ? 1 : -1;
                    return 0;
                });
                rows.forEach(r=>tbody.appendChild(r));
            });
        });
    </script>
{% endblock %}
", "document/index.html.twig", "C:\\Projects\\TP\\ToyProApp\\templates\\document\\index.html.twig");
    }
}
