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

/* admin/GestionPlanning/appointment/edit.html.twig */
class __TwigTemplate_c1f733103de54ba34a8d1cecfd284a2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionPlanning/appointment/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionPlanning/appointment/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/GestionPlanning/appointment/edit.html.twig", 1);
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

        yield "Edit Appointment";
        
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
          <div class=\"card-header d-flex align-items-center\">
            <h4 class=\"card-title\">Edit Appointment</h4>
          </div>
          <div class=\"card-body\">
            ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        yield "
              <div class=\"form-group\">
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "appointmentDate", [], "any", false, false, false, 17), 'label');
        yield "
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "appointmentDate", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "appointmentDate", [], "any", false, false, false, 19), 'errors');
        yield "
              </div>
              <div class=\"form-group mt-3\">
                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "startAt", [], "any", false, false, false, 22), 'label');
        yield "
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "startAt", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "startAt", [], "any", false, false, false, 24), 'errors');
        yield "
              </div>
              <button type=\"submit\" class=\"btn btn-primary mt-3\">Update</button>
            ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        yield "
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    const appointmentDateInput = document.querySelector('#";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "appointmentDate", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
        yield "');
    const timeSlotSelect = document.querySelector('#";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "startAt", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
        yield "');
    const planningId = ";
        // line 39
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 39, $this->source); })()), "planning", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39));
        yield ";

    function updateTimeSlots(dateValue) {
        let url = '";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_available_times", ["planningId" => "__PLANNING_ID__"]);
        yield "';
        url = url.replace('__PLANNING_ID__', planningId) + '?date=' + dateValue;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Clear current options.
                timeSlotSelect.innerHTML = '';

                // Add a placeholder option.
                const placeholderOption = document.createElement('option');
                placeholderOption.value = '';
                placeholderOption.text = 'Select a time slot';
                timeSlotSelect.appendChild(placeholderOption);

                // Populate with available slots.
                for (const [display, time] of Object.entries(data)) {
                    const option = document.createElement('option');
                    option.value = time;
                    option.text = display;
                    timeSlotSelect.appendChild(option);
                }
            })
            .catch(error => {
                console.error('Error fetching time slots:', error);
            });
    }

    appointmentDateInput.addEventListener('change', function() {
        if (this.value) {
            updateTimeSlots(this.value);
        }
    });

    // Trigger update on page load if a date is pre-selected.
    if (appointmentDateInput.value) {
        updateTimeSlots(appointmentDateInput.value);
    }
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
        return "admin/GestionPlanning/appointment/edit.html.twig";
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
        return array (  171 => 42,  165 => 39,  161 => 38,  157 => 37,  144 => 27,  138 => 24,  134 => 23,  130 => 22,  124 => 19,  120 => 18,  116 => 17,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}Edit Appointment{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"page-inner\">
    <div class=\"row justify-content-center\">
      <div class=\"col-md-8\">
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center\">
            <h4 class=\"card-title\">Edit Appointment</h4>
          </div>
          <div class=\"card-body\">
            {{ form_start(form) }}
              <div class=\"form-group\">
                {{ form_label(form.appointmentDate) }}
                {{ form_widget(form.appointmentDate, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.appointmentDate) }}
              </div>
              <div class=\"form-group mt-3\">
                {{ form_label(form.startAt) }}
                {{ form_widget(form.startAt, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.startAt) }}
              </div>
              <button type=\"submit\" class=\"btn btn-primary mt-3\">Update</button>
            {{ form_end(form) }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    const appointmentDateInput = document.querySelector('#{{ form.appointmentDate.vars.id }}');
    const timeSlotSelect = document.querySelector('#{{ form.startAt.vars.id }}');
    const planningId = {{ appointment.planning.id|json_encode|raw }};

    function updateTimeSlots(dateValue) {
        let url = '{{ path(\"appointment_available_times\", {\"planningId\": \"__PLANNING_ID__\"}) }}';
        url = url.replace('__PLANNING_ID__', planningId) + '?date=' + dateValue;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Clear current options.
                timeSlotSelect.innerHTML = '';

                // Add a placeholder option.
                const placeholderOption = document.createElement('option');
                placeholderOption.value = '';
                placeholderOption.text = 'Select a time slot';
                timeSlotSelect.appendChild(placeholderOption);

                // Populate with available slots.
                for (const [display, time] of Object.entries(data)) {
                    const option = document.createElement('option');
                    option.value = time;
                    option.text = display;
                    timeSlotSelect.appendChild(option);
                }
            })
            .catch(error => {
                console.error('Error fetching time slots:', error);
            });
    }

    appointmentDateInput.addEventListener('change', function() {
        if (this.value) {
            updateTimeSlots(this.value);
        }
    });

    // Trigger update on page load if a date is pre-selected.
    if (appointmentDateInput.value) {
        updateTimeSlots(appointmentDateInput.value);
    }
});
</script>
{% endblock %}
", "admin/GestionPlanning/appointment/edit.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\admin\\GestionPlanning\\appointment\\edit.html.twig");
    }
}
