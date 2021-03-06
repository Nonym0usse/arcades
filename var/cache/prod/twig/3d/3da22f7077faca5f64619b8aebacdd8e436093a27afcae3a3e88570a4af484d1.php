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

/* compte_rendus/index.html.twig */
class __TwigTemplate_f124ac77ef2ded2fbd2a6b93c654d4fc29e375b5d9d33f6ed8d1242f2f5ef649 extends \Twig\Template
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
            'footer' => [$this, 'block_footer'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "compte_rendus/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Comptes rendus de réunion - Association Arcades 13127 - Vitrolles";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <style>
        body {
            background-color: #eeeeee;
        }

        .h7 {
            font-size: 0.8rem;
        }

        .gedf-wrapper {
            padding-top: 100px;
            margin-top: 0.97rem;
        }

        @media (min-width: 992px) {
            .gedf-main {
                padding-left: 4rem;
                padding-right: 4rem;
            }
            .gedf-card {
                margin-bottom: 2.77rem;
            }
        }

        /**Reset Bootstrap*/
        .dropdown-toggle::after {
            content: none;
            display: none;
        }
    </style>

    ";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 40
        echo "
    ";
        // line 41
        $this->displayBlock('main', $context, $blocks);
        // line 79
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 37
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
    }

    // line 41
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "        ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "

        <div class=\"container gedf-wrapper\">
            <div class=\"row\">

                <div class=\"col-md-12 gedf-main\">
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 49
            echo "                        <div class=\"card gedf-card\">
                            <div class=\"card-header\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"ml-2\">
                                            <div class=\"h5 m-0\">Compte rendu</div>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                </div>

                            </div>
                            <div class=\"card-body\">
                                <a class=\"card-link\" href=\"#\" title=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 63), "html", null, true);
            echo "\">
                                    <h5 class=\"card-title\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 64), "html", null, true);
            echo "</h5>
                                </a>
                                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_compterendu", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" target=\"_blank\" title=\"Voir l'article\" class=\"btn btn-black\">Voir plus</a>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"#\" class=\"card-link\"><i class=\"fa fa-gittip\"></i> J'aime</a>
                                <a href=\"#\" class=\"card-link\"><i class=\"fa fa-comment\"></i> Commenter</a>
                                <a href=\"#\" class=\"card-link\"><i class=\"fa fa-mail-forward\"></i> Partager</a>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </div>
            </div>
        </div>
    ";
    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "compte_rendus/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 80,  182 => 79,  175 => 75,  160 => 66,  155 => 64,  151 => 63,  135 => 49,  131 => 48,  121 => 42,  117 => 41,  110 => 38,  106 => 37,  101 => 79,  99 => 41,  96 => 40,  94 => 37,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "compte_rendus/index.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/templates/compte_rendus/index.html.twig");
    }
}
