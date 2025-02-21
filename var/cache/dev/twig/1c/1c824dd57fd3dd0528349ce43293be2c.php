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

/* admin/gestion_user/edit_doctor.html.twig */
class __TwigTemplate_bd2b1f3a5569d1d6ef0df38effb9e601 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/edit_doctor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/edit_doctor.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/gestion_user/edit_doctor.html.twig", 1);
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
        yield "<div class=\"container mt-4\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4>Modifier le Médecin</h4>
    </div>
    <div class=\"card-body\">
      ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "novalidate" => "novalidate"]]);
        yield "
      
      <div class=\"form-group mb-3\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Nom"]);
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'errors');
        yield "
      </div>
      
      <div class=\"form-group mb-3\">
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Email"]);
        yield "
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'errors');
        yield "
      </div>
      
      <div class=\"form-group mb-3\">
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 25, $this->source); })()), "plainPassword", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Mot de passe"]);
        yield "
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 26, $this->source); })()), "plainPassword", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Laisser vide si inchangé"]]);
        yield "
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 27, $this->source); })()), "plainPassword", [], "any", false, false, false, 27), 'errors');
        yield "
      </div>
      
      <div class=\"form-group mb-3\">
        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 31, $this->source); })()), "doctorType", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Type de Médecin"]);
        yield "
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 32, $this->source); })()), "doctorType", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 33, $this->source); })()), "doctorType", [], "any", false, false, false, 33), 'errors');
        yield "
      </div>
      
      <div class=\"form-group mb-3\">
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 37, $this->source); })()), "diploma", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Diplôme (optionnel)"]);
        yield "
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 38, $this->source); })()), "diploma", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 39, $this->source); })()), "diploma", [], "any", false, false, false, 39), 'errors');
        yield "
      </div>
      
      <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
      </div>
      
      ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 46, $this->source); })()), 'form_end');
        yield "
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
        return "admin/gestion_user/edit_doctor.html.twig";
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
        return array (  168 => 46,  158 => 39,  154 => 38,  150 => 37,  143 => 33,  139 => 32,  135 => 31,  128 => 27,  124 => 26,  120 => 25,  113 => 21,  109 => 20,  105 => 19,  98 => 15,  94 => 14,  90 => 13,  84 => 10,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block content %}
<div class=\"container mt-4\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4>Modifier le Médecin</h4>
    </div>
    <div class=\"card-body\">
      {{ form_start(userForm, { 'attr': { 'class': 'form-horizontal', 'novalidate': 'novalidate' } }) }}
      
      <div class=\"form-group mb-3\">
        {{ form_label(userForm.name, 'Nom', {'label_attr': {'class': 'control-label'}}) }}
        {{ form_widget(userForm.name, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(userForm.name) }}
      </div>
      
      <div class=\"form-group mb-3\">
        {{ form_label(userForm.email, 'Email', {'label_attr': {'class': 'control-label'}}) }}
        {{ form_widget(userForm.email, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(userForm.email) }}
      </div>
      
      <div class=\"form-group mb-3\">
        {{ form_label(userForm.plainPassword, 'Mot de passe', {'label_attr': {'class': 'control-label'}}) }}
        {{ form_widget(userForm.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Laisser vide si inchangé'}}) }}
        {{ form_errors(userForm.plainPassword) }}
      </div>
      
      <div class=\"form-group mb-3\">
        {{ form_label(userForm.doctorType, 'Type de Médecin', {'label_attr': {'class': 'control-label'}}) }}
        {{ form_widget(userForm.doctorType, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(userForm.doctorType) }}
      </div>
      
      <div class=\"form-group mb-3\">
        {{ form_label(userForm.diploma, 'Diplôme (optionnel)', {'label_attr': {'class': 'control-label'}}) }}
        {{ form_widget(userForm.diploma, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(userForm.diploma) }}
      </div>
      
      <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
      </div>
      
      {{ form_end(userForm) }}
    </div>
  </div>
</div>
{% endblock %}
", "admin/gestion_user/edit_doctor.html.twig", "C:\\Users\\MSI\\Desktop\\PIDEV_3A50_G2\\templates\\admin\\gestion_user\\edit_doctor.html.twig");
    }
}
