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

/* GestionPlanning/appointment/index.html.twig */
class __TwigTemplate_54413def07cd2fb20a4a4f682c1ab3b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionPlanning/appointment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionPlanning/appointment/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "GestionPlanning/appointment/index.html.twig", 1);
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

        yield "My Appointments";
        
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
    <div class=\"d-flex justify-content-between align-items-center mb-3\">
        <h1 class=\"mb-0\">My Appointments</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_choose");
        yield "\" class=\"btn btn-success\">+ Add Appointment</a>
    </div>

    <div class=\"card shadow-lg p-4\">
        <table class=\"table table-striped table-bordered\">
            <thead class=\"table-dark text-center\">
                <tr>
                    <th>ID</th>
                    <th>Doctor</th>
                    <th>Appointment Date & Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 24
            yield "                <tr>
                    <td class=\"text-center\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                    <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "planning", [], "any", false, false, false, 26), "doctor", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                    <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "startAt", [], "any", false, false, false, 27), "Y-m-d H:i"), "html", null, true);
            yield "</td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Show</a>
                        <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Edit</a>
                        <form method=\"post\" action=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure?');\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 32))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">Delete</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 37
        if (!$context['_iterated']) {
            // line 38
            yield "                <tr><td colspan=\"4\" class=\"text-center\">No appointments found.</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['appointment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        return "GestionPlanning/appointment/index.html.twig";
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
        return array (  174 => 40,  167 => 38,  165 => 37,  155 => 32,  151 => 31,  147 => 30,  143 => 29,  138 => 27,  134 => 26,  130 => 25,  127 => 24,  122 => 23,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Appointments{% endblock %}

{% block content %}
<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-3\">
        <h1 class=\"mb-0\">My Appointments</h1>
        <a href=\"{{ path('appointment_choose') }}\" class=\"btn btn-success\">+ Add Appointment</a>
    </div>

    <div class=\"card shadow-lg p-4\">
        <table class=\"table table-striped table-bordered\">
            <thead class=\"table-dark text-center\">
                <tr>
                    <th>ID</th>
                    <th>Doctor</th>
                    <th>Appointment Date & Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for appointment in appointments %}
                <tr>
                    <td class=\"text-center\">{{ appointment.id }}</td>
                    <td>{{ appointment.planning.doctor.name }}</td>
                    <td>{{ appointment.startAt|date('Y-m-d H:i') }}</td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('appointment_show', {'id': appointment.id}) }}\" class=\"btn btn-info btn-sm\">Show</a>
                        <a href=\"{{ path('appointment_edit', {'id': appointment.id}) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
                        <form method=\"post\" action=\"{{ path('appointment_delete', {'id': appointment.id}) }}\" onsubmit=\"return confirm('Are you sure?');\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ appointment.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">Delete</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr><td colspan=\"4\" class=\"text-center\">No appointments found.</td></tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "GestionPlanning/appointment/index.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\GestionPlanning\\appointment\\index.html.twig");
    }
}
