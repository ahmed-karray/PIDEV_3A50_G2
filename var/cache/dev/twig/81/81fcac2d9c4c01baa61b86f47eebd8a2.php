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

/* admin/gestion_user/create_patient.html.twig */
class __TwigTemplate_b0a34bd7e107172ae9cfe0e68f3b8c8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/create_patient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/create_patient.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/gestion_user/create_patient.html.twig", 1);
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
      <h4>Inscription Patient</h4>
    </div>
    <div class=\"card-body\">
      ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "glassmorphism-form", "novalidate" => "novalidate"]]);
        yield "
      
      ";
        // line 13
        yield "      <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'errors')) ? ("has-error") : (""));
        yield "\">
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Nom"]);
        yield "
        ";
        // line 16
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'errors')) {
            // line 17
            yield "          <div class=\"form-error\">
            ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'errors');
            yield "
          </div>
        ";
        }
        // line 21
        yield "      </div>

      ";
        // line 24
        yield "      <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'errors')) ? ("has-error") : (""));
        yield "\">
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Email"]);
        yield "
        ";
        // line 27
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'errors')) {
            // line 28
            yield "          <div class=\"form-error\">
            ";
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'errors');
            yield "
          </div>
        ";
        }
        // line 32
        yield "      </div>

      ";
        // line 35
        yield "      <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "plainPassword", [], "any", false, false, false, 35), 'errors')) ? ("has-error") : (""));
        yield "\">
        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "plainPassword", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Mot de passe"]);
        yield "
        ";
        // line 38
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "plainPassword", [], "any", false, false, false, 38), 'errors')) {
            // line 39
            yield "          <div class=\"form-error\">
            ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), 'errors');
            yield "
          </div>
        ";
        }
        // line 43
        yield "      </div>

      ";
        // line 46
        yield "      <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "age", [], "any", false, false, false, 46), 'errors')) ? ("has-error") : (""));
        yield "\">
        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "age", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "age", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Âge"]);
        yield "
        ";
        // line 49
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "age", [], "any", false, false, false, 49), 'errors')) {
            // line 50
            yield "          <div class=\"form-error\">
            ";
            // line 51
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "age", [], "any", false, false, false, 51), 'errors');
            yield "
          </div>
        ";
        }
        // line 54
        yield "      </div>

      ";
        // line 57
        yield "      <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "phoneNumber", [], "any", false, false, false, 57), 'errors')) ? ("has-error") : (""));
        yield "\">
        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "phoneNumber", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "phoneNumber", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Téléphone"]);
        yield "
        ";
        // line 60
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "phoneNumber", [], "any", false, false, false, 60), 'errors')) {
            // line 61
            yield "          <div class=\"form-error\">
            ";
            // line 62
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "phoneNumber", [], "any", false, false, false, 62), 'errors');
            yield "
          </div>
        ";
        }
        // line 65
        yield "      </div>

      ";
        // line 68
        yield "      <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "country", [], "any", false, false, false, 68), 'errors')) ? ("has-error") : (""));
        yield "\">
        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "country", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "country", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Pays"]);
        yield "
        ";
        // line 71
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "country", [], "any", false, false, false, 71), 'errors')) {
            // line 72
            yield "          <div class=\"form-error\">
            ";
            // line 73
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "country", [], "any", false, false, false, 73), 'errors');
            yield "
          </div>
        ";
        }
        // line 76
        yield "      </div>

      ";
        // line 79
        yield "      <div class=\"input-field ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "therapyType", [], "any", false, false, false, 79), 'errors')) ? ("has-error") : (""));
        yield "\">
        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "therapyType", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "therapyType", [], "any", false, false, false, 81), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Type de thérapie"]);
        yield "
        ";
        // line 82
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "therapyType", [], "any", false, false, false, 82), 'errors')) {
            // line 83
            yield "          <div class=\"form-error\">
            ";
            // line 84
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "therapyType", [], "any", false, false, false, 84), 'errors');
            yield "
          </div>
        ";
        }
        // line 87
        yield "      </div>

      ";
        // line 90
        yield "      <div class=\"forget ";
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "agreeTerms", [], "any", false, false, false, 90), 'errors')) ? ("has-error") : (""));
        yield "\">
        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), "agreeTerms", [], "any", false, false, false, 91), 'widget', ["attr" => ["id" => "agreeTerms"]]);
        yield "
        ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 92, $this->source); })()), "agreeTerms", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "control-label"], "label" => "J'accepte les conditions"]);
        yield "
        ";
        // line 93
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), "agreeTerms", [], "any", false, false, false, 93), 'errors')) {
            // line 94
            yield "          <div class=\"form-error\">
            ";
            // line 95
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), "agreeTerms", [], "any", false, false, false, 95), 'errors');
            yield "
          </div>
        ";
        }
        // line 98
        yield "      </div>

      ";
        // line 101
        yield "      <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>

      ";
        // line 103
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 103, $this->source); })()), 'form_end');
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
        return "admin/gestion_user/create_patient.html.twig";
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
        return array (  317 => 103,  313 => 101,  309 => 98,  303 => 95,  300 => 94,  298 => 93,  294 => 92,  290 => 91,  285 => 90,  281 => 87,  275 => 84,  272 => 83,  270 => 82,  266 => 81,  262 => 80,  257 => 79,  253 => 76,  247 => 73,  244 => 72,  242 => 71,  238 => 70,  234 => 69,  229 => 68,  225 => 65,  219 => 62,  216 => 61,  214 => 60,  210 => 59,  206 => 58,  201 => 57,  197 => 54,  191 => 51,  188 => 50,  186 => 49,  182 => 48,  178 => 47,  173 => 46,  169 => 43,  163 => 40,  160 => 39,  158 => 38,  154 => 37,  150 => 36,  145 => 35,  141 => 32,  135 => 29,  132 => 28,  130 => 27,  126 => 26,  122 => 25,  117 => 24,  113 => 21,  107 => 18,  104 => 17,  102 => 16,  98 => 15,  94 => 14,  89 => 13,  84 => 10,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block content %}
