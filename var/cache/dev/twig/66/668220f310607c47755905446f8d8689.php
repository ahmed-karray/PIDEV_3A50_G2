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

/* admin/GestionPlanning/appointment/choose.html.twig */
class __TwigTemplate_6f24880adf67e6cdbf7bb485408271d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionPlanning/appointment/choose.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionPlanning/appointment/choose.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/GestionPlanning/appointment/choose.html.twig", 1);
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

        yield "Admin - Choose a Doctor";
        
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
            <h4 class=\"card-title\">Choose a Doctor for Appointment</h4>
          </div>
          <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table id=\"planning-table\" class=\"display table table-striped table-hover\">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Doctor</th>
                    <th>Availability</th>
                    <th>Daily Working Hours</th>
                    <th style=\"width: 10%\">Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Doctor</th>
                    <th>Availability</th>
                    <th>Daily Working Hours</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plannings"]) || array_key_exists("plannings", $context) ? $context["plannings"] : (function () { throw new RuntimeError('Variable "plannings" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 37
            yield "                    <tr>
                      <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                      <td>Dr. ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "doctor", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                      <td>
                        ";
            // line 41
            if (CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "startDate", [], "any", false, false, false, 41)) {
                // line 42
                yield "                          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "startDate", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true);
                yield "
                        ";
            } else {
                // line 44
                yield "                          Open
                        ";
            }
            // line 46
            yield "                        &mdash;
                        ";
            // line 47
            if (CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "endDate", [], "any", false, false, false, 47)) {
                // line 48
                yield "                          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "endDate", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true);
                yield "
                        ";
            } else {
                // line 50
                yield "                          Open
                        ";
            }
            // line 52
            yield "                      </td>
                      <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "dailyStartTime", [], "any", false, false, false, 53), "H:i"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "dailyEndTime", [], "any", false, false, false, 53), "H:i"), "html", null, true);
            yield "</td>
                      <td>
                        <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_new", ["planningId" => CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\"
                           class=\"btn btn-primary btn-sm\">
                          <i class=\"fa fa-calendar-plus\"></i> Book Appointment
                        </a>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 61
        if (!$context['_iterated']) {
            // line 62
            yield "                    <tr>
                      <td colspan=\"5\" class=\"text-center\">No available doctors at the moment.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['planning'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "                </tbody>
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
        return "admin/GestionPlanning/appointment/choose.html.twig";
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
        return array (  208 => 66,  199 => 62,  197 => 61,  186 => 55,  179 => 53,  176 => 52,  172 => 50,  166 => 48,  164 => 47,  161 => 46,  157 => 44,  151 => 42,  149 => 41,  144 => 39,  140 => 38,  137 => 37,  132 => 36,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}Admin - Choose a Doctor{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"page-inner\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\">
            <h4 class=\"card-title\">Choose a Doctor for Appointment</h4>
          </div>
          <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table id=\"planning-table\" class=\"display table table-striped table-hover\">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Doctor</th>
                    <th>Availability</th>
                    <th>Daily Working Hours</th>
                    <th style=\"width: 10%\">Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Doctor</th>
                    <th>Availability</th>
                    <th>Daily Working Hours</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  {% for planning in plannings %}
                    <tr>
                      <td>{{ planning.id }}</td>
                      <td>Dr. {{ planning.doctor.name }}</td>
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
                      <td>
                        <a href=\"{{ path('admin_appointment_new', {'planningId': planning.id}) }}\"
                           class=\"btn btn-primary btn-sm\">
                          <i class=\"fa fa-calendar-plus\"></i> Book Appointment
                        </a>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"5\" class=\"text-center\">No available doctors at the moment.</td>
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
", "admin/GestionPlanning/appointment/choose.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\admin\\GestionPlanning\\appointment\\choose.html.twig");
    }
}
