<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* backoffice.html.twig */
class __TwigTemplate_f6595595ec9a9b6b8ffa5d443cda6512c9b49a5552584a43423455eebef159e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo " </title>


    <!-- Custom fonts for this template                                                     -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link
            href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
            rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\"
            integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


</head>

<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav  text-white sidebar sidebar-dark accordion\" id=\"accordionSidebar\" style=\"
    background-color: #000000;\"
    >

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <i class=\"fas fa-laugh-wink\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\"> Admin</div>
        </a>

        <!-- Divider -->
        
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->


        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            gestion
        </div>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities2\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion produits</span>
            </a>
            <div id=\"collapseUtilities2\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <a class=\"collapse-item\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addProduct");
        echo "\">Ajout produit</a>
                    <a class=\"collapse-item\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listProduct");
        echo "\">Voir les produits</a>
                    <a class=\"collapse-item\" href=\"\">Gestion catégorie produit</a>
                    <a class=\"collapse-item\" href=\"\">Gestion état produit</a>
                    <a class=\"collapse-item\" href=\"\">Gestion Achat</a>
                </div>
            </div>
        </li>

        <hr class=\"sidebar-divider d-none d-md-block\">

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion caroussel</span>
            </a>
        </li>


        <hr class=\"sidebar-divider\">
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion carte resto</span>
            </a>
            <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Custom Utilities:</h6>
                    <a class=\"collapse-item\" href=\"\">Ajout produit</a>
                    <a class=\"collapse-item\" href=\"\">Voir les produits</a>
                    <a class=\"collapse-item\" href=\"\">Gestion catégorie produit</a>
                    <a class=\"collapse-item\" href=\"\">Gestion état produit</a>
                    <a class=\"collapse-item\" href=\"\">Gestion Achat</a>
                </div>
            </div>
        </li>


        <hr class=\"sidebar-divider\">
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion formule</span>
            </a>
        </li>


        <hr class=\"sidebar-divider\">
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion bar / cave</span>
            </a>
        </li>


        <hr class=\"sidebar-divider\">
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion navigation</span>
            </a>
        </li>


        <hr class=\"sidebar-divider\">
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion evènements</span>
            </a>
        </li>


        <hr class=\"sidebar-divider\">
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion newsletter</span>
            </a>
        </li>


        <hr class=\"sidebar-divider\">


        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item \">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\"
                aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Gestion abonnés newsletter</span>
            </a>

        </li>


        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light  topbar mb-4 static-top shadow\" style=\"
    background-color: #000000;\"
            >

                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>

                <!-- Topbar Search -->


                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">

                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link \" href=\"";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" role=\"button\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Voir le site</span>
                            <img class=\"img-profile rounded-circle\"
                                src=\"\">
                        </a>

                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->
            <div class=\"container col-3 \">

                <div class=\"alert  text-center\">

                </div>


            </div>


            <div class=\"container-fluid\">


                <!-- Page Heading -->
                ";
        // line 234
        $this->displayBlock('body', $context, $blocks);
        // line 235
        echo "
            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</div>
    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    
    <!-- page footer  -->

    <div id=\"contact\" class=\"bg-dark text-light text-center border-top wow fadeIn\">
        <p class=\"mb-0 py-3 text-muted small\">&copy; Copyright
            <script>document.write(new Date().getFullYear())</script>
            Made with <i class=\"ti-heart text-danger\"></i> By <a href=\"http://devcrud.com\">DevCRUD</a></p>
    </div>
    <!-- end of page footer -->

    <!-- core  -->
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/jquery-3.4.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>

    <!-- bootstrap affix -->
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/bootstrap.affix.js"), "html", null, true);
        echo "\"></script>

    <!-- wow.js -->
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/wow/wow.js"), "html", null, true);
        echo "\"></script>

    <!-- google maps -->
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap\"></script>



</body>
</html>






";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Admin | ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 234
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 234,  375 => 11,  348 => 269,  342 => 266,  336 => 263,  332 => 262,  303 => 235,  301 => 234,  274 => 210,  132 => 71,  128 => 70,  79 => 24,  75 => 23,  64 => 15,  57 => 11,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>{% block title %} Admin | {% endblock %} </title>


    <!-- Custom fonts for this template                                                     -->
    <link href=\"{{ asset('fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link
            href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
            rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\"
            integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    <!-- Custom styles for this template-->
    <link href=\"{{ asset('css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/sb-admin-2.css') }}\" rel=\"stylesheet\">