<div class=\"container mt-4\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h4>Inscription Patient</h4>
    </div>
    <div class=\"card-body\">
      {{ form_start(registrationForm, { 'attr': { 'class': 'glassmorphism-form', 'novalidate': 'novalidate' } }) }}
      
      {# Name Field #}
      <div class=\"input-field {{ form_errors(registrationForm.name) ? 'has-error' }}\">
        {{ form_widget(registrationForm.name, { 'attr': {'class': 'form-control'} }) }}
        {{ form_label(registrationForm.name, 'Nom', {'label_attr': {'class': 'control-label'}}) }}
        {% if form_errors(registrationForm.name) %}
          <div class=\"form-error\">
            {{ form_errors(registrationForm.name) }}
          </div>
        {% endif %}
      </div>

      {# Email Field #}
      <div class=\"input-field {{ form_errors(registrationForm.email) ? 'has-error' }}\">
        {{ form_widget(registrationForm.email, { 'attr': {'class': 'form-control'} }) }}
        {{ form_label(registrationForm.email, 'Email', {'label_attr': {'class': 'control-label'}}) }}
        {% if form_errors(registrationForm.email) %}
          <div class=\"form-error\">
            {{ form_errors(registrationForm.email) }}
          </div>
        {% endif %}
      </div>

      {# Password Field #}
      <div class=\"input-field {{ form_errors(registrationForm.plainPassword) ? 'has-error' }}\">
        {{ form_widget(registrationForm.plainPassword, { 'attr': {'class': 'form-control'} }) }}
        {{ form_label(registrationForm.plainPassword, 'Mot de passe', {'label_attr': {'class': 'control-label'}}) }}
        {% if form_errors(registrationForm.plainPassword) %}
          <div class=\"form-error\">
            {{ form_errors(registrationForm.plainPassword) }}
          </div>
        {% endif %}
      </div>

      {# Age Field #}
      <div class=\"input-field {{ form_errors(registrationForm.age) ? 'has-error' }}\">
        {{ form_widget(registrationForm.age, { 'attr': {'class': 'form-control'} }) }}
        {{ form_label(registrationForm.age, 'Âge', {'label_attr': {'class': 'control-label'}}) }}
        {% if form_errors(registrationForm.age) %}
          <div class=\"form-error\">
            {{ form_errors(registrationForm.age) }}
          </div>
        {% endif %}
      </div>

      {# Phone Number Field #}
      <div class=\"input-field {{ form_errors(registrationForm.phoneNumber) ? 'has-error' }}\">
        {{ form_widget(registrationForm.phoneNumber, { 'attr': {'class': 'form-control'} }) }}
        {{ form_label(registrationForm.phoneNumber, 'Téléphone', {'label_attr': {'class': 'control-label'}}) }}
        {% if form_errors(registrationForm.phoneNumber) %}
          <div class=\"form-error\">
            {{ form_errors(registrationForm.phoneNumber) }}
          </div>
        {% endif %}
      </div>

      {# Country Field #}
      <div class=\"input-field {{ form_errors(registrationForm.country) ? 'has-error' }}\">
        {{ form_widget(registrationForm.country, { 'attr': {'class': 'form-control'} }) }}
        {{ form_label(registrationForm.country, 'Pays', {'label_attr': {'class': 'control-label'}}) }}
        {% if form_errors(registrationForm.country) %}
          <div class=\"form-error\">
            {{ form_errors(registrationForm.country) }}
          </div>
        {% endif %}
      </div>

      {# Therapy Type Field #}
      <div class=\"input-field {{ form_errors(registrationForm.therapyType) ? 'has-error' }}\">
        {{ form_widget(registrationForm.therapyType, { 'attr': {'class': 'form-control'} }) }}
        {{ form_label(registrationForm.therapyType, 'Type de thérapie', {'label_attr': {'class': 'control-label'}}) }}
        {% if form_errors(registrationForm.therapyType) %}
          <div class=\"form-error\">
            {{ form_errors(registrationForm.therapyType) }}
          </div>
        {% endif %}
      </div>

      {# Agree Terms Field #}
      <div class=\"forget {{ form_errors(registrationForm.agreeTerms) ? 'has-error' }}\">
        {{ form_widget(registrationForm.agreeTerms, { 'attr': {'id': 'agreeTerms'} }) }}
        {{ form_label(registrationForm.agreeTerms, 'J\\'accepte les conditions', {'label_attr': {'class': 'control-label'}}) }}
        {% if form_errors(registrationForm.agreeTerms) %}
          <div class=\"form-error\">
            {{ form_errors(registrationForm.agreeTerms) }}
          </div>
        {% endif %}
      </div>

      {# Submit Button #}
      <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>

      {{ form_end(registrationForm) }}
    </div>
  </div>
</div>
{% endblock %}
", "admin/gestion_user/create_patient.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\admin\\gestion_user\\create_patient.html.twig");
    }
}
