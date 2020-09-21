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

/* base.html.twig */
class __TwigTemplate_ec7171b36d52e6872d0b61aadfb44bbc48acd2c7b2dfd84d85a95eb8d9b39531 extends \Twig\Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"L'association Arcades 13127 souhaite faire évoluer la démocratie en faisant intervenir le citoyen de façon active et responsable dans toutes les décisions qui concernent la ville de Vitrolles.\">
    <meta name=\"keywords\" content=\"association, comptes-rendus, adhésions, citoyens, vitrolles, commerces, arcades 13127, association citoyenne, je like vitrolles\">
    <meta name=\"author\" content=\"VELLA CYRIL\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "</head>
<body>
";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 134
        $this->displayBlock('javascripts', $context, $blocks);
        // line 145
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <!-- IMPORT HOMEMADE CSS -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/photoswipe.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/default-skin/default-skin.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/photoswipe.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/photoswipe-ui-default.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://www.paypalobjects.com/api/checkout.js\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 91
        echo "
    ";
        // line 92
        $this->displayBlock('main', $context, $blocks);
        // line 95
        echo "
    ";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 132
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "        <header role=\"banner\">
            <div class=\"top-bar\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-9 social\">
                            <a href=\"#\"><span class=\"fa fa-twitter\"></span></a>
                            <a href=\"#\"><span class=\"fa fa-facebook\"></span></a>
                            <a href=\"#\"><span class=\"fa fa-instagram\"></span></a>
                            <a href=\"#\"><span class=\"fa fa-youtube-play\"></span></a>
                            ";
        // line 37
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) {
            // line 38
            echo "                                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\"><span class=\"fa fa-user\"></span></a>
                            ";
        } else {
            // line 40
            echo "                                <a href=\"/admin\" title=\"Espace admin association arcades13127\">Espace Admin</a>
                                <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Deconnexion</a>
                            ";
        }
        // line 43
        echo "                        </div>

                    </div>
                </div>
            </div>

            <div class=\"container logo-wrap\">
                <div class=\"row pt-5\">
                    <div class=\"col-12 text-center\">
                        <a class=\"absolute-toggle d-block d-md-none\" data-toggle=\"collapse\" href=\"#navbarMenu\" role=\"button\" aria-expanded=\"false\" aria-controls=\"navbarMenu\"><span class=\"burger-lines\"></span></a>
                        <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo association arcades 13127\" class=\"logo\"/>
                    </div>
                </div>
            </div>

            <nav class=\"navbar navbar-expand-md  navbar-light bg-light\">
                <div class=\"container\">
                    <div class=\"collapse navbar-collapse\" id=\"navbarMenu\">
                        <ul class=\"navbar-nav mx-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" title=\"accueil\" href=\"/\">Accueil</a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" title=\"les citoyens s'expriment\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("citoyens");
        echo "\">Les citoyens s'expriment</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" title=\"comptes rendus des réunions\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte_rendus");
        echo "\">Comptes rendus des réunions</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" title=\"Adhérer à l'association\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Adhérer</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" title=\"Remplir une pétition\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("petition");
        echo "\">Pétitions</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" title=\"Remplir un formulaire\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire");
        echo "\">Remplir un formulaire</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" title=\"Remplir un formulaire\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery");
        echo "\">Galerie d'images</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 93
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 97
        echo "        <footer class=\"site-footer\">
            <div class=\"container\">
                <div class=\"row mb-5\">
                    <div class=\"col-md-4\">
                        <h3>A propos de nous</h3>
                        <p>Notre association, issue de la loi de 1901,souhaite faire évoluer la démocratie ,sans entrer dans le jeu politique représentatif, en faisant intervenir le citoyen de façon active et responsable dans toutes les décisions qui concernent la cité.</p>
                    </div>
                    <div class=\"col-md-6 ml-auto\">
                        <div class=\"row\">

                            <div class=\"col-md-§\">

                                <div class=\"mb-5\">
                                    <h3>Contact</h3>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"#\" title=\"contactez-nous par mail\">E-mail: arcades13127@orange.fr</a></li>
                                    </ul>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"#\" title=\"contactez-nous par téléphone\">Tél: 06.08.215.215</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12 text-center\">
                        <p class=\"small\" style=\"padding-top: 10px\">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script> Tous droits réservés | Développé par <a href=\"https://microvella.com\" target=\"_blank\" title=\"Microvella\" >Cyril VELLA - Microvella</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\" rel=\"javascript\"></script>
    <div id=\"fb-root\"></div>
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0&appId=1389493977873570&autoLogAppEvents=1\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  423 => 141,  419 => 140,  415 => 139,  411 => 138,  407 => 137,  403 => 136,  398 => 135,  388 => 134,  344 => 97,  334 => 96,  323 => 93,  313 => 92,  294 => 82,  288 => 79,  282 => 76,  276 => 73,  270 => 70,  264 => 67,  247 => 53,  235 => 43,  230 => 41,  227 => 40,  221 => 38,  219 => 37,  208 => 28,  198 => 27,  187 => 132,  185 => 96,  182 => 95,  180 => 92,  177 => 91,  174 => 27,  164 => 26,  150 => 20,  146 => 19,  142 => 18,  138 => 17,  134 => 16,  130 => 15,  125 => 13,  121 => 12,  117 => 11,  114 => 10,  104 => 9,  85 => 8,  73 => 145,  71 => 134,  69 => 26,  65 => 24,  63 => 9,  59 => 8,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"L'association Arcades 13127 souhaite faire évoluer la démocratie en faisant intervenir le citoyen de façon active et responsable dans toutes les décisions qui concernent la ville de Vitrolles.\">
    <meta name=\"keywords\" content=\"association, comptes-rendus, adhésions, citoyens, vitrolles, commerces, arcades 13127, association citoyenne, je like vitrolles\">
    <meta name=\"author\" content=\"VELLA CYRIL\">
    <title>{% block title %}Bienvenue{% endblock %}</title>
    {% block stylesheets %}
        <!-- IMPORT HOMEMADE CSS -->
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('css/owl.carousel.min.css') }}\" rel=\"stylesheet\" />
        <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\" />
        <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('dist/photoswipe.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('dist/default-skin/default-skin.css') }}\">
        <script src=\"{{ asset('dist/photoswipe.min.js') }}\"></script>
        <script src=\"{{ asset('dist/photoswipe-ui-default.min.js') }}\"></script>
        <script src=\"https://www.paypalobjects.com/api/checkout.js\"></script>

    {% endblock %}
</head>
<body>
{% block body %}
    {% block header %}
        <header role=\"banner\">
            <div class=\"top-bar\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-9 social\">
                            <a href=\"#\"><span class=\"fa fa-twitter\"></span></a>
                            <a href=\"#\"><span class=\"fa fa-facebook\"></span></a>
                            <a href=\"#\"><span class=\"fa fa-instagram\"></span></a>
                            <a href=\"#\"><span class=\"fa fa-youtube-play\"></span></a>
                            {% if not app.user %}
                                <a href=\"{{ path('security_login') }}\"><span class=\"fa fa-user\"></span></a>
                            {%  else %}
                                <a href=\"/admin\" title=\"Espace admin association arcades13127\">Espace Admin</a>
                                <a href=\"{{ path('security_logout') }}\">Deconnexion</a>
                            {% endif %}
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"container logo-wrap\">
                <div class=\"row pt-5\">
                    <div class=\"col-12 text-center\">
                        <a class=\"absolute-toggle d-block d-md-none\" data-toggle=\"collapse\" href=\"#navbarMenu\" role=\"button\" aria-expanded=\"false\" aria-controls=\"navbarMenu\"><span class=\"burger-lines\"></span></a>
                        <img src=\"{{ asset('images/logo.png') }}\" alt=\"logo association arcades 13127\" class=\"logo\"/>
                    </div>
                </div>
            </div>

            <nav class=\"navbar navbar-expand-md  navbar-light bg-light\">
                <div class=\"container\">
                    <div class=\"collapse navbar-collapse\" id=\"navbarMenu\">
                        <ul class=\"navbar-nav mx-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" title=\"accueil\" href=\"/\">Accueil</a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" title=\"les citoyens s'expriment\" href=\"{{ path('citoyens') }}\">Les citoyens s'expriment</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" title=\"comptes rendus des réunions\" href=\"{{ path('compte_rendus') }}\">Comptes rendus des réunions</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" title=\"Adhérer à l'association\" href=\"{{ path('inscription') }}\">Adhérer</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" title=\"Remplir une pétition\" href=\"{{ path('petition') }}\">Pétitions</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" title=\"Remplir un formulaire\" href=\"{{ path('formulaire') }}\">Remplir un formulaire</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" title=\"Remplir un formulaire\" href=\"{{ path('gallery') }}\">Galerie d'images</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>
    {% endblock %}

    {% block main %}

    {% endblock %}

    {% block footer %}
        <footer class=\"site-footer\">
            <div class=\"container\">
                <div class=\"row mb-5\">
                    <div class=\"col-md-4\">
                        <h3>A propos de nous</h3>
                        <p>Notre association, issue de la loi de 1901,souhaite faire évoluer la démocratie ,sans entrer dans le jeu politique représentatif, en faisant intervenir le citoyen de façon active et responsable dans toutes les décisions qui concernent la cité.</p>
                    </div>
                    <div class=\"col-md-6 ml-auto\">
                        <div class=\"row\">

                            <div class=\"col-md-§\">

                                <div class=\"mb-5\">
                                    <h3>Contact</h3>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"#\" title=\"contactez-nous par mail\">E-mail: arcades13127@orange.fr</a></li>
                                    </ul>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"#\" title=\"contactez-nous par téléphone\">Tél: 06.08.215.215</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12 text-center\">
                        <p class=\"small\" style=\"padding-top: 10px\">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script> Tous droits réservés | Développé par <a href=\"https://microvella.com\" target=\"_blank\" title=\"Microvella\" >Cyril VELLA - Microvella</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    {% endblock %}

{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/jquery-migrate-3.0.0.js') }}\"></script>
    <script src=\"{{ asset('js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.stellar.min.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\" rel=\"javascript\"></script>
    <div id=\"fb-root\"></div>
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0&appId=1389493977873570&autoLogAppEvents=1\"></script>
{% endblock %}
</body>
</html>
", "base.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/templates/base.html.twig");
    }
}
