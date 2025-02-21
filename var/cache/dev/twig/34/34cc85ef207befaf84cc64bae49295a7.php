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

/* GestionPlanning/appointment/new.html.twig */
class __TwigTemplate_cfe82543c9890c551565bcd6d2e9e295 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionPlanning/appointment/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionPlanning/appointment/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "GestionPlanning/appointment/new.html.twig", 1);
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

        yield "Book Appointment";
        
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
    <div class=\"card shadow-lg p-4\">
        <h1 class=\"mb-4\">Book Appointment</h1>

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 11
            yield "            <div class=\"alert alert-";
            yield ((($context["label"] == "error")) ? ("danger") : ("success"));
            yield " alert-dismissible fade show\" role=\"alert\">
                ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["messages"]), "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
        ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "  
            <div class=\"form-group mb-3\">
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "appointmentDate", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Appointment Date"]);
        yield "
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "appointmentDate", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "appointmentDate", [], "any", false, false, false, 21), 'errors');
        yield "
            </div>

            <div class=\"form-group mb-3\">
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "startAt", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Time Slot"]);
        yield "
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "startAt", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "startAt", [], "any", false, false, false, 27), 'errors');
        yield "
            </div>

            <button type=\"submit\" class=\"btn btn-success btn-lg\">Book Appointment</button>
        ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        yield "
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
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39));
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

                // Add placeholder.
                const placeholderOption = document.createElement('option');
                placeholderOption.value = '';
                placeholderOption.text = 'Select a time slot';
                timeSlotSelect.appendChild(placeholderOption);

                // Populate with available slots.
                for (const [display, time] of Object.entries(data)) {
                    const option = document.createElement('option');
                    option.value = time; // e.g., \"08:00:00\"
                    option.text = display; // e.g., \"08:00\"
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

    // Trigger update if a date is pre-selected.
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
        return "GestionPlanning/appointment/new.html.twig";
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
        return array (  186 => 42,  180 => 39,  176 => 38,  172 => 37,  163 => 31,  156 => 27,  152 => 26,  148 => 25,  141 => 21,  137 => 20,  133 => 19,  128 => 17,  125 => 16,  115 => 12,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Book Appointment{% endblock %}

{% block content %}
<div class=\"container mt-4\">
    <div class=\"card shadow-lg p-4\">
        <h1 class=\"mb-4\">Book Appointment</h1>

        {% for label, messages in app.flashes %}
            <div class=\"alert alert-{{ label == 'error' ? 'danger' : 'success' }} alert-dismissible fade show\" role=\"alert\">
                {{ messages | first }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}

        {{ form_start(form, { 'attr': { 'novalidate': 'novalidate' } }) }}  
            <div class=\"form-group mb-3\">
                {{ form_label(form.appointmentDate, 'Appointment Date', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.appointmentDate, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.appointmentDate) }}
            </div>

            <div class=\"form-group mb-3\">
                {{ form_label(form.startAt, 'Time Slot', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.startAt, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.startAt) }}
            </div>

            <button type=\"submit\" class=\"btn btn-success btn-lg\">Book Appointment</button>
        {{ form_end(form) }}
    </div>
</div>

<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    const appointmentDateInput = document.querySelector('#{{ form.appointmentDate.vars.id }}');
    const timeSlotSelect = document.querySelector('#{{ form.startAt.vars.id }}');
    const planningId = {{ planning.id|json_encode|raw }};

    function updateTimeSlots(dateValue) {
        let url = '{{ path(\"appointment_available_times\", {\"planningId\": \"__PLANNING_ID__\"}) }}';
        url = url.replace('__PLANNING_ID__', planningId) + '?date=' + dateValue;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Clear current options.
                timeSlotSelect.innerHTML = '';

                // Add placeholder.
                const placeholderOption = document.createElement('option');
                placeholderOption.value = '';
                placeholderOption.text = 'Select a time slot';
                timeSlotSelect.appendChild(placeholderOption);

                // Populate with available slots.
                for (const [display, time] of Object.entries(data)) {
                    const option = document.createElement('option');
                    option.value = time; // e.g., \"08:00:00\"
                    option.text = display; // e.g., \"08:00\"
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

    // Trigger update if a date is pre-selected.
    if (appointmentDateInput.value) {
        updateTimeSlots(appointmentDateInput.value);
    }
});
</script>
{% endblock %}
", "GestionPlanning/appointment/new.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\GestionPlanning\\appointment\\new.html.twig");
    }
}
