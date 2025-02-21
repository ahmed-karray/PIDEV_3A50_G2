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

/* gestion_user/registration/doctor_register.html.twig */
class __TwigTemplate_2fbd2c04de24ebeb5ce45aedcbacc476 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/registration/doctor_register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/registration/doctor_register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Doctor Registration | Your App Name</title>
  <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/registration.css"), "html", null, true);
        yield "\">
</head>
<body>
  <div class=\"wrapper\">
    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "glassmorphism-form", "novalidate" => "novalidate"]]);
        yield "
    <h2>Register as Doctor</h2>

    ";
        // line 15
        yield "    <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'errors')) ? ("has-error") : (""));
        yield "\">
      ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'label', ["label" => "Enter your name"]);
        yield "
    </div>
    ";
        // line 19
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'errors')) {
            // line 20
            yield "      <div class=\"form-error\">
        ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), 'errors');
            yield "
      </div>
    ";
        }
        // line 24
        yield "
    ";
        // line 26
        yield "    <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'errors')) ? ("has-error") : (""));
        yield "\">
      ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'label', ["label" => "Enter your email"]);
        yield "
    </div>
    ";
        // line 30
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'errors')) {
            // line 31
            yield "      <div class=\"form-error\">
        ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'errors');
            yield "
      </div>
    ";
        }
        // line 35
        yield "
    ";
        // line 37
        yield "    <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), 'errors')) ? ("has-error") : (""));
        yield "\">
      ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 38, $this->source); })()), "plainPassword", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 39, $this->source); })()), "plainPassword", [], "any", false, false, false, 39), 'label', ["label" => "Enter your password"]);
        yield "
    </div>
    ";
        // line 41
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), 'errors')) {
            // line 42
            yield "      <div class=\"form-error\">
        ";
            // line 43
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), 'errors');
            yield "
      </div>
    ";
        }
        // line 46
        yield "
    ";
        // line 48
        yield "    <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 48, $this->source); })()), "doctorType", [], "any", false, false, false, 48), 'errors')) ? ("has-error") : (""));
        yield "\">
      ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 49, $this->source); })()), "doctorType", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>
    ";
        // line 51
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 51, $this->source); })()), "doctorType", [], "any", false, false, false, 51), 'errors')) {
            // line 52
            yield "      <div class=\"form-error\">
        ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 53, $this->source); })()), "doctorType", [], "any", false, false, false, 53), 'errors');
            yield "
      </div>
    ";
        }
        // line 56
        yield "
    ";
        // line 58
        yield "    <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 58, $this->source); })()), "diploma", [], "any", false, false, false, 58), 'errors')) ? ("has-error") : (""));
        yield "\">
      ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 59, $this->source); })()), "diploma", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>
    ";
        // line 61
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 61, $this->source); })()), "diploma", [], "any", false, false, false, 61), 'errors')) {
            // line 62
            yield "      <div class=\"form-error\">
        ";
            // line 63
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 63, $this->source); })()), "diploma", [], "any", false, false, false, 63), 'errors');
            yield "
      </div>
    ";
        }
        // line 66
        yield "
    ";
        // line 68
        yield "    <button type=\"submit\" class=\"btn\">Register</button>

    ";
        // line 71
        yield "    <div class=\"register\">
      <p>Or choose another registration type <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_choice");
        yield "\">here</a></p>
    </div>
    ";
        // line 74
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["doctorRegistrationForm"]) || array_key_exists("doctorRegistrationForm", $context) ? $context["doctorRegistrationForm"] : (function () { throw new RuntimeError('Variable "doctorRegistrationForm" does not exist.', 74, $this->source); })()), 'form_end');
        yield "
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const inputs = document.querySelectorAll('.input-field input');
      inputs.forEach(input => {
        if (input.value.trim() !== '') {
          input.classList.add('filled');
        }
        input.addEventListener('input', function () {
          if (input.value.trim() !== '') {
            input.classList.add('filled');
          } else {
            input.classList.remove('filled');
          }
        });
        input.addEventListener('focus', function () {
          input.classList.add('filled');
        });
        input.addEventListener('blur', function () {
          if (input.value.trim() === '') {
            input.classList.remove('filled');
          }
        });
      });
    });
  </script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gestion_user/registration/doctor_register.html.twig";
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
        return array (  213 => 74,  208 => 72,  205 => 71,  201 => 68,  198 => 66,  192 => 63,  189 => 62,  187 => 61,  182 => 59,  177 => 58,  174 => 56,  168 => 53,  165 => 52,  163 => 51,  158 => 49,  153 => 48,  150 => 46,  144 => 43,  141 => 42,  139 => 41,  134 => 39,  130 => 38,  125 => 37,  122 => 35,  116 => 32,  113 => 31,  111 => 30,  106 => 28,  102 => 27,  97 => 26,  94 => 24,  88 => 21,  85 => 20,  83 => 19,  78 => 17,  74 => 16,  69 => 15,  63 => 11,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Doctor Registration | Your App Name</title>
  <link rel=\"stylesheet\" href=\"{{ asset('assets/css/registration.css') }}\">
</head>
<body>
  <div class=\"wrapper\">
    {{ form_start(doctorRegistrationForm, { 'attr': { 'class': 'glassmorphism-form', 'novalidate': 'novalidate' } }) }}
    <h2>Register as Doctor</h2>

    {# Name Field #}
    <div class=\"input-field {{ form_errors(doctorRegistrationForm.name) ? 'has-error' }}\">
      {{ form_widget(doctorRegistrationForm.name, { 'attr': { 'class': 'form-control' } }) }}
      {{ form_label(doctorRegistrationForm.name, 'Enter your name') }}
    </div>
    {% if form_errors(doctorRegistrationForm.name) %}
      <div class=\"form-error\">
        {{ form_errors(doctorRegistrationForm.name) }}
      </div>
    {% endif %}

    {# Email Field #}
    <div class=\"input-field {{ form_errors(doctorRegistrationForm.email) ? 'has-error' }}\">
      {{ form_widget(doctorRegistrationForm.email, { 'attr': { 'class': 'form-control' } }) }}
      {{ form_label(doctorRegistrationForm.email, 'Enter your email') }}
    </div>
    {% if form_errors(doctorRegistrationForm.email) %}
      <div class=\"form-error\">
        {{ form_errors(doctorRegistrationForm.email) }}
      </div>
    {% endif %}

    {# Password Field #}
    <div class=\"input-field {{ form_errors(doctorRegistrationForm.plainPassword) ? 'has-error' }}\">
      {{ form_widget(doctorRegistrationForm.plainPassword, { 'attr': { 'class': 'form-control' } }) }}
      {{ form_label(doctorRegistrationForm.plainPassword, 'Enter your password') }}
    </div>
    {% if form_errors(doctorRegistrationForm.plainPassword) %}
      <div class=\"form-error\">
        {{ form_errors(doctorRegistrationForm.plainPassword) }}
      </div>
    {% endif %}

    {# Doctor Type Dropdown #}
    <div class=\"input-field {{ form_errors(doctorRegistrationForm.doctorType) ? 'has-error' }}\">
      {{ form_widget(doctorRegistrationForm.doctorType, { 'attr': { 'class': 'form-control' } }) }}
    </div>
    {% if form_errors(doctorRegistrationForm.doctorType) %}
      <div class=\"form-error\">
        {{ form_errors(doctorRegistrationForm.doctorType) }}
      </div>
    {% endif %}

    {# Diploma Upload Field (optional) #}
    <div class=\"input-field {{ form_errors(doctorRegistrationForm.diploma) ? 'has-error' }}\">
      {{ form_widget(doctorRegistrationForm.diploma, { 'attr': { 'class': 'form-control' } }) }}
    </div>
    {% if form_errors(doctorRegistrationForm.diploma) %}
      <div class=\"form-error\">
        {{ form_errors(doctorRegistrationForm.diploma) }}
      </div>
    {% endif %}

    {# Submit Button #}
    <button type=\"submit\" class=\"btn\">Register</button>

    {# Link Back to Registration Choice #}
    <div class=\"register\">
      <p>Or choose another registration type <a href=\"{{ path('registration_choice') }}\">here</a></p>
    </div>
    {{ form_end(doctorRegistrationForm) }}
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const inputs = document.querySelectorAll('.input-field input');
      inputs.forEach(input => {
        if (input.value.trim() !== '') {
          input.classList.add('filled');
        }
        input.addEventListener('input', function () {
          if (input.value.trim() !== '') {
            input.classList.add('filled');
          } else {
            input.classList.remove('filled');
          }
        });
        input.addEventListener('focus', function () {
          input.classList.add('filled');
        });
        input.addEventListener('blur', function () {
          if (input.value.trim() === '') {
            input.classList.remove('filled');
          }
        });
      });
    });
  </script>
</body>
</html>
", "gestion_user/registration/doctor_register.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\gestion_user\\registration\\doctor_register.html.twig");
    }
}
