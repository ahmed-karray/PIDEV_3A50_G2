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

/* admin/GestionEvents/event/list.html.twig */
class __TwigTemplate_1f8310d998df1ba62d680a91df1bf0f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionEvents/event/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionEvents/event/list.html.twig"));

        $this->parent = $this->loadTemplate("/admin/dashboard.html.twig", "admin/GestionEvents/event/list.html.twig", 1);
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
        yield "<div class=\"container\">
    <h1 class=\"my-4\">
        <a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_add");
        yield "\" class=\"btn btn-primary\">ajouter evenement</a>
    </h1>

    <table class=\"table table-bordered table-striped\">
        <caption>List of events</caption>
        <thead class=\"table-dark\">
            <tr>
                <th>titre</th>
                <th>description</th>
                <th>lieu</th>
                <th>date</th>
                <th>heure</th>
                <th>type</th>
                <th>image</th>
                <th>budget</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 25
            yield "                <tr>
                    <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 26), "html", null, true);
            yield "</td> 
                    <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                    <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "lieu", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                    <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 29), "Y-m-d H:i"), "html", null, true);
            yield "</td>
                    <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "heure", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "type", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                    <td> <img src=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "img", [], "any", false, false, false, 32))), "html", null, true);
            yield "\" width=\"100\"></td>
                    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "budget", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Update</a>
                         <form action=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\"> 
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 37))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this appointment?');\">Delete</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 42
        if (!$context['_iterated']) {
            // line 43
            yield "                <tr>
                    <td colspan=\"5\" class=\"text-center\">No event found.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "        </tbody>
    </table>
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
        return "admin/GestionEvents/event/list.html.twig";
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
        return array (  172 => 47,  163 => 43,  161 => 42,  151 => 37,  147 => 36,  143 => 35,  138 => 33,  134 => 32,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  114 => 27,  110 => 26,  107 => 25,  102 => 24,  80 => 5,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '/admin/dashboard.html.twig' %}
{% block content %}
<div class=\"container\">
    <h1 class=\"my-4\">
        <a href=\"{{ path('app_event_add') }}\" class=\"btn btn-primary\">ajouter evenement</a>
    </h1>

    <table class=\"table table-bordered table-striped\">
        <caption>List of events</caption>
        <thead class=\"table-dark\">
            <tr>
                <th>titre</th>
                <th>description</th>
                <th>lieu</th>
                <th>date</th>
                <th>heure</th>
                <th>type</th>
                <th>image</th>
                <th>budget</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            {% for a in list %}
                <tr>
                    <td>{{ a.titre }}</td> 
                    <td>{{ a.description }}</td>
                    <td>{{ a.lieu }}</td>
                    <td>{{ a.date|date('Y-m-d H:i') }}</td>
                    <td>{{ a.heure }}</td>
                    <td>{{ a.type }}</td>
                    <td> <img src=\"{{ asset('image/' ~ a.img) }}\" width=\"100\"></td>
                    <td>{{ a.budget }}</td>
                    <td>
                        <a href=\"{{ path('edit', {'id': a.id}) }}\" class=\"btn btn-warning btn-sm\">Update</a>
                         <form action=\"{{ path('delete', {'id': a.id}) }}\" method=\"post\" class=\"d-inline\"> 
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ a.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this appointment?');\">Delete</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\" class=\"text-center\">No event found.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "admin/GestionEvents/event/list.html.twig", "C:\\Users\\MSI\\Desktop\\PIDEV_3A50_G2\\templates\\admin\\GestionEvents\\event\\list.html.twig");
    }
}
