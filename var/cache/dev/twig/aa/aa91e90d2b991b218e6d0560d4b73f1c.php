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

/* gestion_user/security/reset_password.html.twig */
class __TwigTemplate_b3f1da4aab39bfb91b1cb65991a85dac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/security/reset_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/security/reset_password.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Reset Password | Your App Name</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/registration.css"), "html", null, true);
        yield "\">
</head>
<body>
    <div class=\"wrapper\">
        ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "glassmorphism-form", "novalidate" => "novalidate"]]);
        yield "
        <h2>Reset Password</h2>

        ";
        // line 15
        yield "        <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 15, $this->source); })()), "plainPassword", [], "any", false, false, false, 15), "first", [], "any", false, false, false, 15), 'errors')) ? ("has-error") : (""));
        yield "\">
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 16, $this->source); })()), "plainPassword", [], "any", false, false, false, 16), "first", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 17, $this->source); })()), "plainPassword", [], "any", false, false, false, 17), "first", [], "any", false, false, false, 17), 'label', ["label" => "New Password"]);
        yield "
        </div>
        ";
        // line 19
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 19, $this->source); })()), "plainPassword", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), 'errors')) {
            // line 20
            yield "            <div class=\"form-error\">
                ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 21, $this->source); })()), "plainPassword", [], "any", false, false, false, 21), "first", [], "any", false, false, false, 21), 'errors');
            yield "
            </div>
        ";
        }
        // line 24
        yield "
        ";
        // line 26
        yield "        <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 26, $this->source); })()), "plainPassword", [], "any", false, false, false, 26), "second", [], "any", false, false, false, 26), 'errors')) ? ("has-error") : (""));
        yield "\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 27, $this->source); })()), "plainPassword", [], "any", false, false, false, 27), "second", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 28, $this->source); })()), "plainPassword", [], "any", false, false, false, 28), "second", [], "any", false, false, false, 28), 'label', ["label" => "Confirm New Password"]);
        yield "
        </div>
        ";
        // line 30
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 30, $this->source); })()), "plainPassword", [], "any", false, false, false, 30), "second", [], "any", false, false, false, 30), 'errors')) {
            // line 31
            yield "            <div class=\"form-error\">
                ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 32, $this->source); })()), "plainPassword", [], "any", false, false, false, 32), "second", [], "any", false, false, false, 32), 'errors');
            yield "
            </div>
        ";
        }
        // line 35
        yield "
        ";
        // line 37
        yield "        <button type=\"submit\" class=\"btn\">Reset Password</button>

        ";
        // line 40
        yield "        <div class=\"register\">
            <p>Remember your password? <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\">Login</a></p>
        </div>
        ";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 43, $this->source); })()), 'form_end');
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
        return "gestion_user/security/reset_password.html.twig";
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
        return array (  137 => 43,  132 => 41,  129 => 40,  125 => 37,  122 => 35,  116 => 32,  113 => 31,  111 => 30,  106 => 28,  102 => 27,  97 => 26,  94 => 24,  88 => 21,  85 => 20,  83 => 19,  78 => 17,  74 => 16,  69 => 15,  63 => 11,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Reset Password | Your App Name</title>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/registration.css') }}\">
</head>
<body>
    <div class=\"wrapper\">
        {{ form_start(resetPasswordForm, { 'attr': { 'class': 'glassmorphism-form', 'novalidate': 'novalidate' } }) }}
        <h2>Reset Password</h2>

        {# First Password Field #}
        <div class=\"input-field {{ form_errors(resetPasswordForm.plainPassword.first) ? 'has-error' }}\">
            {{ form_widget(resetPasswordForm.plainPassword.first, { 'attr': { 'class': 'form-control' } }) }}
            {{ form_label(resetPasswordForm.plainPassword.first, 'New Password') }}
        </div>
        {% if form_errors(resetPasswordForm.plainPassword.first) %}
            <div class=\"form-error\">
                {{ form_errors(resetPasswordForm.plainPassword.first) }}
            </div>
        {% endif %}

        {# Second Password Field #}
        <div class=\"input-field {{ form_errors(resetPasswordForm.plainPassword.second) ? 'has-error' }}\">
            {{ form_widget(resetPasswordForm.plainPassword.second, { 'attr': { 'class': 'form-control' } }) }}
            {{ form_label(resetPasswordForm.plainPassword.second, 'Confirm New Password') }}
        </div>
        {% if form_errors(resetPasswordForm.plainPassword.second) %}
            <div class=\"form-error\">
                {{ form_errors(resetPasswordForm.plainPassword.second) }}
            </div>
        {% endif %}

        {# Submit Button #}
        <button type=\"submit\" class=\"btn\">Reset Password</button>

        {# Back to Login Link #}
        <div class=\"register\">
            <p>Remember your password? <a href=\"{{ path('login') }}\">Login</a></p>
        </div>
        {{ form_end(resetPasswordForm) }}
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
", "gestion_user/security/reset_password.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\gestion_user\\security\\reset_password.html.twig");
    }
}
