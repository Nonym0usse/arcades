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

/* @KnpPaginator/Pagination/filtration.html.twig */
class __TwigTemplate_014dd89d5c8a067d30ce0bdc0a59c9e1564c97a44c4251fdcb5bf6356bc0a211 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/filtration.html.twig"));

        // line 1
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    ";
        // line 3
        if ((twig_length_filter($this->env, ($context["fields"] ?? null)) > 1)) {
            // line 4
            echo "        <select name=\"";
            echo twig_escape_filter($this->env, ($context["filterFieldName"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["label"]) {
                // line 6
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "\"";
                if ((($context["selectedField"] ?? null) == $context["field"])) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </select>
    ";
        } else {
            // line 10
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["filterFieldName"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter(($context["fields"] ?? null))), "html", null, true);
            echo "\" />
    ";
        }
        // line 12
        echo "
    <input type=\"text\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["selectedValue"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["filterValueName"] ?? null), "html", null, true);
        echo "\" />

    <button>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "button", [], "any", false, false, false, 15), "html", null, true);
        echo "</button>

</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 15,  87 => 13,  84 => 12,  76 => 10,  72 => 8,  57 => 6,  53 => 5,  48 => 4,  46 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/filtration.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/filtration.html.twig");
    }
}
