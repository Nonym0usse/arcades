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

/* @EasyAdmin/default/field_image.html.twig */
class __TwigTemplate_305678791e0258e1c4d7752b9c18c624a5d4c2146d36c9499a713dceb01cf057 extends \Twig\Template
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
        // line 2
        if ((twig_test_empty(($context["value"] ?? null)) || (($context["value"] ?? null) == (twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "base_path", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "base_path", [], "any", false, false, false, 2), "")) : ("")), "/", "right") . "/")))) {
            // line 3
            echo "    ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "templates", [], "any", false, false, false, 3), "label_empty", [], "any", false, false, false, 3));
            echo "
";
        } else {
            // line 5
            echo "    <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
            echo twig_escape_filter($this->env, ($context["uuid"] ?? null), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
        <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["value"] ?? null)), "html", null, true);
            echo "\">
    </a>

    <div id=\"easyadmin-lightbox-";
            // line 9
            echo twig_escape_filter($this->env, ($context["uuid"] ?? null), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["value"] ?? null)), "html", null, true);
            echo "\">
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  56 => 9,  50 => 6,  45 => 5,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/field_image.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_image.html.twig");
    }
}
