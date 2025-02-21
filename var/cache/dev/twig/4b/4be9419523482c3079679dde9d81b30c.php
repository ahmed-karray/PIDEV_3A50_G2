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

/* services/services.html.twig */
class __TwigTemplate_a6adf6f30411296c39f03f4be509312a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/services.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "services/services.html.twig", 1);
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

        yield "About Us - MEDINOVA";
        
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
        yield "    <!-- Services Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Services</h5>
                <h1 class=\"display-4\">Excellent Medical Services</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-user-md text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Emergency Care</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-procedures text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Operation & Surgery</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-stethoscope text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Outdoor Checkup</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-ambulance text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Ambulance Service</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-pills text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Medicine & Pharmacy</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-microscope text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Blood Testing</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

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
        return "services/services.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}About Us - MEDINOVA{% endblock %}

{% block content %}
    <!-- Services Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Services</h5>
                <h1 class=\"display-4\">Excellent Medical Services</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-user-md text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Emergency Care</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-procedures text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Operation & Surgery</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-stethoscope text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Outdoor Checkup</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-ambulance text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Ambulance Service</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-pills text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Medicine & Pharmacy</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\">
                        <div class=\"service-icon mb-4\">
                            <i class=\"fa fa-2x fa-microscope text-white\"></i>
                        </div>
                        <h4 class=\"mb-3\">Blood Testing</h4>
                        <p class=\"m-0\">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class=\"btn btn-lg btn-primary rounded-pill\" href=\"\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

{% endblock %}", "services/services.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\services\\services.html.twig");
    }
}
