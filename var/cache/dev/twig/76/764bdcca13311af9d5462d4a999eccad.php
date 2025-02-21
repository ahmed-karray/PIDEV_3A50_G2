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

/* admin/GestionEvents/event/index.html.twig */
class __TwigTemplate_fa41a3712f91730e807fc1fa7f6aefd6 extends Template
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
        return "/admin/dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionEvents/event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionEvents/event/index.html.twig"));

        $this->parent = $this->loadTemplate("/admin/dashboard.html.twig", "admin/GestionEvents/event/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "<div class=\"container-fluid bg-primary my-5 py-5\">
    <div class=\"container py-5\">
        <div class=\"row gx-5\">
            <div class=\"col-lg-6 mb-5 mb-lg-0\">
                <div class=\"mb-4\">
                    <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">evenement</h5>
                    <h1 class=\"display-4\">ajouter un evenement</h1>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"bg-white text-center rounded p-5\">
                    <h1 class=\"mb-4\">ajouter un evenement</h1>
                    <form action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_add");
        yield "\" method=\"POST\">
                        ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        <div class=\"row g-3\">
                            <!-- Nom du patient -->
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control bg-light border-0", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 22
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 22), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "                            </div>
                            
                            <!-- Email du patient -->
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control bg-light border-0", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 30
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 30), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "                            </div>

                            <!-- Lieu -->
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "lieu", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "form-control bg-light border-0 datetimepicker-input", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lieu", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "errors", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 38
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 38), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                            </div>
                            
                            <!-- Date -->
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "date", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control bg-light border-0 datetimepicker-input", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "date", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 46
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 46), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                            </div>

                            <!-- Heure -->
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "heure", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control bg-light border-0 datetimepicker-input", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "heure", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 54
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 54), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                            </div>                               

                            <!-- Type -->
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "type", [], "any", false, false, false, 60), 'row', ["attr" => ["class" => "form-select bg-light border-0", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "type", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "errors", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 62
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 62), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                            </div>

                            <!-- Statut -->
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "img", [], "any", false, false, false, 68), 'row', ["attr" => ["class" => "form-select bg-light border-0", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "img", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "errors", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 70
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 70), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                            </div>

                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "budget", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-select bg-light border-0", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "budget", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "errors", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 77
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 77), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                            </div>

                            <div class=\"col-12\">
                                <button type=\"submit\" class=\"btn btn-primary\">ajouter evenement</button>
                            </div>
                        </div>
                        ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
        yield "
                    </form>
                </div>
            </div>
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
        return "admin/GestionEvents/event/index.html.twig";
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
        return array (  286 => 85,  278 => 79,  269 => 77,  265 => 76,  261 => 75,  256 => 72,  247 => 70,  243 => 69,  239 => 68,  233 => 64,  224 => 62,  220 => 61,  216 => 60,  210 => 56,  201 => 54,  197 => 53,  193 => 52,  187 => 48,  178 => 46,  174 => 45,  170 => 44,  164 => 40,  155 => 38,  151 => 37,  147 => 36,  141 => 32,  132 => 30,  128 => 29,  124 => 28,  118 => 24,  109 => 22,  105 => 21,  101 => 20,  94 => 16,  90 => 15,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '/admin/dashboard.html.twig' %}
{% block content %}
<div class=\"container-fluid bg-primary my-5 py-5\">
    <div class=\"container py-5\">
        <div class=\"row gx-5\">
            <div class=\"col-lg-6 mb-5 mb-lg-0\">
                <div class=\"mb-4\">
                    <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">evenement</h5>
                    <h1 class=\"display-4\">ajouter un evenement</h1>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"bg-white text-center rounded p-5\">
                    <h1 class=\"mb-4\">ajouter un evenement</h1>
                    <form action=\"{{ path('app_event_add') }}\" method=\"POST\">
                        {{ form_start(form, {'attr': { 'novalidate': 'novalidate'}}) }}
                        <div class=\"row g-3\">
                            <!-- Nom du patient -->
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.titre, {'attr': {'class': 'form-control bg-light border-0', 'style': 'height: 55px;'}}) }}
                                {% for error in form.titre.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>
                            
                            <!-- Email du patient -->
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.description, {'attr': {'class': 'form-control bg-light border-0', 'style': 'height: 55px;'}}) }}
                                {% for error in form.description.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>

                            <!-- Lieu -->
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.lieu, {'attr': {'class': 'form-control bg-light border-0 datetimepicker-input', 'style': 'height: 55px;'}}) }}
                                {% for error in form.lieu.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>
                            
                            <!-- Date -->
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.date, {'attr': {'class': 'form-control bg-light border-0 datetimepicker-input', 'style': 'height: 55px;'}}) }}
                                {% for error in form.date.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>

                            <!-- Heure -->
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.heure, {'attr': {'class': 'form-control bg-light border-0 datetimepicker-input', 'style': 'height: 55px;'}}) }}
                                {% for error in form.heure.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>                               

                            <!-- Type -->
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.type, {'attr': {'class': 'form-select bg-light border-0', 'style': 'height: 55px;'}}) }}
                                {% for error in form.type.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>

                            <!-- Statut -->
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.img, {'attr': {'class': 'form-select bg-light border-0', 'style': 'height: 55px;'}}) }}
                                {% for error in form.img.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>

                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.budget, {'attr': {'class': 'form-select bg-light border-0', 'style': 'height: 55px;'}}) }}
                                {% for error in form.budget.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>

                            <div class=\"col-12\">
                                <button type=\"submit\" class=\"btn btn-primary\">ajouter evenement</button>
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/GestionEvents/event/index.html.twig", "C:\\Users\\MSI\\Desktop\\PIDEV_3A50_G2\\templates\\admin\\GestionEvents\\event\\index.html.twig");
    }
}
