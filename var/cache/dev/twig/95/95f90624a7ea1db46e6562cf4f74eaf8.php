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

/* admin/gestion_user/user.html.twig */
class __TwigTemplate_e878fa019f8896689f440b3ed3aa53c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/user.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/gestion_user/user.html.twig", 1);
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
              <h4 class=\"card-title\">Users</h4>
              <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_choice");
        yield "\" class=\"btn btn-primary btn-round ms-auto\">
                <i class=\"fa fa-plus\"></i>
                Add User
              </a>
            </div>
          </div>
          <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table id=\"users-table\" class=\"display table table-striped table-hover\">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role(s)</th>
                    <th style=\"width: 10%\">Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role(s)</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            yield "                    <tr>
                      <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                      <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                      <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 42), ", "), "html", null, true);
            yield "</td>
                      <td>
                        <div class=\"form-button-action\">
                            <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\"
                                class=\"btn btn-link btn-primary btn-lg\"
                                 data-bs-toggle=\"tooltip\"
                                 title=\"Edit User\">
                                <i class=\"fa fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-link btn-danger\" data-bs-toggle=\"tooltip\" title=\"Delete User\">
                                    <i class=\"fa fa-times\"></i>
                                </button>
                            </form>

                        </div>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 61
        if (!$context['_iterated']) {
            // line 62
            yield "                    <tr>
                      <td colspan=\"4\">No users found.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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
        return "admin/gestion_user/user.html.twig";
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
        return array (  175 => 66,  166 => 62,  164 => 61,  150 => 52,  146 => 51,  137 => 45,  131 => 42,  127 => 41,  123 => 40,  120 => 39,  115 => 38,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
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
              <h4 class=\"card-title\">Users</h4>
              <a href=\"{{ path('admin_registration_choice') }}\" class=\"btn btn-primary btn-round ms-auto\">
                <i class=\"fa fa-plus\"></i>
                Add User
              </a>
            </div>
          </div>
          <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table id=\"users-table\" class=\"display table table-striped table-hover\">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role(s)</th>
                    <th style=\"width: 10%\">Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role(s)</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  {% for user in users %}
                    <tr>
                      <td>{{ user.name }}</td>
                      <td>{{ user.email }}</td>
                      <td>{{ user.roles|join(', ') }}</td>
                      <td>
                        <div class=\"form-button-action\">
                            <a href=\"{{ path('admin_edit_user', {'id': user.id}) }}\"
                                class=\"btn btn-link btn-primary btn-lg\"
                                 data-bs-toggle=\"tooltip\"
                                 title=\"Edit User\">
                                <i class=\"fa fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('admin_delete_user', {'id': user.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                                <button type=\"submit\" class=\"btn btn-link btn-danger\" data-bs-toggle=\"tooltip\" title=\"Delete User\">
                                    <i class=\"fa fa-times\"></i>
                                </button>
                            </form>

                        </div>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"4\">No users found.</td>
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
", "admin/gestion_user/user.html.twig", "C:\\Users\\brahm\\Downloads\\ProjectHadhoud\\project\\templates\\admin\\gestion_user\\user.html.twig");
    }
}
