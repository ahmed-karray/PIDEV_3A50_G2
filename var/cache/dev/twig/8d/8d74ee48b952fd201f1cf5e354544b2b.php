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

/* gestion_user/registration/registration_choice.html.twig */
class __TwigTemplate_964e7350a4c3aafb3abee66a90a9a9f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/registration/registration_choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/registration/registration_choice.html.twig"));

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
    <div class=\"glassmorphism-form\">
      <h2>Register</h2>
      <p>Please choose your registration type:</p>
      <div class=\"register-options\">
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_register");
        yield "\" class=\"btn\">Register as Patient</a>
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctor_register");
        yield "\" class=\"btn\">Register as Doctor</a>
      </div>
      <div class=\"login-link\">
        <p>Already have an account? <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\">Login</a></p>
      </div>
    </div>
  </div>
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
        return "gestion_user/registration/registration_choice.html.twig";
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
        return array (  77 => 19,  71 => 16,  67 => 15,  56 => 7,  48 => 1,);
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
    <div class=\"glassmorphism-form\">
      <h2>Register</h2>
      <p>Please choose your registration type:</p>
      <div class=\"register-options\">
        <a href=\"{{ path('patient_register') }}\" class=\"btn\">Register as Patient</a>
        <a href=\"{{ path('doctor_register') }}\" class=\"btn\">Register as Doctor</a>
      </div>
      <div class=\"login-link\">
        <p>Already have an account? <a href=\"{{ path('login') }}\">Login</a></p>
      </div>
    </div>
  </div>
</body>
</html>
", "gestion_user/registration/registration_choice.html.twig", "C:\\Users\\MSI\\Desktop\\PIDEV_3A50_G2\\templates\\gestion_user\\registration\\registration_choice.html.twig");
    }
}
