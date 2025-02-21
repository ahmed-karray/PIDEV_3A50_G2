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

/* admin/gestion_user/editProfile.html.twig */
class __TwigTemplate_05f5cc01ba8346affa35f2549558a016 extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/editProfile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/editProfile.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/gestion_user/editProfile.html.twig", 1);
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
        yield "<div class=\"container\">
  <div class=\"page-inner\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center\">
            <h4 class=\"card-title\">Edit Profile</h4>
          </div>
          <div class=\"card-body\">
            <div class=\"row\">
              <!-- Profile Image & Basic Info -->
              <div class=\"col-md-4 text-center\">
                <img class=\"rounded-circle\" width=\"150\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog\" alt=\"Profile Image\">
                <h5 class=\"mt-3\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "</h5>
                <p class=\"text-muted\">Administrator</p>
                <a href=\"#\" class=\"btn btn-primary btn-sm\">Change Photo</a>
              </div>
              <!-- Profile Edit Form -->
              <div class=\"col-md-8\">
                ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                <div class=\"form-group\">
                  ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                  ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                  <div class=\"text-danger\">
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), 'errors');
        yield "
                  </div>
                </div>

                <div class=\"form-group mt-3\">
                  ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                  ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                  <div class=\"text-danger\">
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'errors');
        yield "
                  </div>
                </div>

                <div class=\"form-group mt-3\">
                  ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "plainPassword", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                  ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "plainPassword", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                  <div class=\"text-danger\">
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "plainPassword", [], "any", false, false, false, 47), 'errors');
        yield "
                  </div>
                </div>

                <div class=\"form-group mt-3\">
                  ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "phoneNumber", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                  ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "phoneNumber", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                  <div class=\"text-danger\">
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "phoneNumber", [], "any", false, false, false, 55), 'errors');
        yield "
                  </div>
                </div>

                <div class=\"form-group mt-3\">
                  ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "country", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                  ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "country", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                  <div class=\"text-danger\">
                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "country", [], "any", false, false, false, 63), 'errors');
        yield "
                  </div>
                </div>

               

                <div class=\"text-end mt-4\">
                  <button type=\"submit\" class=\"btn btn-primary\">Update Profile</button>
                  <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
        yield "\" class=\"btn btn-secondary\">Cancel</a>
                </div>

                ";
        // line 74
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end');
        yield "

                <!-- Delete Account Button -->
                <form method=\"POST\" action=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete");
        yield "\" onsubmit=\"return confirmDelete();\" class=\"mt-3 text-end\">
                  <button type=\"submit\" class=\"btn btn-danger\">Delete Account</button>
                </form>

              </div>
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

    // line 92
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

        // line 93
        yield "<script>
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
        return "admin/gestion_user/editProfile.html.twig";
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
        return array (  269 => 93,  256 => 92,  231 => 77,  225 => 74,  219 => 71,  208 => 63,  203 => 61,  199 => 60,  191 => 55,  186 => 53,  182 => 52,  174 => 47,  169 => 45,  165 => 44,  157 => 39,  152 => 37,  148 => 36,  140 => 31,  135 => 29,  131 => 28,  125 => 25,  116 => 19,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}Edit Profile{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"page-inner\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center\">
            <h4 class=\"card-title\">Edit Profile</h4>
          </div>
          <div class=\"card-body\">
            <div class=\"row\">
              <!-- Profile Image & Basic Info -->
              <div class=\"col-md-4 text-center\">
                <img class=\"rounded-circle\" width=\"150\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog\" alt=\"Profile Image\">
                <h5 class=\"mt-3\">{{ app.user.name }}</h5>
                <p class=\"text-muted\">Administrator</p>
                <a href=\"#\" class=\"btn btn-primary btn-sm\">Change Photo</a>
              </div>
              <!-- Profile Edit Form -->
              <div class=\"col-md-8\">
                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                <div class=\"form-group\">
                  {{ form_label(form.name, null, {'label_attr': {'class': 'form-label'}}) }}
                  {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
                  <div class=\"text-danger\">
                    {{ form_errors(form.name) }}
                  </div>
                </div>

                <div class=\"form-group mt-3\">
                  {{ form_label(form.email, null, {'label_attr': {'class': 'form-label'}}) }}
                  {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                  <div class=\"text-danger\">
                    {{ form_errors(form.email) }}
                  </div>
                </div>

                <div class=\"form-group mt-3\">
                  {{ form_label(form.plainPassword, null, {'label_attr': {'class': 'form-label'}}) }}
                  {{ form_widget(form.plainPassword, {'attr': {'class': 'form-control'}}) }}
                  <div class=\"text-danger\">
                    {{ form_errors(form.plainPassword) }}
                  </div>
                </div>

                <div class=\"form-group mt-3\">
                  {{ form_label(form.phoneNumber, null, {'label_attr': {'class': 'form-label'}}) }}
                  {{ form_widget(form.phoneNumber, {'attr': {'class': 'form-control'}}) }}
                  <div class=\"text-danger\">
                    {{ form_errors(form.phoneNumber) }}
                  </div>
                </div>

                <div class=\"form-group mt-3\">
                  {{ form_label(form.country, null, {'label_attr': {'class': 'form-label'}}) }}
                  {{ form_widget(form.country, {'attr': {'class': 'form-control'}}) }}
                  <div class=\"text-danger\">
                    {{ form_errors(form.country) }}
                  </div>
                </div>

               

                <div class=\"text-end mt-4\">
                  <button type=\"submit\" class=\"btn btn-primary\">Update Profile</button>
                  <a href=\"{{ path('user_profile') }}\" class=\"btn btn-secondary\">Cancel</a>
                </div>

                {{ form_end(form) }}

                <!-- Delete Account Button -->
                <form method=\"POST\" action=\"{{ path('user_delete') }}\" onsubmit=\"return confirmDelete();\" class=\"mt-3 text-end\">
                  <button type=\"submit\" class=\"btn btn-danger\">Delete Account</button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{% endblock %}

{% block javascripts %}
<script>
  function confirmDelete() {
    return confirm(\"Are you sure you want to delete your account? This action cannot be undone.\");
  }
</script>
{% endblock %}
", "admin/gestion_user/editProfile.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\admin\\gestion_user\\editProfile.html.twig");
    }
}
