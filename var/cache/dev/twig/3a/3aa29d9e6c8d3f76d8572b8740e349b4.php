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

/* admin/GestionPlanning/appointment/user_appointments.html.twig */
class __TwigTemplate_135ef93233bbfea2308f5098ef37d011 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionPlanning/appointment/user_appointments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionPlanning/appointment/user_appointments.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/GestionPlanning/appointment/user_appointments.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield "'s Appointments";
        
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
              <h4 class=\"card-title\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "'s Appointments</h4>
              <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_choose_planning", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-round ms-auto\">
                <i class=\"fa fa-plus\"></i> Add Appointment
                </a>

            </div>
          </div>
          <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table class=\"display table table-striped table-hover\">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Planning</th>
                    <th>Date & Time</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 33
            yield "                    <tr>
                      <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                      <td>";
            // line 35
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planning", [], "any", false, false, false, 35)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planning", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), "html", null, true)) : ("N/A"));
            yield "</td>
                      <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "startAt", [], "any", false, false, false, 36), "Y-m-d H:i"), "html", null, true);
            yield "</td>
                      <td>
                        <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">
                          <i class=\"fa fa-edit\"></i> Edit
                        </a>
                        <form method=\"post\" action=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure?');\" style=\"display:inline;\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 42))), "html", null, true);
            yield "\">
                          <button type=\"submit\" class=\"btn btn-sm btn-danger\">
                            <i class=\"fa fa-times\"></i> Delete
                          </button>
                        </form>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 49
        if (!$context['_iterated']) {
            // line 50
            yield "                    <tr>
                      <td colspan=\"4\">No appointments found.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['appointment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "                </tbody>
              </table>
            </div>
            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointments");
        yield "\" class=\"btn btn-secondary\">Back to Users</a>
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
        return "admin/GestionPlanning/appointment/user_appointments.html.twig";
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
        return array (  194 => 57,  189 => 54,  180 => 50,  178 => 49,  166 => 42,  162 => 41,  156 => 38,  151 => 36,  147 => 35,  143 => 34,  140 => 33,  135 => 32,  114 => 14,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}{{ user.name }}'s Appointments{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"page-inner\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\">
            <div class=\"d-flex align-items-center\">
              <h4 class=\"card-title\">{{ user.name }}'s Appointments</h4>
              <a href=\"{{ path('admin_appointment_choose_planning', {'id': user.id}) }}\" class=\"btn btn-primary btn-round ms-auto\">
                <i class=\"fa fa-plus\"></i> Add Appointment
                </a>

            </div>
          </div>
          <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table class=\"display table table-striped table-hover\">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Planning</th>
                    <th>Date & Time</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  {% for appointment in appointments %}
                    <tr>
                      <td>{{ appointment.id }}</td>
                      <td>{{ appointment.planning ? appointment.planning.id : 'N/A' }}</td>
                      <td>{{ appointment.startAt|date('Y-m-d H:i') }}</td>
                      <td>
                        <a href=\"{{ path('admin_appointment_edit', {'id': appointment.id}) }}\" class=\"btn btn-sm btn-warning\">
                          <i class=\"fa fa-edit\"></i> Edit
                        </a>
                        <form method=\"post\" action=\"{{ path('admin_appointment_delete', {'id': appointment.id}) }}\" onsubmit=\"return confirm('Are you sure?');\" style=\"display:inline;\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ appointment.id) }}\">
                          <button type=\"submit\" class=\"btn btn-sm btn-danger\">
                            <i class=\"fa fa-times\"></i> Delete
                          </button>
                        </form>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"4\">No appointments found.</td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
            <a href=\"{{ path('admin_appointments') }}\" class=\"btn btn-secondary\">Back to Users</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "admin/GestionPlanning/appointment/user_appointments.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\admin\\GestionPlanning\\appointment\\user_appointments.html.twig");
    }
}
