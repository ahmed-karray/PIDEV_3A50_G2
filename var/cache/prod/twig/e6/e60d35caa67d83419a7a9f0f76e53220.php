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

/* admin/layout.html.twig */
class __TwigTemplate_f9171866839171a7ff700535daf584fb extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'mainpanel' => [$this, 'block_mainpanel'],
            'logo' => [$this, 'block_logo'],
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\"
      name=\"viewport\"
    />
    <link
      rel=\"icon\"
      href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/img/kaiadmin/favicon.ico"), "html", null, true);
        yield "\"
      type=\"image/x-icon\"
    />

    <!-- Fonts and icons -->
    <script src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/plugin/webfont/webfont.min.js"), "html", null, true);
        yield "\"></script>
    <script>
      WebFont.load({
        google: { families: [\"Public Sans:300,400,500,600,700\"] },
        custom: {
          families: [
            \"Font Awesome 5 Solid\",
            \"Font Awesome 5 Regular\",
            \"Font Awesome 5 Brands\",
            \"simple-line-icons\",
          ],
          urls: [\"assets/css/fonts.min.css\"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/css/bootstrap.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/css/plugins.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/css/kaiadmin.min.css"), "html", null, true);
        yield "\" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel=\"stylesheet\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/css/demo.css"), "html", null, true);
        yield "\" />
  </head>
  <body>
    <div class=\"wrapper\">
        ";
        // line 46
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 331
        yield "
        ";
        // line 332
        yield from $this->unwrap()->yieldBlock('mainpanel', $context, $blocks);
        // line 779
        yield "    </div>
    <!--   Core JS Files   -->
    <script src=\"";
        // line 781
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/core/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 782
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/core/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 783
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/core/bootstrap.min.js"), "html", null, true);
        yield "\"></script>

    <!-- jQuery Scrollbar -->
    <script src=\"";
        // line 786
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Chart JS -->
    <script src=\"";
        // line 789
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/plugin/chart.js/chart.min.js"), "html", null, true);
        yield "\"></script>

    <!-- jQuery Sparkline -->
    <script src=\"";
        // line 792
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/plugin/jquery.sparkline/jquery.sparkline.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Chart Circle -->
    <script src=\"";
        // line 795
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/plugin/chart-circle/circles.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Datatables -->
    <script src=\"";
        // line 798
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/plugin/datatables/datatables.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Bootstrap Notify -->
    <script src=\"";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js"), "html", null, true);
        yield "\"></script>

    <!-- jQuery Vector Maps -->
    <script src=\"";
        // line 804
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/plugin/jsvectormap/jsvectormap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 805
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/plugin/jsvectormap/world.js"), "html", null, true);
        yield "\"></script>

    <!-- Google Maps Plugin -->
    <script src=\"";
        // line 808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/plugin/gmaps/gmaps.js"), "html", null, true);
        yield "\"></script>

    <!-- Sweet Alert -->
    <script src=\"";
        // line 811
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/plugin/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Kaiadmin JS -->
    <script src=\"";
        // line 814
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/js/kaiadmin.min.js"), "html", null, true);
        yield "\"></script>
  </body>
</html>
";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "  
        <!-- Sidebar -->
        <div class=\"sidebar\" data-background-color=\"dark\">
            <div class=\"sidebar-logo\">
            <!-- Logo Header -->
            <div class=\"logo-header\" data-background-color=\"dark\">
                <a href=\"index.html\" class=\"logo\">
                <img
                    src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/img/kaiadmin/logo_light.svg"), "html", null, true);
        yield "\"
                    alt=\"navbar brand\"
                    class=\"navbar-brand\"
                    height=\"20\"
                />
                </a>
                <div class=\"nav-toggle\">
                <button class=\"btn btn-toggle toggle-sidebar\">
                    <i class=\"gg-menu-right\"></i>
                </button>
                <button class=\"btn btn-toggle sidenav-toggler\">
                    <i class=\"gg-menu-left\"></i>
                </button>
                </div>
                <button class=\"topbar-toggler more\">
                <i class=\"gg-more-vertical-alt\"></i>
                </button>
            </div>
            <!-- End Logo Header -->
            </div>
            <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
            <div class=\"sidebar-content\">
                <ul class=\"nav nav-secondary\">
                <li class=\"nav-item active\">
                    <a
                    data-bs-toggle=\"collapse\"
                    href=\"#dashboard\"
                    class=\"collapsed\"
                    aria-expanded=\"false\"
                    >
                    <i class=\"fas fa-home\"></i>
                    <p>Dashboard</p>
                    <span class=\"caret\"></span>
                    </a>
                    <div class=\"collapse\" id=\"dashboard\">
                    <ul class=\"nav nav-collapse\">
                        <li>
                        <a href=\"../demo1/index.html\">
                            <span class=\"sub-item\">Dashboard 1</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class=\"nav-section\">
                    <span class=\"sidebar-mini-icon\">
                    <i class=\"fa fa-ellipsis-h\"></i>
                    </span>
                    <h4 class=\"text-section\">Components</h4>
                </li>
                <li class=\"nav-item\">
                    <a data-bs-toggle=\"collapse\" href=\"#base\">
                    <i class=\"fas fa-layer-group\"></i>
                    <p>Base</p>
                    <span class=\"caret\"></span>
                    </a>
                    <div class=\"collapse\" id=\"base\">
                    <ul class=\"nav nav-collapse\">
                        <li>
                        <a href=\"components/avatars.html\">
                            <span class=\"sub-item\">Avatars</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"components/buttons.html\">
                            <span class=\"sub-item\">Buttons</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"components/gridsystem.html\">
                            <span class=\"sub-item\">Grid System</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"components/panels.html\">
                            <span class=\"sub-item\">Panels</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"components/notifications.html\">
                            <span class=\"sub-item\">Notifications</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"components/sweetalert.html\">
                            <span class=\"sub-item\">Sweet Alert</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"components/font-awesome-icons.html\">
                            <span class=\"sub-item\">Font Awesome Icons</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"components/simple-line-icons.html\">
                            <span class=\"sub-item\">Simple Line Icons</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"components/typography.html\">
                            <span class=\"sub-item\">Typography</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a data-bs-toggle=\"collapse\" href=\"#sidebarLayouts\">
                    <i class=\"fas fa-th-list\"></i>
                    <p>Sidebar Layouts</p>
                    <span class=\"caret\"></span>
                    </a>
                    <div class=\"collapse\" id=\"sidebarLayouts\">
                    <ul class=\"nav nav-collapse\">
                        <li>
                        <a href=\"sidebar-style-2.html\">
                            <span class=\"sub-item\">Sidebar Style 2</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"icon-menu.html\">
                            <span class=\"sub-item\">Icon Menu</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a data-bs-toggle=\"collapse\" href=\"#forms\">
                    <i class=\"fas fa-pen-square\"></i>
                    <p>Forms</p>
                    <span class=\"caret\"></span>
                    </a>
                    <div class=\"collapse\" id=\"forms\">
                    <ul class=\"nav nav-collapse\">
                        <li>
                        <a href=\"forms/forms.html\">
                            <span class=\"sub-item\">Basic Form</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a data-bs-toggle=\"collapse\" href=\"#tables\">
                    <i class=\"fas fa-table\"></i>
                    <p>Tables</p>
                    <span class=\"caret\"></span>
                    </a>
                    <div class=\"collapse\" id=\"tables\">
                    <ul class=\"nav nav-collapse\">
                        <li>
                        <a href=\"tables/tables.html\">
                            <span class=\"sub-item\">Basic Table</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"tables/datatables.html\">
                            <span class=\"sub-item\">Datatables</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a data-bs-toggle=\"collapse\" href=\"#maps\">
                    <i class=\"fas fa-map-marker-alt\"></i>
                    <p>Maps</p>
                    <span class=\"caret\"></span>
                    </a>
                    <div class=\"collapse\" id=\"maps\">
                    <ul class=\"nav nav-collapse\">
                        <li>
                        <a href=\"maps/googlemaps.html\">
                            <span class=\"sub-item\">Google Maps</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"maps/jsvectormap.html\">
                            <span class=\"sub-item\">Jsvectormap</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a data-bs-toggle=\"collapse\" href=\"#charts\">
                    <i class=\"far fa-chart-bar\"></i>
                    <p>Charts</p>
                    <span class=\"caret\"></span>
                    </a>
                    <div class=\"collapse\" id=\"charts\">
                    <ul class=\"nav nav-collapse\">
                        <li>
                        <a href=\"charts/charts.html\">
                            <span class=\"sub-item\">Chart Js</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"charts/sparkline.html\">
                            <span class=\"sub-item\">Sparkline</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a href=\"widgets.html\">
                    <i class=\"fas fa-desktop\"></i>
                    <p>Widgets</p>
                    <span class=\"badge badge-success\">4</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"../../documentation/index.html\">
                    <i class=\"fas fa-file\"></i>
                    <p>Documentation</p>
                    <span class=\"badge badge-secondary\">1</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a data-bs-toggle=\"collapse\" href=\"#submenu\">
                    <i class=\"fas fa-bars\"></i>
                    <p>Menu Levels</p>
                    <span class=\"caret\"></span>
                    </a>
                    <div class=\"collapse\" id=\"submenu\">
                    <ul class=\"nav nav-collapse\">
                        <li>
                        <a data-bs-toggle=\"collapse\" href=\"#subnav1\">
                            <span class=\"sub-item\">Level 1</span>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse\" id=\"subnav1\">
                            <ul class=\"nav nav-collapse subnav\">
                            <li>
                                <a href=\"#\">
                                <span class=\"sub-item\">Level 2</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                <span class=\"sub-item\">Level 2</span>
                                </a>
                            </li>
                            </ul>
                        </div>
                        </li>
                        <li>
                        <a data-bs-toggle=\"collapse\" href=\"#subnav2\">
                            <span class=\"sub-item\">Level 1</span>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse\" id=\"subnav2\">
                            <ul class=\"nav nav-collapse subnav\">
                            <li>
                                <a href=\"#\">
                                <span class=\"sub-item\">Level 2</span>
                                </a>
                            </li>
                            </ul>
                        </div>
                        </li>
                        <li>
                        <a href=\"#\">
                            <span class=\"sub-item\">Level 1</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </div>
        <!-- End Sidebar -->
        ";
        yield from [];
    }

    // line 332
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mainpanel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "  
        <div class=\"main-panel\">
            <div class=\"main-header\">
                ";
        // line 335
        yield from $this->unwrap()->yieldBlock('logo', $context, $blocks);
        // line 362
        yield "
                ";
        // line 363
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 714
        yield " 
            </div>

            ";
        // line 717
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 746
        yield "
            ";
        // line 747
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 776
        yield "
        </div>
        ";
        yield from [];
    }

    // line 335
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "  
                <div class=\"main-header-logo\">
                    <!-- Logo Header -->
                    <div class=\"logo-header\" data-background-color=\"dark\">
                    <a href=\"index.html\" class=\"logo\">
                        <img
                        src=\"";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/img/kaiadmin/logo_light.svg"), "html", null, true);
        yield "\"
                        alt=\"navbar brand\"
                        class=\"navbar-brand\"
                        height=\"20\"
                        />
                    </a>
                    <div class=\"nav-toggle\">
                        <button class=\"btn btn-toggle toggle-sidebar\">
                        <i class=\"gg-menu-right\"></i>
                        </button>
                        <button class=\"btn btn-toggle sidenav-toggler\">
                        <i class=\"gg-menu-left\"></i>
                        </button>
                    </div>
                    <button class=\"topbar-toggler more\">
                        <i class=\"gg-more-vertical-alt\"></i>
                    </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                ";
        yield from [];
    }

    // line 363
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "  
                <!-- Navbar Header -->
                <nav class=\"navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom\">
                    <div class=\"container-fluid\">
                    <nav class=\"navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex\">
                        <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            <button type=\"submit\" class=\"btn btn-search pe-1\">
                            <i class=\"fa fa-search search-icon\"></i>
                            </button>
                        </div>
                        <input
                            type=\"text\"
                            placeholder=\"Search ...\"
                            class=\"form-control\"
                        />
                        </div>
                    </nav>

                    <ul class=\"navbar-nav topbar-nav ms-md-auto align-items-center\">
                        <li
                        class=\"nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none\"
                        >
                        <a
                            class=\"nav-link dropdown-toggle\"
                            data-bs-toggle=\"dropdown\"
                            href=\"#\"
                            role=\"button\"
                            aria-expanded=\"false\"
                            aria-haspopup=\"true\"
                        >
                            <i class=\"fa fa-search\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-search animated fadeIn\">
                            <form class=\"navbar-left navbar-form nav-search\">
                            <div class=\"input-group\">
                                <input
                                type=\"text\"
                                placeholder=\"Search ...\"
                                class=\"form-control\"
                                />
                            </div>
                            </form>
                        </ul>
                        </li>
                        <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                        <a
                            class=\"nav-link dropdown-toggle\"
                            href=\"#\"
                            id=\"messageDropdown\"
                            role=\"button\"
                            data-bs-toggle=\"dropdown\"
                            aria-haspopup=\"true\"
                            aria-expanded=\"false\"
                        >
                            <i class=\"fa fa-envelope\"></i>
                        </a>
                        <ul
                            class=\"dropdown-menu messages-notif-box animated fadeIn\"
                            aria-labelledby=\"messageDropdown\"
                        >
                            <li>
                            <div
                                class=\"dropdown-title d-flex justify-content-between align-items-center\"
                            >
                                Messages
                                <a href=\"#\" class=\"small\">Mark all as read</a>
                            </div>
                            </li>
                            <li>
                            <div class=\"message-notif-scroll scrollbar-outer\">
                                <div class=\"notif-center\">
                                <a href=\"#\">
                                    <div class=\"notif-img\">
                                    <img
                                        src=\"";
        // line 438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/img/jm_denis.jpg"), "html", null, true);
        yield "\"
                                        alt=\"Img Profile\"
                                    />
                                    </div>
                                    <div class=\"notif-content\">
                                    <span class=\"subject\">Jimmy Denis</span>
                                    <span class=\"block\"> How are you ? </span>
                                    <span class=\"time\">5 minutes ago</span>
                                    </div>
                                </a>
                                <a href=\"#\">
                                    <div class=\"notif-img\">
                                    <img
                                        src=\"";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/img/chadengle.jpg"), "html", null, true);
        yield "\"
                                        alt=\"Img Profile\"
                                    />
                                    </div>
                                    <div class=\"notif-content\">
                                    <span class=\"subject\">Chad</span>
                                    <span class=\"block\"> Ok, Thanks ! </span>
                                    <span class=\"time\">12 minutes ago</span>
                                    </div>
                                </a>
                                <a href=\"#\">
                                    <div class=\"notif-img\">
                                    <img
                                        src=\"";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/img/mlane.jpg"), "html", null, true);
        yield "\"
                                        alt=\"Img Profile\"
                                    />
                                    </div>
                                    <div class=\"notif-content\">
                                    <span class=\"subject\">Jhon Doe</span>
                                    <span class=\"block\">
                                        Ready for the meeting today...
                                    </span>
                                    <span class=\"time\">12 minutes ago</span>
                                    </div>
                                </a>
                                <a href=\"#\">
                                    <div class=\"notif-img\">
                                    <img
                                        src=\"";
        // line 479
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/img/talha.jpg"), "html", null, true);
        yield "\"
                                        alt=\"Img Profile\"
                                    />
                                    </div>
                                    <div class=\"notif-content\">
                                    <span class=\"subject\">Talha</span>
                                    <span class=\"block\"> Hi, Apa Kabar ? </span>
                                    <span class=\"time\">17 minutes ago</span>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </li>
                            <li>
                            <a class=\"see-all\" href=\"javascript:void(0);\"
                                >See all messages<i class=\"fa fa-angle-right\"></i>
                            </a>
                            </li>
                        </ul>
                        </li>
                        <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                        <a
                            class=\"nav-link dropdown-toggle\"
                            href=\"#\"
                            id=\"notifDropdown\"
                            role=\"button\"
                            data-bs-toggle=\"dropdown\"
                            aria-haspopup=\"true\"
                            aria-expanded=\"false\"
                        >
                            <i class=\"fa fa-bell\"></i>
                            <span class=\"notification\">4</span>
                        </a>
                        <ul
                            class=\"dropdown-menu notif-box animated fadeIn\"
                            aria-labelledby=\"notifDropdown\"
                        >
                            <li>
                            <div class=\"dropdown-title\">
                                You have 4 new notification
                            </div>
                            </li>
                            <li>
                            <div class=\"notif-scroll scrollbar-outer\">
                                <div class=\"notif-center\">
                                <a href=\"#\">
                                    <div class=\"notif-icon notif-primary\">
                                    <i class=\"fa fa-user-plus\"></i>
                                    </div>
                                    <div class=\"notif-content\">
                                    <span class=\"block\"> New user registered </span>
                                    <span class=\"time\">5 minutes ago</span>
                                    </div>
                                </a>
                                <a href=\"#\">
                                    <div class=\"notif-icon notif-success\">
                                    <i class=\"fa fa-comment\"></i>
                                    </div>
                                    <div class=\"notif-content\">
                                    <span class=\"block\">
                                        Rahmad commented on Admin
                                    </span>
                                    <span class=\"time\">12 minutes ago</span>
                                    </div>
                                </a>
                                <a href=\"#\">
                                    <div class=\"notif-img\">
                                    <img
                                        src=\"";
        // line 547
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/img/profile2.jpg"), "html", null, true);
        yield "\"
                                        alt=\"Img Profile\"
                                    />
                                    </div>
                                    <div class=\"notif-content\">
                                    <span class=\"block\">
                                        Reza send messages to you
                                    </span>
                                    <span class=\"time\">12 minutes ago</span>
                                    </div>
                                </a>
                                <a href=\"#\">
                                    <div class=\"notif-icon notif-danger\">
                                    <i class=\"fa fa-heart\"></i>
                                    </div>
                                    <div class=\"notif-content\">
                                    <span class=\"block\"> Farrah liked Admin </span>
                                    <span class=\"time\">17 minutes ago</span>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </li>
                            <li>
                            <a class=\"see-all\" href=\"javascript:void(0);\"
                                >See all notifications<i class=\"fa fa-angle-right\"></i>
                            </a>
                            </li>
                        </ul>
                        </li>
                        <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                        <a
                            class=\"nav-link\"
                            data-bs-toggle=\"dropdown\"
                            href=\"#\"
                            aria-expanded=\"false\"
                        >
                            <i class=\"fas fa-layer-group\"></i>
                        </a>
                        <div class=\"dropdown-menu quick-actions animated fadeIn\">
                            <div class=\"quick-actions-header\">
                            <span class=\"title mb-1\">Quick Actions</span>
                            <span class=\"subtitle op-7\">Shortcuts</span>
                            </div>
                            <div class=\"quick-actions-scroll scrollbar-outer\">
                            <div class=\"quick-actions-items\">
                                <div class=\"row m-0\">
                                <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                                    <div class=\"quick-actions-item\">
                                    <div class=\"avatar-item bg-danger rounded-circle\">
                                        <i class=\"far fa-calendar-alt\"></i>
                                    </div>
                                    <span class=\"text\">Calendar</span>
                                    </div>
                                </a>
                                <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                                    <div class=\"quick-actions-item\">
                                    <div
                                        class=\"avatar-item bg-warning rounded-circle\"
                                    >
                                        <i class=\"fas fa-map\"></i>
                                    </div>
                                    <span class=\"text\">Maps</span>
                                    </div>
                                </a>
                                <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                                    <div class=\"quick-actions-item\">
                                    <div class=\"avatar-item bg-info rounded-circle\">
                                        <i class=\"fas fa-file-excel\"></i>
                                    </div>
                                    <span class=\"text\">Reports</span>
                                    </div>
                                </a>
                                <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                                    <div class=\"quick-actions-item\">
                                    <div
                                        class=\"avatar-item bg-success rounded-circle\"
                                    >
                                        <i class=\"fas fa-envelope\"></i>
                                    </div>
                                    <span class=\"text\">Emails</span>
                                    </div>
                                </a>
                                <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                                    <div class=\"quick-actions-item\">
                                    <div
                                        class=\"avatar-item bg-primary rounded-circle\"
                                    >
                                        <i class=\"fas fa-file-invoice-dollar\"></i>
                                    </div>
                                    <span class=\"text\">Invoice</span>
                                    </div>
                                </a>
                                <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                                    <div class=\"quick-actions-item\">
                                    <div
                                        class=\"avatar-item bg-secondary rounded-circle\"
                                    >
                                        <i class=\"fas fa-credit-card\"></i>
                                    </div>
                                    <span class=\"text\">Payments</span>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </li>

                        <li class=\"nav-item topbar-user dropdown hidden-caret\">
                        <a
                            class=\"dropdown-toggle profile-pic\"
                            data-bs-toggle=\"dropdown\"
                            href=\"#\"
                            aria-expanded=\"false\"
                        >
                            <div class=\"avatar-sm\">
                            <img
                                src=\"";
        // line 665
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/img/profile.jpg"), "html", null, true);
        yield "\"
                                alt=\"...\"
                                class=\"avatar-img rounded-circle\"
                            />
                            </div>
                            <span class=\"profile-username\">
                            <span class=\"op-7\">Hi,</span>
                            <span class=\"fw-bold\">Hizrian</span>
                            </span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-user animated fadeIn\">
                            <div class=\"dropdown-user-scroll scrollbar-outer\">
                            <li>
                                <div class=\"user-box\">
                                <div class=\"avatar-lg\">
                                    <img
                                    src=\"";
        // line 681
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard/img/profile.jpg"), "html", null, true);
        yield "\"
                                    alt=\"image profile\"
                                    class=\"avatar-img rounded\"
                                    />
                                </div>
                                <div class=\"u-text\">
                                    <h4>Hizrian</h4>
                                    <p class=\"text-muted\">hello@example.com</p>
                                    <a
                                    href=\"profile.html\"
                                    class=\"btn btn-xs btn-secondary btn-sm\"
                                    >View Profile</a
                                    >
                                </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">My Profile</a>
                                <a class=\"dropdown-item\" href=\"#\">My Balance</a>
                                <a class=\"dropdown-item\" href=\"#\">Inbox</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">Account Setting</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">Logout</a>
                            </li>
                            </div>
                        </ul>
                        </li>
                    </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
                ";
        yield from [];
    }

    // line 717
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "  
            <div class=\"container\">
            <div class=\"page-inner\">
                <div class=\"page-header\">
                <h4 class=\"page-title\">Dashboard</h4>
                <ul class=\"breadcrumbs\">
                    <li class=\"nav-home\">
                    <a href=\"#\">
                        <i class=\"icon-home\"></i>
                    </a>
                    </li>
                    <li class=\"separator\">
                    <i class=\"icon-arrow-right\"></i>
                    </li>
                    <li class=\"nav-item\">
                    <a href=\"#\">Pages</a>
                    </li>
                    <li class=\"separator\">
                    <i class=\"icon-arrow-right\"></i>
                    </li>
                    <li class=\"nav-item\">
                    <a href=\"#\">Starter Page</a>
                    </li>
                </ul>
                </div>
                <div class=\"page-category\">Inner page content goes here</div>
            </div>
            </div>
            ";
        yield from [];
    }

    // line 747
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "  
            <footer class=\"footer\">
            <div class=\"container-fluid d-flex justify-content-between\">
                <nav class=\"pull-left\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"http://www.themekita.com\">
                        ThemeKita
                    </a>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"> Help </a>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"> Licenses </a>
                    </li>
                </ul>
                </nav>
                <div class=\"copyright\">
                2024, made with <i class=\"fa fa-heart heart text-danger\"></i> by
                <a href=\"http://www.themekita.com\">ThemeKita</a>
                </div>
                <div>
                Distributed by
                <a target=\"_blank\" href=\"https://themewagon.com/\">ThemeWagon</a>.
                </div>
            </div>
            </footer>
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/layout.html.twig";
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
        return array (  1002 => 747,  963 => 717,  924 => 681,  905 => 665,  784 => 547,  713 => 479,  695 => 464,  679 => 451,  663 => 438,  580 => 363,  554 => 341,  540 => 335,  533 => 776,  531 => 747,  528 => 746,  526 => 717,  521 => 714,  519 => 363,  516 => 362,  514 => 335,  503 => 332,  221 => 54,  205 => 46,  196 => 814,  190 => 811,  184 => 808,  178 => 805,  174 => 804,  168 => 801,  162 => 798,  156 => 795,  150 => 792,  144 => 789,  138 => 786,  132 => 783,  128 => 782,  124 => 781,  120 => 779,  118 => 332,  115 => 331,  113 => 46,  106 => 42,  100 => 39,  96 => 38,  92 => 37,  69 => 17,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/layout.html.twig", "C:\\Users\\brahm\\OneDrive\\Bureau\\ProjetPI2\\project\\templates\\admin\\layout.html.twig");
    }
}