</head>

<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav  text-white sidebar sidebar-dark accordion\" id=\"accordionSidebar\" style=\"
    background-color: #000000;\"
    >

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <i class=\"fas fa-laugh-wink\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\"> Admin</div>
        </a>

        <!-- Divider -->
        
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->


        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            gestion
        </div>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities2\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion produits</span>
            </a>
            <div id=\"collapseUtilities2\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <a class=\"collapse-item\" href=\"{{ path('addProduct') }}\">Ajout produit</a>
                    <a class=\"collapse-item\" href=\"{{ path('listProduct') }}\">Voir les produits</a>
                    <a class=\"collapse-item\" href=\"\">Gestion catégorie produit</a>
                    <a class=\"collapse-item\" href=\"\">Gestion état produit</a>
                    <a class=\"collapse-item\" href=\"\">Gestion Achat</a>
                </div>
            </div>
        </li>

        <hr class=\"sidebar-divider d-none d-md-block\">

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion caroussel</span>
            </a>
        </li>


        <hr class=\"sidebar-divider\">
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion carte resto</span>
            </a>
            <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Custom Utilities:</h6>
                    <a class=\"collapse-item\" href=\"\">Ajout produit</a>
                    <a class=\"collapse-item\" href=\"\">Voir les produits</a>
                    <a class=\"collapse-item\" href=\"\">Gestion catégorie produit</a>
                    <a class=\"collapse-item\" href=\"\">Gestion état produit</a>
                    <a class=\"collapse-item\" href=\"\">Gestion Achat</a>
                </div>
            </div>
        </li>


        <hr class=\"sidebar-divider\">
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion formule</span>
            </a>
        </li>


        <hr class=\"sidebar-divider\">
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion bar / cave</span>
            </a>
        </li>


        <hr class=\"sidebar-divider\">
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion navigation</span>
            </a>
        </li>


        <hr class=\"sidebar-divider\">
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion evènements</span>
            </a>
        </li>


        <hr class=\"sidebar-divider\">
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Gestion newsletter</span>
            </a>
        </li>


        <hr class=\"sidebar-divider\">


        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item \">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                aria-expanded=\"true\"
                aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Gestion abonnés newsletter</span>
            </a>

        </li>


        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light  topbar mb-4 static-top shadow\" style=\"
    background-color: #000000;\"
            >

                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>

                <!-- Topbar Search -->


                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">

                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link \" href=\"{{ path('home') }}\" role=\"button\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Voir le site</span>
                            <img class=\"img-profile rounded-circle\"
                                src=\"\">
                        </a>

                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->
            <div class=\"container col-3 \">

                <div class=\"alert  text-center\">

                </div>


            </div>


            <div class=\"container-fluid\">


                <!-- Page Heading -->
                {% block body %}       {% endblock %}

            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</div>
    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    
    <!-- page footer  -->

    <div id=\"contact\" class=\"bg-dark text-light text-center border-top wow fadeIn\">
        <p class=\"mb-0 py-3 text-muted small\">&copy; Copyright
            <script>document.write(new Date().getFullYear())</script>
            Made with <i class=\"ti-heart text-danger\"></i> By <a href=\"http://devcrud.com\">DevCRUD</a></p>
    </div>
    <!-- end of page footer -->

    <!-- core  -->
    <script src=\"{{ asset('vendors/jquery/jquery-3.4.1.js') }}\"></script>
    <script src=\"{{ asset('vendors/bootstrap/bootstrap.bundle.js') }}\"></script>

    <!-- bootstrap affix -->
    <script src=\"{{ asset('vendors/bootstrap/bootstrap.affix.js') }}\"></script>

    <!-- wow.js -->
    <script src=\"{{ asset('vendors/wow/wow.js') }}\"></script>

    <!-- google maps -->
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap\"></script>



</body>
</html>






", "backoffice.html.twig", "C:\\Users\\Ionel\\Desktop\\Symphony_cours\\blog\\templates\\backoffice.html.twig");
    }
}
