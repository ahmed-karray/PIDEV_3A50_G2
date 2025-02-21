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

/* admin/GestionEvents/cour/index.html.twig */
class __TwigTemplate_8425f977868ed7d8a251ad3f577683b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionEvents/cour/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionEvents/cour/index.html.twig"));

        $this->parent = $this->loadTemplate("/admin/dashboard.html.twig", "admin/GestionEvents/cour/index.html.twig", 1);
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
        yield "
<div class=\"container-fluid bg-primary my-5 py-5\">
    <div class=\"container py-5\">
        <div class=\"row gx-5\">
            <div class=\"col-lg-6 mb-5 mb-lg-0\">
                <div class=\"mb-4\">
                    <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">cour</h5>
                    <h1 class=\"display-4\">ajouter un cour</h1>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"bg-white text-center rounded p-5\">
                    <h1 class=\"mb-4\">ajouter un cour</h1>
                    <form action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cour_add");
        yield "\" method=\"POST\">
                        ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        <div class=\"row g-3\">
                            <!-- Nom du patient -->
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control bg-light border-0", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "errors", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 23
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 23), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "                            </div>
                            
                            
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control bg-light border-0", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 31
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 31), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                            </div>

                            <!-- Lieu -->
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control bg-light border-0 datetimepicker-input", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "prix", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 39
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 39), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                            </div>
                            
                            <!-- Date -->
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control bg-light border-0 datetimepicker-input", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "type", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 47
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 47), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                            </div>

                            <!-- Heure -->
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Event", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "form-control bg-light border-0 datetimepicker-input", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "Event", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 55
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 55), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                            </div>                               

                            <!-- Type -->
                            <div class=\"col-12 col-sm-6\">
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "img", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-select bg-light border-0", "style" => "height: 55px;"]]);
        yield "
                                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "img", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 63
            yield "                                    <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 63), "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                            </div>
                            <div class=\"col-12\">
                                <button type=\"submit\" class=\"btn btn-primary\">ajouter cour</button>
                            </div>
                        </div>
                        ";
        // line 70
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
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
        return "admin/GestionEvents/cour/index.html.twig";
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
        return array (  241 => 70,  234 => 65,  225 => 63,  221 => 62,  217 => 61,  211 => 57,  202 => 55,  198 => 54,  194 => 53,  188 => 49,  179 => 47,  175 => 46,  171 => 45,  165 => 41,  156 => 39,  152 => 38,  148 => 37,  142 => 33,  133 => 31,  129 => 30,  125 => 29,  119 => 25,  110 => 23,  106 => 22,  102 => 21,  95 => 17,  91 => 16,  76 => 3,  63 => 2,  40 => 1,);
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
                    <h5 class=\"d-inline-block text-white text-uppercase border-bottom border-5\">cour</h5>
                    <h1 class=\"display-4\">ajouter un cour</h1>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"bg-white text-center rounded p-5\">
                    <h1 class=\"mb-4\">ajouter un cour</h1>
                    <form action=\"{{ path('app_cour_add') }}\" method=\"POST\">
                        {{ form_start(form, {'attr': { 'novalidate': 'novalidate'}}) }}
                        <div class=\"row g-3\">
                            <!-- Nom du patient -->
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.titre, {'attr': {'class': 'form-control bg-light border-0', 'style': 'height: 55px;'}}) }}
                                {% for error in form.titre.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>
                            
                            
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.description, {'attr': {'class': 'form-control bg-light border-0', 'style': 'height: 55px;'}}) }}
                                {% for error in form.description.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>

                            <!-- Lieu -->
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.prix, {'attr': {'class': 'form-control bg-light border-0 datetimepicker-input', 'style': 'height: 55px;'}}) }}
                                {% for error in form.prix.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>
                            
                            <!-- Date -->
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.type, {'attr': {'class': 'form-control bg-light border-0 datetimepicker-input', 'style': 'height: 55px;'}}) }}
                                {% for error in form.type.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>

                            <!-- Heure -->
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.Event, {'attr': {'class': 'form-control bg-light border-0 datetimepicker-input', 'style': 'height: 55px;'}}) }}
                                {% for error in form.Event.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>                               

                            <!-- Type -->
                            <div class=\"col-12 col-sm-6\">
                                {{ form_row(form.img, {'attr': {'class': 'form-select bg-light border-0', 'style': 'height: 55px;'}}) }}
                                {% for error in form.img.vars.errors %}
                                    <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
                                {% endfor %}
                            </div>
                            <div class=\"col-12\">
                                <button type=\"submit\" class=\"btn btn-primary\">ajouter cour</button>
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
", "admin/GestionEvents/cour/index.html.twig", "C:\\Users\\MSI\\Desktop\\PIDEV_3A50_G2\\templates\\admin\\GestionEvents\\cour\\index.html.twig");
    }
}
