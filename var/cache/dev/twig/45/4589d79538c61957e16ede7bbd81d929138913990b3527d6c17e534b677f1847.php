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

/* @KnpPaginator/Pagination/materialize_pagination.html.twig */
class __TwigTemplate_b4d59ea70f069a80fa3ca6951a4ba46e272785b33cf9a3376f4d37cccd49f31f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/materialize_pagination.html.twig"));

        // line 13
        echo "
";
        // line 14
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 15
            echo "    <ul class=\"pagination\">
        ";
            // line 16
            if (((isset($context["first"]) || array_key_exists("first", $context)) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
                // line 17
                echo "            <li class=\"waves-effect\">
                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        ";
            } else {
                // line 23
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        ";
            }
            // line 29
            echo "
        ";
            // line 30
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 31
                echo "            <li class=\"waves-effect\">
                <a rel=\"prev\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        ";
            } else {
                // line 37
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        ";
            }
            // line 43
            echo "
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 45
                echo "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 46
                    echo "                <li class=\"waves-effect\">
                    <a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 50
                    echo "                <li class=\"active\">
                    <a href=\"#!\">";
                    // line 51
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 54
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
        ";
            // line 56
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 57
                echo "            <li class=\"waves-effect\">
                <a rel=\"next\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        ";
            } else {
                // line 63
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        ";
            }
            // line 69
            echo "
        ";
            // line 70
            if (((isset($context["last"]) || array_key_exists("last", $context)) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
                // line 71
                echo "            <li class=\"waves-effect\">
                <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        ";
            } else {
                // line 77
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        ";
            }
            // line 83
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/materialize_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 83,  169 => 77,  161 => 72,  158 => 71,  156 => 70,  153 => 69,  145 => 63,  137 => 58,  134 => 57,  132 => 56,  129 => 55,  123 => 54,  117 => 51,  114 => 50,  106 => 47,  103 => 46,  100 => 45,  96 => 44,  93 => 43,  85 => 37,  77 => 32,  74 => 31,  72 => 30,  69 => 29,  61 => 23,  53 => 18,  50 => 17,  48 => 16,  45 => 15,  43 => 14,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/materialize_pagination.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/materialize_pagination.html.twig");
    }
}
