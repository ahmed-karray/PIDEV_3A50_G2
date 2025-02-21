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

/* GestionEvents/event/front_event.html.twig */
class __TwigTemplate_32efe58c94a4fb0179027589b773c1aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvents/event/front_event.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvents/event/front_event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "GestionEvents/event/front_event.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "
<!-- Pricing Plan Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto mb-5\" style=\"max-width: 700px;\">
            <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Événements</h5>
            <h1 class=\"display-4\">Découvrez nos événements à venir</h1>
        </div>
        <div class=\"row\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 15
            yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"bg-light rounded text-center p-4\">
                        <h2 class=\"text-primary\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 17), "html", null, true);
            yield "</h2>
                        <p><strong>Description:</strong> ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                        <p><strong>Lieu:</strong> ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 19), "html", null, true);
            yield "</p>
                        <p><strong>Date:</strong> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 20), "d-m-Y"), "html", null, true);
            yield "</p>
                        <p><strong>Heure:</strong> ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "heure", [], "any", false, false, false, 21), "html", null, true);
            yield "</p>
                        <p><strong>Type:</strong> ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
                        <p><strong>Image:</strong></p>
                        <img src=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "img", [], "any", false, false, false, 24))), "html", null, true);
            yield "\"  class=\"img-fluid\">
                        <p><strong>Budget:</strong> ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "budget", [], "any", false, false, false, 25), "html", null, true);
            yield "</p>
                        <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cour_front", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"btn btn-primary mt-2\">Voir cours</a>

                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 30
        if (!$context['_iterated']) {
            // line 31
            yield "                <p class=\"text-center\">Aucun événement disponible pour le moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "        </div>
    </div>
</div>
<!-- Pricing Plan End -->

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
        return "GestionEvents/event/front_event.html.twig";
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
        return array (  147 => 33,  140 => 31,  138 => 30,  129 => 26,  125 => 25,  121 => 24,  116 => 22,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  92 => 15,  87 => 14,  76 => 5,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block content  %}

<!-- Pricing Plan Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto mb-5\" style=\"max-width: 700px;\">
            <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Événements</h5>
            <h1 class=\"display-4\">Découvrez nos événements à venir</h1>
        </div>
        <div class=\"row\">
            {% for event in events %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"bg-light rounded text-center p-4\">
                        <h2 class=\"text-primary\">{{ event.titre }}</h2>
                        <p><strong>Description:</strong> {{ event.description }}</p>
                        <p><strong>Lieu:</strong> {{ event.lieu }}</p>
                        <p><strong>Date:</strong> {{ event.date|date('d-m-Y') }}</p>
                        <p><strong>Heure:</strong> {{ event.heure }}</p>
                        <p><strong>Type:</strong> {{ event.type }}</p>
                        <p><strong>Image:</strong></p>
                        <img src=\"{{ asset('image/' ~ event.img) }}\"  class=\"img-fluid\">
                        <p><strong>Budget:</strong> {{ event.budget }}</p>
                        <a href=\"{{ path('cour_front', {'id': event.id}) }}\" class=\"btn btn-primary mt-2\">Voir cours</a>

                    </div>
                </div>
            {% else %}
                <p class=\"text-center\">Aucun événement disponible pour le moment.</p>
            {% endfor %}
        </div>
    </div>
</div>
<!-- Pricing Plan End -->

    {% endblock %}
", "GestionEvents/event/front_event.html.twig", "C:\\Users\\MSI\\Desktop\\PIDEV_3A50_G2\\templates\\GestionEvents\\event\\front_event.html.twig");
    }
}
