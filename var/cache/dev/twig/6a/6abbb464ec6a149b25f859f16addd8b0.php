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

/* admin/gestion_user/create_doctor.html.twig */
class __TwigTemplate_57a671f9be88623a8bb636c9fe7216ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/create_doctor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/create_doctor.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/gestion_user/create_doctor.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"container\">
    <div class=\"page-inner\">
        <div class=\"container mt-4\">
        <div class=\"card\">
            <div class=\"card-header\">
            <h4>Inscription Médecin</h4>
            </div>
            <div class=\"card-body\">
            ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "
            
            <div class=\"form-group mb-3\">
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Nom"]);
        yield "
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'errors');
        yield "
            </div>

            <div class=\"form-group mb-3\">
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Email"]);
        yield "
                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'errors');
        yield "
            </div>

            <div class=\"form-group mb-3\">
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 27, $this->source); })()), "plainPassword", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Mot de passe"]);
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 28, $this->source); })()), "plainPassword", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 29, $this->source); })()), "plainPassword", [], "any", false, false, false, 29), 'errors');
        yield "
            </div>

            <div class=\"form-group mb-3\">
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 33, $this->source); })()), "doctorType", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Type de Médecin"]);
        yield "
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 34, $this->source); })()), "doctorType", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 35, $this->source); })()), "doctorType", [], "any", false, false, false, 35), 'errors');
        yield "
            </div>

            <div class=\"form-group mb-3\">
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 39, $this->source); })()), "diploma", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Diplôme (optionnel)"]);
        yield "
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 40, $this->source); })()), "diploma", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 41, $this->source); })()), "diploma", [], "any", false, false, false, 41), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
            </div>
            
            ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 48, $this->source); })()), 'form_end');
        yield "
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
        return "admin/gestion_user/create_doctor.html.twig";
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
        return array (  170 => 48,  160 => 41,  156 => 40,  152 => 39,  145 => 35,  141 => 34,  137 => 33,  130 => 29,  126 => 28,  122 => 27,  115 => 23,  111 => 22,  107 => 21,  100 => 17,  96 => 16,  92 => 15,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block content %}
<div class=\"container\">
    <div class=\"page-inner\">
        <div class=\"container mt-4\">
        <div class=\"card\">
            <div class=\"card-header\">
            <h4>Inscription Médecin</h4>
            </div>
            <div class=\"card-body\">
            {{ form_start(doctorRegistrationForm, { 'attr': { 'class': 'form-horizontal' } }) }}
            
            <div class=\"form-group mb-3\">
                {{ form_label(doctorRegistrationForm.name, 'Nom', {'label_attr': {'class': 'control-label'}}) }}
                {{ form_widget(doctorRegistrationForm.name, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(doctorRegistrationForm.name) }}
            </div>

            <div class=\"form-group mb-3\">
                {{ form_label(doctorRegistrationForm.email, 'Email', {'label_attr': {'class': 'control-label'}}) }}
                {{ form_widget(doctorRegistrationForm.email, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(doctorRegistrationForm.email) }}
            </div>

            <div class=\"form-group mb-3\">
                {{ form_label(doctorRegistrationForm.plainPassword, 'Mot de passe', {'label_attr': {'class': 'control-label'}}) }}
                {{ form_widget(doctorRegistrationForm.plainPassword, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(doctorRegistrationForm.plainPassword) }}
            </div>

            <div class=\"form-group mb-3\">
                {{ form_label(doctorRegistrationForm.doctorType, 'Type de Médecin', {'label_attr': {'class': 'control-label'}}) }}
                {{ form_widget(doctorRegistrationForm.doctorType, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(doctorRegistrationForm.doctorType) }}
            </div>

            <div class=\"form-group mb-3\">
                {{ form_label(doctorRegistrationForm.diploma, 'Diplôme (optionnel)', {'label_attr': {'class': 'control-label'}}) }}
                {{ form_widget(doctorRegistrationForm.diploma, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(doctorRegistrationForm.diploma) }}
            </div>

            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
            </div>
            
            {{ form_end(doctorRegistrationForm) }}
            </div>
        </div>
    </div>
    </div>
</div>

{% endblock %}
", "admin/gestion_user/create_doctor.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\admin\\gestion_user\\create_doctor.html.twig");
    }
}
