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

/* gestion_user/profile/profile.html.twig */
class __TwigTemplate_47e6eb6565014b222328f67fa08f8f7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/profile/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/profile/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion_user/profile/profile.html.twig", 1);
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

        yield "User Profile";
        
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
        yield "<!-- Profile Start -->
<div class=\"container-fluid py-5\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- Profile Image & Basic Info -->
      <div class=\"col-md-4\">
        <div class=\"card\">
          <img class=\"card-img-top\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog\" alt=\"Profile Image\">
          <div class=\"card-body text-center\">
            <h5 class=\"card-title\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "</h5>
            <p class=\"card-text\">Country : ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "country", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
            <p class=\"card-text\">Type of Therapy : ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "therapyType", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
            <a href=\"#\" class=\"btn btn-primary\">Change Photo</a>
          </div>
        </div>
      </div>
      <!-- Profile Details -->
      <div class=\"col-md-8\">
        <div class=\"card\">
          <div class=\"card-header\">
            <ul class=\"nav nav-tabs card-header-tabs\" id=\"profileTab\" role=\"tablist\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"about-tab\" data-toggle=\"tab\" href=\"#about\" role=\"tab\" aria-controls=\"about\" aria-selected=\"true\">About</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"timeline-tab\" data-toggle=\"tab\" href=\"#timeline\" role=\"tab\" aria-controls=\"timeline\" aria-selected=\"false\">Timeline</a>
              </li>
            </ul>
          </div>
          <div class=\"card-body\">
            <div class=\"tab-content\" id=\"profileTabContent\">
              <!-- About Tab -->
              <div class=\"tab-pane fade show active\" id=\"about\" role=\"tabpanel\" aria-labelledby=\"about-tab\">
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>User Id:</strong></div>
                  <div class=\"col-sm-8\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
        yield "</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Name:</strong></div>
                  <div class=\"col-sm-8\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
        yield "</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Email:</strong></div>
                  <div class=\"col-sm-8\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "email", [], "any", false, false, false, 49), "html", null, true);
        yield "</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Phone:</strong></div>
                  <div class=\"col-sm-8\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "phoneNumber", [], "any", false, false, false, 53), "html", null, true);
        yield "</div>
                </div>
              </div>
              <!-- Timeline Tab -->
              <div class=\"tab-pane fade\" id=\"timeline\" role=\"tabpanel\" aria-labelledby=\"timeline-tab\">
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Experience:</strong></div>
                  <div class=\"col-sm-8\">Expert</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Hourly Rate:</strong></div>
                  <div class=\"col-sm-8\">10\$/hr</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Total Projects:</strong></div>
                  <div class=\"col-sm-8\">230</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>English Level:</strong></div>
                  <div class=\"col-sm-8\">Expert</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Availability:</strong></div>
                  <div class=\"col-sm-8\">6 months</div>
                </div>
                <div class=\"row\">
                  <div class=\"col-sm-12\">
                    <strong>Your Bio:</strong>
                    <p>Your detail description</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"card-footer text-end\">
            <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_edit");
        yield "\" class=\"btn btn-primary\">Edit Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Profile End -->
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
        return "gestion_user/profile/profile.html.twig";
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
        return array (  205 => 88,  167 => 53,  160 => 49,  153 => 45,  146 => 41,  119 => 17,  115 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User Profile{% endblock %}

{% block content %}
<!-- Profile Start -->
<div class=\"container-fluid py-5\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- Profile Image & Basic Info -->
      <div class=\"col-md-4\">
        <div class=\"card\">
          <img class=\"card-img-top\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog\" alt=\"Profile Image\">
          <div class=\"card-body text-center\">
            <h5 class=\"card-title\">{{ app.user.name }}</h5>
            <p class=\"card-text\">Country : {{ app.user.country }}</p>
            <p class=\"card-text\">Type of Therapy : {{ app.user.therapyType }}</p>
            <a href=\"#\" class=\"btn btn-primary\">Change Photo</a>
          </div>
        </div>
      </div>
      <!-- Profile Details -->
      <div class=\"col-md-8\">
        <div class=\"card\">
          <div class=\"card-header\">
            <ul class=\"nav nav-tabs card-header-tabs\" id=\"profileTab\" role=\"tablist\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"about-tab\" data-toggle=\"tab\" href=\"#about\" role=\"tab\" aria-controls=\"about\" aria-selected=\"true\">About</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"timeline-tab\" data-toggle=\"tab\" href=\"#timeline\" role=\"tab\" aria-controls=\"timeline\" aria-selected=\"false\">Timeline</a>
              </li>
            </ul>
          </div>
          <div class=\"card-body\">
            <div class=\"tab-content\" id=\"profileTabContent\">
              <!-- About Tab -->
              <div class=\"tab-pane fade show active\" id=\"about\" role=\"tabpanel\" aria-labelledby=\"about-tab\">
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>User Id:</strong></div>
                  <div class=\"col-sm-8\">{{ app.user.id }}</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Name:</strong></div>
                  <div class=\"col-sm-8\">{{ app.user.name }}</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Email:</strong></div>
                  <div class=\"col-sm-8\">{{ app.user.email }}</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Phone:</strong></div>
                  <div class=\"col-sm-8\">{{ app.user.phoneNumber }}</div>
                </div>
              </div>
              <!-- Timeline Tab -->
              <div class=\"tab-pane fade\" id=\"timeline\" role=\"tabpanel\" aria-labelledby=\"timeline-tab\">
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Experience:</strong></div>
                  <div class=\"col-sm-8\">Expert</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Hourly Rate:</strong></div>
                  <div class=\"col-sm-8\">10\$/hr</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Total Projects:</strong></div>
                  <div class=\"col-sm-8\">230</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>English Level:</strong></div>
                  <div class=\"col-sm-8\">Expert</div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-4\"><strong>Availability:</strong></div>
                  <div class=\"col-sm-8\">6 months</div>
                </div>
                <div class=\"row\">
                  <div class=\"col-sm-12\">
                    <strong>Your Bio:</strong>
                    <p>Your detail description</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"card-footer text-end\">
            <a href=\"{{path('user_profile_edit')}}\" class=\"btn btn-primary\">Edit Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Profile End -->
{% endblock %}
", "gestion_user/profile/profile.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\gestion_user\\profile\\profile.html.twig");
    }
}
