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

/* gestion_user/emails/reset_password_email.html.twig */
class __TwigTemplate_ee9660dc870e88b261e3b5ad904db751 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/emails/reset_password_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/emails/reset_password_email.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reset Your Password</title>
    <style>
        /* Add some basic styling for the email if needed */
    </style>
</head>
<body>
    <p>Hello,</p>
    <p>You requested a password reset. Please click the link below to reset your password:</p>
    <p><a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetUrl"]) || array_key_exists("resetUrl", $context) ? $context["resetUrl"] : (function () { throw new RuntimeError('Variable "resetUrl" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\">Reset Password</a></p>
    <p>If you did not request a password reset, please ignore this email.</p>
    <p>Regards,<br>Your App Name</p>
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
        return "gestion_user/emails/reset_password_email.html.twig";
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
        return array (  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reset Your Password</title>
    <style>
        /* Add some basic styling for the email if needed */
    </style>
</head>
<body>
    <p>Hello,</p>
    <p>You requested a password reset. Please click the link below to reset your password:</p>
    <p><a href=\"{{ resetUrl }}\">Reset Password</a></p>
    <p>If you did not request a password reset, please ignore this email.</p>
    <p>Regards,<br>Your App Name</p>
</body>
</html>
", "gestion_user/emails/reset_password_email.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\gestion_user\\emails\\reset_password_email.html.twig");
    }
}
