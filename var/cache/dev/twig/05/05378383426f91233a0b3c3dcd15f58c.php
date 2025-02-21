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

/* admin/GestionPlanning/planning/index.html.twig */
class __TwigTemplate_460801e6228c6ec9844dbb43d3ec30e7 extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionPlanning/planning/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionPlanning/planning/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/GestionPlanning/planning/index.html.twig", 1);
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

        yield "Admin - Planning";
        
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
        yield "<div class=\"container\">
  <div class=\"page-inner\">
    <div class=\"row\">
      <div class=\"col-md-12\">
         <div class=\"card\">
            <div class=\"card-header\">
              <div class=\"d-flex align-items-center\">
                <h4 class=\"card-title\">All Planning</h4>
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_planning_new");
        yield "\" class=\"btn btn-primary btn-round ms-auto\">
                  <i class=\"fa fa-plus\"></i>
                  Create New Planning
                </a>
              </div>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table id=\"planning-table\" class=\"display table table-striped table-hover\">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Availability</th>
                      <th>Working Hours</th>
                      <th>Doctor</th>
                      <th style=\"width: 10%\">Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Availability</th>
                      <th>Working Hours</th>
                      <th>Doctor</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 43
            yield "                      <tr>
                        <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                        <td>
                          ";
            // line 46
            if (CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "startDate", [], "any", false, false, false, 46)) {
                // line 47
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "startDate", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true);
                yield "
                          ";
            } else {
                // line 49
                yield "                            Open
                          ";
            }
            // line 51
            yield "                          &mdash;
                          ";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "endDate", [], "any", false, false, false, 52)) {
                // line 53
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "endDate", [], "any", false, false, false, 53), "Y-m-d"), "html", null, true);
                yield "
                          ";
            } else {
                // line 55
                yield "                            Open
                          ";
            }
            // line 57
            yield "                        </td>
                        <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "dailyStartTime", [], "any", false, false, false, 58), "H:i"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "dailyEndTime", [], "any", false, false, false, 58), "H:i"), "html", null, true);
            yield "</td>
                        <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "doctor", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                        <td>
                          <div class=\"form-button-action\">
                            <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_planning_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" class=\"btn btn-link btn-primary btn-lg\" data-bs-toggle=\"tooltip\" title=\"Show Planning\">
                              <i class=\"fa fa-eye\"></i>
                            </a>
                            <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_planning_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" class=\"btn btn-link btn-primary btn-lg\" data-bs-toggle=\"tooltip\" title=\"Edit Planning\">
                              <i class=\"fa fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_planning_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this planning?');\" style=\"display:inline;\">
                              <input type=\"hidden\" name=\"_token\" value=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 69))), "html", null, true);
            yield "\">
                              <button type=\"submit\" class=\"btn btn-link btn-danger\" data-bs-toggle=\"tooltip\" title=\"Delete Planning\">
                                <i class=\"fa fa-times\"></i>
                              </button>
                            </form>
                          </div>
                        </td>
                      </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 77
        if (!$context['_iterated']) {
            // line 78
            yield "                      <tr>
                        <td colspan=\"5\" class=\"text-center\">No planning found.</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['planning'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "                  </tbody>
                </table>
              </div>
            </div>
         </div>
      </div>
    </div>
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
        return "admin/GestionPlanning/planning/index.html.twig";
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
        return array (  236 => 82,  227 => 78,  225 => 77,  212 => 69,  208 => 68,  202 => 65,  196 => 62,  190 => 59,  184 => 58,  181 => 57,  177 => 55,  171 => 53,  169 => 52,  166 => 51,  162 => 49,  156 => 47,  154 => 46,  149 => 44,  146 => 43,  141 => 42,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}Admin - Planning{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"page-inner\">
    <div class=\"row\">
      <div class=\"col-md-12\">
         <div class=\"card\">
            <div class=\"card-header\">
              <div class=\"d-flex align-items-center\">
                <h4 class=\"card-title\">All Planning</h4>
                <a href=\"{{ path('admin_planning_new') }}\" class=\"btn btn-primary btn-round ms-auto\">
                  <i class=\"fa fa-plus\"></i>
                  Create New Planning
                </a>
              </div>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table id=\"planning-table\" class=\"display table table-striped table-hover\">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Availability</th>
                      <th>Working Hours</th>
                      <th>Doctor</th>
                      <th style=\"width: 10%\">Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Availability</th>
                      <th>Working Hours</th>
                      <th>Doctor</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    {% for planning in plannings %}
                      <tr>
                        <td>{{ planning.id }}</td>
                        <td>
                          {% if planning.startDate %}
                            {{ planning.startDate|date('Y-m-d') }}
                          {% else %}
                            Open
                          {% endif %}
                          &mdash;
                          {% if planning.endDate %}
                            {{ planning.endDate|date('Y-m-d') }}
                          {% else %}
                            Open
                          {% endif %}
                        </td>
                        <td>{{ planning.dailyStartTime|date('H:i') }} - {{ planning.dailyEndTime|date('H:i') }}</td>
                        <td>{{ planning.doctor.name }}</td>
                        <td>
                          <div class=\"form-button-action\">
                            <a href=\"{{ path('admin_planning_show', {'id': planning.id}) }}\" class=\"btn btn-link btn-primary btn-lg\" data-bs-toggle=\"tooltip\" title=\"Show Planning\">
                              <i class=\"fa fa-eye\"></i>
                            </a>
                            <a href=\"{{ path('admin_planning_edit', {'id': planning.id}) }}\" class=\"btn btn-link btn-primary btn-lg\" data-bs-toggle=\"tooltip\" title=\"Edit Planning\">
                              <i class=\"fa fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('admin_planning_delete', {'id': planning.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this planning?');\" style=\"display:inline;\">
                              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ planning.id) }}\">
                              <button type=\"submit\" class=\"btn btn-link btn-danger\" data-bs-toggle=\"tooltip\" title=\"Delete Planning\">
                                <i class=\"fa fa-times\"></i>
                              </button>
                            </form>
                          </div>
                        </td>
                      </tr>
                    {% else %}
                      <tr>
                        <td colspan=\"5\" class=\"text-center\">No planning found.</td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>
         </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "admin/GestionPlanning/planning/index.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\admin\\GestionPlanning\\planning\\index.html.twig");
    }
}
