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

/* GestionPlanning/appointment/edit.html.twig */
class __TwigTemplate_c37c353299821c67eb70513bb3874655 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionPlanning/appointment/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionPlanning/appointment/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "GestionPlanning/appointment/edit.html.twig", 1);
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
        yield "<div class=\"container mt-4\">
    <div class=\"card shadow-lg p-4\">
        <h1 class=\"mb-4\">Edit Appointment</h1>

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "            <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
        ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            <div class=\"form-group mb-3\">
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "appointmentDate", [], "any", false, false, false, 20), 'label');
        yield "
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "appointmentDate", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "value" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 24, $this->source); })()), "startAt", [], "any", false, false, false, 24)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 24, $this->source); })()), "startAt", [], "any", false, false, false, 24), "Y-m-d")) : (""))]]);
        // line 26
        yield "
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "appointmentDate", [], "any", false, false, false, 27), 'errors');
        yield "
            </div>
            <div class=\"form-group mb-3\">
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "startAt", [], "any", false, false, false, 30), 'label');
        yield "
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "startAt", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "value" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 34, $this->source); })()), "startAt", [], "any", false, false, false, 34)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 34, $this->source); })()), "startAt", [], "any", false, false, false, 34), "H:i")) : (""))]]);
        // line 36
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "startAt", [], "any", false, false, false, 37), 'errors');
        yield "
            </div>
            <button class=\"btn btn-primary\">Update Appointment</button>
        ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    const appointmentDateInput = document.querySelector('#";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "appointmentDate", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
        yield "');
    const timeSlotSelect = document.querySelector('#";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "startAt", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
        yield "');
    const planningId = ";
        // line 48
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 48, $this->source); })()), "planning", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48));
        yield ";

    function updateTimeSlots(dateValue) {
        let url = '";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_available_times", ["planningId" => "__PLANNING_ID__"]);
        yield "';
        url = url.replace('__PLANNING_ID__', planningId) + '?date=' + dateValue;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                timeSlotSelect.innerHTML = '';
                const placeholderOption = document.createElement('option');
                placeholderOption.value = '';
                placeholderOption.text = 'Select a time slot';
                timeSlotSelect.appendChild(placeholderOption);

                for (const [display, time] of Object.entries(data)) {
                    const option = document.createElement('option');
                    option.value = time;
                    option.text = display;
                    timeSlotSelect.appendChild(option);
                }
            })
            .catch(error => {
                console.error('Error fetching available time slots:', error);
            });
    }

    appointmentDateInput.addEventListener('change', function() {
        if (this.value) {
            updateTimeSlots(this.value);
        }
    });

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
        return "GestionPlanning/appointment/edit.html.twig";
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
        return array (  198 => 51,  192 => 48,  188 => 47,  184 => 46,  175 => 40,  169 => 37,  166 => 36,  164 => 34,  163 => 31,  159 => 30,  153 => 27,  150 => 26,  148 => 24,  147 => 21,  143 => 20,  138 => 18,  135 => 17,  126 => 15,  122 => 14,  119 => 13,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Appointment{% endblock %}

{% block content %}
<div class=\"container mt-4\">
    <div class=\"card shadow-lg p-4\">
        <h1 class=\"mb-4\">Edit Appointment</h1>

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {% endfor %}

        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endfor %}

        {{ form_start(form, { 'attr': { 'novalidate': 'novalidate' } }) }}
            <div class=\"form-group mb-3\">
                {{ form_label(form.appointmentDate) }}
                {{ form_widget(form.appointmentDate, {
                    'attr': {
                        'class': 'form-control',
                        'value': appointment.startAt ? appointment.startAt|date('Y-m-d') : ''
                    }
                }) }}
                {{ form_errors(form.appointmentDate) }}
            </div>
            <div class=\"form-group mb-3\">
                {{ form_label(form.startAt) }}
                {{ form_widget(form.startAt, {
                    'attr': {
                        'class': 'form-control',
                        'value': appointment.startAt ? appointment.startAt|date('H:i') : ''
                    }
                }) }}
                {{ form_errors(form.startAt) }}
            </div>
            <button class=\"btn btn-primary\">Update Appointment</button>
        {{ form_end(form) }}
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
                timeSlotSelect.innerHTML = '';
                const placeholderOption = document.createElement('option');
                placeholderOption.value = '';
                placeholderOption.text = 'Select a time slot';
                timeSlotSelect.appendChild(placeholderOption);

                for (const [display, time] of Object.entries(data)) {
                    const option = document.createElement('option');
                    option.value = time;
                    option.text = display;
                    timeSlotSelect.appendChild(option);
                }
            })
            .catch(error => {
                console.error('Error fetching available time slots:', error);
            });
    }

    appointmentDateInput.addEventListener('change', function() {
        if (this.value) {
            updateTimeSlots(this.value);
        }
    });

    if (appointmentDateInput.value) {
        updateTimeSlots(appointmentDateInput.value);
    }
});
</script>
{% endblock %}
", "GestionPlanning/appointment/edit.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\GestionPlanning\\appointment\\edit.html.twig");
    }
}
