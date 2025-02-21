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

/* base.html.twig */
class __TwigTemplate_fe6a33cf2ea68e993d136ecf41ee8298 extends Template
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
            'topbar' => [$this, 'block_topbar'],
            'navbar' => [$this, 'block_navbar'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Bloom</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free HTML Templates\" name=\"keywords\">
    <meta content=\"Free HTML Templates\" name=\"description\">

    <!-- Favicon -->
    <link href=";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Logo.png"), "html", null, true);
        yield " rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap\" rel=\"stylesheet\">  

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield " rel=\"stylesheet\">
    <link href=";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        yield " rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield " rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/scss/bootstrap.scss"), "html", null, true);
        yield ">


    <!-- Template Stylesheet -->
    <link href=";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield " rel=\"stylesheet\">
</head>

<body>
    ";
        // line 36
        yield from $this->unwrap()->yieldBlock('topbar', $context, $blocks);
        // line 72
        yield "
    ";
        // line 73
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 146
        yield "


    ";
        // line 149
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 678
        yield "    
    ";
        // line 679
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 746
        yield "

    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

    ";
        // line 751
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 765
        yield "
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_topbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        // line 37
        yield "    <!-- Topbar Start -->
    <div class=\"container-fluid py-2 border-bottom d-none d-lg-block\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-lg-start mb-2 mb-lg-0\">
                    <div class=\"d-inline-flex align-items-center\">
                        <a class=\"text-decoration-none text-body pe-3\" href=\"\"><i class=\"bi bi-telephone me-2\"></i>+216 25 000 000</a>
                        <span class=\"text-body\">|</span>
                        <a class=\"text-decoration-none text-body px-3\" href=\"\"><i class=\"bi bi-envelope me-2\"></i>info@example.com</a>
                    </div>
                </div>
                <div class=\"col-md-6 text-center text-lg-end\">
                    <div class=\"d-inline-flex align-items-center\">
                        <a class=\"text-body px-2\" href=\"\">
                            <i class=\"fab fa-facebook-f\"></i>
                        </a>
                        <a class=\"text-body px-2\" href=\"\">
                            <i class=\"fab fa-twitter\"></i>
                        </a>
                        <a class=\"text-body px-2\" href=\"\">
                            <i class=\"fab fa-linkedin-in\"></i>
                        </a>
                        <a class=\"text-body px-2\" href=\"\">
                            <i class=\"fab fa-instagram\"></i>
                        </a>
                        <a class=\"text-body ps-2\" href=\"\">
                            <i class=\"fab fa-youtube\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 74
        yield "    <!-- Navbar Start -->
    <div class=\"container-fluid sticky-top bg-white shadow-sm\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0\">
                <a href=\"#\" class=\"navbar-brand\">
                    ";
        // line 79
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 82
        yield "

                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "attributes", [], "any", false, false, false, 90), "get", ["_route"], "method", false, false, false, 90) == "home")) {
            yield "active";
        }
        yield "\">Home</a>
                        <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "request", [], "any", false, false, false, 91), "attributes", [], "any", false, false, false, 91), "get", ["_route"], "method", false, false, false, 91) == "about")) {
            yield "active";
        }
        yield "\">About</a>
                        <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "attributes", [], "any", false, false, false, 92), "get", ["_route"], "method", false, false, false, 92) == "services")) {
            yield "active";
        }
        yield "\">Services</a>
                        <a href=\"\" class=\"nav-item nav-link ";
        // line 93
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "request", [], "any", false, false, false, 93), "attributes", [], "any", false, false, false, 93), "get", ["_route"], "method", false, false, false, 93) == "booking")) {
            yield "active";
        }
        yield "\">Booking</a>

                        <!-- Dropdown Menu -->
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu m-0\">
                                <a href=\"#\" class=\"dropdown-item\">Blog</a>
                                <a href=\"#\" class=\"dropdown-item\">Pharmacy</a>
                                <a href=\"#\" class=\"dropdown-item\">Objectives</a>
                                <a href=\"#\" class=\"dropdown-item\">Events and Courses</a>
                            </div>
                        </div>

                        <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "attributes", [], "any", false, false, false, 106), "get", ["_route"], "method", false, false, false, 106) == "contact")) {
            yield "active";
        }
        yield "\">Contact</a>

                        <!-- Profile Dropdown (Visible when user is logged in) -->
                        ";
        // line 109
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109)) {
            // line 110
            yield "                        <li class=\"nav-item dropdown ms-3\">
                            <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">
                                <img src=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/img/profile.jpg"), "html", null, true);
            yield "\" alt=\"Profile\" class=\"rounded-circle\" width=\"35\" height=\"35\">
                                <span class=\"ms-2 d-none d-lg-inline\">Hi, ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113), "html", null, true);
            yield "</span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <div class=\"dropdown-header text-center\">
                                        <img src=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/img/profile.jpg"), "html", null, true);
            yield "\" alt=\"Profile\" class=\"rounded-circle\" width=\"50\" height=\"50\">
                                        <h6 class=\"mt-2\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119), "html", null, true);
            yield "</h6>
                                        <p class=\"text-muted\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "email", [], "any", false, false, false, 120), "html", null, true);
            yield "</p>
                                    </div>
                                </li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 123
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
            yield "\">My Profile</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">My Balance</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Inbox</a></li>
                                <div class=\"dropdown-divider\"></div>
                                <li><a class=\"dropdown-item\" href=\"#\">Account Settings</a></li>
                                <div class=\"dropdown-divider\"></div>
                                <li><a class=\"dropdown-item text-danger\" href=\"";
            // line 129
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\">Logout</a></li>
                            </ul>
                        </li>
                        ";
        } else {
            // line 133
            yield "                        <!-- Login & Register Buttons (Visible when user is not logged in) -->
                        <div class=\"d-flex align-items-center ms-3\">
                            <a href=\"";
            // line 135
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\" class=\"btn btn-login me-2\">Login</a>
                            <a href=\"";
            // line 136
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_choice");
            yield "\" class=\"btn btn-register\">Register</a>
                        </div>
                        ";
        }
        // line 139
        yield "                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        // line 80
        yield "                        <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 70px; height: auto;\">
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 149
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

        // line 150
        yield "    <!-- Hero Start -->
    <div class=\"container-fluid bg-primary py-5 mb-5 hero-header\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-start\">
                <div class=\"col-lg-8 text-center text-lg-start\">
                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\" style=\"border-color: rgba(256, 256, 256, .3) !important;\">Welcome To Bloom</h5>
                    <h1 class=\"display-1 text-white mb-md-4\">Best Healthcare Solution In Your City</h1>
                    <div class=\"pt-2\">
                        <a href=\"\" class=\"btn btn-light rounded-pill py-md-3 px-md-5 mx-2\">Find Doctor</a>
                        <a href=\"\" class=\"btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2\">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-5 mb-5 mb-lg-0\" style=\"min-height: 500px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute w-100 h-100 rounded\" src=";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/about.jpg"), "html", null, true);
        yield " style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">About Us</h5>
                        <h1 class=\"display-4\">Best Medical Care For Yourself and Your Family</h1>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                    <div class=\"row g-3 pt-3\">
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-user-md text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Qualified<small class=\"d-block text-primary\">Doctors</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-procedures text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Emergency<small class=\"d-block text-primary\">Services</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-microscope text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Accurate<small class=\"d-block text-primary\">Testing</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-ambulance text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Free<small class=\"d-block text-primary\">Ambulance</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

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


    <!-- Appointment Start -->
    <div class=\"container-fluid bg-primary my-5 py-5\">
        <div class=\"container py-5\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-6 mb-5 mb-lg-0\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Appointment</h5>
                        <h1 class=\"display-4\">Make An Appointment For Your Family</h1>
                    </div>
                    <p class=\"text-white mb-5\">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <a class=\"btn btn-dark rounded-pill py-3 px-5 me-3\" href=\"\">Find Doctor</a>
                    <a class=\"btn btn-outline-dark rounded-pill py-3 px-5\" href=\"\">Read More</a>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"bg-white text-center rounded p-5\">
                        <h1 class=\"mb-4\">Book An Appointment</h1>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select bg-light border-0\" style=\"height: 55px;\">
                                        <option selected>Choose Department</option>
                                        <option value=\"1\">Department 1</option>
                                        <option value=\"2\">Department 2</option>
                                        <option value=\"3\">Department 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select bg-light border-0\" style=\"height: 55px;\">
                                        <option selected>Select Doctor</option>
                                        <option value=\"1\">Doctor 1</option>
                                        <option value=\"2\">Doctor 2</option>
                                        <option value=\"3\">Doctor 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Your Name\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\" placeholder=\"Your Email\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"date\" id=\"date\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                            class=\"form-control bg-light border-0 datetimepicker-input\"
                                            placeholder=\"Date\" data-target=\"#date\" data-toggle=\"datetimepicker\" style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"time\" id=\"time\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                            class=\"form-control bg-light border-0 datetimepicker-input\"
                                            placeholder=\"Time\" data-target=\"#time\" data-toggle=\"datetimepicker\" style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Make An Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Pricing Plan Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Medical Packages</h5>
                <h1 class=\"display-4\">Awesome Medical Programs</h1>
            </div>
            <div class=\"owl-carousel price-carousel position-relative\" style=\"padding: 0 45px 45px 45px;\">
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/price-1.jpg"), "html", null, true);
        yield " alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\" style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Pregnancy Care</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>49<small class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/price-2.jpg"), "html", null, true);
        yield " alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\" style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Health Checkup</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>99<small class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/price-3.jpg"), "html", null, true);
        yield " alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\" style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Dental Care</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>149<small class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src=";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/price-4.jpg"), "html", null, true);
        yield " alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\" style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Operation & Surgery</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>199<small class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Our Doctors</h5>
                <h1 class=\"display-4\">Qualified Healthcare Professionals</h1>
            </div>
            <div class=\"owl-carousel team-carousel position-relative\">
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team-1.jpg"), "html", null, true);
        yield " style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" ";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team-2.jpg"), "html", null, true);
        yield " style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src=";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team-3.jpg"), "html", null, true);
        yield " style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Search Start -->
    <div class=\"container-fluid bg-primary my-5 py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Find A Doctor</h5>
                <h1 class=\"display-4 mb-4\">Find A Healthcare Professionals</h1>
                <h5 class=\"text-white fw-normal\">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
            </div>
            <div class=\"mx-auto\" style=\"width: 100%; max-width: 600px;\">
                <div class=\"input-group\">
                    <select class=\"form-select border-primary w-25\" style=\"height: 60px;\">
                        <option selected>Department</option>
                        <option value=\"1\">Department 1</option>
                        <option value=\"2\">Department 2</option>
                        <option value=\"3\">Department 3</option>
                    </select>
                    <input type=\"text\" class=\"form-control border-primary w-50\" placeholder=\"Keyword\">
                    <button class=\"btn btn-dark border-0 w-25\">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- Testimonial Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Testimonial</h5>
                <h1 class=\"display-4\">Patients Say About Our Services</h1>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"owl-carousel testimonial-carousel\">
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\" src=";
        // line 563
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonial-1.jpg"), "html", null, true);
        yield " alt=\"\">
                                <div class=\"position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle\" style=\"width: 60px; height: 60px;\">
                                    <i class=\"fa fa-quote-left fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <p class=\"fs-4 fw-normal\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                            <hr class=\"w-25 mx-auto\">
                            <h3>Patient Name</h3>
                            <h6 class=\"fw-normal text-primary mb-3\">Profession</h6>
                        </div>
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\" src=";
        // line 575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonial-2.jpg"), "html", null, true);
        yield " alt=\"\">
                                <div class=\"position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle\" style=\"width: 60px; height: 60px;\">
                                    <i class=\"fa fa-quote-left fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <p class=\"fs-4 fw-normal\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                            <hr class=\"w-25 mx-auto\">
                            <h3>Patient Name</h3>
                            <h6 class=\"fw-normal text-primary mb-3\">Profession</h6>
                        </div>
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\" src=";
        // line 587
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonial-3.jpg"), "html", null, true);
        yield " alt=\"\">
                                <div class=\"position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle\" style=\"width: 60px; height: 60px;\">
                                    <i class=\"fa fa-quote-left fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <p class=\"fs-4 fw-normal\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                            <hr class=\"w-25 mx-auto\">
                            <h3>Patient Name</h3>
                            <h6 class=\"fw-normal text-primary mb-3\">Profession</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Blog Post</h5>
                <h1 class=\"display-4\">Our Latest Medical Blog Posts</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=";
        // line 615
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog-1.jpg"), "html", null, true);
        yield " alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user.jpg"), "html", null, true);
        yield " width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=";
        // line 635
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog-2.jpg"), "html", null, true);
        yield " alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=";
        // line 643
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user.jpg"), "html", null, true);
        yield " width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=";
        // line 655
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog-3.jpg"), "html", null, true);
        yield " alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=";
        // line 663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user.jpg"), "html", null, true);
        yield " width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 679
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 680
        yield "    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light mt-5 py-5\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Get In Touch</h4>
                    <p class=\"mb-4\">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-primary me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope text-primary me-3\"></i>info@example.com</p>
                    <p class=\"mb-0\"><i class=\"fa fa-phone-alt text-primary me-3\"></i>+012 345 67890</p>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Quick Links</h4>
                    <div class=\"d-flex flex-column justify-content-start\">
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Home</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>About Us</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Our Services</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Meet The Team</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Latest Blog</a>
                        <a class=\"text-light\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Contact Us</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Popular Links</h4>
                    <div class=\"d-flex flex-column justify-content-start\">
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Home</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>About Us</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Our Services</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Meet The Team</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Latest Blog</a>
                        <a class=\"text-light\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Contact Us</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Newsletter</h4>
                    <form action=\"\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control p-3 border-0\" placeholder=\"Your Email Address\">
                            <button class=\"btn btn-primary\">Sign Up</button>
                        </div>
                    </form>
                    <h6 class=\"text-primary text-uppercase mt-4 mb-3\">Follow Us</h6>
                    <div class=\"d-flex\">
                        <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-2\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid bg-dark text-light border-top border-secondary py-4\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-md-6 text-center text-md-start\">
                    <p class=\"mb-md-0\">&copy; <a class=\"text-primary\" href=\"#\">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class=\"col-md-6 text-center text-md-end\">
                    <p class=\"mb-0\">Designed by <a class=\"text-primary\" href=\"https://htmlcodex.com\">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 751
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 752
        yield "    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=";
        // line 755
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/easing/easing.min.js"), "html", null, true);
        yield "></script>
    <script src=";
        // line 756
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "></script>
    <script src=";
        // line 757
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "></script>
    <script src=";
        // line 758
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        yield "></script>
    <script src=";
        // line 759
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        yield "></script>
    <script src=";
        // line 760
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        yield "></script>

    <!-- Template Javascript -->
    <script src=";
        // line 763
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "></script>
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
        return "base.html.twig";
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
        return array (  1134 => 763,  1128 => 760,  1124 => 759,  1120 => 758,  1116 => 757,  1112 => 756,  1108 => 755,  1103 => 752,  1090 => 751,  1014 => 680,  1001 => 679,  975 => 663,  964 => 655,  949 => 643,  938 => 635,  923 => 623,  912 => 615,  881 => 587,  866 => 575,  851 => 563,  789 => 504,  767 => 485,  745 => 466,  709 => 433,  688 => 415,  667 => 397,  646 => 379,  438 => 174,  412 => 150,  399 => 149,  385 => 80,  372 => 79,  355 => 139,  349 => 136,  345 => 135,  341 => 133,  334 => 129,  325 => 123,  319 => 120,  315 => 119,  311 => 118,  303 => 113,  299 => 112,  295 => 110,  293 => 109,  283 => 106,  265 => 93,  257 => 92,  249 => 91,  241 => 90,  231 => 82,  229 => 79,  222 => 74,  209 => 73,  164 => 37,  151 => 36,  137 => 765,  135 => 751,  128 => 746,  126 => 679,  123 => 678,  121 => 149,  116 => 146,  114 => 73,  111 => 72,  109 => 36,  102 => 32,  95 => 28,  91 => 27,  85 => 24,  81 => 23,  67 => 12,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Bloom</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free HTML Templates\" name=\"keywords\">
    <meta content=\"Free HTML Templates\" name=\"description\">

    <!-- Favicon -->
    <link href={{asset('assets/img/Logo.png')}} rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap\" rel=\"stylesheet\">  

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href={{asset(\"assets/lib/owlcarousel/assets/owl.carousel.min.css\")}} rel=\"stylesheet\">
    <link href={{asset(\"assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css\")}} rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href={{asset('assets/css/bootstrap.min.css')}} rel=\"stylesheet\">
    <link rel=\"stylesheet\" href={{asset('assets/scss/bootstrap.scss')}}>


    <!-- Template Stylesheet -->
    <link href={{asset('assets/css/style.css')}} rel=\"stylesheet\">
</head>

<body>
    {% block topbar %}
    <!-- Topbar Start -->
    <div class=\"container-fluid py-2 border-bottom d-none d-lg-block\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-lg-start mb-2 mb-lg-0\">
                    <div class=\"d-inline-flex align-items-center\">
                        <a class=\"text-decoration-none text-body pe-3\" href=\"\"><i class=\"bi bi-telephone me-2\"></i>+216 25 000 000</a>
                        <span class=\"text-body\">|</span>
                        <a class=\"text-decoration-none text-body px-3\" href=\"\"><i class=\"bi bi-envelope me-2\"></i>info@example.com</a>
                    </div>
                </div>
                <div class=\"col-md-6 text-center text-lg-end\">
                    <div class=\"d-inline-flex align-items-center\">
                        <a class=\"text-body px-2\" href=\"\">
                            <i class=\"fab fa-facebook-f\"></i>
                        </a>
                        <a class=\"text-body px-2\" href=\"\">
                            <i class=\"fab fa-twitter\"></i>
                        </a>
                        <a class=\"text-body px-2\" href=\"\">
                            <i class=\"fab fa-linkedin-in\"></i>
                        </a>
                        <a class=\"text-body px-2\" href=\"\">
                            <i class=\"fab fa-instagram\"></i>
                        </a>
                        <a class=\"text-body ps-2\" href=\"\">
                            <i class=\"fab fa-youtube\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    {% endblock %}

    {% block navbar %}
    <!-- Navbar Start -->
    <div class=\"container-fluid sticky-top bg-white shadow-sm\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0\">
                <a href=\"#\" class=\"navbar-brand\">
                    {% block title %}
                        <img src=\"{{ asset('assets/img/Logo.png') }}\" alt=\"Logo\" style=\"width: 70px; height: auto;\">
                    {% endblock %}


                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"{{ path('home') }}\" class=\"nav-item nav-link {% if app.request.attributes.get('_route') == 'home' %}active{% endif %}\">Home</a>
                        <a href=\"{{ path('about') }}\" class=\"nav-item nav-link {% if app.request.attributes.get('_route') == 'about' %}active{% endif %}\">About</a>
                        <a href=\"{{ path('services') }}\" class=\"nav-item nav-link {% if app.request.attributes.get('_route') == 'services' %}active{% endif %}\">Services</a>
                        <a href=\"\" class=\"nav-item nav-link {% if app.request.attributes.get('_route') == 'booking' %}active{% endif %}\">Booking</a>

                        <!-- Dropdown Menu -->
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu m-0\">
                                <a href=\"#\" class=\"dropdown-item\">Blog</a>
                                <a href=\"#\" class=\"dropdown-item\">Pharmacy</a>
                                <a href=\"#\" class=\"dropdown-item\">Objectives</a>
                                <a href=\"#\" class=\"dropdown-item\">Events and Courses</a>
                            </div>
                        </div>

                        <a href=\"{{ path('contact') }}\" class=\"nav-item nav-link {% if app.request.attributes.get('_route') == 'contact' %}active{% endif %}\">Contact</a>

                        <!-- Profile Dropdown (Visible when user is logged in) -->
                        {% if app.user %}
                        <li class=\"nav-item dropdown ms-3\">
                            <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">
                                <img src=\"{{ asset('assets/dashboard/img/profile.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\" width=\"35\" height=\"35\">
                                <span class=\"ms-2 d-none d-lg-inline\">Hi, {{ app.user.name }}</span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <div class=\"dropdown-header text-center\">
                                        <img src=\"{{ asset('assets/dashboard/img/profile.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\" width=\"50\" height=\"50\">
                                        <h6 class=\"mt-2\">{{ app.user.name }}</h6>
                                        <p class=\"text-muted\">{{ app.user.email }}</p>
                                    </div>
                                </li>
                                <li><a class=\"dropdown-item\" href=\"{{path('user_profile')}}\">My Profile</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">My Balance</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Inbox</a></li>
                                <div class=\"dropdown-divider\"></div>
                                <li><a class=\"dropdown-item\" href=\"#\">Account Settings</a></li>
                                <div class=\"dropdown-divider\"></div>
                                <li><a class=\"dropdown-item text-danger\" href=\"{{ path('logout') }}\">Logout</a></li>
                            </ul>
                        </li>
                        {% else %}
                        <!-- Login & Register Buttons (Visible when user is not logged in) -->
                        <div class=\"d-flex align-items-center ms-3\">
                            <a href=\"{{ path('login') }}\" class=\"btn btn-login me-2\">Login</a>
                            <a href=\"{{ path('registration_choice') }}\" class=\"btn btn-register\">Register</a>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    {% endblock %}



    {% block content %}
    <!-- Hero Start -->
    <div class=\"container-fluid bg-primary py-5 mb-5 hero-header\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-start\">
                <div class=\"col-lg-8 text-center text-lg-start\">
                    <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\" style=\"border-color: rgba(256, 256, 256, .3) !important;\">Welcome To Bloom</h5>
                    <h1 class=\"display-1 text-white mb-md-4\">Best Healthcare Solution In Your City</h1>
                    <div class=\"pt-2\">
                        <a href=\"\" class=\"btn btn-light rounded-pill py-md-3 px-md-5 mx-2\">Find Doctor</a>
                        <a href=\"\" class=\"btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2\">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-5 mb-5 mb-lg-0\" style=\"min-height: 500px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute w-100 h-100 rounded\" src={{asset(\"assets/img/about.jpg\")}} style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">About Us</h5>
                        <h1 class=\"display-4\">Best Medical Care For Yourself and Your Family</h1>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                    <div class=\"row g-3 pt-3\">
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-user-md text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Qualified<small class=\"d-block text-primary\">Doctors</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-procedures text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Emergency<small class=\"d-block text-primary\">Services</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-microscope text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Accurate<small class=\"d-block text-primary\">Testing</small></h6>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-6\">
                            <div class=\"bg-light text-center rounded-circle py-4\">
                                <i class=\"fa fa-3x fa-ambulance text-primary mb-3\"></i>
                                <h6 class=\"mb-0\">Free<small class=\"d-block text-primary\">Ambulance</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

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


    <!-- Appointment Start -->
    <div class=\"container-fluid bg-primary my-5 py-5\">
        <div class=\"container py-5\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-6 mb-5 mb-lg-0\">
                    <div class=\"mb-4\">
                        <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Appointment</h5>
                        <h1 class=\"display-4\">Make An Appointment For Your Family</h1>
                    </div>
                    <p class=\"text-white mb-5\">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <a class=\"btn btn-dark rounded-pill py-3 px-5 me-3\" href=\"\">Find Doctor</a>
                    <a class=\"btn btn-outline-dark rounded-pill py-3 px-5\" href=\"\">Read More</a>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"bg-white text-center rounded p-5\">
                        <h1 class=\"mb-4\">Book An Appointment</h1>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select bg-light border-0\" style=\"height: 55px;\">
                                        <option selected>Choose Department</option>
                                        <option value=\"1\">Department 1</option>
                                        <option value=\"2\">Department 2</option>
                                        <option value=\"3\">Department 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select bg-light border-0\" style=\"height: 55px;\">
                                        <option selected>Select Doctor</option>
                                        <option value=\"1\">Doctor 1</option>
                                        <option value=\"2\">Doctor 2</option>
                                        <option value=\"3\">Doctor 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Your Name\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\" placeholder=\"Your Email\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"date\" id=\"date\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                            class=\"form-control bg-light border-0 datetimepicker-input\"
                                            placeholder=\"Date\" data-target=\"#date\" data-toggle=\"datetimepicker\" style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"time\" id=\"time\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                            class=\"form-control bg-light border-0 datetimepicker-input\"
                                            placeholder=\"Time\" data-target=\"#time\" data-toggle=\"datetimepicker\" style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Make An Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Pricing Plan Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Medical Packages</h5>
                <h1 class=\"display-4\">Awesome Medical Programs</h1>
            </div>
            <div class=\"owl-carousel price-carousel position-relative\" style=\"padding: 0 45px 45px 45px;\">
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src={{asset(\"assets/img/price-1.jpg\")}} alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\" style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Pregnancy Care</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>49<small class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src={{asset(\"assets/img/price-2.jpg\")}} alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\" style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Health Checkup</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>99<small class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src={{asset(\"assets/img/price-3.jpg\")}} alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\" style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Dental Care</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>149<small class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
                <div class=\"bg-light rounded text-center\">
                    <div class=\"position-relative\">
                        <img class=\"img-fluid rounded-top\" src={{asset(\"assets/img/price-4.jpg\")}} alt=\"\">
                        <div class=\"position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center\" style=\"background: rgba(29, 42, 77, .8);\">
                            <h3 class=\"text-white\">Operation & Surgery</h3>
                            <h1 class=\"display-4 text-white mb-0\">
                                <small class=\"align-top fw-normal\" style=\"font-size: 22px; line-height: 45px;\">\$</small>199<small class=\"align-bottom fw-normal\" style=\"font-size: 16px; line-height: 40px;\">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class=\"text-center py-5\">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href=\"\" class=\"btn btn-primary rounded-pill py-3 px-5 my-2\">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Our Doctors</h5>
                <h1 class=\"display-4\">Qualified Healthcare Professionals</h1>
            </div>
            <div class=\"owl-carousel team-carousel position-relative\">
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src={{asset(\"assets/img/team-1.jpg\")}} style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" {{asset(\"assets/img/team-2.jpg\")}} style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"team-item\">
                    <div class=\"row g-0 bg-light rounded overflow-hidden\">
                        <div class=\"col-12 col-sm-5 h-100\">
                            <img class=\"img-fluid h-100\" src={{asset(\"assets/img/team-3.jpg\")}} style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-12 col-sm-7 h-100 d-flex flex-column\">
                            <div class=\"mt-auto p-4\">
                                <h3>Doctor Name</h3>
                                <h6 class=\"fw-normal fst-italic text-primary mb-4\">Cardiology Specialist</h6>
                                <p class=\"m-0\">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class=\"d-flex mt-auto border-top p-4\">
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Search Start -->
    <div class=\"container-fluid bg-primary my-5 py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">Find A Doctor</h5>
                <h1 class=\"display-4 mb-4\">Find A Healthcare Professionals</h1>
                <h5 class=\"text-white fw-normal\">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
            </div>
            <div class=\"mx-auto\" style=\"width: 100%; max-width: 600px;\">
                <div class=\"input-group\">
                    <select class=\"form-select border-primary w-25\" style=\"height: 60px;\">
                        <option selected>Department</option>
                        <option value=\"1\">Department 1</option>
                        <option value=\"2\">Department 2</option>
                        <option value=\"3\">Department 3</option>
                    </select>
                    <input type=\"text\" class=\"form-control border-primary w-50\" placeholder=\"Keyword\">
                    <button class=\"btn btn-dark border-0 w-25\">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- Testimonial Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Testimonial</h5>
                <h1 class=\"display-4\">Patients Say About Our Services</h1>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"owl-carousel testimonial-carousel\">
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\" src={{asset(\"assets/img/testimonial-1.jpg\")}} alt=\"\">
                                <div class=\"position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle\" style=\"width: 60px; height: 60px;\">
                                    <i class=\"fa fa-quote-left fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <p class=\"fs-4 fw-normal\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                            <hr class=\"w-25 mx-auto\">
                            <h3>Patient Name</h3>
                            <h6 class=\"fw-normal text-primary mb-3\">Profession</h6>
                        </div>
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\" src={{asset(\"assets/img/testimonial-2.jpg\")}} alt=\"\">
                                <div class=\"position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle\" style=\"width: 60px; height: 60px;\">
                                    <i class=\"fa fa-quote-left fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <p class=\"fs-4 fw-normal\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                            <hr class=\"w-25 mx-auto\">
                            <h3>Patient Name</h3>
                            <h6 class=\"fw-normal text-primary mb-3\">Profession</h6>
                        </div>
                        <div class=\"testimonial-item text-center\">
                            <div class=\"position-relative mb-5\">
                                <img class=\"img-fluid rounded-circle mx-auto\" src={{asset(\"assets/img/testimonial-3.jpg\")}} alt=\"\">
                                <div class=\"position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle\" style=\"width: 60px; height: 60px;\">
                                    <i class=\"fa fa-quote-left fa-2x text-primary\"></i>
                                </div>
                            </div>
                            <p class=\"fs-4 fw-normal\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                            <hr class=\"w-25 mx-auto\">
                            <h3>Patient Name</h3>
                            <h6 class=\"fw-normal text-primary mb-3\">Profession</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Blog Post</h5>
                <h1 class=\"display-4\">Our Latest Medical Blog Posts</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src={{asset(\"assets/img/blog-1.jpg\")}} alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src={{asset(\"assets/img/user.jpg\")}} width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src={{asset(\"assets/img/blog-2.jpg\")}} alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src={{asset(\"assets/img/user.jpg\")}} width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src={{asset(\"assets/img/blog-3.jpg\")}} alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src={{asset(\"assets/img/user.jpg\")}} width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    {% endblock %}
    
    {% block footer %}
    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light mt-5 py-5\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Get In Touch</h4>
                    <p class=\"mb-4\">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-primary me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope text-primary me-3\"></i>info@example.com</p>
                    <p class=\"mb-0\"><i class=\"fa fa-phone-alt text-primary me-3\"></i>+012 345 67890</p>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Quick Links</h4>
                    <div class=\"d-flex flex-column justify-content-start\">
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Home</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>About Us</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Our Services</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Meet The Team</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Latest Blog</a>
                        <a class=\"text-light\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Contact Us</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Popular Links</h4>
                    <div class=\"d-flex flex-column justify-content-start\">
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Home</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>About Us</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Our Services</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Meet The Team</a>
                        <a class=\"text-light mb-2\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Latest Blog</a>
                        <a class=\"text-light\" href=\"#\"><i class=\"fa fa-angle-right me-2\"></i>Contact Us</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4\">Newsletter</h4>
                    <form action=\"\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control p-3 border-0\" placeholder=\"Your Email Address\">
                            <button class=\"btn btn-primary\">Sign Up</button>
                        </div>
                    </form>
                    <h6 class=\"text-primary text-uppercase mt-4 mb-3\">Follow Us</h6>
                    <div class=\"d-flex\">
                        <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle me-2\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-lg btn-primary btn-lg-square rounded-circle\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid bg-dark text-light border-top border-secondary py-4\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-md-6 text-center text-md-start\">
                    <p class=\"mb-md-0\">&copy; <a class=\"text-primary\" href=\"#\">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class=\"col-md-6 text-center text-md-end\">
                    <p class=\"mb-0\">Designed by <a class=\"text-primary\" href=\"https://htmlcodex.com\">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    {% endblock %}


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

    {% block javascripts %}
    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src={{asset(\"assets/lib/easing/easing.min.js\")}}></script>
    <script src={{asset(\"assets/lib/waypoints/waypoints.min.js\")}}></script>
    <script src={{asset(\"assets/lib/owlcarousel/owl.carousel.min.js\")}}></script>
    <script src={{asset(\"assets/lib/tempusdominus/js/moment.min.js\")}}></script>
    <script src={{asset(\"assets/lib/tempusdominus/js/moment-timezone.min.js\")}}></script>
    <script src={{asset(\"assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js\")}}></script>

    <!-- Template Javascript -->
    <script src={{asset(\"assets/js/main.js\")}}></script>
    {% endblock %}

</body>

</html>", "base.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\base.html.twig");
    }
}
