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

/* petition/index.html.twig */
class __TwigTemplate_61f1bf9866789a9191dff93d7b906b7c84f86980cb97affcefa6069596c1e531 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "petition/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Signez une pétition - Association Arcades Vitrolles";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 8
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
        ";
    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "


            <section class=\"site-section py-sm\">
                <div class=\"container\">
                    <div class=\"row blog-entries\">
                        <div class=\"col-md-12 main-content\" style=\"padding-top: 50px\">
                            <div class=\"row\">
                                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["petitions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["petition"]) {
            // line 22
            echo "                                    <div class=\"col-md-4\">
                                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlepetition", ["id" => twig_get_attribute($this->env, $this->source, $context["petition"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"blog-entry element-animate\" data-animate-effect=\"fadeIn\">
                                            <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["petition"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["petition"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                                            <div class=\"blog-content-body\">
                                                <div class=\"post-meta\">
                                                    <span class=\"mr-2\">Publié le : ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["petition"], "date", [], "any", false, false, false, 27), "d-m-Y"), "html", null, true);
            echo " </span>
                                                </div>
                                                <h2>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["petition"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</h2>
                                            </div>
                                        </a>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['petition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                                ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["petitions"] ?? null));
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- END main-content -->
            </section>


        ";
    }

    public function getTemplateName()
    {
        return "petition/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 34,  167 => 29,  162 => 27,  154 => 24,  150 => 23,  147 => 22,  143 => 21,  131 => 13,  127 => 12,  120 => 9,  116 => 8,  71 => 44,  69 => 12,  66 => 11,  64 => 8,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "petition/index.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/templates/petition/index.html.twig");
    }
}
