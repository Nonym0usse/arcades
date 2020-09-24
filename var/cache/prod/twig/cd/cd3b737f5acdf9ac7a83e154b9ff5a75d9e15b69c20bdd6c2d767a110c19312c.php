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

/* blog/show.html.twig */
class __TwigTemplate_03957af5b64e52b14a628dbda165eacbd4f40f239106b3835ba64a51df196173 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " - Association Arcades 13127 - Vitrolles";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('main', $context, $blocks);
        // line 29
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 7
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
    }

    // line 11
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <h1 class=\"article-name\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["article"] ?? null), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "\" class=\"img-article\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <h6 style=\"margin: 0 auto; text-align: center; color: darkgrey; padding-top: 20px\">Publié le :  ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "dates", [], "any", false, false, false, 19), "d-m-Y"), "html", null, true);
        echo "</h6>
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <p class=\"paragraph\">
                ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "description", [], "any", false, false, false, 23);
        echo "
            </p>
            </div>
        </div>
    </div>
";
    }

    // line 29
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 30,  128 => 29,  118 => 23,  111 => 19,  104 => 17,  100 => 16,  92 => 12,  88 => 11,  81 => 8,  77 => 7,  72 => 29,  70 => 11,  67 => 10,  65 => 7,  62 => 6,  58 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/show.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/templates/blog/show.html.twig");
    }
}
