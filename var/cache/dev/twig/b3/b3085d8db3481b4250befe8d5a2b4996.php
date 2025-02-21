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

/* gestion_user/registration/register.html.twig */
class __TwigTemplate_060754835f24099533acc045b4b4d921 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/registration/register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Register | Your App Name</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/registration.css"), "html", null, true);
        yield "\">
</head>
<body>
    <div class=\"wrapper\">
        ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "glassmorphism-form", "novalidate" => "novalidate"]]);
        yield "
        <h2>Register</h2>

        ";
        // line 15
        yield "        <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'errors')) ? ("has-error") : (""));
        yield "\">
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'label', ["label" => "Enter your name"]);
        yield "
        </div>
        ";
        // line 19
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'errors')) {
            // line 20
            yield "                <div class=\"form-error\">
                    ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), 'errors');
            yield "
                </div>
        ";
        }
        // line 24
        yield "
        ";
        // line 26
        yield "        <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'errors')) ? ("has-error") : (""));
        yield "\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'label', ["label" => "Enter your email"]);
        yield "
        </div>
        ";
        // line 30
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'errors')) {
            // line 31
            yield "                <div class=\"form-error\">
                    ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'errors');
            yield "
                </div>
        ";
        }
        // line 35
        yield "
        ";
        // line 37
        yield "        <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), 'errors')) ? ("has-error") : (""));
        yield "\">
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "plainPassword", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "plainPassword", [], "any", false, false, false, 39), 'label', ["label" => "Enter your password"]);
        yield "
        </div>
        ";
        // line 41
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), 'errors')) {
            // line 42
            yield "                <div class=\"form-error\">
                    ";
            // line 43
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), 'errors');
            yield "
                </div>
        ";
        }
        // line 46
        yield "
        ";
        // line 48
        yield "        <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "age", [], "any", false, false, false, 48), 'errors')) ? ("has-error") : (""));
        yield "\">
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "age", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "age", [], "any", false, false, false, 50), 'label', ["label" => "Enter your age"]);
        yield "
        </div>
        ";
        // line 52
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "age", [], "any", false, false, false, 52), 'errors')) {
            // line 53
            yield "                <div class=\"form-error\">
                    ";
            // line 54
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "age", [], "any", false, false, false, 54), 'errors');
            yield "
                </div>
        ";
        }
        // line 57
        yield "
        ";
        // line 59
        yield "        <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "phoneNumber", [], "any", false, false, false, 59), 'errors')) ? ("has-error") : (""));
        yield "\">
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "phoneNumber", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "phoneNumber", [], "any", false, false, false, 61), 'label', ["label" => "Enter your phone number"]);
        yield "
        </div>
        ";
        // line 63
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "phoneNumber", [], "any", false, false, false, 63), 'errors')) {
            // line 64
            yield "                <div class=\"form-error\">
                    ";
            // line 65
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "phoneNumber", [], "any", false, false, false, 65), 'errors');
            yield "
                </div>
        ";
        }
        // line 68
        yield "
        ";
        // line 70
        yield "        <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "country", [], "any", false, false, false, 70), 'errors')) ? ("has-error") : (""));
        yield "\">
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "country", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "country", [], "any", false, false, false, 72), 'label', ["label" => "Enter your country"]);
        yield "
        </div>
        ";
        // line 74
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "country", [], "any", false, false, false, 74), 'errors')) {
            // line 75
            yield "                <div class=\"form-error\">
                    ";
            // line 76
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "country", [], "any", false, false, false, 76), 'errors');
            yield "
                </div>
        ";
        }
        // line 79
        yield "
        ";
        // line 81
        yield "        <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "therapyType", [], "any", false, false, false, 81), 'errors')) ? ("has-error") : (""));
        yield "\">
            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "therapyType", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "therapyType", [], "any", false, false, false, 83), 'label', ["label" => "Enter your therapy type"]);
        yield "
        </div>
        ";
        // line 85
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), "therapyType", [], "any", false, false, false, 85), 'errors')) {
            // line 86
            yield "                <div class=\"form-error\">
                    ";
            // line 87
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "therapyType", [], "any", false, false, false, 87), 'errors');
            yield "
                </div>
        ";
        }
        // line 90
        yield "
        ";
        // line 92
        yield "        <div class=\"forget ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 92, $this->source); })()), "agreeTerms", [], "any", false, false, false, 92), 'errors')) ? ("has-error") : (""));
        yield "\">
            ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), "agreeTerms", [], "any", false, false, false, 93), 'widget', ["attr" => ["id" => "agreeTerms"]]);
        yield "
            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "agreeTerms", [], "any", false, false, false, 94), 'label', ["label" => "I agree to the terms and conditions"]);
        yield "
        </div>
        ";
        // line 96
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 96, $this->source); })()), "agreeTerms", [], "any", false, false, false, 96), 'errors')) {
            // line 97
            yield "                <div class=\"form-error\">
                    ";
            // line 98
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), "agreeTerms", [], "any", false, false, false, 98), 'errors');
            yield "
                </div>
        ";
        }
        // line 101
        yield "
        ";
        // line 103
        yield "        <button type=\"submit\" class=\"btn\">Register</button>

        ";
        // line 106
        yield "        <div class=\"register\">
            <p>Already have an account? <a href=\"/login\">Login</a></p>
        </div>
        ";
        // line 109
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 109, $this->source); })()), 'form_end');
        yield "
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const inputs = document.querySelectorAll('.input-field input');

        inputs.forEach(input => {
          // Check if the input is already filled on page load
          if (input.value.trim() !== '') {
            input.classList.add('filled');
          }

          // Add the 'filled' class when the input is focused or filled
          input.addEventListener('input', function () {
            if (input.value.trim() !== '') {
              input.classList.add('filled');
            } else {
              input.classList.remove('filled');
            }
          });

          // Add the 'filled' class when the input is focused
          input.addEventListener('focus', function () {
            input.classList.add('filled');
          });

          // Remove the 'filled' class when the input is blurred and empty
          input.addEventListener('blur', function () {
            if (input.value.trim() === '') {
              input.classList.remove('filled');
            }
          });
        });
      });
    </script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gestion_user/registration/register.html.twig";
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
        return array (  302 => 109,  297 => 106,  293 => 103,  290 => 101,  284 => 98,  281 => 97,  279 => 96,  274 => 94,  270 => 93,  265 => 92,  262 => 90,  256 => 87,  253 => 86,  251 => 85,  246 => 83,  242 => 82,  237 => 81,  234 => 79,  228 => 76,  225 => 75,  223 => 74,  218 => 72,  214 => 71,  209 => 70,  206 => 68,  200 => 65,  197 => 64,  195 => 63,  190 => 61,  186 => 60,  181 => 59,  178 => 57,  172 => 54,  169 => 53,  167 => 52,  162 => 50,  158 => 49,  153 => 48,  150 => 46,  144 => 43,  141 => 42,  139 => 41,  134 => 39,  130 => 38,  125 => 37,  122 => 35,  116 => 32,  113 => 31,  111 => 30,  106 => 28,  102 => 27,  97 => 26,  94 => 24,  88 => 21,  85 => 20,  83 => 19,  78 => 17,  74 => 16,  69 => 15,  63 => 11,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Register | Your App Name</title>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/registration.css') }}\">
</head>
<body>
    <div class=\"wrapper\">
        {{ form_start(registrationForm, { 'attr': { 'class': 'glassmorphism-form', 'novalidate': 'novalidate' } }) }}
        <h2>Register</h2>

        {# Name Field #}
        <div class=\"input-field {{ form_errors(registrationForm.name) ? 'has-error' }}\">
            {{ form_widget(registrationForm.name, { 'attr': { 'class': 'form-control' } }) }}
            {{ form_label(registrationForm.name, 'Enter your name') }}
        </div>
        {% if form_errors(registrationForm.name) %}
                <div class=\"form-error\">
                    {{ form_errors(registrationForm.name) }}
                </div>
        {% endif %}

        {# Email Field #}
        <div class=\"input-field {{ form_errors(registrationForm.email) ? 'has-error' }}\">
            {{ form_widget(registrationForm.email, { 'attr': { 'class': 'form-control' } }) }}
            {{ form_label(registrationForm.email, 'Enter your email') }}
        </div>
        {% if form_errors(registrationForm.email) %}
                <div class=\"form-error\">
                    {{ form_errors(registrationForm.email) }}
                </div>
        {% endif %}

        {# Password Field #}
        <div class=\"input-field {{ form_errors(registrationForm.plainPassword) ? 'has-error' }}\">
            {{ form_widget(registrationForm.plainPassword, { 'attr': { 'class': 'form-control' } }) }}
            {{ form_label(registrationForm.plainPassword, 'Enter your password') }}
        </div>
        {% if form_errors(registrationForm.plainPassword) %}
                <div class=\"form-error\">
                    {{ form_errors(registrationForm.plainPassword) }}
                </div>
        {% endif %}

        {# Age Field #}
        <div class=\"input-field {{ form_errors(registrationForm.age) ? 'has-error' }}\">
            {{ form_widget(registrationForm.age, { 'attr': { 'class': 'form-control' } }) }}
            {{ form_label(registrationForm.age, 'Enter your age') }}
        </div>
        {% if form_errors(registrationForm.age) %}
                <div class=\"form-error\">
                    {{ form_errors(registrationForm.age) }}
                </div>
        {% endif %}

        {# Phone Number Field #}
        <div class=\"input-field {{ form_errors(registrationForm.phoneNumber) ? 'has-error' }}\">
            {{ form_widget(registrationForm.phoneNumber, { 'attr': { 'class': 'form-control' } }) }}
            {{ form_label(registrationForm.phoneNumber, 'Enter your phone number') }}
        </div>
        {% if form_errors(registrationForm.phoneNumber) %}
                <div class=\"form-error\">
                    {{ form_errors(registrationForm.phoneNumber) }}
                </div>
        {% endif %}

        {# Country Field #}
        <div class=\"input-field {{ form_errors(registrationForm.country) ? 'has-error' }}\">
            {{ form_widget(registrationForm.country, { 'attr': { 'class': 'form-control' } }) }}
            {{ form_label(registrationForm.country, 'Enter your country') }}
        </div>
        {% if form_errors(registrationForm.country) %}
                <div class=\"form-error\">
                    {{ form_errors(registrationForm.country) }}
                </div>
        {% endif %}

        {# Therapy Type Field #}
        <div class=\"input-field {{ form_errors(registrationForm.therapyType) ? 'has-error' }}\">
            {{ form_widget(registrationForm.therapyType, { 'attr': { 'class': 'form-control' } }) }}
            {{ form_label(registrationForm.therapyType, 'Enter your therapy type') }}
        </div>
        {% if form_errors(registrationForm.therapyType) %}
                <div class=\"form-error\">
                    {{ form_errors(registrationForm.therapyType) }}
                </div>
        {% endif %}

        {# Agree Terms Field #}
        <div class=\"forget {{ form_errors(registrationForm.agreeTerms) ? 'has-error' }}\">
            {{ form_widget(registrationForm.agreeTerms, { 'attr': { 'id': 'agreeTerms' } }) }}
            {{ form_label(registrationForm.agreeTerms, 'I agree to the terms and conditions') }}
        </div>
        {% if form_errors(registrationForm.agreeTerms) %}
                <div class=\"form-error\">
                    {{ form_errors(registrationForm.agreeTerms) }}
                </div>
        {% endif %}

        {# Submit Button #}
        <button type=\"submit\" class=\"btn\">Register</button>

        {# Login Link #}
        <div class=\"register\">
            <p>Already have an account? <a href=\"/login\">Login</a></p>
        </div>
        {{ form_end(registrationForm) }}
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const inputs = document.querySelectorAll('.input-field input');

        inputs.forEach(input => {
          // Check if the input is already filled on page load
          if (input.value.trim() !== '') {
            input.classList.add('filled');
          }

          // Add the 'filled' class when the input is focused or filled
          input.addEventListener('input', function () {
            if (input.value.trim() !== '') {
              input.classList.add('filled');
            } else {
              input.classList.remove('filled');
            }
          });

          // Add the 'filled' class when the input is focused
          input.addEventListener('focus', function () {
            input.classList.add('filled');
          });

          // Remove the 'filled' class when the input is blurred and empty
          input.addEventListener('blur', function () {
            if (input.value.trim() === '') {
              input.classList.remove('filled');
            }
          });
        });
      });
    </script>
</body>
</html>", "gestion_user/registration/register.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\gestion_user\\registration\\register.html.twig");
    }
}
