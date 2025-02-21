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

/* admin/GestionEvents/cour/list.html.twig */
class __TwigTemplate_a8a234d3bc6ed44f24e45b29c731f5c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionEvents/cour/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/GestionEvents/cour/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/GestionEvents/cour/list.html.twig", 1);
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
        yield "<div class=\"container\">
  <div class=\"page-inner\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\">
            <div class=\"d-flex align-items-center\">
              <h4 class=\"card-title\">Courses</h4>
              <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cour_add");
        yield "\" class=\"btn btn-primary btn-round ms-auto\">
                <i class=\"fa fa-plus\"></i>
                Add Course
              </a>
            </div>
          </div>
          <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table id=\"courses-table\" class=\"display table table-striped table-hover\">
                <thead class=\"thead-dark\">
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Event ID</th>
                    <th>Image</th>
                    <th style=\"width: 15%\">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 34
            yield "                    <tr>
                      <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "titre", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                      <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "description", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                      <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "prix", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                      <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "type", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                      <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["b"], "Event", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                      <td><img src=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["b"], "img", [], "any", false, false, false, 40))), "html", null, true);
            yield "\" width=\"100\"></td>
                      <td>
                        <div class=\"form-button-action\">
                          <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cour_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn btn-link btn-primary btn-sm\" data-bs-toggle=\"tooltip\" title=\"Edit Course\">
                            <i class=\"fa fa-edit\"></i>
                          </a>
                          <form method=\"post\" action=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cour_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this course?');\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 47))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-link btn-danger btn-sm\" data-bs-toggle=\"tooltip\" title=\"Delete Course\">
                              <i class=\"fa fa-times\"></i>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 55
        if (!$context['_iterated']) {
            // line 56
            yield "                    <tr>
                      <td colspan=\"7\" class=\"text-center\">No courses found.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['b'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "                </tbody>
              </table>
            </div>
          </div>
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
        return "admin/GestionEvents/cour/list.html.twig";
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
        return array (  178 => 60,  169 => 56,  167 => 55,  154 => 47,  150 => 46,  144 => 43,  138 => 40,  134 => 39,  130 => 38,  126 => 37,  122 => 36,  118 => 35,  115 => 34,  110 => 33,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block content %}
<div class=\"container\">
  <div class=\"page-inner\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\">
            <div class=\"d-flex align-items-center\">
              <h4 class=\"card-title\">Courses</h4>
              <a href=\"{{ path('app_cour_add') }}\" class=\"btn btn-primary btn-round ms-auto\">
                <i class=\"fa fa-plus\"></i>
                Add Course
              </a>
            </div>
          </div>
          <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table id=\"courses-table\" class=\"display table table-striped table-hover\">
                <thead class=\"thead-dark\">
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Event ID</th>
                    <th>Image</th>
                    <th style=\"width: 15%\">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  {% for b in list %}
                    <tr>
                      <td>{{ b.titre }}</td>
                      <td>{{ b.description }}</td>
                      <td>{{ b.prix }}</td>
                      <td>{{ b.type }}</td>
                      <td>{{ b.Event.id }}</td>
                      <td><img src=\"{{ asset('images/' ~ b.img) }}\" width=\"100\"></td>
                      <td>
                        <div class=\"form-button-action\">
                          <a href=\"{{ path('app_cour_edit', {'id': b.id}) }}\" class=\"btn btn-link btn-primary btn-sm\" data-bs-toggle=\"tooltip\" title=\"Edit Course\">
                            <i class=\"fa fa-edit\"></i>
                          </a>
                          <form method=\"post\" action=\"{{ path('app_cour_delete', {'id': b.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this course?');\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ b.id) }}\">
                            <button type=\"submit\" class=\"btn btn-link btn-danger btn-sm\" data-bs-toggle=\"tooltip\" title=\"Delete Course\">
                              <i class=\"fa fa-times\"></i>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"7\" class=\"text-center\">No courses found.</td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "admin/GestionEvents/cour/list.html.twig", "C:\\Users\\MSI\\Desktop\\PIDEV_3A50_G2\\templates\\admin\\GestionEvents\\cour\\list.html.twig");
    }
}
