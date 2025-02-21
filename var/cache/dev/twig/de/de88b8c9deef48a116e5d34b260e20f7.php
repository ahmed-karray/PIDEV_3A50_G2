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

/* GestionPlanning/planning/index.html.twig */
class __TwigTemplate_5106f5f9c1a15c993f87706fa7ecd2c5 extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionPlanning/planning/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionPlanning/planning/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "GestionPlanning/planning/index.html.twig", 1);
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

        yield "My Planning";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<div class=\"container mt-4\">
    <h1 class=\"mb-4 text-center\">My Planning</h1>

    <div class=\"d-flex justify-content-end mb-3\">
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_new");
        yield "\" class=\"btn btn-success\">
            <i class=\"fa fa-plus\"></i> Create New Planning
        </a>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover text-center\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>ID</th>
                    <th>Availability Period</th>
                    <th>Daily Working Hours</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 27
            yield "                <tr>
                    <td><strong>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</strong></td>
                    <td>
                        ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "startDate", [], "any", false, false, false, 30)) {
                // line 31
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "startDate", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
                yield "
                        ";
            } else {
                // line 33
                yield "                            <span class=\"badge bg-info text-white\">Open</span>
                        ";
            }
            // line 35
            yield "                        -
                        ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "endDate", [], "any", false, false, false, 36)) {
                // line 37
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "endDate", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true);
                yield "
                        ";
            } else {
                // line 39
                yield "                            <span class=\"badge bg-info text-white\">Open</span>
                        ";
            }
            // line 41
            yield "                    </td>
                    <td>
                        <span class=\"badge bg-primary p-2\">
                            ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "dailyStartTime", [], "any", false, false, false, 44), "H:i"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "dailyEndTime", [], "any", false, false, false, 44), "H:i"), "html", null, true);
            yield "
                        </span>
                    </td>
                    <td>
                        <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                            <i class=\"fa fa-eye\"></i> Show
                        </a>
                        <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                            <i class=\"fa fa-edit\"></i> Edit
                        </a>
                        <form method=\"post\" action=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" 
                              onsubmit=\"return confirm('Are you sure?');\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 56))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                <i class=\"fa fa-trash\"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "                <tr>
                    <td colspan=\"4\" class=\"text-muted text-center\">No planning found.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['planning'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "            </tbody>
        </table>
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
        return "GestionPlanning/planning/index.html.twig";
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
        return array (  219 => 68,  210 => 64,  208 => 63,  196 => 56,  191 => 54,  185 => 51,  179 => 48,  170 => 44,  165 => 41,  161 => 39,  155 => 37,  153 => 36,  150 => 35,  146 => 33,  140 => 31,  138 => 30,  133 => 28,  130 => 27,  125 => 26,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Planning{% endblock %}

{% block content %}
<div class=\"container mt-4\">
    <h1 class=\"mb-4 text-center\">My Planning</h1>

    <div class=\"d-flex justify-content-end mb-3\">
        <a href=\"{{ path('planning_new') }}\" class=\"btn btn-success\">
            <i class=\"fa fa-plus\"></i> Create New Planning
        </a>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover text-center\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>ID</th>
                    <th>Availability Period</th>
                    <th>Daily Working Hours</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for planning in plannings %}
                <tr>
                    <td><strong>{{ planning.id }}</strong></td>
                    <td>
                        {% if planning.startDate %}
                            {{ planning.startDate|date('Y-m-d') }}
                        {% else %}
                            <span class=\"badge bg-info text-white\">Open</span>
                        {% endif %}
                        -
                        {% if planning.endDate %}
                            {{ planning.endDate|date('Y-m-d') }}
                        {% else %}
                            <span class=\"badge bg-info text-white\">Open</span>
                        {% endif %}
                    </td>
                    <td>
                        <span class=\"badge bg-primary p-2\">
                            {{ planning.dailyStartTime|date('H:i') }} - {{ planning.dailyEndTime|date('H:i') }}
                        </span>
                    </td>
                    <td>
                        <a href=\"{{ path('planning_show', {'id': planning.id}) }}\" class=\"btn btn-info btn-sm\">
                            <i class=\"fa fa-eye\"></i> Show
                        </a>
                        <a href=\"{{ path('planning_edit', {'id': planning.id}) }}\" class=\"btn btn-warning btn-sm\">
                            <i class=\"fa fa-edit\"></i> Edit
                        </a>
                        <form method=\"post\" action=\"{{ path('planning_delete', {'id': planning.id}) }}\" 
                              onsubmit=\"return confirm('Are you sure?');\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ planning.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                <i class=\"fa fa-trash\"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\" class=\"text-muted text-center\">No planning found.</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "GestionPlanning/planning/index.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\GestionPlanning\\planning\\index.html.twig");
    }
}
