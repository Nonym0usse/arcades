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

/* formulaire/index.html.twig */
class __TwigTemplate_fb97a68b1815d5d51e9d8863b9c40566679476357bb29a1557b46ecbc125cc67 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formulaire/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Remplir formulaire - Association Arcades Vitrolles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"wrap\">
        ";
        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('main', $context, $blocks);
        // line 44
        echo "
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
                                        <li><a href=\"#\">E-mail: arcades13127@orange.fr</a></li>
                                    </ul>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"#\">Tél: 06.08.215.215</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12 text-center\">
                        <br>
                        <p class=\"small\">Nombres de visites</p>
                        <img src=\"https://counter7.wheredoyoucomefrom.ovh/private/compteurdevisite.php?c=kutt64hbrmyt96wu7ld11y5192j4ysdk\" border=\"0\" title=\"compteur de visite\" alt=\"compteur de visite\">
                        <br>
                        <p class=\"small\" style=\"padding-top: 10px\">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script> Tous droits réservés | Développé par <a href=\"https://microvella.com\" target=\"_blank\" title=\"Microvella\" >Cyril VELLA - Microvella</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "            ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 13
        echo "            ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "


            <section class=\"site-section py-sm\">
                <div class=\"container\">
                    <div class=\"row blog-entries\">
                        <div class=\"col-md-12  main-content\" style=\"padding-top: 50px\">
                            <div class=\"row\">
                                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formulaires"]) || array_key_exists("formulaires", $context) ? $context["formulaires"] : (function () { throw new RuntimeError('Variable "formulaires" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formulaire"]) {
            // line 22
            echo "                                    <div class=\"col-md-6\">
                                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showform", ["id" => twig_get_attribute($this->env, $this->source, $context["formulaire"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"blog-entry element-animate\" data-animate-effect=\"fadeIn\">
                                            <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["formulaire"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formulaire"], "titre", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                                            <div class=\"blog-content-body\">
                                                <div class=\"post-meta\">
                                                    <span class=\"mr-2\">Publié le : ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formulaire"], "dates", [], "any", false, false, false, 27), "d-m-Y"), "html", null, true);
            echo " </span>
                                                </div>
                                                <h2>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formulaire"], "titre", [], "any", false, false, false, 29), "html", null, true);
            echo "</h2>
                                            </div>
                                        </a>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formulaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                                ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["formulaires"]) || array_key_exists("formulaires", $context) ? $context["formulaires"] : (function () { throw new RuntimeError('Variable "formulaires" does not exist.', 34, $this->source); })()));
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END main-content -->
            </section>


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 34,  221 => 29,  216 => 27,  208 => 24,  204 => 23,  201 => 22,  197 => 21,  185 => 13,  175 => 12,  162 => 9,  152 => 8,  101 => 44,  99 => 12,  96 => 11,  94 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Remplir formulaire - Association Arcades Vitrolles{% endblock %}

{% block body %}

    <div class=\"wrap\">
        {% block header %}
            {{ parent() }}
        {% endblock%}

        {% block main %}
            {{ parent() }}


            <section class=\"site-section py-sm\">
                <div class=\"container\">
                    <div class=\"row blog-entries\">
                        <div class=\"col-md-12  main-content\" style=\"padding-top: 50px\">
                            <div class=\"row\">
                                {% for formulaire in formulaires %}
                                    <div class=\"col-md-6\">
                                        <a href=\"{{ path('showform', {'id': formulaire.id}) }}\" class=\"blog-entry element-animate\" data-animate-effect=\"fadeIn\">
                                            <img src=\"{{ vich_uploader_asset(formulaire, 'imageFile') }}\" alt=\"{{ formulaire.titre }}\">
                                            <div class=\"blog-content-body\">
                                                <div class=\"post-meta\">
                                                    <span class=\"mr-2\">Publié le : {{ formulaire.dates |date('d-m-Y')}} </span>
                                                </div>
                                                <h2>{{ formulaire.titre }}</h2>
                                            </div>
                                        </a>
                                    </div>
                                {% endfor %}
                                {{ knp_pagination_render(formulaires) }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END main-content -->
            </section>


        {% endblock %}

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
                                        <li><a href=\"#\">E-mail: arcades13127@orange.fr</a></li>
                                    </ul>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"#\">Tél: 06.08.215.215</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12 text-center\">
                        <br>
                        <p class=\"small\">Nombres de visites</p>
                        <img src=\"https://counter7.wheredoyoucomefrom.ovh/private/compteurdevisite.php?c=kutt64hbrmyt96wu7ld11y5192j4ysdk\" border=\"0\" title=\"compteur de visite\" alt=\"compteur de visite\">
                        <br>
                        <p class=\"small\" style=\"padding-top: 10px\">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script> Tous droits réservés | Développé par <a href=\"https://microvella.com\" target=\"_blank\" title=\"Microvella\" >Cyril VELLA - Microvella</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
{% endblock %}
", "formulaire/index.html.twig", "/home/microvelcm/arcades/templates/formulaire/index.html.twig");
    }
}
