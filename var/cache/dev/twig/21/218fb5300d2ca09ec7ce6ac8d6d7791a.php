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

/* contact/contact.html.twig */
class __TwigTemplate_057b9652b85d09b45d93a4f766bb703d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
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
        yield "

    <!-- Contact Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Any Questions?</h5>
                <h1 class=\"display-4\">Please Feel Free To Contact Us</h1>
            </div>
            <div class=\"row g-5 mb-5\">
                <div class=\"col-lg-4\">
                    <div class=\"bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\" style=\"height: 200px;\">
                        <div class=\"d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4\" style=\"width: 100px; height: 70px; transform: rotate(-15deg);\">
                            <i class=\"fa fa-2x fa-location-arrow text-white\" style=\"transform: rotate(15deg);\"></i>
                        </div>
                        <h6 class=\"mb-0\">123 Street, New York, USA</h6>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\" style=\"height: 200px;\">
                        <div class=\"d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4\" style=\"width: 100px; height: 70px; transform: rotate(-15deg);\">
                            <i class=\"fa fa-2x fa-phone text-white\" style=\"transform: rotate(15deg);\"></i>
                        </div>
                        <h6 class=\"mb-0\">+012 345 6789</h6>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\" style=\"height: 200px;\">
                        <div class=\"d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4\" style=\"width: 100px; height: 70px; transform: rotate(-15deg);\">
                            <i class=\"fa fa-2x fa-envelope-open text-white\" style=\"transform: rotate(15deg);\"></i>
                        </div>
                        <h6 class=\"mb-0\">info@example.com</h6>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\" style=\"height: 500px;\">
                    <div class=\"position-relative h-100\">
                        <iframe class=\"position-relative w-100 h-100\"
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd\"
                            frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                            tabindex=\"0\"></iframe>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center position-relative\" style=\"margin-top: -200px; z-index: 1;\">
                <div class=\"col-lg-8\">
                    <div class=\"bg-white rounded p-5 m-5 mb-0\">
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Your Name\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\" placeholder=\"Your Email\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Subject\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12\">
                                    <textarea class=\"form-control bg-light border-0\" rows=\"5\" placeholder=\"Message\"></textarea>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

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
        return "contact/contact.html.twig";
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


    <!-- Contact Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Any Questions?</h5>
                <h1 class=\"display-4\">Please Feel Free To Contact Us</h1>
            </div>
            <div class=\"row g-5 mb-5\">
                <div class=\"col-lg-4\">
                    <div class=\"bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\" style=\"height: 200px;\">
                        <div class=\"d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4\" style=\"width: 100px; height: 70px; transform: rotate(-15deg);\">
                            <i class=\"fa fa-2x fa-location-arrow text-white\" style=\"transform: rotate(15deg);\"></i>
                        </div>
                        <h6 class=\"mb-0\">123 Street, New York, USA</h6>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\" style=\"height: 200px;\">
                        <div class=\"d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4\" style=\"width: 100px; height: 70px; transform: rotate(-15deg);\">
                            <i class=\"fa fa-2x fa-phone text-white\" style=\"transform: rotate(15deg);\"></i>
                        </div>
                        <h6 class=\"mb-0\">+012 345 6789</h6>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"bg-light rounded d-flex flex-column align-items-center justify-content-center text-center\" style=\"height: 200px;\">
                        <div class=\"d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4\" style=\"width: 100px; height: 70px; transform: rotate(-15deg);\">
                            <i class=\"fa fa-2x fa-envelope-open text-white\" style=\"transform: rotate(15deg);\"></i>
                        </div>
                        <h6 class=\"mb-0\">info@example.com</h6>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\" style=\"height: 500px;\">
                    <div class=\"position-relative h-100\">
                        <iframe class=\"position-relative w-100 h-100\"
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd\"
                            frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                            tabindex=\"0\"></iframe>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center position-relative\" style=\"margin-top: -200px; z-index: 1;\">
                <div class=\"col-lg-8\">
                    <div class=\"bg-white rounded p-5 m-5 mb-0\">
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Your Name\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\" placeholder=\"Your Email\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Subject\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12\">
                                    <textarea class=\"form-control bg-light border-0\" rows=\"5\" placeholder=\"Message\"></textarea>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

{% endblock %}", "contact/contact.html.twig", "C:\\Users\\MSI\\Desktop\\PIDEV_3A50_G2\\templates\\contact\\contact.html.twig");
    }
}
