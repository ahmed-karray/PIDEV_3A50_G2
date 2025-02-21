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

/* gestion_user/security/login.html.twig */
class __TwigTemplate_c15852e75fb4361878e92c08dcae2bf5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login | Your App Name</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/registration.css"), "html", null, true);
        yield "\">
</head>
<body>
    <div class=\"wrapper\">
        ";
        // line 12
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 13
            yield "            <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "\">
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                yield "                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
        <form method=\"post\" class=\"glassmorphism-form\">
            <h2>Login</h2>

            ";
        // line 24
        yield "            ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })())) {
            // line 25
            yield "                <div class=\"form-error\">
                    ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageKey", [], "any", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageData", [], "any", false, false, false, 26), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 29
        yield "
            ";
        // line 31
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            yield "                <div class=\"mb-3\">
                    You are logged in as ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "userIdentifier", [], "any", false, false, false, 33), "html", null, true);
            yield ", <a href=\"\">Logout</a>
                </div>
            ";
        }
        // line 36
        yield "
            ";
        // line 38
        yield "            <div class=\"input-field\">
                <input type=\"email\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                <label for=\"inputEmail\">Enter your email</label>
            </div>

            ";
        // line 44
        yield "            <div class=\"input-field\">
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                <label for=\"inputPassword\">Enter your password</label>
            </div>

            ";
        // line 50
        yield "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

            ";
        // line 53
        yield "            <div class=\"forget\">
                <label>
                    <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                </label>
            </div>

            ";
        // line 60
        yield "            <button type=\"submit\" class=\"btn\">Login</button>

            ";
        // line 63
        yield "            <div class=\"forgot-password\">
                <p><a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot_password");
        yield "\">Forgot your password?</a></p>
            </div>

            ";
        // line 68
        yield "            <div class=\"register\">
                <p>Don't have an account? <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_choice");
        yield "\">Register</a></p>
            </div>
        </form>
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
        return "gestion_user/security/login.html.twig";
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
        return array (  176 => 69,  173 => 68,  167 => 64,  164 => 63,  160 => 60,  152 => 53,  146 => 50,  139 => 44,  132 => 39,  129 => 38,  126 => 36,  120 => 33,  117 => 32,  114 => 31,  111 => 29,  105 => 26,  102 => 25,  99 => 24,  93 => 19,  86 => 17,  77 => 15,  73 => 14,  68 => 13,  63 => 12,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login | Your App Name</title>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/registration.css') }}\">
</head>
<body>
    <div class=\"wrapper\">
        {# Display flash messages (error, success, etc.) #}
        {% for label, messages in app.flashes %}
            <div class=\"alert alert-{{ label }}\">
                {% for message in messages %}
                    <p>{{ message }}</p>
                {% endfor %}
            </div>
        {% endfor %}

        <form method=\"post\" class=\"glassmorphism-form\">
            <h2>Login</h2>

            {# Display error message if authentication fails #}
            {% if error %}
                <div class=\"form-error\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}

            {# Display message if user is already logged in #}
            {% if app.user %}
                <div class=\"mb-3\">
                    You are logged in as {{ app.user.userIdentifier }}, <a href=\"\">Logout</a>
                </div>
            {% endif %}

            {# Email Field #}
            <div class=\"input-field\">
                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                <label for=\"inputEmail\">Enter your email</label>
            </div>

            {# Password Field #}
            <div class=\"input-field\">
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                <label for=\"inputPassword\">Enter your password</label>
            </div>

            {# CSRF Token #}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

            {# Remember Me Checkbox #}
            <div class=\"forget\">
                <label>
                    <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                </label>
            </div>

            {# Submit Button #}
            <button type=\"submit\" class=\"btn\">Login</button>

            {# Forgot Password Link #}
            <div class=\"forgot-password\">
                <p><a href=\"{{ path('forgot_password') }}\">Forgot your password?</a></p>
            </div>

            {# Register Link #}
            <div class=\"register\">
                <p>Don't have an account? <a href=\"{{ path('registration_choice') }}\">Register</a></p>
            </div>
        </form>
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
</html>
", "gestion_user/security/login.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\gestion_user\\security\\login.html.twig");
    }
}
