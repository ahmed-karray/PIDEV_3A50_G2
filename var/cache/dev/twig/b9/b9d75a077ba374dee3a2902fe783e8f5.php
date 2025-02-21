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

/* GestionPlanning/planning/show.html.twig */
class __TwigTemplate_2319fcf52e293589f96d521cf7accd73 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionPlanning/planning/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionPlanning/planning/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "GestionPlanning/planning/show.html.twig", 1);
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

        yield "Planning Details";
        
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
        <h1 class=\"text-center mb-4\">Planning Details</h1>

        <ul class=\"list-group\">
            <li class=\"list-group-item\"><strong>ID:</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</li>
            <li class=\"list-group-item\"><strong>Date:</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 12, $this->source); })()), "startDate", [], "any", false, false, false, 12), "Y-m-d"), "html", null, true);
        yield "</li>
            <li class=\"list-group-item\"><strong>Working Hours:</strong> 
                ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 14, $this->source); })()), "dailyStartTime", [], "any", false, false, false, 14), "H:i"), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 14, $this->source); })()), "dailyEndTime", [], "any", false, false, false, 14), "H:i"), "html", null, true);
        yield "
            </li>
            <li class=\"list-group-item\"><strong>Doctor:</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 16, $this->source); })()), "doctor", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "</li>
        </ul>

        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning_index");
        yield "\" class=\"btn btn-secondary\">Back to List</a>
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
        return "GestionPlanning/planning/show.html.twig";
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
        return array (  130 => 20,  123 => 16,  116 => 14,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Planning Details{% endblock %}

{% block content %}
<div class=\"container mt-4\">
    <div class=\"card shadow-lg p-4\">
        <h1 class=\"text-center mb-4\">Planning Details</h1>

        <ul class=\"list-group\">
            <li class=\"list-group-item\"><strong>ID:</strong> {{ planning.id }}</li>
            <li class=\"list-group-item\"><strong>Date:</strong> {{ planning.startDate|date('Y-m-d') }}</li>
            <li class=\"list-group-item\"><strong>Working Hours:</strong> 
                {{ planning.dailyStartTime|date('H:i') }} - {{ planning.dailyEndTime|date('H:i') }}
            </li>
            <li class=\"list-group-item\"><strong>Doctor:</strong> {{ planning.doctor.name }}</li>
        </ul>

        <div class=\"text-center mt-4\">
            <a href=\"{{ path('planning_index') }}\" class=\"btn btn-secondary\">Back to List</a>
        </div>
    </div>
</div>
{% endblock %}
", "GestionPlanning/planning/show.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\GestionPlanning\\planning\\show.html.twig");
    }
}
