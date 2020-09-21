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

/* @EasyAdmin/default/field_association.html.twig */
class __TwigTemplate_018d5d494f1c1d8176b57166ad530d42a3607aa054ed495a2a0237d7843083d5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_association.html.twig"));

        // line 2
        if (twig_test_iterable(($context["value"] ?? null))) {
            // line 3
            echo "    ";
            if (("show" == ($context["view"] ?? null))) {
                // line 4
                echo "        ";
                if ((twig_length_filter($this->env, ($context["value"] ?? null)) > 0)) {
                    // line 5
                    echo "            <ul class=\"";
                    echo (((twig_length_filter($this->env, ($context["value"] ?? null)) < 2)) ? ("inline") : (""));
                    echo "\">
                ";
                    // line 6
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["value"] ?? null), 0, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "show", [], "any", false, false, false, 6), "max_results", [], "any", false, false, false, 6)));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 7
                        echo "                    <li>
                        ";
                        // line 8
                        if ((isset($context["link_parameters"]) || array_key_exists("link_parameters", $context))) {
                            // line 9
                            echo "                            ";
                            // line 10
                            echo "                            ";
                            $context["primary_key_value"] = ("" . twig_get_attribute($this->env, $this->source, $context["item"], twig_get_attribute($this->env, $this->source, ($context["link_parameters"] ?? null), "primary_key_name", [], "any", false, false, false, 10), [], "any", false, false, false, 10));
                            // line 11
                            echo "                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["link_parameters"] ?? null), ["id" => ($context["primary_key_value"] ?? null), "referer" => ""])), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "</a>
                        ";
                        } else {
                            // line 13
                            echo "                            ";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "
                        ";
                        }
                        // line 15
                        echo "                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "
                ";
                    // line 18
                    $context["_remaining_items"] = (twig_length_filter($this->env, ($context["value"] ?? null)) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "show", [], "any", false, false, false, 18), "max_results", [], "any", false, false, false, 18));
                    // line 19
                    echo "                ";
                    if ((($context["_remaining_items"] ?? null) > 0)) {
                        // line 20
                        echo "                    <li class=\"remaining-items\">(";
                        echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("show.remaining_items", ($context["_remaining_items"] ?? null), [], "EasyAdminBundle"), "html", null, true);
                        echo ")</li>
                ";
                    }
                    // line 22
                    echo "            </ul>
        ";
                } else {
                    // line 24
                    echo "            <div class=\"empty collection-empty\">
                ";
                    // line 25
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "templates", [], "any", false, false, false, 25), "label_empty", [], "any", false, false, false, 25));
                    echo "
            </div>
        ";
                }
                // line 28
                echo "    ";
            } elseif (("list" == ($context["view"] ?? null))) {
                // line 29
                echo "        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["value"] ?? null)), "html", null, true);
                echo "</span>
    ";
            }
        } elseif (        // line 32
(isset($context["link_parameters"]) || array_key_exists("link_parameters", $context))) {
            // line 33
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["link_parameters"] ?? null), ["referer" => ""])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->truncateText($this->env, ($context["value"] ?? null)), "html", null, true);
            echo "</a>
";
        } else {
            // line 35
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->truncateText($this->env, ($context["value"] ?? null)), "html", null, true);
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 35,  126 => 33,  124 => 32,  118 => 29,  115 => 28,  109 => 25,  106 => 24,  102 => 22,  96 => 20,  93 => 19,  91 => 18,  88 => 17,  81 => 15,  75 => 13,  67 => 11,  64 => 10,  62 => 9,  60 => 8,  57 => 7,  53 => 6,  48 => 5,  45 => 4,  42 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/field_association.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_association.html.twig");
    }
}
