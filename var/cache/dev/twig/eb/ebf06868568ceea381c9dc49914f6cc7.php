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

/* gestion_user/profile/edit.html.twig */
class __TwigTemplate_f243353d4cd1594b0953589be3c4bede extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/profile/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion_user/profile/edit.html.twig", 1);
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

        yield "Edit Profile";
        
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
        yield "<!-- Edit Profile Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
            <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Profile</h5>
            <h1 class=\"display-4\">Edit Your Profile</h1>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Edit Profile</h4>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                        <div class=\"form-group\">
                            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'label');
        yield "
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 'errors');
        yield "
                        </div>

                        <div class=\"form-group mt-3\">
                            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'label');
        yield "
                            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'errors');
        yield "
                        </div>

                        <div class=\"form-group mt-3\">
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "plainPassword", [], "any", false, false, false, 35), 'label');
        yield "
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "plainPassword", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), 'errors');
        yield "
                        </div>

                        <div class=\"form-group mt-3\">
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "age", [], "any", false, false, false, 41), 'label');
        yield "
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "age", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "age", [], "any", false, false, false, 43), 'errors');
        yield "
                        </div>

                        <div class=\"form-group mt-3\">
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "phoneNumber", [], "any", false, false, false, 47), 'label');
        yield "
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "phoneNumber", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "phoneNumber", [], "any", false, false, false, 49), 'errors');
        yield "
                        </div>

                        <div class=\"form-group mt-3\">
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "country", [], "any", false, false, false, 53), 'label');
        yield "
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "country", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "country", [], "any", false, false, false, 55), 'errors');
        yield "
                        </div>

                        <div class=\"form-group mt-3\">
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "therapyType", [], "any", false, false, false, 59), 'label');
        yield "
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "therapyType", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "therapyType", [], "any", false, false, false, 61), 'errors');
        yield "
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary mt-4\">Update Profile</button>
                        ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>

            <!-- Delete Button -->
            <form method=\"POST\" action=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete");
        yield "\" onsubmit=\"return confirmDelete();\">
                <button type=\"submit\" class=\"btn btn-danger mt-3\">Delete Account</button>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Profile End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        yield "
<script>
    function confirmDelete() {
        return confirm(\"Are you sure you want to delete your account? This action cannot be undone.\");
    }
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
        return "gestion_user/profile/edit.html.twig";
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
        return array (  269 => 82,  256 => 81,  236 => 70,  228 => 65,  221 => 61,  217 => 60,  213 => 59,  206 => 55,  202 => 54,  198 => 53,  191 => 49,  187 => 48,  183 => 47,  176 => 43,  172 => 42,  168 => 41,  161 => 37,  157 => 36,  153 => 35,  146 => 31,  142 => 30,  138 => 29,  131 => 25,  127 => 24,  123 => 23,  117 => 20,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Profile{% endblock %}

{% block content %}
<!-- Edit Profile Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
            <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Profile</h5>
            <h1 class=\"display-4\">Edit Your Profile</h1>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Edit Profile</h4>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                        <div class=\"form-group\">
                            {{ form_label(form.name) }}
                            {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.name) }}
                        </div>

                        <div class=\"form-group mt-3\">
                            {{ form_label(form.email) }}
                            {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.email) }}
                        </div>

                        <div class=\"form-group mt-3\">
                            {{ form_label(form.plainPassword) }}
                            {{ form_widget(form.plainPassword, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.plainPassword) }}
                        </div>

                        <div class=\"form-group mt-3\">
                            {{ form_label(form.age) }}
                            {{ form_widget(form.age, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.age) }}
                        </div>

                        <div class=\"form-group mt-3\">
                            {{ form_label(form.phoneNumber) }}
                            {{ form_widget(form.phoneNumber, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.phoneNumber) }}
                        </div>

                        <div class=\"form-group mt-3\">
                            {{ form_label(form.country) }}
                            {{ form_widget(form.country, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.country) }}
                        </div>

                        <div class=\"form-group mt-3\">
                            {{ form_label(form.therapyType) }}
                            {{ form_widget(form.therapyType, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.therapyType) }}
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary mt-4\">Update Profile</button>
                        {{ form_end(form) }}
                    </div>
                </div>

            <!-- Delete Button -->
            <form method=\"POST\" action=\"{{path('user_delete')}}\" onsubmit=\"return confirmDelete();\">
                <button type=\"submit\" class=\"btn btn-danger mt-3\">Delete Account</button>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Profile End -->
{% endblock %}


{% block javascripts %}

<script>
    function confirmDelete() {
        return confirm(\"Are you sure you want to delete your account? This action cannot be undone.\");
    }
</script>

{% endblock %}

", "gestion_user/profile/edit.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\gestion_user\\profile\\edit.html.twig");
    }
}
