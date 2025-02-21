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

/* gestionEvents/cour/cour_front.html.twig */
class __TwigTemplate_be020812c72cb30548f1ce2fec9e68b6 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionEvents/cour/cour_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionEvents/cour/cour_front.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestionEvents/cour/cour_front.html.twig", 1);
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
        yield "
<div class=\"container-fluid py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto mb-5\" style=\"max-width: 700px;\">
            <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Cours</h5>
            <h1 class=\"display-4\">Découvrez les cours de cet événement</h1>
        </div>
        <div class=\"row\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 13
            yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"bg-light rounded text-center p-4\">
                        <h2 class=\"text-primary\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "titre", [], "any", false, false, false, 15), "html", null, true);
            yield "</h2>
                        <p><strong>Description:</strong> ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "description", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
                        <p><strong>Prix:</strong> ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "prix", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>
                        <p><strong>Type:</strong> ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "type", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                        <img src=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "img", [], "any", false, false, false, 19))), "html", null, true);
            yield "\" class=\"img-fluid\">
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 22
        if (!$context['_iterated']) {
            // line 23
            yield "                <p class=\"text-center\">Aucun cours disponible pour cet événement.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cour'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "        </div>
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
        return "gestionEvents/cour/cour_front.html.twig";
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
        return array (  128 => 25,  121 => 23,  119 => 22,  111 => 19,  107 => 18,  103 => 17,  99 => 16,  95 => 15,  91 => 13,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

<div class=\"container-fluid py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto mb-5\" style=\"max-width: 700px;\">
            <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Cours</h5>
            <h1 class=\"display-4\">Découvrez les cours de cet événement</h1>
        </div>
        <div class=\"row\">
            {% for cour in cours %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"bg-light rounded text-center p-4\">
                        <h2 class=\"text-primary\">{{ cour.titre }}</h2>
                        <p><strong>Description:</strong> {{ cour.description }}</p>
                        <p><strong>Prix:</strong> {{ cour.prix }}</p>
                        <p><strong>Type:</strong> {{ cour.type }}</p>
                        <img src=\"{{ asset('images/' ~ cour.img) }}\" class=\"img-fluid\">
                    </div>
                </div>
            {% else %}
                <p class=\"text-center\">Aucun cours disponible pour cet événement.</p>
            {% endfor %}
        </div>
    </div>
</div>

{% endblock %}
", "gestionEvents/cour/cour_front.html.twig", "C:\\Users\\MSI\\Desktop\\PIDEV_3A50_G2\\templates\\GestionEvents\\cour\\cour_front.html.twig");
    }
}
