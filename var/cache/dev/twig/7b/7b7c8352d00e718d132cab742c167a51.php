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

/* admin/GestionPlanning/planning/show.html.twig */
class __TwigTemplate_d632dd843a463e620abfb93d1fbd029d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionPlanning/planning/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionPlanning/planning/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/GestionPlanning/planning/show.html.twig", 1);
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

        yield "Admin - Planning Details";
        
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
    <div class=\"row justify-content-center\">
      <div class=\"col-md-8\">
        <div class=\"card\">
          <div class=\"card-header\">
            <h4 class=\"card-title\">Planning Details</h4>
          </div>
          <div class=\"card-body\">
            <ul class=\"list-unstyled mb-4\">
              <li><strong>ID:</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "</li>
              <li>
                <strong>Availability Period:</strong>
                ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 19, $this->source); })()), "startDate", [], "any", false, false, false, 19)) {
            // line 20
            yield "                  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 20, $this->source); })()), "startDate", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true);
            yield "
                ";
        } else {
            // line 22
            yield "                  Open
                ";
        }
        // line 24
        yield "                -
                ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 25, $this->source); })()), "endDate", [], "any", false, false, false, 25)) {
            // line 26
            yield "                  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 26, $this->source); })()), "endDate", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
            yield "
                ";
        } else {
            // line 28
            yield "                  Open
                ";
        }
        // line 30
        yield "              </li>
              <li>
                <strong>Daily Working Hours:</strong> 
                ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 33, $this->source); })()), "dailyStartTime", [], "any", false, false, false, 33), "H:i"), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 33, $this->source); })()), "dailyEndTime", [], "any", false, false, false, 33), "H:i"), "html", null, true);
        yield "
              </li>
              <li>
                <strong>Doctor:</strong> ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 36, $this->source); })()), "doctor", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
        yield "
              </li>
            </ul>
            <div class=\"d-flex justify-content-between\">
              <a href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_planning_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                <i class=\"fa fa-edit\"></i> Edit
              </a>
              <form method=\"post\" action=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_planning_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Are you sure you want to delete this planning?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-danger\">
                  <i class=\"fa fa-times\"></i> Delete
                </button>
              </form>
              <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_planning_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fa fa-arrow-left\"></i> Back to List
              </a>
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
        return "admin/GestionPlanning/planning/show.html.twig";
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
        return array (  183 => 49,  175 => 44,  171 => 43,  165 => 40,  158 => 36,  150 => 33,  145 => 30,  141 => 28,  135 => 26,  133 => 25,  130 => 24,  126 => 22,  120 => 20,  118 => 19,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}Admin - Planning Details{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"page-inner\">
    <div class=\"row justify-content-center\">
      <div class=\"col-md-8\">
        <div class=\"card\">
          <div class=\"card-header\">
            <h4 class=\"card-title\">Planning Details</h4>
          </div>
          <div class=\"card-body\">
            <ul class=\"list-unstyled mb-4\">
              <li><strong>ID:</strong> {{ planning.id }}</li>
              <li>
                <strong>Availability Period:</strong>
                {% if planning.startDate %}
                  {{ planning.startDate|date('Y-m-d') }}
                {% else %}
                  Open
                {% endif %}
                -
                {% if planning.endDate %}
                  {{ planning.endDate|date('Y-m-d') }}
                {% else %}
                  Open
                {% endif %}
              </li>
              <li>
                <strong>Daily Working Hours:</strong> 
                {{ planning.dailyStartTime|date('H:i') }} - {{ planning.dailyEndTime|date('H:i') }}
              </li>
              <li>
                <strong>Doctor:</strong> {{ planning.doctor.name }}
              </li>
            </ul>
            <div class=\"d-flex justify-content-between\">
              <a href=\"{{ path('admin_planning_edit', {'id': planning.id}) }}\" class=\"btn btn-primary\">
                <i class=\"fa fa-edit\"></i> Edit
              </a>
              <form method=\"post\" action=\"{{ path('admin_planning_delete', {'id': planning.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this planning?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ planning.id) }}\">
                <button type=\"submit\" class=\"btn btn-danger\">
                  <i class=\"fa fa-times\"></i> Delete
                </button>
              </form>
              <a href=\"{{ path('admin_planning_index') }}\" class=\"btn btn-secondary\">
                <i class=\"fa fa-arrow-left\"></i> Back to List
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "admin/GestionPlanning/planning/show.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\admin\\GestionPlanning\\planning\\show.html.twig");
    }
}
